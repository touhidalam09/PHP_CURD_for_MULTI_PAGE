<?php

include_once 'db.php';

$sqlShowData = "SELECT * FROM user_info";
$result = $conn->query($sqlShowData);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"] . " - FirstName: " . $row["FirstName"] . " -||- LastName: " . $row["LastName"] . " -||- Email: " . $row["Email"] . "<br> <br>";
    }
} else {
    echo "0 results";
}

$conn->close();
