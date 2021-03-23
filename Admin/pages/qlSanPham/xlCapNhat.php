<?php
    include "../../../lib/DataProvider.php";

    if(isset($_POST["id"]))
    {
       $id = $_POST["id"];
	   $ten = $_POST["txtTen"];
	   $Hang = $_POST["cmbHang"];
	   $XuatXu = $_POST["cmbXuatXu"];
	   $Loai = $_POST["cmbLoai"];
	   $Hinh = $_FILES['fHinh']['name'];
	   $Gia = $_POST["txtGia"];
	   $SLT = $_POST["txtTon"];
	   $SLB = $_POST["txtBan"];
	   $MoTa = $_POST["txtMoTa"];
       $sql = "UPDATE sanpham SET TenSanPham = '$ten', MaHangSanXuat = '$Hang', MaXuatXu = '$XuatXu', MaLoaiSanPham = '$Loai', HinhURL = '$Hinh', GiaSanPham ='$Gia', SoLuongTon = '$SLT', SoLuongBan = '$SLB', MoTa ='$MoTa' WHERE MaSanPham = $id";
	   
       DataProvider::ExecuteQuery($sql);
    }

    DataProvider::ChangeURL("../../index.php?c=2");

?>