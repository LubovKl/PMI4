<?php

class Account extends Controller{
    public function __construct() {
        if (User::isLogin()){
        parent::__construct();
        }else{
             header('locacion:'.BASE_DIR.'/login');
        }
    }
    
    public function new_user(){
        $this->view->arResult['NEW_USER'] = true;
        $this->index();
    }
}