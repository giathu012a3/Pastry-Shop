<?php 
class binhluan{
    function insertComment($makh,$mabanh,$noidung)  {
        $db=new connect;
        $query="insert into binhluan(mabinhluan,makh,mabanh,noidung,luotthich) value (null,$makh,$mabanh,'$noidung',0)";
        $db->exec($query);
    }

    function selectBinhLuan($mabanh)  {
        $db=new connect;
        $select="select a.TENKH,b.noidung from khachhang a,binhluan b where a.MAKH=b.makh and b.mabanh=$mabanh";
        $result=$db->getList($select);
        return $result;
    }
}
?>