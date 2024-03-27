<div style="height: 70px;"></div>
<div class="row" style="width: 90%;margin: auto;">
  <table class="table table-dark text-center">
    <h1 class="text-center">Tất cả sản phẩm</h1>
    <thead class="thead-dark">
      <tr>
        <th>Mã bánh</th>
        <th>Tên Bánh</th>
        <th>Tình trạng</th>
        <th>Size</th>
        <th>Tên Loại</th>
        <th>Mô tả</th>
        <th>Ngày lập</th>
        <th>Cập Nhật</th>
        <th>Xóa</th>
        <th>tình trạng</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $hh = new hanghoa();
      $result = $hh->getHangHoa();
      while ($set = $result->fetch()):
        if ($set['check'] == 0):
          ?>
          <tr>
            <td scope="row">
              <?php echo $set['mabanh']; ?>
            </td>
            <td>
              <?php echo $set['TENBANH']; ?>
            </td>
            <?php
            if ($set['TinhTrang'] == 0) {
              ?>
              <td>Còn hàng</td>
              <?php
            } else {
              ?>
              <td>Hết hàng</td>
              <?php
            }

            ?>
            <td>
              <?php echo $set['SIZEBANH']; ?>
            </td>
            <td>
              <?php echo $set['TENLOAI']; ?>
            </td>
            <td>
              <?php echo $set['mota']; ?>
            </td>
            <td>
              <?php echo $set['NGAYLAP']; ?>
            </td>

            <td>
              <a href="index.php?action=hanghoa&act=update_hanghoa&id=<?php echo $set['mabanh'] ?>"
                class="btn btn-success">Cập Nhật</a>
            </td>
            <td>
              <a <a href="index.php?action=hanghoa&act=delete_hanghoa&id=<?php echo $set['mabanh'] ?>"
                class="btn btn-danger"> >Xóa</a>
            </td>
            <td>
              <?php
              if ($set['TinhTrang'] == 0):
                ?>
                <p >Còn hàng</p>
                <a href="index.php?action=hanghoa&act=hethang&id=<?php echo $set['mabanh'] ?>" class="btn btn-danger">Hết hàng</a>

              <?php
              else:
                ?>
                <p >Hết hàng</p>
                <a href="index.php?action=hanghoa&act=themhang&id=<?php echo $set['mabanh'] ?>" class="btn btn-danger">Thêm hàng</a>
                <?php
              endif;
              ?>
            </td>
          </tr>
          <?php
        endif;
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