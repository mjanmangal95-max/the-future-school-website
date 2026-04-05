<?php

// Database connection
$conn = mysqli_connect("localhost", "root", "", "school");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get form data
$name = $_POST['username'];
$fatherName = $_POST['fathername'];
$nic = $_POST['fnic'];
$bform = $_POST['bform'];
$dob = $_POST['date'];
$address = $_POST['address'];

// Insert query
$sql = "INSERT INTO admission (name, father_name, father_nic, bform, dob, address)
        VALUES ('$name', '$fatherName', '$nic', '$bform', '$dob', '$address')";

// Execute query
if (mysqli_query($conn, $sql)) {
    echo "Data inserted successfully ✅";
} else {
    echo "Error: " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);

?>