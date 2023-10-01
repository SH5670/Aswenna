<?php

require "connection.php";

if(isset($_GET["id"])){

    $pid = $_GET["id"];

    Database::iud("DELETE FROM `product` WHERE `id`='".$pid."' AND `user_id`='".$_SESSION["u"]["id"]."'");

}else{

    echo("Something Went Wrong.");
}
?>