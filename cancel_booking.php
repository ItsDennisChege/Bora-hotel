<?php
// cancel_booking.php

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["reservationId"])) {
    $reservationId = $_GET["reservationId"];

    // Connect to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hotel bora";
    $con = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // Update the reservation status to "cancelled"
    $sql = "UPDATE reservation SET status = 'cancelled' WHERE reservation_id = $reservationId";
    if ($con->query($sql) === TRUE) {
        echo "Reservation cancelled successfully.";
    } else {
        echo "Error updating reservation: " . $con->error;
    }

    // Close the database connection
    $con->close();
} else {
    echo "Invalid request.";
}
?>