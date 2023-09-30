<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid  justify-content-center">
        <div class="row">
            <div class="col-12">

                <div class="row  fw-semibold bg-info align-items-center">
                    <!-- style="background-color: #27AE60;" -->
                    <div class="col-5 py-2">
                        <img src="resources/logo.png" style="width: 50px;" alt="">
                    </div>
                    <div class="col-1 py-2 text-center">Home</div>
                    <div class="col-1 py-2 text-center">About</div>
                    <div class="col-1 py-2 text-center">Store</div>
                    <div class="col-1 py-2 text-center">
                        <span class="curser" onclick="showLoginModel();">Register</span>
                    </div>
                    <div class="col-1 py-2 text-center ">Cart</div>
                </div>

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
                                            <span  class="">Already Have An Account ?</span> 
                                            <a href="" class="">Back to Login</a>
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
                <div class="modal" tabindex="-1" id="loginModel">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Sign In</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class=" col-12">
                                    <div class="row justify-content-center g-2">
                                       

                                        <div class=" col-12">
                                            <label for="" class="col-12 mb-2">Email</label>
                                            <input type="email" class="form-control form-control-sm col-12">
                                        </div>
                                                                                

                                        <div class=" col-12">
                                            <label for="" class="col-12 mb-2">Password</label>
                                            <input type="password" class="form-control form-control-sm col-12">
                                        </div>

                                        

                                        <div class="col-12 d-grid mt-4">
                                            <button type="button" class="btn btn-primary btn-sm">Sign In</button>
                                        </div>

                                        <div class="col-6">
                                            <input type="checkbox">
                                            <span>Remember me ?</span>
                                        </div>

                                        <div class="col-12 mt-3">
                                            <span  class="">Already Have An Account ?</span> 
                                            <a href="" class="">Back to Login</a>
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
                <!-- End SignIn modal -->

            </div>
        </div>
    </div>
    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>
</body>

</html>