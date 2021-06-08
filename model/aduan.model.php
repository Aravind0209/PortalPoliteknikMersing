<?php

require_once __DIR__.'/config.model.php';

class AduanModel extends Database{


    public function insert_to_aduan($aduan,$email,$added_date){
        
        $sql = "insert into aduan(aduan,email,added_date) values ('{$aduan}','{$email}','{$added_date}')";
        
        $query = $this->mysqli->query($sql);
        
        return $sql;
        
        
        
    }


    public function get_all_aduan(){
        $data = array();
        $sql = "select * from aduan";
        $query = $this->mysqli->query($sql);
        while($fetch = $query->fetch_array(MYSQLI_ASSOC)){
            $data[] = $fetch;     
        }

        return $data;
    }



  

    
   















}
?>
