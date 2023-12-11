<?php
$mysqli = new mysqli("localhost", "root", "", "student_information_system");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$instructorID = $_POST['instructor_id'];
$newInstructorFirstName = $_POST['new_instructor_first_name'];
$newInstructorLastName = $_POST['new_instructor_last_name'];
$newEmail = $_POST['email'];
$newPhone = $_POST['phone'];

$sql = "UPDATE Instructor SET instructor_first_name=?, instructor_first_name=? , email=? , phone=? WHERE instructor_id=?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("ssi", $newInstructorFirstName, $newInstructorLastName, $newEmail, $newPhone, $instructorID);

if ($stmt->execute()) {
    echo "Instructor information updated successfully";
} else {
    echo "Error updating record: " . $mysqli->error;
}

$stmt->close();
$mysqli->close();
?>