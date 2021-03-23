<form action="index.php?c=1&a=3" method="post" enctype="multipart/form-data" style="float:right">
     <p><input type="text" name="masp" placeholder="Nhập mã sản phẩm..." id="timkiem" required="required" />
        <input type="submit" id="button_timkiem" name="timkiem" value="Tìm Tài Khoản" />
        </p>
        </form>
<center><h1 style="color:#FF3300">Quản lý tài khoản</h1></center>
<?php
    $a = 1;
	if(isset($_GET["a"]))
		$a = $_GET["a"];
	
	switch ($a) {
		case 1:
		   include "pages/qlTaiKhoan/pDanhSach.php";
		   break;
		case 2:
		   include "pages/qlTaiKhoan/pCapNhat.php";
		   break;
		case 3:
		   include "pages/qlTaiKhoan/pTimKiem.php";
		   break;
		default:
		   include "pages/pError.php";
		   break;
    }
?>