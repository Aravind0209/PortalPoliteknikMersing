<?php

class IPInterface{

	function get_user_ip(){
	

$ip = isset($_SERVER['HTTP_CLIENT_IP']) ? $_SERVER['HTTP_CLIENT_IP'] : isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];
$iptoreturn = $ip; 
return $iptoreturn;
	}
	
	function create_user_id($ip){
        $fixip = str_replace(".","",$ip);
        $userid = "GUEST".$fixip;
        
        return $userid;
	}

}

?>