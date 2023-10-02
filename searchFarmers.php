<?php

require "connection.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Aswenna | Home</title>
</head>

<body onload="searchFarmers();">
    <div class="container-fluid justify-content-center vh-100">

        <div class="row ">
            <?php include "header.php"; ?>

            <div class=" col-12 mt-2">
                <span class="fs-4">Search Farmers</span>
            </div>

            <div class="col-12 mt-2 ">
                <div class="row align-items-center py-2 ">
                    <!-- Start search farmers input -->
                    <div class="col-4">
                        <label for="" class="mb-1">By Name</label>
                        <input type="text" class="form-control form-control-sm" placeholder="Enter Name" id="searchFarmerText" onkeypress="searchFarmers();">
                    </div>
                    <!-- End search farmers input -->

                    <!-- start District Dropdown -->
                    <div class="col-2">
                        <label for="" class="mb-1">By District</label>
                        <select name="" class="form-select form-select-sm" id="farmerDistrict" onchange="loadCityFromDistrict(); searchFarmers();">
                            <option value="0">Select</option>
                            <?php

                            $district_rs = Database::search("SELECT * FROM `district`");
                            $district_num = $district_rs->num_rows;

                            for ($i = 0; $i < $district_num; $i++) {

                                $district_data = $district_rs->fetch_assoc();
                            ?>
                                <option value="<?php echo $district_data["id"]; ?>"><?php echo $district_data["dname"] ?></option>
                            <?php

                            }

                            ?>
                        </select>
                    </div>
                    <!-- End District Dropdown -->


                    <!-- Start City Dropdown -->
                    <div class="col-2">
                        <label for="" class="mb-1">By City</label>
                        <select name="" id="farmerCity" class="form-select form-select-sm" onchange="loadDistrictFromCity(); searchFarmers();">
                            <option value="0">Select</option>
                            <?php

                            $city_rs = Database::search("SELECT * FROM `city`");
                            $city_num = $city_rs->num_rows;

                            for ($i = 0; $i < $city_num; $i++) {

                                $city_data = $city_rs->fetch_assoc();
                            ?>
                                <option value="<?php echo $city_data["id"]; ?>"><?php echo $city_data["cname"] ?></option>
                            <?php

                            }
                            ?>
                        </select>
                    </div>
                    <!-- End City Dropdown -->


                </div>
            </div>

            <hr>

            <!-- Start farmers List -->
            <div class="col-12 mb-2">
                <div class=" row justify-content-center gap-3" id="searchFarmerBody">

                    <!-- <div class="card col-2">
                        <img src="resources/user.jpg" style="" class="card-img-top" alt="...">

                        <div class="col-12 text-center" style="height: 50px;">
                            <span class="card-title fs-6">Sahan Perera</span><br>
                        </div>

                        <div class="col-12 text-center">
                            <span class="fw-semibold">Colombo</span><br>
                            <span class=" text-success">Nugegoda</span>
                            <div class="row">
                                <div class="col-12 d-grid mb-3 mt-1">
                                    <button class="btn btn-sm text-dark fw-semibold" style="background-color: #e7dc18;">View Products</button>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card col-2">
                        <img src="resources/user.jpg" style="" class="card-img-top" alt="...">

                        <div class="col-12 text-center" style="height: 50px;">
                            <span class="card-title fs-6">Sahan Perera</span><br>
                        </div>

                        <div class="col-12 text-center">
                            <span class="fw-semibold">Colombo</span><br>
                            <span class=" text-success">Nugegoda</span>
                            <div class="row">
                                <div class="col-12 d-grid mb-3 mt-1">
                                    <button class="btn btn-sm text-dark fw-semibold" style="background-color: #e7dc18;">View Products</button>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card col-2">
                        <img src="resources/user.jpg" style="" class="card-img-top" alt="...">

                        <div class="col-12 text-center" style="height: 50px;">
                            <span class="card-title fs-6">Sahan Perera</span><br>
                        </div>

                        <div class="col-12 text-center">
                            <span class="fw-semibold">Colombo</span><br>
                            <span class=" text-success">Nugegoda</span>
                            <div class="row">
                                <div class="col-12 d-grid mb-3 mt-1">
                                    <button class="btn btn-sm text-dark fw-semibold" style="background-color: #e7dc18;">View Products</button>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card col-2">
                        <img src="resources/user.jpg" style="" class="card-img-top" alt="...">

                        <div class="col-12 text-center" style="height: 50px;">
                            <span class="card-title fs-6">Sahan Perera</span><br>
                        </div>

                        <div class="col-12 text-center">
                            <span class="fw-semibold">Colombo</span><br>
                            <span class=" text-success">Nugegoda</span>
                            <div class="row">
                                <div class="col-12 d-grid mb-3 mt-1">
                                    <button class="btn btn-sm text-dark fw-semibold" style="background-color: #e7dc18;">View Products</button>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card col-2">
                        <img src="resources/user.jpg" style="" class="card-img-top" alt="...">

                        <div class="col-12 text-center" style="height: 50px;">
                            <span class="card-title fs-6">Sahan Perera</span><br>
                        </div>

                        <div class="col-12 text-center">
                            <span class="fw-semibold">Colombo</span><br>
                            <span class=" text-success">Nugegoda</span>
                            <div class="row">
                                <div class="col-12 d-grid mb-3 mt-1">
                                    <button class="btn btn-sm text-dark fw-semibold" style="background-color: #e7dc18;">View Products</button>
                                </div>
                            </div>

                        </div>
                    </div> -->


                </div>
            </div>
            <!-- End Farmers List -->

            <?php include "footer.php"; ?>
        </div>

    </div>
    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>
</body>

</html>