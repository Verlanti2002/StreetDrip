<!DOCTYPE html>
<?php 
    error_reporting(E_ERROR | E_PARSE);

    if ($_SERVER["REQUEST_METHOD"] === "GET"){
        $active=0;
        $error_text = "";
    }else{
        $email = $_POST['email'];
        $password = $_POST['password'];
        $crypted_password = sha1($password);

        $conn = mysqli_connect('localhost', 'root', '', 'tepsit_project');

        if (!$conn) {
            //die("Connection failed: " . mysqli_connect_error());
            $active = 1;
            $error_text = "Errore di connessione al database!";
        } else{

            

            $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$crypted_password'";
            //$sql = "SELECT * FROM users WHERE email = '' or 1 = 1;--' AND password = '$crypted_password'";
            
            $result = mysqli_query($conn, $sql);

            if ($result){
                if (mysqli_num_rows($result)){
                    $active = 2;
                    $error_text = "Accesso eseguito correttamente!";
                    header("Location: homepage_progetto.html");
                } else{
                    $active = 1;
                    $error_text = "Utente non trovato, errore di accesso!";
                }
            }else{
                $active = 1;
                $error_text = "Stronzo, hai provato l'SQL injection!";
            }
        }

        mysqli_close($conn);
    }
?>
    <html>
        <head>
            <title>StreetDrip: Sign In</title>
            <link rel="stylesheet" type="text/css" href="login_progetto.css">
        </head>

        <body>
            <div class="container">
                <div class="alert<?php if ($active == 2) echo '_green'; elseif ($active == 1) echo '_red'; ?>">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                    <span style="<?php if ($active == 0) echo 'display: none;'; ?>"><?php if ($error_text != "") echo $error_text; ?></span>
                </div>
                <div class="title"><h1>Login</h1></div>
                <form action="#" method="post">
                    <div class="input_box">
                        <span class="details">Email</span> 
                        <input type="text" name="email" placeholder="Email" required>
                    </div>
                    <div class="input_box">
                        <span class="details">Password</span> 
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="button">
                        <input type="submit" value="Login">
                    </div>
                </form>
                <div class="sign_up">
                    <p>Don't have an account? <a href="registration_progetto.php" target="_blank">Sign Up</a></p>    
                </div>    
            </div>
        </body>
    </html>