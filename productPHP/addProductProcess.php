<?php
session_start();
require "connection.php";

$uid = $_SESSION["c"]["id"];

$category = $_POST["cat"];
$title = $_POST["title"];
$qty = $_POST["qty"];
$cost = $_POST["cost"];
$discount = $_POST["discount"];
$mfd = $_POST["mfd"];
$exp = $_POST["exp"];
$desc = $_POST["desc"];



if ($category == "0") {
    echo ("Please select a Category");
}  else if (empty($title)) {
    echo ("Please Enter a Title");
} else if (strlen($title <= 100)) {
    echo ("Title length should be less than 100 characters.");
} else if (empty($qty)) {
    echo ("Please Enter the Quantity");
} else if ($qty == "0" | $qty == "e" | $qty < 0) {
    echo ("Invalid  input for Quantity");
} else if (empty($cost)) {
    echo ("Please Enter the Price");
} else if (!is_numeric($cost)) {
    echo ("Invalid input for Price");
} else if (empty($discount)) {
    echo ("Please Enter the delivery fee inside colombo.");
} else if (!is_numeric($discount)) {
    echo ("Invalid input for delivery fee inside colombo.");
} else if (empty($mfd)) {
    echo ("Please Select Manufacture Date.");
} else if (!is_numeric($exp)) {
    echo ("Please Select Expiry Date.");
} else if (empty($desc)) {
    echo ("Please Enter a Description.");
} else {

    $d = new DateTime();
    $tz = new DateTimeZone("Asia/Colombo");
    $d->setTimezone($tz);
    $date = $d->format("Y-m-d H:i:s");

    $status = 1;

    Database::iud("INSERT INTO `product`(`name`,`price`,`category_id`,`qty`,`mfd`,`exp`,`discount`,`status_id`,`description`,`datetime_added`,`user_id`) 
    VALUES ('" . $title . "','" . $cost . "','" . $category . "','" . $qty . "',
'" . $condition . "','" . $mfd . "','" . $exp . "','" . $discount . "','" . $status . "','" . $desc . "','" . $date . "','".$uid."') ");


    $product_id = Database::$connection->insert_id;

    $length = sizeof($_FILES);
    if ($length <= 3 && $length > 0) {
        $allowed_img_extensions = array("image/jpg", "image/jpeg", "image/png", "image/svg/xml");

        for ($x = 0; $x < $length; $x++) {
            if (isset($_FILES["image" . $x])) {


                $img_file = $_FILES["image" . $x];
                $file_extension = $img_file["type"];
                // echo ($file_extension);
                if (in_array($file_extension, $allowed_img_extensions)) {

                    $new_img_extension;

                    if ($file_extension == "image/jpg") {
                        $new_img_extension = ".jpg";
                    } else if ($file_extension == "image/jpeg") {
                        $new_img_extension = ".jpeg";
                    } else if ($file_extension == "image/png") {
                        $new_img_extension = ".png";
                    } else if ($file_extension == "image/svg+xml") {
                        $new_img_extension = ".svg";
                    }

                    $file_name = "resources//product_images//" . $title . "_" . uniqid() . $new_img_extension;
                    move_uploaded_file($img_file["tmp_name"], $file_name);

                    Database::iud("INSERT INTO `productimage`(`path`,`product_id`) VALUES ('" . $file_name . "','" . $product_id . "')");
                } else {
                    echo ("Invalid Image type.");
                }
            }
        }
        echo ("Product Saved Successfully.");
    } else {
        echo ("Invalid image Count.");
    }
}
