
<?php  
class binhluan{
    function getBinhLuan()
    {
        $db = new connect();
        $select = "select c.mabinhluan,c.noidung,a.TENKH,b.TENBANH from khachhang a,banhngot b,binhluan c where a.MAKH=c.makh and c.mabanh=b.mabanh";
        $result = $db->getList($select);
        return $result;
    }
}

?>