<script>
    function checkAvailability() {
        // Retrieve selected room, check-in, and check-out dates from the form
        const selectedRoom = document.getElementById('room_type').value;
        const checkInDate = document.getElementById('check_in_date').value;
        const checkOutDate = document.getElementById('check_out_date').value;

        // Perform an AJAX request to the server to check availability
        fetch('http://localhost/availability.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                room: selectedRoom,
                checkIn: checkInDate,
                checkOut: checkOutDate,
            }),
        })
        .then(response => response.json())
        .then(data => {
            // Handle the availability response
            console.log('Availability:', data);
            // Update the UI to display the availability status
            alert(data.message); // You can replace this with a more sophisticated UI update
        })
        .catch(error => {
            console.error('Error checking availability:', error);
        });
    }
</script>
