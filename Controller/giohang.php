<?php
// unset($_SESSION);
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}
$act = "giohang";
if (isset($_GET['act'])) {
    $act = ($_GET['act']);
}
switch ($act) {
    case 'giohang':
        include_once './view/cart.php';
        break;
    case 'giohang_action':
        $id = 0;
        $size = ' ';
        $soluong = 0;
        if (isset($_POST['mabanh'])) {
            $id = $_POST['mabanh'];
            $size = $_POST['size'];
            $soluong = $_POST['soluong'];
            $gh = new giohang();
            $gh->addCart($id, $size, $soluong);
            echo '<meta http-equiv="refresh" content="0;url=./index.php?action=giohang"/>';
        }
        break;
    case 'giohang_xoa':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            unset($_SESSION['cart'][$id]);
            echo '<meta http-equiv="refresh" content="0;url=./index.php?action=giohang"/>';
        }
        break;
    case 'update_giohang':
        if (isset($_POST['newqty'])) {
            // $id = $_GET['key'];
            $newqty = $_POST['newqty'];
            // $oldqty = $_SESSION['cart']['qty'];
            // Đảm bảo rằng $newqty     là một số nguyên dương
            // $cnewqty = filter_var($newqty, FILTER_VALIDATE_INT, array("options" => array("min_range" => 1)));

            // if ($cnewqty !== false) {
            // Cập nhật số lượng trong giỏ hàng
            $id = $_GET['id'];
            $_SESSION['cart'][$id]['qty'] = $newqty[$id];
            $gh = new giohang();
            $gh->update($id, $newqty[$id]);

            // for ($i = 0; $i < count($newqty); $i++) {
            //     if ($newqty[$i] != $_SESSION['cart'][$i]['qty']) {
            //         $_SESSION['cart'][$i]['qty'] = $newqty[$i];
            //         $gh = new giohang();
            //         $gh->update($i,$newqty[$i]);
            //     }
            // }

            // Chuyển hướng về trang giỏ hàng
            echo '<meta http-equiv="refresh" content="0;url=./index.php?action=giohang"/>';

            // } else {
            //     echo 'Số lượng mới không hợp lệ.';
            // }
        }
        break;




}
?>