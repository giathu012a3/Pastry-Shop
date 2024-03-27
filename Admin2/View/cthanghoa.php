
<div style="height: 70px;"></div>
<div class="row col-md-4 col-md-offset-4" >
  <form action="index.php?action=cthanghoa&act=cthanghoa_action" method="post" enctype="multipart/form-data">
    <table class="table" style="border: 0px;">

      <tr>
        <td>Mã hàng hóa</td>
        <td> <select name="mabanh" class="form-control" style="width:150px;">
            <?php
              $hh=new hanghoa();
              $hang=$hh->getctHangHoa();
              while($set=$hang->fetch()):
            ?>
            <option value="<?php echo $set['mabanh'];?>"><?php echo $set['TENBANH'];?></option>
            <?php
              endwhile;
            ?>
            </select>
        </td>
      </tr>
      <tr>
        <td>Mã loại</td>
        <td>
          <select style="background-color: white;"  name="MALOAI" class="form-control" style="width:150px;">
            <?php
            $selectLoai=-1;
            if(isset($maloai) && $maloai!=-1)
            {
              $selectLoai=$maloai;
            }
              $loai=new Viewdanhmuc();
              $result=$loai->getLoai();
              while($set=$result->fetch()):
            ?>
              <option value="<?php echo $set['MALOAI']?>" <?php if($selectLoai==$set['MALOAI']) echo 'selected';?>><?php echo $set['TENLOAI']?></option>
            <?php
             endwhile;
            ?>
          </select>
        </td>
      </tr>
      <tr>
        <td>Size</td>
        <td> <select name="MASIZEBANH" class="form-control" style="width:150px;">
            <?php
              $hh=new hanghoa();
              $hang=$hh->getSize();
              while($set=$hang->fetch()):
            ?>
            <option value="<?php echo $set['MASIZEBANH'];?>"><?php echo $set['SIZEBANH'];?></option>
            <?php
              endwhile;
            ?>
            </select>
        </td>
      </tr>

      <tr>
        <td>Đơn giá</td>
        <td><input type="text" class="form-control" name="dongia" ></td>
      </tr>

      <tr>
        <td>Hình</td>
        <td>
         
            <label><img width="50px" height="50px" src=""></label>
            Chọn file để upload:
            <input type="file" name="image" id="fileupload">
         
        </td>
      </tr>

      <tr>
        <td colspan="2">
          <input type="submit" name="submit" value="submit">
          

        </td>
      </tr>

    </table>
  </form>
</div>