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

        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "Success") {

                alert("Verification Code has sent to your email. Please check your inbox");
                email.disabled = true;

                var newPassword = document.getElementById("newPassword");
                var resetPasswordBtn = document.getElementById("resetPassword");
                var passwordField =document.getElementById("p");
                var vcode = document.getElementById("vCode");
                var signInBtn = document.getElementById("signInBtn");

                passwordField.classList="d-none";
                signInBtn.classList="d-none";

                newPassword.classList="d-block";
                vcode.classList="d-block";
                resetPasswordBtn.classList="d-block";
               

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

    r.onreadystatechange = function() {

        if (r.readyState == 4) {

            var t = r.responseText;
            if (t == "success") {
                alert("Password Changed Successfully. Please login with your New Password.");
                window.location.reload();
            } else {
                alert(t);
            }

        }
    }

    r.open("POST", "resetPassword.php", true);
    r.send(f);

}
