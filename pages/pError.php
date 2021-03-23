
<?php   
    if(isset($_GET["id"]))
    {
        switch ($_GET["id"]) {
            case 1:
                echo "Tên đăng nhập và mật khẩu không tồn tại";
            break;
            case 2:
                echo "Tên đăng nhập đã tồn tại";
            break;
        }
    }
?>