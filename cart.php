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

        <div class="row justify-content-center">
            <?php include "header.php"; ?>

            <div class=" col-12 mb-3 mt-3">
                <span class="fs-4 fw-semibold"><i class="bi bi-cart-plus"></i> &nbsp; Shopping Cart </span>
            </div>

            <hr>

            <!-- Start Product List Div -->
            <div class="col-lg-9 col-11 mt-2">
                <div class="row gap-2 justify-content-center">


                    <!-- product Card -->
                    <div class="card mb-3" style="max-width: 480px;">
                        <div class="row g-0">

                            <div class="col-12 d-lg-none d-md-none d-block mt-2">
                                <div class="row">
                                    <div class="col-12 text-end ">
                                        <span><i class="bi bi-x-circle"></i></span>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-4">
                                <img src="resources/yellowBellpepper.png" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-12 text-end d-lg-block d-md-block d-none">
                                                <span><i class="bi bi-x-circle"></i></span>
                                            </div>

                                        </div>
                                    </div>

                                    <span class="card-title fs-6 fw-semibold">BELL PEPPER - YELLOW (250g)</span><br><br>
                                    <span class="card-title fs-6 text-success fw-semibold">In Stock - 97 Packs Available</span><br>
                                    <span class="card-title fs-6 text-danger fw-semibold">Rs.250.00</span><br>
                                    <div class="row">
                                        <div class="col-12 mt-2">
                                            <div class="row">
                                                <div class="col-4">
                                                    <input type="number" class="form-control form-control-sm col-1" value="1">
                                                </div>
                                                <div class="col-4 d-grid">
                                                    <button class="btn btn-success btn-sm ">Buy Now</button>
                                                </div>
                                                <div class="col-1 d-grid ">
                                                    <button class="btn btn-light btn-sm "><i class="bi bi-heart-fill text-danger"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product Card -->

                    <!-- product Card -->
                    <div class="card mb-3" style="max-width: 480px;">
                        <div class="row g-0">

                            <div class="col-12 d-lg-none d-md-none d-block mt-2">
                                <div class="row">
                                    <div class="col-12 text-end ">
                                        <span><i class="bi bi-x-circle"></i></span>
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-4">
                                <img src="resources/broccali.png" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-12 text-end d-lg-block d-md-block d-none">
                                                <span><i class="bi bi-x-circle"></i></span>
                                            </div>

                                        </div>
                                    </div>

                                    <span class="card-title fs-6 fw-semibold">BELL PEPPER - YELLOW (250g)</span><br><br>
                                    <span class="card-title fs-6 text-success fw-semibold">In Stock - 97 Packs Available</span><br>
                                    <span class="card-title fs-6 text-danger fw-semibold">Rs.250.00</span><br>
                                    <div class="row">
                                        <div class="col-12 mt-2">
                                            <div class="row">
                                                <div class="col-4">
                                                    <input type="number" class="form-control form-control-sm col-1" value="1">
                                                </div>
                                                <div class="col-4 d-grid">
                                                    <button class="btn btn-success btn-sm ">Buy Now</button>
                                                </div>
                                                <div class="col-1 d-grid ">
                                                    <button class="btn btn-light btn-sm "><i class="bi bi-heart-fill text-danger"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product Card -->



                </div>
            </div>
            <!-- End product List Div -->


            <!-- Start Checkout Div -->
            <div class="col-lg-3 col-11 mt-2 mb-4">
                <div class="row justify-content-center">

                    <div class="col-11">
                        <div class="row justify-content-center">

                            <div class="col-12 py-2 text-center">
                                <span class="fw-semibold fs-5">Order Summery</span>
                            </div>

                            <hr class="col-11">

                            <div class="col-12 mt-3">
                                <span>Products (2)</span>
                            </div>

                            <div class="col-12 mt-3">
                                <span> Shipping : Rs.250.00</span>
                            </div>

                            <div class="col-12 mt-3">
                                <span>Sub Total : Rs.500.00</span>
                            </div>

                            <hr class="mt-4 col-11">

                            <div class="col-12 mt-3 mb-3">
                                <span>Total Cost : Rs.750.00</span>
                            </div>

                            <div class="col-12 d-grid">
                                <button class="btn btn-dark btn-sm rounded-1">Checkout</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- End Checkout Div -->

            <?php include "footer.php"; ?>
        </div>

    </div>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/script.js"></script>
</body>

</html>