<?php
if (isset($_GET['id'])) {
    $mahh = $_GET['id'];
    $hh = new roles();
    $kq = $hh->getRolesID($mahh);
    $hoten = $kq['hoten'];
    $dia = $kq['dia'];

    $username = $kq['username'];
    $matkhau = $kq['matkhau'];
    $roles = $kq['roles'];
}
?>
<?php
$ac=1;
if(isset($_GET['action']))
{
  if(isset($_GET['act'])&& $_GET['act']=='add_nv')
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
<div class="row ">
    <div class="col-md-4 col-md-offset-4">
    <?php
      if($ac==1)
      {
        echo'<form action="index.php?action=roles&act=insert_action" method="post" enctype="multipart/form-data">';
      }
      else
      {
        echo'<form action="index.php?action=roles&act=update_action" method="post" enctype="multipart/form-data">';
      }
    ?>
        

            ?>

            <table class="table" style="border: 0px;">

                <tr>
                    <td>Mã nhân viên</td>
                    <td> <input type="text" style="color: #000;" class="form-control" name="mahh" value="<?php if (isset($mahh))
                        echo $mahh; ?>" readonly /></td>
                </tr>
                <tr>
                    <td>Họ tên</td>
                    <td><input type="text" class="form-control" name="hoten" value="<?php if (isset($hoten))
                        echo $hoten; ?>" maxlength="100px"></td>
                </tr>



                <tr>
                    <td>Địa chỉ</td>
                    <td><input type="text" class="form-control" value="<?php if (isset($dia))
                        echo $dia; ?>" name="dia">
                    </td>
                </tr>
                <tr>
                    <td>Tên đăng nhập</td>
                    <td><input type="text" class="form-control" value="<?php if (isset($username))
                        echo $username; ?>" name="username">
                    </td>
                </tr>
                <tr>
                    <td>Mật khẩu</td>
                    <td><input type="text" class="form-control" value="<?php if (isset($matkhau))
                        echo $matkhau; ?>" name="matkhau">
                    </td>
                </tr>

                <tr>
                    <td>Size</td>
                    <td> <select name="idRoles" class="form-control" style="width:150px;">
                            <?php
                            $hh = new roles();
                            $hang = $hh->getListRoles();
                            while ($set = $hang->fetch()):
                                ?>
                                <option value="<?php echo $set['idRoles']; ?>">
                                    <?php echo $set['nameRoles']; ?>
                                </option>
                                <?php
                            endwhile;
                            ?>
                        </select>
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