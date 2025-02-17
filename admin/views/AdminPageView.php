<?php 
class AdminPageView{
    public function home(){
        include 'dashboard.php';
    }
    //product 
    public function product($products){
        include 'products.php';
    }
    public function addProduct(){
        $categories = new CategoriesModel();
        $categories = $categories->getAllCategories();

        include 'productAdd.php';
    }
    public function viewEditPro($product){
        include 'productEdit.php';
        // include 'edit.php';
    }

    //category
    public function category($categories){
        include 'categories.php';
    }
    public function addCategory(){
        include 'categoryAdd.php';
    }

    //user
    public function users($users){
        include 'users.php';
    }

    


   
}