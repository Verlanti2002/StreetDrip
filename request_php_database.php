<?php

    $conn = mysqli_connect("localhost", "root", "", "opere_arte");
    
    if(!$conn){
        echo "Errore di connesione al database!";
    }

    $sql = "SELECT DISTINCT citta FROM opera;"; 

    $result = mysqli_query($conn, $sql);

    $n_row_of_select = mysqli_num_rows($result);

    if ($n_row_of_select > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $city[] = $row["citta"];
        }
    } else {
        echo "Non ci sono città inserite!";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opere d'Arte</title>
</head>
<body>
    <h1>Inserire gli estremi entro cui deve essere compreso l'anno di nascita dell'autore e la città in cui effettuare la ricerca</h1>
    <span>Inserire l'intervallo di tempo in cui eseguire la ricerca:</span>
    <br>
    <br>
    <form action="response_php_database.php" method="POST" target="_blank">
        <input type="text" name="first_year" placeholder="Inserire il primo anno">
        <input type="text" name="second_year" placeholder="Inserire il secondo anno">
        <br>
        <br>
        <span>Selezionare la città:</span>
        <br>
        <br>
        <select>
            <?php foreach ($city as $citta): ?>
            <option><?=$citta?></option>
            <?php endforeach; ?>
        </select>
        <br>
        <br>
        <input type="submit" value="Invia">
    </form>        
</body>
</html>

<?php

mysqli_close($conn);

?>