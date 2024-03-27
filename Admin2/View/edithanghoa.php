<?php
  if(isset($_GET['id']))
  {
    $mahh=$_GET['id'];
    $hh=new hanghoa();
    $kq=$hh->getHangHoaID($mahh);
    $tenhh=$kq['TENBANH'];
    $maloai=$kq['maloai'];

    $slx=$kq['SOLUOTXEM'];
    $ngaylap=$kq['NGAYLAP'];
    $mota=$kq['mota'];
  }
?>
<?php
$ac=1;
if(isset($_GET['action']))
{
  if(isset($_GET['act'])&& $_GET['act']=='add_hanghoa')
  {
    $ac=1;
  }
  else
  {
    $ac=2;
  }
}
?>
<div style="height: 71px;"></div>
<div class="row " >
  <div class="col-md-4 col-md-offset-4">

    <?php
      if($ac==1)
      {
        echo'<form action="index.php?action=hanghoa&act=insert_action" method="post" enctype="multipart/form-data">';
      }
      else
      {
        echo'<form action="index.php?action=hanghoa&act=update_action" method="post" enctype="multipart/form-data">';
      }
    ?>
  
      <table class="table" style="border: 0px;">
  
        <tr>
          <td>Mã hàng</td>
          <td> <input type="text" style="color: #000;" class="form-control" name="mahh" value="<?php if(isset($mahh)) echo $mahh;?>" readonly/></td>
        </tr>
        <tr>
          <td>Tên hàng</td>
          <td><input type="text" class="form-control" name="tenhh"  value="<?php if(isset($tenhh)) echo $tenhh;?>"  maxlength="100px"></td>
        </tr>
       
  
  
        <tr>
          <td>Số lượt xem</td>
          <td><input type="text" class="form-control"  value="<?php if(isset($slx)) echo $slx;?>" name="slx" >
          </td>
        </tr>
        <tr>
          <td>Ngày lập</td>
          <td><input type="date" class="form-control"  value="<?php if(isset($ngaylap)) echo $ngaylap;?>" name="ngaylap">
          </td>
        </tr>
        <tr>
          <td>Mô tả</td>
          <td><input type="text" class="form-control"  value="<?php if(isset($mota)) echo $mota;?>" name="mota">
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <input type="submit" class="btn btn-success" value="Thêm sản phẩm mới">
            
  
          </td>
        </tr>
  
      </table>
    </form>
  </div>
</div>