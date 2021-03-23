<form action="index.php?c=5&a=3" method="post" enctype="multipart/form-data" style="float:right">
     <p><input type="text" name="masp" placeholder="Nhập mã sản phẩm..." id="timkiem" required="required" />
        <input type="submit" id="button_timkiem" name="timkiem" value="Tìm Hóa Đơn" />
        </p>
        </form>
<center><h1 style="color:#FF3300">Quản lý Đơn đặt hàng</h1></center>
<?php
	$a = 1;
	if(isset($_GET["a"]))
		$a = $_GET["a"];
	switch($a){
		case 1:
			include "pages/qlDonDatHang/pDanhSach.php";
			break;
		case 2:
			include "pages/qlDonDatHang/pChiTietDonDatHang.php";
			break;
		case 3:
			include "pages/qlDonDatHang/pTimKiem.php";
			break;
		default:
			include "pages/pError.php";
			break;
	}
?>