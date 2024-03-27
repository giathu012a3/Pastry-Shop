<?php
    class nhanvien{
        function getUserAdmin($user,$pass)
        {
            $db=new connect();
            $select="select roles,idnv,hoten,username,matkhau from nhanvien where username='$user' and matkhau='$pass'";
            $result=$db->getInstance($select);
            return $result;
        }
    }
?>