<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="public/img/logo.png">
    <title>Gameconsole</title>
    <?php 
     include 'include.php';
    ?>

</head>

<body>
<!-- Navbar start -->
<div class="container-fluid fixed-top">
    <div class="container topbar bg-primary d-none d-lg-block">
        <div class="d-flex justify-content-between">
            <div class="top-info ps-2">
                <small class="me-3"><i class="fas fa-map-marker-alt me-2 text-secondary"></i> <a href="#" class="text-white">TP Hồ Chí Minh</a></small>
                <small class="me-3"><i class="fas fa-envelope me-2 text-secondary"></i><a href="#" class="text-white">minhtcps38149@gmail.com</a></small>
            </div>
            <?php
            if(isset($_SESSION['user'])){
            ?>
            <div class="top-link pe-2">
                <a href="#" class="text-white"><small class="text-white mx-2"><?=$_SESSION['user']?></small>/</a>
                <a href="/gameconsole/logout" class="text-white"><small class="text-white mx-2">Đăng xuất</small>/</a>
            </div>
            <?php 
            } else{
                echo '';
            }
            ?>
        </div>
    </div>
    <div class="container px-0">
        <nav class="navbar navbar-light bg-white navbar-expand-xl">
            <a href="/gameconsole/" class="navbar-brand"><h1 class="text-primary display-6">Gameconsole</h1></a>
            <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars text-primary"></span>
            </button>
            <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="/gameconsole/" class="nav-item nav-link active">Trang chủ</a>
                    <a href="/gameconsole/products" class="nav-item nav-link">Sản phẩm</a>
                    <div class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Nitendo</a>
                        <div class="dropdown-menu m-0 bg-secondary rounded-0">
                        <?php
                        $categories = new CategoriesModel();
                        $categories = $categories->getAllCategories();
                        foreach ($categories as $item){
                            if($item->getType() == 0){
                                echo "<a href='/gameconsole/".$item->getURL()."' class='dropdown-item'>".$item->getName()."</a>";
                            }
                        }
                            ?>

                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Playstation</a>
                        <div class="dropdown-menu m-0 bg-secondary rounded-0">
                        <?php
                        foreach ($categories as $item){
                            if($item->getType() == 1){
                                echo "<a href='/gameconsole/".$item->getURL()."' class='dropdown-item'>".$item->getName()."</a>";
                            }
                        }
                            ?>
                        </div>
                    </div>
                    <a href="/gameconsole/about" class="nav-item nav-link">Giới thiệu</a>
                    <a href="/gameconsole/contact" class="nav-item nav-link">Liên Hệ</a>
                </div>
                <div class="d-flex m-3 me-0">
                    <button class="btn-search btn border border-secondary btn-md-square rounded-circle bg-white me-4" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search text-primary"></i></button>
                    <a href="/gameconsole/cart" class="position-relative me-4 my-auto">
                        <i class="fa fa-shopping-bag fa-2x"></i>
                        <span class="position-absolute bg-secondary rounded-circle d-flex align-items-center justify-content-center text-dark px-1" style="top: -5px; left: 15px; height: 20px; min-width: 20px;">3</span>
                    </a>
                    <?php
                    if(!isset($_SESSION['user'])){
                    ?>
                    <a href="/gameconsole/signIn" class="my-auto">
                        <i class="fas fa-user fa-2x"></i>
                    </a>
                    <?php
                    }else{
                        echo '';
                    }
                    ?>
                </div>  
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->
<main>
    <?php
    include 'main.php';
    ?>
</main>
        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5">
            <div class="container py-5">
                <div class="pb-4 mb-4" style="border-bottom: 1px solid rgba(226, 175, 24, 0.5) ;">
                    <div class="row g-4">
                        <div class="col-lg-3">
                            <a href="#">
                                <h1 class="text-primary mb-0">Gameconsole</h1>
                                <p class="text-secondary mb-0">Sản phẩm chính hãng</p>
                            </a>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mx-auto">
                                <input class="form-control border-0 w-100 py-3 px-4 rounded-pill" type="number" placeholder="Email của bạn">
                                <button type="submit" class="btn btn-primary border-0 border-secondary py-3 px-4 position-absolute rounded-pill text-white" style="top: 0; right: 0;">Đăng ký ngay</button>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="d-flex justify-content-end pt-3">
                                <a class="btn  btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-outline-secondary btn-md-square rounded-circle" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h4 class="text-light mb-3">Tại sao nên chọn chúng tôi</h4>
                            <p class="mb-4">Web chúng tôi cung cấp game, Nintendo, PS4, PS5 chính hãng với giá hấp dẫn, đa dạng tựa game hot và dịch vụ hỗ trợ game thủ tối ưu!</p>
                            <a href="" class="btn border-secondary py-2 px-4 rounded-pill text-primary">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="d-flex flex-column text-start footer-item">
                            <h4 class="text-light mb-3">Thông tin cửa hàng</h4>
                            <a class="btn-link" href="">Giới thiệu</a>
                            <a class="btn-link" href="">Liên hệ</a>
                            <a class="btn-link" href="">Chính sách bảo mật</a>
                            <a class="btn-link" href="">Điều khoản sử dụng</a>
                            <a class="btn-link" href="">Tư vấn khách hàng</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="d-flex flex-column text-start footer-item">
                            <h4 class="text-light mb-3">Tài khoản</h4>
                            <a class="btn-link" href="">Thông tin tài khoản</a>
                            <a class="btn-link" href="">Giỏ hàng</a>
                            <a class="btn-link" href="">Lịch sử đơn hàng</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h4 class="text-light mb-3">Liên hệ</h4>
                            <p>Địa chỉ: TP Hồ Chí Minh</p>
                            <p>Email: minhtpcs38149@gmail.com</p>
                            <p>Số điện thoại: +84 933661897</p>
                            <p>Phương thức thanh toán</p>
                            <img src="public/img/payment.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Copyright Start -->
        <div class="container-fluid copyright bg-dark py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Trần Chí Minh</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 my-auto text-center text-md-end text-white">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        <!-- Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->



        <!-- Back to Top -->
        <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

<!-- script -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="/gameconsole/public/lib/easing/easing.min.js"></script>
<script src="/gameconsole/public/lib/waypoints/waypoints.min.js"></script>
<script src="/gameconsole/public/lib/lightbox/js/lightbox.min.js"></script>
<script src="/gameconsole/public/lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="/gameconsole/public/js/main.js"></script>
</body>

</html>