<?php

$act = "hoadonAdmin";
if (isset($_GET['act'])) {
    $act = $_GET['act'];

}
switch ($act) {
    case 'hoadonAdmin':
        include_once "./View/hoadonAdmin.php";
        break;

    case 'ct_hoadon':
        include_once "./View/cthoadonAdmin.php";
        break;
    case 'tt_next':
        $id=$_GET['id'];
        $hh=new hoadonAdmin();
                $check=$hh->getttNext($id);
                if($check!==false)
                {
                    echo '<script> alert("Chuyển trạng thái thành công")</script>';
                    echo '<meta http-equiv=refresh content="0;url=../Admin2/index.php?action=hoadonAdmin"/>';
                }
                else
                {
                    echo '<script> alert("Chuyển trạng thái ko thành công")</script>';
                }
        break;
        case 'tt_back':
            $id=$_GET['id'];
            $hh=new hoadonAdmin();
                    $check=$hh->getttBack($id);
                    if($check!==false)
                    {
                        echo '<script> alert("Chuyển trạng thái thành công")</script>';
                        echo '<meta http-equiv=refresh content="0;url=../Admin2/index.php?action=hoadonAdmin"/>';
                    }
                    else
                    {
                        echo '<script> alert("Chuyển trạng thái ko thành công")</script>';
                    }
            break;
}
?>