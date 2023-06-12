<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webdesignuvt";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the events table and sort by eventDate in ascending order
$sql = "SELECT eventName, eventDate, eventMusic FROM events ORDER BY eventDate ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $data = array();
    // Fetch each row and add it to the data array
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    // Return the data as JSON
    header('Content-Type: application/json');
    echo json_encode($data);
} else {
    echo "No events found.";
}

// Close the database connection
$conn->close();
?>
