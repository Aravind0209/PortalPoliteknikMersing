<?php


class Database{
	
  public $mysqli;

  function __construct($host='localhost',$user='root',$pass='',$db='politeknik'){

     $this->mysqli = new mysqli($host, $user, $pass, $db);
  }
  
  
  
  
} 

?>