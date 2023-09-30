<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid justify-content-center vh-100">

        <div class="row ">
            <?php include "header.php"; ?>

            <!-- Start Search Bar -->
            <div class="col-12 my-2">
                <div class="row justify-content-end">
                    <div class="col-5">
                        <input type="text" class="form-control form-control-sm" placeholder="Search Products">
                    </div>
                    <div class="col-1 d-grid">
                        <button class="btn btn-primary btn-sm">Search</button>
                    </div>
                    <div class="col-2 d-grid">
                        <button class="btn btn-primary btn-sm">Search Farmers</button>
                    </div>
                </div>
            </div>
            <!-- End Search Bar -->

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
                    <div class=" col-12 mt-2 text-center my-3">
                        <span class="fs-3 fw-semibold">Seasonal Products</span>
                    </div>

                    <div class="col-12 mb-5">
                        <div class="row justify-content-center gap-3">

                            <div class="card col-2">
                                <img src="resources/yellowBellpepper.png" style="" class="card-img-top" alt="...">

                                <div class="col-12 text-center" style="height: 50px;">
                                    <span class="card-title fs-6">BELL PEPPER - YELLOW (250g)</span>
                                </div>

                                <div class="col-12 text-center">

                                    <span class="fw-semibold">Rs.300.00</span><br>
                                    <span class=" text-success">4 Items Available</span>
                                    <div class="row">
                                        <div class="col-12 d-grid mb-3 mt-1">
                                            <button class="btn btn-sm text-white" style="background-color: #008000;">Add To Cart &nbsp; <i class="bi bi-cart-plus fs-6"></i></button>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="card col-2">
                                <img src="resources/broccali.png" style="" class="card-img-top" alt="...">

                                <div class="col-12 text-center" style="height: 50px;">
                                    <span class="card-title fs-6">BROCCOLI - (100g)</span><br>
                                </div>

                                <div class="col-12 text-center">
                                    <span class="fw-semibold">Rs.190.00</span><br>
                                    <span class=" text-success">4 Items Available</span>
                                    <div class="row">
                                        <div class="col-12 d-grid mb-3 mt-1">
                                            <button class="btn btn-sm text-white" style="background-color: #008000;">Add To Cart &nbsp; <i class="bi bi-cart-plus fs-6"></i></button>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="card col-2">
                                <img src="resources/redBellpepper.png" style="" class="card-img-top" alt="...">

                                <div class="col-12 text-center" style="height: 50px;">
                                    <span class="card-title fs-6">BELL PEPPER - RED (250g)</span><br>
                                </div>

                                <div class="col-12 text-center">
                                    <span class="fw-semibold">Rs.290.00</span><br>
                                    <span class=" text-success">10 Items Available</span>
                                    <div class="row">
                                        <div class="col-12 d-grid mb-3 mt-1">
                                            <button class="btn btn-sm text-white" style="background-color: #008000;">Add To Cart &nbsp; <i class="bi bi-cart-plus fs-6"></i></button>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="card col-2">
                                <img src="resources/corn.png" style="" class="card-img-top" alt="...">

                                <div class="col-12 text-center" style="height: 50px;">
                                    <span class="card-title fs-6">CORN - 1</span><br>
                                </div>

                                <div class="col-12 text-center">
                                    <span class="fw-semibold">Rs.55.00</span><br>
                                    <span class=" text-success">4 Items Available</span>
                                    <div class="row">
                                        <div class="col-12 d-grid mb-3 mt-1">
                                            <button class="btn btn-sm text-white" style="background-color: #008000;">Add To Cart &nbsp; <i class="bi bi-cart-plus fs-6"></i></button>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="card col-2">
                                <img src="resources/purplecabbage.png" style="" class="card-img-top" alt="...">

                                <div class="col-12 text-center" style="height: 50px;">
                                    <span class="card-title fs-6">PURPLE CABBAGE - 250g</span><br>
                                </div>

                                <div class="col-12 text-center">
                                    <span class="fw-semibold">Rs.230.00</span><br>
                                    <span class=" text-success">4 Items Available</span>
                                    <div class="row">
                                        <div class="col-12 d-grid mb-3 mt-1">
                                            <button class="btn btn-sm text-white" style="background-color: #008000;">Add To Cart &nbsp; <i class="bi bi-cart-plus fs-6"></i></button>
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Seasonal Product Div -->


        </div>

    </div>
    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>
</body>

</html>