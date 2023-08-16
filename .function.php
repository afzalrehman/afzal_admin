<?php
include "config.php"; 

// Define a sample validate function for demonstration purposes
function validate($input) {
    // Perform validation logic here
    // Return validated input or table name
    return $input;
}

function getCount($tableName) {
    global $conn;
    $table = validate($tableName); // Use the validate function

    $query = "SELECT * FROM $table";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        // Handle query error, if any
        return "Error: " . mysqli_error($conn);
    }

    $totalCount = mysqli_num_rows($result);
    return $totalCount;
}
?>

