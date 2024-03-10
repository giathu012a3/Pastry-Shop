<?php
$act = 'banhngot';
if (isset($_GET['act'])) {
    $act = $_GET['act']; //sanphamkhuyenmai
}
switch ($act) {
    case 'banhngot':
        include_once "./View/banhngot.php";
        break;
    case 'banhngotheoloai':
        include_once "./View/banhngot.php";
        break;
    case 'chitietbanhngot':
        include_once "./View/chitietbanhngot.php";
        break;
    case 'searchtxt':
        $search = $_POST['txtsearch'];
        $bn = new banhngot;
        // Lưu kết quả truy vấn vào biến $result
        $result = $bn->searchBanhNgot($search);
        // Truyền biến $result vào trang web banhngotsearch.php
        include_once "./View/banhngotsearch.php";
        break;

}
//controller điều phối đến view tên là sản PHẨM

?>