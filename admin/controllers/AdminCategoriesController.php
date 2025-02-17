<?php
class AdminCategoriesController
{
    public function categories()
    {
        $categories = new CategoriesModel();
        $categories = $categories->getAllCategories();

        $pageView = new AdminPageView();
        $pageView->category($categories);
    }

    public function view()
    {
        $pageView = new AdminPageView();
        $pageView->addCategory();
    }

    public function add(){
        $category = new CategoriesModel();
        $data = [
            'name' => 'setName',
            'status' => 'setStatus',
            'type' => 'setType',
            'url' => 'setUrl',
        ];
        // print_r($data);
        // print_r($_POST); // Debug dữ liệu từ form
        // echo $_POST['type'];

        foreach ($data as $key => $method) {
            echo "🟢 Kiểm tra key: $key, method: $method <br>";
            
            if (isset($_POST[$key]) && !empty($_POST[$key])) {
                echo "✅ Gọi $method với giá trị: " . $_POST[$key] . "<br>";
                $category->$method($_POST[$key]);
            } else {
                echo "❌ Không có dữ liệu cho: " . $key . "<br>";
            }
        }
        
    
        print_r($category); // Kiểm tra object đã có dữ liệu chưa
        $category->insert();
        // if($category->insert()){
        //     echo "<script>alert('Thêm danh mục thành công'); window.location.href='/gameconsole/admin/categories';</script>";
        // }else{
        //     echo "<script>alert('Thêm danh mục thất bại, hãy kiểm tra lại dữ liệu'); window.location.href='/gameconsole/admin/add-category';</script>";
        // }
        

    }


}