
<?php
	if(isset($_POST['timkiem'])){
	$search=$_POST['masp'];
	echo 'Mã tìm kiếm :<strong>'.' '.$search.'</strong><br/>';
	$sql = "SELECT d.MaDonDatHang, d.NgayLap, d.MaTinhTrang, t.TenHienThi, tt.TenTinhTrang FROM dondathang d, taikhoan t, tinhtrang tt WHERE d.MaTaiKhoan = t.MaTaiKhoan AND d.MaTinhTrang = tt.MaTinhTrang and  MaDonDatHang LIKE'%".$search."%'";
	$result = DataProvider::ExecuteQuery($sql);
	$count=mysqli_num_rows($result);
?>
<h3>Kết quả tìm kiếm</h3>
<center><?php
	if($count>0){
?>

<table cellspacing="0" border="1">
    <tr>
		<th width="100">STT</th>
		<th width="150">Mã đơn đặt hàng</th>
		<th width="100">Ngày lập</th>
		<th width="200">Khách hàng</th>
		<th width="100">Tình trạng</th>
	</tr>
  <?php
  $i=1;
  while($row=mysqli_fetch_array($result)){

  ?>
  <tr class="<?php echo $c; ?>">
				<td><?php echo $i++; ?></td>
				<td><?php echo $row["MaDonDatHang"]; ?></td>
				<td><?php echo $row["NgayLap"]; ?></td>
				<td><?php echo $row["TenHienThi"]; ?></td>
				<td><?php echo $row["TenTinhTrang"]; ?></td>
				
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
