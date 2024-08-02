<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "todo_list";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Ulanishda xatolik: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
$item = $_POST['item'];

if (strlen($_POST['item'])){


$sql = "INSERT INTO items (item) VALUES ('$item')";
if ($conn->query($sql) === TRUE) {
    echo "Ma'lumot qushildi.";
} else {
    echo "Xatolik: " . $sql . "<br>" . $conn->error;
}}

header('Location: index.php');
}
$conn->close();
?>