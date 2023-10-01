<?php

require "connection.php";
session_start();
if (isset($_SESSION["u"])) {
$pid = $_GET["id"];

$cart_rs = Database::search("SELECT * FROM `wishlist` WHERE `id`='".$pid."' AND `user_id`='".$_SESSION["u"]["id"]."'");
$cart_num = $cart_rs->num_rows;

if($cart_num == 1){

    Database::iud("DELETE FROM `wishlist` WHERE `id`='".$pid."' AND `user_id`='".$_SESSION["u"]["id"]."'");

}else{
    echo ("Something went wrong.");
}
}else{

    echo("Please Sign in First.");
}
