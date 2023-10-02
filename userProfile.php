<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Aswenna | User Profile</title>
    <link rel="icon" href="resources/icon/icon.png">

</head>

<body>
    <div class="container-fluid justify-content-center vh-100">

        <div class="row justify-content-center">
            <?php include "header.php"; ?>

            <div class="col-12">
                <div class="row">

                    <div class="col-12 bg-body rounded mt-4 mb-4">
                        <div class="row g-2">

                            <div class="col-md-3 border-end">
                                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                                    <img src="..." class="rounded-circle mt-5" style="width: 150px;" id="viewImg" />
                                    <span class="fw-bold">Name</span>
                                    <span class="fw-bold text-black-50">Email</span>
                                    <input type="file" class="d-none" id="profileimg" accept="image/*" />
                                    <label for="profileimg" class="btn mt-5 text-white fw-semibold fs-6" style="background-color: #008000;" onclick="changeImage();">Update Profile Image</label>
                                </div>
                            </div>

                            <div class="col-md-5 border-end">
                                <div class="p-3 py-5">

                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h4 class="fw-bold">Profile Settings</h4>
                                    </div>

                                    <div class="row mt-4">

                                        <div class="col-6">
                                            <label class="form-label">First Name</label>
                                            <input type="text" class="form-control form-control-sm" value="" id="..." />
                                        </div>

                                        <div class="col-6">
                                            <label class="form-label">Last Name</label>
                                            <input type="text" class="form-control form-control-sm" value="" id="...e" />
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label">Mobile</label>
                                            <input type="text" class="form-control form-control-sm" value="" id="..." />
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label">Password</label>
                                            <div class="input-group">
                                                <input type="password" class="form-control form-control-sm" readonly value="" />
                                                <span class="input-group-text" style="background-color: #008000;" id="...">
                                                    <i class="bi bi-eye-slash-fill text-white fs-6"></i>
                                                </span>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <label class="form-label">Email</label>
                                            <input type="text" class="form-control form-control-sm" readonly value="" />
                                        </div>
                                        <div class="col-6">
                                            <label class="form-label">User Type</label>
                                            <select class="form-select form-select-sm" id="...">
                                                <option>Select User</option>
                                                <option>Farmer</option>
                                                <option>Consumer</option>
                                            </select>
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label">Address Line 1</label>
                                            <input type="text" class="form-control form-control-sm" value="" id="..." />
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Address Line 2</label>
                                            <input type="text" class="form-control form-control-sm" value="" id="..." />
                                        </div>

                                        <div class="col-6">
                                            <label class="form-label">District</label>
                                            <select class="form-select form-select-sm" id="district">
                                                <option>Select District</option>
                                                <option>Colombo</option>
                                                <option>Kandy</option>
                                                <option>Gampaha</option>
                                            </select>
                                        </div>
                                        <div class="col-6">
                                            <label class="form-label">City</label>
                                            <select class="form-select form-select-sm" id="city">
                                                <option value="0">Select City</option>
                                                <option>Colombo</option>
                                                <option>Kandy</option>
                                                <option>Gampaha</option>
                                            </select>
                                        </div>
                                    
                                        <div class="col-12 d-grid mt-3 " style="background-color: #008000;">
                                            <button class="btn text-white fw-semibold fs-6">Update My Profile</button>
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