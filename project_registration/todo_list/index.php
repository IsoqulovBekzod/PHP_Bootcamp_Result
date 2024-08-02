<?php require "../window.php";?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Malumotlar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Todo list</h2>
  <form action="database.php" method="post">
        
        <input type="text" id="item" name="item" require>
        <button type="button" class="btn btn-primary">+</button>  
  </form>    
</div>

</body>
</html>

<?php require "info.php";?>



