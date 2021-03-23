<dl>
    <dt>Loại sản phẩm</dt>
    <?php   
        $sql = "SELECT * FROM loaisanpham WHERE BiXoa = 0";
        $result = DataProvider::ExecuteQuery($sql);
		if($result){
        while($row = mysqli_fetch_array($result))
        {
            ?>
                <dd>
                    <a href="index.php?a=3&id=<?php echo $row["MaLoaiSanPham"]; ?>">
                        <?php echo $row["TenLoaiSanPham"]; ?>
					</a>
                </dd>
            <?php
        }
		}
    ?>
</dl>