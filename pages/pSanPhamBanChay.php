<h2>Các sản phẩm bán chạy nhất</h2>
<?php	
    $sql = "SELECT * FROM sanpham WHERE BiXoa = 0 ORDER BY SoLuongBan DESC LIMIT 0, 10";
    $result = DataProvider::ExecuteQuery($sql);
	if($result){
    while($row = mysqli_fetch_array($result))
    {
        ?>
            <div class="box" href="index.php?a=4&idloaisp=<?php echo $row["MaLoaiSanPham"]; ?>
					&id=<?php echo $row["MaSanPham"]; ?>">
                <img src="images/<?php echo $row["HinhURL"]; ?>" />
                <div class="pname"><?php echo $row["TenSanPham"]; ?></div>
                <div class="pprice">Giá: <?php echo $row["GiaSanPham"]; ?>đ</div>
                <div class="action">
                    <a href="index.php?a=4&idloaisp=<?php echo $row["MaLoaiSanPham"]; ?>
					&id=<?php echo $row["MaSanPham"]; ?>">Chi tiết</a>
                </div>
    </div>
        <?php
    }
	}
?>
	