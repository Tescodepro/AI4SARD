<?php

$connect = mysqli_connect('localhost', 'ai4sard', 'ai4sard0o2023', 'ai4sard');

// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
