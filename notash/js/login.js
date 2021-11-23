function login() {
    const username = document.getElementById('user').value;
    const password = document.getElementById('pass').value;

    if (username === null || username === "") {
        document.getElementById('span0').innerHTML = "نام کاربری را وارد کنید *";
        document.getElementById('span1').innerHTML = "";
        return false;
    }
    else if (password === null || password === "") {
        document.getElementById('span0').innerHTML = "";
        document.getElementById('span1').innerHTML = "رمز ورود را وارد کنید *";
        return false;
    }
    else if (password.length < 8) {
        document.getElementById('span0').innerHTML = "";
        document.getElementById('span1').innerHTML = "رمز ورود باید حداقل 8 کاراکتر باشد *";
        return false;
    }
}

let x = 0;

function show_pass() {
    if (x === 0) {
        document.getElementById("pass").type = "text";
        x = 1;
    }
    else if (x === 1) {
        document.getElementById("pass").type = "password";
        x = 0;
    }
}