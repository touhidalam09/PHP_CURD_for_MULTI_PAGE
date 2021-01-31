<?php

include_once 'db.php';


$firstName = $lastName = $email = "";
if (isset($_POST["update"])) {

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST["id"];
        $firstName = test_input($_POST["firstName"]);
        $lastName = test_input($_POST["lastName"]);
        $email = test_input($_POST["email"]);
    }

    $sql = "UPDATE user_info SET firstName = '$firstName', lastName = '$lastName', email = '$email' WHERE id = '$id'";

    if ($conn->query($sql) === TRUE) {
//        echo "Record UPDATED successfully";
        $conn->close();
        header("location: updateMessage.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        exit();
    }

    exit();
}






