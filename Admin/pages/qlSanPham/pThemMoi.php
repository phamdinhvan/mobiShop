<a href="#">
    <img src="images/avatar-trang.png" width="50" height="50"/>
</a>
<form action="pages/qlSanPham/xlThem.php" method="post" onsubmit="return KiemTra();" enctype="multipart/form-data">
    <fieldset class="themSanPham">
	    <legend>Thêm sản phẩm mới</legend>
		<div id="chitietright">
		<div>
		    <span>Tên sản phẩm mới:</span>
			<input type="text" name="txtTen" id="txtTen" />
			<i id="errTen"></i>
		</div>
		<div>
		    <span>Hãng sản xuất</span>
			<select name="cmbHang">
			    <?php
				    $sql = "SELECT * FROM hangsanxuat WHERE BiXoa = 0";
					$result = DataProvider::ExecuteQuery($sql);
					while($row = mysqli_fetch_array($result)){
					    ?>
						    <option value=<?php echo $row["MaHangSanXuat"]; ?>><?php echo $row["TenHangSanXuat"]; ?></option>
						<?php
					}
				?>
            </select>
        </div>
		<div>
		    <span>Nơi xuất xứ</span>
			<select name="cmbXuatXu">
			    <?php
				    $sql = "SELECT * FROM xuatxu";
					$result = DataProvider::ExecuteQuery($sql);
					while($row = mysqli_fetch_array($result)){
					    ?>
						    <option value=<?php echo $row["MaXuatXu"]; ?>><?php echo $row["TenXuatXu"]; ?></option>
						<?php
					}
				?>
            </select>
        </div>
        <div>
            <span>Loại Sản Phẩm</span>
            <select name="cmbLoai">
                <?php
                    $sql = "SELECT * FROM loaisanpham WHERE BiXoa = 0";
					$result = DataProvider::ExecuteQuery($sql);
					while($row = mysqli_fetch_array($result)){
						?>
						    <option value="<?php echo $row["MaLoaiSanPham"]; ?>"><?php echo $row["TenLoaiSanPham"]; ?></option>
						<?php
					}
				?>
			</select>
		</div>
		<div>
		    <span>Hinh</span>
			<input type="file" name="fHinh" />
		</div>
		<div>
		    <span>Gía</span>
		    <input type="text" name="txtGia" id="txtGia" />
			<i id="errGia"></i>
		</div>
		<div>
		    <span>Số lượng tồn</span>
			<input type="text" name="txtTon" id="txtTon" />
			<i id="errTon"></i>
		</div>
		<div>
		    <span>Mô tả</span>
			<textarea name="txtMoTa"></textarea>
		</div>
		
		<div>
			<input type="submit" value="Thêm mới" />
		<div>
		</div>
	</fieldset>
</form>
<script type="text/javascript">
    function KiemTra()
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
		
		return true;
	}
</script>						