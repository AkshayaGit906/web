<?php
// Define variables and set to empty values
$name = $email = $password = $confirm_password = "";
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Name validation (only alphabets and optional spaces)
    if (empty($_POST["name"])) {
        $errors['name'] = "Name is required.";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $_POST["name"])) {
        $errors['name'] = "Only letters and spaces allowed.";
    } else {
        $name = htmlspecialchars(trim($_POST["name"]));
    }

    // Email validation
    if (empty($_POST["email"])) {
        $errors['email'] = "Email is required.";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Invalid email format.";
    } else {
        $email = htmlspecialchars(trim($_POST["email"]));
    }

    // Password validation
    if (empty($_POST["password"])) {
        $errors['password'] = "Password is required.";
    } elseif (strlen($_POST["password"]) < 6) {
        $errors['password'] = "Password must be at least 6 characters.";
    } else {
        $password = $_POST["password"];
    }

    // Confirm password validation
    if (empty($_POST["confirm_password"])) {
        $errors['confirm_password'] = "Please confirm your password.";
    } elseif ($_POST["confirm_password"] !== $_POST["password"]) {
        $errors['confirm_password'] = "Passwords do not match.";
    } else {
        $confirm_password = $_POST["confirm_password"];
    }

    // If no errors, process registration
    if (empty($errors)) {
        echo "<p style='color: green;'>Registration successful!</p>";
        // Example: password_hash($password, PASSWORD_DEFAULT);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <style>
        form {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .error {
            color: red;
            font-size: 0.9em;
            margin-top: 5px;
            display: block;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .toggle-password {
            font-size: 0.9em;
        }
    </style>
</head>
<body>

<h2 style="text-align: center;">Register</h2>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

    <div class="form-group">
        <label>Name:</label>
        <input type="text" name="name" value="<?php echo $name; ?>">
        <span class="error"><?php echo $errors['name'] ?? ''; ?></span>
    </div>

    <div class="form-group">
        <label>Email:</label>
        <input type="email" name="email" value="<?php echo $email; ?>">
        <span class="error"><?php echo $errors['email'] ?? ''; ?></span>
    </div>

    <div class="form-group">
        <label>Password:</label>
        <input type="password" id="password" name="password">
        <span class="error"><?php echo $errors['password'] ?? ''; ?></span>
    </div>

    <div class="form-group">
        <label>Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password">
        <span class="error"><?php echo $errors['confirm_password'] ?? ''; ?></span>
    </div>

    <div class="form-group">
        <label class="toggle-password">
            <input type="checkbox" onclick="togglePassword()"> Show Password
        </label>
    </div>

    <input type="submit" value="Register">
</form>

<script>
function togglePassword() {
    var passwordField = document.getElementById("password");
    var confirmField = document.getElementById("confirm_password");
    var type = passwordField.type === "password" ? "text" : "password";
    passwordField.type = type;
    confirmField.type = type;
}
</script>

</body>
</html>