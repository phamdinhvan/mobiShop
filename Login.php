<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <title>Form -Login</title>
</head>
<body>
<div class="container">
<form name="frmLogin" action="modules/xlDangNhap.php" method="post">
        Tài khoản: <input name="txtUS" type="text" id="txtUS" size="12" maxlength="20" width="15">
        Mật khẩu: <input name="txtPS" type="password" id="txtPS" size="12" maxlength="20" width="15">
        <input type="submit" value="Đăng nhập">
        <input type="button" value="Đăng ký" onclick="ChuyenTrangDangKy()" />
    </form>
</div>
<script>
    function ChuyenTrangDangKy() {
                            location = "index.php?a=6";
                        }
</script>                                        
</body>
</html>
                                        