<?php
require "connection.php";
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lifect | home</title>
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="icon" href="resources/cimg/lifect_icon.png" />
</head>

<body>
    <div class=" container-fluid">
        <div class="row ">
            <?php include "header.php"; ?>



            <div class=" col-12 py-2" style="background-color: #17A589   ;">
                <div class=" row ">


                    <!-- offcanvas -->
                    <div class=" col-lg-3 col-2">
                        <button class="btn" style="background-color:#E5E8E8;" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><i class="bi bi-justify"></i></button>

                        <div class="offcanvas offcanvas-start w-auto" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                            <div class="offcanvas-header border-bottom " style="background-color: #17A589   ;">
                                <img src="resources/cimg/lifect_icon.png" height="50px" alt="">
                                <h4 class="offcanvas-title text-white" id="offcanvasWithBothOptionsLabel" style="margin-left: 25px;">Welcome to Lifect !</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">

                                <div class=" col-12">
                                    <div class="row">
                                        <div class=" col-12">
                                            <span><i class="bi bi-info-circle "></i>&nbsp; About Us</span>
                                            <hr>
                                        </div>
                                        <div class=" col-12">
                                            <span><i class="bi bi-cart2 "></i>&nbsp; Cart</span>
                                            <hr>
                                        </div>
                                        <div class=" col-12">
                                            <span onclick="window.location='advancedSearch.php';"><i class="bi bi-search"></i>&nbsp; Advanced Search</span>
                                            <hr>
                                        </div>
                                        <div class=" col-12">
                                            <span><i class="bi bi-bookmarks"></i>&nbsp; All Categories</span>
                                            <hr>
                                        </div>
                                    </div>

                                </div>

                                <?php
                                $category_rs = Database::search("SELECT * FROM `category` ");
                                $category_num = $category_rs->num_rows;

                                for ($m = 0; $m < $category_num; $m++) {
                                    $category_data = $category_rs->fetch_assoc();
                                ?>
                                    <div class=" col-lg-12">
                                        <option class=" offcanvasdiv py-2 px-2"><?php echo $category_data["name"]; ?>
                                        </option>
                                    </div>
                                <?php
                                }

                                ?>
                            </div>
                        </div>
                    </div>
                    <!-- offcanvas -->


                    <div class=" col-lg-6 col-7" >
                        <input type="text" class="form-control" placeholder=" Search" style="background-color: white;" id="shopInput">
                    </div>
                    <div class=" col-1 d-grid d-lg-block d-none  ">
                        <button type="button" class="btn btn-light  fw-bold " onclick="searchFromShop();">Search</button>
                    </div>
                    <div class=" col-1 d-grid d-lg-block d-none ">
                        <button type="button" class="btn btn-dark  fw-bold " onclick="window.location='advancedSearch.php';">Advanced</button>
                    </div>
                    <div class=" col-2 d-grid  d-lg-none d-block">
                        <button type="button" class="btn btn-warning btn-sm text-white fw-bold rounded-0"><i class="bi bi-search"></i></button>
                    </div>


                </div>
            </div>




            <div class=" col-12">
                <div class="row gap-2 justify-content-center" id="content">


                    <div class=" col-12 mb-4  p-0 ">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="resources/cimg/shopnow.jpg" class="d-block w-100" alt="...">
                                </div>

                                <div class="carousel-item">
                                    <img src="resources/cimg/shopnow_spices.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>

                    <div class=" col-12 text-center">
                        <span class=" fs-3 fw-semibold">Your Grocery List in One Place</span>
                    </div>
                    <div class=" col-12 text-center">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-10  d-grid mt-3">
                                <button type="button" class="btn  py-2 fs-5 text-white" style="background-color: #2ECC71;" onclick="window.location='shop.php';">Shop Now</button>
                            </div>
                        </div>
                    </div>


                    <div class=" col-12 mt-4 mb-4">
                        <div class="row justify-content-center">
                            <div class=" col-lg-6 col-12 mb-lg-0 mb-3">
                                <img src="resources/cimg/shopnow2.png" class="c border " style="width: 100%;" alt="" onclick="window.location='shop.php';">
                            </div>
                            <div class="  col-lg-6 col-12">
                                <img src="resources/cimg/shopnow3.jpg" class="c border " style="width: 100%;" alt="" onclick="window.location='shop.php';">
                            </div>


                            <div class=" col-12 text-center ">
                                <p class="mt-5  fs-2 fw-semibold">Food with heart. Made with care.</p>
                            </div>

                            <div class=" col-5 mb-lg-0 mt-4 mb-3">
                                <img src="resources/cimg/bakershop_now2.jpg" style="width: 100%;" alt="" onclick="window.location='shop.php';">
                            </div>
                            <div class=" col-5 mb-lg-0 mt-4 mb-3">
                                <img src="resources/cimg/bakershop_now3.jpg" style="width: 100%;" alt="" onclick="window.location='shop.php';">
                            </div>


                            <div class=" col-12 mt-4 mb-4">
                                <div class="row justify-content-center">
                                    <div class="col-lg-3 col-6 text-center">
                                        <span><i class="bi bi-truck fs-1 text-success"></i></span><br>
                                        <span class="fs-5 fw-semibold"> Free Delivery</span><br>
                                        <span class=" text-black-50">for orders above Rs.2000.00 </span>
                                    </div>
                                    <div class="col-lg-3 col-6 text-center">
                                        <span><i class="bi bi-telephone text-primary fs-1"></i></span><br>
                                        <span class="fs-5 fw-semibold">Customer Service</span><br>
                                        <span class=" text-black-50">Mon - Sun 9am-5pm</span>
                                    </div>
                                    <div class="col-lg-3 col-6 text-center">
                                        <span><i class="bi bi-basket fs-1 text-warning"></i></span><br>
                                        <span class="fs-5 fw-semibold">Over 2000 <br class=" d-lg-none d-block">
                                            Products</span><br>
                                        <span class=" text-black-50">largest selection of groceries</span>
                                    </div>
                                    <div class="col-lg-3 col-6 text-center">
                                        <span><i class="bi bi-shield-shaded fs-1 text-info"></i></span><br>
                                        <span class="fs-5 fw-semibold">100% Secure Payments</span><br>
                                        <span class=" text-black-50">ensured by Square Payments</span>
                                    </div>
                                </div>
                            </div>

                            <div class=" col-12 text-center ">
                                <p class="mt-5  fs-2 fw-semibold">A Moments of Healthy Juice</p>
                            </div>

                            <div class=" col-lg-9 col-12 text-center">
                                <img src="resources/cimg/fresh_juice.jpg" style="width: 100%;" alt="">
                            </div>


                        </div>
                    </div>




                </div>
            </div>







            <?php include "footer.php"; ?>

        </div>
    <div>
        <p>Hello</p>
    </div>

    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>
</body>

</html>