<?php
    $email = $_POST['email'];
    $password = $_POST['password'];
    $crypted_password = sha1($password);
?>        

<html>
    <head>
        <title>Confirm Login</title>  
        <link type="text/css" rel="stylesheet" href="login_print_variable.css">  
    </head>  
    
    <body>
        <div class="container"> 
            <h1 class="container_title">Benvenuto/a <?php echo $email?>!</h1>
            <p>Queste sono le sue credenziali di login</p>
            <div class="input_box">
                <span class="details">Email</span>
                <input type="text" value=<?php echo $email?>>
            </div>
            <div class="input_box">
                <span class="details">Password</span>
                <input type="password" value=<?php echo $password?>>
            </div>
            <div class="button"> 
                <input type="submit" value="Confirm Login">
            </div>
        </div>       
    </body>
</html>