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
    
    $id_delete = $_POST['id'];
    

    $sql = "DELETE FROM items WHERE id = $id_delete";

    if ($conn->query($sql) === TRUE) {
        echo "Yozuv muvaffaqiyatli o'chirildi.";
    
    } else {
        echo "Yozuvni o'chirishda xato yuz berdi: " . $conn->error;
    }

    header("Location: index.php");
    
}
$conn->close();
?>