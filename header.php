<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/bootstrap.css">

    <title>Aswenna - Home</title>
</head>

<body>
    <div class="container-fluid  justify-content-center">
        <div class="row">
            <div class="col-12">

                <!-- Start Header Div -->
                <div class="row  fw-semibold align-items-center text-white justify-content-center" style="background-color: #008000;">

                    <div class="col-lg-6 col-md-6 col-12 py-2 text-lg-start text-md-start text-center">
                        <img src="resources/logo.png" style="width: 50px;" alt="">
                    </div>
                    <div class="col-lg-1 col-md-1 col-2 py-2 text-center"><a href="index.php" class="text-decoration-none text-white">Home</a></div>
                    <div class="col-lg-1 col-md-1 col-2 py-2 text-center">About</div>
                    <div class="col-lg-1 col-md-1 col-2 py-2 text-center">Store</div>
                    <div class="col-lg-1 col-md-1 col-3 py-2 text-center">
                        <span class="curser" onclick="showLoginModel();">Register</span>
                    </div>
                    <div class="col-lg-1 col-md-1 col-3 py-2 text-center fs-5"><a href="cart.php" class="text-decoration-none text-white"><i class="bi bi-cart-plus"></i></a></div>
                    <div class="col-lg-1 col-md-1 d-lg-block d-md-block d-none"></div>
                </div>
                <!-- End Header Div -->

                <!--Start SignUp Modal -->
                <div class="modal" tabindex="-1" id="signUpModel">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Sign Up</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class=" col-12">
                                    <div class="row justify-content-center g-2">

                                        <div class=" col-6">
                                            <label for="" class="col-12 mb-2">First Name</label>
                                            <input type="text" class="form-control form-control-sm col-12">
                                        </div>

                                        <div class=" col-6">
                                            <label for="" class="col-12 mb-2">Last Name</label>
                                            <input type="text" class="form-control form-control-sm col-12">
                                        </div>

                                        <div class=" col-12">
                                            <label for="" class="col-12 mb-2">Email</label>
                                            <input type="email" class="form-control form-control-sm col-12">
                                        </div>

                                        <div class=" col-6">
                                            <label for="" class="col-12 mb-2">Mobile</label>
                                            <input type="text" class="form-control form-control-sm col-12">
                                        </div>

                                        <div class=" col-6">
                                            <label for="" class="col-12 mb-2">User Type</label>
                                            <select name="" id="" class="form-select form-select-sm ">
                                                <option value="0">Select</option>
                                                <option value="1">Farmer</option>
                                                <option value="2">Consumer</option>
                                            </select>
                                        </div>

                                        <div class=" col-6">
                                            <label for="" class="col-12 mb-2">Password</label>
                                            <input type="password" class="form-control form-control-sm col-12">
                                        </div>

                                        <div class=" col-6">
                                            <label for="" class="col-12 mb-2">Confirmed Password</label>
                                            <input type="password" class="form-control form-control-sm col-12">
                                        </div>

                                        <div class="col-12 d-grid mt-4">
                                            <button type="button" class="btn btn-primary btn-sm">Sign Up</button>
                                        </div>

                                        <div class="col-12 mt-3">
                                            <span class="">Already Have An Account ?</span>
                                            <a class="curser" onclick="showLoginModel();">Back to Login</a>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">

                                <!-- <button type="button" class="btn btn-primary">Sign Up</button> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End SignUp modal -->

                <!--Start SignIn Modal -->
                <div class="modal" tabindex="-1" id="signInModel">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Sign In</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <div class="modal-body">
                                <div class=" col-12 ">
                                    <div class="row justify-content-center g-2">


                                        <div class=" col-12">
                                            <label for="" class="col-12 mb-2">Email</label>
                                            <input type="email" class="form-control form-control-sm col-12" id="e">
                                        </div>


                                        <div class=" col-12">
                                            <label for="" class="col-12 mb-2">Password</label>
                                            <input type="password" class="form-control form-control-sm col-12" id="p">
                                        </div>

                                        <div class=" col-12 d-none" id="newPwDiv">
                                            <label for="" class="col-12 mb-2">New Password</label>
                                            <input type="password" class="form-control form-control-sm col-12 " id="newPassword">
                                        </div>

                                        <div class=" col-12 d-none" id="vCodeDiv">
                                            <label for="" class="col-12 mb-2">Verification Code</label>
                                            <input type="text" class="form-control form-control-sm col-12 " id="vCode">
                                        </div>


                                        <div class="col-6 mt-3">
                                            <input type="checkbox" id="r">
                                            <span> Remember me ?</span>
                                        </div>

                                        <div class="col-6  mt-3 text-end">
                                            <a class="curser" onclick="forgotPassword();">Forgot Password</a>
                                        </div>


                                        <div class="col-12 d-grid mt-4">
                                            <button type="button" class="btn btn-sm btn-primary " id="signInBtn">Sign In</button>
                                        </div>

                                        <div class="col-12 d-grid mt-4 d-none" id="resetPassword">
                                            <button type="button" class="btn btn-sm btn-success " onclick="resetPassword();">Reset Password</button>
                                        </div>

                                        <div class="col-5">
                                            <hr class="col-12">
                                        </div>
                                        <div class="col-1">Or</div>
                                        <div class="col-5">
                                            <hr class="col-12">
                                        </div>

                                        <div class="col-12 d-grid ">
                                            <button type="button" class="btn btn-sm text-dark fw-semibold" style="background-color: #d1d1d1;" onclick="showSignUpModel();">Sign Up</button>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer border-0">

                                <!-- <button type="button" class="btn btn-primary">Sign Up</button> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End SignIn modal -->

            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/script.js"></script>
</body>

</html>