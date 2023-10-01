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

            <div class=" col-12 mb-3 mt-3">
                <span class="fs-4 fw-semibold"><i class="bi bi-cart-plus"></i> &nbsp; Shopping Cart </span>
            </div>

            <hr>

            <!-- Start Product List Div -->
            <div class="col-10 mt-2">
                <div class="row gap-2 justify-content-center">


                    <!-- product Card -->
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="resources/yellowBellpepper.png" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-12 text-end">
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
                                                <div class="col-1 d-grid">
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
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="resources/broccali.png" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-12 text-end">
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
                                                <div class="col-1 d-grid">
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

            <div class="col-2"></div>

            <?php include "footer.php"; ?>
        </div>

    </div>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/script.js"></script>
</body>

</html>