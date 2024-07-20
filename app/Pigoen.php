<?php
//namespace PigoenPHP;

class PigoenPHP
{
  public $message;
  
  public function __construct(){
    echo "<br><hr>Hey 👋 PigoenPHP!<hr><br>";
  }

  public function setMessage($msg){
   echo $this->message=$msg;
  }
}
