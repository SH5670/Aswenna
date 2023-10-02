<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Aswenna | Add Product</title>
    <link rel="icon" href="resources/icon/icon.png">

</head>

<body>
    <div class="container-fluid justify-content-center vh-100">

        <div class="row justify-content-center">
            <?php include "header.php"; ?>

            <div class="col-12">
                <div class="row justify-content-center">

                    <div class="col-12 text-center py-3">
                        <span class="fs-5 fw-semibold">Add Product</span>
                    </div>

                    <hr>

                    <div class="col-11 mb-5 mt-2">
                        <div class="row gap-2 justify-content-center align-items-center">

                            <div class="col-lg-5 col-md-5 col-12">
                                <div class="row g-3">

                                    <div class="col-12">
                                        <label for="" class="mb-1 form-label">Product Name</label>
                                        <input type="text" class="form-control form-control-sm">
                                    </div>

                                    <div class="col-6">
                                        <label for="" class="mb-1 form-label">Category</label>
                                        <select name="" id="" class="form-select form-select-sm">
                                            <option value="0">Select</option>
                                            <option value="1">Vegetables</option>
                                            <option value="2">Fruits</option>
                                        </select>
                                    </div>

                                    <div class="col-6">
                                        <label for="" class="mb-1 form-label">Quantity</label>
                                        <input type="number" class="form-control form-control-sm" value="1">
                                    </div>

                                    <div class="col-12">
                                        <label for="" class="mb-1 form-label">Cost Per Item</label>
                                        <input type="text" class="form-control form-control-sm">
                                    </div>

                                    <div class="col-6">
                                        <label for="" class="mb-1 form-label">MFD</label>
                                        <input type="date" class="form-control form-control-sm">
                                    </div>

                                    <div class="col-6">
                                        <label for="" class="mb-1 form-label">EXP</label>
                                        <input type="date" class="form-control form-control-sm">
                                    </div>


                                </div>
                            </div>

                            <div class="col-lg-5 col-md-5 col-12 text-center">
                                <div class="row align-items-center justify-content-center">

                                    <div class="col-12 text-center mb-3"><span class=" fw-semibold fs-5">Add Product Image</span></div>
                                    <div class="col-12 text-center mb-4">
                                        <img src="resources/img.jpg" class="border border-1" style="width: 150px;" alt="">
                                    </div>
                                    <div class="col-6 d-grid ">
                                        <button class=" btn btn-sm btn-success">Add Product</button>
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