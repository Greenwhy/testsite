<?php
if(isset($_POST[name]) && isset($_POST[slogan]) && isset($_FILES['img'])){
$conn = mysqli_connect('database', 'adminuser', 'altug1601', 'paths');
$name = $_POST[name];
$slogan = $_POST[slogan];
$path = ($_FILES['img']['name']);
$sql = "INSERT INTO paths VALUES ('$name', '$path', '$slogan')";

mysqli_query($conn, $sql);
    
    if(move_uploaded_file($_FILES['photo']['tmp_name'], "images/" . basename($_FILES['photo']['name']))) {
        header('Location: index.php');    
    } else {
        header('Location: err.php');
    }
}
