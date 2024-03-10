<link rel="stylesheet" type="text/css" href="Content/CSS/chitiet.css" />

<script type="text/javascript">
    function chonsize(a) {
        document.getElementById('size').value = a;
        console.log(a);
    }
</script>
<script>
    function updateQuantity(change) {
        var input = document.getElementById('soluong');
        var newValue = parseInt(input.value) + change;

        if (newValue >= 1) {
            input.value = newValue;

            // Sử dụng Ajax để gửi giá trị mới đến máy chủ (điều này làm bằng jQuery)
            // $.post('update_quantity.php', { quantity: newValue }, function(data) {
            //   // Xử lý dữ liệu trả về nếu cần
            // });
        }
    }
</script>
<section>
    <div class="row">
        <div class="col-lg-12 text-center" style="color:#663332;">
            <h1 class="mb-5 font-weight-bold">CHI TIẾT SẢN PHẨM</h1>
        </div>
        <!-- <div class="card"> -->
        <div class="col-lg-12">
            <form action="index.php?action=giohang&act=giohang_action" method="post">
                <!-- <input type="hidden" name="action" value="giohang&add_cart"/> -->
                <div class="row">

                    <div class="preview col-lg-3 offset-lg-2">
                        <div class="tab-content">
                            <?php
                            if (isset($_GET['id'])) {
                                $id = $_GET['id'];
                                $bn = new banhngot();
                                $sp = $bn->getBanhNgotId($id);
                                $tenbn = $sp['tenbanh'];
                                $mota = $sp['mota'];
                                $dongia = $sp['gia'];
                            }
                            ?>

                            <?php
                            $hinh = $bn->getBanhNgotHinh($id);
                            $set = $hinh->fetch()
                                ?>
                            <div class="tab-pane active" id=""><img
                                    src="<?php echo 'Content/img/' . $set['hinhanh']; ?>" alt="" width="200px"
                                    height="350px">
                            </div>

                        </div>
                        <ul class="preview-thumbnail nav nav-tabs">
                            <?php
                            while ($img = $hinh->fetch()):
                                ?>
                                <li class="active"><a href="#<?php echo $img['hinhanh']; ?>" data-toggle="tab">
                                        <img src="<?php echo 'Content/img/' . $img['hinhanh']; ?>"
                                            alt="Học thiết kế web bán hàng Online"></a>
                                </li>
                                <?php
                            endwhile;
                            ?>
                        </ul>
                    </div>
                    <div class=" col-lg-7">
                        <input type="hidden" name="mabanh" value="<?php echo $id; ?>" />
                        <!-- <input type="hidden" name="tenbanh" value="<?php echo $tenbn; ?>" /> -->
                        <h3 class="product-title">
                            <?php echo $tenbn ?>
                        </h3>
                        <div class="rating">
                            <div class="stars"> <span class="fa fa-star checked"></span> <span
                                    class="fa fa-star checked"></span> <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span> <span class="fa fa-star"></span>
                            </div>
                        </div>
                        <p class="product-description">
                            <?php echo $mota ?>
                        </p>
                        <h4 class="price">Giá bán:
                            <?php echo number_format($dongia) ?> đ
                        </h4>

                        <h5>

                            <input type="hidden" name="size" id="size" value="0" />
                            Kích Thước:
                            <?php
                            $size = $bn->getBanhNgotSize($id);
                            while ($set = $size->fetch()):
                                ?>
                                <button type="button" onclick="chonsize(<?php echo $set['masizebanh']; ?>)" name=""
                                    class="btn" id="hong" value="<?php echo $set['masizebanh']; ?>">
                                    <?php if ($set['masizebanh'] !== 0) {
                                        echo $set['sizebanh'];
                                    }
                                    ?>
                                </button>
                                <?php
                            endwhile;
                            ?>
                            </br></br>

                            <div class="number-input ml-0 mr-0">
                                <span>Số Lượng:</span>
                                <button onclick="updateQuantity(-1)" type="button">-</button>
                                <input type="number" id="soluong" name="soluong" value="1" min="1">
                                <button onclick="updateQuantity(1)" type="button">+</button>
                            </div>


                        </h5>

                        <div class="action">
                            <div class="btn">
                                <button class="btn-more btn-more1 w-100" type="submit" data-toggle="modal"
                                    data-target="#myModal">Thêm vào giỏ hàng</button>
                            </div>

                            <a href="http://hocwebgiare.com/" target="_blank"> <button class="like btn btn-default"
                                    type="button"><span class="fa fa-heart"></span></button> </a>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    </form>
    <!-- </div> -->
    </div>
</section>

<p class="float-left"><b>BÌnh luận </b></p>
<hr>
</div>
<form action="index.php?action=binhluan" method="post">
    <div class="row">

        <input type="hidden" name="txtmahh" value="<?php echo $id; ?>" />
        <!-- <img src="Content/imagetourdien/people.png" width="50px" height="50px" ; /> -->
        <textarea class="input-field" type="text" name="comment" rows="2" cols="70" id="comment"
            placeholder="Thêm bình luận">  </textarea>
        <input type="submit" class="btn btn-primary" id="submitButton" style="float: right;" value="Bình Luận" />

    </div>

</form>
<div class="row">
    <p class="float-left"><b>Các bình luận</b></p>
    <hr>
    <?php
    $bl = new binhluan();
    $noidung = $bl->selectBinhLuan($id);
    while ($set = $noidung->fetch()):
        ?>


    </div>
    <div class="row">

        <div class="col-12">
            <div class="row">

                <p style="padding-left: 80px;">
                    <?php echo '<b>' . $set['TENKH'] . ': </b> <br >' .'<span style="magrin: 20px;">'. $set['noidung'] .'</span>'?>
                </p><br>
            </div>
        </div>
    </div>

<?php
    endwhile;
    ?>
</div>
</section>