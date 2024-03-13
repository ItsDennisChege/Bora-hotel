<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];

    // Validate the email address
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Connect to your database
        $host = 'localhost';
        $dbname = 'hotel bora';
        $username = 'root';
        $password = '';

        try {
            $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Prepare and execute the SQL query to insert the email into the reservation table
            $stmt = $conn->prepare("INSERT INTO reservation (EmailAddress) VALUES (:email)");
            $stmt->bindParam(':email', $email);
            $stmt->execute();

            // Redirect the user to a thank you page
            header('Location: thank-you.html');
            exit;
        } catch(PDOException $e) {
            // Handle database connection errors
            echo "Database connection failed: " . $e->getMessage();
        }
    } else {
        // Handle invalid email address
        echo "Invalid email address!";
    }
}
?>