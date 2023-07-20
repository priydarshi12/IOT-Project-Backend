<?php
$servername = "sql6.freemysqlhosting.net";
$username = "sql6634330";
$password = "2hKfFh5NxP";
$dbname = "sql6634330";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the "IOT" table
$sql = "SELECT * FROM IOT";
$result = $conn->query($sql);

// Prepare an array to store the data
$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

// Close the connection
$conn->close();

// Return data as JSON
header('Content-Type: application/json');
echo json_encode($data);
?>
