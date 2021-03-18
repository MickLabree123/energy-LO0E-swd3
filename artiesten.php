<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Anayawa, Mick, Sathyam, Max">
    <meta name="description" content="artiesten van RockHard energy">
    <meta name="keywords" content="energy, drink, rockhard, sports, drink, artiesten">
    <link rel="stylesheet" href="css/artiest.css">
    <title>Artiesten</title>
</head>
<body>
    <?php 
        $server = "localhost";
        $user = "root";
        $password = "root";
        $database = "energy";
        
        $conn = new mysqli($server, $user, $password, $database);
    ?>

    <header id="artiesten-header">
        <article class="artiest1">
            <?php
                $sql = "SELECT * FROM artiesten LIMIT 1";
                if($result = $conn->query($sql)) {
                    while($row = $result->fetch_array(MYSQLI_NUM)) {
                        echo $row[1]."</br>";
                    }
                }
            ?>
        </article>
    </header>
</body>
</html>