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
            <a href="/gameconsole/admin/products" class="nav-item nav-link active   "><i class="fa fa-th me-2"></i>Sản
                phẩm</a>
            <a href="/gameconsole/admin/users" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Người dùng</a>
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
        <h6 class="mb-4">Sửa sản phẩm</h6>
        <a class="btn btn-secondary rounded-pill m-2" href="/gameconsole/admin/products">Trở lại</a>
        <form action="/gameconsole/admin/action-add-pro" method="post" enctype="multipart/form-data">

            <input class="form-control mb-3" type="text" name="name" placeholder="<?= $product->getName() ?>" aria-label="default input example">
            <input class="form-control mb-3" type="text" name="price" placeholder="<?= $product->getPrice() ?>" aria-label="default input example">
            <input class="form-control mb-3" type="text" name="salePrice" placeholder="<?= $product->getSalePrice() ?>" aria-label="default input example">
            <input class="form-control mb-3" type="text" name="discription" placeholder="<?= $product->getDiscription() ?>" aria-label="default input example">

            <div class="mb-3">
                <label for="formFile" class="form-label">Hình chính</label>
                <img src="../public/img/<?= $product->getImage() ?>" alt="">
                <input class="form-control" type="file" name="image" id="formFile">
            </div>

            <div class="mb-3">
                <label for="formFileMultiple" class="form-label">Danh sách hình ảnh</label>
                <?php
                $images = $product->getListImages();
                if (!empty($images)) {
                    $image = explode(",", $images);
                } else {
                    $image = [];
                }
                foreach ($image as $img) {
                    ?>
                    <img src="../public/img/<?= trim($img) ?>" width="100px">
                <?php } ?>
                <input class="form-control" type="file" name="listImages" id="formFileMultiple" multiple="">
            </div>

            <!-- <label for="">Tình trạng</label> -->
            <select class="form-select mb-3" name="condition" aria-label="Default select example">
                <?php
                if($product->getCondition() == 'new 100%'){
                    echo '<option selected value="new 100%">new 100%</option>';
                    echo '<option value="like new 99%">like new 99%</option>';
                    echo '<option value="like new">like new</option>';
                }else if($product->getCondition() == 'like new 99%'){
                    echo '<option value="new 100%">new 100%</option>';
                    echo '<option selected value="like new 99%">like new 99%</option>';
                    echo '<option value="like new">like new</option>';
                }else{
                    echo '<option value="new 100%">new 100%</option>';
                    echo '<option value="like new 99%">like new 99%</option>';
                    echo '<option selected value="like new">like new</option>';
                   }
                ?>
            </select>

            <input class="form-control mb-3" type="text" name="quantity" placeholder="<?=$product->getQuantity()?>" aria-label="default input example">

            <!-- <label for="">Trạng thái</label> -->
            <select class="form-select mb-3" name="status" aria-label="Default select example">
            <?php
                if($product->getStatus() == 1){
                    echo '<option selected value="1">Hoạt động</option>';
                    echo '<option value="2">Tạm ngưng</option>';
                    echo '<option value="3">Huỷ</option>';
                }else if($product->getStatus() == 2){
                    echo '<option value="1">Hoạt động</option>';
                    echo '<option selected value="2">Tạm ngưng</option>';
                    echo '<option value="3">Huỷ</option>';
                }else{
                    echo '<option  value="1">Hoạt động</option>';
                    echo '<option value="2">Tạm ngưng</option>';
                    echo '<option selected value="3">Huỷ</option>';
                   }
                ?>
            </select>

            <!-- đổ danh mục từ db -->
            <!-- <label for="">Danh mục</label> -->
            <select class="form-select mb-3" name="idCategory" aria-label="Default select example">
                <option value="id">Dữ liệu từ db</option>

            </select>
            <button type="submit" class="btn btn-success m-2">Sửa sản phẩm</button>
            <a href="/gameconsole/admin/action-delete-product/<?=$product->getID()?>" class="btn btn-danger m-2">Xoá sản phẩm</a>


        </form>

    </div>
</div>
</div>
</div>
<!-- Table End -->