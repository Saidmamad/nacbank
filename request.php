<?php
 
 $login = false;
 if(isset($_POST['login'])){
     $login = $_POST['login'];
 }
 $password = false;
 if(isset($_POST['password'])){
     $password = $_POST['password'];
 }
  
 echo 'Receivedd login was ' . $login. ' and password: '.$password;

?>