<?php 
final class hoadonAdmin 
{
    function gethoadon()
    {
        $db=new connect();
        $select="select * from hoadon a,khachhang b,ttdonhang c where a.MAKH=b.MAKH and c.idtt=tthd ORDER BY a.MAHD DESC";
        $result=$db->getList($select);
        return $result;
    }
    function getcthoadon($id)
    {
        $db=new connect();
        $select="select * from sizebanh a,banhngot b,chitiethoadon c where a.MASIZEBANH=C.size and b.MABANH=c.MABANH and c.MAHD=$id";
        $result=$db->getList($select);
        return $result;
    }
    function getttNext($id)
    {
        $db=new connect();
        $query="update hoadon 
        set tthd=tthd+1 where MAHD=$id";
        $result=$db->exec($query);
        return $result;
    }
    function getttBack($id)
    {
        $db=new connect();
        $query="update hoadon 
        set tthd=tthd-1 where MAHD=$id";
        $result=$db->exec($query);
        return $result;
    }
}

?>