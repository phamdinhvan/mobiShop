<a href="#">
    <img src="images/avatar-trang.png" width="50" height="50"/>
</a>
<form action="pages/qlLoai/xlThem.php" method="get" onsubmit="return KiemTra();">
    <fieldset>
	    <legend>Thêm mới loại sản phẩm</legend>
		<div>
		    <span>Tên loại sản phẩm:</span>
			<input type="text" name="txtTen" id="txtTen" />
			<input type="submit" value="Thêm mới" />
		</div>
		<div id="error"></div>
	</fieldset>
</form>
<script type="text/javascript">
    function KiemTra()
	{
		var ten = document.getElementById("txtTen");
		var err = document.getElementById("error");
		if(ten.value == "")
		{
			err.innerHTML = "Tên loại không được rỗng";
			ten.focus();
			return false;
		}
		else
			err.innerHTML = "";
		
		return true;
	}
</script>