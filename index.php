<?php
$conn = mysqli_connect('database', 'adminuser', 'altug1601', 'paths');
$sql = "SELECT * FROM paths";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)){
    echo "<h1>" .$row[name]. "<h1/>";
    echo "<h2>" .$row[slogan]. "<h2/>";
    echo "<img src=" .$row[img]. ">";
    
}
