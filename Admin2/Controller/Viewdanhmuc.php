<?php
    $act="Viewdanhmuc";
    if(isset($_GET['act']))
    {
        $act=$_GET['act'];
    }
    switch ($act) {
        case 'Viewdanhmuc':
            include_once "./View/Viewdanhmuc.php";
            break;
        case 'add_category':
            if($_SERVER['REQUEST_METHOD']=='POST')
            {
                $namecata=$_POST['namecata'];
                // dem thông tin update vao database
                $hh=new Viewdanhmuc();
                $kt=$hh->insert_category($namecata);
                if($kt!==false)
                {
                    echo '<script> alert("Update dữ liệu thành công")</script>';
                    echo '<meta http-equiv=refresh content="0;url=../Admin2/index.php?action=Viewdanhmuc"/>';
                }
                else
                {
                    echo '<script> alert("Update dữ liệu ko thành công")</script>';
                }
            }
            break;
        
        
    }
    
 
?>