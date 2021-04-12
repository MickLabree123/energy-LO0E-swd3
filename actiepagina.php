<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Acties</title>
</head>
<body>
<header id="homepage-header">
        <article class="homepage-logo">
            <img src="img/LOGO.png" height="100" alt="logo van rockhard energy">
        </article>
        <article class="homepage-webNav">
            <a href="homepage.php"><button>Home</button></a>
            <a href="Event.php"><button>Events</button></a>
            <a href="Actiepagina.php"><button>Acties</button></a>
            <a href="artiesten.php"><button>Artiesten</button></a>
            <a href="#"><button>Contact</button></a>
        </article>

<!-- hamburger menu -->
        <a href="#" id="openbtn" onclick="openBtn()"><i class="fas fa-bars"></i></a>
        <div id="menu" class="menu">
        <a href="#" class="closebtn" onclick="closeBtn()"><i class="fas fa-times"></i></a>
        <li><a href="homepagina.php">Home</a></li>
        <li><a href="Event.php">Events</a></li>
        <li><a href="Actiepagina.php">Acties</a></li>
        <li><a href="artiesten.php">Artiesten</a></li>
        <li><a href="#">Contact</a></li>
    </div>
</header>
<section class="text">
    <p>Acties en aanbiedingen op al onze producten.<br>Zoek hier de actie die bij u past!</p>
</section>
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

    <?php
    $sql = "SELECT titel, omschrijving, DATE_FORMAT(begindatum, '%d-%m-%Y') AS begindatum, DATE_FORMAT(einddatum, '%d-%m-%Y') AS einddatum
    FROM aanbiedingen
    WHERE aanbiedingen_id = 1";
    if($result = $conn->query($sql)) {
    while($row = $result->fetch_array(MYSQLI_NUM)) {
    echo "<section class='aanbieding1'>"."<br>".$row[0]."<br>".$row[1]."<br>".$row[2]."<br>".$row[3]."<br>"."<br>"."<img class='image1' src='img/Afbeeldingblik.jpg' alt='foto blikjes'>"."</section>";
    }
    }

    $sql = "SELECT titel, omschrijving, DATE_FORMAT(begindatum, '%d-%m-%Y') AS begindatum, DATE_FORMAT(einddatum, '%d-%m-%Y') AS einddatum
    FROM aanbiedingen
    WHERE aanbiedingen_id = 2";
    if($result = $conn->query($sql)) {
    while($row = $result->fetch_array(MYSQLI_NUM)) {
    echo "<section class='aanbieding1'>"."<br>".$row[0]."<br>".$row[1]."<br>".$row[2]."<br>".$row[3]."<br>"."<br>"."<img class='image2' src='img/HardRocktest.png' alt='foto blikjes'>"."</section>";
    }
    }
    ?>
    <?php
    $sql = "SELECT titel, omschrijving, DATE_FORMAT(begindatum, '%d-%m-%Y') AS begindatum, DATE_FORMAT(einddatum, '%d-%m-%Y') AS einddatum
    FROM aanbiedingen
    WHERE aanbiedingen_id = 3";
    if($result = $conn->query($sql)) {
    while($row = $result->fetch_array(MYSQLI_NUM)) {
    echo "<section class='aanbieding2'>"."<br>".$row[0]."<br>".$row[1]."<br>".$row[2]."<br>".$row[3]."<br>"."<br>"."<img class='image3' src='img/blikboven.jpg' alt='foto blikjes'>"."</section>";
    }
    }

    $sql = "SELECT titel, omschrijving, DATE_FORMAT(begindatum, '%d-%m-%Y') AS begindatum, DATE_FORMAT(einddatum, '%d-%m-%Y') AS einddatum
    FROM aanbiedingen
    WHERE aanbiedingen_id = 4";
    if($result = $conn->query($sql)) {
    while($row = $result->fetch_array(MYSQLI_NUM)) {
    echo "<section class='aanbieding2'>"."<br>".$row[0]."<br>".$row[1]."<br>".$row[2]."<br>".$row[3]."<br>"."<br>"."<img class='image4' src='img/Afbeeldingblik.jpg' alt='foto blikjes'>"."</section>";
    }
    }
   
    ?>
    <?php
    $sql = "SELECT titel, omschrijving, DATE_FORMAT(begindatum, '%d-%m-%Y') AS begindatum, DATE_FORMAT(einddatum, '%d-%m-%Y') AS einddatum
    FROM aanbiedingen
    WHERE aanbiedingen_id = 5";
    if($result = $conn->query($sql)) {
    while($row = $result->fetch_array(MYSQLI_NUM)) {
    echo "<section class='aanbieding3'>"."<br>".$row[0]."<br>".$row[1]."<br>".$row[2]."<br>".$row[3]."<br>"."<br>"."<img class='image5'src='img/HardRocktest.png' alt='foto blikjes'>"."</section>";
    }
    }

    $sql = "SELECT titel, omschrijving, DATE_FORMAT(begindatum, '%d-%m-%Y') AS begindatum, DATE_FORMAT(einddatum, '%d-%m-%Y') AS einddatum
    FROM aanbiedingen
    WHERE aanbiedingen_id = 6";
    if($result = $conn->query($sql)) {
    while($row = $result->fetch_array(MYSQLI_NUM)) {
    echo "<section class='aanbieding3'>"."<br>".$row[0]."<br>".$row[1]."<br>".$row[2]."<br>".$row[3]."<br>"."<br>"."<img class='image6' src='img/blikboven.jpg' alt='foto blikjes'>"."</section>";
    }
    }
   
    ?>
     <footer id="homepage-footer">
        <section id="socialMedia-homepage">
            <nav class="homepageEventLink">
                <a href="#">Events</a>
            </nav>
            <nav class="homepage-socialMediaLink">
                <ul class="homepage-socialLinkList">
                    <li><a href="#" class="fa fa-facebook"></a></li>
                    <li><a href="#" class="fa fa-instagram"></a></li>
                    <li><a href="#" class="fa fa-twitter"></a></li>
                    <li><a href="#" class="fa fa-youtube"></a></li>
                </ul>
            </nav>
        </section>
        <section class="contact-homepage">
            <h1>Neem contact op</h1>
            <p>tel: +31 612345678</p>
            <p>email: rockhard.contact@gmail.nl</p>
        </section>
    </footer>
    <script src="js/global.js"></script>
    <script src="https://kit.fontawesome.com/5b96b17e8a.js" crossorigin="anonymous"></script>
</body>
</html>




