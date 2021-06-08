<?php


require_once __DIR__.'../../model/login.model.php';


class LoginController extends LoginModel{

    function check_login($username,$password){
        $check = $this->connect_login($username,$password);
        return $check;
    }
    
    function login($username,$password){
        
        $check = $this->check_login($username,$password);
        if($check){
            
            $data = $this->get_user_detail($username);
            $_SESSION['id'] = $data['id'];
            $_SESSION['firstname'] = $data['firstname'];
            $_SESSION['email'] = $data['email'];
            $_SESSION['phone_no'] = $data['phone_no'];
            $returnthis = (bool) true;
            
        }else{
            
            $returnthis = (bool) false;
        }
        
        return $returnthis;
    }


        public function new_register($username,$password,$status,$firstname,$lastname,$email,$phone){

    $run_register = $this->register($username,$password,$status,$firstname,$lastname,$email,$phone);

    return $run_register;
    }


    public function new_aduan($aduan,$email,$added_date){

    $run_register = $this->insert_to_aduan($aduan,$email,$added_date);

    return $run_register;
    }





}

?>