<?php

require "connection.php";

$city = $_POST["city"];

if ($city != 0) {

    $district_rs = Database::search("SELECT `district`.`id` AS dID FROM `district`
    INNER JOIN `city` ON `city`.`district_id` = `district`.`id`
    WHERE `city`.`id`='" . $city . "' ");

    $district_data = $district_rs->fetch_assoc();

    echo $district_data["dID"];
}else{

    echo("reloadAllDistricts");
}
