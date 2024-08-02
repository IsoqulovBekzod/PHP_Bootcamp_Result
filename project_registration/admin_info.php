
<?php require "window.php";?>
<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Foydalanuvchi boshqaruvi</title>
</head>
<body>
    <h2>Foydalanuvchini boshqarish</h2>
    <form action="delete_users.php" method="post">
        <label for="user_id">Foydalanuvchi ID:</label>
        <input type="text" id="user_id" name="user_id" required><br><br>
        
        <h3>Ma'lumotlarni yangilash</h3>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>
        <label for="password">Parol:</label>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" name="action" value="Yangilash">
        
        <h3>Foydalanuvchini o'chirish</h3>
        <input type="submit" name="action" value="O'chirish">
    </form>
</body>
</html>

