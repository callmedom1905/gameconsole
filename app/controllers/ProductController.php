<?php
class ProductController{
    public function detail($id){
        $product = new ProductsModel();
        $product = $product->getDetail($id);

        $pageView = new PageView();
        $pageView->detail($product);
    }
}