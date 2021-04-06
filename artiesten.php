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
    <link rel="stylesheet" href="css/landing.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

<header id="homepage-header">
        <article class="homepage-logo">
            <img src="img/LOGO.png" height="100" alt="logo van rockhard energy">
        </article>
        <article class="homepage-webNav">
            <a href="homepage.php"><button>Home</button></a>
            <a href="#"><button>Events</button></a>
            <a href="#"><button>Acties</button></a>
            <a href="artiesten.php"><button>Artiesten</button></a>
            <a href="#"><button>Contact</button></a>
        </article>
        <article class="homepage-dropDownIcon">
            <p id="homepage-dropdown-btn">&#9776;</p>
        </article>
        
</header>

    <article class='headline-tekst'>
        <h1>Onze Artiesten</h1>
    </article>

    <article class="artiest1">
        <?php
            $sql = "SELECT naam, statement FROM artiesten LIMIT 3";
            if($result = $conn->query($sql)) {
                while($row = $result->fetch_array(MYSQLI_NUM)) {
                    echo "<section class='artiest-tekst'/>".$row[0]."</br>",$row[1]."</section>";
                }
            }
            
        ?>
    </article>
    <article class="artiest-fotos">
        <img src="img/Elvis-Presley.jpeg" alt="">
        <img src="img/tonesAndI.jpg" alt="">
        <img src="img/Postmalone.jpg" alt="">
    </article>

    <article class="artiest1">
        <?php
            $sql = "SELECT naam, statement FROM artiesten LIMIT 3 OFFSET 3";
            if($result = $conn->query($sql)) {
                while($row = $result->fetch_array(MYSQLI_NUM)) {
                    echo "<section class='artiest-tekst'/>".$row[0]."</br>",$row[1]."</section>";
                }
            }
            
        ?>
    </article>
    <article class="artiest-fotos2">
        <img src="img/mileyCyrus.jpg" alt="">
        <img src="img/rapperSjors.png" alt="">
        <img src="img/duaLipa.jpg" alt="">
    </article>

    <footer id="homepage-footer">
        <section id="socialMedia-homepage">
            <nav class="homepageEventLink">
                <a class="dreii" href="#">Events</a>
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
    
</body>
</html>