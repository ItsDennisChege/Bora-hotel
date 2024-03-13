<?php
session_start();
// Establish a connection to the database
$con = mysqli_connect("localhost", "root", "", "hotel bora");

// Check if the connection was successful
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input from the form
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $confirmPassword = mysqli_real_escape_string($con, $_POST['confirm_password']);

    // Validate passwords match
    if ($password != $confirmPassword) {
        echo '<script type="text/javascript">';
        echo 'alert("Passwords do not match!");';
        echo 'window.location.href = "Sign_up.html";';
        echo '</script>';
        exit();
    }

    // Check if the username already exists in the database using prepared statements
    $query = "SELECT * FROM sign_up WHERE username=?";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    if (mysqli_stmt_num_rows($stmt) > 0) {
        echo '<script type="text/javascript">';
        echo 'alert("Username already exists!");';
        echo 'window.location.href = "Sign_up.html";';
        echo '</script>';
        exit();
    }

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert the user into the database using prepared statements
    $insertQuery = "INSERT INTO sign_up (username, email, password) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($con, $insertQuery);
    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPassword);
    mysqli_stmt_execute($stmt);

    if (mysqli_stmt_affected_rows($stmt) > 0) {
        $_SESSION['username'] = $username;
        echo '<script type="text/javascript">';
        echo 'alert("You have successfully signed up!");';
        echo 'window.location.href = "reservation.html";';
        echo '</script>';
        exit();
    } else {
        echo "Error: Failed to insert user.";
    }

    // Close the database connection
    mysqli_stmt_close($stmt);
    mysqli_close($con);
}
?>