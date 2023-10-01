<?php

require "connection.php";

$searchText = $_GET["searchText"];

$loadWithoutCity = "false";

if (isset($_SESSION["u"])) {

    $user_id = $_SESSION["u"]["id"];
    

    $user_address_rs = Database::search("SELECT * FROM `address` INNER JOIN `city` ON
                                        `city`.`id`=`address`.`city_id` INNER JOIN `district` ON
                                        `district`.`id`= `city`.`district_id` WHERE `user_id`='" . $user_id . "'");

    $user_address_num = $user_address_rs->num_rows;


    if ($user_address_num == 1) { // load products by user city

        $loadWithoutCity = "false";

        $user_address_data = $user_address_rs->fetch_assoc();

        $user_city = $user_address_data["cname"];

        $product_rs1 = Database::search("SELECT * FROM `product`
                                        INNER JOIN `user` ON `user`.`id`=`product`.`user_id` 
                                        INNER JOIN `address` ON `address`.`user_id`=`user`.`id`
                                        INNER JOIN `city` ON `city`.`id` = `address`.`city_id`
                                        WHERE `name` LIKE '".$searchText."%' AND `cname` = '" . $user_city . "' ORDER BY `exp` ASC ");

        $product_num1 = $product_rs1->num_rows;


        for ($i = 0; $i < $product_num1; $i++) {

            $product_data1 = $product_rs1->fetch_assoc();

?>

            <div class="card col-2">
                <img src="resources/yellowBellpepper.png" style="" class="card-img-top" alt="...">

                <div class="col-12 text-center" style="height: 50px;">
                    <span class="card-title fs-6"><?php echo $product_data1["name"]?></span>
                </div>

                <div class="col-12 text-center">

                    <span class="fw-semibold">Rs.<?php echo $product_data1["price"]?></span><br>
                    <span class=" text-success"><?php echo $product_data1["qty"]?> Items Available</span>
                    <div class="row">
                        <div class="col-12 d-grid mb-3 mt-1">
                            <button class="btn btn-sm text-white" style="background-color: #008000;">Add To Cart &nbsp; <i class="bi bi-cart-plus fs-6"></i></button>
                        </div>
                    </div>

                </div>
            </div>

<?php
        }
    } else {

        $loadWithoutCity = "true";
    }
} else {

    $loadWithoutCity = "true";
}

if ($loadWithoutCity == "true") {

    $product_rs2 = Database::search("SELECT * FROM `product` WHERE `name` LIKE '".$searchText."%' ORDER BY `exp` ASC ");
    $product_num2 = $product_rs2->num_rows;

    for ($j = 0; $j < $product_num2; $j++) {

        $product_data2 = $product_rs2->fetch_assoc();

    ?>
    
    <div class="card col-2">
                <img src="resources/yellowBellpepper.png" style="" class="card-img-top" alt="...">

                <div class="col-12 text-center" style="height: 50px;">
                    <span class="card-title fs-6"><?php echo $product_data2["name"]?></span>
                </div>

                <div class="col-12 text-center">

                    <span class="fw-semibold">Rs.<?php echo $product_data2["price"]?>.00</span><br>
                    <span class=" text-success"><?php echo $product_data2["price"]?> Items Available</span>
                    <div class="row">
                        <div class="col-12 d-grid mb-3 mt-1">
                            <button class="btn btn-sm text-white" style="background-color: #008000;">Add To Cart &nbsp; <i class="bi bi-cart-plus fs-6"></i></button>
                        </div>
                    </div>

                </div>
            </div>
    
    <?php
    }
}
?>