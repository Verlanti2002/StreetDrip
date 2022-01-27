<?php
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_crypted = sha1($password);

    echo "Email: " . $email . "<br>";
    echo "Password: " . $password . "<br>";
    echo "Password criptata: " . $password_crypted . "<br>"; 
?>        