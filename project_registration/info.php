<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "todo_list";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Ulanishda xatolik: " . $conn->connect_error);
}

$sql = "SELECT id, item,completed FROM items";
$result = $conn->query($sql);
?>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Saqlangan ma'lumotlar</title>
</head>
<body>
    <h1>Saqlangan ma'lumotlar</h1>

        <?php
        require "info_mysql.php";
        ?>
</body>
</html>
<?php
$conn->close();
?>