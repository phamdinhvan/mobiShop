<?php
	session_start();
	include "lib/DataProvider.php";
	
	$_SESSION["path"] = $_SERVER["REQUEST_URI"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mobi Shop</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
	<header>
            <input type="checkbox">
            <div class="menu-icon">
                <div class="menu-line"></div>
            </div>
            <div class="menu-item">
                <a href="index.php">Trang chủ</a>
                <a href="">Thông Tin Nhóm</a>
                <a href="../Source/Login.html">Login</a>
				<a href="modules/xlDangXuat.php">Logout</a>
				<a href="../Source/createaccount.php">Create one!</a>
                <a href="Lienhe.php">Liên Hệ</a>
            </div>
            <div class="header-text">
				<h1>Mobi Shop</h1>
				<h2>
					<?php
				if(isset($_SESSION["MaTaiKhoan"]))
            {
                //Đã đăng nhập
                ?>
                    Hello, <?php echo $_SESSION["TenHienThi"];?>
                <?php   
			}
			?>
				</h2>
				<?php
				if(isset($_SESSION["MaTaiKhoan"]))
            {
                //Đã đăng nhập
                ?>
                    <a href="index.php?a=5">Giỏ Hàng</a>
                <?php   
			}
			?>
            </div>
        </header>
	<div class="loaihang">
		<nav>
		<?php   
        $sql = "SELECT * FROM loaisanpham WHERE BiXoa = 0";
        $result = DataProvider::ExecuteQuery($sql);
		if($result){
        while($row = mysqli_fetch_array($result))
        {
            ?>
                    <a href="index.php?a=3&id=<?php echo $row["MaLoaiSanPham"]; ?>">
                        <?php echo $row["TenLoaiSanPham"]; ?>
					</a>
            <?php
        }
		}
    ?>
		</nav>
	</div>
	<?php 
	include "modules/mSidebar.php";
	?>
	<section>
		<div id="content">
			<?php
				$a = 1;
				if(isset($_GET["a"]) == true)
					$a = $_GET["a"];
				switch($a)
				{
					case 1:
						include "pages/pIndex.php";
						break;
					case 2:
						include "pages/pSanPhamTheoHang.php";
						break;
					case 3:
						include "pages/pSanPhamTheoLoai.php";
						break;
					case 4:
						include "pages/pChiTiet.php";
						break;
					case 5:
						include "pages/GioHang/pIndex.php";
						break;
					case 6:
						include "pages/TaoTaiKhoan/pIndex.php";
						break;
					case 7:
						include "timkiem/timkiem.php";
						break;
					case 8:
						include "pages/pFilter.php";
					default:
						include "pages/pError.php";
						break;
				}
			?>
		</div>
		<?php include "modules/mFooter.php"; ?>
	</div>
		</div>
	</section>
</body>
</html>
	