<!-- Single Page Header start -->
<div class="container-fluid py-5"></div>
<!-- Single Page Header End -->

<!-- Fruits Shop Start-->
<div class="container-fluid fruite py-5">
    <div class="container py-5">
        <h1 class="mb-4">Gameconsole</h1>
        <div class="row g-4">
            <div class="col-lg-12">
                <div class="row g-4">
                    <div class="col-xl-3">
                        <div class="input-group w-100 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="Tìm kiếm"
                                aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                    <div class="col-6"></div>

                </div>
                <div class="row g-4">
                    <div class="col-lg-3">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <h4>Danh mục</h4>
                                    <ul class="list-unstyled fruite-categorie">
                                        <?php
                                        foreach ($categories as $item) {
                                            ?>
                                            <li>
                                                <div class="d-flex justify-content-between fruite-name">
                                                    <a href="#"><i
                                                            class="fas fa-apple-alt me-2"></i><?= $item->getName() ?></a>
                                                    <span>(3)</span>
                                                </div>
                                            </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <h4 class="mb-3">Sản phẩm ưu đãi</h4>
                                <?php
                                foreach ($proSale as $item) {
                                    ?>
                                    <div class="d-flex align-items-center justify-content-start">

                                        <div class="rounded me-4" style="width: 100px; height: 100px;">
                                            <img src="/gameconsole/public/img/<?= $item->getImage() ?>"
                                                class="img-fluid rounded" alt="">
                                        </div>
                                        <div>
                                            <h6 class="mb-2"><?= $item->getName() ?></h6>
                                            <!-- <div class="d-flex mb-2">
                                                    <i class="fa fa-star text-secondary"></i>
                                                    <i class="fa fa-star text-secondary"></i>
                                                    <i class="fa fa-star text-secondary"></i>
                                                    <i class="fa fa-star text-secondary"></i>
                                                    <i class="fa fa-star"></i>
                                                </div> -->
                                            <div class="d-flex mb-2">
                                                <h5 class="fw-bold me-2"><?= $item->getSalePrice() ?> VND</h5>
                                                <h5 class="text-danger text-decoration-line-through"><?= $item->getPrice() ?>
                                                    VND</h5>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row g-4 justify-content-center">
                            <?php
                            foreach ($products as $item) {
                                ?>
                                <div class="col-md-6 col-lg-6 col-xl-4">
                                    <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img">
                                            <img src="/gameconsole/public/img/<?= $item->getImage() ?>"
                                                class="img-fluid w-100 rounded-top" alt="">
                                        </div>
                                        <!-- <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div> -->
                                        <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                            <h4><?= $item->getName() ?></h4>
                                            <p><?= $item->getDiscription() ?></p>
                                            <div class="d-flex justify-content-between flex-lg-wrap">
                                                <p class="text-dark fs-5 fw-bold mb-0">
                                                    <?php
                                                    if ($item->getSalePrice() != null) {
                                                        echo number_format($item->getSalePrice());
                                                    } else {
                                                        echo number_format($item->getPrice());
                                                    }
                                                    ?>
                                                    VND
                                                </p>
                                                <a href="#"
                                                    class="btn border border-secondary rounded-pill px-3 text-primary"><i
                                                        class="fa fa-shopping-bag me-2 text-primary"></i> Thêm giỏ hàng</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                            <!-- <div class="col-12">
                                <div class="pagination d-flex justify-content-center mt-5">
                                    <a href="#" class="rounded">&laquo;</a>
                                    <a href="#" class="active rounded">1</a>
                                    <a href="#" class="rounded">2</a>
                                    <a href="#" class="rounded">3</a>
                                    <a href="#" class="rounded">4</a>
                                    <a href="#" class="rounded">5</a>
                                    <a href="#" class="rounded">6</a>
                                    <a href="#" class="rounded">&raquo;</a>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fruits Shop End-->