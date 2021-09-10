<?php
namespace itrax\controllers;
use itrax\core\controller;
use itrax\core\helper;
use itrax\models\userModel;
class userControl extends controller{
    public function index(){
      return $this->view("home");
    }
    public function login(){
      session_start();
      if(isset($_SESSION['user'])){
        helper::redirect("category/index");
      }
            return $this->view("backend/login");
    }
    public function loginReq(){ 
      session_start();
      $email =$_POST['email'];
      $pass = $_POST['password'];
       $user = new userModel();
       $userdata =$user->GetUserInfoByEmailAndPassword($email,$pass);
       if(!empty($userdata)){
          $_SESSION['user']=$userdata;
          $_SESSION['error'][]=[];
          helper::redirect("dashbord/index");
       }else{
         $_SESSION['error'][]="user and password not valid";
         helper::redirect("user/login");
       }
    }
    public function logout(){
      session_start();
      session_destroy();
      helper::redirect("user/login");
    }
}




?>