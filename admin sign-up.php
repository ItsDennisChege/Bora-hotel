<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the submitted form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate if the fields are not empty
    if (!empty($username) && !empty($password)) {
        // Connect to the database
        $servername = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "hotel bora";
        
        $con = new mysqli($servername, $dbUsername, $dbPassword, $dbName);

        // Check the database connection
        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }

        // Prepare the SQL statement to retrieve the password from the 'admin' table
        $stmt = $con->prepare("SELECT password FROM admin WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows === 1) {
            // Fetch the password from the result
            $row = $result->fetch_assoc();
            $storedPassword = $row['password'];

            // Verify the submitted password with the stored password
            if ($password === $storedPassword) {
                // Redirect the admin to the dashboard page
                header("Location: dashboard.php");
                exit;
            } else {
                // Display an error message if the password is incorrect
                $error = "Invalid password.";
            }
        } else {
            // Display an error message if the user doesn't exist
            $error = "Invalid username.";
        }

        // Close the statement and database connection
        $stmt->close();
        $con->close();
    } else {
        // Display an error message if any field is empty
        $error = "Please fill in all the fields.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Sign-In</title>
    <style>
     .admin {
        position: relative;
        display: block;
        color: #000;
        width: auto;
     }
     h1{
        color: #000;
     }
     body {
	color: #999;
	background: orange;
	font-family: 'Roboto', sans-serif;
    }
    .card{
        border-radius:20px;
        background-color: #f3f3f3;
        padding:20px 100px;
        margin: 150px;
        box-shadow: 4px 8px rgba(0,0,0,0,.2);
        position:fixed;
        left:300px;
    }
    
    </style>
</head>
<body>
   
   <div class="card">
    <span> 
    <!--<ion-icon name="people-outline"></ion-icon> -->
    </span>
   <span>
    <img>
    <img src="images/group.png" alt="">
    </img>
    <h1>Admin</h1> 
   </span>
    <?php if(isset($error)): ?>
        <p><?php echo $error; ?></p>
    <?php endif; ?>
    <div class="admin">
      <form action="" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
    
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
    
        <input type="submit" value="Sign In">
      </form>
    </div>
   </div>

   <!-- Js for Icons-->
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>    
    
</body>
</html>