<?php
class hanghoa{
    function getHangHoa()
    {
        $db=new connect();
        $select="select * from banhngot a,ctbanhngot b,loaibanh c where a.mabanh=b.mabanh and b.maloai=c.maloai";
        $result=$db->getList($select);
        return $result;
    }
    function insertHangHoa($tenhh,$maloai,$dacbiet,$slx,$ngaylap,$mota)
    {
        $db=new connect();
        $query="insert into hanghoa(mahh,tenhh,maloai,dacbiet,soluotxem,ngaylap,mota) 
        values (Null,'$tenhh',$maloai,$dacbiet,$slx,'$ngaylap','$mota')";
       
        $result=$db->exec($query);
        return $result;
    }
    // phường thức lấy thông tin dựa vào id
    function getHangHoaID($id)
    {
        $db=new connect();
        $select="select * from hanghoa where mahh=$id";
        $result=$db->getInstance($select);
        return $result;
    }
    function updateHangHoa($mahh,$tenhh,$maloai,$dacbiet,$slx,$ngaylap,$mota)
    {
        $db=new connect();
        $query="update hanghoa 
        set tenhh='$tenhh',maloai=$maloai,dacbiet=$dacbiet,soluotxem=$slx,ngaylap='$ngaylap',mota='$mota' 
        where mahh=$mahh";
        
        $result=$db->exec($query);
        return $result;
    }
}
?>