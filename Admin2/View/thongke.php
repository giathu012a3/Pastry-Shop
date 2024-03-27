<meta charset="UTF-8">
<!--Load the AJAX API-->
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
  google.load('visualization', '1.0', { 'packages': ['corechart'] });
  google.setOnLoadCallback(drawVisualization);
  function drawVisualization() {
    //thống kê số lượng bán hàng theo mặt hàng vẽ bieu do tron

  }

</script>
<div class="thongke">
  <div style=" width:50%;  float: left;" id="chart_div">dfsf</div>
  <div style=" width:50%;  float: right" id="chart_div1">dsfd</div>
</div>
<div class="main-panel">
  <div class="content-wrapper">

    <div class="row">
      <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  <?php
                  $tk = new thongke();
                  $result = $tk->countHoaDon();
                  while ($set = $result->fetch()):
                    ?>
                    <h3 class="mb-0">
                      <?php echo $set['COUNT(MAHD)']; ?>
                    </h3>
                    <!-- <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p> -->
                    <?php
                  endwhile;
                  ?>
                </div>
              </div>
              <div class="col-3">
                <div class="icon icon-box-success ">
                  <span class="mdi mdi-arrow-top-right icon-item"></span>
                </div>
              </div>
            </div>
            <h6 class="text-muted font-weight-normal">Tổng đơn hàng</h6>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  <?php
                  $tk = new thongke();
                  $result = $tk->countBinhLuan();
                  while ($set = $result->fetch()):
                    ?>
                    <h3 class="mb-0">
                      <?php echo $set['COUNT(mabinhluan)']; ?>
                    </h3>
                    <!-- <p class="text-success ml-2 mb-0 font-weight-medium">+11%</p> -->
                    <?php
                  endwhile;
                  ?>
                </div>
              </div>
              <div class="col-3">
                <div class="icon icon-box-success">
                  <span class="mdi mdi-arrow-top-right icon-item"></span>
                </div>
              </div>
            </div>
            <h6 class="text-muted font-weight-normal">Tổng bình luận</h6>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  <?php
                  $tk = new thongke();
                  $result = $tk->countUser();
                  while ($set = $result->fetch()):
                    ?>
                    <h3 class="mb-0">
                      <?php echo $set['COUNT(MAKH)']; ?>
                    </h3>
                    <!-- <p class="text-danger ml-2 mb-0 font-weight-medium">-2.4%</p> -->
                    <?php
                  endwhile;
                  ?>
                </div>
              </div>
              <div class="col-3">
                <div class="icon icon-box-danger">
                  <span class="mdi mdi-arrow-bottom-left icon-item"></span>
                </div>
              </div>
            </div>
            <h6 class="text-muted font-weight-normal">Tổng tài khoản đã đăng kí</h6>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  <?php
                  $tk = new thongke();
                  $result = $tk->sumHoaDon();
                  while ($set = $result->fetch()):
                    ?>
                    <h3 class="mb-0">
                      <?php
                      $sum = $set['sum(TONGTIEN)'];
                      $formattedSum = number_format($sum, 0, ',', '.');

                      echo "<h3 class=\"mb-0\">{$formattedSum} đ</h3>";
                      ?>
                    </h3>
                    <!-- <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p> -->
                    <?php
                  endwhile;
                  ?>
                </div>
              </div>
              <div class="col-3">
                <div class="icon icon-box-success ">
                  <span class="mdi mdi-arrow-top-right icon-item"></span>
                </div>
              </div>
            </div>
            <h6 class="text-muted font-weight-normal">Tổng thu nhập</h6>
          </div>
        </div>
      </div>
    </div>




  </div>
  <!-- content-wrapper ends -->
  <!-- partial:partials/_footer.html -->

  <!-- partial -->
</div>