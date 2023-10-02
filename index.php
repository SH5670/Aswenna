<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Aswenna | Home</title>
    <link rel="icon" href="resources/icon/icon.png">

</head>

<body>
    <div class="container-fluid justify-content-center vh-100">

        <div class="row ">
            <?php include "header.php"; ?>

            <!-- Start Search Bar -->
            <div class="col-12 my-2">
                <div class="row justify-content-end">
                    <div class="col-lg-5 col-5">
                        <input type="text" class="form-control form-control-sm" placeholder="Search Products" id="searchText" onkeypress="searchProducts();">
                    </div>
                    <div class="col-lg-1 col-2 d-grid">
                        <button class="btn btn-sm fw-semibold" style="background-color: #f0df0d;" onclick="searchProducts();">Search</button>
                    </div>
                    <div class="col-lg-2 col-5 d-grid">
                        <a href="searchFarmers.php" class="btn fw-semibold btn-sm" style="background-color: #c0c0c0;">Search Farmers</a>
                    </div>
                </div>
            </div>
            <!-- End Search Bar -->

            <div class="col-12">
                <div class="row" id="searchProductBody">

                    <!-- Start Carousel -->
                    <div class=" col-12 p-0">
                        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="resources/carosel1.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="resources/carosel2.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="resources/vegetable1.png" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <!-- End Carousel -->


                    <!-- Start Seasonal Product Div -->
                    <div class=" col-12 ">
                        <div class="row">
                            <div class=" col-12 text-center my-4">
                                <span class="fs-3 fw-semibold">Seasonal Products</span>
                            </div>

                            <div class="col-12 mb-3">
                                <div class="row justify-content-center gap-3">

                                    <div class="card col-lg-2 col-md-4 col-5">
                                        <img src="resources/yellowBellpepper.png" style="" class="card-img-top" alt="...">

                                        <div class="col-12 text-center" style="height: 50px;">
                                            <span class="card-title fs-6">BELL PEPPER - YELLOW (250g)</span>
                                        </div>

                                        <div class="col-12 text-center">

                                            <span class="fw-semibold">Rs.300.00</span><br>
                                            <span class=" text-success">4 Items Available</span>
                                            <div class="row">
                                                <div class="col-12 d-grid mt-1">
                                                    <a href="singleProductView.php" class="btn btn-sm text-dark fw-semibold" style="background-color: #f0df0d;">Buy Now</a>
                                                </div>
                                                <div class="col-12 d-grid mb-3 mt-1">
                                                    <button class="btn btn-sm text-white" style="background-color: #008000;">Add To Cart &nbsp; <i class="bi bi-cart-plus fs-6"></i></button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="card col-lg-2 col-md-4 col-5">
                                        <img src="resources/broccali.png" style="" class="card-img-top" alt="...">

                                        <div class="col-12 text-center" style="height: 50px;">
                                            <span class="card-title fs-6">BROCCOLI - (100g)</span><br>
                                        </div>

                                        <div class="col-12 text-center">
                                            <span class="fw-semibold">Rs.190.00</span><br>
                                            <span class=" text-success">4 Items Available</span>
                                            <div class="row">
                                                <div class="col-12 d-grid mt-1">
                                                <a href="singleProductView.php" class="btn btn-sm text-dark fw-semibold" style="background-color: #f0df0d;">Buy Now</a>
                                                </div>
                                                <div class="col-12 d-grid mb-3 mt-1">
                                                    <button class="btn btn-sm text-white" style="background-color: #008000;">Add To Cart &nbsp; <i class="bi bi-cart-plus fs-6"></i></button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="card col-lg-2 col-md-4 col-5">
                                        <img src="resources/redBellpepper.png" style="" class="card-img-top" alt="...">

                                        <div class="col-12 text-center" style="height: 50px;">
                                            <span class="card-title fs-6">BELL PEPPER - RED (250g)</span><br>
                                        </div>

                                        <div class="col-12 text-center">
                                            <span class="fw-semibold">Rs.290.00</span><br>
                                            <span class=" text-success">10 Items Available</span>
                                            <div class="row">
                                            <div class="col-12 d-grid mt-1">
                                            <a href="singleProductView.php" class="btn btn-sm text-dark fw-semibold" style="background-color: #f0df0d;">Buy Now</a>
                                                </div>
                                                <div class="col-12 d-grid mb-3 mt-1">
                                                    <button class="btn btn-sm text-white" style="background-color: #008000;">Add To Cart &nbsp; <i class="bi bi-cart-plus fs-6"></i></button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="card col-lg-2 col-md-4 col-5">
                                        <img src="resources/corn.png" style="" class="card-img-top" alt="...">

                                        <div class="col-12 text-center" style="height: 50px;">
                                            <span class="card-title fs-6">CORN - 1</span><br>
                                        </div>

                                        <div class="col-12 text-center">
                                            <span class="fw-semibold">Rs.55.00</span><br>
                                            <span class=" text-success">4 Items Available</span>
                                            <div class="row">
                                            <div class="col-12 d-grid mt-1">
                                            <a href="singleProductView.php" class="btn btn-sm text-dark fw-semibold" style="background-color: #f0df0d;">Buy Now</a>
                                                </div>
                                                <div class="col-12 d-grid mb-3 mt-1">
                                                    <button class="btn btn-sm text-white" style="background-color: #008000;">Add To Cart &nbsp; <i class="bi bi-cart-plus fs-6"></i></button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="card col-lg-2 col-md-4 col-5">
                                        <img src="resources/purplecabbage.png" style="" class="card-img-top" alt="...">

                                        <div class="col-12 text-center" style="height: 50px;">
                                            <span class="card-title fs-6">PURPLE CABBAGE - 250g</span><br>
                                        </div>

                                        <div class="col-12 text-center">
                                            <span class="fw-semibold">Rs.230.00</span><br>
                                            <span class=" text-success">4 Items Available</span>
                                            <div class="row">
                                            <div class="col-12 d-grid mt-1">
                                            <a href="singleProductView.php" class="btn btn-sm text-dark fw-semibold" style="background-color: #f0df0d;">Buy Now</a>
                                                </div>
                                                <div class="col-12 d-grid mb-3 mt-1">
                                                    <button class="btn btn-sm text-white" style="background-color: #008000;">Add To Cart &nbsp; <i class="bi bi-cart-plus fs-6"></i></button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>


                                    <div class="col-12 text-center mt-1">
                                        <a class="fs-6">See All</a>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start Seasonal Product Div -->

                    <div class=" col-12  p-0">
                        <img src="resources/banner2.png" style="width: 100%;">
                    </div>

                    <div class=" col-12 mt-4 mb-4">
                        <div class="row justify-content-center">
                            <div class="col-lg-3 col-6 text-center">
                                <span><i class="bi bi-truck fs-1 text-success"></i></span><br>
                                <span class="fs-5 fw-semibold"> Free Delivery</span><br>
                                <span class=" text-black-50">for orders above Rs.7500.00 </span>
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
                </div>
            </div>

            <?php include "footer.php"; ?>
        </div>

    </div>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/script.js"></script>
</body>

</html>