<?php 
class AdminPageView{
    public function home(){
        include 'dashboard.php';
    }
    //product 
    public function product($products, $category){
        include 'products.php';
    }
    public function addProduct(){
        $categories = new CategoriesModel();
        $categories = $categories->getAllCategories();

        include 'productAdd.php';
    }
    public function viewEditPro($product){
        include 'productEdit.php';
    }

    //category
    public function category($categories){
        include 'categories.php';
    }
    
    public function addCategory(){
        include 'categoryAdd.php';
    }

    public function viewEditCategory($category){
        include 'categoryEdit.php';
    }


    //user
    public function users($users){
        include 'users.php';
    }
    public function viewEditUser($user){
        include 'userEdit.php';
    }

    


   
}