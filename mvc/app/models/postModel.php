<?php
namespace itrax\models;
use itrax\core\db;
//use itrax\models\userModel;
class postModel extends db {
    private static $instant=null;
    public function instanc(){
            if(self::$instant==null){
                self::$instant= new postModel;
            }
            return self::$instant;
    }
    public function AddNewpost($data){
        return $this->Insert($data );
    }
    public function Getallpost(){
        return $this->All("SELECT * FROM `post` " );
    }
    public function deletepost($id){
       return $this->delete($id );
    }
    public function Getpostbyid($id){
        return $this->All("SELECT * FROM `post` WHERE `id` =$id" );
    }
    public function updatepost($data,$id)
    {
        return $this->update($data,$id);
    }
    public function numposts(){
        return $this->select_count();
    }
}




?>