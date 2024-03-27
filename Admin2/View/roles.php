<div style="height: 70px;"></div>
<div class="row" style="width: 90%;margin: auto;">
  <table class="table table-dark text-center">
    <h1 class="text-center">Quản lý nhân viên</h1> 
    <thead class="thead-dark">
      <tr>
        
        <th>Id nhân viên</th>
        <th>Tên nhân viên</th>
        <th>đơnịa chỉ</th>
        <th>Username</th>
        <th>Mật khẩu</th>
        <th>Roles</th>

      </tr>
    </thead>
    <tbody>
      <?php
      $hh = new roles();
      $result = $hh->getRoles();
      while ($set = $result->fetch()):
        ?>
        <tr>
          <td scope="row">
            <?php echo $set['idnv']; ?>
          </td>
          <td>
            <?php echo $set['hoten']; ?>
          </td>


          <td>
            <?php echo $set['dia']; ?>
          </td>
          <td>
            <?php echo $set['username']; ?>
          </td>
          <td>
            <?php echo $set['matkhau']; ?>
          </td>
          <td>
            <?php 
            // if ($set['roles']==1) {
            //     echo 'Quản lý';
            // }
            // else{
            //     echo 'Nhân viên';
            // }
            echo $set['nameRoles']; 
            
            ?>
          </td>


          <td>
            <a href="index.php?action=roles&act=update_roles&id=<?php echo $set['idnv'] ?>" class="btn btn-success">Cập Nhật</a>
          </td>
   
        </tr>
      <?php 
    endwhile; ?>
      <tr>
        <td scope="row"></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
  </table>
</div>