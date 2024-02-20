<?php
header('Content-Type: application/json');

include '../config.php';

// Prepare the SQL statement
$stmt = $conn->prepare("SELECT * FROM paket");

// Execute the query
$stmt->execute();

// Bind the result to a variable
$result = $stmt->get_result();

// Check if the query was successful
if ($result) {
    // Fetch the data as an associative array
    $data = $result->fetch_all(MYSQLI_ASSOC);

    // Encode the data as JSON and output it
    echo json_encode($data);
} else {
    // Query failed, return an error message
    http_response_code(500);
    echo json_encode(['error' => 'Database query failed']);
}

// Close the database connection
$conn->close();