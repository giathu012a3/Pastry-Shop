<?php
class hanghoa{
    function getSize()
    {
        $db=new connect();
        $select="select * from sizebanh";
        $result=$db->getList($select);
        return $result;
    }
    function getctHangHoa()
    {
        $db=new connect();
        $select="select * from banhngot ORDER BY mabanh DESC";
        $result=$db->getList($select);
        return $result;
    }
    function getHangHoa()
    {
        $db=new connect();
        $select="select * from banhngot a,ctbanhngot b,loaibanh c,sizebanh d where a.mabanh=b.mabanh and b.maloai=c.maloai and d.MASIZEBANH=b.MASIZEBANH ORDER BY a.mabanh DESC";
        $result=$db->getList($select);
        return $result;
    }
    function insertHangHoa($tenhh,$maloai,$slx,$ngaylap,$mota)
    {
        $db=new connect();
        $query="insert into banhngot(mabanh,TENBANH,mota,NGAYLAP,SOLUOTXEM,TinhTrang) 
        values (Null,'$tenhh','$mota','$ngaylap',$slx,0)";
       
        $result=$db->exec($query);
        return $result;
    }
    // phường thức lấy thông tin dựa vào id
    function getHangHoaID($id)
    {
        $db=new connect();
        $select="select * from banhngot where mabanh=$id";
        $result=$db->getInstance($select);
        return $result;
    }
    function updateHangHoa($mahh,$tenhh,$slx,$ngaylap,$mota)
    {
        $db=new connect();
        $query="update banhngot 
        set TENBANH='$tenhh',SOLUOTXEM=$slx,NGAYLAP='$ngaylap',mota='$mota' 
        where mabanh=$mahh";
        
        $result=$db->exec($query);
        return $result;
    }
    function delete_product($mahh)
    {
        $db=new connect();
        $query="update banhngot set `check`=1 where mabanh=$mahh";
        
        $result=$db->exec($query);
        return $result;
    }
    function uploadImg(){
        $target_dir = "../../Pastry-Shop/Content/img/";
        $target_file = $target_dir.basename($_FILES['image']['name']);
        $imagefileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $upload =1;
        if(isset($_POST['submit'])){
            $check = getimagesize($_FILES['image']['tmp_name']);
            if($check!==false){
                $upload = 1;
            }
            else {
                $upload = 0;
            }
        }
        if(file_exists($target_file)){
            echo "<script> alert('Hình đã tồn tại')</script>";
            $upload=0;
        }
        if($_FILES['image']['size']>500000){
            echo "<script> alert('Hình vượt quá dung lượng')</script>";
            $upload = 0;
        }
        if($imagefileType !== "jpg" && $imagefileType !== "webp" && $imagefileType !== "png" && $imagefileType!=="gif" ){
            $upload = 0;
            echo "<script> alert('Không phải hình')</script>";
        }
        if($upload==1){
            if(move_uploaded_file($_FILES['image']['tmp_name'],$target_file)){
                echo "<script> alert('Upload thàng công')</script>";
            }
            else{
                echo "<script> alert('Upload không thàng công')</script>";
            }
        }
    }

    function search_Admin($txtsearch)  {
        $db=new connect();
        $select="select * from banhngot a,ctbanhngot b,loaibanh c,sizebanh d where (a.mabanh=b.mabanh and b.maloai=c.maloai and d.MASIZEBANH=b.MASIZEBANH) and (a.TENBANH LIKE '%$txtsearch%' or c.TENLOAI LIKE '$txtsearch' )";
        $result=$db->getList($select);
        return $result;
    }
    function hethang($mahh)
    {
        $db=new connect();
        $query="update banhngot set TinhTrang=1 where mabanh=$mahh";
        
        $result=$db->exec($query);
        return $result;
    }
    function themhang($mahh)
    {
        $db=new connect();
        $query="update banhngot set TinhTrang=0 where mabanh=$mahh";
        
        $result=$db->exec($query);
        return $result;
    }
}
?>