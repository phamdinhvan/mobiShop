
<?php
	if(isset($_POST['timkiem'])){
	$search=$_POST['masp'];
	echo 'Mã tìm kiếm :<strong>'.' '.$search.'</strong><br/>';
	$sql = "SELECT t.MaTaiKhoan, t.TenDangNhap, t.TenHienThi, t.DiaChi, t.DienThoai, t.Email, t.BiXoa,
	l.TenLoaiTaiKhoan FROM taikhoan t, loaitaikhoan l WHERE t.MaLoaiTaiKhoan = l.MaLoaiTaiKhoan and  TenDangNhap LIKE'%".$search."%'";
	$result = DataProvider::ExecuteQuery($sql);
	$count=mysqli_num_rows($result);
?>
<h3>Kết quả tìm kiếm</h3>
<center><?php
	if($count>0){
?>

<table cellspacing="0" border="1">
    <tr style="background:#006699">
	    <th width="100">Mã tài khoản</th>
		<th width="200">Tên đăng nhập</th>
		<th width="200">Tên hiển thị</th>
		<th width="200">Địa chỉ</th>
		<th width="150">Điện thoại</th>
		<th width="200">Email</th>
		<th width="75">Tình trạng</th>
		<th width="150">Loại tài khoản</th>
		<th width="100">Thao tác</th>
	</tr>
  <?php
  $i=1;
  while($row=mysqli_fetch_array($result)){

  ?>
  <tr>
    <td><?php echo $row["MaTaiKhoan"]; ?></td>
				   <td><?php echo $row["TenDangNhap"]; ?></td>
				   <td><?php echo $row["TenHienThi"]; ?></td>
				   <td><?php echo $row["DiaChi"]; ?></td>
				   <td><?php echo $row["DienThoai"]; ?></td>
				   <td><?php echo $row["Email"]; ?></td>
				   <td>
				       <?php
					        if($row["BiXoa"] == 1)
							    echo "<img src='images/locked.png' />";
							else
								echo "<img src='images/active.png' />";
					   ?>
					 </td>
					 <td><?php echo $row["TenLoaiTaiKhoan"]; ?></td>
					 <td>
					     <a href="pages/qlTaiKhoan/xlKhoa.php?id=<?php echo $row["MaTaiKhoan"] ?>">
						     <img src="images/lock.png" />
						 </a>
						 <a href="index.php?c=1&a=2&id=<?php echo $row["MaTaiKhoan"] ?>">
						     <img src="images/edit.png" />
						 </a>
				     </td>
  </tr>
  <?php
  $i++;
  }
	}else{
	  echo 'Không tìm thấy kết quả';
  }
  }
  ?>
</table></center>		  
