<?php

session_start();

$conn = new mysqli("localhost", "root", "", "Mishki");
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
?>