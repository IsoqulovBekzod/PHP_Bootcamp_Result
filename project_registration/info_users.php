<?php require "window.php";?>
<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "regestr";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Ulanish xatosi: " . $conn->connect_error);
}


$user_id = $_POST['user_id'];
$action = $_POST['action'];

if ($action == 'Yangilash') {
   
    $email = $_POST['email'];
    $password = $_POST['password'];


    $sql = "UPDATE users SET email='$email', password='$password' WHERE id='$user_id'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Foydalanuvchi ma'lumotlari muvaffaqiyatli yangilandi";
    } else {
        echo "Xato: " . $sql . "<br>" . $conn->error;
    }
} elseif ($action == "O'chirish") {
    
    $sql = "DELETE FROM users WHERE id='$user_id'";

    if ($conn->query($sql) === TRUE) {
        echo "Foydalanuvchi muvaffaqiyatli o'chirildi";
    } else {
        echo "Xato: " . $sql . "<br>" . $conn->error;
    }
}
require "admin_info.php";

$conn->close();
?>
