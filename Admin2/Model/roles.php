<?php 
final class roles
{
    function getRoles()
    {
        $db=new connect();
        $select="select * from nhanvien a, roles b where a.roles=b.idRoles";
        $result=$db->getList($select);
        return $result;
    }
    function getRolesID($id)
    {
        $db=new connect();
        $select="select * from nhanvien where idnv=$id";
        $result=$db->getInstance($select);
        return $result;
    }
    function insertRolesUser( $hoten, $dia, $username, $matkhau,$idRoles)
    {
        $db=new connect();
        $query="insert into nhanvien(idnv,hoten,dia,username,matkhau,roles) 
        values (Null,'$hoten','$dia','$username','$matkhau',$idRoles)";
       
        $result=$db->exec($query);
        return $result;
    }
    function updateRoles($mahh, $hoten, $dia, $username, $matkhau,$idRoles)
    {
        $db=new connect();
        $query="update nhanvien 
        set hoten='$hoten',dia='$dia',username='$username',matkhau='$matkhau',roles=$idRoles
        where idnv=$mahh";
        
        $result=$db->exec($query);
        return $result;
    }
    function getListRoles()
    {
        $db=new connect();
        $select="select * from roles";
        $result=$db->getList($select);
        return $result;
    }
}

?>