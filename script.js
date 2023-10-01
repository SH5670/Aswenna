var bSignInModel;
var bSignUpModel;

function showLoginModel() {

    var model = document.getElementById("signInModel");
    bSignInModel = new bootstrap.Modal(model);
    bSignInModel.show();
    bSignUpModel.hide();
}

function showSignUpModel() {
    bSignInModel.hide();
    var model2 = document.getElementById("signUpModel");
    bSignUpModel = new bootstrap.Modal(model2);
    bSignUpModel.show();
}

function SignUp() {

    var type = document.getElementById("type").value;
    var fname = document.getElementById("fname").value;
    var lname = document.getElementById("lname").value;
    var mobile = document.getElementById("mobile").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    var form = new FormData();


    // if(status=="1"){
    //     var line1 = document.getElementById("line1").value;
    //     var line2 = document.getElementById("line2").value;
    //     var city = document.getElementById("city").value;
    //     var district = document.getElementById("district").value;

    //     form.append("line1",line1);
    //     form.append("line2",line2);
    //     form.append("city",city);
    //     form.append("district",district);

    // }
    form.append("type", type);
    form.append("fname", fname);
    form.append("lname", lname);
    form.append("mobile", mobile);
    form.append("email", email);
    form.append("password", password);

    var request = new XMLHttpRequest();

    request.onreadystatechange = function () {
        if (request.readyState == 4) {
            var text = request.responseText;
            alert(text);
            if (text == "Success") {

            } else {
                alert(text);
            }

        }

    }

    request.open("POST", "signUpProcess.php", true);
    request.send(form);
}

function signIn() {

    var e = document.getElementById("e").value;
    var p = document.getElementById("p").value;
    var r = document.getElementById("r").checked;

    var form = new FormData();

    form.append("email", e);
    form.append("password", p);
    form.append("rememberme", r);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4) {
            var t = request.responseText;
            if (t == "Success") {

            } else {
                alert(t);
            }

        }

    }
}

function forgotPassword() {

    var email = document.getElementById("e");

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {

        if (r.readyState == 4 && r.status == 200) {
            var t = r.responseText;
            if (t == "Success") {

                alert("Verification Code has sent to your email. Please check your inbox");
                email.disabled = true;



                var passwordField = document.getElementById("p");
                var signInBtn = document.getElementById("signInBtn");
                document.getElementById("newPwDiv").classList = "d-block";
                document.getElementById("vCodeDiv").classList = "d-block";
                document.getElementById("resetPassword").classList = "d-block col-12 d-grid mt-4";

                passwordField.classList = "d-none";
                signInBtn.classList = "d-none";


            } else {
                alert(t);
            }
        }

    }

    r.open("GET", "forgotPasswordProcess.php?e=" + email.value, true);
    r.send();

}
function resetPassword() {

    var email = document.getElementById("e");
    var np = document.getElementById("newPassword");
    var vcode = document.getElementById("vCode");

    var f = new FormData();

    f.append("e", email.value);
    f.append("np", np.value);
    f.append("v", vcode.value);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {

        if (r.readyState == 4 && r.status == 200) {

            var t = r.responseText;
            if (t == "success") {
                alert("Password Changed Successfully. Please login with your New Password.");


            } else {
                alert(t);
            }

        }
    }

    r.open("POST", "resetPassword.php", true);
    r.send(f);

}

function addProduct() {

    var cat = document.getElementById("category").value;
    var title = document.getElementById("title").value;
    var qty = document.getElementById("qty").value;
    var cost = document.getElementById("cost").value;
    var discount = document.getElementById("discount").value;
    var mfd = document.getElementById("mfd").value;
    var exp = document.getElementById("exp").value;
    var desc = document.getElementById("description").value;
    var image = document.getElementById("imageuploader");
    // var status = document.getElementById("status").value;


    var form = new FormData();

    form.append("cat", cat);
    form.append("title", title);
    form.append("qty", qty);
    form.append("cost", cost);
    form.append("discount", discount);
    form.append("mfd", mfd);
    form.append("exp", exp);
    form.append("desc", desc);

    var file_count = image.files.length;

    for (var x = 0; x < file_count; x++) {
        form.append("image" + x, image.files[x]);
    }

    var request = XMLHttpRequest();

    request.onreadystatechange = function () {

        if (r.readyState == 4) {
            var t = request.responseText;
            alert(t);

        }
    }

    request.open("POST", "addProductProcess.php", true);
    request.send(form);

}

function searchProducts() {

    var searchText = document.getElementById("searchText");

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4 && r.status == 200) {
            var t = r.responseText;
            alert(t);
            document.getElementById("searchProductBody").innerHTML = t;
        }
    }

    r.open("GET", "searchProductsProcess.php?searchText=" + searchText.value, true);
    r.send();

}

function searchFarmers(){

    var searchText = document.getElementById("searchFarmerText");
    var district = document.getElementById("farmerDistrict");
    var city = document.getElementById("farmerCity");

    var f = new FormData();
    f.append("txt",searchText);
    f.append("dis",district);
    f.append("city",city);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function () {
        if (r.readyState == 4 && r.status == 200) {
            var t = r.responseText;
            document.getElementById("searchFarmerBody").innerHTML = t;
        }
    }

    r.open("POST", "searchFarmersProcess.php", true);
    r.send(f);


}

function updateProduct(id){

    var qty = document.getElementById("qty").value;
    var cost = document.getElementById("cost").value;
    var discount = document.getElementById("discount").value;
    var mfd = document.getElementById("mfd").value;
    var exp = document.getElementById("exp").value;
    var image = document.getElementById("imageuploader");
    var status = document.getElementById("status").value;


    var form = new FormData();

    form.append("qty", qty);
    form.append("cost", cost);
    form.append("discount", discount);
    form.append("mfd", mfd);
    form.append("exp", exp);
    form.append("status", status);



    var file_count = image.files.length;

    for (var x = 0; x < file_count; x++) {
        form.append("image" + x, image.files[x]);
    }

    var request = XMLHttpRequest();

    request.onreadystatechange = function () {

        if (r.readyState == 4) {
            var t = request.responseText;
            alert(t);

        }

    }

    request.open("POST", "updateProductProcess.php", true);
    request.send(form);



}