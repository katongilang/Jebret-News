/*------------- Validasi Register---------------*/

window.onload = function() {
    var submitButton = document.getElementById('submit');
    submitButton.onclick = checkPassword;
}

function checkPassword() {
    var txtPw1 = document.getElementById('pw1');
    var txtPw2 = document.getElementById('pw2');
    if (txtPw1.value != txtPw2.value) {
        alert("Maaf, Password tidak sama!");
        return false;
    }
}

/*------------- Validasi Register---------------*/