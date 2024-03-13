<?php
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel bora";

// Create a new PDO instance
try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    // Set PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Check if the reservationId parameter is present in the URL
if (isset($_GET['reservationId'])) {
    $reservationId = $_GET['reservationId'];

    // Fetch the existing reservation details from the database based on the reservationId
    $stmt = $pdo->prepare("SELECT * FROM reservation WHERE reservation_id = :reservationId");
    $stmt->bindParam(':reservationId', $reservationId);
    $stmt->execute();
    $existingReservationDetails = $stmt->fetch(PDO::FETCH_ASSOC);

    // Check if the reservation exists
    if ($existingReservationDetails) {
        // Handle form submission
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Retrieve and validate the updated details from the form
            $updatedFullName = $_POST['fullName'];
            $updatedEmail = $_POST['email'];
            $updatedPhone = $_POST['phone'];
            $updatedCheckInDate = $_POST['checkInDate'];
            $updatedCheckOutDate = $_POST['checkOutDate'];
            $updatedAdults = $_POST['adults'];
            $updatedChildren = $_POST['children'];
            $updatedRoomType = $_POST['roomType'];
            $updatedSpecialRequests = $_POST['specialRequests'];

            // Perform necessary validations on the input fields
            // ...

            // If the input is valid, update the reservation details in the database
            $stmt = $pdo->prepare("UPDATE reservation SET fullName = :fullName, email = :email, phone = :phone, check_in_date = :checkInDate, check_out_date = :checkOutDate, adults = :adults, children = :children, roomType = :roomType, specialRequests = :specialRequests WHERE reservation_id = :reservationId");
            $stmt->bindParam(':fullName', $updatedFullName);
            $stmt->bindParam(':email', $updatedEmail);
            $stmt->bindParam(':phone', $updatedPhone);
            $stmt->bindParam(':checkInDate', $updatedCheckInDate);
            $stmt->bindParam(':checkOutDate', $updatedCheckOutDate);
            $stmt->bindParam(':adults', $updatedAdults);
            $stmt->bindParam(':children', $updatedChildren);
            $stmt->bindParam(':roomType', $updatedRoomType);
            $stmt->bindParam(':specialRequests', $updatedSpecialRequests);
            $stmt->bindParam(':reservationId', $reservationId);
            $stmt->execute();

            // Redirect back to the dashboard page after successful update
            header("Location: dashboard.php");
            exit;
        }
    } else {
        echo "Reservation not found.";
    }
} else {
    echo "Invalid request.";
}
?>