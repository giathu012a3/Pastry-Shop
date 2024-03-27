<?php
class Viewdanhmuc
{
    function getLoai()
    {
        $db = new connect();
        $select = "select * from loaibanh";
        $result = $db->getList($select);
        return $result;
    }
    function insert_category($namecata)
    {  
        $db=new connect();
        $query="insert into loaibanh(MALOAI,TENLOAI) 
        values (Null,'$namecata')";
       
        $result=$db->exec($query);
        return $result;
    }
}
?>