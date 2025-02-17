<?php
class HomeController{
    private $pageView;
    public function __construct(){
        $this->pageView = new PageView();
    }
    public function index(){
        // lấy tất cả sản phẩm
        $proHot = new ProductsModel();
        $proHot = $proHot->getProHot();

        $proNew = new ProductsModel();
        $proNew = $proNew->getProNew();

        $categories = new CategoriesModel();
        $categories = $categories->getAllCategories();

        $banners = new BannerModel();
        $banners = $banners->getBanner();
        //hiện
        $pageView = new PageView();
        $pageView->home($proHot, $proNew ,$categories, $banners);
    }

    public function about(){
        $this->pageView->about();
    }

    public function contact(){
        $this->pageView->contact();
    }

    public function news(){
        $this->pageView->news();
    }
    //login
    public function signIn(){
        $this->pageView->signIn();
    }
    public function signUp(){
        $this->pageView->signUp();
    }
    //cart
    public function cart(){
        $this->pageView->cart();
    }

    // public function products(){
    //     // lấy tất cả sản phẩm
    //     //tạo mảng sản phẩm
    //     $product = new ProductsModel();
    //     $products = $product->getAllProducts();
    //     // hiển thị danh sách sản phẩm
    //     $productView = new PageView();
    //     $productView->showList($products);
    // }
}