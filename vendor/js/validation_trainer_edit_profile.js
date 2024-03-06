function validateForm() {
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;
    let profile = document.getElementById("profile").value;

    document.getElementById("nameError").innerHTML = "";
    document.getElementById("emailError").innerHTML = "";
    document.getElementById("passwordError").innerHTML = "";
    document.getElementById("profileError").innerHTML = "";
    document.getElementById("name").classList.remove("error-border");
    document.getElementById("email").classList.remove("error-border");
    document.getElementById("password").classList.remove("error-border");
    document.getElementById("profile").classList.remove("error-border");

    if (name.trim() == "") {
        document.getElementById("nameError").innerHTML = "Please enter your new name";
        document.getElementById("name").classList.add("error-border");
        return false;
    }

    if (email.trim() == "") {
        document.getElementById("emailError").innerHTML = "Please enter your email";
        document.getElementById("email").classList.add("error-border");
        return false;
    }

    if (password.trim() == "") {
        document.getElementById("passwordError").innerHTML = "Please enter your password";
        document.getElementById("password").classList.add("error-border");
        return false;
    }

    if (profile.trim() == "") {
        document.getElementById("profileError").innerHTML = "Please select a profile picture";
        document.getElementById("profile").classList.add("error-border");
        return false;
    }

    return true;
}


function togglePasswordVisibility() {
    let passwordInput = document.getElementById("password");
    let toggleButton = document.getElementById("togglePassword");

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        toggleButton.innerHTML = '<i class="bi bi-eye-slash"></i>';
    } else {
        passwordInput.type = "password";
        toggleButton.innerHTML = '<i class="bi bi-eye"></i>';
    }
}