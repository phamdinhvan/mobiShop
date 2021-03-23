<a href="#">
    <img src="images/avatar-trang.png" width="50" height="50"/>
</a>
<form action="pages/qlTaiKhoan/xlCapNhat.php" method="get">
  <fieldset>
      <legend>Cập nhập thông tin tài khoản</legend>
      <?php
          if(isset($_GET["id"]))
          {
              $id = $_GET["id"];
              $sql = "SELECT  TenDangNhap, MaLoaiTaiKhoan FROM taikhoan WHERE MaTaiKhoan = $id";
              $result = DataProvider::ExecuteQuery($sql);
              $row = mysqli_fetch_array($result);
              $TenDangNhap = $row["TenDangNhap"];
              $MaLoaiTaiKhoan = $row["MaLoaiTaiKhoan"];
          }
      ?>
      <div>
          <span>Tên đăng nhập:</span>
          <?php echo $TenDangNhap; ?>
      </div>
      <div>
          <span>Loại tài khoản:</span>
          <select name="cmbLoaiTaiKhoan">
             <?php
                 $sql = "SELECT * FROM loaitaikhoan";
                 $result = DataProvider::ExecuteQuery($sql);
                 while($row = mysqli_fetch_array($result))
                 {
                    if($row["MaLoaiTaiKhoan"] == $MaLoaiTaiKhoan)
                        echo "<option value='".$row["MaLoaiTaiKhoan"]."' selected>".$row["TenLoaiTaiKhoan"]."</option>";
                    else
                        echo "<option value='".$row["MaLoaiTaiKhoan"]."'>".$row["TenLoaiTaiKhoan"]."</option>";
                 }
             ?>
         </select>
         <input type="hidden" name="id" value="<?php echo $id?>" />
      </div>
      <div>
         <input type="submit" value= "Cập nhật" />
      </div>
  </fieldset>
</form>
