<?php
    $conn = mysqli_connect("localhost","root","","chat");
    if(!$conn){
        echo "Database Connection Failed\n";
    }
?>