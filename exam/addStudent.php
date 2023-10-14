<?php
$host = "127.0.0.1";
$dbname = "t2210a_exam";
$dbuser = "root";
$dbpass = ""; // Xampp: ""   Mamp: "root"

$conn = new mysqli($host,$dbuser,$dbpass,$dbname); // host user pass dbname
if($conn->connect_error){
    die("Connection refused!");
}

$id = $_POST['id'];
$name = $_POST['name'];
$age = $_POST['age'];
$address = $_POST['address'];
$telephone = $_POST['telephone'];

$sql = "INSERT INTO students (id,name, age, address, telephone) VALUES ('$id','$name', $age, '$address', '$telephone')";

if ($conn->query($sql) === TRUE) {
    echo "<script>window.location = 'display.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>