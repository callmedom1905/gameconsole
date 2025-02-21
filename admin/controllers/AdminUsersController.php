<?php 
class AdminUsersController{
    public function users(){
        $users = new UsersModel();
        $users = $users->getAllUsers();

        $pageView = new AdminPageView();
        $pageView->users($users);
    }

    public function logout(){
        session_destroy();
        header("Location: /gameconsole/");
        exit();
    }

    public function viewEdit($id){
        $user = new UsersModel();
        $user = $user->getOneUser($id);

        $pageView = new AdminPageView();
        $pageView->viewEditUser($user);
    }

    public function edit($id){
        $user = new UsersModel();
        $user->setRole($_POST['role']);
        $user->setActive($_POST['active']);
        // echo $_POST['role'];
        // echo $_POST['active'];
        $result = $user->update($id);
        var_dump($result);
        if($result){
            echo "<script>alert('Cập nhật thành công!'); window.location.href='/gameconsole/admin/users';</script>";
        }else{
            echo "<script>alert('Cập nhật thất bại!'); window.location.href='/gameconsole/admin/edit-user/".$id."';</script>";
        }
        
    }
}