<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>
    <style>
 /* =========== Google Fonts ============ */ @import url("https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap");

*{
font-family: "Ubuntu", sans-serif;
margin: 0;
padding: 0;
box-sizing: border-box;
}
.messages {
position: relative;
width: 100%;
padding: 30px;
display: block;
grid-template-columns: 2fr 1fr;
grid-gap: 30px;
}
.messages .cardHeader {
display: flex;
justify-content: space-between;
align-items: flex-start;
}

.messages .cardHeader h2 {
font-weight: 600;
color: var(--blue);
}

.messages .messageContainer {
position: fixed;
display: grid;
min-height: 650px;
background: var(--white);
padding: 100px;
box-shadow: 0 7px 25px rgba(0, 0, 0, 0.08);
border-radius: 50px;
width: 90%;
}

.messages .message {
display: grid;
grid-template-columns: auto 1fr;
grid-gap: 10px;
margin-bottom: 20px;
}

.messages .from h3 {
font-weight: 600;
color: var(--black1);
margin: 0;
}

.messages .messageContent p {
color: var(--black2);
margin: 0;
}

.messages .message {
display: grid;
grid-template-columns: auto 1fr;
grid-gap: 10px;
margin-bottom: 20px;
}

.messages .from h3 {
font-weight: 600;
color: var(--black1);
margin: 0;
}

.messages .messageContent p {
color: var(--black2);
margin: 0;
}
table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="messages">
        <div class="cardHeader">
            <h2>Messages</h2>
        </div>

        <div class="messageContainer">
            <!-- Messages data will be dynamically added here using PHP -->
            <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "hotel bora";
                $con = mysqli_connect($servername, $username, $password, $dbname);

                if ($con->connect_error) {
                    die("Connection failed: " . $con->connect_error);
                }

                // Query to fetch messages from the database
                $sql = "SELECT Name, Message FROM contact";
                $result = $con->query($sql);

                if ($result->num_rows > 0) {
                    // Output data of each row
                    echo "<table>";
                    echo "<tr><th>From</th><th>Message</th></tr>";
                    while ($row = $result->fetch_assoc()) {
                        // Check if the required array keys exist before accessing them
                        $name = isset($row["Name"]) ? $row["Name"] : "";
                        $message = isset($row["Message"]) ? $row["Message"] : "";

                        // Display the message details in separate columns
                        echo "<tr><td>" . htmlentities($name) . "</td><td>" . htmlentities($message) . "</td></tr>";
                    }
                    echo "</table>";
                } else {
                    echo "No messages found.";
                }

                // Close the database connection
                $con->close();
            ?>
        </div>
    </div>
</body>
</html>
