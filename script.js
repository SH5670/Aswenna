function changeView() {
    var signUpBox = document.getElementById("signUpBox");
    var signInBox = document.getElementById("signInBox");

    signUpBox.classList.toggle("d-none");
    signInBox.classList.toggle("d-none");
}

function signUp() {
    var f = document.getElementById("f");
    var l = document.getElementById("l");
    var e = document.getElementById("e");
    var p = document.getElementById("p");
    var cp = document.getElementById("cp");
    var m = document.getElementById("m");
    var v = document.getElementById("g");


    var form = new FormData;
    form.append("f", f.value);
    form.append("l", l.value);
    form.append("e", e.value);
    form.append("p", p.value);
    form.append("cp", cp.value);
    form.append("m", m.value);
    form.append("g", g.value);

    var request = new XMLHttpRequest();

    request.onreadystatechange = function() {
        if (request.readyState == 4) {
            var text = request.responseText;
            if (text == "success") {
                document.getElementById("msg2").innerHTML = text;
                document.getElementById("msg2").className = "text-success";

            } else {
                document.getElementById("msg2").innerHTML = text;
            }

        }
    }

    request.open("POST", "signUpProcess.php", true);
    request.send(form);


}

function signIn() {
    var email = document.getElementById("email2");
    var password = document.getElementById("password2");
    var rememberme = document.getElementById("rememberme");

    var f = new FormData();

    f.append("e", email.value);
    f.append("p", password.value);
    f.append("r", rememberme.checked);


    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "success") {
                window.location = "index.php";
            } else {
                document.getElementById("msg1").innerHTML = t;
            }

        }
    };

    r.open("POST", "signInProcess.php", true);
    r.send(f);

}

// function load_subcategory() {
//     var category = document.getElementById("category1").value;
//     var r = new XMLHttpRequest();

//     r.onreadystatechange = function() {
//         if (r.readyState == 4) {
//             var t = r.responseText;
//             document.getElementById("model").innerHTML = t;
//         }
//     }

//     r.open("GET", "load_subcategory.php?c=" + category, true);
//     r.send();
// }

function load_brand() {
    var category2 = document.getElementById("category2").value;
    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            document.getElementById("brand").innerHTML = t;
        }
    }

    r.open("GET", "load_brand.php?c=" + category2, true);
    r.send();
}



function addProduct() {

    var category2 = document.getElementById("category2");
    var brand = document.getElementById("brand");
    var title = document.getElementById("title");
    var qty = document.getElementById("qty");
    var cost = document.getElementById("cost");
    var desc = document.getElementById("desc");
    var image = document.getElementById("imageuploader");

    var f = new FormData();
    f.append("ca2", category2.value);
    f.append("b", brand.value);
    f.append("t", title.value);
    f.append("qty", qty.value);
    f.append("cost", cost.value);
    f.append("desc", desc.value);

    var file_count = image.files.length;

    for (var x = 0; x < file_count; x++) {
        f.append("image" + x, image.files[x]);
    }

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;

            if (t == "Product image saved successfully") {
                window.location.reload();

            } else {
                alert(t);
            }
        }
    }
    r.open("POST", "addProductProcess.php", true);
    r.send(f);
}


function changeProductImage() {

    var image = document.getElementById("imageuploader");

    image.onchange = function() {

        var file_count = image.files.length;

        if (file_count <= 3) {

            for (var x = 0; x < file_count; x++) {

                var file = this.files[x];
                var url = window.URL.createObjectURL(file);

                document.getElementById("i" + x).src = url;

            }

        } else {
            alert(file_count + " files. You are proceed to upload only 3 or less than 3 files.");
        }

    }

}

function adminVerification() {
    var email = document.getElementById("e");
    document.getElementById("loading").classList = "col-12 text-center text-primary mt-2 d-block";
    var f = new FormData();
    f.append("e", email.value);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "Success") {

                alert(t);
                document.getElementById("in").classList = "col-11 d-block";
                document.getElementById("in2").classList = "d-none";
                document.getElementById("b1").classList = "col-12 d-grid d-block";
                document.getElementById("b2").classList = "d-none";
                document.getElementById("loading").classList = "d-none";
            } else {
                alert(t);
            }
        }
    }

    r.open("POST", "adminVerificationProcess.php", true);
    r.send(f);
}

function verify() {
    var verification = document.getElementById("vcode");

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "success") {
                alert(t);
                window.location = "adminPanel.php";
            } else {
                alert(t);
            }

        }
    }

    r.open("GET", "verificationProcess.php?v=" + verification.value, true);
    r.send();
}


function signOut() {

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "1") {
                window.location = "adminLogin.php";
            } else if (t == "2") {
                window.location = "login.php";
            }
        }
    };

    r.open("GET", "signoutProcess.php", true);
    r.send();

}

function sendId(id) {
    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "success") {
                window.location = "updateProduct.php";
            } else {
                alert(t);
            }
        }
    }

    r.open("GET", "sendProductidProcess.php?id=" + id, true);
    r.send();



}

function updateProduct() {
    var title = document.getElementById("t");
    var qty = document.getElementById("q");
    var description = document.getElementById("desc");
    var images = document.getElementById("imageuploader");

    var f = new FormData();
    f.append("t", title.value);
    f.append("q", qty.value);
    f.append("d", description.value);

    var img_count = images.files.length;

    for (var x = 0; x < img_count; x++) {
        f.append("i" + x, images.files[x]);
    }

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            alert(t);
        }
    }

    r.open("POST", "updateProcess.php", true);
    r.send(f);

}


function sort1(x) {
    var time = "0";
    var qty = "0";

    var search = document.getElementById("s");
    var at = document.getElementById("at");
    var sq = document.getElementById("sq");


    if (at.selectedIndex == 1) {
        time = "1";
    } else if (at.selectedIndex == 2) {
        time = "2";
    }

    if (sq.selectedIndex == 1) {
        qty = "1";
    } else if (sq.selectedIndex == 2) {
        qty = "2";
    }



    var f = new FormData();

    f.append("s", search.value);
    f.append("t", time);
    f.append("q", qty);
    f.append("page", x);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4 && r.status == 200) {
            var t = r.responseText;
            document.getElementById("sort").innerHTML = t;
        }
    }

    r.open("POST", "sortProcess.php", true);
    r.send(f);

}

function clearSort() {
    window.location.reload();
}

function changeStatus(id) {

    var product_id = id;

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;

            if (t == "deactivated") {

                alert("Product Deactivated");
                window.location.reload();


            } else if (t == "activated") {

                alert("Product Activated");
                window.location.reload();


            } else {
                alert(t);
            }

        }
    }

    r.open("GET", "changeStatusProcess.php?p=" + product_id, true);
    r.send();
}

function findSellings() {


    var from = document.getElementById("from").value;
    var to = document.getElementById("to").value;

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            document.getElementById("viewArea").innerHTML = t;
        }
    }

    r.open("GET", "findSellingsProcess.php?f=" + from + "&t=" + to, true);
    r.send();

}

function changeImage() {
    var view = document.getElementById("viewImg");
    var file = document.getElementById("profileimg");

    file.onchange = function() {
        var file1 = this.files[0];
        var url = window.URL.createObjectURL(file1);
        view.src = url;

    }
}

// function updateProfile() {
//     var fname = document.getElementById("fname");
//     var lname = document.getElementById("lname");
//     var mobile = document.getElementById("mobile");
//     var line1 = document.getElementById("line1");
//     var line2 = document.getElementById("line2");
//     var province = document.getElementById("province");
//     var district = document.getElementById("district");
//     var city = document.getElementById("city");
//     var pcode = document.getElementById("pcode");
//     var image = document.getElementById("profileimg");

//     var f = new FormData();
//     f.append("fn", fname.value);
//     f.append("ln", lname.value);
//     f.append("m", mobile.value);
//     f.append("l1", line1.value);
//     f.append("l2", line2.value);
//     f.append("p", province.value);
//     f.append("d", district.value);
//     f.append("c", city.value);
//     f.append("pc", pcode.value);

//     if (image.files.length == 0) {

//         var confirmation = confirm("Are ypu don't want to update Profile Image");

//         if (confirmation) {
//             alert("you have not selected any image");
//         }


//     } else {
//         f.append("image", image.files[0]);
//     }

//     var r = new XMLHttpRequest();
//     r.onreadystatechange = function() {
//         if (r.readyState == 4) {
//             var t = r.responseText;
//             alert(t);
//         }
//     }

//     r.open("POST", "updateProfileProcess.php", true);
//     r.send(f);

// }

function displayProductList() {
    var id = document.getElementById("loadProductList").value;
    window.location = "productlist.php?cid=" + id;
}

function displayProductList2() {
    var id = document.getElementById("loadProductList2").value;
    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4 & r.status == 200) {
            var t = r.responseText;
            if (t == "no") {

            } else {
                document.getElementById("dropProduct2").innerHTML = t;
            }

        }
    }

    r.open("GET", "seeProductlist.php?id=" + id, true);
    r.send();

}

function displayProductList3() {
    var id = document.getElementById("loadProductList3").value;
    window.location = "productlist.php?cid=" + id;
}


function checkProductQty(pqty) {
    var input = document.getElementById("product_qty_input");

    if (input.value <= 0) {
        alert("Quantity must be 1 or more");
        input.value = 1;
    } else if (input.value > pqty) {
        alert(" Insufficient Quantity");
        input.value = pqty;
    }

}

function checkCartQuantity(id) {

    var input = document.getElementById("cartInput" + id);
    // alert(input.value);

    if (input.value <= 0) {
        alert("Quantity must be 1 or More");
        input.value = 1;
    }

    var f = new FormData();
    f.append("qty", input.value);
    f.append("pid", id);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4 && r.status == 200) {
            var t = r.responseText;

            if (t == input.value) {
                input.value = t;
                window.location.reload();
            } else if (input.value >= t) {
                alert("Maximun amount Reached");
                input.value = t;
            } else {
                alert(t);
            }
        }
    }

    r.open("POST", "checkCartQtyProcess.php", true);
    r.send(f);

}


function removeFromWishlist(id) {
    var f = new FormData();
    f.append("pid", id);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4 && r.status == 200) {
            var t = r.responseText;
            if (t == "deleted") {
                window.location.reload();
            } else {
                alert(t)
            }

        }
    }

    r.open("POST", "removeFromWishlistProcess.php", true);
    r.send(f);


}

function removeFromCart(id) {
    var f = new FormData();
    f.append("pid", id);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4 && r.status == 200) {
            var t = r.responseText;
            if (t == "deleted") {
                window.location.reload();
            } else {
                alert(t)
            }

        }
    }

    r.open("POST", "removeFromCartProcess.php", true);
    r.send(f);

}

function addToCart(pid) {
    // alert(pid);
    var qty = document.getElementById("product_qty_input").value;
    var form = new FormData();
    form.append("pid", pid);
    form.append("qty", qty);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4 && r.status == 200) {
            var t = r.responseText;
            alert(t);
        }
    }
    r.open("POST", "addToCartProcess.php", true);
    r.send(form);

}

function addToWishlist(pid) {

    var form = new FormData();
    form.append("pid", pid);
    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4 && r.status == 200) {
            var t = r.responseText;
            alert(t);
        }
    }
    r.open("POST", "addToWishlistProcess.php", true);
    r.send(form);


}


function loadDistrict() {

    var district = document.getElementById("district");
    var province = document.getElementById("province");

    if (province.value == 0) {
        alert("select Provice");
    } else {
        var r = new XMLHttpRequest();
        r.onreadystatechange = function() {
            if (r.readyState == 4 && r.status == 200) {
                var t = r.responseText;
                district.innerHTML = t;
            }
        }
        r.open("GET", "loadDistrictProcess.php?province=" + province.value, true);
        r.send();
    }
}

function loadCity() {
    var district = document.getElementById("district");
    var city = document.getElementById("city");

    if (district.value == 0) {
        alert("Select District");
    } else {
        var r = new XMLHttpRequest();
        r.onreadystatechange = function() {
            if (r.readyState == 4 && r.status == 200) {
                var t = r.responseText;
                city.innerHTML = t;
            }
        }
        r.open("GET", "loadCityProcess.php?district=" + district.value, true);
        r.send();
    }
}

function updateProfile() {
    var fname = document.getElementById("fname");
    var lname = document.getElementById("lname");
    var mobile = document.getElementById("mobile");
    var line1 = document.getElementById("line1");
    var line2 = document.getElementById("line2");
    var province = document.getElementById("province");
    var district = document.getElementById("district");
    var city = document.getElementById("city");
    var pcode = document.getElementById("pcode")


    var f = new FormData();
    f.append("f", fname.value);
    f.append("l", lname.value);
    f.append("m", mobile.value);
    f.append("line1", line1.value);
    f.append("line2", line2.value);
    f.append("p", province.value);
    f.append("d", district.value);
    f.append("c", city.value);
    f.append("pcode", pcode.value);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4 && r.status == 200) {
            var t = r.responseText;
            alert(t);
        }

    }

    r.open("POST", "updateProfileProcess.php", true);
    r.send(f);

}


function buyNow(id) {

    var qty = document.getElementById("product_qty_input").value;

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4 && r.status == 200) {
            var t = r.responseText;
            // alert(t);
            var obj = JSON.parse(t);

            var amount = obj.total;
            var mail = obj.email;

            if (t == 1) {
                alert("Please Login First");
            } else if (t == 2) {
                alert("Please update your Profile");

            } else {

                // Payment completed. It can be a successful failure.
                payhere.onCompleted = function onCompleted(orderId) {

                    console.log("Payment completed. OrderID:" + orderId);
                    saveInvoice(orderId, id, mail, amount, qty);
                    // Note: validate the payment and show success or failure page to the customer
                };

                // Payment window closed
                payhere.onDismissed = function onDismissed() {
                    // Note: Prompt user to pay again or show an error page
                    console.log("Payment dismissed");
                };

                // Error occurred
                payhere.onError = function onError(error) {
                    // Note: show an error page
                    console.log("Error:" + error);
                };

                // Put the payment variables here
                var payment = {
                    "sandbox": true,
                    "merchant_id": "1221271", // Replace your Merchant ID
                    "return_url": 'http://localhost/viva1/invoice.php', // Important
                    "cancel_url": 'http://localhost/viva1/invoice.php', // Important
                    "notify_url": "http://sample.com/notify",
                    "order_id": obj.order_id,
                    "items": obj.title,
                    "amount": amount,
                    "currency": "LKR",
                    "hash": obj.hash, // *Replace with generated hash retrieved from backend
                    "first_name": obj.fname,
                    "last_name": obj.lname,
                    "email": mail,
                    "phone": obj.mobile,
                    "address": obj.address,
                    "city": "Kalutara",
                    "country": "Sri Lanka",
                    "delivery_address": obj.address,
                    "delivery_city": "Kalutara",
                    "delivery_country": "Sri Lanka",
                    "custom_1": "",
                    "custom_2": ""
                };

                // Show the payhere.js popup, when "PayHere Pay" is clicked
                // document.getElementById('payhere-payment').onclick = function(e) {
                payhere.startPayment(payment);
                // };
            }
        }
    }
    r.open("GET", "buyNowProcess.php?id=" + id + "&qty=" + qty, true);
    r.send();
}


function saveInvoice(orderId, id, mail, amount, qty) {

    var f = new FormData();
    f.append("o", orderId);
    f.append("i", id);
    f.append("m", mail);
    f.append("a", amount);
    f.append("q", qty);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "1") {

                window.location = "invoice.php?id=" + orderId + "&pid=" + id + "&qty=" + qty;

            } else {
                alert(t);
            }
        }
    }

    r.open("POST", "saveInvoice.php", true);
    r.send(f);

}


function printInvoice() {
    var restorepage = document.body.innerHTML;
    var page = document.getElementById("page").innerHTML;
    document.body.innerHTML = page;
    window.print();
    document.body.innerHTML = restorepage;
}

function saveAsPdf() {
    alert("kk");
}

function searchFromShop() {
    var text = document.getElementById("shopInput").value;
    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4 && r.status == 200) {
            var t = r.responseText;
            // alert(t);
            document.getElementById("content").innerHTML = t;
        }
    }

    r.open("GET", "searchFromShopProcess.php?text=" + text, true);
    r.send();

}


function searchInvoiceId() {
    var txt = document.getElementById("searchtxt").value;

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4 && r.status == 200) {
            var t = r.responseText;
            if (t == 1) {

                alert("please Login First")

            } else {
                document.getElementById("viewArea").innerHTML = t;

            }

        }
    }

    r.open("GET", "searchInvoiceIdProcess.php?text=" + txt, true);
    r.send();
}

function findInvoice() {
    // alert("kkk");
    var from = document.getElementById("from").value;
    var to = document.getElementById("to").value;

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            // alert(t);
            document.getElementById("viewArea").innerHTML = t;
        }
    }

    r.open("GET", "findInvoiceProcess.php?f=" + from + "&t=" + to, true);
    r.send();
}

function deleteInvoice(id) {
    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            alert(t);
            window.location.reload();
            // document.getElementById("viewArea").innerHTML = t;
        }
    }

    r.open("GET", "deleteInvoiceProcess.php?id=" + id, true);
    r.send();

}


function forgotPassword() {
    // alert("lll");
    var mail = document.getElementById("email2").value;

    var f = new FormData();
    f.append("mail", mail);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "Success") {
                alert(t);
                document.getElementById("vcode").classList = "input d-block";
                document.getElementById("email2").disabled = true;
                document.getElementById("password2").classList = " d-none";
                document.getElementById("fp").classList = " d-none";
                document.getElementById("rm").classList = " d-none";
                document.getElementById("signinbtn").classList = "d-none";
                document.getElementById("verifybtn").classList = "btn btn-success text-white fw-bold br d-block";

            } else {
                alert(t);
            }


        }
    }

    r.open("POST", "forgotPasswordProcess.php", true);
    r.send(f);

}




function verifyPw() {
    var vcode = document.getElementById("vcode").value;
    var f = new FormData();

    f.append("vcode", vcode);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "success") {
                document.getElementById("password2").classList = "input d-block";
                document.getElementById("pw1").classList = "input d-block";
                document.getElementById("signinbtn").classList = "btn btn-primary text-white fw-bold br d-block";
                document.getElementById("verifybtn").classList = "d-none";
                document.getElementById("signinbtn").classList = "d-none";
                document.getElementById("resetPw").classList = "btn btn-info text-white fw-bold br d-block";
                document.getElementById("vcode").disabled = true;
                document.getElementById("email2").disabled = true;

                // document.getElementById("fp").classList = " d-b";
                // document.getElementById("rm").classList = " d-none";
                alert(t);

            } else {
                alert(t);
            }

        }
    }

    r.open("POST", "verifyVcodeProcess.php", true);
    r.send(f);

}


function resetPassword() {

    var pw = document.getElementById("password2").value;
    var c_pw = document.getElementById("pw1").value;
    var mail = document.getElementById("email2").value;
    var vcode = document.getElementById("vcode").value;


    var f = new FormData();
    f.append("n", pw);
    f.append("r", c_pw);
    f.append("e", mail);
    f.append("v", vcode);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "success") {

                alert(t);
                window.location.reload();

            } else {
                alert(t);

            }


        }
    }

    r.open("POST", "resetPwProcess.php", true);
    r.send(f);


}


function checkOut(total) {
    alert("lll");
    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4 && r.status == 200) {
            var t = r.responseText;
            // alert(t);

            var obj = JSON.parse(t);

            var amount = obj.total;
            var mail = obj.email;

            if (t == 1) {
                alert("Please Login First");
            } else if (t == 2) {
                alert("Please update your Profile");

            } else {

                // Payment completed. It can be a successful failure.
                payhere.onCompleted = function onCompleted(orderId) {

                    console.log("Payment completed. OrderID:" + orderId);
                    saveCartInvoice(orderId, mail, amount);
                    // Note: validate the payment and show success or failure page to the customer
                };

                // Payment window closed
                payhere.onDismissed = function onDismissed() {
                    // Note: Prompt user to pay again or show an error page
                    console.log("Payment dismissed");
                };

                // Error occurred
                payhere.onError = function onError(error) {
                    // Note: show an error page
                    console.log("Error:" + error);
                };

                // Put the payment variables here
                var payment = {
                    "sandbox": true,
                    "merchant_id": "1221271", // Replace your Merchant ID
                    "return_url": 'http://localhost/viva1/invoice.php', // Important
                    "cancel_url": 'http://localhost/viva1/invoice.php', // Important
                    "notify_url": "http://sample.com/notify",
                    "order_id": obj.order_id,
                    "items": obj.title,
                    "amount": total,
                    "currency": "LKR",
                    "hash": obj.hash, // *Replace with generated hash retrieved from backend
                    "first_name": obj.fname,
                    "last_name": obj.lname,
                    "email": mail,
                    "phone": obj.mobile,
                    "address": obj.address,
                    "city": "Kalutara",
                    "country": "Sri Lanka",
                    "delivery_address": obj.address,
                    "delivery_city": "Kalutara",
                    "delivery_country": "Sri Lanka",
                    "custom_1": "",
                    "custom_2": ""
                };

                // Show the payhere.js popup, when "PayHere Pay" is clicked
                // document.getElementById('payhere-payment').onclick = function(e) {
                payhere.startPayment(payment);
                // };


            }
        }
    }
    r.open("GET", "checkOutProcess.php?total=" + total, true);
    r.send();



}

function saveCartInvoice(orderId, mail, amount) {
    var f = new FormData();
    f.append("o", orderId);
    f.append("m", mail);
    f.append("a", amount);

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "1") {
                alert(t);



            } else if (t == "2") {

                window.location = "cartInvoice.php?id=" + orderId + "&pid=";
            } else {
                alert("Something wenr wrong");
            }
        }
    }

    r.open("POST", "saveCartInvoice.php", true);
    r.send(f);

}

function changeUserStatus(mail) {

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;

            if (t == "Success") {
                window.location.reload();
            } else {
                alert(t);
            }

            // document.getElementById("viewArea").innerHTML = t;
        }
    }

    r.open("GET", "changeUserStatusProcess.php?mail=" + mail, true);
    r.send();
}

function changeInvoiceStatus(id) {
    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;

            window.location.reload();

        }
    }

    r.open("GET", "changeInvoiceStatusProcess.php?id=" + id, true);
    r.send();

}

function viewMessages(email) {
    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            document.getElementById("chat_box").innerHTML = t;
        }
    }

    r.open("GET", "viewMsgProcess.php?e=" + email, true);
    r.send();
}

var cam;

function contactAdmin(email) {
    var m = document.getElementById("contactAdmin");
    cam = new bootstrap.Modal(m);
    cam.show();
}


function sendtoAdminMsg(email) {

    var txt = document.getElementById("msgtxt").value;
    var f = new FormData();

    f.append("t", txt);
    f.append("umail", email);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;

        }
    }
    r.open("POST", "sendAdminMessageProcess.php", true);
    r.send(f);
}


function msgbox(email) {

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            document.getElementById("mbox").innerHTML = t;


        }
    }

    r.open("GET", "viewMsg2Process.php?e=" + email, true);
    r.send();

}

function msgloading() {
    setInterval(msgbox, 1000);
}

var mm;

function viewMsgModal(email) {
    var m = document.getElementById("userMsgModal" + email);
    mm = new bootstrap.Modal(m);
    mm.show();

}

function msgbox2(email) {

    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            document.getElementById("mbox2" + email).innerHTML = t;


        }
    }

    r.open("GET", "viewMsg3Process.php?e=" + email, true);
    r.send();

}

function sendtoUserMsg(email) {

    var txt = document.getElementById("msgtxt" + email).value;
    var f = new FormData();

    f.append("t", txt);
    f.append("umail", email);

    var r = new XMLHttpRequest();
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;

        }
    }
    r.open("POST", "sendUserMessageProcess.php", true);
    r.send(f);
}

function msgbox2loading(email) {
    setInterval(function() { msgbox2(email); }, 1000);
}

function advancedSearch() {

    var category = document.getElementById("c");
    var brand = document.getElementById("b");
    var priceFrom = document.getElementById("pf");
    var priceTo = document.getElementById("pt");
    var sort = document.getElementById("sort");

    var f = new FormData();


    f.append("c", category.value);
    f.append("b", brand.value);
    f.append("pf", priceFrom.value);
    f.append("pt", priceTo.value);
    f.append("sort", sort.value);


    var r = new XMLHttpRequest();

    r.onreadystatechange = function() {

        if (r.readyState == 4) {
            var t = r.responseText;
            document.getElementById("searchBody").innerHTML = t;
        }

    }

    r.open("POST", "advancedSearchProcess.php", true);
    r.send(f);

}