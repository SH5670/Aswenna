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

                //model
                <div class="modal-dialog modal-dialog-centered" id="loginModel"></div>
            </div>
        </div>
    </div>
    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>
</body>

</html>