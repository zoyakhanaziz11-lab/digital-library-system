<?php include 'db.php'; ?>

<form method="POST">
Enter Title: <input type="text" name="title">
<input type="submit" name="search" value="Search">
</form>

<?php
if(isset($_POST['search'])){
    $title = $_POST['title'];
    $result = mysqli_query($conn, "SELECT * FROM books WHERE title='$title'");

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "ID: ".$row['book_id']."<br>";
            echo "Author: ".$row['author']."<br>";
            echo "Quantity: ".$row['quantity']."<br>";
        }
    } else {
        echo "Book Not Found!";
    }
}
?>
