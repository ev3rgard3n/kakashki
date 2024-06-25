<?php
require_once "../connect.php";

    // Получение данных из формы
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Проверка данных в базе данных
    $result = $conn->query("SELECT * FROM User WHERE email = '$email' AND password='$password'");

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        $_SESSION["name"] = $row["name"];
        $_SESSION["email"] = $row["email"];

        print_r($_SESSION);
        echo "Авторизация успешна!";
        header("Location: http://localhost/templates/insex.php");
        
    } else {
        // Пользователь не найден
        echo "Пользователь не найден.";
        header("Location: http://localhost/login.php");
    }
?>