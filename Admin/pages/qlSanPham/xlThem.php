<?php
    include "../../../lib/DataProvider.php";

    if(isset($_POST["txtTen"]))
    {
	   $ten = $_POST["txtTen"];
	   $Hang = $_POST["cmbHang"];
	   $XuatXu = $_POST["cmbXuatXu"];
	   $Loai = $_POST["cmbLoai"];
	   $Hinh = $_FILES["fHinh"]['name'];
	   $Gia = $_POST["txtGia"];
	   $SL = $_POST["txtTon"];
	   $MoTa = $_POST["txtMoTa"];
       
	   $sql ="INSERT INTO sanpham(TenSanPham, MaHangSanXuat, MaLoaiSanPham, MaXuatXu, HinhURL, GiaSanPham, SoLuongTon, MoTa, BiXoa) VALUES ('$ten','$Hang','$Loai','$XuatXu','$Hinh','$Gia','$SL','$MoTa',0)";
	   DataProvider::ExecuteQuery($sql);
    }
    DataProvider::ChangeURL("../../index.php?c=2");
?>