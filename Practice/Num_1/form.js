function checkFname() {
    let fname = document.getElementById('fname').value.trim();
    let fnameError = document.getElementById('fnameError');

    if (fname === "") {
        fnameError.innerHTML = "Please enter your first name.";
        fnameError.style.color = 'red';
        return false;
    } else if (fname.length < 2) {
        fnameError.innerHTML = "First name must be at least 2 characters.";
        fnameError.style.color = 'red';
        return false;
    } else {
        fnameError.innerHTML = "";
        return true;
    }
}

function checkLname() {
    let lname = document.getElementById('lname').value.trim();
    let lnameError = document.getElementById('lnameError');

    if (lname === "") {
        lnameError.innerHTML = "Please enter your last name.";
        lnameError.style.color = 'red';
        return false;
    } else if (lname.length < 2) {
        lnameError.innerHTML = "Last name must be at least 2 characters.";
        lnameError.style.color = 'red';
        return false;
    } else {
        lnameError.innerHTML = "";
        return true;
    }
}

function validateForm() {
    let isValid = checkFname() && checkLname();
    let successMsg = document.getElementById('success');

    if (isValid) {
        successMsg.innerHTML = "Form submitted successfully!";
        successMsg.style.color = "green";
        return true;
    } else {
        successMsg.innerHTML = "";
        return false;
    }
}
