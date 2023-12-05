<?php

$connect = mysqli_connect('localhost', 'root', '', 'ai4sard');

// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
