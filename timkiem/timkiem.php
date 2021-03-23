<?php
	if(isset($_POST['timkiem'])){
	$search=$_POST['masp'];
	echo 'Mã tìm kiếm :<strong>'.' '.$search.'</strong><br/>';
    $sql = "select * from sanpham where TenSanPham LIKE'%".$search."%'";
	$result = DataProvider::ExecuteQuery($sql);
	$count=mysqli_num_rows($result);
?>
<h2>Kết quả tìm kiếm</h2>
<?php
	if($count > 0)
	{
        while($row = mysqli_fetch_array($result))
        {
?>

<div class="box">
                <img src="images/<?php echo $row["HinhURL"]; ?>" />
                <div class="pname"><?php echo $row["TenSanPham"]; ?></div>
                <div class="pprice">Giá: <?php echo $row["GiaSanPham"]; ?>đ</div>
                <div class="action">
                    <a href="index.php?a=4&idloaisp=<?php echo $row["MaLoaiSanPham"]; ?>&id=<?php echo $row["MaSanPham"]; ?>">Chi tiết</a>
                </div>
            </div>
  <?php
            }
	}}else{
	  echo 'Không tìm thấy kết quả';
  }
?>