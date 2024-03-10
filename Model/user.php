<?php
class user
{
    function insertKhachHang($tenhh, $username, $matkhau, $email, $diachi, $sodt)
    {
        $db = new connect();
        $query = "insert into khachhang (MAKH,TENKH,username,PASS,EMAIL,DIACHI,SDT)
        value(null,'$tenhh','$username','$matkhau','$email','$diachi','$sodt')";
        $result = $db->exec($query);
        return $result;
    }
    function checkKhangHang($user, $email)
    {
        $db = new connect();
        $select = "select MAKH,TENKH,username,PASS,EMAIL,DIACHI,SDT from khachhang where username='$user' or email='$email'";
        $result = $db->getInstance($select);
        return $result;
    }
    function logKhachHang($user, $pass)
    {
        $db = new connect();
        $select = "select a.makh,a.tenkh,a.username from khachhang a WHERE a.username='$user' and a.pass='$pass'";
        $result = $db->getInstance($select);
        return $result;
    }
    function checkEmail($email)
    {
        $db = new connect();
        $select = "select * from khachhang where email='$email'";
        $result = $db->getList($select);
        return $result;
    }
    function updateEmailPass($emailold,$passnew)
    {
        $db = new connect();
        $query = "update khachhang set PASS='$passnew' where EMAIL='$emailold'";
        // echo $query;
        $db->exec($query);

    }
}

?>