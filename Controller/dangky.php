<?php
$act = "dangky";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
}
switch ($act) {
    case 'dangky':
        include_once './View/registration.php';
        break;

    case 'dangky_action':
        $tenkh = '';
        $dc = '';
        $sodt = '';
        $user = '';
        $pass = '';
        $email = '';
        if (isset($_POST['submit'])) {
            $tenkh = $_POST['txttenkh'];
            $dc = $_POST['txtdiachi'];
            $sodt = $_POST['txtsodt'];
            $user = $_POST['txtusername'];
            $pass = $_POST['txtpass'];
            $email = $_POST['txtemail'];
            //ma hoa passs
            $saltF="N1810#";
            $salfL="T2405!";
            $passnew=md5($saltF.$pass.$salfL);
            //controller yeu cau phai insert vao database
            $kh=new user();
            $check=$kh->checkKhangHang($user,$email);
            if ($check!==false) {
                echo'<script> alert("Dang ky Không thành công tên tài khoản trùng hoặc gmail trùng");</script>';
                    include_once "./View/registration.php";
            }
            else{
                $kq= $kh->insertKhachHang($tenkh,$user,$passnew,$email,$dc,$sodt);
                if ($kq!==false) {
                    echo'<script>alert("Dang ky thanh cong")</script>';
                    include_once "./View/home.php";
                }else{
                    echo'<script> alert("Dang ky 0 thanh cong");</script>';
                    include_once "./View/registration.php";
                }
            }
           
        }
        break;
}
?>