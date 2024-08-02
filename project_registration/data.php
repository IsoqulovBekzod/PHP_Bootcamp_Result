<?php require "window.php";?>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "regestr";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Ulanishda xatolik: " . $conn->connect_error);

}

$sql='SELECT * FROM users';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: ". $row["id"]. " - Email: ". $row["email"]. " - Password: ". $row["password"]. "<br>";
    }
} else {
    echo "Ma'lumotlar topilmadi";
}

$conn->close();
?>
