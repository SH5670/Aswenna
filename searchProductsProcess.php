<?php

require "connection.php";

$searchText = $_GET["searchText"];
$loadWithoutCity = "false";

if (isset($_SESSION["u"])) {

    $user_id = $_SESSION["u"]["id"];

    $user_address_rs = Database::search("SELECT * FROM `address` INNER JOIN `city` ON
                                        `city`.`id`=`address`.`city_id` INNER JOIN `district` ON
                                        `district`.`id`= `city`.`district_id` WHERE `user_email`='" . $user_id . "'");

    $user_address_num = $user_address_rs->num_rows;


    if ($user_address_num > 1) { // load products by user city

        $loadWithoutCity = "false";

        $user_address_data = $user_address_rs->fetch_assoc();

        $user_city = $user_address_data["cname"];

        $product_rs1 = Database::search("SELECT * FROM `product`
                                        INNER JOIN `user` ON `user`.`id`=`product`.`user_id` 
                                        INNER JOIN `address` ON `address`.`user_id`=`user`.`id`
                                        INNER JOIN `city` ON `city`.`id` = `address`.`city_id`
                                        WHERE `cname`='" . $user_city . "' ORDER BY `exp` ASC ");

        $product_num1 = $product_rs1->num_rows;


        for ($i = 0; $i < $product_num1; $i++) {

            $product_data1 = $product_rs1->fetch_assoc();

            //design eka add karanna product 1 ka
        }

    } else {  

        $loadWithoutCity = "true";
    }

} else {

    $loadWithoutCity = "true";
}

if ($loadWithoutCity == "true") {

    $product_rs2 = Database::search("SELECT * FROM `product` ORDER BY `exp` ASC ");
    $product_num2 = $product_rs2->num_rows;

    for ($j = 0; $j < $product_num2; $j++) {

        $product_data2 = $product_rs2->fetch_assoc();

        //design eka add karanna product 1 ka
    }
}
