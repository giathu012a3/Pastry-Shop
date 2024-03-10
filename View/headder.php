<link rel="stylesheet" href="Content/CSS/header.css">

<header class="header-csroll">
    <div class="col-12">
        <div class="container-fluid ">
            <nav class="navbar navbar-expand-sm navbar-light bg-light" <div class="collapse navbar-collapse "
                id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0 menu-header">
                    <li class="nav-item">
                        <a class="nav-link logo-header" style="font-size: 16px;font-weight: 700;"
                            href="index.php?action=home"><img src="Content/img/logo.jpg" alt=""></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="font-size: 16px;font-weight: 700;" href="index.php?action=home">Trang
                            chủ</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style="font-size: 16px;font-weight: 700;" href="#"
                            id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Bánh ngọt
                            và bánh mì </a>
                        <div class="dropdown-menu menu1" aria-labelledby="dropdownId">
                            <?php
                            $bn = new banhngot();
                            $result = $bn->getmenubanhngot();
                            while ($set = $result->fetch()):
                                ?>
                                <a class="dropdown-item "
                                    href="index.php?action=banhngot&act=banhngotheoloai&idloai=<?php echo $set['maloai'] ?>">
                                    <?php echo $set['tenloai'] ?>
                                </a>
                                <?php
                            endwhile;
                            ?>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="font-size: 16px;font-weight: 700;" href="#">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="font-size: 16px;font-weight: 700;" href="#">Tin Tức & Khuyến ại</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="font-size: 16px;font-weight: 700;" href="#">Liên Hệ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="font-size: 16px;font-weight: 700;" href="#">Tuyển dụng</a>
                    </li>

                </ul>

        </div>
        </nav>
    </div>
    </div>

</header>
<header class="row no-gutters cv">
    <!-- dang ky -->
    <section class="col-12">

        <div class="col-12">
            <div class="row">
                <nav class="navbar navbar-expand-sm navbar-light bg-light" style="height: 150px;margin-bottom: 0px;">
                    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                        data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                        aria-label="Toggle navigation">
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav mr-auto mt-lg-0">
                            <li class="nav-item active" style="display: inline-block;">
                                <a class="navbar-brand logo" href="#"><img src="./Content/img/logo.jpg"
                                        style="line-height: 100%;margin-top: -24px;" alt=""></a>
                            </li>
                            <li>
                                <form class="form-inline" action="index.php?action=banhngot&act=searchtxt" method="post">
                                    <div class="input-group">
                                        <div class="input-group-prepend ">
                                            <!-- <a href="Trangchu.php?trang=tk"> -->

                                            <input type="text" class="btn-search" name="txtsearch" class="form-control"
                                                placeholder="Tìm Kiếm" />
                                            <button type="submit" class="ti-search input-group-text i-search"
                                                style=""></button>
                                            <!-- </a> -->
                                            <!-- <span class="input-group-text">@</span> -->
                                        </div>

                                </form>
                            </li>

                        </ul>
                        <ul class="navbar-nav ml-auto mt-4">

                            <?php
                            if (!isset($_SESSION['makh'])) {
                                ?>
                                <li class="nav-item">
                                    <a href="index.php?action=dangky" class="nav-link btn btn-primary">Đăng Ký</a>
                                </li>
                                <li class="nav-item">
                                    <a href="index.php?action=dangnhap" class="nav-link btn btn-success">Đặng Nhập</a>
                                </li>
                                <?php
                            }
                            ?>
                            <?php
                            if (isset($_SESSION['makh'])) {
                                ?>
                                <li class="nav-item">
                                    <a href="index.php?action=dangnhap&act=dangxuat" class="nav-link btn btn-danger">Đặng Xuất</a>
                                </li>
                                <?php
                            }
                            ?>

                            <?php
                            if (isset($_SESSION['makh'])) {
                                echo '<li>
                            <p style="color:red; margin-top: 12px;margin-left:0px;">' . $_SESSION['tenkh'] . '</p>
                            </li>';
                            } else {
                                echo '<l1>
                            <p style="color:red; margin-top: 20px;margin-left:0px;">Xin chào</p>
                            </l1>';
                            }
                            ?>

                            <li>
                                <a href="index.php?action=giohang" style="color: red; margin-top: 20px; margin-left: 0px;" class="ti-shopping-cart">(0)
                                </a>

                            </li>
                            <li>

                                <p style="color: red; margin-top: 20px; margin-left: 0px;" "></p>

                            </li>
                            <?php
                            ?>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
            <div class=" col-12">
                                <div class="container ">
                                    <nav class="navbar navbar-expand-sm navbar-light bg-light" <div
                                        class="collapse navbar-collapse " id="collapsibleNavId">
                                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 menu-header">
                                            <li class="nav-item">
                                                <a class="nav-link" style="font-size: 16px;font-weight: 700;"
                                                    href="index.php?action=home">Trang chủ</a>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle"
                                                    style="font-size: 16px;font-weight: 700;" href="#" id="dropdownId"
                                                    data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">Bánh ngọt và bánh mì </a>
                                                <div class="dropdown-menu menu1" aria-labelledby="dropdownId">
                                                    <?php
                                                    $bn = new banhngot();
                                                    $result = $bn->getmenubanhngot();
                                                    while ($set = $result->fetch()):
                                                        ?>
                                                        <a class="dropdown-item "
                                                            href="index.php?action=banhngot&act=banhngotheoloai&idloai=<?php echo $set['maloai'] ?>">
                                                            <?php echo $set['tenloai'] ?>
                                                        </a>
                                                        <?php
                                                    endwhile;
                                                    ?>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" style="font-size: 16px;font-weight: 700;"
                                                    href="index.php?action=giohang">Giỏ hàng</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" style="font-size: 16px;font-weight: 700;"
                                                    href="#">Tin Tức & Khuyến ại</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" style="font-size: 16px;font-weight: 700;"
                                                    href="#">Liên Hệ</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" style="font-size: 16px;font-weight: 700;"
                                                    href="#">Tuyển dụng</a>
                                            </li>

                                        </ul>

                                </div>
                </nav>
            </div>
        </div>
    </section>


</header>
<!-- dang ky -->