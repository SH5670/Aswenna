<?php

session_start();
require "connection.php";

if (isset($_SESSION["u"])) {
    if (isset($_GET["id"])) {

        $id = $_SESSION["u"]["id"];
        $pid = $_GET["id"];

        $cart_rs = Database::search("SELECT * FROM `cart` WHERE `product_id`='" . $pid . "' AND `user_id`='" . $id . "'");
        $cart_num = $cart_rs->num_rows;

        $product_rs = Database::search("SELECT * FROM `product` WHERE `id`='" . $pid . "'");
        $product_data = $product_rs->fetch_assoc();
        $product_qty = $product_data["qty"];

        if ($cart_num == 1) {

            $cart_data = $cart_rs->fetch_assoc();
            $current_qty = $cart_data["qty"];
            $new_qty = (int)$current_qty + 1;

            if ($product_qty >= $new_qty) {

                Database::iud("UPDATE `cart` SET `qty`='" . $new_qty . "' WHERE `product_id`='" . $pid . "' AND `user_id`='" . $id . "'");
                echo ("Product Updated");
            } else {
                echo ("Invalid Quantity");
            }
        } else {
            Database::iud("INSERT INTO `cart` (`product_id`,`user_id`,`qty`) VALUES ('" . $pid . "','" . $id . "','1') ");
            echo ("Product added Successfully");
        }
    } else {
        echo ("Something went wrong");
    }
} else {
    echo ("Please sign In or Register");
}
