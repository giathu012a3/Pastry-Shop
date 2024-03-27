<?php

$act = "roles";
if (isset($_GET['act'])) {
    $act = $_GET['act'];

}
switch ($act) {
    case 'roles':
        include_once "./View/roles.php";
        break;
    case 'add_nv':
        include_once "./View/editRoles.php";
        break;
    case 'insert_action':
        // kiểm tra và nhận thông tin
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $mahh = $_POST['mahh'];
            $hoten = $_POST['hoten'];
            $dia = $_POST['dia'];
            $username = $_POST['username'];
            $matkhau = $_POST['matkhau'];
            $idRoles = $_POST['idRoles'];
            // dem thông tin insert vao database
            $hh = new roles();
            $check = $hh->insertRolesUser($hoten, $dia, $username, $matkhau, $idRoles);
            if ($check !== false) {
                echo '<script> alert("Thêm dữ liệu thành công")</script>';
                echo '<meta http-equiv=refresh content="0;url=../Admin2/index.php?action=roles"/>';
            } else {
                echo '<script> alert("Thêm dữ liệu ko thành công")</script>';
            }

        }
        break;
    case 'update_roles':
        include_once "./View/editRoles.php";
        break;
    case "update_action":
        // nhận thông tin
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $mahh = $_POST['mahh'];
            $hoten = $_POST['hoten'];
            $dia = $_POST['dia'];
            $username = $_POST['username'];
            $matkhau = $_POST['matkhau'];
            $idRoles = $_POST['idRoles'];

            // dem thông tin update vao database
            $hh = new roles();
            $kt = $hh->updateRoles($mahh, $hoten, $dia, $username, $matkhau, $idRoles);
            if ($kt !== false) {
                echo '<script> alert("Update dữ liệu thành công")</script>';
                echo '<meta http-equiv=refresh content="0;url=../Admin2/index.php?action=roles"/>';
            } else {
                echo '<script> alert("Update dữ liệu ko thành công")</script>';
            }
        }
        break;

}

?>