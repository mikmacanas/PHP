<?php
$mysqli = new mysqli("localhost", "root", "", "student_information_system");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$studentID = $_GET['student_id'];

$sql = "SELECT * FROM Student WHERE student_id = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("i", $studentID);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Name: " . $row["first_name"] . " " . $row["last_name"] . " - Date of Birth: " . $row["date_of_birth"] . "<br>";
    }
} else {
    echo "0 results";
}

$stmt->close();
$mysqli->close();
?>