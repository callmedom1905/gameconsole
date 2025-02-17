<!-- Libraries Stylesheet -->
<link href="../../admin/public/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="../../admin/public/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

<!-- Customized Bootstrap Stylesheet -->
<link href="../../admin/public/css/bootstrap.min.css" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="../../admin/public/css/style.css" rel="stylesheet">



<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary">GAMECONSOLE</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="../../admin/public/img/logo.png" alt=""
                    style="width: 40px; height: 40px;">
                <div
                    class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                </div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">Minh</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="/gameconsole/admin/" class="nav-item nav-link"><i
                    class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Elements</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="button.html" class="dropdown-item">Buttons</a>
                            <a href="typography.html" class="dropdown-item">Typography</a>
                            <a href="element.html" class="dropdown-item">Other Elements</a>
                        </div> 
                    </div> -->
            <a href="/gameconsole/admin/categories" class="nav-item nav-link "><i class="fa fa-keyboard me-2"></i>Danh
                mục</a>
            <a href="/gameconsole/admin/products" class="nav-item nav-link    "><i class="fa fa-th me-2"></i>Sản
                phẩm</a>
            <a href="/gameconsole/admin/users" class="nav-item nav-link active"><i class="fa fa-table me-2"></i>Người dùng</a>
            <!-- <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a> -->
            <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="signin.html" class="dropdown-item">Sign In</a>
                            <a href="signup.html" class="dropdown-item">Sign Up</a>
                            <a href="404.html" class="dropdown-item">404 Error</a>
                            <a href="blank.html" class="dropdown-item">Blank Page</a>
                        </div>
                    </div> -->
        </div>
    </nav>
</div>
<!-- Sidebar End -->

<!-- Table Start -->

<div class="col-12">
    <div class="bg-light rounded h-100 p-4">
        <h6 class="mb-4">Sửa người dùng</h6>
        <a class="btn btn-secondary rounded-pill m-2" href="/gameconsole/admin/users">Trở lại</a>
            <form action="/gameconsole/admin/action-edit-user/<?=$user->getId()?>" method="post" enctype="multipart/form-data">  

                <input class="form-control mb-3" type="text" name="email" placeholder="<?=$user->getEmail()?>" aria-label="default input example" readonly>

                <select class="form-select mb-3" name="role" aria-label="Default select example">
                    <?php
                    if($user->getRole() == 0){
                        echo '
                        <option selected value="0">Người dùng</option>
                        <option value="1">Quản trị viên</option>
                        ';
                    }else {
                        echo '
                        <option  value="0">Người dùng</option>
                        <option selected value="1">Quản trị viên</option>
                        ';
                    }
                    ?>
                    
                </select>

                <select class="form-select mb-3" name="active" aria-label="Default select example">
                    <?php
                    if($user->getActive() == 0){
                        echo '
                        <option selected value="0">Chưa kích hoạt</option>
                        <option value="1">Đã kích hoạt</option>
                        <option value="2">Đã khóa</option>
                        ';
                    }else if($user->getActive() == 1){
                        echo '
                        <option value="0">Chưa kích hoạt</option>
                        <option selected value="1">Đã kích hoạt</option>
                        <option value="2">Đã khóa</option>
                        ';
                    }else{
                        echo '
                        <option value="0">Chưa kích hoạt</option>
                        <option value="1">Đã kích hoạt</option>
                        <option selected value="2">Đã khóa</option>
                        ';
                    }
                    ?>
                </select>
                <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
            </form>
    </div>
</div>
</div>
</div>
<!-- Table End -->