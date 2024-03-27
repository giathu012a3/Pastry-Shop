<div style="height: 70px;"></div>
<div class="row" style="width: 90%;margin: auto;">
  <table class="table table-dark text-center">
    <h1 class="text-center">Tất cả sản phẩm</h1>
    <thead class="thead-dark">
      <tr>
        <th>Mã Hóa đơn</th>
        <th>Tên Bánh</th>
        <th>Số lượng</th>
        <th>Size</th>
        <th>Giá</th>
        <th></th>

      </tr>
    </thead>
    <tbody>
      <?php
      $id=$_GET['id'];
      $hd = new hoadonAdmin();
      $result = $hd->getcthoadon($id);
      while ($set = $result->fetch()):
        ?>
        <tr>
          <td scope="row">
            <?php echo $set['MAHD']; ?>
          </td>
          <td>
            <?php echo $set['TENBANH']; ?>
          </td>
          <td>
            <?php echo $set['SOLUONG']; ?>
          </td>

          <td>
            <?php echo $set['SIZEBANH']; ?>
          </td>
          <td>
            <?php
            $sum = $set['THANHTIEN'];
            $formattedSum = number_format($sum, 0, ',', '.');
            echo "{$formattedSum} đ";
            ?>
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

      </tr>
    </tbody>
  </table>
</div>