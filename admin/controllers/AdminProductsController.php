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
    //     $products =  new ProductsModel();
    //     $data = [
    //         'name'=> 'setName',
    //         'price'=> 'setPrice',
    //         'salePrice'=> 'setSalePrice',
    //         'discription'=> 'setDiscription',
    //         'image'=> 'setImage',
    //         'listImages'=> 'setListImages',
    //         'condition'=> 'setCondition',
    //         'quantity'=> 'setQuantity',
    //         'status'=> 'setStatus',
    //         'idCategory'=> 'setIdCategory',
    //     ];
    //     foreach($data as $key => $value){
    //         $products->$value($_POST[$key]);
    //     }
    //     if($products->insert()){
    //         echo "<script>alert('Thêm sản phẩm thành công!'); window.location.href='/gameconsole/admin/products';</script>";
    //     }else{
    //         // echo "<script>alert('Thêm sản phẩm thất bại!'); window.location.href='/gameconsole/admin/add-product';</script>";
    //         echo "L��i khi thêm sản phẩm vào database!";
    //         print_r($products);
    //     }
    // }

    public function viewEdit($id)
    {
        $product = new ProductsModel();
        $product = $product->getDetail($id);

        $pageView = new AdminPageView();
        $pageView->viewEditPro($product);
    }
}