<?php


if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        if($row['completed']){
        
        
echo '<input type="checkbox" checked name="selected_items[]" value="' . $row["id"] . '"> ';
echo '<label for="' . $row['id'] . '"><del>' . $row['item'] . '</del></label><br>';}
else{
echo '<input type="checkbox" name="selected_items[]" value="' . $row["id"] . '"> ';
echo '<label for="' . $row['id'] . '">'. $row['item']. '</label><br>';}



echo '<form action="delete.php" method="post">
    <input type="hidden" name="id" value="' . $row["id"] . '">
    <input type="submit" value="Delete">
    </form>';

echo '<form action="updete.php" method="post">
<input type="hidden" name="id" value="' . $row["id"] . '">
<input type="submit" value=" Id uptede">
</form>';

echo '<form action="completed.php" method="post">
<input type="hidden" name="id" value="' . $row["id"] . '">
<input type="submit" value="Id delete">
</form>';



      }
} else {
    echo "Hech qanday ma'lumot topilmadi.";
}
?>
