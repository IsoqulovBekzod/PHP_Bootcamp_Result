<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Bosh sahifa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #f4f4f4;
        }

        h1 {
            margin-top: 20px;
        }

        nav {
            margin: 20px 0;
        }

        nav a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
            margin: 0 15px;
            padding: 10px 20px;
            border: 1px solid #333;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        nav a:hover {
            background-color: #333;
            color: #fff;
        }

        hr {
            width: 80%;
            margin: 20px 0;
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>

<h1>Bosh sahifa</h1>

<nav>
    <a href="/index.php">Registr</a>
    <a href="/login_info.php">Login</a>
    <a href="/data.php">User info</a>
    <a href="/admin_info.php">Admin part</a>
    <a href="/todo_list/index.php">Todo list</a>
</nav>

<hr>

</body>
</html>
