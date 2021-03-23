<h2>Các Sản Phẩm Tìm Được</h2>
<?php	
    if(isset($_GET["fl"]))
        $fl = $_GET["fl"];
    else    {
        DataProvider::ChangeURL("index.php?a=404");
    }
    switch($fl)
				{
					case "duoi5trieu":
						{
                            $sql = "SELECT * FROM sanpham WHERE BiXoa = 0 AND GiaSanPham <= 5000000";
                            $result = DataProvider::ExecuteQuery($sql);
                            while($row = mysqli_fetch_array($result))
                            {
                                ?>
                                    <div class="box">
                                        <img src="images/<?php echo $row["HinhURL"]; ?>" />
                                        <div class="pname"><?php echo $row["TenSanPham"]; ?></div>
                                        <div class="pprice">Giá: <?php echo $row["GiaSanPham"]; ?>đ</div>
                                        <div class="action">
                                            <a href="index.php?a=8&fl=<?php echo $row["MaLoaiSanPham"]; ?>&id=<?php echo $row["MaSanPham"]; ?>">Chi tiết</a>
                                        </div>
                                    </div>
                                <?php
                            }
                        }
						break;
                        case "5den10trieu":
                            {
                                $sql = "SELECT * FROM sanpham WHERE BiXoa = 0 AND GiaSanPham >= 5000000 AND GiaSanPham <= 10000000";
                                $result = DataProvider::ExecuteQuery($sql);
                                while($row = mysqli_fetch_array($result))
                                {
                                    ?>
                                        <div class="box">
                                            <img src="images/<?php echo $row["HinhURL"]; ?>" />
                                            <div class="pname"><?php echo $row["TenSanPham"]; ?></div>
                                            <div class="pprice">Giá: <?php echo $row["GiaSanPham"]; ?>đ</div>
                                            <div class="action">
                                                <a href="index.php?a=8&fl=<?php echo $row["MaLoaiSanPham"]; ?>&id=<?php echo $row["MaSanPham"]; ?>">Chi tiết</a>
                                            </div>
                                        </div>
                                    <?php
                                }
                            }
                            break;
                            case "10den15trieu":
                                {
                                    $sql = "SELECT * FROM sanpham WHERE BiXoa = 0 AND GiaSanPham >= 10000000 AND GiaSanPham <= 15000000";
                                    $result = DataProvider::ExecuteQuery($sql);
                                    while($row = mysqli_fetch_array($result))
                                    {
                                        ?>
                                            <div class="box">
                                                <img src="images/<?php echo $row["HinhURL"]; ?>" />
                                                <div class="pname"><?php echo $row["TenSanPham"]; ?></div>
                                                <div class="pprice">Giá: <?php echo $row["GiaSanPham"]; ?>đ</div>
                                                <div class="action">
                                                    <a href="index.php?a=8&fl=<?php echo $row["MaLoaiSanPham"]; ?>&id=<?php echo $row["MaSanPham"]; ?>">Chi tiết</a>
                                                </div>
                                            </div>
                                        <?php
                                    }
                                }
                                break;
                                case "15den20trieu":
                                    {
                                        $sql = "SELECT * FROM sanpham WHERE BiXoa = 0 AND GiaSanPham >= 15000000 AND GiaSanPham <= 20000000";
                                        $result = DataProvider::ExecuteQuery($sql);
                                        while($row = mysqli_fetch_array($result))
                                        {
                                            ?>
                                                <div class="box">
                                                    <img src="images/<?php echo $row["HinhURL"]; ?>" />
                                                    <div class="pname"><?php echo $row["TenSanPham"]; ?></div>
                                                    <div class="pprice">Giá: <?php echo $row["GiaSanPham"]; ?>đ</div>
                                                    <div class="action">
                                                        <a href="index.php?a=8&fl=<?php echo $row["MaLoaiSanPham"]; ?>&id=<?php echo $row["MaSanPham"]; ?>">Chi tiết</a>
                                                    </div>
                                                </div>
                                            <?php
                                        }
                                    }
                                    break;
                                    case "tren20trieu":
                                        {
                                            $sql = "SELECT * FROM sanpham WHERE BiXoa = 0 AND GiaSanPham >= 20000000";
                                            $result = DataProvider::ExecuteQuery($sql);
                                            while($row = mysqli_fetch_array($result))
                                            {
                                                ?>
                                                    <div class="box">
                                                        <img src="images/<?php echo $row["HinhURL"]; ?>" />
                                                        <div class="pname"><?php echo $row["TenSanPham"]; ?></div>
                                                        <div class="pprice">Giá: <?php echo $row["GiaSanPham"]; ?>đ</div>
                                                        <div class="action">
                                                            <a href="index.php?a=8&fl=<?php echo $row["MaLoaiSanPham"]; ?>&id=<?php echo $row["MaSanPham"]; ?>">Chi tiết</a>
                                                        </div>
                                                    </div>
                                                <?php
                                            }
                                        }
                                        break;
					default:
						break;
                    }
?>