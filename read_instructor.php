<?php
$mysqli = new mysqli("localhost", "root", "", "student_information_system");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$instructorID = $_GET['instructor_id'];

$sql = "SELECT * FROM Instructor WHERE instructor_id = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("i", $instructorID);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Instructor First Name: " . $row["instructor_first_name"] . "Instructor Last Name: " . $row["instructor_last_name"] . " - Email: " . $row["email"] . "<br>";
    }
} else {
    echo "0 results";
}

$stmt->close();
$mysqli->close();
?>