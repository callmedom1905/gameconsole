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
            'name'=>'setName',
            'status'=> 'setStatus',
            'type'=> 'setType',
            'url'=> 'setUrl',
        ];
//         var_dump($_POST);
        if($_POST['status'] == '' && $_POST['type']== ''){
            echo "<script>alert('Vui lòng nhập đầy đủ thông tin!'); window.location.href='/gameconsole/admin/add-category';</script>";
        }
        foreach ($data as $key => $method) {
            if (!isset($_POST[$key]) && empty(trim($_POST[$key]))) {
                echo "<script>alert('Vui lòng nhập đầy đủ thông tin!'); window.location.href='/gameconsole/admin/add-category';</script>";
            }
            $category->$method(trim($_POST[$key])); // Gán dữ liệu nếu hợp lệ
        }
        
        if ($category->insert()) {
            echo "<script>alert('Thêm danh mục thành công!'); window.location.href='/gameconsole/admin/categories';</script>";
        } else {
            echo "Lỗi khi thêm danh mục vào database!";
        }


    }


}