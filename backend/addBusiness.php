<?php
include "config.php";
include "cors.php";

// Read POST data
$data = json_decode(file_get_contents("php://input"));

// Check if data exists and fields are not empty
if (
    isset($data->name) && !empty(trim($data->name)) &&
    isset($data->category) && !empty(trim($data->category)) &&
    isset($data->description) && !empty(trim($data->description)) &&
    isset($data->contact) && !empty(trim($data->contact))
) {
    // Sanitize input
    $name = $conn->real_escape_string(trim($data->name));
    $category = $conn->real_escape_string(trim($data->category));
    $description = $conn->real_escape_string(trim($data->description));
    $contact = $conn->real_escape_string(trim($data->contact));

    // Insert into database
    $sql = "INSERT INTO businesses (name, category, description, contact)
            VALUES ('$name', '$category', '$description', '$contact')";

    if ($conn->query($sql)) {
        echo json_encode(["success" => true, "id" => $conn->insert_id]);
    } else {
        echo json_encode(["success" => false, "error" => $conn->error]);
    }
} else {
    // Prevent insert if any required field is missing
    echo json_encode(["success" => false, "error" => "Missing or empty input fields"]);
}
?>
