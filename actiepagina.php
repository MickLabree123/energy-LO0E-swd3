<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Acties</title>
</head>
<body>
    <?php


    $host = "localhost";
    $user = "root";
    $pass = "root";
    $database = "energy";

    $conn = new mysqli($host, $user, $pass, $database);
    if($conn->connect_error){
        echo $conn->connect_error;
    }
    ?>

    <article class= "aanbieding2">
    <?php
    $sql = "SELECT titel, omschrijving, DATE_FORMAT(begindatum, '%d-%m-%Y') AS begindatum, DATE_FORMAT(einddatum, '%d-%m-%Y') AS einddatum
    FROM aanbiedingen
    WHERE aanbiedingen_id = 1";
    if($result = $conn->query($sql)) {
    while($row = $result->fetch_array(MYSQLI_NUM)) {
    echo "<section class='aanbieding1'>".$row[0]."<br>".$row[1]."<br>".$row[2]."<br>".$row[3]."<br>"."<br>"."<img src='img/Afbeeldingblik.jpg' alt='foto blikjes'>"."</section>";
    }
    }

    $sql = "SELECT titel, omschrijving, DATE_FORMAT(begindatum, '%d-%m-%Y') AS begindatum, DATE_FORMAT(einddatum, '%d-%m-%Y') AS einddatum
    FROM aanbiedingen
    WHERE aanbiedingen_id = 2";
    if($result = $conn->query($sql)) {
    while($row = $result->fetch_array(MYSQLI_NUM)) {
    echo "<section class='aanbieding1'>".$row[0]."<br>".$row[1]."<br>".$row[2]."<br>".$row[3]."<br>"."<br>"."<img src='img/HardRocktest.png' alt='foto blikjes'>"."</section>";
    }
    }
   
    ?>
    
    </article> 
    
</body>
</html>



