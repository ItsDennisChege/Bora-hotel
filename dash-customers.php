<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    * {
  font-family: "Ubuntu", sans-serif;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
.recentCustomers {
    position: relative;
    display: grid;
    min-height: 500px;
    padding: 20px;
    background: var(--white);
    box-shadow: 0 7px 25px rgba(0, 0, 0, 0.08);
    border-radius: 20px;
}

.recentCustomers .imgBx {
    position: relative;
    width: 40px;
    height: 40px;
    border-radius: 50px;
    overflow: hidden;
}

.recentCustomers .imgBx img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.recentCustomers table tr td {
    padding: 12px 10px;
}

.recentCustomers table tr td h4 {
    font-size: 16px;
    font-weight: 500;
    line-height: 1.2rem;
}

.recentCustomers table tr td h4 span {
    font-size: 14px;
    color: var(--black2);
}

.recentCustomers table tr:hover {
    background: var(--blue);
    color: var(--white);
}

.recentCustomers table tr:hover td h4 span {
    color: var(--white);
}

 
    </style>
</head>
<body>
<body>
<body>
      <!-- ================= Recent Customers ================ -->
      <!-- ================= Recent Customers ================ -->
    <div class="recentCustomers">
        <div class="cardHeader">
            <h2>Recent Customers</h2>
        </div>

        <table>
            <?php
            // Replace the existing code with PHP to dynamically fetch customer data from the database
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "hotel bora";
            $con = mysqli_connect($servername, $username, $password, $dbname);

            if ($con->connect_error) {
                die("Connection failed: " . $con->connect_error);
            }

            // Query to fetch customer data from the sign_up table
            $sql = "SELECT * FROM sign_up ORDER BY username DESC LIMIT 5"; // Fetch the 5 most recently signed-up customers based on the username
            $result = $con->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                    // Display the customer information with a shared image
                    echo "<tr>
                            <td width='60px'>
                                <div class='imgBx'><img src='images/user.png' alt=''></div>
                            </td>
                            <td>
                                <h4>" . $row["username"] . "</h4>
                            </td>
                        </tr>";
                }
            } else {
                echo "No customers found.";
            }

            // Close the database connection
            $con->close();
            ?>
        </table>
    </div>
</body>
</html>

         