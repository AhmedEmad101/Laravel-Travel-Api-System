var login_form = document.getElementById("login_form");
var regester_form = document.getElementById("regester_form");
var button_toggle = document.getElementById("btn");

var fname = document.getElementById("fname");
var lname = document.getElementById("lname");
var fullname = document.getElementById("fullname");
var email = document.getElementById("email");
var pass = document.getElementById("pass");
// var code = document.getElementById("code");
var phone = document.getElementById("phone");
var pattrn = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;




// putton toggle function
function regester() {
    login_form.style.left = "-360px";
    regester_form.style.left = "5px";
    button_toggle.style.left = "110px";
}
function login() {
    login_form.style.left = "5px";
    regester_form.style.left = "400px";
    button_toggle.style.left = "0px";
}


// email validation
function validate() {
    if (email.value.match(pattrn)) {
        email.style.border = '2px solid #00ff00';
        x = true;
    }
    else {
        email.style.border = '2px solid #ff002bc4';
        x = false;
    }
}

// pass word validation

pass.addEventListener('keyup', function () {
    let massege = [];
    if (pass.value.length === 0 || pass.value.length < 10 || pass.value == ' ') {
        pass.style.border = '4px solid red';
    }
    else if (pass.value.length > 20) {
        pass.style.border = '4px solid red';
    }
    else {
        pass.style.border = '4px solid green';
    }
});


// first name validation
fname.addEventListener('keyup', function () {
    if (fname.value.length == 0 || fname.value.length < 3 || fname.value == ' ' || fname.value.length > 11 || !isNaN(fname.value)) {
        fname.style.border = '4px solid red';
    }
    else {
        fname.style.border = '4px solid green';
    }
});


// last name validation
lname.addEventListener('keyup', function () {
    if (lname.value.length == 0 || lname.value.length < 3 || lname.value == ' ' || lname.value.length > 11 || !isNaN(lname.value)) {
        lname.style.border = '4px solid red';
    }
    else {
        lname.style.border = '4px solid green';
    }
});

// full name connecting validation

fname.addEventListener('input', function () {
    fullname.value = fname.value + " " + lname.value;
});

lname.addEventListener('input', function () {
    fullname.value = fname.value + " " + lname.value;
});


//phone validation
phone.addEventListener('keyup', function () {
    if (phone.value.length === 0 || phone.value.length < 7 || phone.value.length !== 8 || isNaN(phone.value)) {
        phone.style.border = '4px solid red';
        return false;
    }
    else {
        phone.style.border = '4px solid green';
    }
});


// deleting space character functions
fname.addEventListener('keypress', function (event) {
    var key = event.keyCode;
    if (key === 32) {
        event.preventDefault();
    }
});
lname.addEventListener('keypress', function (event) {
    var key = event.keyCode;
    if (key === 32) {
        event.preventDefault();
    }
});
pass.addEventListener('keypress', function (event) {
    var key = event.keyCode;
    if (key === 32) {
        event.preventDefault();
    }
});
email.addEventListener('keypress', function (event) {
    var key = event.keyCode;
    if (key === 32) {
        event.preventDefault();
    }
});
phone.addEventListener('keypress', function (event) {
    var key = event.keyCode;
    if (key === 32) {
        event.preventDefault();
    }
});




// prevent the supmition
regester_form.addEventListener('submit', (r) => {
    if (fname.value.length == 0 || fname.value.length < 3 || fname.value == ' ' || fname.value.length > 11 || !isNaN(fname.value)) { regester_form.preventDefault(); }
    else if (lname.value.length == 0 || lname.value.length < 3 || lname.value == ' ' || lname.value.length > 11 || !isNaN(lname.value)) { r.preventDefault(); }
    else if (pass.value.length === 0 || pass.value.length < 10 || pass.value == ' ' || pass.value > 20) { r.preventDefault(); }
    else if (phone.value.length === 0 || phone.value.length < 7 || phone.value.length !== 8 || isNaN(phone.value)) { r.preventDefault(); }
    else if (!x) { r.preventDefault(); }
    // else {
    //     alert("your first name is: " + fullname.value + "\nyour last name is: " + lname.value +
    //         "\nyour Email is: " + email.value + "\nyour password is: " + pass.value + "\nyour phone numper is: " + code.value + phone.value);
    // }

})

login_form.addEventListener('submit', (r) => {
    if (pass.value.length === 0 || pass.value.length < 10 || pass.value == ' ' || pass.value > 20) { r.preventDefault(); }
    else if (!x) { r.preventDefault(); }
    // else {
    //     alert("your first name is: " + fullname.value + "\nyour last name is: " + lname.value +
    //         "\nyour Email is: " + email.value + "\nyour password is: " + pass.value + "\nyour phone numper is: " + code.value + phone.value);
    // }

}) 