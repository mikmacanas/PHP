<?php
$mysqli = new mysqli("localhost", "root", "", "student_information_system");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$studentID = $_POST['student_id'];
$newFirstName = $_POST['new_first_name'];
$newLastName = $_POST['new_last_name'];
$newDateOfBirth = $_POST['new_date_of_birth'];
$newEmail = $_POST['new_email'];
$newPhone = $_POST['new_phone'];

$sql = "UPDATE Student SET first_name=?, last_name=?, date_of_birth=?, email=? , phone=? WHERE student_id=?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("ssssi", $newFirstName, $newLastName, $newDateOfBirth, $newEmail, $newPhone, $studentID);

if ($stmt->execute()) {
    echo "Student information updated successfully";
} else {
    echo "Error updating record: " . $mysqli->error;
}

$stmt->close();
$mysqli->close();
?>