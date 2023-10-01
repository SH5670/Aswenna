<?php

session_start();
require "connection.php";

if (isset($_SESSION["u"])) {
    if (isset($_GET["id"])) {

        $id = $_SESSION["u"]["id"];
        $pid = $_GET["id"];

        $wishlist_rs = Database::search("SELECT * FROM `wishlist` WHERE `product_id`='" . $pid . "' AND `user_id`='" . $id . "'");
        $wishlist_num = $wishlist_rs->num_rows;

        if ($wishlist_num == 1) {
            echo ("Product Already added to Wishlist.");
        } else {
            Database::iud("INSERT INTO `wishlist` (`product_id`,`user_id`) VALUES ('" . $pid . "','" . $id . "') ");
            echo ("Product added Successfully");
        }
    } else {
        echo ("Something went wrong");
    }
} else {
    echo ("Please sign In or Register");
}
