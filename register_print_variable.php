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

    $address = str_replace(' ', '&nbsp;', $address);
    $country = str_replace(' ', '&nbsp;', $country);
?>        
    
<html>
    <head>
        <title>Confirm Registration</title>  
        <link type="text/css" rel="stylesheet" href="register_print_variable.css">  
    </head>  
    
    <body>
        <div class="container"> 
            <h1 class="container_title">Benvenuto/a <?php echo $surname . " " . $name?>!</h1>
            <p>Se i suoi dati sono corretti, proceda con la conferma della registrazione</p>
            <div class="user_details">
                <div class="input_box">
                    <span class="details">Typology User</span>
                    <input type="text" value=<?php echo $typology_user?>>
                </div>
                <div class="input_box">
                    <span class="details">Full Name</span>
                    <input type="text" value=<?php echo $name?>>
                </div> 
                <div class="input_box">
                    <span class="details">Surname</span>
                    <input type="text" value=<?php echo $surname?>>
                </div>
                <div class="input_box">
                    <span class="details">Address</span>
                    <input type="text" value=<?php echo $address?>>
                </div>
                <div class="input_box">
                    <span class="details">CAP</span>
                    <input type="text" value=<?php echo $CAP?>>
                </div>
                <div class="input_box">
                    <span class="details">Country</span>
                    <input type="text" value=<?php echo $country?>>
                </div>
                <div class="input_box">
                    <span class="details">Province</span>
                    <input type="text" value=<?php echo $province?>>
                </div>
                <div class="input_box">
                    <span class="details">Birth of Date</span>
                    <input type="date" value=<?php echo $birth_of_date?>>
                </div>
                <div class="input_box">
                    <span class="details">Phone Numbers</span>
                    <input type="text" value=<?php echo $phone?>>
                </div>
                <div class="input_box">
                    <span class="details">Fiscal Code</span>
                    <input type="text" value=<?php echo $fiscal_code?>>
                </div>
                <div class="input_box">
                    <span class="details">Email</span>
                    <input type="text" value=<?php echo $email?>>
                </div>
                <div class="input_box">
                    <span class="details">Password</span>
                    <input type="password" value=<?php echo $password?>>
                </div>
                <div class="input_box">
                    <span class="details">Confirm Password</span>
                    <input type="password" value=<?php echo $confirm_password?>>
                </div>
                <div class="button"> 
                    <input type="submit" value="Confirm Registration">
                </div>
            </div>    
        </div>
    </body>
</html>    