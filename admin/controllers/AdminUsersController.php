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
}