<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="Anayawa, Mick, Sathyam, Max">
<meta name="description" content="homepage voor RockHard energy">
<meta name="keywords" content="energy, drink, rockhard, sports, drink">
<title>Rock Hard Energy</title>
<!-- google fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- css link -->
<link rel="stylesheet" type="text/css" href="css/home.css">
<link rel="stylesheet" href="css/contact.css">
<!-- JS link -->
<script src="JS/landing.js" type="text/javascript"></script>
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
        </article>

<!-- hamburger menu -->
    <a href="#" id="openbtn" onclick="openBtn()"><i class="fas fa-bars"></i></a>
    <div id="menu" class="menu">
        <a href="#" class="closebtn" onclick="closeBtn()"><i class="fas fa-times"></i></a>
        <li><a href="homepage.php">Home</a></li>
        <li><a href="Event.php">Events</a></li>
        <li><a href="Actiepagina.php">Acties</a></li>
        <li><a href="artiesten.php">Artiesten</a></li>
    </div>
</header>

    <main class="main-homepage">
        <section id="wieIsRockHard">
            <h1 class="homepage-header-about">Rock Hard</h1>
            <h3 class="homepage-about-subtitel">Over Rock Hard</h3>
            <p class="homepage-about-tekst">Rock Hard is een energy drink merk maar niet alleen dat, Rock Hard staat voor avontuur, positiviteit, stimulatie, motivatie. Wij laten je door middel van de gaafste en coolste evenementen zien dat Rock Hard niet alleen maar een energy drink is maar we ook een message meegeven aan iedereen die Rock Hard drinkt.</p>
        </section>

        <section id="homepage-slideShow">
            <div id="slideShow"></div>
        </section>
    </main>
    


    <section class="main-homepage2">
        <section class="homepage-blikjes">
            <img src="img/5.jpg" style="background-size: cover;" alt="blikjes rock hard">
        </section>
        
        <section id="ingredienten">
            <h1 class="homepage-header-ingredienten">Ingredienten</h1>
            <p class="homepage-ingredienten-tekst">Wij gebruiken een special geselecteerde lijst van ingredienten zodat jij de lekkerste energy drank die je ooit hebt gedronken kan drinken. Onze hoofdingredienten zijn caffeine, taurine, vitamine B, suiker en een speciaal bronwater uit Oost-Vlaanderen. Cafeïne stond bij onze voorouders al bekend om haar stimulerende effecten op het menselijke lichaam. Zij consumeerden het stofje via natuurlijke bronnen, zoals thee, koffie, cacaobonen en kolanoten. Vitaminen zijn essentiële micronutriënten voor het behoud van de normale lichaamsfuncties. De suiker die we voor Rock Hard energy gebruiken komt van suikerriet. En als laatste hoofd ingredient natuurlijk water.</p>
        </section>
    </section>

    <div class="container">
        <div style="text-align:center">
        <h2>Neem contact op met ons!!</h2>
        <p>Kom langs bij ons bedrijf of laat een bericht ach:</p>
        </div>
        <div class="row">
        <div class="column">
            <img src="img/5.JPG" style="width:100%">
        </div>
        <div class="column">
            <form action="/action_page.php">
            <label for="fname">Voornaam</label>
            <input type="text" id="fname" name="Voornaam" placeholder="Your name..">
            <label for="lname">Achternaam</label>
            <input type="text" id="lname" name="Achternaam" placeholder="Your last name..">
            <label for="country">Land</label>
            <select id="country" name="Land">
                <option value="europe">Netherlands</option>
                <option value="australia">Duitsland</option>
                <option value="canada">Belgie</option>
                <option value="usa">Frankrijk</option>
            </select>
            <label for="Onderwerp">Onderwerp</label>
            <textarea id="Onderwerp" name="subject" placeholder="Write something.." style="height:170px"></textarea>
            <input type="Versturen" value="Versturen">
            </form>
        </div>
        </div>
    </div>

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