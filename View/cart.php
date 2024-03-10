<div class="table-responsive">
  <!-- <script>
    function updateQuantity(change) {
      var input = document.getElementById('qty');
      var newValue = parseInt(input.value) + change;

      if (newValue >= 1) {
        input.value = newValue;

        // Sử dụng Ajax để gửi giá trị mới đến máy chủ (điều này làm bằng jQuery)
        // $.post('update_quantity.php', { quantity: newValue }, function(data) {
        //   // Xử lý dữ liệu trả về nếu cần
        // });
      }
    }
  </script> -->
  <?php
  if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
    ?>
    
      <div>

        <table class="table table-bordered">
          <thead>
            <tr>
              <td colspan="8">
                <h2 style="color: red;">THÔNG TIN GIỎ HÀNG</h2>
              </td>
            </tr>
            <tr class="table-success text-center">
              <th>Số TT</th>
              <th>Tên sản phẩm</th>
              <th>Thông Tin Sản Phẩm</th>
              <th>Tùy Chọn Của Bạn</th>
              <th>Giá</th>
              <th>Số Lượng:</th>
              <th>
                <p> Thành Tiền <sup><u>đ</u></sup></p>
              </th>
              <th>Chức năng</th>
            </tr>
          </thead>
          <tbody>
            <?php

            $j = 0;
            foreach ($_SESSION['cart'] as $key => $item) {
              $j++;

              ?>
              <tr>
                <td>
                  <?php echo $j ?>
                </td>
                <td>

                  <?php echo $item['name'] ?>
                </td>

                <td style="width: 120px;"><img width="120px" height="120px" src="Content/img/<?php echo $item['hinh']; ?>">
                </td>
                <?php
                if ($item['size'] == 0) {
                  ?>
                  <td>Mặc định</td>
                  <?php
                } else {

                  $ban = new banhngot();
                  $idsize = $ban->getBanhNgotIdSize($item['mabanh'], $item['size']);
                  $sizea = $idsize['sizebanh'];

                  ?>
                  <td> Size:
                    <?php echo $sizea ?>
                  </td>
                  <?php
                }
                ?>
                <td>Đơn Giá:
                  <?php echo $item['cost'] ?>
                </td>
                <form action="index.php?action=giohang&act=update_giohang&id=<?php echo $key; ?>" method="post">
                <td>
                  <!-- <button onclick="updateQuantity(-1)" type="button">-</button> -->
                  <input type="number" id="qty" name="newqty[<?php echo $key; ?>]" value="<?php echo $item['qty'] ?>" />
                  <!-- <button onclick="updateQuantity(1)" type="button">+</button> -->
                </td>
                <!-- thanh tien -->
                <td>
                  <?php echo number_format($item['total']) ?>
                </td>

                <td><a href="index.php?action=giohang&act=giohang_xoa&id=<?php echo $key; ?>"> <button type="button"
                      class="btn-more btn-more1">Xóa</button></a>

                  <button type="submit" class="btn-fix btn-more">sửa</button>


                </td>
                </form>
              </tr>
              <?php
            }
            ?>
            <tr>
              <td colspan="6">
                <b>Tổng Tiền</b>
              </td>
              <td style="float: right;">
                <b>
                  <?php
                  $gh = new giohang();
                  echo $gh->sub_Total();
                  ?>
                  <sup><u>đ</u></sup>
                </b>
              </td>
              <td><a href="index.php?action=thanhtoan">Thanh toán</a></td>
            </tr>
          </tbody>
        </table>
      </div>
    
    <?php
  } else {

    echo '<script> alert("gio hang chua co hang") </script>';
    echo '<meta http-equiv="refresh" content="0;url=./index.php?action=banhngot"/>';
  }
  ?>
</div>
</div>