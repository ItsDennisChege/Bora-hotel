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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    
body { font-family: Arial, sans-serif; margin: 0; padding: 20px; }
/* Heading styles */
h1 {
color: #333;
font-size: 24px;
margin-bottom: 20px;
}

/* Form styles */
form {
max-width: 400px;
margin-bottom: 20px;
}

label {
display: block;
margin-bottom: 10px;
}

input[type="text"],
input[type="email"],
input[type="tel"],
input[type="date"],
input[type="number"],
textarea {
width: 100%;
padding: 10px;
border: 1px solid #ccc;
border-radius: 4px;
font-size: 14px;
margin-bottom: 10px;
}

textarea {
height: 100px;
}

input[type="submit"] {
background-color: #333;
color: #fff;
padding: 10px 20px;
border: none;
border-radius: 4px;
cursor: pointer;
}

input[type="submit"]:hover {
background-color: #555;
}

/* Error message styles */
.error-message {
color: red;
font-size: 12px;
margin-top: -10px;
margin-bottom: 10px;
}

/* Success message styles */
.success-message {
color: green;
font-size: 12px;
margin-top: -10px;
margin-bottom: 10px;
}

    </style>
</head>
<body>
<h1>Edit Reservation</h1>
<form method="POST" action="update_reservation.php?reservationId=<?php echo $reservationId; ?>"> 
<!-- Display the existing reservation details in the form fields -->
<label for="fullName">Full Name:</label>
<input type="text" name="fullName" value="<?php echo isset($existingFullName) ? $existingFullName : ''; ?>" required>
<label for="email">Email:</label>
<input type="email" name="email" value="<?php echo isset($existingEmail) ? $existingEmail : ''; ?>" required>

<label for="phone">Phone:</label>
<input type="tel" name="phone" value="<?php echo isset($existingPhone) ? $existingPhone : ''; ?>" required>

<label for="checkInDate">Check-in Date:</label>
<input type="date" name="checkInDate" value="<?php echo isset($existingCheckInDate) ? $existingCheckInDate : ''; ?>" required>

<label for="checkOutDate">Check-out Date:</label>
<input type="date" name="checkOutDate" value="<?php echo isset($existingCheckOutDate) ? $existingCheckOutDate : ''; ?>" required>

<label for="adults">Number of Adults:</label>
<input type="number" name="adults" value="<?php echo isset($existingAdults) ? $existingAdults : ''; ?>" required>

<label for="children">Number of Children:</label>
<input type="number" name="children" value="<?php echo isset($existingChildren) ? $existingChildren : ''; ?>" required>

<label for="roomType">Room Type:</label>
<input type="text" name="roomType" value="<?php echo isset($existingRoomType) ? $existingRoomType : ''; ?>" required>

<label for="specialRequests">Special Requests:</label>
<textarea name="specialRequests" required><?php echo isset($existingSpecialRequests) ? $existingSpecialRequests : ''; ?></textarea>

<input type="submit" value="Update Reservation">
</form>
 <!-- Include any necessary JavaScript files -->   
</body>
</html>