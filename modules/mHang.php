<dl>
    <dt class="Hang">Hãng sản xuất</dt>
    <?php   
        $sql = "SELECT * FROM hangsanxuat WHERE BiXoa = 0";
        $result = DataProvider::ExecuteQuery($sql);
        while($row = mysqli_fetch_array($result))
        {
            ?>
                <dd>
                    <a href="index.php?a=2&id=<?php echo $row["MaHangSanXuat"]; ?>" class="mHang">
                        <?php echo $row["TenHangSanXuat"]; ?>
					</a>
                </dd>
            <?php
        }
    ?>
</dl>