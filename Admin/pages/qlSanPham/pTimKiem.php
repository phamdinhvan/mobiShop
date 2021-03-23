
<?php
	if(isset($_POST['timkiem'])){
	$search=$_POST['masp'];
	echo 'Mã tìm kiếm :<strong>'.' '.$search.'</strong><br/>';
	$sql ="SELECT s.MaSanPham, s.TenSanPham, s.HinhURL, s.GiaSanPham, s.NgayNhap, s.SoLuongTon, s.SoLuongBan, s.SoLuocXem, s.MoTa, s.BiXoa, l.TenLoaiSanPham, h.TenHangSanXuat, x.TenXuatXu FROM 
	sanpham s, loaisanpham l, xuatxu x, hangsanxuat h WHERE s.MaLoaiSanPham = l.MaLoaiSanPham AND s.MaXuatXu = x.MaXuatXu AND s.MaHangSanXuat = h.MaHangSanXuat and  TenSanPham LIKE'%".$search."%'";
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
		<th width="250">Tên sản phẩm</th>
		<th width="100">Hình</th>
		<th width="100">Gía</th>
		<th width="100">Ngày nhập</th>
		<th width="100">Số lượng tồn</th>
		<th width="100">Số lượng bán</th>
		<th width="100">Số lược xem</th>
		<th width="100">Loại</th>
		<th width="100">Xuất xứ</th>
		<th width="100">Hãng</th>
		<th width="100">Mô tả</th>
		<th width="100">Trạng thái</th>
		<th width="200">Thao tác</th>
	</tr>
  <?php
  $i=1;
  while($row=mysqli_fetch_array($result)){

  ?>
  <tr>
				    <td><?php echo $i++; ?></td>
					<td><?php echo $row["TenSanPham"]; ?></td>
					<td>
					    <img src="../images/<?php echo $row["HinhURL"]; ?>" height="50" />
					</td>
					<td><?php echo $row["GiaSanPham"]; ?></td>
					<td><?php echo $row["NgayNhap"]; ?></td>
					<td><?php echo $row["SoLuongTon"]; ?></td>
					<td><?php echo $row["SoLuongBan"]; ?></td>
					<td><?php echo $row["SoLuocXem"]; ?></td>
					<td><?php echo $row["TenLoaiSanPham"]; ?></td>
					<td><?php echo $row["TenXuatXu"]; ?></td>
					<td><?php echo $row["TenHangSanXuat"]; ?></td>
					<td>
					    <?php
						    if(strlen($row["MoTa"]) > 20)
						        $sMoTa = substr($row["MoTa"], 0, 20)."...";
							else
								$sMoTa = $row["MoTa"];
							echo $sMoTa;
						?>
						<div class="fullMoTa">
						    <?php echo $row["MoTa"]; ?>
						</div>
					</td>
					<td>
					    <?php
						    if($row["BiXoa"] == 1)
								echo "<img src='images/locked.png' />";
							else
								echo "<img src='images/active.png' />";
						?>
					</td>
					<td>
					    <a href="pages/qlSanPham/xlKhoa.php?id=<?php echo $row["MaSanPham"] ?>">
						    <img src="images/lock.png" />
						</a>
						<a href="index.php?c=2&a=2&id=<?php echo $row["MaSanPham"] ?>">
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
