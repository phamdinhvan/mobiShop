
<?php
	if(isset($_POST['timkiem'])){
	$search=$_POST['masp'];
	echo 'Mã tìm kiếm :<strong>'.' '.$search.'</strong><br/>';
	$sql = "SELECT * FROM hangsanxuat where TenHangSanXuat LIKE'%".$search."%'";
	$result = DataProvider::ExecuteQuery($sql);
	$count=mysqli_num_rows($result);
?>
<h3>Kết quả tìm kiếm</h3>
<center><?php
	if($count>0){
?>

<table cellspacing="0" border="1">
    <tr style="background:#006699">
	    <th width="100">STT</th>
		<th width="300">Tên hãng sản xuất</th>
		<th width="100">Tình trạng</th>
		<th width="200">Thao tác</th>
	</tr>
  <?php
  $i=1;
  while($row=mysqli_fetch_array($result)){

  ?>
  <tr>
				    <td><?php echo $i++; ?></td>
					<td><?php echo $row["TenHangSanXuat"]; ?></td>
					<td>
					    <?php
						    if($row["BiXoa"] == 1)
								echo "<img src='images/locked.png' />";
							else
								echo "<img src='images/active.png' />";
						?>
					</td>
					<td>
					    <a href="pages/qlHang/xlKhoa.php?id=<?php echo $row["MaHangSanXuat"] ?>">
						    <img src="images/lock.png." />
						</a>
						<a href="index.php?c=4&a=2&id=<?php echo $row["MaHangSanXuat"] ?>">
						    <img src="images/edit.png." />
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
