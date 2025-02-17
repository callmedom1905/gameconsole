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
}