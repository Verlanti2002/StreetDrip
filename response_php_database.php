<?php

$first_year = $_POST['first_year'];
$second_year = $_POST['second_year'];

$conn = mysqli_connect("localhost", "root", "", "opere_arte");
    
if(!$conn){
    echo "Errore di connesione al database!";
}

$sql = "SELECT autore.cognome, opera.nome, opera.categoria FROM autore, opera WHERE autore.codA = opera.autore_fk AND opera.citta = 'Roma' AND autore.anno BETWEEN '$first_year' AND '$second_year' ORDER BY autore.cognome;"; 

$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opere d'Arte</title>
    <link type="text/css" rel="stylesheet" href="response_php_database.css"> 
</head>
<body>
    <h1>Ecco le opere presenti a Roma degli autori nati tra il <?php echo $first_year ?> e il <?php echo $second_year ?></h1>
    <table><br>
        <?php
            $n_row = mysqli_num_rows($result);

            if ($n_row > 0) {
                echo "<tr><th>Autore</th> <th>Opera</th> <th>Categoria</th></tr>";
                
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr> <td>", $row["cognome"], "</td> <td>", $row["nome"], "</td> <td>", $row["categoria"], "</td> </tr>\n";
                }
            } else {
                echo "Non sono presenti opere realizzate a Roma dagli autori nati nell'intervallo inserito!";
            } 
        ?>
    </table>
</body>
</html>

<?php

mysqli_close($conn);

?>