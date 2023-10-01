<?php


session_start();

require "connection.php";

if (isset($_SESSION["p"])) {
    $uid = $_SESSION["c"]["id"];
    $pid = $_SESSION["p"]["id"];

    $qty = $_POST["qty"];
    $cost = $_POST["cost"];
    $discount = $_POST["discount"];
    $mfd = $_POST["mfd"];
    $exp = $_POST["exp"];
    $status = $_POST["status"];

    $length = sizeof($_FILES);
    $allowed_img_extensions = array("image/jpg", "image/jpeg", "image/png", "image/svg+xml");

    Database::iud("DELETE FROM `productimage` WHERE `product_id`='" . $pid . "'");

    if ($length <= 3 && $length > 0) {

        for ($x = 0; $x < $length; $x++) {
            if (isset($_FILES["i" . $x])) {

                $img_file = $_FILES["i" . $x];
                $file_type = $img_file["type"];

                if (in_array($file_type, $allowed_img_extensions)) {

                    $new_img_extension;

                    if ($file_type == "image/jpg") {
                        $new_img_extension = ".jpg";
                    } else if ($file_type == "image/jpeg") {
                        $new_img_extension = ".jpeg";
                    } else if ($file_type == "image/png") {
                        $new_img_extension = ".png";
                    } else if ($file_type == "image/svg+xml") {
                        $new_img_extension = ".svg";
                    }

                    $file_name = "resources//product_images//" . $title . "_" . $x . "_" . uniqid() . $new_img_extension;
                    move_uploaded_file($img_file["tmp_name"], $file_name);

                    Database::iud("INSERT INTO `productimage`(`path`,`product_id`) VALUES ('" . $file_name . "','" . $pid . "')");

                    
                } else {
                    echo ("File type not allowed!");
                }
            }
        }
        Database::iud("UPDATE `product` SET `qty`='" . $qty . "',`price`='" . $cost . "',`discount`='" . $discount . "',`mfd`='" . $mfd . "',`exp`='" . $exp . "',`status_id`='" . $status . "',`user_id`='" . $uid . "' WHERE `id`='" . $pid . "'");

        echo ("Product has been successfully updated!");
    } else {
        echo ("Invalid image count!");
    }
}
