function register() {
    const fn = document.getElementById("in1").value;
    const ln = document.getElementById("in2").value;
    const ph = document.getElementById("in3").value;
    const un = document.getElementById("in4").value;
    const ps = document.getElementById("in5").value;
    const em = document.getElementById("in6").value;

    if (fn === null || fn === "") {
        document.getElementById('span2').innerHTML = "نام را وارد کنید *";
        document.getElementById('span3').innerHTML = "";
        document.getElementById('span4').innerHTML = "";
        document.getElementById('span5').innerHTML = "";
        document.getElementById('span6').innerHTML = "";
        document.getElementById('span7').innerHTML = "";
        return false;
    }
    else if (ln === null || ln === "") {
        document.getElementById('span2').innerHTML = "";
        document.getElementById('span3').innerHTML = "نام خانوادگی را وارد کنید *";
        document.getElementById('span4').innerHTML = "";
        document.getElementById('span5').innerHTML = "";
        document.getElementById('span6').innerHTML = "";
        document.getElementById('span7').innerHTML = "";
        return false;
    }
    else if (ph === null || ph === "") {
        document.getElementById('span2').innerHTML = "";
        document.getElementById('span3').innerHTML = "";
        document.getElementById('span4').innerHTML = "شماره موبایل را وارد کنید *";
        document.getElementById('span5').innerHTML = "";
        document.getElementById('span6').innerHTML = "";
        document.getElementById('span7').innerHTML = "";
        return false;
    }
    else if (un === null || un === "") {
        document.getElementById('span2').innerHTML = "";
        document.getElementById('span3').innerHTML = "";
        document.getElementById('span4').innerHTML = "";
        document.getElementById('span5').innerHTML = "نام کاربری را وارد کنید *";
        document.getElementById('span6').innerHTML = "";
        document.getElementById('span7').innerHTML = "";
        return false;
    }
    else if (ps === null || ps === "") {
        document.getElementById('span2').innerHTML = "";
        document.getElementById('span3').innerHTML = "";
        document.getElementById('span4').innerHTML = "";
        document.getElementById('span5').innerHTML = "";
        document.getElementById('span6').innerHTML = "رمز ورود را وارد کنید *";
        document.getElementById('span7').innerHTML = "";
        return false;
    }
    else if (em === null || em === "") {
        document.getElementById('span2').innerHTML = "";
        document.getElementById('span3').innerHTML = "";
        document.getElementById('span4').innerHTML = "";
        document.getElementById('span5').innerHTML = "";
        document.getElementById('span6').innerHTML = "";
        document.getElementById('span7').innerHTML = "ایمیل را وارد کنید *";
        return false;
    }
    else if (isNaN(ph)) {
        document.getElementById('span2').innerHTML = "";
        document.getElementById('span3').innerHTML = "";
        document.getElementById('span4').innerHTML = "شماره موبایل نامعتبر است *";
        document.getElementById('span5').innerHTML = "";
        document.getElementById('span6').innerHTML = "";
        document.getElementById('span7').innerHTML = "";
        return false;
    }
    else if (ps.length < 8) {
        document.getElementById('span2').innerHTML = "";
        document.getElementById('span3').innerHTML = "";
        document.getElementById('span4').innerHTML = "";
        document.getElementById('span5').innerHTML = "";
        document.getElementById('span6').innerHTML = "رمز ورود باید حداقل 8 کاراکتر باشد *";
        document.getElementById('span7').innerHTML = "";
        return false;
    }
}

let x = 0;

function show_pass() {
    if (x === 0) {
        document.getElementById("in5").type = "text";
        x = 1;
    }
    else if (x === 1) {
        document.getElementById("in5").type = "password";
        x = 0;
    }
}