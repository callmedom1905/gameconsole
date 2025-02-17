<?php
session_start();
ob_start();
//models
require_once 'app/models/connect.php';
require_once 'app/models/ProductsModel.php';
require_once 'app/models/CategoriesModel.php';
require_once 'app/models/BannerModel.php';
require_once 'app/models/UsersModel.php';

//controllers
require_once 'app/controllers/HomeController.php';
require_once 'app/controllers/ProductController.php';
require_once 'app/controllers/UserController.php';

//views
require_once 'app/views/PageView.php';
?>

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet"> 

<!-- Icon Font Stylesheet -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="/gameconsole/public/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
<link href="/gameconsole/public/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

<!-- Customized Bootstrap Stylesheet -->
<link href="/gameconsole/public/css/bootstrap.min.css" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="/gameconsole/public/css/style.css" rel="stylesheet">



