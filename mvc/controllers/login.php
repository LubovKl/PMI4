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
                     header('locacion:'.BASE_DIR.'/account');
                 } else {
                      $this->view->arResult['Error'] = "Неверный логин или пароль";
                  $this->index();
                 }
              }else{
                  $this->view->arResult['Error'] = "Неверный логин или пароль";
                  $this->index();
              }
          }
          
          public function logout(){
              User::logout();
              header('locacion:'.BASE_DIR.'/');
          }
          
          public function reg(){
              if (User::isLogin()){
                  header('location:'.BASE_DIR.'/account');
                  die;
              }
              $error = array('error'=>true);
              $login = htmlspecialchars($_REQUEST['login']);
              $pass_1 = htmlspecialchars($_REQUEST['pass_1']);
              $pass_2 = htmlspecialchars($_REQUEST['pass_2']);
              $name = htmlspecialchars($_REQUEST['$name']);
              $phone = htmlspecialchars($_REQUEST['$phone']);
              $email = htmlspecialchars($_REQUEST['$email']);
              
              if ($login == ''){
              $error['login'] = false;   
              }
              if ($pass_1 != $pass_2){
                  $error['pass']=false;
              }
              if ($pass_1 == ''){
                  $error['pass']=false;
              }
              if ($this->model->loginExist($login)){
                  $error['login'] = false; 
              }
              if (count($error)>1){
                  echo json_encode($error);
                  die;
              }
              
              $data = array(
                  ':login'=>$login,
                  ':password'=> md5($pass_1),
                  ':name'=>$name,
                  ':phone'=>$phone,
                  ':email'=>$email,
              );
              if ($this->model->register($data)){
                  ($this->model->login($login,$$pass_1));
                  echo json_encode(array('sucsess'=>true));
                  die;
              }else{
                  echo json_encode(array('sucsess'=>false));
                  die;
              }
          }
}