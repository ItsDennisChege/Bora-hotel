<?php
// Ensure that the form is submitted using POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connect to the database
    $con = mysqli_connect("localhost", "root", "", "hotel bora");

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // Retrieve reservation details from the form
    $fullName = mysqli_real_escape_string($con, $_POST['fullName']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $check_in_date = mysqli_real_escape_string($con, $_POST['check_in_date']);
    $check_out_date = mysqli_real_escape_string($con, $_POST['check_out_date']);
    $adults = mysqli_real_escape_string($con, $_POST['adults']);
    $children = mysqli_real_escape_string($con, $_POST['children']);
    $roomType = mysqli_real_escape_string($con, $_POST['roomType']);
    $specialRequests = mysqli_real_escape_string($con, $_POST['specialRequests']);
    $status = mysqli_real_escape_string($con, $_POST['status']); // Retrieve the value of the 'status' field

    // Map the form values to the corresponding values for room_type
    $roomTypeMap = array(
        "deluxe" => "Double",
        "standard" => "Single",
        "executive" => "Suite",
        "presidential" => "Presidential",
        "business" => "Business",
        "premium" => "Premium"
    );

    // Get the corresponding roomType value
    $roomTypeMapped = $roomTypeMap[$roomType];

    // Check if a record with the same name already exists
    $query = "SELECT COUNT(*) AS count FROM reservation WHERE fullName = '$fullName'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);
    $count = $row['count'];

    if ($count > 0) {
        // Handle the duplicate entry error
        echo "Sorry, a reservation with the name '$fullName' already exists.";
    } else {
        // Insert the new reservation into the database
        $insertQuery = "INSERT INTO reservation (fullName, email, phone, check_in_date, check_out_date, adults, children, roomType, specialRequests, status) VALUES ('$fullName', '$email', '$phone', '$check_in_date', '$check_out_date', '$adults', '$children', '$roomTypeMapped', '$specialRequests', '$status')";
        mysqli_query($con, $insertQuery);

        // Redirect to the confirmation page
        header("Location: reservation_confirmation.php?fullName=$fullName&email=$email&phone=$phone&check_in_date=$check_in_date&check_out_date=$check_out_date&adults=$adults&children=$children&roomType=$roomTypeMapped&specialRequests=$specialRequests&status=$status");
        exit();
    }

    $con->close();
}
?>