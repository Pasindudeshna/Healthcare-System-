<?php
$fullname = $_POST['fullname'];
$add = $_POST['address'];
$date = $_POST['date'];
$tp = $_POST['tp'];
$des = $_POST['des'];


// Database connection
$con = new mysqli('localhost', 'root', '', 'wellnexus');
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
echo "Connected successfully<br>";

$query = "INSERT INTO doctor_appointment (fullname, address, date, tp, des) VALUES ('$fullname', '$add', '$date', '$tp', '$des')";

if ($con->query($query) === TRUE) {
    echo "<script>alert('Appointment Submitted Successfully');</script>";
} else {
    echo "<script>alert('Error: " . $con->error . "');</script>";
}

$con->close();
?>
