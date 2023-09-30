<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lifect</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

</head>

<body>
    <div class=" container-fluid bg-white">
        <div class="row ">

            <div class="col-12  ">
                <div class="row justify-content-center">



                    <div class="col-12 ">
                        <div class="row">
                            <div class=" col-lg-2 d-lg-block text-center p-0">
                                <img src="resources/cimg/lifect.png" class="d-lg-block d-none" style="width: 100%; height: 100%;" alt="">
                            </div>

                            <div class="col-lg-2 col-3 text-lg-end py-3">
                                <a href="index.php" class=" text-black-50 text-decoration-none fs-5 fw-bold ">Home</a>
                            </div>

                            <div class="col-lg-2 col-3 text-end py-3">
                                <a href="shop.php" class="fs-5 fw-bold text-black-50 text-decoration-none">Shop</a>
                            </div>

                            <div class="col-2 d-lg-block d-none text-end py-3">
                                <span class="fs-5 fw-bold text-black-50">About Us</span>
                            </div>


                            <div class="col-lg-2 col-6 text-center py-3">

                                <?php

                                session_start();


                                if (isset($_SESSION["u"])) {
                                    
                                    $data = $_SESSION["u"];


                                ?>
                                    <div class="dropdown">
                                        <button class="btn btn-light  dropdown-toggle fs-6" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-person"></i> Account
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="myProfile.php">My profile</a></li>
                                            <li><a class="dropdown-item" href="cart.php">My Cart</a></li>
                                            <li><a class="dropdown-item" href="wishlist.php">Wishlist</a></li>
                                            <li><a class="dropdown-item" href="#" onclick="contactAdmin('<?php echo $_SESSION['u']['email']; ?>');  msgbox('<?php echo $_SESSION['u']['email']; ?>'); msgloading();">contact</a></li>
                                            <li><a class="dropdown-item" href="purchaseHistory.php">Purchase History</a></li>
                                            <li><a class="dropdown-item" onclick="signOut();"><i class="bi bi-box-arrow-right"></i> Log Out</a></li>
                                        </ul>
                                    </div>




                                    <!-- message modal -->
                                    <div class="modal" tabindex="-1" id="contactAdmin">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Contact Admin</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>

                                                <div class="modal-body overflow-scroll" id="mbox">


                                                </div>


                                                <div class="modal-footer">
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col-9">
                                                                <input type="text" class=" form-control" id="msgtxt">
                                                            </div>
                                                            <div class=" col-3 d-grid">
                                                                <button type="button" class="btn btn-primary" onclick="sendtoAdminMsg('<?php echo $_SESSION['u']['email']; ?>');  msgbox('<?php echo $_SESSION['u']['email']; ?>'); ">send</button>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- message modal -->


                                <?php

                                } else {

                                ?>

                                    <a href="login.php"><button type="button" class="btn btn-light ">Login / Register</button></a>

                                <?php
                                }
                                ?>


                            </div>
                            <div class="col-lg-1 text-center d-lg-block d-none  py-3">
                                <a href="cart.php" class=" text-decoration-none"><i class="bi bi-bag fs-5 fw-bold text-black"></i></a>
                            </div>
                            <div class="col-1 d-lg-block d-none py-3">

                            </div>


                        </div>

                    </div>

                    <div class="fixed-bottom mb-3 d-flex justify-content-end">
                        <div class="d-flex justify-content-center align-items-center bg-warning" style="border-radius: 100%; height: 100px; width: 100px; ">
                            <i class="bi bi-messenger fs-1 text-white"></i>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>


    <script src="script.js"></script>
</body>


</html>