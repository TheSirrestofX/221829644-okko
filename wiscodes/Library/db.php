<?php
    $servername = "localhost:3306";
    $username = "root";
    $password = "";
    $dbname = "library";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
?>

git config --global user.name "TheSirrestofX"
git config --global user.email "zorenokko04@gmail.com"
