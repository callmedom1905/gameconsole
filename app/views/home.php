


        <!-- Hero Start -->
        <div class="container-fluid py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-md-12 col-lg-7">
                        <h4 class="mb-3 text-secondary">100% Game chính hãng</h4>
                        <h1 class="mb-5 display-3 text-primary">PS4, PS5, Nitendo Switch & Game</h1>
                        <div class="position-relative mx-auto">
                            <input class="form-control border-2 border-secondary w-75 py-3 px-4 rounded-pill" type="number" placeholder="Tìm kiếm">
                            <button type="submit" class="btn btn-primary border-2 border-secondary py-3 px-4 position-absolute rounded-pill text-white h-100" style="top: 0; right: 25%;">Xác nhận</button>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-5">
                        <div id="carouselId" class="carousel slide position-relative" data-bs-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active rounded">
                                    <?php
                                    foreach($banners as $item){
                                        if($item->getId() == 2){
                                    ?>
                                    <img src="public/img/<?php echo $item->getImage() ?>" class="img-fluid w-100 rounded" alt="<?php echo $item->getName() ?>">
                                    <a href="#" class="btn px-4 py-2 text-white rounded"><?php echo $item->getName() ?></a>
                                    <?php  
                                        }
                                    }
                                    ?>
                                </div>
                                <div class="carousel-item rounded">
                                <?php
                                    foreach($banners as $item){
                                        if($item->getId() == 3){
                                    ?>
                                    <img src="public/img/<?php echo $item->getImage() ?>" class="img-fluid w-100 rounded" alt="<?php echo $item->getName() ?>">
                                    <a href="#" class="btn px-4 py-2 text-white rounded"><?php echo $item->getName() ?></a>
                                    <?php  
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->


       


        <!-- Fruits Shop Start-->
        <div class="container-fluid fruite py-5">
            <div class="container py-5">
                <div class="tab-class text-center">
                    <div class="row g-4">
                        <div class="col-lg-4 text-start">
                            <h1>Sản phẩm mới</h1>
                        </div>
                        <div class="col-lg-8 text-end">
                            <ul class="nav nav-pills d-inline-flex text-center mb-5">
                                <li class="nav-item">
                                    <a class="d-flex m-2 py-2 bg-light rounded-pill active" data-bs-toggle="pill" href="">
                                        <span class="text-dark" style="width: 130px;">Sản phẩm</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="d-flex py-2 m-2 bg-light rounded-pill" data-bs-toggle="pill" href="">
                                        <span class="text-dark" style="width: 130px;">Nitendo</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="">
                                        <span class="text-dark" style="width: 130px;">Playstation</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        <?php
                                        foreach ($proNew as $item){
                                        ?>
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <a href="/gameconsole/detail/<?php echo $item->getId() ?>">
                                                        <img src="public/img/<?php echo $item->getImage() ?>" class="img-fluid w-100 rounded-top" alt="">
                                                    </a>
                                                </div>
                                                <!-- <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div> -->
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <a href="/gameconsole/detail/<?php echo $item->getId() ?>">
                                                        <h4><?php echo $item->getName() ?></h4>
                                                    </a>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0"><?php echo number_format($item->getPrice())  ?> VND</p>
                                                        <a href="" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>Thêm giỏ hàng</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>      
            </div>
        </div>
        <!-- Fruits Shop End-->

        <!-- Fact Start -->
        <!-- <div class="container-fluid py-5">
            <div class="container">
                <div class="bg-light p-5 rounded">
                    <div class="row g-4 justify-content-center">
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="counter bg-white rounded p-5">
                                <i class="fa fa-users text-secondary"></i>
                                <h4>satisfied customers</h4>
                                <h1>1963</h1>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="counter bg-white rounded p-5">
                                <i class="fa fa-users text-secondary"></i>
                                <h4>quality of service</h4>
                                <h1>99%</h1>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="counter bg-white rounded p-5">
                                <i class="fa fa-users text-secondary"></i>
                                <h4>quality certificates</h4>
                                <h1>33</h1>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="counter bg-white rounded p-5">
                                <i class="fa fa-users text-secondary"></i>
                                <h4>Available Products</h4>
                                <h1>789</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Fact Start -->

        


        <!-- Banner Section Start-->
        <div class="container-fluid banner bg-secondary my-5">
            <div class="container py-5">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <div class="py-4">
                            <h1 class="display-3 text-white">PS5</h1>
                            <p class="fw-normal display-3 text-dark mb-4">có tại cửa hàng</p>
                            <a href="#" class="banner-btn btn border-2 border-white rounded-pill text-dark py-3 px-5">Mua ngay</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="position-relative">
                            <?php
                            foreach($banners as $item){
                                if($item->getId() == 1){
                            ?>
                            <img src="public/img/<?php echo $item->getImage() ?>" class="img-fluid w-100 rounded" alt="<?php echo $item->getName() ?>">
                            <?php  
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Section End -->


        <!-- Bestsaler Product Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5" style="max-width: 700px;">
                    <h1 class="display-4">Sản phẩm nổi bật</h1>
                </div>
                <div class="row g-4">
                    <?php
                    foreach($proHot as $item){

                    
                    ?>
                    <div class="col-lg-6 col-xl-4">
                        <div class="p-4 rounded bg-light">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <a href="/gameconsole/detail/<?php echo $item->getId() ?>">
                                        <img src="public/img/<?php echo $item->getImage() ?>" class="img-fluid rounded-circle w-100" alt="">
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="/gameconsole/detail/<?php echo $item->getId() ?>" class="h5"><?php echo $item->getName() ?></a>
                                    <!-- <div class="d-flex my-3">
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star text-primary"></i>
                                        <i class="fas fa-star"></i>
                                    </div> -->
                                    <h4 class="mb-3"><?php echo number_format($item->getPrice()) ?> VND</h4>
                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>Thêm giỏ hàng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- Bestsaler Product End -->



         <!-- Featurs Section Start -->
         <div class="container-fluid featurs py-5">
            <div class="container py-5">
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3">
                        <div class="featurs-item text-center rounded bg-light p-4">
                            <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                                <i class="fas fa-car-side fa-3x text-white"></i>
                            </div>
                            <div class="featurs-content text-center">
                                <h5>Vận chuyển</h5>
                                <p class="mb-0">Miễn phí vận chuyển</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="featurs-item text-center rounded bg-light p-4">
                            <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                                <i class="fas fa-user-shield fa-3x text-white"></i>
                            </div>
                            <div class="featurs-content text-center">
                                <h5>Chính sách bảo mật</h5>
                                <p class="mb-0">Thanh toán bảo mật 100%</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="featurs-item text-center rounded bg-light p-4">
                            <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                                <i class="fas fa-exchange-alt fa-3x text-white"></i>
                            </div>
                            <div class="featurs-content text-center">
                                <h5>Hỗ trợ đổi trả</h5>
                                <p class="mb-0">Liên hệ để được tư vấn</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="featurs-item text-center rounded bg-light p-4">
                            <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                                <i class="fa fa-phone-alt fa-3x text-white"></i>
                            </div>
                            <div class="featurs-content text-center">
                                <h5>Chăm sóc khách hàng</h5>
                                <p class="mb-0">Hỗ trợ khách hàng tận tình</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Featurs Section End -->


