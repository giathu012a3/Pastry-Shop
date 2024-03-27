<?php 
final class thongke 
{
    function countHoaDon()
    {
        $db=new connect();
        $query="SELECT COUNT(MAHD) FROM hoadon";
        $result=$db->getList($query);
        return $result;
    }
    function countBinhLuan()
    {
        $db=new connect();
        $query="SELECT COUNT(mabinhluan) FROM binhluan";
        $result=$db->getList($query);
        return $result;
    }
    function countUser()
    {
        $db=new connect();
        $query="SELECT COUNT(MAKH) FROM khachhang";
        $result=$db->getList($query);
        return $result;
    }
    function sumHoaDon()
    {
        $db=new connect();
        $query="SELECT sum(TONGTIEN) FROM hoadon";
        $result=$db->getList($query);
        return $result;
    }
}
?>