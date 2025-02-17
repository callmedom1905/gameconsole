<?php 
class PageView{
    public function home($proHot,$proNew, $categories, $banners){
        require_once 'home.php';
    }

    //products 
    public function products($products){
        require_once 'products.php';
    }
    public function detail($product){
        require_once 'detail.php';
    }

    //About Page
    public function about(){
        echo "About Page";
    }

    //Contact Page
    public function contact(){
        echo "Contact Page";
    }

    //News Page
    public function news(){
        echo "News Page";
    }


    //Cart Page
    public function cart(){
        echo "Cart Page";
    }

    //Login
    public function signUp(){
        include 'signUp.php';
    }
    public function signIn(){
        include 'signIn.php';
    }
}