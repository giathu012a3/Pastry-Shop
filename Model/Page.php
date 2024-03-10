<?php 
class Page{
    
    function findPage($count,$limit){
        $page=(($count%$limit)==0?($count/$limit):ceil($count/$limit));
        return $page;
    }
    // phương thúc tính staer dự vào đường dẫn,tên biến trên url
    function findStart($limit) {
        if (!isset($_GET['page'])||$_GET['page']==1) {
            $start=0;
        }
        else{
            $start=($_GET['page']-1)*$limit;
        }
        return $start;
    }
}
?>