<?php
class AdminProductsController
{

    public function products()
    {
        $products = new ProductsModel();
        $products = $products->getAllProducts();

        $category = new CategoriesModel();
        $category = $category->getAllCategories();
        //hiện
        $pageView = new AdminPageView();
        $pageView->product($products, $category);

    }

    //view page add product
    public function viewAdd()
    {
        $pageView = new AdminPageView();
        $pageView->addProduct();
    }

    //action add product 
    public function add()
    {
        $product = new ProductsModel();
        $data = [
            'name' => 'setName',
            'price' => 'setPrice',
            'condition' => 'setCondition',
            'quantity' => 'setQuantity',
            'status' => 'setStatus',
            'idCategory' => 'setIdCategory'
        ];
        
        foreach ($data as $key => $value) {
            if (!isset($_POST[$key]) && empty(trim($_POST[$key]))) {
                echo "<script>alert('Vui lòng nhập đầy đủ thông tin!'); window.location.href='/gameconsole/admin/add-category';</script>";
            }else{
                $product->$value($_POST[$key]);
            }
        }

        if($_POST['salePrice'] == ''){
            $product->setSalePrice(null);
        }else{
            $product->setSalePrice($_POST['salePrice']);
        }

        if($_POST['discription'] == ''){
            $product->setSalePrice(null);
        }else{
            $product->setSalePrice($_POST['discription']);
        }
       


        // Xử lý upload ảnh chính 
    if (!empty($_FILES['image']['name']) && $_FILES['image']['error'] == 0) {
        $fileImgName = $_FILES["image"]["name"];
        $fileImgPath = "../../gameconsole/public/img/" . $fileImgName;
        move_uploaded_file($_FILES["image"]["tmp_name"], $fileImgPath);
        $product->setImage($fileImgName);
    }
    echo $product->getImage();
    // Xử lý upload danh sách hình ảnh (cơ bản)
    $listImages = [];
    if (!empty($_FILES['listImages']['name'][0])) {
        foreach ($_FILES['listImages']['name'] as $key => $imageName) {
            if ($_FILES['listImages']['error'][$key] == 0) {
                $fileListName = $imageName;
                $fileListPath = "../../gameconsole/public/img/" . $fileListName;
                move_uploaded_file($_FILES["listImages"]["tmp_name"][$key], $fileListPath);
                $listImages[] = $fileListName;
            }
        }
    }
    $product->setListImages(implode(", ",$listImages));
    echo $product->getListImages();
    echo "<pre>";
    print_r($product);
    echo "</pre>";

        if ($product->insert()) {
            echo "<script>alert('Thêm sản phẩm thành công!'); window.location.href='/gameconsole/admin/products';</script>";
        } else {
            echo '<strong>check lỗi khi thiếu dữ liệu đầu vào, làm thêm</strong>';
        }
    }

    public function viewEdit($id)
    {
        $product = new ProductsModel();
        $product = $product->getDetail($id);

        $category = new CategoriesModel();
        $category = $category->getAllCategories();

        $pageView = new AdminPageView();
        $pageView->viewEditPro($product, $category);

    }

    public function edit($id){
        $product = new ProductsModel();
        $data = [
            'name' => 'setName',
            'price' => 'setPrice',
            'condition' => 'setCondition',
            'quantity' => 'setQuantity',
            'status' => 'setStatus',
            'idCategory' => 'setIdCategory'
        ];
        
        foreach ($data as $key => $value) {
            if (!isset($_POST[$key]) && empty(trim($_POST[$key]))) {
                echo "<script>alert('Vui lòng nhập đầy đủ thông tin!'); window.location.href='/gameconsole/admin/add-category';</script>";
            }else{
                $product->$value($_POST[$key]);
            }
        }

        if($_POST['salePrice'] == ''){
            $product->setSalePrice(null);
        }else{
            $product->setSalePrice($_POST['salePrice']);
        }

        if($_POST['discription'] == ''){
            $product->setSalePrice(null);
        }else{
            $product->setSalePrice($_POST['discription']);
        }
       


        // Xử lý upload ảnh chính 
        if (!empty($_FILES['image']['name']) && $_FILES['image']['error'] == 0) {
            $fileImgName = $_FILES["image"]["name"];
            $fileImgPath = "../../gameconsole/public/img/" . $fileImgName;
            move_uploaded_file($_FILES["image"]["tmp_name"], $fileImgPath);
            $product->setImage($fileImgName);
        }else {
            $product->setImage($_POST['old_image']);
        }
    // Xử lý upload danh sách hình ảnh (cơ bản)
    // $listImages = [];
    // if (!empty($_FILES['listImages']['name'][0])) {
    //     foreach ($_FILES['listImages']['name'] as $key => $imageName) {
    //         if ($_FILES['listImages']['error'][$key] == 0) {
    //             $fileListName = $imageName;
    //             $fileListPath = "../../gameconsole/public/img/" . $fileListName;
    //             move_uploaded_file($_FILES["listImages"]["tmp_name"][$key], $fileListPath);
    //             $listImages[] = $fileListName;
    //         }
    //     }
    // }
    // $product->setListImages(implode(", ",$listImages));
    // echo $product->getListImages();
    echo "<pre>";
    print_r($product);
    echo "</pre>";
;
        if ($product->update($id)) {
            echo "<script>alert('Sửa sản phẩm thành công!'); window.location.href='/gameconsole/admin/products';</script>";
        } else {
            // var_dump($product);
            echo '<strong>check lỗi khi thiếu dữ liệu đầu vào, làm thêm</strong>';
        }
    }
}