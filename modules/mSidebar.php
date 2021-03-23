<div id="sidebar">
    <?php   
        include "modules/mHang.php";
        include "modules/mFilter.php";
    ?>
    <form action="index.php?a=7" method="post" enctype="multipart/form-data" style="float:right" class="Search">
     <p><input type="text" name="masp" placeholder="Nhập tên sản phẩm..." id="timkiem" required="required" />
        <input type="submit" id="button_timkiem" name="timkiem" value="Tìm sản phẩm" />
        </p>
        </form>
</div>