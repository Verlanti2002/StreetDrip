<!DOCTYPE html>
<?php

    error_reporting(E_ERROR | E_PARSE);

    //Se è una richiesta GET (quando apro la pagina) devo disattivare l'error text
    if ($_SERVER["REQUEST_METHOD"] === "GET"){
        $active=0;
        $error_text = "";
    }else{
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

        if ($password != $confirm_password){
          $active = 1;
          $error_text = "Le password non corrispondono!";
        } else {
          $conn = mysqli_connect('localhost', 'root', '', 'tepsit_project');

          $sql = "INSERT INTO users VALUES('', '$typology_user', '$name', '$surname', '$address', '$CAP', '$country', '$province', '$phone', '$birth_of_date', '$fiscal_code', '$email','$crypted_password', '$confirm_crypted_password')";

          if (!$conn) {
              //die("Connection failed: " . mysqli_connect_error());
              $active = 1;
              $error_text = "Errore di connessione al database!";
          } else {
              $active = 2;
              $result = mysqli_query($conn, $sql);  
              $error_text = "Utente registrato correttamente!";
          }
          
          mysqli_close($conn);
        }
    }
?>

<html>
    <head>
        <title>StreetDrip: Sign Up</title>
        <link type="text/css" rel="stylesheet" href="registration_progetto.css"> 
    </head>

    <body>
        <div class="container">
            <div class="alert<?php if ($active == 2) echo '_green'; elseif ($active == 1) echo '_red'; ?>">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                <span style="<?php if ($active == 0) echo 'display: none;'; ?>"><?php if ($error_text != "") echo $error_text; ?></span>
            </div>
            <div class="title"><h1>Sign Up</h1></div>
            <form action="#" method="post">
                <div class="typology">
                    <span class="typology_details">Typology User</span>
                </div>    
                <select id="select" name="typology_user">
                    <option>Administrator</option>
                    <option>Client</option>
                </select>    
                <div class="user_details">      
                    <div class="input_box">
                        <span class="details">Full Name</span>
                        <input type="text" name="name" placeholder="Enter your name" required>
                    </div>  
                    <div class="input_box">
                        <span class="details">Surname</span>
                        <input type="text" name="surname" placeholder="Enter your surname" required>
                    </div>
                    <div class="input_box">
                        <span class="details">Address</span>
                        <input type="text" name="address" placeholder="Enter your address" required>
                    </div>
                    <div class="input_box">
                        <span class="details">CAP</span>
                        <input type="text" name="CAP" placeholder="Enter your CAP" maxlength="5" required>
                    </div>
                    <div class="input_box">
                        <span class="details">Country</span>
                        <input type="text" name="country" placeholder="Enter your country" required>
                    </div>
                    <div class="input_box">
                        <span class="details">Province</span>
                        <input type="text" name="province" placeholder="Enter your province" maxlength="2" required>
                    </div>
                    <div class="input_box">
                        <span class="details">Birth of Date</span>
                        <input type="date" name="birth_of_date" placeholder="Enter your birth of date" style="color: grey" required>
                    </div>
                    <div class="input_box">
                        <span class="details">Phone Numbers</span>
                        <input type="text" name="phone" placeholder="Enter your number" maxlength="10" required>
                    </div>
                    <div class="input_box">
                        <span class="details">Fiscal Code</span>
                        <input type="text" name="fiscal_code" placeholder="Enter your fiscal code" maxlength="16" required>
                    </div>
                    <div class="input_box">
                        <span class="details">Email</span>
                        <input type="text" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="input_box">
                        <span class="details">Password</span>
                        <input type="password" name="password" placeholder="Enter your password" required>
                    </div>
                    <div class="input_box">
                        <span class="details">Confirm Password</span>
                        <input type="password" name="confirm_password" placeholder="Confirm your password" required>
                    </div>
                </div> 
                <div class="button"> 
                    <input type="submit" value="Sign Up">
                </div>
            </form>
            <div class="sign_in">
                    <p>Have already an account? <a href="login_progetto.php" target="_blank">Sign In</a></p>    
            </div> 
        </div>        
    </body> 
</html>