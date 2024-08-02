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
$login= $_POST['login'];
$sql = "SELECT * FROM users WHERE email = '$email'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    $row = $result->fetch_assoc();
    $user_login = $row['password'];
    if ($user_login===$login){
        require "user_window.php";
    }
    else {
        echo "Parol noto'g'ri";
    }}
    else {
        echo "Email notug'ri kiritildi.";
    
}