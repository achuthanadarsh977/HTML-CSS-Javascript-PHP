<?php

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $email = $_POST['email'];
    $password = $_POST['password']

    if($email === "admin@example.com" && $password === "1234"){
        echo "<script>alert('Login successful!');</script>";
    }

    else{
        echo "<script>alert('Invalid Credentials!');</script>";
    }
}

?>