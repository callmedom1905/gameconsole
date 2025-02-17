<?php
class UserController
{
    public function login(){
        $user = new UsersModel();
        $errors = [];

        // kiểm tra email
        if (!isset($_POST['email']) || empty(trim($_POST['email']))) {
            $errors[] = "Email không được để trống.";
        }
        //kiểm tra password
        if(!isset($_POST['password']) || empty($_POST['password'])){
            $errors[] = "Mật khẩu không được để trống.";
        }
        if (!empty($errors)) {
            echo "<script>alert('" . implode("\\n", $errors) . "'); window.location.href='/gameconsole/signIn';</script>";
            exit();
        }
        foreach($user->getAllUsers() as $item){
            if($item->getEmail() == $_POST['email'] && $item->getPassword() == $_POST['password'] && $item->getRole() == 1){
                // header("Location: /gameconsole/admin");
                echo "<script>alert('Chào mừng bạn đến với trang quản trị'); window.location.href='/gameconsole/admin';</script>";
                exit();
            }else if($item->getEmail() == $_POST['email'] && $item->getPassword() == $_POST['password'] && $item->getRole() == 0){
                $_SESSION['user'] = $item->getEmail();
                // header("Location: /gameconsole/");
                echo "<script>alert('Chào mừng bạn đến với Gameconsole'); window.location.href='/gameconsole/';</script>";
            }else{
                $errors[] = "Tài khoản hoặc mật khẩu không chính xác.";
            }
        }
        // Nếu có lỗi, hiển thị alert và chuyển hướng
        if (!empty($errors)) {
            echo "<script>alert('" . implode("\\n", $errors,) . "'); window.location.href='/gameconsole/signIn';</script>";
            exit();
        }
    }

    public function register()
    {
        $user = new UsersModel();
        $errors = [];

        // kiểm tra email
        if (!isset($_POST['email']) || empty(trim($_POST['email']))) {
            $errors[] = "Email không được để trống.";
        }

        // kiểm tra password
        if (!isset($_POST['password']) || empty($_POST['password']) || !isset($_POST['re-password']) || empty($_POST['re-password'])) {
            $errors[] = "Mật khẩu không được để trống.";
        } else if ($_POST['password'] !== $_POST['re-password']) {
            $errors[] = "Mật khẩu nhập lại không khớp.";
        }
        $email = $user->getAllUsers();
            foreach($email as $item){
                // echo $item->getEmail();
            if($_POST['email'] === $item->getEmail()){
                $errors[] = "Email đã được sử dụng. Vui lòng chọn email khác.";
                break;
            }else{

            }
        }

        // Nếu có lỗi, hiển thị alert và chuyển hướng
        if (!empty($errors)) {
            echo "<script>alert('" . implode("\\n", $errors) . "'); window.location.href='/gameconsole/signUp';</script>";
            exit();
        }
        // Nếu hợp lệ, thêm người dùng
        $user->setEmail($_POST['email']);
        // $user->setPassword(password_hash($_POST['password'], PASSWORD_DEFAULT));
        $user->setPassword($_POST['password']);

        if ($user->insert()) {
            echo "<script>alert('Đăng ký thành công'); window.location.href='/gameconsole/signIn';</script>";
            // header("Location: /gameconsole/");
            exit();
        } else {
            echo '<script>alert("Đăng ký không thành công. Vui lòng thử lại.")</script>';
            header("Location: /gameconsole/signUp");

        }
    }

    public function logout(){
        session_destroy();
        header("Location: /gameconsole/");
        exit();
    }

}