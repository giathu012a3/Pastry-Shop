<?php
class connect {
    var $db = null;
    function __construct() {
        //database
        $dsn = 'mysql:host=localhost;dbname=banhngot';
        $user = 'root';
        $pass = 'Thu0965845931';
        try {
            $this->db = new PDO($dsn, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        } catch (\Throwable $th) {
            //$throw this
            echo "kết nối thất bại";
            echo $th;
        }
    }
    function getList($select) {
        //truy vấn thì ra về  1 table nhiều row,thì cần 1 biên chưa
        $result = $this->db->query($select);
        return $result; // trả về 1 bản
    }
    //phương thức trả về chỉ 1 row
    function getInstance($select) {
        //truy vấn thì trả về 1 table nhiều row, thì cần 1 biên chứa
        $result = $this->db->query($select);
        //trả về 1 dòng fetch luôn để lấy kết quả 
        $result = $result->fetch();
        return $result;
    }
    function exec($query){
        $results=$this->db->exec($query);
        return $results; 
    }
    function execP($query){
        $statement=$this->db->prepare($query);
        return $statement; 
    }
}
?>