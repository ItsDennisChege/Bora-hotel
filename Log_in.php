<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input from the form
    $username = $_POST['Username'];
    $password = $_POST['Password'];

    // Establish a connection to the database
    $con = mysqli_connect("localhost", "root", "", "hotel_bora");

    // Check if the connection was successful
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Sanitize and validate user input
    $username = mysqli_real_escape_string($con, $username);

    // Check if the username exists in the database
    $query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        // Verify the password
        if ($password == $row['password']) {
            $_SESSION['username'] = $username;
            header("Location: reservation.php");
            exit();
        } else {
            echo '<script type="text/javascript">';
            echo 'alert("Invalid username or password!");';
            echo 'window.location.href = "Log_in.html";';
            echo '</script>';
            exit();
        }
    } else {
        echo '<script type="text/javascript">';
        echo 'alert("Invalid username or password!");';
        echo 'window.location.href = "Log_in.html";';
        echo '</script>';
        exit();
    }

    // Close the database connection
    mysqli_close($con);
}
?>