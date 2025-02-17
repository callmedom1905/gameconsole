<?php
class AdminProductsController
{
    public function products()
    {
        $products = new ProductsModel();
        $products = $products->getAllProducts();
        //hiện
        $pageView = new AdminPageView();
        $pageView->product($products);

    }

    //view page add product
    public function viewAdd()
    {
        $pageView = new AdminPageView();
        $pageView->addProduct();
    }

    //action add product 
    // public function add(){
    //     $product =  new ProductsModel();
    //     $data = [
    //         'name'=>'setName',
    //         'price'=>'setPrice',
    //         'salePrice'=>'setSalePrice',
    //         'discription'=>'setDiscription',
    //         'image'=>'setImage',
    //         'listImages'=>'setListImages',
    //         'condition'=>'setCondition',
    //         'quantity'=>'setQuantity',
    //         'status'=>'setStatus',
    //         'idCategory'=>'setIdCategory',
    //     ];
    //     // print_r($data); 
    //     foreach($data as $key => $value){
    //         if(isset($_POST[$key]) && !empty($_POST[$key])){
    //             $product->$value($_POST[$key]);
    //         }
    //     }
    //     // print_r($product);
    //     $product->insert();
    // }

    public function viewEdit($id)
    {
        $product = new ProductsModel();
        $product = $product->getDetail($id);

        $pageView = new AdminPageView();
        $pageView->viewEditPro($product);
    }
}