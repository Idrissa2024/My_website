function switchToLogin() {
    document.getElementById('register-form').style.display = 'none';
    document.getElementById('login-form').style.display = 'block';
}

function switchToRegister() {
    document.getElementById('login-form').style.display = 'none';
    document.getElementById('register-form').style.display = 'block';
}

function validateRegisterForm() {
    var username = document.getElementById('register-username').value;
    var password = document.getElementById('register-password').value;

    if (username == "" || password == "") {
        alert("All fields are required.");
        return false;
    }
    return true;
}

function validateLoginForm() {
    var username = document.getElementById('login-username').value;
    var password = document.getElementById('login-password').value;

    if (username == "" || password == "") {
        alert("All fields are required.");
        return false;
    }
    return true;
}
