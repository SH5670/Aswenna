<?php

require "connection.php";

$searchText = $_POST["txt"];
$district = $_POST["dis"];
$city = $_POST["city"];

if (isset($searchText)) {

    $farmers_rs = Database::search("SELECT * FROM `user`
                                    INNER JOIN `usertype` ON `usertype`.`id`=`user`.`userType_id`
                                    WHERE (`fname` LIKE '" . $searchText . "' OR `lname` LIKE '" . $searchText . "')
                                    AND `type`='Farmer' ");
}
