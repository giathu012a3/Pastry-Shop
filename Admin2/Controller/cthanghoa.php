<?php
    $act="cthanghoa";
    if(isset($_GET['act']))
    {
        $act=$_GET['act'];
    }
    switch ($act) {
        case 'cthanghoa':
            include_once "./View/cthanghoa.php";
            break;
        
        case 'cthanghoa_action':
            if(isset($_POST['submit']))
            {
                $mahh=$_POST['mabanh'];
                $MASIZEBANH=$_POST['MASIZEBANH'];
                $MALOAI=$_POST['MALOAI'];
                $dongia=$_POST['dongia'];
                $hinh = $_FILES['image']['name'];
                ///
                $ct=new cthanghoa();
                $kq=$ct->insertCTHangHoa($mahh,$MALOAI,$dongia,$hinh,$MASIZEBANH);
                if($kq!==false)
                {
                    $hh=new hanghoa();

                    $anh=$hh->uploadImg();
                    echo '<script> alert("Insert thành công")</script>';
                    echo '<meta http-equiv=refresh content="0;url=../Admin2/index.php?action=cthanghoa"/>';
                }
                else
                {
                    echo '<script> alert("Insert ko thành công")</script>';
                    echo '<meta http-equiv=refresh content="0;url=../Admin2/index.php?action=cthanghoa"/>';
                }

                
            }
            break;
    }
    
?>