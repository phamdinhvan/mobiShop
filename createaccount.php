<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body class="body-create">
    <div class="container-create">
        <h1>Tạo Tài Khoản</h1>
        <form class="form-first" action="pages/TaotaiKhoan/xlTaoTaiKhoan.php" method="post"
onsubmit="return KiemTra()">
            <input type="text" id="name" name="name" placeholder="Tên hiển thị">
            <span class="err" id="eNAME"></span>
            <input type="text" id="add" name="add" placeholder="Địa chỉ">
            <span class="err" id="eADD"></span>
            <input type="text" id="tel" name="tel" placeholder="Số điện thoại">
            <span class="err" id="eTEL"></span>
            <input type="text" id="mail" name="mail" placeholder="Địa chỉ Email">
            <span class="err" id="eMail"></span>
            <input type="text" id="us" name="us" placeholder="Tên tài khoản">
            <span class="err" id="eUS"></span>
            <input type="password" id="ps" name="ps" placeholder="Mật khẩu">
            <span class="err" id="ePS"></span>
            <input type="password" id="rps" placeholder="Nhập lại mật khẩu" />
            <span class="err" id="eRPS"></span>
            <button type="submit">Create!</button>
        </form>
    </div>
<script>
    function KiemTra()
	{
        var co = true;

        var control = document.getElementById('us');
        var err = document.getElementById('eUS');
        if(control.value == "")
        {
            co = false;
            err.innerHTML = "Tên đăng nhập không được rỗng";
        }
        else
        {
            err.innerHTML = "";
        }

        control = document.getElementById('ps');
        err = document.getElementById('ePS');
        if(control.value == "")
        {
            co = false;
            err.innerHTML = "Mật khẩu không được rỗng";
        }
        else
        {
            err.innerHTML = "";
        }

        control1 = document.getElementById('rps');
        var err = document.getElementById('eRPS');
        if(control.value != control1.value)
        {
            co = false;
            err.innerHTML = "Nhập lại mật khẩu không trùng";
        }
        else
        {
            err.innerHTML = "";
        }

        control = document.getElementById('name');
        var err = document.getElementById('eNAME');
        if(control.value == "")
        {
            co = false;
            err.innerHTML = "Tên hiển thị không được rỗng";
        }
        else
        {
            err.innerHTML = "";
        }

        control = document.getElementById('add');
        var err = document.getElementById('eADD');
        if(control.value == "")
        {
            co = false;
            err.innerHTML = "Địa chỉ không được rỗng";
        }
        else
        {
            err.innerHTML = "";
        }

        control = document.getElementById('tel');
        err = document.getElementById('eTEL');
        if(control.value == "")
        {
            co = false;
            err.innerHTML = "Số điện thoại không được rỗng";
        }
        else
        {
            err.innerHTML = "";
        }

        control = document.getElementById('mail');
        err = document.getElementById('eMail');
        if(control.value == "")
        {
            co = false;
            err.innerHTML = "Email không được rỗng";
        }
        else
        {
            err.innerHTML = "";
        }
        return co;
    }
</script>

</body>