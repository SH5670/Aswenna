<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Aswenna | Home</title>
</head>

<body>
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
                        <input type="text" class="form-control form-control-sm" placeholder="Enter Name">
                    </div>
                    <!-- End search farmers input -->

                    <!-- start District Dropdown -->
                    <div class="col-2">
                        <label for="" class="mb-1">By District</label>
                        <select name="" id="" class="form-select form-select-sm">
                            <option value="0">Select</option>
                            <option value="1">Colombo</option>
                            <option value="2">Gampaha</option>
                        </select>
                    </div>
                    <!-- End District Dropdown -->


                    <!-- Start City Dropdown -->
                    <div class="col-2">
                        <label for="" class="mb-1">By City</label>
                        <select name="" id="" class="form-select form-select-sm">
                            <option value="0">Select</option>
                            <option value="1">Colombo</option>
                            <option value="2">Gampaha</option>
                        </select>
                    </div>
                    <!-- End City Dropdown -->
                    

                </div>
            </div>

            <hr>

            <!-- Start farmers List -->
            <div class="col-12 mb-2">
                <div class=" row justify-content-center gap-3">

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