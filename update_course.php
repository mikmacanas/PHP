<?php
$mysqli = new mysqli("localhost", "root", "", "student_information_system");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$courseID = $_POST['course_id'];
$newCourseName = $_POST['new_course_name'];
$newCourseDescription = $_POST['new_course_description'];

$sql = "UPDATE Course SET course_name=?, course_description=? WHERE course_id=?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("ssi", $newCourseName, $newCourseDescription, $courseID);

if ($stmt->execute()) {
    echo "Course information updated successfully";
} else {
    echo "Error updating record: " . $mysqli->error;
}

$stmt->close();
$mysqli->close();
?>