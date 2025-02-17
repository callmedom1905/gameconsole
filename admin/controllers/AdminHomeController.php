<?php
class AdminHomeController{
    public function index(){
        $pageView = new AdminPageView();
        $pageView->home();
    }
}