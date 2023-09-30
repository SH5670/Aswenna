<!doctype html>
<html>

<head>
    <title>eMan</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <link rel="stylesheet" href="css/index.css">
    <link rel="icon" href="resources/logo/logo.png" />
</head>

<body>
    <div class="container mt-5 d-flex">
        <div class="row main mt-4 align-items-center justify-content-center">
            <div class="d-md-none d-lg-none" style="height:140px ;">
                <img class="mx-5 px-4 " src="resources/logo_badge/logo_badge.png" style="height: 200px;">
            </div>
            <!-- sign up -->
            <div class="col-md-6 mt-lg-4" id="SignUp">
                <h1 class="display-4 text-center">Sign up</h1>
                <form class="row p-4">
                    <div class="col-12">

                        <div class="row">
                            <div class="col-6 form-group">
                                <label>First name</label>
                                <input type="text" id="fname">
                            </div>

                            <div class="col-6 form-group">
                                <label>Last name</label>
                                <input type="text" id="lname">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6 form-group">
                                <label>Mobile Number</label>
                                <input type="text" id="mobile">
                            </div>
                            <div class="col-6 form-group">
                                <label>Gender</label>
                                <select class="text-center" style="font-size: 18px; color: rgba(58, 58, 58);">
                                    <option value="1" style="  background-color: transparent">Male</option>
                                    <option value="2" style="  background-color: transparent">Female</option>

                                </select>
                            </div>
                        </div>

                        <div class="col-12 form-group">
                            <label>Email</label>
                            <input type="email" id="email">
                        </div>

                        <div class="row">

                            <div class="col-6 form-group">
                                <label>Type Password</label>
                                <input type="password" id="pw1">
                            </div>

                            <div class="col-6 form-group">
                                <label>Retype Password</label>
                                <input type="password" id="pw2">
                            </div>
                        </div>


                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-6 mt-3 ">
                                <button class="col-12" onclick="register();">Register</button>
                            </div>

                            <div class="col-6 mt-4 text-center">
                                <a class="links text-decoration-none fs-6" href="#" id="loginLink">Already have an Account</a>
                            </div>
                        </div>
                    </div>

                </form>

            </div>
            <!-- sign in -->

            <div class="col-md-6 col-12 p-5" id="login">
                <h1 class="col-12 display-4 text-center">Login</h1>
                <form class="col-12 d-flex justify-content-center mt-4 p-3">
                    <div class="col-12">

                        <div class="col-12 form-group">
                            <label>Email</label>
                            <input type="email">
                        </div>

                        <div class="col-12 form-group">
                            <label>Password</label>
                            <input type="password">
                        </div>

                        <div class="col-12 form-check mt-2">
                            <input class="form-check-input" type="checkbox">
                            <span class="form-check-label fs-6">Remember Me</span>
                        </div>

                        <div class="col-12 mt-3">
                            <button class="col-12">Login</button>
                        </div>
                        <div class="col-12">
                            <div class="row p-3">
                                <a class="links col-12 col-lg-6 fs-6  text-sm-center" href="#" id="registerLink">Create an Account</a>
                                <a class="links col-12 col-lg-6 fs-6  text-sm-center" href="#" onclick="forgotPassword();">Forgot Password</a>

                            </div>
                        </div>

                    </div>
                </form>
            </div>
            <div class="video-container " id="overlay">
                <video autoplay muted loop>
                    <source src="resources/video.mp4" type="video/mp4" />

                </video>
                <div class="caption"></div>

            </div>

            <!-- Modal -->
            <div class="modal" id="forgotPasswordModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <input type="text">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Understood</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->

            <!-- footer -->

            <div class="col-12 col-lg-12 fixed-bottom d-none d-lg-block">
                <div class="row">
                    <p class="offset-4 col-4 text-center">&copy; 2022 eman.lk || All Right Reserved</p>
                    <p class="offset-2 col-2 text-center admin" onclick="window.location='admin.php';"><i class="bi bi-person-workspace"></i> &nbsp;Admin Login </p>
                </div>
            </div>
            <!-- footer -->

        </div>
    <div>
        <p>Hello</p>
    </div>

    <script src="bootstrap.bundle.js"></script>
    <script src="index.js"></script>
</body>

</html>