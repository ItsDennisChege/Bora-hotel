<!DOCTYPE html>
<html>
<head>
    <title>Reservation Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            color: #333;
        }
        p {
            margin-bottom: 8px;
        }
    </style>
</head>
<body>
    <h1>Reservation Confirmation</h1>
    <p>Thank you for choosing Bora Hotel. Your reservation has been successfully confirmed.</p>

    <h2>Reservation Details:</h2>
    <p><strong>Full Name:</strong> <?php echo $_GET['fullName']; ?></p>
    <p><strong>Email:</strong> <?php echo $_GET['email']; ?></p>
    <p><strong>Phone:</strong> <?php echo $_GET['phone']; ?></p>
    <p><strong>Check-in Date:</strong> <?php echo $_GET['check_in_date']; ?></p>
    <p><strong>Check-out Date:</strong> <?php echo $_GET['check_out_date']; ?></p>
    <p><strong>Adults:</strong> <?php echo $_GET['adults']; ?></p>
    <p><strong>Children:</strong> <?php echo $_GET['children']; ?></p>
    <p><strong>Room Type:</strong> <?php echo $_GET['roomType']; ?></p>
    <p><strong>Special Requests:</strong> <?php echo $_GET['specialRequests']; ?></p>
    <p><strong>status:</strong> <?php echo $_GET['status']; ?></p>

    <p>If you have any questions or need further assistance, please don't hesitate to contact our customer support team. We look forward to welcoming you to Bora Hotel!</p>
</body>
</html>