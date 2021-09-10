<?php
namespace itrax\core;
use PDO;
class db {}
   private $dsn = "mysql:host=localhost;dbname=school";
   protected $connection;
   protected $table;
public function __construct(){
    $this-> connection =new PDO( $this->dsn ,"root","");
         $table = explode("\\",static::class);
        $table = end($table);
        $this->table = substr($table,0,-5);
           }
    public function select(){
        $sql ="SELECT * FROM `$this->table`";
        $stm = $this->connection->query($sql);
        return $stm->fetchAll(PDO::FETCH_ASSOC);
        
        }
    public function updata( $data){
        $sql="UPDATE `$this->table` SET ";
        foreach($data as $k=>$v){
            if($k!='id'){
            $sql.="`$k`=:$k,";
            }
        } 
        $sql = rtrim($sql,",");
        foreach($data as $k=>$v){
            if($k=='id'){
           $sql.=" WHERE `$k`=:$k";
            }
        } 
       
     $this-> excutee($data , $sql);

    }
     public function delet( $id){
        $sql="DELET FROM `$this->table` WHERE `id` = :id";
        $data = ['id'=>$id];
        
        $this->excutee($data ,$sql);
     }
    public function insert($data){
        $sql ="INSERT INTO `$this->table` (";
        foreach($data as $k=>$v){
            $sql.="`$k`,";
        } 
        $sql = rtrim($sql,",");
        $sql.=")VALUES(";
          foreach($data as $k=>$v){
            $sql.= ":$k,";
        }
        $sql = rtrim($sql,",");
        $sql.=")";
        $this->excutee($data ,$sql);
    }
    private function excutee($data ,$sql)
    {
        $stm = $this->connection->prepare( $sql);
         return $stm ->execute($data);
    }
   
}
