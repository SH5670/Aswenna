<?php

require "connection.php";

$pid = $_GET["pid"];

$product_rs = Database::search("SELECT * FROM `product` WHERE `id`='".$pid."'");
$product_num = $product_rs->num_rows;

if($product_num == 1){

    $product_data = $product_rs->fetch_assoc();
    $status = $product_data["status_id"];

    if($status == 1){
        Database::iud("UPDATE `product` SET `status_id`='2' WHERE `id`='".$pid."'");
        echo("deactivated");
    }else if($status == 2){
        Database::iud("UPDATE `product` SET `status_id`='1' WHERE `id`='".$pid."'");
        echo("activated");
    }

}else{
    echo ("Something went wrong.");
}

?>