<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Aswenna | Single Product Views</title>
    <link rel="icon" href="resources/icon/icon.png">

</head>

<body>
    <div class="container-fluid justify-content-center vh-100">

        <div class="row justify-content-center">
            <?php include "header.php"; ?>

            <div class="col-12">
                <div class="row justify-content-center">

                    <div class="col-12 py-3 mt-3">
                        <span class="fs-5 fw-semibold">Single Product View</span>
                    </div>


                    <hr>

                    <div class="col-11 py-3">
                        <div class="row justify-content-center gap-2">
                            <div class="col-4">
                                <img src="resources/broccali.png" class="border border-1" style="width: 300px;" alt="">
                            </div>
                            <div class="col-6">
                                <div class="row">

                                    <div class="col-12">
                                        <span class="fw-semibold fs-5">BROCCOLI - (100g)</span>
                                    </div>

                                    

                                    <div class="col-12 mt-5">
                                        <span class="text-danger fs-5">Price : Rs.<span class="text-danger fs-5">190</span>.00 </span>

                                        &nbsp;
                                        <span class=" fs-6  text-decoration-line-through ">Rs. 197.5 .00</span>
                                        &nbsp;
                                        <span class=" fs-6 text-black-50">Save Rs.7.5 .00 (5%)</span>
                                    </div>

                                    <div class="col-12 mt-3">
                                        <div class="row">
                                            <div class="col-3">
                                                <input type="number" class="form-control  form-control-sm" value="1">
                                            </div>
                                            <div class="col-9"><span>Only 8 items left</span></div>
                                        </div>
                                    </div>

                                    <div class="col-12 mt-4">
                                        <div class="row g-2">
                                            <div class="col-4 d-grid">
                                                <button class="btn btn-success btn-sm fw-semibold">Buy Now</button>
                                            </div>
                                            <div class="col-4 d-grid">
                                                <button class="btn btn-warning btn-sm fw-semibold">Add To Cart &nbsp; <i class="bi bi-cart-plus fs-5"></i></button>
                                            </div>
                                            <div class="col-4 d-grid">
                                                <button class="btn btn-sm fw-semibold" style="background-color: #c3c3c3;">Add To Wishlist &nbsp; <i class="bi bi-heart-fill text-danger "></i></button>
                                            </div>
                                        </div>
                                    </div>





                                </div>
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