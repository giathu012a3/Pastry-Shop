<div style="height: 70px;"></div>
<div class="row" style="width: 90%;margin: auto;">
  <table class="table table-dark text-center">
    <h1 class="text-center">Quản lý Hóa đơn</h1>
    <thead class="thead-dark">
      <tr>
        <th>Mã Hóa đơn</th>
        <th>Tên Khách hàng</th>
        <th>Số điện thoại</th>
        <th>Ngày bán</th>
        <th>Tổng tiền</th>
        <th>Tình trạng</th>
        <th></th>
        <th>Hoạt dộng</th>

      </tr>
    </thead>
    <tbody>
      <?php
      $hd = new hoadonAdmin();
      $result = $hd->gethoadon();
      while ($set = $result->fetch()):
        ?>
        <tr>
          <td scope="row">
            <?php echo $set['MAHD']; ?>
          </td>
          <td>
            <?php echo $set['TENKH']; ?>
          </td>
          <td>
            <?php echo $set['SDT']; ?>
          </td>

          <td>
            <?php echo $set['NGAYDAT']; ?>
          </td>
          <td>
            <?php
            $sum = $set['TONGTIEN'];
            $formattedSum = number_format($sum, 0, ',', '.');
            echo "{$formattedSum} đ";
            ?>
          </td>
          <td>
            <?php echo $set['tenTrangThai']; ?>
          </td>

          <td>
            <a href="index.php?action=hoadonAdmin&act=ct_hoadon&id=<?php echo $set['MAHD'] ?>" class="btn btn-success">Chi
              tiết</a>
          </td>
          <td>
            <?php
            if ($set['tthd'] == 1):
              ?>
              <?php
            else:
              ?>
              <a href="index.php?action=hoadonAdmin&act=tt_back&id=<?php echo $set['MAHD'] ?>" class="btn btn-success">
                << </a>
                  <?php
            endif;
            ?>

                <?php
                if ($set['tthd'] == 3):
                  ?>
                  <?php
                else:
                  ?>
                  <a href="index.php?action=hoadonAdmin&act=tt_next&id=<?php echo $set['MAHD'] ?>" class="btn btn-success">>></a>
                  <?php
                endif;
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