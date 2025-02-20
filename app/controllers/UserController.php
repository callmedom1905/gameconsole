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

        $check = $user->getUserByEmail($_POST['email']);

        if (!$check) {
            echo "<script>alert('Tài khoản không tồn tại.'); window.location.href='/gameconsole/signIn';</script>";
            exit();
        }
    
        // Kiểm tra trạng thái tài khoản
        if ($check->getActive() == 0) {
            echo "<script>alert('Tài khoản chưa được kích hoạt.'); window.location.href='/gameconsole/signIn';</script>";
            exit();
        }
        if ($check->getActive() == 2) {
            echo "<script>alert('Tài khoản của bạn đã bị khoá.'); window.location.href='/gameconsole/signIn';</script>";
            exit();
        }
    
        // Kiểm tra mật khẩu
        if ($check->getPassword() !== $_POST['password']) {
            echo "<script>alert('Tài khoản hoặc mật khẩu không chính xác.'); window.location.href='/gameconsole/signIn';</script>";
            exit();
        }
    
        // Đăng nhập thành công, kiểm tra quyền
        if ($check->getRole() == 1) {
            $_SESSION['user'] = $check->getEmail();
            $_SESSION['role'] = $check->getRole();
            echo "<script>alert('Chào mừng bạn đến với trang quản trị'); window.location.href='/gameconsole/admin';</script>";
            // exit();
        } else {
            $_SESSION['user'] = $check->getEmail();
            $_SESSION['role'] = $check->getRole();
            echo "<script>alert('Chào mừng bạn đến với Gameconsole'); window.location.href='/gameconsole/';</script>";
            // echo "<script>alert('Chào mừng bạn đến với trang quản trị".$_SESSION['role']."'); window.location.href='/gameconsole/';</script>";


            // exit();
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