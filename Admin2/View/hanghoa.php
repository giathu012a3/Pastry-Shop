<div class="row" style="width: 90%;margin: auto;">
  <table class="table table-dark text-center">
    <thead class="thead-dark">
      <tr>
        <th>Mã bánh</th>
        <th>Tên Bánh</th>
        <th>Tình trạng</th>
        <th>Mã Loại</th>
        <th>Tên Loại</th>
        <th>Mô tả</th>
        <th>Ngày lập</th>
        <th>Cập Nhật</th>
        <th>Xóa</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $hh = new hanghoa();
      $result = $hh->getHangHoa();
      while ($set = $result->fetch()):
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
            <?php echo $set['MALOAI']; ?>
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
            <a href="" class="btn btn-success">Cập Nhật</a>
          </td>
          <td>
            <a href="" class="btn btn-danger">Xóa</a>
          </td>
        </tr>
      <?php endwhile; ?>
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