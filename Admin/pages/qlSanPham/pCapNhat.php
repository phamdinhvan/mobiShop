<a href="#">
    <img src="images/avatar-trang.png" width="50" height="50"/>
</a>
<?php
    if(!isset($_GET["id"]))
		DataProvider::ChangeURL("index.php?c=404");
	
	$id = $_GET["id"];
	$sql = "SELECT s.MaSanPham, s.TenSanPham, s.HinhURL, s.GiaSanPham, s.NgayNhap, s.SoLuongTon, s.SoLuongBan, s.SoLuocXem, s.MoTa, s.BiXoa, l.TenLoaiSanPham, x.TenXuatXu, s.MaXuatXu,
s.MaHangSanXuat, h.TenHangSanXuat, s.MaLoaiSanPham FROM sanpham s, loaisanpham l, hangsanxuat h, xuatxu x WHERE s.MaLoaiSanPham = l.MaLoaiSanPham AND s.MaHangSanXuat
= h.MaHangSanXuat AND s.MaXuatXu = x.MaXuatXu AND s.MaSanPham = $id";
        $result = DataProvider::ExecuteQuery($sql);
		$row = mysqli_fetch_array($result);
?>
<form action="pages/qlSanPham/xlCapNhat.php" method="post" onsubmit="return Kiemtra();" enctype="multipart/form-data">
    <fieldset class="themSanPham">
	    <legend>Cập nhật thông tin sản phẩm</legend>
		<div id="chitietright">
		<div>
		    <span>Tên sản phẩm:</span>
			<input type="text" name="txtTen" id="txtTen" value="<?php echo $row["TenSanPham"]; ?>" />
			<i id="errTen"></i>
		</div>
		<div>
		    <span>Hãng sản xuất:</span>
			<select name="cmbHang">
			    <?php
				    $sql = "SELECT * FROM hangsanxuat WHERE BiXoa = 0";
					$result = DataProvider::ExecuteQuery($sql);
					while ($row1 = mysqli_fetch_array($result)){
						
			            ?>
                            <option value="<?php echo $row1["MaHangSanXuat"]; ?>" <?php if($row["MaHangSanXuat"] == $row1["MaHangSanXuat"])	echo "selected";?>><?php echo $row1["TenHangSanXuat"]; ?></option>
			            <?php
		            }
	            ?>
			</select>
		</div>
		<div>
		    <span>Xuất xứ:</span>
			<select name="cmbXuatXu">
			    <?php
				    $sql = "SELECT * FROM xuatxu";
					$result = DataProvider::ExecuteQuery($sql);
					while ($row1 = mysqli_fetch_array($result)){
						
			            ?>
                            <option value="<?php echo $row1["MaXuatXu"]; ?>" <?php if($row["MaXuatXu"] == $row1["MaXuatXu"])	echo "selected";?>><?php echo $row1["TenXuatXu"]; ?></option>
			            <?php
		            }
	            ?>
			</select>
		</div>
		<div>
			<span>Loại sản phẩm:</span>
			<select name="cmbLoai">
			    <?php
				    $sql = "SELECT * FROM loaisanpham WHERE BiXoa = 0";
					$result = DataProvider::ExecuteQuery($sql);
					while ($row1 = mysqli_fetch_array($result)){
						
			            ?>
                            <option value="<?php echo $row1["MaLoaiSanPham"]; ?>" <?php if($row["MaLoaiSanPham"] == $row1["MaLoaiSanPham"])	echo "selected";
?>><?php echo $row1["TenLoaiSanPham"]; ?></option>
			            <?php
		            }
	            ?>
			</select>
		</div>
		<div>
		    <span>Hinh</span>
			<input type="file" name="fHinh" /><br />
			<img src="../images/<?php echo $row["HinhURL"]; ?>" width="75" />
		</div>
		<div>
		    <span>Gía</span>
			<input type="text" name="txtGia" id="txtGia" value="<?php echo $row["GiaSanPham"]; ?>" />
			<i id="errGia"></i>
		</div>
		<div>
		    <span>Số lượng tồn</span>
			<input type="text" name="txtTon" id="txtTon" value="<?php echo $row["SoLuongTon"]; ?>" />
			<i id="errTon"></i>
		</div>
		<div>
		    <span>Số lượng bán</span>
			<input type="text" name="txtBan" id="txtBan" value="<?php echo $row["SoLuongBan"]; ?>" />
			<i id="errBan"></i>
		</div>
		<div>
		    <span>Mô tả</span>
			<textarea name="txtMoTa"><?php echo $row["MoTa"]; ?> </textarea>
			<i id="errTon"></i>
		</div>
		<div>
			<input type="hidden" name="id" value="<?php echo $row["MaSanPham"]; ?>" />
			<input type="submit" value="Cập nhật" />
		</div>
		</div>
	</fieldset>
</form>
<script type="text/javascript">
    finction KiemTra()
	{
		var ten = document.getElementById("txtTen");
		var err = document.getElementById("errTen");
		if(ten.value == "")
		{
			err.innerHTML = "Tên sản phẩm không được rỗng";
			ten.focus();
			return false;
		}
		else
			err.innerHTML = "";
		
		var ten = document.getElementById("txtGia");
		var err = document.getElementById("errGia");
		if(ten.value == "")
		{
			err.innerHTML = "Gía sản phẩm không được rỗng";
			ten.focus();
			return false;
		}
		else
			err.innerHTML = "";
		
		var ten = document.getElementById("txtTon");
		var err = document.getElementById("errTon");
		if(ten.value == "")
		{
			err.innerHTML = "Số lượng tồn không được rỗng";
			ten.focus();
			return false;
		}
		else
			err.innerHTML = "";
		
		return true;
	}
</script>