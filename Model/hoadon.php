<?php
class hoadon
{
    function insertHoaDon($makh)
    {
        $db = new connect();
        $date = new DateTime('now');
        $ngay = $date->format('Y-m-d');
        $query = "insert into hoadon(MAHD,MAKH,NGAYDAT,TONGTIEN) value (Null,$makh,'$ngay',0)";
        $db->exec($query);

        $select = "select MAHD from hoadon order by MAHD desc limit 1";
        $sohd = $db->getInstance($select);
        return $sohd[0];
    }

    function insertCTHoaDon($mahd, $mabanh, $soluong, $thanhtien, $size)
    {
        $db = new connect();
        $query = "insert into chitiethoadon(MAHD,MABANH,SOLUONG,THANHTIEN,size,TINHTRANG) value ($mahd,$mabanh,$soluong,$thanhtien,'$size',0)";
        $db->exec($query);
    }
    function updateHoaDon($mahd, $makh, $thanhtien)
    {
        $db = new connect();
        $query = "update hoadon set tongtien=$thanhtien Where MAHD=$mahd and makh=$makh";
        $db->exec($query);
    }
    function getKhachHangHD($mahd)
    {
        $db = new connect();
        $select = "select a.mahd,b.tenkh,b.diachi,b.sdt,a.ngaydat from hoadon a, khachhang b Where a.makh=b.makh and mahd=$mahd";
        $result = $db->getInstance($select);
        return $result;
    }

    function getHangHoaHD($mahd)
    {
        $db = new connect();
        $select = "select DISTINCT a.mahd,c.tenbanh,b.gia,a.soluong,d.SIZEBANH from chitiethoadon a,ctbanhngot b,banhngot c,sizebanh d WHERE a.MABANH=b.MABANH and c.MABANH=b.MABANH and a.size=b.masizebanh and d.masizebanh=a.size and a.mahd=$mahd";
        $result = $db->getList($select);
        return $result;
    }


}




?>