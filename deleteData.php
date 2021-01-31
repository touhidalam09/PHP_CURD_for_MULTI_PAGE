<?php

include_once 'db.php';

$id = $_GET['id'];
$sql = "DELETE FROM user_info WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
//    echo "Delete successfully";
    $conn->close();
    header("location: daleteMessage.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    exit();
}

exit();








