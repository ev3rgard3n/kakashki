<?php
require_once "../connect.php";

if (isset($_POST)) {
    $firstname = $_POST['firstname'];
    $secondname = $_POST['secondname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    print_r($firstname);
    print_r($secondname);
    print_r($email);
    print_r($password);

    $result = $conn->query("INSERT INTO User (firstname, name, email, password) VALUES ('$firstname', '$secondname', '$email', '$password')");
    header("Location: http://localhost/pornoSMishkami/login.php");
}
?>