<?php
namespace itrax\controllers;
use itrax\core\controller;
use itrax\models\categoryModel;
use itrax\models\postModel;
class dashbordControl extends controller{
    public function __construct(){
        session_start();
        if(empty($_SESSION['user'])){
            exit("this method not valid");
        }
    }
    public function index(){
        $category =new categoryModel();
        $coutn= $category->numcategorys();
        $post =new postModel();
        $coutpost= $post->numposts();
         $title = "dashbord";
         return $this->view("backend\dashbord\index",['title'=>$title,'countcat'=>$coutn ,"countpost"=>$coutpost]);
    }
}




?>