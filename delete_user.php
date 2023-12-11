<?php
$mysqli = new mysqli("localhost", "root", "", "student_information_system");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$userID = $_POST['user_id'];

$sql = "DELETE FROM Users WHERE user_id=?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("i", $userID);

if ($stmt->execute()) {
    echo "User deleted successfully";
} else {
    echo "Error deleting record: " . $mysqli->error;
}

$stmt->close();
$mysqli->close();
?>