<?php
namespace itrax\models;
use itrax\core\db;
use itrax\models\userModel;
class userModel extends db {
    private static $instant=null;
    public function instanc(){
            if(self::$instant==null){
                self::$instant= new userModel;
            }
            return self::$instant;
    }
    public function GetUserInfoByEmailAndPassword($E,$P){
        $users = $this->ALL("SELECT * FROM `users` WHERE `email` = '$E' AND `password` ='$P'");
        if(isset($users)){
            return $users[0];
        }else{
            return false;
        }
        
    }
    public function Getuserid($id){
        $users = $this->All("SELECT * FROM `users` WHERE `id` =$id" );
        return $users[0];
    }
    public function Getalluser(){
        return $this->All("SELECT * FROM `users` " );
    }
}




?>