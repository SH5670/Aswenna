<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
    <div class=" container-fluid">
        <div class="row ">

            <div class="col-12 " style="background-color: #A3E4D7 ;">
                <div class="row justify-content-center">

                    <div class="col-11 p-lg-1 p-0">
                        <div class="row">

                            <div class="col-12">
                                <div class="row">

                                    <div class="col-lg-1 col-12 text-lg-start text-center  mt-1">

                                    </div>

                                    <div class=" col-lg-4 col-12 text-lg-start text-center mt-2 mb-2">
                                        <span type="button" class="headerbtn fw-bold headerfontcolor" onclick="window.location='adminPanel.php';">Panel</span> &nbsp; &nbsp;
                                    </div>


                                    <div class="col-lg-7 col-12  text-center text-lg-end text-md-center mt-2">
                                        <?php

                                        


                                        if (isset($_SESSION["au"])) {
                                           


                                        ?>
                                            <a href="signIn.php" class="text-black text-decoration-none">Achini Jayathilake</a> &nbsp; &nbsp;

                                        <?php

                                        } else {

                                        ?>
                                            <a href="signIn.php" class="text-black text-decoration-none">Admin name</a> &nbsp; &nbsp;

                                        <?php
                                        }
                                        ?>
                                       
                                        <span type="button" class="headerbtn fw-bold headerfontcolor text-decoration-none" onclick="signOut();">Log Out</span> &nbsp; &nbsp;
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>




        </div>
    </div>

</body>



</html>