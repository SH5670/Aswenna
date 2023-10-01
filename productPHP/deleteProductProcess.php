<?php

require "connection.php";

if(isset($_GET["id"])){

    $pid = $_GET["id"];

    Database::iud("DELETE FROM `product` WHERE `id`='".$pid."'");

}else{

    echo("Something Went Wrong.");
}
?>