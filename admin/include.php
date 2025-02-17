<?php
session_start();
ob_start();
//models
require_once '../app/models/connect.php';
require_once '../app/models/ProductsModel.php';
require_once '../app/models/CategoriesModel.php';
require_once '../app/models/UsersModel.php';

//controllers
require_once '../admin/controllers/AdminHomeController.php';
require_once '../admin/controllers/AdminProductsController.php';
require_once '../admin/controllers/AdminCategoriesController.php';
require_once '../admin/controllers/AdminUsersController.php';

//views
require_once '../admin/views/AdminPageView.php';
?>

<!-- Favicon -->
<!-- <link href="../admin/public/img/favicon.ico" rel="icon"> -->

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

<!-- Icon Font Stylesheet -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="../admin/public/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="../admin/public/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

<!-- Customized Bootstrap Stylesheet -->
<link href="../admin/public/css/bootstrap.min.css" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="../admin/public/css/style.css" rel="stylesheet">


