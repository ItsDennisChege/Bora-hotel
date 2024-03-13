<!DOCTYPE html>
<html>
<head>
    <title>Bora Hotel</title>
    <link rel="stylesheet" type="text/css" href="dashboard.css">
</head>
<body>
   <!-- =============== Navigation ================ -->
   <div class="container">
    <div class="navigation">
        <ul>
            <li>
                <a href="home.php">
                    <span class="icon">
                    <ion-icon name="people-outline"></ion-icon>
                    </span>
                    <span class="title">Bora Hotel</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <span class="icon">
                        <ion-icon name="home-outline"></ion-icon>
                    </span>
                    <span class="title">Dashboard</span>
                </a>
            </li>

            <li>
                <a href="dash-customers.php">
                    <span class="icon">
                        <ion-icon name="people-outline"></ion-icon>
                    </span>
                    <span class="title">Customers</span>
                </a>
            </li>

            <li>
                <a href="dash-messages.php">
                    <span class="icon">
                        <ion-icon name="chatbubble-outline"></ion-icon>
                    </span>
                    <span class="title">Messages</span>
                 
                </a>
            </li>

            <li>
                <a href="#">
                    <span class="icon">
                        <ion-icon name="help-outline"></ion-icon>
                    </span>
                    <span class="title">Help</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <span class="icon">
                        <ion-icon name="settings-outline"></ion-icon>
                    </span>
                    <span class="title">Settings</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <span class="icon">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                    </span>
                    <span class="title">Password</span>
                </a>
            </li>

            <li>
                <a href="home.php">
                    <span class="icon">
                        <ion-icon name="log-out-outline"></ion-icon>
                    </span>
                    <span class="title">Sign Out</span>
                </a>
            </li>
        </ul>
    </div>
</div>

    <!-- ========================= Main ==================== -->
    <div class="main">
        <div class="topbar">
            <div class="toggle">
                <ion-icon name="menu-outline"></ion-icon>
            </div>

            <div class="search">
                <label>
                    <input type="text" placeholder="Search here">
                    <ion-icon name="search-outline"></ion-icon>
                </label>
            </div>

            <div class="user">
                <img src="assets/imgs/customer01.jpg" alt="">
            </div>
        </div>

        <!-- ======================= Cards ================== -->
        <div class="cardBox">
            <div class="card">
                <div>
                    <div class="numbers">1,504</div>
                    <div class="cardName">Daily Views</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="eye-outline"></ion-icon>
                </div>
            </div>

            <?php
$host = "localhost";
$username = "root";
$password = "";
$database = "hotel bora";

$con = mysqli_connect($host, $username, $password, $database);

// Check if the connection was successful
if (!$con) {
    die("Database connection failed: " . mysqli_connect_error());
}

$query = "SELECT COUNT(*) as total_reservations FROM reservation";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
$reservations = $row['total_reservations'];

mysqli_close($con);
?>

<div class="card">
    <div>
        <div class="numbers"><?php echo $reservations; ?></div>
        <div class="cardName">Reservations & Bookings</div>
    </div>

    <div class="iconBx">
        <ion-icon name="calendar-outline"></ion-icon>
    </div>
</div>

            <?php
$host = "localhost";
$username = "root";
$password = "";
$database = "hotel bora";

$con = mysqli_connect($host, $username, $password, $database);

// Check if the connection was successful
if (!$con) {
    die("Database connection failed: " . mysqli_connect_error());
}

$query = "SELECT COUNT(*) as total_messages FROM contact";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
$messages = $row['total_messages'];

mysqli_close($con);
?>
            <div class="card">
                <div>
                    <div class="numbers"><?php echo $messages; ?></div>
                    <div class="cardName">Messages</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="chatbubbles-outline"></ion-icon>
                </div>
            </div>

            <div class="card">
                <div>
                    <div class="numbers">$7,842</div>
                    <div class="cardName">Earning</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="cash-outline"></ion-icon>
                </div>
            </div>
        </div>

        <!-- ================ Order Details List ================= -->
        <div class="details">
            <div class="recentOrders">
                <div class="cardHeader">
                    <h2>Reservations & Bookings</h2>
                    <a href="#" class="btn">View All</a>
                </div>
             <div class="table">
                <table>
            <thead>
                <tr>
                    <th>Guest Name</th>
                    <th>Check-in Date</th>
                    <th>Check-out Date</th>
                    <th>Room Type</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Action</th>
                    <th>Price</th>
                    <th>Paid</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "hotel bora";
                $con = mysqli_connect("localhost", "root", "", "hotel bora");

                // Check connection
                if ($con->connect_error) {
                    die("Connection failed: " . $con->connect_error);
                }

                // Fetch reservation data from the database
                $sql = "SELECT reservation_id, fullName, check_in_date, check_out_date, roomType, status FROM reservation";
                $result = $con->query($sql);

                if ($result->num_rows > 0) {
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        $statusClass = ($row["status"] == "book") ? "status-booked" : "status-reservation";
                        echo "<tr>
                                <td>" . $row["fullName"] . "</td>
                                <td>" . $row["check_in_date"] . "</td>
                                <td>" . $row["check_out_date"] . "</td>
                                <td>" . $row["roomType"] . "</td>
                                <td><span class='status $statusClass'>" . $row["status"] . "</span></td>
                                <td><a href='edit_reservation.php?reservationId=" . $row["reservation_id"] . "' class='edit-btn'>Edit</a></td>
                                <td><a href='cancel_booking.php?reservationId=" . $row["reservation_id"] . "' class='cancel-btn'>Cancel</a></td>
                               
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='6'>No reservations found.</td></tr>";
                }
                // Close the database connection
                $con->close();
                ?>
            </tbody>
        </table>
            </div>
            
<!-- =========== Scripts =========  -->
<script src="assets/js/main.js"></script>

<!-- ====== ionicons ======= -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script>
    // add hovered class to selected list item
let list = document.querySelectorAll(".navigation li");

function activeLink() {
  list.forEach((item) => {
    item.classList.remove("hovered");
  });
  this.classList.add("hovered");
}

list.forEach((item) => item.addEventListener("mouseover", activeLink));

// Menu Toggle
let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");

toggle.onclick = function () {
  navigation.classList.toggle("active");
  main.classList.toggle("active");
};

</script>
</body>
</html>