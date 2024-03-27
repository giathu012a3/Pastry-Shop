<?php
class banhngot
{
    //thuộc tính 
    //Phương thức lấy ra 8 sp mới nhất
    function getbanhngotnew()
    {
        // b1: kết nối được với cơ sở dữ liệu
        $db = new connect();
        //cần lấy cái gì thì truy vấn cái đó
        $select = "SELECT a.mabanh, a.check, a.tenbanh, MIN(b.gia) AS gia, MIN(b.hinhanh) AS hinhanh
        FROM banhngot a
        JOIN ctbanhngot b ON a.mabanh = b.mabanh and a.check=0
        GROUP BY a.mabanh, a.tenbanh
        ORDER BY a.mabanh DESC
        LIMIT 8";
        $sesult = $db->getList($select);
        return $sesult;//đã lấy ddduocj dữ liệu
    }
    function getbanhngotAll()
    {
        // b1: kết nối được với cơ sở dữ liệu
        $db = new connect();
        //cần lấy cái gì thì truy vấn cái đó
        $select = "SELECT a.mabanh, a.tenbanh, MIN(b.gia) AS gia, MIN(b.hinhanh) AS hinhanh
        FROM banhngot a
        JOIN ctbanhngot b ON a.mabanh = b.mabanh and a.check=0
        GROUP BY a.mabanh, a.tenbanh
        ORDER BY a.mabanh DESC";
        $sesult = $db->getList($select);
        return $sesult;//đã lấy ddduocj dữ liệu
    }
    function getbanhngotAllPage($start, $limit)
    {
        // b1: kết nối được với cơ sở dữ liệu
        $db = new connect();
        //cần lấy cái gì thì truy vấn cái đó
        $select = "SELECT a.mabanh, a.tenbanh, MIN(b.gia) AS gia, MIN(b.hinhanh) AS hinhanh
        FROM banhngot a
        JOIN ctbanhngot b ON a.mabanh = b.mabanh and a.check=0
        GROUP BY a.mabanh, a.tenbanh
        ORDER BY a.mabanh DESC LIMIT " . $start . ',' . $limit;
        $sesult = $db->getList($select);
        return $sesult;//đã lấy ddduocj dữ liệu
    }
    function getmenubanhngot()
    {
        $db = new connect();
        $select = "SELECT maloai,tenloai FROM `loaibanh` WHERE 1;";
        $result = $db->getList($select);
        return $result;
    }
    function getbanhngotmenuAll($idloai)
    {
        // b1: kết nối được với cơ sở dữ liệu
        $db = new connect();
        //cần lấy cái gì thì truy vấn cái đó
        $select = "SELECT a.mabanh, a.tenbanh, a.soluotxem, MIN(b.gia) AS gia, MIN(b.hinhanh) AS hinhanh, b.maloai, c.tenloai 
        FROM banhngot a
        INNER JOIN ctbanhngot b ON a.mabanh = b.mabanh
        INNER JOIN loaibanh c ON b.maloai = c.maloai
        WHERE  a.check=0 and b.maloai = " . $idloai . "  
        GROUP BY a.mabanh
        ORDER BY a.mabanh DESC";
        $sesult = $db->getList($select);
        return $sesult;//đã lấy ddduocj dữ liệu
    }
    function getbanhngotmenuPage($start, $limit, $idloai)
    {
        // b1: kết nối được với cơ sở dữ liệu
        $db = new connect();
        //cần lấy cái gì thì truy vấn cái đó
        $select = "SELECT a.mabanh, a.tenbanh, a.soluotxem, MIN(b.gia) AS gia, MIN(b.hinhanh) AS hinhanh, b.maloai, c.tenloai 
        FROM banhngot a
        INNER JOIN ctbanhngot b ON a.mabanh = b.mabanh
        INNER JOIN loaibanh c ON b.maloai = c.maloai
        WHERE a.check=0 and b.maloai = " . $idloai . " 
        GROUP BY a.mabanh
        ORDER BY a.mabanh DESC
        LIMIT " . $start . ',' . $limit;
        $sesult = $db->getList($select);
        return $sesult;//đã lấy ddduocj dữ liệu
    }
    function getBanhNgotId($id)
    {
        $db = new connect();
        $select = "SELECT DISTINCT a.mabanh, a.tenbanh ,a.mota, b.gia from banhngot a,ctbanhngot b Where a.mabanh=b.mabanh and a.mabanh=$id";
        $result = $db->getInstance($select);
        return $result;

    }
    function getBanhNgotSize($id)
    {
        $db = new connect();
        $select = "select DISTINCT a.masizebanh,b.sizebanh from ctbanhngot a,sizebanh b
        Where a.masizebanh=b.masizebanh and a.mabanh=$id";
        $result = $db->getList($select);
        return $result;
    }
    function getBanhNgotHinh($id)
    {
        $db = new connect();
        $select = "select DISTINCT a.hinhanh from ctbanhngot a
        Where a.mabanh=$id";
        $result = $db->getList($select);
        return $result;
    }
    function getten($hh)
    {
        $db = new connect;
        $select = "select a.maloai,a.tenloai from loaibanh a where a.maloai=$hh";
        $result = $db->getList($select);
        return $result;

    }
    function getBanhNgotIdCZ($id, $size)
    {
        $db = new connect();
        $select = "select a.hinhanh from ctbanhngot a,sizebanh b WHERE  a.masizebanh=b.masizebanh and a.check=0 and a.mabanh=$id and b.masizebanh=$size";
        $result = $db->getInstance($select);
        return $result;
    }
    function getBanhNgotIdSize($id, $idsize)
    {
        $db = new connect();
        $select = "select b.sizebanh from ctbanhngot a,sizebanh b WHERE  a.masizebanh=b.masizebanh and a.mabanh=$id and a.check=0 and b.masizebanh=$idsize";
        $result = $db->getInstance($select);
        return $result;
    }
    function searchBanhNgot($txtsearch)
    {
        $db = new connect();
        $select = "select a.mabanh,a.tenbanh,b.gia,b.hinhanh  from banhngot a ,ctbanhngot b WHERE a.mabanh=b.MABANH and a.check=0 and TENBANH LIKE '%$txtsearch%'";
        $result = $db->getList($select);
        return $result;
    }
}
?>