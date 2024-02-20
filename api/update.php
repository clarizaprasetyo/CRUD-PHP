
<?php
header ('Content-Type application/json');
include '../config.php';

// Get the data from the request body
$data =_decode(file_get_('php://input'), true);

 //Prepare the SQL statement
$stmt = $conn->prepare("UPDATE paket SET nama=?, harga=?, deskripsi=? WHERE id=?");

// Bind the values to the placeholders
$stmt->bind_param("sssi", $data['nama'], $data['harga'], $data['deskripsi'], $data['id']);

// Execute the query
$result = $stmt->execute();

// Check if the query was successful
if ($result) {
    // Query successful, return a success message
    http_response_code(200);
    echo json_encode(['message' => 'Paket updated successfully']);
} else {
    // Query failed, return an error message
    http_response_code(500);
    echo json_encode(['error' => 'Database update failed']);
}

// Close the database connection
$conn->close();