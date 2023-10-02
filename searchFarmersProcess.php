<?php

require "connection.php";

$searchText = $_POST["txt"];
$district = $_POST["dis"];
$city = $_POST["city"];

$query = "SELECT * FROM `user`
          INNER JOIN `usertype` ON `usertype`.`id`=`user`.`userType_id`
          INNER JOIN `address` ON `address`.`user_id`=`user`.`id`
          INNER JOIN `city` ON `city`.`id` = `address`.`city_id`
          INNER JOIN `district` ON `district`.`id`=`city`.`district_id`
          WHERE ";

if (!empty($searchText)) {

    $query .= " (`fname` LIKE '" . $searchText . "%' OR `lname` LIKE '" . $searchText . "%') AND ";
}

if ($district == "0" && $city == "0") {

    $query .= " `type`='Farmer'";
}

if ($district != "0" && $city == "0") {

    $query .= " `type`='Farmer' AND `district`.`id` = '" . $district . "'";
}

if ($city != "0" && $district == "0") {

    $query .= " `type`='Farmer' AND `city`.`id`='" . $city . "'";
}

if ($district != "0" && $city != "0") {

    $query .= " `type`='Farmer' AND (`district`.`id` ='" . $district . "' AND `city`.`id` ='" . $city . "') ";
}

$farmers_rs = Database::search($query);
$farmers_num = $farmers_rs->num_rows;

if ($farmers_num != 0) {

    for ($i = 0; $i < $farmers_num; $i++) {

        $farmers_data = $farmers_rs->fetch_assoc();
?>

        <div class="card col-2">
            <img src="resources/user.jpg" style="" class="card-img-top" alt="...">

            <div class="col-12 text-center" style="height: 50px;">
                <span class="card-title fs-6"><?php echo $farmers_data["fname"]." ". $farmers_data["lname"]?></span><br>
            </div>

            <div class="col-12 text-center">
                <span class="fw-semibold"><?php echo $farmers_data["dname"]?></span><br>
                <span class=" text-success"><?php echo $farmers_data["cname"]?></span>
                <div class="row">
                    <div class="col-12 d-grid mb-3 mt-1">
                        <button class="btn btn-sm text-dark fw-semibold" style="background-color: #e7dc18;">View Products</button>
                    </div>
                </div>

            </div>
        </div>

<?php

    }
} else {

    //no farmers
    echo("0 farmers found!");

}
