<?php
    $typology_user = $_POST['typology_user'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $address = $_POST['address'];
    $CAP = $_POST['CAP'];
    $country = $_POST['country'];
    $province = $_POST['province'];
    $phone = $_POST['phone'];
    $birth_of_date = $_POST['birth_of_date'];
    $fiscal_code = $_POST['fiscal_code'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $crypted_password = sha1($password);
    $confirm_password = $_POST['confirm_password'];
    $confirm_crypted_password = sha1($confirm_password);
        
    echo "Typology_user: " . $typology_user . "<br>";
    echo "Name: " . $name . "<br>";
    echo "Surname: " . $surname . "<br>"; 
    echo "Address: " . $address . "<br>";
    echo "CAP: " . $CAP . "<br>";
    echo "Country: " . $country . "<br>";
    echo "Province: " . $province . "<br>";
    echo "Phone: " . $phone . "<br>";
    echo "Birth of date: " . $birth_of_date . "<br>";
    echo "Fiscal code: " . $fiscal_code . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Password: " . $password . "<br>";
    echo "Password crypted: " . $password_crypted . "<br>";
    echo "Confirm password: " . $confirm_password . "<br>";
    echo "Confirm password crypted: " . $confirm_password_crypted;
?>