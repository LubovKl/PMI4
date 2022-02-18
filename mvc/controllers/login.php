<?php

class Login extends Controller {
    
     public function __construct() {
         parent::__construct();
          }
          
          public function login() {
              if ( isset($_POST['login']) &&  isset ($_POST['password'])){ 
                  $login = HTML_SPECIALCHARS($_POST['login']);
                  $password = HTML_SPECIALCHARS($_POST['password']);
                 if ($this->model->login($login,$password)){
                     
                 } else {
                      $this->view->arResult['Error'] = "Неверный логин или пароль";
                  $this->index();
                 }
              }else{
                  $this->view->arResult['Error'] = "Неверный логин или пароль";
                  $this->index();
              }
          }
}