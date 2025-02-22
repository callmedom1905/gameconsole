
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
                    <a href="/gameconsole/admin/categories" class="nav-item nav-link active"><i class="fa fa-keyboard me-2"></i>Danh mục</a>
                    <a href="/gameconsole/admin/products" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Sản phẩm</a>
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
        <h6 class="mb-4">Danh mục</h6>
        <a class="btn btn-primary rounded-pill m-2" href="/gameconsole/admin/add-category" >Thêm danh mục</a>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tên danh mục</th>
                        <th scope="col">Trạng thái</th>
                        <th scope="col">Tên đường dẫn</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($categories as $item) {
                        ?>
                        <tr>
                            <th scope="row"><?= $item->getId() ?></th>
                            <td><?= $item->getName() ?></td>
                            <td><?php
                            if ($item->getStatus() == 0) {
                                echo "Đang ẩn";
                            } else {
                                echo "Đang hoạt động";
                            }
                            ?></td>
                            <td><?=$item->getUrl()?></td>
                            <td><a href="/gameconsole/admin/edit-category/<?=$item->getId()?>">Sửa</a></td>

                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>
<!-- Table End -->