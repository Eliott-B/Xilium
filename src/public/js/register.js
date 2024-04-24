window.onload = init

let psw;
let psw_rep;
let captcha;
let register;
let res;
let msg;

function init() {
    psw = document.getElementById("psw");
    psw_rep = document.getElementById("psw-repeat");
    captcha = document.getElementById("captcha");
    register = document.getElementById("register");
    res = document.getElementById("cap-res");
    msg = document.getElementById("message");

    register.disabled = true;
}

function maj() {
    msg.innerHTML = "";
    if (psw.value === psw_rep.value) {
        if (captcha.value === res.value) {
            register.disabled = false;
        }
        else {
            register.disabled = true;
            msg.innerHTML = "Captcha invalide";
        }
    }
    else {
        register.disabled = true;
        msg.innerHTML = "Mots de passe non identique"
    }
}