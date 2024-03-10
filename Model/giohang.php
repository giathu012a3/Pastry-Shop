<?php
class giohang
{
    function addCart($id, $size, $soluong)
    {
        $sp = new banhngot();
        $idsp = $sp->getBanhNgotId($id);
        $hinh = $sp->getBanhNgotIdCZ($id, $size);
        $tensp = $idsp['tenbanh'];
        $dongia = $idsp['gia'];
        $img = $hinh['hinhanh'];
        $total = $soluong * $dongia;
        $flag = false;
        $index = 0;
        foreach ($_SESSION['cart'] as $key => $item) {
            if ($item['mabanh'] == $id && $item['size'] == $size) {
                $index = $key;
                $flag = true;
                $soluong += $_SESSION['cart'][$key]['qty'];
               $this->update($index, $soluong);
            }
        }
        if ($flag==false) {
            $item = array(
                'mabanh' => $id,
                'hinh' => $img,
                'name' => $tensp,
                'size' => $size,
                'cost' => $dongia,
                'qty' => $soluong,
                'total' => $total,
            );
            $_SESSION['cart'][] = $item;
        }
     
    }
    function sub_Total()
    {
        $subtotal = 0;
        foreach ($_SESSION['cart'] as $item) {
            $subtotal += $item['total'];
        }
        $subtotal = number_format($subtotal, 2);
        return $subtotal;
    }
    function update($index, $soluong){
        if ($soluong<=0) {
           unset($_SESSION['cart'][$index]);
        }
        else{
           $_SESSION['cart'][$index]['qty']=$soluong;
           $total_new=$_SESSION['cart'][$index]['qty']*$_SESSION['cart'][$index]['cost'];
           $_SESSION['cart'][$index]['total']=$total_new;
        }
    }
}
?>