<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary">GAMECONSOLE</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="../admin/public/img/logo.png" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Minh</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="/gameconsole/admin/" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Elements</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="button.html" class="dropdown-item">Buttons</a>
                            <a href="typography.html" class="dropdown-item">Typography</a>
                            <a href="element.html" class="dropdown-item">Other Elements</a>
                        </div> 
                    </div> -->
                    <a href="/gameconsole/admin/categories" class="nav-item nav-link "><i class="fa fa-keyboard me-2"></i>Danh mục</a>
                    <a href="/gameconsole/admin/products" class="nav-item nav-link active   "><i class="fa fa-th me-2"></i>Sản phẩm</a>
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
        <h6 class="mb-4">Thêm sản phẩm</h6>
        <a class="btn btn-secondary rounded-pill m-2" href="/gameconsole/admin/products">Trở lại</a>
            <form action="/gameconsole/admin/action-add-pro" method="post" enctype="multipart/form-data">  

                <input class="form-control mb-3" type="text" name="name" placeholder="Tên sản phẩm" aria-label="default input example">
                <input class="form-control mb-3" type="text" name="price" placeholder="Giá sản phẩm" aria-label="default input example">
                <input class="form-control mb-3" type="text" name="salePrice" placeholder="Giá ưu đãi (nếu có)" aria-label="default input example">
                <input class="form-control mb-3" type="text" name="discription" placeholder="Mô tả" aria-label="default input example">

                <div class="mb-3">
                    <!-- <label for="formFile" class="form-label">Hình chính</label>
                    <input class="form-control" type="file" name="image" id="formFile"> -->
                    <input class="form-control" type="text" name="image" id="formFile">
                </div>

                <div class="mb-3">
                    <!-- <label for="formFileMultiple" class="form-label">Danh sách hình ảnh</label>
                    <input class="form-control" type="file" name="listImages" id="formFileMultiple" multiple=""> -->
                    <input class="form-control" type="text" name="listImages" id="formFile">

                </div>

                <select class="form-select mb-3" name="condition" aria-label="Default select example">
                    <option value="">Chọn tình trạng</option>
                    <option value="new 100%">new 100%</option>
                    <option value="like new 99%">like new 99%</option>
                    <option value="like new">like new</option>
                </select>

                <input class="form-control mb-3" type="text" name="quantity" placeholder="Số lượng" aria-label="default input example">

                <select class="form-select mb-3" name="status" aria-label="Default select example">
                    <option value="">Chọn trạng thái</option>
                    <option value="1">Hoạt động</option>
                    <option value="2">Tạm ngưng</option>
                    <option value="3">Huỷ</option>
                </select>

                <!-- đổ danh mục từ db -->
                <label for="">Danh mục</label>
                <select class="form-select mb-3" name="idCategory" aria-label="Default select example">
                    <option value="">Chọn danh mục</option>
                    <?php 
                    foreach ($categories as $category) {
                        echo "<option value='".$category->getId()."'>".$category->getName()."</option>";
                    }
                    ?>
                   
                </select>

                <button type="submit" class="btn btn-success m-2">Thêm sản phẩm</button>

            </form>

    </div>
</div>
</div>
</div>
<!-- Table End -->