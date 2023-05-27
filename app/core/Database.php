<?php
trait Database
{
    private function connect()
    {
        $string = "mysql:hostname=" . DBHOST . ";dbname=" . DBNAME;
        $conn = new PDO($string, DBUSER, DBPASSWORD);
        return $conn;
    }
    public function query($query, $data1,$data2)
    {
        $con = $this->connect();
        $stm = $con->prepare($query);
        $check = $stm->bindValue($data1,$data2);
      //  if ($check) {
            $result = $stm->fetchAll(PDO::FETCH_ASSOC);
          //  if (is_array($result) && count($result)) {
                return $result;
            // }
      //  }

       // return false;
        
    }
    public function get_row($query, $data = [])
    {
        $con = $this->connect();
        $stm = $con->prepare($query);
        $check = $stm->execute($data);
        if ($check) {
            $result = $stm->fetchAll(PDO::FETCH_OBJ);
            if (is_array($result) && count($result)) {
                return $result[0];
            }
        }

        return false;
    }
}

// show($con);
