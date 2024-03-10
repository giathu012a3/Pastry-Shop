<!-- quảng cáo -->
<?php
include "quangcao.php";
?>
<!-- end quảng cáo -->
<?php
// b1 xác định có bao nhiêu sản phẩm, select count(*)
$banhngot = new banhngot();
$ac = 1;
if (isset($_GET['action'])) {
    if ($_GET['action'] == 'banhngot') {
        if (isset($_GET['act']) && $_GET['act'] == 'banhngotheoloai') {
            $ac = 2;
            $idloai = $_GET['idloai'];
            $count = $banhngot->getbanhngotmenuAll($idloai)->rowCount();
        } else {
            $count = $banhngot->getbanhngotAll()->rowCount();
            $ac = 1;
        }
    }
}
// b2 xavs định limit
$limit = 8;
//b3: tính ra có bao nhiêu trang
$trang = new Page();
$page = $trang->findPage($count, $limit);

//b4 tính start
$start = $trang->findStart($limit);
//b5 tạo biến chứa trang hiện tại
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
?>

<!-- end số lượt xem san phẩm -->
<!-- sản phẩm-->
<?php

?>
<div class="container">
    
    <!--Section: Examples-->
    <section id="examples" class="text-center">
        <div class="container-fluid Heading-home">
            <!-- <h2 class="font-weight-bold text-danger">SẢN PHẨM MỚI NHẤT</h2> -->
            <?php
            $banhngot = new banhngot();
            if (!isset($_GET['idloai'])):
                ?>
    
                <h2 class="font-weight-bold text-danger">SẢN PHẨM MỚI NHẤT</h2>
    
                <?php
            else:
                $result = $banhngot->getten($idloai);
                while ($set = $result->fetch()):
                    ?>
                    <h2 class="font-weight-bold text-danger">
                        <?php echo $set['tenloai']; ?>
                    </h2>
                <?php endwhile; endif ?>
        </div>
        <!-- Heading -->
    
        <!--Grid row-->
        <div class="row">
        <div class="col-lg-12">
    
            <?php
            $banhngot = new banhngot();
            if ($ac == 1) {
                $result = $banhngot->getbanhngotAllPage($start, $limit);
            }
            if ($ac == 2) {
                $result = $banhngot->getbanhngotmenuPage($start, $limit, $idloai);
            }
            while ($set = $result->fetch()):
            ?>
            <!--Grid column-->
            <div class="col-lg-3 col-md-4 mb-3" style="min-width: 255px;">
                <div class="card h-100" >
                    <button class="btn btn-danger" id="may4" value="lap 4">New</button>
                    <img class="card-img-top" src="Content/img/<?php echo $set['hinhanh']; ?>" alt="">
                    <div style="min-height: 75px;" class="card-body d-flex flex-column align-items-stretch">
                        <a  href="index.php?action=banhngot&act=chitietbanhngot&id=<?php echo $set['mabanh'] ?>" class="card-title">
                            <?php echo $set['tenbanh'] ?>
                        </a>
                        <h5 class="my-4 font-weight-bold" style="color: red;">
                            <?php echo number_format($set['gia']); ?>
                            <sup><u>đ</u></sup></br>
                        </h5>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
    
        </div>
    </div>
    
    
        <!--Grid row-->
    
    </section>
    
    
    <!-- end sản phẩm mới nhất -->
    
    
    <div class="col-md-6 div col-md-offset-3">
        <ul class="pagination">
            <?php
            if ($current_page > 1 && $page > 1 && $ac == 1) {
                echo '<li><a href="index.php?action=banhngot&page=' . ($current_page - 1) . '">Prec</a></li>';
            } elseif ($current_page > 1 && $page > 1 && $ac == 2) {
                echo '<li><a href="index.php?action=banhngot&act=banhngotheoloai&idloai=1&page=' . ($current_page - 1) . '">Prec</a></li>';
            }
            for ($i = 1; $i <= $page; $i++):
                if (!isset($_GET['idloai'])):
                    ?>
                    <li><a href="index.php?action=banhngot&page=<?php echo $i; ?>">
                            <?php echo $i; ?>
                        </a></li>
                <?php
                endif;
                ?>
                
                <?php
                if (isset($_GET['idloai'])):
                ?>
                 <li><a href="index.php?action=banhngot&act=banhngotheoloai&idloai=1&page=<?php echo $i; ?>">
                            <?php echo $i; ?>
                        </a></li>
                <?php
                endif;
                ?>
                <?php
            endfor;
            if ($current_page < $page && $page > 1 && $ac == 1) {
                echo '<li><a href="index.php?action=banhngot&page=' . ($current_page + 1) . '">Next</a></li>';
            } elseif ($current_page < $page && $page > 1 && $ac == 2) {
                echo '<li><a href="index.php?action=banhngot&act=banhngotheoloai&idloai=1&page=' . ($current_page + 1) . '">Next</a></li>';
            }
            ?>
        </ul>
    </div>
</div>