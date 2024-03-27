<?php
class cthanghoa
{
    function insertCTHangHoa($mahh,$MALOAI,$dongia,$hinh,$MASIZEBANH)
    {
        $db = new connect();
        $query = "insert into ctbanhngot (mabanh,GIA,HINHANH,MALOAI,MASIZEBANH) values ($mahh,$dongia,'$hinh',$MALOAI,$MASIZEBANH)";
        $result=$db->exec($query);
        return $result;
    }
}
?>