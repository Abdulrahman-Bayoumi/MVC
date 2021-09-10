<?php
namespace itrax\models;
use itrax\core\db;
//use itrax\models\userModel;
class categoryModel extends db {
    private static $instant=null;
    public function instanc(){
            if(self::$instant==null){
                self::$instant= new categoryModel;
            }
            return self::$instant;
    }
    public function AddNewCatagory($data){
        return $this->Insert($data );
    }
    public function Getallcategory(){
        return $this->All("SELECT * FROM `category` " );
    }
    public function deletecategory($id){
       return $this->delete($id );
    }
    public function Getcategorybyid($id){
        $categors = $this->All("SELECT * FROM `category` WHERE `id` =$id" );
        return $categors[0];
    }
    public function updateCategory($data,$id)
    {
        return $this->update($data,$id);
    }
    public function numcategorys(){
        return $this->select_count();
    }
}




?>