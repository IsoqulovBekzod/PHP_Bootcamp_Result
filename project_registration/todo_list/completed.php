<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "todo_list";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Ulanishda xatolik: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_update = $_POST['id'];
    

    
    $sql = "UPDATE items SET completed = 0 WHERE id = $id_update";

    if ($conn->query($sql) === TRUE) {
        echo "Yozuv muvaffaqiyatli yangilandi.";
    } else {
        echo "Yozuvni yangilashda xato yuz berdi: " . $conn->error;
    }

   
    header("Location: index.php"); }


$conn->close();
?>