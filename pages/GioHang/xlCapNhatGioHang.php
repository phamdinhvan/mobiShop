<?php   
    session_start();
    include "../../lib/DataProvider.php";
    include "../../lib/ShoppingCart.php";

    if(isset($_POST["txtSL"]))
    {
        $sl = $_POST["txtSL"];
        if(is_nan($sl) == false)
        {
            //Nếu số lượng là Số thì mới xử lí
            $id = $_POST["hdID"];
            $gioHang = unserialize($_SESSION["GioHang"]);

            if($sl > 0)
            {
                //Xử lis cập nhật số lượng mới

                $gioHang->update($id, $sl);
                $_SESSION["GioHang"] = serialize($gioHang);
            }
            else
            {
                if($sl == 0)
                {
                    $gioHang->_delete($id);

                    $_SESSION["GioHang"] = serialize($gioHang);
                }
            }

            DataProvider::ChangeURL("../../index.php?a=5");
        }
        else
        {
            DataProvider::ChangeURL("../../index.php?a=5");
        }
    }
    else
    {
        DataProvider::ChangeURL("../../index.php?a=404");
    }
?>