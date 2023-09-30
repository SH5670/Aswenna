<?php

require "connection.php";

$email = $_POST["e"];
$new = $_POST["np"];
$vcode = $_POST["v"];

if (empty($email)){

echo("Please Enter Email Address !");

}else if (empty($new)){

echo("Please insert a New Password");

}else if(strlen($new)<5 || strlen ($new)>20){

echo("Password must between 5-20 characters");

}else if(empty($vcode)){

echo("Please enter your Verification Code");

}else{

$user_rs=Database::search("SELECT * FROM `user` WHERE `email`='".$email."' AND `vcode`='".$vcode."'");
$user_num=$user_rs->num_rows;

if($user_num==1){

Database::iud("UPDATE `user` SET `password`='".$new."' WHERE `email`='".$email."'");

echo("success");

}else{

echo("Invalid Email or Verification Code");

}

}

?>