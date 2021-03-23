<h2>Thông tin chi tiết sản phẩm</h2>
<?php	
    if(isset($_GET["id"]))
        $id = $_GET["id"];
    else    
       DataProvider::ChangeURL("index.php?a=404");

    $sql = "select * from sanpham,loaisanpham,hangsanxuat,xuatxu 
where sanpham.MaLoaiSanPham=loaisanpham.MaLoaiSanPham AND sanpham.MaXuatXu = xuatxu.MaXuatXu and sanpham.MaHangSanXuat=hangsanxuat.MaHangSanXuat and sanpham.MaSanPham = $id";
    $result = DataProvider::ExecuteQuery($sql);
    $row = mysqli_fetch_array($result);
	$sql1 = "SELECT s1.HinhURL s1.TenSanPham s1.MaSanPham s1.GiaSanPham s1.MaLoaiSanPham FROM sanpham s1 loaisanpham l1 WHERE BiXoa = 0 ORDER BY TenLoaiSanPham DESC LIMIT 0, 5";
    $result1 = DataProvider::ExecuteQuery($sql1);
    if($row == null)
       DataProvider::ChangeURL("index.php?a=404");
?>
<div id="chitietsp">
    <div class="chitietright">
		<div>
			<img src="images/<?php echo $row["HinhURL"]; ?> ">
		</div>
        <div>
            <span class="label">Tên sản phẩm:</span>
            <span class="productname"><?php echo $row["TenSanPham"]; ?></span>
        </div>
        <div>
            <span class="label">Giá:</span>
            <span class="price"><?php echo $row["GiaSanPham"]; ?> đ</span>
        </div>
        <div>
            <span class="label">Hãng sản xuất:</span>
            <span class="factory"><?php echo $row["TenHangSanXuat"]; ?></span>
        </div>
		<div>
            <span class="label">Xuất xứ:</span>
            <span class="factory"><?php echo $row["TenXuatXu"]; ?></span>
        </div>
        <div>
            <span class="label">Loại sản phẩm:</span>
            <span class="data"><?php echo $row["TenLoaiSanPham"]; ?></span>
        </div>
        <div>
            <span class="label">Số lượng:</span>
            <span class="data"><?php echo $row["SoLuongTon"]; ?> sản phẩm</span>
        </div>
        <div>
            <span class="label">Số lược xem:</span>
            <span class="data"><?php echo $row["SoLuocXem"] + 1; ?> lược</span>
        </div>
		 <div>
            <span class="label">Số lượng bán:</span>
            <span class="data"><?php echo $row["SoLuongBan"]; ?> cái</span>
        </div>
        <div>
            <span class="label">Mô tả:</span>
            <span class="data"><?php echo $row["MoTa"]; ?></span>
        </div>
		
		<div class="GioHang">
            <?php   
                if(isset($_SESSION["MaTaiKhoan"]))
                {
                    ?>
                        <a href="index.php?a=5&id=<?php echo $row["MaSanPham"] ?>" class="GioHang">
                            <img src="img/shopping_cart.png" width="32">
                        </a>
                    <?php
                }
            ?>
        </div>
		<h2>Sản phẩm Cùng Loại</h2>
<?php	
    $sql = "SELECT * FROM sanpham WHERE BiXoa = 0 and MaLoaiSanPham = '$_GET[idloaisp]' and MaSanPham <> '$_GET[id]' ORDER BY NgayNhap DESC LIMIT 0, 5";
    $result = DataProvider::ExecuteQuery($sql);
	if($result){
    while($row = mysqli_fetch_array($result))
    {
?> 
<div class="box">
            
                <img src="images/<?php echo $row["HinhURL"]; ?>"/>
                <div class="pname"><?php echo $row["TenSanPham"]; ?></div>
                <div class="pprice">Giá: <?php echo $row["GiaSanPham"]; ?>đ</div>
                <div class="action">
                    <a href="index.php?a=4&idloaisp=<?php echo $row["MaLoaiSanPham"]; ?>&id=<?php echo $row["MaSanPham"]; ?>">Chi tiết</a>
                </div>
            </div>
        <?php
    }
	}
?>
    </div>
	
</div>
<!-- <?php   
    //cập nhật lại số lược xem vào CSDL
    $SoLuocXem = $row["SoLuocXem"] + 1;
    $sql = "UPDATE sanpham SET SoLuocXem = $SoLuocXem
            WHERE MaSanPham = $id";
    DataProvider::ExecuteQuery($sql);
?> -->

