<?php   
    session_start();
    include "../../lib/DataProvider.php";
    include "../../lib/ShoppingCart.php";

    if(isset($_SESSION["GioHang"]))
    {
        $gioHang = unserialize($_SESSION["GioHang"]);
        $maTaiKhoan = $_SESSION["MaTaiKhoan"];

        date_default_timezone_get("Asia/Ho_Chi_Minh");
        $ngayLap = date("Y-m-d H:i:s");
        $ngayLapTam = date("Y-m-d");
        $maTinhTrang = 1;
        $tongGia = $_SESSION["TongGia"];

        //Xử lí tạo mã đơn đặt hàng với ddmmyyxxx
        $sql = "SELECT MaDonDatHang FROM dondathang WHERE NgayLap like '$ngayLapTam%' ORDER BY MaDonDatHang DESC LIMIT 1";
        $result = DataProvider::ExecuteQuery($sql);
        $row = mysqli_fetch_array($result);
        $r = "081012003";
        $sttMaDonDatHang = 0;
        if($row != null)
        {
            $sttMaDonDatHang = substr($row["MaDonDatHang"], 6, 3);
        }
        $sttMaDonDatHang += 1;
        $sttMaDonDatHang = sprintf("%03s",$sttMaDonDatHang);

        $maDonDatHang = date("d").date("m").substr(date("Y"),2,2).$sttMaDonDatHang;
        
        //Tạo đơn đặt hàng mới và lưu xướng CSDL bằng DonDatHang 
        $sql = "INSERT INTO dondathang(MaDonDatHang, NgayLap, TongThanhTien, MaTaiKhoan, MaTinhTrang) VALUE ('$maDonDatHang',
        '$ngayLap', $tongGia, $maTaiKhoan, $maTinhTrang)";
        DataProvider::ExecuteQuery($sql);

        //------------------------------------------
        //xử lí thêm chi tiết đơn hàng
        $soLuongSanPham = count($gioHang->listProduct);
        for($i = 0;$i < $soLuongSanPham;$i++)
        {
            $id = $gioHang->listProduct[$i]->id;
            $sl = $gioHang->listProduct[$sl]->num;

            //2.1 Lấy thông tin sản phẩm: Giá sản phẩm, số lượng tồn
            $sql = "SELECT GiaSanPham, SoluongTon FROM sanpham WHERE MaSanPham = $id";
            $result = DataProvider::ExecuteQuery($sql);
            $row = mysqli_fetch_array($result);

            $soLuongTonHienTai = $row["SoLuongTon"];
            $giaSanPham = $row["GiaSanPham"];

            $sttMaDonDatHang = sprintf("%02s",$i);
            $maChiTietDonDatHang = $maDonDatHang.$sstChiTietDonDatHang;

            //2.2 Thêm 1 dòng mới vào bảng ChiTietDonDatHang
            $sql = "INSERT INTO chitietdondathang(MaChiTietDonDatHang, SoLuong, GiaBan, MaDonDatHang, MaSanPham) VALUE 
            ('$maChiTietDonDatHang', $sl, $giaSanPham, '$maDonDatHang', $id)";

            //2.3 Update lại số lượng tồn của bảng SanPham
            $soLuongTonMoi = $soLuongTonHienTai - $sl;

            $sql = "UPDATE sanpham SET SoLuongTon = $soLuongTonMoi WHERE MaSanPham = $id";
            DataProvider::ExecuteQuery($sql);
        }

        unset($_SESSION["Giohang"]);
        DataProvider::ChangeURL("../../index.php?a=5&sub=2");
    }
    else
        DataProvider::ChangeURL("../../index.php?a=404");
?>