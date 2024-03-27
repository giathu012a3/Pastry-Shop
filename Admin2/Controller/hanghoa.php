<?php
$act = "hanghoa";
if (isset($_GET['act'])) {
    $act = $_GET['act'];

}
switch ($act) {
    case 'hanghoa':
        include_once "./View/hanghoa.php";
        break;

    case 'add_hanghoa':
        include_once "./View/edithanghoa.php";
        break;
    case 'insert_action':
        // kiểm tra và nhận thông tin
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $mahh = $_POST['mahh'];
            $tenhh = $_POST['tenhh'];
            $maloai = $_POST['maloai'];
            $dacbiet = $_POST['dacbiet'];
            $slx = $_POST['slx'];
            $ngaylap = $_POST['ngaylap'];
            $mota = $_POST['mota'];
            // dem thông tin insert vao database
            $hh = new hanghoa();
            $check = $hh->insertHangHoa($tenhh, $maloai, $slx, $ngaylap, $mota);
            if ($check !== false) {
                echo '<script> alert("Thêm dữ liệu thành công")</script>';
                echo '<meta http-equiv=refresh content="0;url=../Admin2/index.php?action=hanghoa"/>';
            } else {
                echo '<script> alert("Thêm dữ liệu ko thành công")</script>';
            }

        }
        break;
    case 'update_hanghoa':
        include_once "./View/edithanghoa.php";
        break;
    case "update_action":
        // nhận thông tin
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $mahh = $_POST['mahh'];
            $tenhh = $_POST['tenhh'];
            $maloai = $_POST['maloai'];
            $slx = $_POST['slx'];
            $ngaylap = $_POST['ngaylap'];
            $mota = $_POST['mota'];
            // dem thông tin update vao database
            $hh = new hanghoa();
            $kt = $hh->updateHangHoa($mahh, $tenhh, $slx, $ngaylap, $mota);
            if ($kt !== false) {
                echo '<script> alert("Update dữ liệu thành công")</script>';
                echo '<meta http-equiv=refresh content="0;url=../Admin2/index.php?action=hanghoa"/>';
            } else {
                echo '<script> alert("Update dữ liệu ko thành công")</script>';
            }
        }
        break;
    case 'delete_hanghoa':
        // kiểm tra và nhận thông tin
        if ($_GET['id']) {
            $mahh = $_GET['id'];
            // dem thông tin insert vao database
            $hh = new hanghoa();
            $check = $hh->delete_product($mahh);
            if ($check !== false) {
                echo '<script> alert("Thêm dữ liệu thành công")</script>';
                echo '<meta http-equiv=refresh content="0;url=../Admin2/index.php?action=hanghoa"/>';
            } else {
                echo '<script> alert("Thêm dữ liệu ko thành công")</script>';
            }

        }
        break;
    case 'search_hanghoa':
        $search = $_POST['txtsearch'];
        $bn = new hanghoa;
        // Lưu kết quả truy vấn vào biến $result
        $result = $bn->search_Admin($search);
        // Truyền biến $result vào trang web banhngotsearch.php
        include_once "./View/searchAdmin.php";
        break;
    case 'hethang':
        if ($_GET['id']) {
            $mahh = $_GET['id'];
            // dem thông tin insert vao database
            $hh = new hanghoa();
            $check = $hh->hethang($mahh);
            if ($check !== false) {
                echo '<script> alert("Cập nhật trạng thái sản phẩm thành công")</script>';
                echo '<meta http-equiv=refresh content="0;url=../Admin2/index.php?action=hanghoa"/>';
            } else {
                echo '<script> alert("Cập nhật trạng thái sản phẩm ko thành công")</script>';
            }

        }
        break;
        case 'themhang':
            if ($_GET['id']) {
                $mahh = $_GET['id'];
                // dem thông tin insert vao database
                $hh = new hanghoa();
                $check = $hh->themhang($mahh);
                if ($check !== false) {
                    echo '<script> alert("Cập nhật trạng thái sản phẩm thành công")</script>';
                    echo '<meta http-equiv=refresh content="0;url=../Admin2/index.php?action=hanghoa"/>';
                } else {
                    echo '<script> alert("Cập nhật trạng thái sản phẩm ko thành công")</script>';
                }
    
            }
            break;

}

?>