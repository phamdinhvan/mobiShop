<div id="header">
    <a href="index.php">
        <img src="img/logo1.jpg" width="100%" height="90">    
    </a>
    <div id="login_nav">
        <?php   
            if(isset($_SESSION["MaTaiKhoan"]))
            {
                //Đã đăng nhập
                ?>
                    Hello, <?php echo $_SESSION["TenHienThi"]; ?>
                    <a href="modules/xlDangXuat.php">Đăng xuất</a>
                    <a href="index.php?a=5">
                        <img src="img/shopping_cart.png" height="20" />
                    </a>
                <?php
                
            }
            else
            {
               // Chưa đăng nhập
                ?>
                    <form name="frmLogin" action="modules/xlDangNhap.php" method="post" onsubmit="return KiemTraDangNhap()">
                        Tài khoản: <input name="txtUS" type="text" id="txtUS" size="12" maxlength="20" width="15">
                        Mật khẩu: <input name="txtPS" type="password" id="txtPS" size="12" maxlength="20" width="15">
                        <input type="submit" value="Đăng nhập">
                        <input type="button" value="Đăng ký" onclick="ChuyenTrangDangKy()" />
                    </form>
                    <script type="text/javascript">
                        function ChuyenTrangDangKy() {
                            location = "index.php?a=6";
                        }
                    </script>
                <?php
             }
        ?>
    </div>
</div>