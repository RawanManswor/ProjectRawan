<?php 
class Model 
{   use Database;
    protected $table_name='users';
    public function test(){
      $query="SELECT * FROM users";
      // $result=$this->query($query,$data1,$data2);
     // var_dump($result);
    }
    public function where($data){
      $keys=array_keys($data);
      $values=array_values($data);
      $query = "select * from $this->table_name where ";
      foreach($keys as $key){
        foreach($values as  $value)
        {
           $query .=$key ." = ".json_encode($value) ." && ";
           global $value;
        }
         
global $key;
      }
      echo $key;
      $query =trim($query," && ");
    echo $query;
 
    }
    public function first($data){

    }

    public function insert($data){

    }
    public function update($id,$data,$id_column){

    }
    public function delete($id,$id_column){

    }
}

?>