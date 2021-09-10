<?php
namespace itrax\controllers;
use itrax\core\controller;
use itrax\models\categoryModel;
use itrax\models\postModel;
use itrax\core\helper;
class postControl extends controller{
    private $mdel;
    public function __construct(){
        $this->model = new postModel();;
        session_start();
        if(empty($_SESSION['user'])){
            exit("this method not valid");
        }
    }
    public function index(){
       
        $cats= $this->model->Getallpost();
      
        $title = "post";
        return $this->view("backend\post\index",['title'=>$title,'posts'=> $cats]);
    }
    public function Add(){
        $title = "Add New post";
        return $this->view("backend\post\add",['title'=>$title]);
    }
    public function PostAdd(){
        $nameimage = $_FILES['image']['name'];
         $tmp = $_FILES['image']['tmp_name'];
          $_POST['image'] = $nameimage ;
        echo move_uploaded_file($tmp,"../images".$nameimage);
        if($this->model->AddNewpost($_POST))
        {
            helper::redirect("post/index");
        }
    }
    public function delete($id){
 
        if($this->model->deletepost($id))
        {
            helper::redirect("post/index");
        }
    }
    public function updata($id){
         $posts = $this->model->Getpostbyid($id);
         $title = "updata post";
         return $this->view("backend\post\updata",['title'=>$title ,'posts'=> ($posts[0])]);
    }
    public function postUpdate()
    {
        
        if ($this->model->updatepost($_POST,$_POST['id']))
        {
            helper::redirect("post/index");
        }
    }
  
}




?>