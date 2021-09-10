<?php
namespace itrax\controllers;
use itrax\core\controller;
use itrax\models\categoryModel;
use itrax\core\helper;
class categoryControl extends controller{
    private $mdel;
    public function __construct(){
        $this->model = new categoryModel();
        session_start();
        if(empty($_SESSION['user'])){
            exit("this method not valid");
        }
    }
    public function index(){
       
        $cats= $this->model->Getallcategory();
      
        $title = "category";
        return $this->view("backend\category\index",['title'=>$title,'categorys'=> $cats]);
    }
    public function Add(){
        $title = "Add New Catagory";
        return $this->view("backend\category\add",['title'=>$title]);
    }
    public function PostAdd(){
       
        if($this->model->AddNewCatagory($_POST))
        {
            helper::redirect("category/index");
        }
    }
    public function delete($id){
 
        if($this->model->deletecategory($id))
        {
            helper::redirect("category/index");
        }
    }
    public function updata($id){
         $category = $this->model->Getcategorybyid($id);
         $title = "updata Catagory";
         return $this->view("backend\category\updata",['title'=>$title ,'categorys'=> $category]);
    }
    public function postUpdate()
    {
       
        if ($this->model->updateCategory($_POST,$_POST['id']))
        {
            helper::redirect("category/index");
        }
    }
  
}




?>