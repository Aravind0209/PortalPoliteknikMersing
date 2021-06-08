<?php

require_once __DIR__.'/config.model.php';

class LoginModel extends Database{

    public function connect_login($username,$password){
        
        $sql = "select password from user where username = '{$username}' ";
        $query = $this->mysqli->query($sql);
        $fetch = $query->fetch_array(MYSQLI_ASSOC);
        $passworddb = $fetch['password'];
        
        //compare
        $password = md5($password);
            
            if($password == $passworddb){
                $check = (bool) true;
            }else {
                
                $check = (bool) false;
            }
            
            return $check;
    }


    public function get_user_detail($username){
        
        $data = array();
        $sql = "select * from user where username = '{$username}' ";
        $query = $this->mysqli->query($sql);
        while($fetch = $query->fetch_array(MYSQLI_ASSOC)){
            $data = $fetch;
        }
        
        return $data;
    }


        public function register($username,$password,$status,$firstname,$lastname,$email,$phone_no){
        
        $check = $this->check_existing_username($username);
        
        if($check == "0"){
        $password = md5($password);
        $current = $this->checktotal();
        //$userid = "T".$current;
       // $referalcode = "RE".$this->generate_referal_code($userid);
        $sql = "insert into user(username,password,status,firstname,lastname,email,phone_no) values ('{$username}','{$password}','{$status}','{$firstname}','{$lastname}','{$email}','{$phone_no}') ";
        $query = $this->mysqli->query($sql);
        
    
        $pass = true;
        }else{
            $pass = false;
        }

        return $pass;
    }



        function check_existing_username($username){
        
        $sql = "select count(id) as total from user where username = '{$username}'";
        $query = $this->mysqli->query($sql);
        $response = $query->fetch_array(MYSQLI_ASSOC);
        $total = $response['total'];
        return $total;
    }


        function checktotal(){
        
        $sql = "select count(id) as total from user";
        $query = $this->mysqli->query($sql);
        $response = $query->fetch_array(MYSQLI_ASSOC);
        $total = $response['total'];
        $total = $total + 1;
        return $total;
    }


    public function insert_to_aduan($aduan,$email,$added_date){
        
        $sql = "insert into aduan(aduan,email,added_date) values ('{$aduan}','{$email}','{$added_date}')";
        
        $query = $this->mysqli->query($sql);
        
        return $sql;
        
        
        
    }


    
   















}
?>
