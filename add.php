<?php include 'db.php'; ?>

<form method="POST">
Title: <input type="text" name="title"><br>
Author: <input type="text" name="author"><br>
Quantity: <input type="number" name="quantity"><br>
<input type="submit" name="submit" value="Add Book">
</form>

<?php
if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $author = $_POST['author'];
    $quantity = $_POST['quantity'];

    $sql = "INSERT INTO books (title, author, quantity)
            VALUES ('$title', '$author', '$quantity')";

    mysqli_query($conn, $sql);
    echo "Book Added Successfully!";
}
?>
