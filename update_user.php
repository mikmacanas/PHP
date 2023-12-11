<?php
$mysqli = new mysqli("localhost", "root", "", "student_information_system");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$userID = $_POST['user_id'];
$newUsername = $_POST['new_username'];
$newEmail = $_POST['new_email'];

$sql = "UPDATE Users SET username=?, email=? WHERE user_id=?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("ssi", $newUsername, $newEmail, $userID);

if ($stmt->execute()) {
    echo "User information updated successfully";
} else {
    echo "Error updating record: " . $mysqli->error;
}

$stmt->close();
$mysqli->close();
?>