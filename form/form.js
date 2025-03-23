// Function to validate form inputs
function validateForm() {
    let isValid = true;

    // Get form field values
    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const password = document.getElementById("password").value.trim();
    const confirmPassword = document.getElementById("confirmPassword").value.trim();
    const phone = document.getElementById("phone").value.trim();

    // Clear previous error messages
    clearErrors();

    // Name validation (only alphabets)
    if (name === "") {
        showError("nameError", "Name is required.");
        isValid = false;
    } else if (!isValidName(name)) {
        showError("nameError", "Name should contain only alphabets.");
        isValid = false;
    }

    // Email validation
    if (email === "") {
        showError("emailError", "Email is required.");
        isValid = false;
    } else if (!email.includes("@")) {
        showError("emailError", "Email must contain '@' symbol.");
        isValid = false;
    } else if (!isValidEmail(email)) {
        showError("emailError", "Invalid email format.");
        isValid = false;
    }

    // Password validation
    if (password === "") {
        showError("passwordError", "Password is required.");
        isValid = false;
    } else if (password.length < 6) {
        showError("passwordError", "Password must be at least 6 characters.");
        isValid = false;
    }

    // Confirm password validation
    if (confirmPassword === "") {
        showError("confirmPasswordError", "Please confirm your password.");
        isValid = false;
    } else if (confirmPassword !== password) {
        showError("confirmPasswordError", "Passwords do not match.");
        isValid = false;
    }

    // Phone number validation (only 10 digits allowed)
    if (phone === "") {
        showError("phoneError", "Phone number is required.");
        isValid = false;
    } else if (!isValidPhone(phone)) {
        showError("phoneError", "Phone number should be exactly 10 digits.");
        isValid = false;
    }

    // Return true if all validations pass
    return isValid;
}

// Function to display error messages
function showError(id, message) {
    document.getElementById(id).innerText = message;
}

// Function to clear error messages
function clearErrors() {
    const errors = document.querySelectorAll(".error");
    errors.forEach((error) => (error.innerText = ""));
}

// Function to validate name (only alphabets allowed)
function isValidName(name) {
    const namePattern = /^[A-Za-z\s]+$/;
    return namePattern.test(name);
}

// Function to validate email format
function isValidEmail(email) {
    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    return emailPattern.test(email);
}

// Function to validate phone number (10 digits only)
function isValidPhone(phone) {
    const phonePattern = /^[0-9]{10}$/;
    return phonePattern.test(phone);
}
