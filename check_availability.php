<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the selected room type, check-in date, and check-out date
    $roomType = $_POST['roomType'];
    $checkInDate = $_POST['checkInDate'];
    $checkOutDate = $_POST['checkOutDate'];

    // Perform the availability check based on your database structure

    // Connect to the database
    $con = mysqli_connect("localhost", "root", "", "hotel bora");

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // Check if the chosen room is already booked for the given dates
    $query = "SELECT * FROM reservation WHERE roomType = '$roomType' AND check_in_date <= '$checkOutDate' AND check_out_date >= '$checkInDate'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) > 0) {
        // The room is already booked for the selected dates
        echo "Sorry, the chosen room is not available for the selected dates.";
    } else {
        // The room is available for booking
        
        echo "The chosen room is available for the selected dates. You can proceed with the booking. Redirecting back to the homepage...\n";
         // link
        echo '        <a href="home.php">Click here</a> to go back to the homepage and make a booking.';

    }
    // Redirect to the homepage after 5 seconds
    echo '<script>
       setTimeout(function() {
       window.location.href = "home.php";
      }, 5000); // 5000 milliseconds = 120 seconds
      </script>';

    $con->close();
}
?>