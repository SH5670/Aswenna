var bModel;

function showLoginModel() {
    var model = document.getElementById("loginModel");
    model = document.getElementById("loginModel");
    bModel = new bootstrap.Modal(model);
    bModel.show();
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
            if (t == "Success") { } else {
                alert(t);
            }

        }

    }



}