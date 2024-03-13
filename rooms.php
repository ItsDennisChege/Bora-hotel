<?php
// Connect to the database
$con = mysqli_connect("localhost", "root", "", "bora hotel");

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Function to retrieve all rooms from the database
function getAllRooms() {
    global $con;

    $query = "SELECT * FROM rooms";
    $result = mysqli_query($con, $query);

    $rooms = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $rooms[] = $row;
    }

    return $rooms;
}

// Function to retrieve a specific room by room_id
function getRoomById($room_id) {
    global $con;

    $room_id = mysqli_real_escape_string($con, $room_id);
    $query = "SELECT * FROM rooms WHERE room_id = '$room_id'";
    $result = mysqli_query($con, $query);
    $room = mysqli_fetch_assoc($result);

    return $room;
}

// Function to update the availability of a room
function updateRoomAvailability($room_id, $availability) {
    global $con;

    $room_id = mysqli_real_escape_string($con, $room_id);
    $availability = mysqli_real_escape_string($con, $availability);

    $query = "UPDATE rooms SET availability = '$availability' WHERE room_id = '$room_id'";
    mysqli_query($con, $query);
}

// Function to add a new room to the database
function addRoom($room_type, $availability, $price, $room_number) {
    global $con;

    $room_type = mysqli_real_escape_string($con, $room_type);
    $availability = mysqli_real_escape_string($con, $availability);
    $price = mysqli_real_escape_string($con, $price);
    $room_number = mysqli_real_escape_string($con, $room_number);

    $query = "INSERT INTO rooms (room_type, availability, price, room_number) VALUES ('$room_type', '$availability', '$price', '$room_number')";
    mysqli_query($con, $query);
}

// Function to delete a room from the database
function deleteRoom($room_id) {
    global $con;

    $room_id = mysqli_real_escape_string($con, $room_id);
    $query = "DELETE FROM rooms WHERE room_id = '$room_id'";
    mysqli_query($con, $query);
}

// Usage examples:
// $allRooms = getAllRooms(); // Retrieve all rooms from the database

// $room = getRoomById(1); // Retrieve a specific room by room_id
// if ($room) {
//     echo "Room Type: " . $room['room_type'];
//     echo "Availability: " . $room['availability'];
//     echo "Price: " . $room['price'];
//     echo "Room Number: " . $room['room_number'];
// }

// updateRoomAvailability(1, 0); // Update the availability of a room

// addRoom('Standard', 1, 100, '101'); // Add a new room to the database

// deleteRoom(1); // Delete a room from the database

$con->close();
?>