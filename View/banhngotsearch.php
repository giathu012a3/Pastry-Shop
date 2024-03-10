<div class="container">

    <div class="row">
    
        <?php 
        $db=new banhngot();
        while ($set = $result->fetch()):
        ?>
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
    </div>
</div>