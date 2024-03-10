<!--Section: Examples-->
<section id="examples" class="text-center" ">
<!-- hinh dộng -->
<div class="row">

    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <div id="carousel-example-1z" class="carousel slide carousel-fade carousel-fade " data-ride="carousel">
                    <!--Indicators-->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                        <li data-target="#carousel-example-1z" data-slide-to="2"></li>

                    </ol>
                    <!--/.Indicators-->
                    <!--Slides-->
                    <div class="carousel-inner z-depth-1-half" role="listbox">
                        <!--First slide-->
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="./Content/img/slideshow_1.jpg" style="height: 100%;"
                                alt=" First slide">
                        </div>
                        <!--/First slide-->
                        <!--Second slide-->
                        <!-- <div class="carousel-item">
                            <img class="d-block w-100" src="./Content/img/banner2.jpg" style="height: 100%;"
                                alt="Second slide">
                        </div> -->
                        <!--/Second slide-->
                        <!--Third slide-->
                        <!-- <div class="carousel-item">
                            <img class="d-block w-100" src="./Content/img/banner3.jpg" alt="Third slide"
                                style="height: 100%;">
                        </div> -->

                        <!--/Third slide-->
                    </div>
                    <!--/.Slides-->
                    <!--Controls-->
                    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <!--/.Controls-->
                </div>
            </div>
        </div>

    </div>
</div>
    <!-- Heading -->
    <!-- <div class=" row">
    <div class="col-lg-8 text-right">
        <h3 class="mb-5 font-weight-bold" style="color: red;">SẢN PHẨM MỚI NHẤT</h3>
    </div>
    <div class="col-lg-4 text-right mt-4">
        <a href="">
            <span style="color: gray;">Xem chi tiết</span>
    </div>
    </a>

    </div> -->
    <div class="container">
        
        <div class="container-fluid Heading-home">
            <h2 class="font-weight-bold text-danger">SẢN PHẨM MỚI NHẤT</h2>
        </div>
        <!--Grid row-->
    
        <div class="row">
            <?php
            $hh = new banhngot();
            $result = $hh->getbanhngotnew();
            while ($set = $result->fetch()):
                ?>
                <!--Grid column-->
                <div class="col-lg-3 col-md-4 mb-3">
                    <div class="card h-100" style="min-width: 255px;" >
                        <button class="btn btn-danger" id="may4" value="lap 4">New</button>
                        <img class="w-80 "   src="Content/img/<?php echo $set['hinhanh']; ?>" alt="">
                        <div class="card-body d-flex flex-column align-items-stretch">
                            <a href="index.php?action=banhngot&act=chitietbanhngot&id=<?php echo $set['mabanh'] ?>" class="card-title">
                                <?php echo $set['tenbanh'] ?>
                            </a>
                            <h5 class="my-4 font-weight-bold" style="color: red;">
                                <?php echo number_format($set['gia']); ?><sup><u>đ</u></sup></br>
                            </h5>
                        </div>
                    </div>
                </div>
    
                <?php
            endwhile;
            ?>
            <div class="btn"> <a href="index.php?action=banhngot">
                    <button type="button" class="btn-more btn-more1">Xem thêm</button></a>
            </div>
            
        </div>
       

            </div>
        </div>
    
        </div>
    </div>

    <!--Grid row-->


<!-- end sản phẩm khuyến mãi -->