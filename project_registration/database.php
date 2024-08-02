<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "regestr";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Ulanishda xatolik: " . $conn->connect_error);

}

$email = $_POST['email'];
$sql = "SELECT email FROM users WHERE email = '$email'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    require "login_info.php";
    exit();
}
else {

if ($_SERVER["REQUEST_METHOD"] == "POST"){
$password=$_POST['password'];


if (isset($_POST['email']) && isset($_POST['password'])){


$sql = "INSERT INTO users (email,password) VALUES ('$email', '$password')";
if ($conn->query($sql) === TRUE) {
    echo "Ma'lumot qushildi.";
} else {
    echo "Xatolik: " . $sql . "<br>" . $conn->error;
}}}

header('Location: index.php');
}
$conn->close();
?>