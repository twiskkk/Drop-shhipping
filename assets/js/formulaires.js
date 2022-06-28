const input_pass = document.getElementById('pass');
const input_pass_2 = document.getElementById('pass_2');
const error_pass = document.getElementById('error_pass');
console.log(pass);




input_pass.addEventListener("input", function() {
    mdp_valide(this);
})
input_pass_2.addEventListener("input", function() {
    mdp_valide(this);
})

function mdp_valide(input_pass) {
    const pass = input_pass.value;
    var res = false;
    error_pass.classList.add('error_form');
    if (/[a-z]{1}/.test(pass) != 1) {
        error_pass.innerHTML = 'Le mot de passe doit contenir 1 minuscule';
        error_pass.classList.remove('valide_form');
        error_pass.classList.add('error_form');
    } else {
        if (/[A-Z]{1}/.test(pass) != 1) {
            error_pass.innerHTML = 'Le mot de passe doit contenir 1 majuscule';
            error_pass.classList.remove('valide_form');
            error_pass.classList.add('error_form');
        } else {
            if (/[0-9]{1}/.test(pass) != 1) {
                error_pass.innerHTML = 'Le mot de passe doit contenir 1 lettre au minimun';
                error_pass.classList.remove('valide_form');
                error_pass.classList.add('error_form');
            } else {
                if (pass.length < 8) {
                    error_pass.innerHTML = 'Le mot de passe doit avoir 8 caractères';
                    error_pass.classList.remove('valide_form');
                    error_pass.classList.add('error_form');
                } else {
                    if (/[-/+*!=%^#&<>_()}{}.]{1}/.test(pass) != 1) {
                        error_pass.innerHTML = 'Le mot de passe doit avoir 1 caractère spécial ';
                        error_pass.classList.remove('valide_form');
                        error_pass.classList.add('error_form');
                    } else {
                        error_pass.classList.remove('error_form');
                        error_pass.classList.add('valide_form');
                        error_pass.innerHTML = '';
                        res = true;

                    }
                }
            }
        }
    }
    return res;
}

function mdp_valide_form() {
    const pass = input_pass.value;
    var res = false;
    const reg = /^(?=.{8,}$)(?=.*\w)(?=.*[-?!%=.]).*$/;
    if (reg.test(pass)) {
        res = true;
    } else {
        res = false;
        var message = "Le mot de passe non conforme";
        error_pass.classList.remove('valid_form');
        error_pass.classList.add('error_form');
        error_pass.innerHTML = message;


    }
    return res;
}

function mdp__identique() {
    var res = false;
    const pass = input_pass.value;
    const pass_2 = input_pass_2.value;
    const reg = /^(?=.{8,}$)(?=.*\w)(?=.*[_@!#?!%=.]).*$/;

    if (reg.test(pass)) {
        if (pass == pass_2) {
            res = true;
        } else {
            var message = "Le mot de passe ne sont pas identique";
            error_pass.classList.remove('valid_form');
            error_pass.classList.add('error_form');
            error_pass.innerHTML = message;
        }
    } else {
        var message = "Le mot de passe non conforme";
        error_pass.classList.remove('valid_form');
        error_pass.classList.add('error_form');
        error_pass.innerHTML = message;


    }
    return res;
}