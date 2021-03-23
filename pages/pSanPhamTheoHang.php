<h2>Sản phẩm theo hãng</h2>
<?php	
    if(isset($_GET["id"]))
        $id = $_GET["id"];
    else    
        DataProvider::ChangeURL("index.php?a=404");

    $sql = "SELECT * FROM sanpham WHERE BiXoa = 0 AND MaHangSanXuat = $id";
    $result = DataProvider::ExecuteQuery($sql);
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
?>
	