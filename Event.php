<html lang="NL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="language" content="NL"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="energydrink">
    <meta name="author" content="sathyam, Anayawa, Mick, Max">
    <meta name="keywords" content="Rock hard, energy, drink, event">
    <title>Rock Hard</title>
    <link rel="stylesheet" type="text/css" href="css\Event.css">
    <script src="JS\Event.js"></script>
    <script src="..\Website\energy.sql"></script>
    <!-- google fonts -->
 <link rel="preconnect" href="https://fonts.gstatic.com">
 <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<style> 
<?php include "css\Event.css"; ?>
</style>


<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "energy";
$conn = new mysqli($host, $user, $pass, $database);
if ($conn->connect_error){
    echo $conn->connect_error;
}


/*----------------------------------------------------------------*/
/* Alle Locaties */
$locatie01 ="SELECT plaatsnaam, gebouw FROM locaties LIMIT 1 OFFSET 0 ";
$locatie02 ="SELECT plaatsnaam, gebouw FROM locaties LIMIT 1 OFFSET 1 ";
$locatie03 ="SELECT plaatsnaam, gebouw FROM locaties LIMIT 1 OFFSET 2 ";
$locatie04 ="SELECT plaatsnaam, gebouw FROM locaties LIMIT 1 OFFSET 3 ";
$locatie05 ="SELECT plaatsnaam, gebouw FROM locaties LIMIT 1 OFFSET 4 ";
$locatie06 ="SELECT plaatsnaam, gebouw FROM locaties LIMIT 1 OFFSET 5 ";
$locatie07 ="SELECT plaatsnaam, gebouw FROM locaties LIMIT 1 OFFSET 6 ";
$locatie08 ="SELECT plaatsnaam, gebouw FROM locaties LIMIT 1 OFFSET 7 ";
$locatie09 ="SELECT plaatsnaam, gebouw FROM locaties LIMIT 1 OFFSET 8 ";
$locatie010 ="SELECT plaatsnaam, gebouw FROM locaties LIMIT 1 OFFSET 9 ";

/* Locatie 1 */
if ($result = $conn->query($locatie01)){
  while ($row = $result->fetch_array()){
    $locatie1 = "<section class= qwerty>".$row[0]."  "." || "."  ".$row[1]."</section>";
  } $result->close();
} else { echo"verlopen";}

/* Locatie 2 */
if ($result = $conn->query($locatie02)){
  while ($row = $result->fetch_array()){
    $locatie2 = "<section class= qwerty>".$row[0]."  "." || "."  ".$row[1]."</section>";
  } $result->close();
} else { echo"verlopen";}

/* Locatie 3 */
if ($result = $conn->query($locatie03)){
  while ($row = $result->fetch_array()){
    $locatie3 = "<section class= qwerty>".$row[0]."  "." || "."  ".$row[1]."</section>";
  } $result->close();
} else { echo"verlopen";}

/* Locatie 4 */
if ($result = $conn->query($locatie04)){
  while ($row = $result->fetch_array()){
    $locatie4 = "<section class= qwerty>".$row[0]."  "." || "."  ".$row[1]."</section>";
  } $result->close();
} else { echo"verlopen";}

/* Locatie 5 */
if ($result = $conn->query($locatie05)){
  while ($row = $result->fetch_array()){
    $locatie5 = "<section class= qwerty>".$row[0]."  "." || "."  ".$row[1]."</section>";
  } $result->close();
} else { echo"verlopen";}

/* Locatie 6 */
if ($result = $conn->query($locatie06)){
  while ($row = $result->fetch_array()){
    $locatie6 = "<section class= qwerty>".$row[0]."  "." || "."  ".$row[1]."</section>";
  } $result->close();
} else { echo"verlopen";}

/* Locatie 7 */
if ($result = $conn->query($locatie07)){
  while ($row = $result->fetch_array()){
    $locatie7 = "<section class= qwerty>".$row[0]."  "." || "."  ".$row[1]."</section>";
  } $result->close();
} else { echo"verlopen";}

/* Locatie 8 */
if ($result = $conn->query($locatie08)){
  while ($row = $result->fetch_array()){
    $locatie8 = "<section class= qwerty>".$row[0]."   "." || "."  ".$row[1]."</section>";
  } $result->close();
} else { echo"verlopen";}

/* Locatie 9 */
if ($result = $conn->query($locatie09)){
  while ($row = $result->fetch_array()){
    $locatie9 = "<section class= locatie>".$row[0]."  "." || "."  ".$row[1]."</section>";
  } $result->close();
} else { echo"verlopen";}

/* Locatie 10 */
if ($result = $conn->query($locatie010)){
  while ($row = $result->fetch_array()){
    $locatie10 = "<section class= locatie>".$row[0]."  "." || "."  ".$row[1]."</section>";
  } $result->close();
} else { echo"verlopen";}


/*----------------------------------------------------------------*/
/*alle artiesten*/
$artiest01 = "SELECT naam FROM artiesten where actief = 1 limit 1 OFFSET 0";
$artiest02 = "SELECT naam FROM artiesten where actief = 1 limit 1 OFFSET 1";
$artiest03 = "SELECT naam FROM artiesten where actief = 1 limit 1 OFFSET 2";
$artiest04 = "SELECT naam FROM artiesten where actief = 1 limit 1 OFFSET 3";
$artiest05 = "SELECT naam FROM artiesten where actief = 1 limit 1 OFFSET 4";
$artiest06 = "SELECT naam FROM artiesten where actief = 1 limit 1 OFFSET 5";
$artiest07 = "SELECT naam FROM artiesten where actief = 1 limit 1 OFFSET 6";
$artiest08 = "SELECT naam FROM artiesten where actief = 1 limit 1 OFFSET 7";
$artiest09 = "SELECT naam FROM artiesten where actief = 1 limit 1 OFFSET 8";
$artiest010 = "SELECT naam FROM artiesten where actief = 1 limit 1 OFFSET 9";


/* artiest 1 */
if ($result = $conn->query($artiest01)){
  while ($row = $result->fetch_array()){
    $artiest1 = "<section class= qwerty>".$row[0]."</section>";
  } $result->close();
} else { echo"fout";}

/* artiest 2 */
if ($result = $conn->query($artiest02)){
  while ($row = $result->fetch_array()){
    $artiest2 = "<section class= qwerty>".$row[0]."</section>";
  } $result->close();
} else { echo"fout";}

/* artiest 3 */
if ($result = $conn->query($artiest03)){
  while ($row = $result->fetch_array()){
    $artiest3 = "<section class= qwerty>".$row[0]."</section>";
  } $result->close();
} else { echo"fout";}

/* artiest 4 */
if ($result = $conn->query($artiest04)){
  while ($row = $result->fetch_array()){
    $artiest4 = "<section class= qwerty>".$row[0]."</section>";
  } $result->close();
} else { echo"fout";}

/* artiest 5 */
if ($result = $conn->query($artiest05)){
  while ($row = $result->fetch_array()){
    $artiest5 = "<section class= qwerty>".$row[0]."</section>";
  } $result->close();
} else { echo"fout";}

/* artiest 6 */
if ($result = $conn->query($artiest06)){
  while ($row = $result->fetch_array()){
    $artiest6 = "<section class= qwerty>".$row[0]."</section>";
  } $result->close();
} else { echo"fout";}

/* artiest 7 */
if ($result = $conn->query($artiest07)){
  while ($row = $result->fetch_array()){
    $artiest7 = "<section class= qwerty>".$row[0]."</section>";
  } $result->close();
} else { echo"fout";}

/* artiest 8 */
if ($result = $conn->query($artiest08)){
  while ($row = $result->fetch_array()){
    $artiest8 = "<section class= qwerty>".$row[0]."</section>";
  } $result->close();
} else { echo"fout";}

/* artiest 9 */
if ($result = $conn->query($artiest09)){
  while ($row = $result->fetch_array()){
    $artiest9 = "<section class= qwerty>".$row[0]."</section>";
  } $result->close();
} else { echo"fout";}

/* artiest 10 */
if ($result = $conn->query($artiest010)){
  while ($row = $result->fetch_array()){
    $artiest10 = "<section class= qwerty>".$row[0]."</section>";
  } $result->close();
} else { echo"fout";}


$datum01 = " SELECT DATE_FORMAT(datum, '%d %M %Y') AS datum 
FROM locaties, evenementen, artiesten where actief = 1 LIMIT 1 OFFSET 0 ";
$datum02 = " SELECT DATE_FORMAT(datum, '%d %M %Y') AS datum 
FROM locaties, evenementen, artiesten where actief = 1 LIMIT 1 OFFSET 1 ";
$datum03 = " SELECT DATE_FORMAT(datum, '%d %M %Y') AS datum 
FROM locaties, evenementen, artiesten where actief = 1 LIMIT 1 OFFSET 2 ";
$datum04 = " SELECT DATE_FORMAT(datum, '%d %M %Y') AS datum 
FROM locaties, evenementen, artiesten where actief = 1 LIMIT 1 OFFSET 3 ";
$datum05 = " SELECT DATE_FORMAT(datum, '%d %M %Y') AS datum 
FROM locaties, evenementen, artiesten where actief = 1 LIMIT 1 OFFSET 4 ";
$datum06 = " SELECT DATE_FORMAT(datum, '%d %M %Y') AS datum 
FROM locaties, evenementen, artiesten where actief = 1 LIMIT 1 OFFSET 5 ";
$datum07 = " SELECT DATE_FORMAT(datum, '%d %M %Y') AS datum 
FROM locaties, evenementen, artiesten where actief = 1 LIMIT 1 OFFSET 6 ";
$datum08 = " SELECT DATE_FORMAT(datum, '%d %M %Y') AS datum 
FROM locaties, evenementen, artiesten where actief = 1 LIMIT 1 OFFSET 7 ";
$datum09 = " SELECT DATE_FORMAT(datum, '%d %M %Y') AS datum 
FROM locaties, evenementen, artiesten where actief = 1 LIMIT 1 OFFSET 8 ";
$datum010 = " SELECT DATE_FORMAT(datum, '%d %M %Y') AS datum 
FROM locaties, evenementen, artiesten where actief = 1 LIMIT 1 OFFSET 9 ";


if ($result = $conn->query($datum01)){
  while ($row = mysqli_fetch_assoc($result)){
    $datum1 = "<section class= qwerty>".$row["datum"]."<br>"."</section>";
  } $result->close();
} else { echo"fout";}


if ($result = $conn->query($datum02)){
  while ($row = mysqli_fetch_assoc($result)){
    $datum2 = "<section class= qwerty>".$row["datum"]."<br>"."</section>";
  } $result->close();
} else { echo"fout";}

if ($result = $conn->query($datum03)){
  while ($row = mysqli_fetch_assoc($result)){
    $datum3 = "<section class= qwerty>".$row["datum"]."<br>"."</section>";
  } $result->close();
} else { echo"fout";}

if ($result = $conn->query($datum04)){
  while ($row = mysqli_fetch_assoc($result)){
    $datum4 = "<section class= qwerty>".$row["datum"]."<br>"."</section>";
  } $result->close();
} else { echo"fout";}

if ($result = $conn->query($datum05)){
  while ($row = mysqli_fetch_assoc($result)){
    $datum5 = "<section class= qwerty>".$row["datum"]."<br>"."</section>";
  } $result->close();
} else { echo"fout";}

if ($result = $conn->query($datum06)){
  while ($row = mysqli_fetch_assoc($result)){
    $datum6 = "<section class= qwerty>".$row["datum"]."<br>"."</section>";
  } $result->close();
} else { echo"fout";}

if ($result = $conn->query($datum07)){
  while ($row = mysqli_fetch_assoc($result)){
    $datum7 = "<section class= qwerty>".$row["datum"]."<br>"."</section>";
  } $result->close();
} else { echo"fout";}

if ($result = $conn->query($datum08)){
  while ($row = mysqli_fetch_assoc($result)){
    $datum8 = "<section class= qwerty>".$row["datum"]."<br>"."</section>";
  } $result->close();
} else { echo"fout";}

if ($result = $conn->query($datum09)){
  while ($row = mysqli_fetch_assoc($result)){
    $datum9 = "<section class= qwerty>".$row["datum"]."<br>"."</section>";
  } $result->close();
} else { echo"fout";}

if ($result = $conn->query($datum010)){
  while ($row = mysqli_fetch_assoc($result)){
    $datum10 = "<section class= qwerty>".$row["datum"]."<br>"."</section>";
  } $result->close();
} else { echo"fout";}



/**/
?>
<!------------------------------------------------------------------------------------------>
<!------------------------------------------------------------------------------------------>
<!------------------------------------------------------------------------------------------>
<header id="homepage-header">
        <article class="homepage-logo">
            <img src="img\logo.png" height="100" alt="rockhard energy">
        </article>
        <article class="homepage-webNav">
            <a href="homepage.php"><button>Home</button></a>
            <a href="Event.php"><button>Events</button></a>
            <a href="actiepagina.php"><button>Acties</button></a>
            <a class ="contact"  href="artiesten.php"><button>Artiesten</button></a>
         
        </article>
        <article class="homepage-dropDownIcon">
            <p id="homepage-dropdown-btn">&#9776;</p>
        </article>
    </header>


<section id="EventZoeken">
<section class="Evenementen">
   <div class="left">
      <input type="text" id="mySearch" onkeyup="myFunction()" placeholder="locatie" />

       <ul id="Locatie">
   <li><a> <button data-number="1" class="locatie1 selectSection active"  href="#" onclick="openNav()"><?php echo $locatie1?></button></a></li>
   <li><a> <button data-number="2" class="locatie2 selectSection"   href="#" onclick="openNav()"><?php echo $locatie2?></button></a></li>
   <li><a> <button data-number="3" class="locatie3 selectSection"   href="#" onclick="openNav()"><?php echo $locatie3?></button></a></li>
   <li><a> <button data-number="4"class="locatie4 selectSection"  href="#" onclick="openNav()"><?php echo $locatie4?></button></a></li>
   <li><a> <button data-number="5"class="locatie5 selectSection"  href="#" onclick="openNav()"><?php echo $locatie5?></button></a></li>
   <li><a> <button data-number="6"class="locatie6 selectSection"  href="#" onclick="openNav()"><?php echo $locatie6?></button></a></li>  
   <li><a> <button data-number="7"class="locatie7 selectSection"  href="#" onclick="openNav()"><?php echo $locatie7?></button></a></li>
   <li><a> <button data-number="8"class="locatie8 selectSection"  href="#" onclick="openNav()"><?php echo $locatie8?></button></a></li>
   <li><a> <button data-number="9"class="locatie9 selectSection"  href="#" onclick="openNav9()"><?php echo $locatie9?></button></a></li>
   <li><a> <button data-number="10"class="locatie10 selectSection" href="#" onclick="openNav()"><?php echo $locatie10?></button></a></li>
        </ul>
   </div>

  <div class="right">
  <div class="contentSection">



<!--event 1----------------------------------------------------------------------------------->
<div class="content" data-number="1">
<div id="InfoOverEvenement1" class="OverEvenement">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav1()">&times;</a>
<div class="OverEvenement-text">
     
                                <article class="OverEvenement-locatie">
                                        <h2><?php echo $locatie1?></h2>
                                </article>
<article>                        
  <h2>Artiesten</h2>
   

<div class="container">

<section class="AlleTijdenVanArtiest">
<div class="mySlides ArtiestTijd1">  
    <p><?php echo $datum1?></p>
</div>
<div class="mySlides ArtiestTijd1">
    <p><?php echo $datum2?></p>
</div>
<div class="mySlides ArtiestTijd1">
    <p><?php echo $datum3?></p>
</div>
<div class="mySlides ArtiestTijd1">
    <p><?php echo $datum4?></p>
</div>
<div class="mySlides ArtiestTijd1">
    <p><?php echo $datum5?></p>
</div>
<div class="mySlides ArtiestTijd1">
    <p><?php echo $datum6?></p>
</div>
<div class="mySlides ArtiestTijd1">
    <p><?php echo $datum7?></p>
</div>
<div class="mySlides ArtiestTijd1">
    <p><?php echo $datum8?></p>
</div>
<div class="mySlides ArtiestTijd1">
    <p></p>
</div>
<div class="mySlides ArtiestTijd1">
    <p></p>
</div>
</section>

<div class="row">
  <div class="column">
    <a class="demo cursor TijdArtiest1" onclick="currentSlide1(1)" ><?php echo $artiest1?></a>
  </div>
  <div class="column">
    <a class="demo cursor TijdArtiest1" onclick="currentSlide1(2)"><?php echo $artiest2?></a>
  </div>
  <div class="column">
   <a class="demo cursor TijdArtiest1" onclick="currentSlide1(3)"><?php echo $artiest3?></a>
  </div>
  <div class="column">
  <a class="demo cursor TijdArtiest1"  onclick="currentSlide1(4)"><?php echo $artiest4?></a>
  </div>
  <div class="column">
  <a class="demo cursor TijdArtiest1"  onclick="currentSlide1(5)"><?php echo $artiest5?></a>
  </div>
  <div class="column">
  <a class="demo cursor TijdArtiest1" onclick="currentSlide1(6)"><?php echo $artiest6?></a>
  </div>
  <div class="column">
  <a class="demo cursor TijdArtiest1" onclick="currentSlide1(7)"><?php echo $artiest7?></a>
  </div>
  <div class="column">
  <a class="demo cursor TijdArtiest1" onclick="currentSlide1(8)"></a>
  </div>
  <div class="column">
  <a class="demo cursor TijdArtiest1" onclick="currentSlide1(9)"></a>
  <div class="column">
  <a class="demo cursor TijdArtiest1" onclick="currentSlide1(10)"></a>
  </div>
  </div>

</div>
</div>

 </article>

                                          <article class="OverEvenement-sponsor">
                                          <a href="#">mede mogelijk gemaakt door Hard Rock</a>
                                          </article>
</div>
</div>
</div>



<!--event 2-------------------------------------------------------------------------------------->
  <div class="content" data-number="2">
  <div id="InfoOverEvenement2" class="OverEvenement" >
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav2()">&times;</a>
    <div class="OverEvenement-text">
                                                <article class="OverEvenement-locatie">
                                                <h2><?php echo $locatie1?></h2>
                                                </article>

<article>                        
     <h2>Artiesten</h2>
   


     <div class="container">

<section class="AlleTijdenVanArtiest">
<div class="mySlides ArtiestTijd2">  
    <p><?php echo $datum1?></p>
</div>
<div class="mySlides ArtiestTijd2">
    <p><?php echo $datum2?></p>
</div>
<div class="mySlides ArtiestTijd2">
    <p><?php echo $datum3?></p>
</div>
<div class="mySlides ArtiestTijd2">
    <p><?php echo $datum4?></p>
</div>
<div class="mySlides ArtiestTijd2">
    <p><?php echo $datum5?></p>
</div>
<div class="mySlides ArtiestTijd2">
    <p><?php echo $datum6?></p>
</div>
<div class="mySlides ArtiestTijd2">
    <p><?php echo $datum7?></p>
</div>
<div class="mySlides ArtiestTijd2">
    <p><<?php echo $datum8?>/p>
</div>
<div class="mySlides ArtiestTijd2">
    <p></p>
</div>
<div class="mySlides ArtiestTijd2">
    <p></p>
</div>
</section>

<div class="row">
  <div class="column">
    <a class="demo cursor TijdArtiest2" onclick="currentSlide2(1)" ><?php echo $artiest1?></a>
  </div>
  <div class="column">
    <a class="demo cursor TijdArtiest2" onclick="currentSlide2(2)"><?php echo $artiest2?></a>
  </div>
  <div class="column">
   <a class="demo cursor TijdArtiest2" onclick="currentSlide2(3)"><?php echo $artiest3?></a>
  </div>
  <div class="column">
  <a class="demo cursor TijdArtiest2"  onclick="currentSlide2(4)"><?php echo $artiest4?></a>
  </div>
  <div class="column">
  <a class="demo cursor TijdArtiest2"  onclick="currentSlide2(5)"><?php echo $artiest5?></a>
  </div>
  <div class="column">
  <a class="demo cursor TijdArtiest2" onclick="currentSlide2(6)"><?php echo $artiest6?></a>
  </div>
  <div class="column">
  <a class="demo cursor TijdArtiest2" onclick="currentSlide2(7)"><?php echo $artiest7?></a>
  </div>
  <div class="column">
  <a class="demo cursor TijdArtiest2" onclick="currentSlide2(8)"></a>
  </div>
  <div class="column">
  <a class="demo cursor TijdArtiest2" onclick="currentSlide2(9)"></a>
  <div class="column">
  <a class="demo cursor TijdArtiest2" onclick="currentSlide2(10)"></a>
  </div>
  </div>

</div>
</div>

 </article>

                                              <article class="OverEvenement-sponsor">
                                              <a href="#">mede mogelijk gemaakt door Hard Rock</a>
                                              </article>

    </div>
    </div>
    </div>



  <!--event 3-------------------------------------------------------------------------------------->
  <div class="content" data-number="3">
  <div id="InfoOverEvenement3" class="OverEvenement" >
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav3()">&times;</a>
    <div class="OverEvenement-text">





    <article class="OverEvenement-locatie">
      <h2><?php echo $locatie3?></h2>
      </article>

      <article>
        <h2>Artiesten</h2>
    
      


      <div class="container">

<section class="AlleTijdenVanArtiest">
<div class="mySlides ArtiestTijd3">  
    <p><?php echo $datum1?></p>
</div>
<div class="mySlides ArtiestTijd3">
    <p><?php echo $datum2?></p>
</div>
<div class="mySlides ArtiestTijd3">
    <p><?php echo $datum3?></p>
</div>
<div class="mySlides ArtiestTijd3">
    <p><?php echo $datum4?></p>
</div>
<div class="mySlides ArtiestTijd3">
    <p><?php echo $datum5?></p>
</div>
<div class="mySlides ArtiestTijd3">
    <p><?php echo $datum6?></p>
</div>
<div class="mySlides ArtiestTijd3">
    <p><?php echo $datum7?></p>
</div>
<div class="mySlides ArtiestTijd3">
    <p><?php echo $datum8?></p>
</div>
<div class="mySlides ArtiestTijd3">
    <p></p>
</div>
<div class="mySlides ArtiestTijd3">
    <p></p>
</div>
</section>

<div class="row">
  <div class="column">
    <a class="demo cursor TijdArtiest3" onclick="currentSlide3(1)" ><?php echo $artiest1?></a>
  </div>
  <div class="column">
    <a class="demo cursor TijdArtiest3" onclick="currentSlide3(2)"><?php echo $artiest2?></a>
  </div>
  <div class="column">
   <a class="demo cursor TijdArtiest3" onclick="currentSlide3(3)"><?php echo $artiest3?></a>
  </div>
  <div class="column">
  <a class="demo cursor TijdArtiest3"  onclick="currentSlide3(4)"><?php echo $artiest4?></a>
  </div>
  <div class="column">
  <a class="demo cursor TijdArtiest3"  onclick="currentSlide3(5)"><?php echo $artiest5?></a>
  </div>
  <div class="column">
  <a class="demo cursor TijdArtiest3" onclick="currentSlide3(6)"><?php echo $artiest6?></a>
  </div>
  <div class="column">
  <a class="demo cursor TijdArtiest3" onclick="currentSlide3(7)"><?php echo $artiest7?></a>
  </div>
  <div class="column">
  <a class="demo cursor TijdArtiest3" onclick="currentSlide3(8)"></a>
  </div>
  <div class="column">
  <a class="demo cursor TijdArtiest3" onclick="currentSlide3(9)"></a>
  <div class="column">
  <a class="demo cursor TijdArtiest3" onclick="currentSlide3(10)"></a>
  </div>
  </div>


</div>
</div>

 </article>

                                              <article class="OverEvenement-sponsor">
                                              <a href="#">mede mogelijk gemaakt door Hard Rock</a>
                                              </article>

</div>
</div>
</div>




  <!--event 4---------------------------------------------------------------------------------------->
  <div class="content" data-number="4">
  <div id="InfoOverEvenement4" class="OverEvenement" >
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav4()">&times;</a>
    <div class="OverEvenement-text">

    <article class="OverEvenement-locatie">
      <h2><?php echo $locatie4?></h2>
      </article>

        
<article>
<h2>Artiesten</h2>


<div class="container">

<section class="AlleTijdenVanArtiest">

<div class="mySlides ArtiestTijd4">  
    <p><?php echo $datum1?></p>
</div>
<div class="mySlides ArtiestTijd4">
    <p><?php echo $datum2?></p>
</div>
<div class="mySlides ArtiestTijd4">
    <p><?php echo $datum3?></p>
</div>
<div class="mySlides ArtiestTijd4">
    <p><?php echo $datum4?></p>
</div>
<div class="mySlides ArtiestTijd4">
    <p><?php echo $datum5?></p>
</div>
<div class="mySlides ArtiestTijd4">
    <p><?php echo $datum6?></p>
</div>
<div class="mySlides ArtiestTijd4">
    <p><?php echo $datum7?></p>
</div>
<div class="mySlides ArtiestTijd4">
    <p><?php echo $datum8?></p>
</div>
<div class="mySlides ArtiestTijd4">
    <p></p>
</div>
<div class="mySlides ArtiestTijd4">
    <p></p>
</div>
</section>

<div class="row">
  <div class="column">
    <a class="demo cursor TijdArtiest4" onclick="currentSlide4(1)" ><?php echo $artiest1?></a>
  </div>
  <div class="column">
    <a class="demo cursor TijdArtiest4" onclick="currentSlide4(2)"><?php echo $artiest2?></a>
  </div>
  <div class="column">
   <a class="demo cursor TijdArtiest4" onclick="currentSlide4(3)"><?php echo $artiest3?></a>
  </div>
  <div class="column">
  <a class="demo cursor TijdArtiest4"  onclick="currentSlide4(4)"><?php echo $artiest4?></a>
  </div>
  <div class="column">
  <a class="demo cursor TijdArtiest4"  onclick="currentSlide4(5)"><?php echo $artiest5?></a>
  </div>
  <div class="column">
  <a class="demo cursor TijdArtiest4" onclick="currentSlide4(6)"><?php echo $artiest6?></a>
  </div>
  <div class="column">
  <a class="demo cursor TijdArtiest4" onclick="currentSlide4(7)"><?php echo $artiest7?></a>
  </div>
  <div class="column">
  <a class="demo cursor TijdArtiest4" onclick="currentSlide4(8)"></a>
  </div>
  <div class="column">
  <a class="demo cursor TijdArtiest4" onclick="currentSlide4(9)"></a>
  <div class="column">
  <a class="demo cursor TijdArtiest4" onclick="currentSlide4(10)"></a>
  </div>
  </div>


</div>
</div>

</article>



                                              <article class="OverEvenement-sponsor">
                                              <a href="#">mede mogelijk gemaakt door Hard Rock</a>
                                              </article>


  </div>
  </div>
  </div>

  <!--event 5------------------------------------------------------------------------------------>
  <div class="content" data-number="5">
  <div id="InfoOverEvenement5" class="OverEvenement" >
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav5()">&times;</a>
    <div class="OverEvenement-text">

    <article class="OverEvenement-locatie">
      <h2><?php echo $locatie5?></h2>
      </article>

    
  

      <article>
        <h2>Artiesten</h2>
    
      


      <div class="container">

<section class="AlleTijdenVanArtiest">

<div class="mySlides ArtiestTijd5">  
    <p><?php echo $datum1?></p>
</div>
<div class="mySlides ArtiestTijd5">
    <p><?php echo $datum2?></p>
</div>
<div class="mySlides ArtiestTijd5">
    <p><?php echo $datum3?></p>
</div>
<div class="mySlides ArtiestTijd5">
    <p><?php echo $datum4?></p>
</div>
<div class="mySlides ArtiestTijd5">
    <p><?php echo $datum5?></p>
</div>
<div class="mySlides ArtiestTijd5">
    <p><?php echo $datum6?></p>
</div>
<div class="mySlides ArtiestTijd5">
    <p><?php echo $datum7?></p>
</div>
<div class="mySlides ArtiestTijd5">
    <p><?php echo $datum8?></p>
</div>
<div class="mySlides ArtiestTijd5">
    <p></p>
</div>
<div class="mySlides ArtiestTijd5">
    <p></p>
</div>
</section>

<div class="row">
  <div class="column">
    <a class="demo cursor TijdArtiest5" onclick="currentSlide5(1)" ><?php echo $artiest1?></a>
  </div>
  <div class="column">
    <a class="demo cursor TijdArtiest5" onclick="currentSlide5(2)"><?php echo $artiest2?></a>
  </div>
  <div class="column">
   <a class="demo cursor TijdArtiest5" onclick="currentSlide5(3)"><?php echo $artiest3?></a>
  </div>
  <div class="column">
  <a class="demo cursor TijdArtiest5"  onclick="currentSlide5(4)"><?php echo $artiest4?></a>
  </div>
  <div class="column">
  <a class="demo cursor TijdArtiest5"  onclick="currentSlide5(5)"><?php echo $artiest5?></a>
  </div>
  <div class="column">
  <a class="demo cursor TijdArtiest5" onclick="currentSlide5(6)"><?php echo $artiest6?></a>
  </div>
  <div class="column">
  <a class="demo cursor TijdArtiest5" onclick="currentSlide5(7)"><?php echo $artiest7?></a>
  </div>
  <div class="column">
  <a class="demo cursor TijdArtiest5" onclick="currentSlide5(8)"></a>
  </div>
  <div class="column">
  <a class="demo cursor TijdArtiest5" onclick="currentSlide5(9)"></a>
  <div class="column">
  <a class="demo cursor TijdArtiest5" onclick="currentSlide5(10)"></a>
  </div>
  </div>


</div>
</div>

</article>



                                              <article class="OverEvenement-sponsor">
                                              <a href="#">mede mogelijk gemaakt door Hard Rock</a>
                                              </article>


</div>
</div>
</div>

  <!--event 6------------------------------------------------------------------------------------->
  <div class="content" data-number="6">
  <div id="InfoOverEvenement6" class="OverEvenement" >
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav6()">&times;</a>
    <div class="OverEvenement-text">

    <article class="OverEvenement-locatie">
      <h2><?php echo $locatie6?></h2>
      </article>


      <article>
        <h2>Artiesten</h2>
       


      <div class="container">

<section class="AlleTijdenVanArtiest">

<div class="mySlides ArtiestTijd6">  
    <p><?php echo $datum1?></p>
</div>
<div class="mySlides ArtiestTijd6">
    <p><?php echo $datum2?></p>
</div>
<div class="mySlides ArtiestTijd6">
    <p><?php echo $datum3?></p>
</div>
<div class="mySlides ArtiestTijd6">
    <p><?php echo $datum4?></p>
</div>
<div class="mySlides ArtiestTijd6">
    <p><?php echo $datum5?></p>
</div>
<div class="mySlides ArtiestTijd6">
    <p><?php echo $datum6?></p>
</div>
<div class="mySlides ArtiestTijd6">
    <p><?php echo $datum7?></p>
</div>
<div class="mySlides ArtiestTijd6">
    <p><?php echo $datum8?></p>
</div>
<div class="mySlides ArtiestTijd6">
    <p></p>
</div>
<div class="mySlides ArtiestTijd6">
    <p></p>
</div>
</section>

<div class="row">
  <div class="column">
    <a class="demo cursor TijdArtiest6" onclick="currentSlide6(1)" ><?php echo $artiest1?></a>
  </div>
  <div class="column">
    <a class="demo cursor TijdArtiest6" onclick="currentSlide6(2)"><?php echo $artiest2?></a>
  </div>
  <div class="column">
   <a class="demo cursor TijdArtiest6" onclick="currentSlide6(3)"><?php echo $artiest3?></a>
  </div>
  <div class="column">
  <a class="demo cursor TijdArtiest6"  onclick="currentSlide6(4)"><?php echo $artiest4?></a>
  </div>
  <div class="column">
  <a class="demo cursor TijdArtiest6"  onclick="currentSlide6(5)"><?php echo $artiest5?></a>
  </div>
  <div class="column">
  <a class="demo cursor TijdArtiest6" onclick="currentSlide6(6)"><?php echo $artiest6?></a>
  </div>
  <div class="column">
  <a class="demo cursor TijdArtiest6" onclick="currentSlide6(7)"><?php echo $artiest7?></a>
  </div>
  <div class="column">
  <a class="demo cursor TijdArtiest6" onclick="currentSlide6(8)"></a>
  </div>
  <div class="column">
  <a class="demo cursor TijdArtiest6" onclick="currentSlide6(9)"></a>
  <div class="column">
  <a class="demo cursor TijdArtiest6" onclick="currentSlide6(10)"></a>
  </div>
  </div>


</div>
</div>

</article>



                                              <article class="OverEvenement-sponsor">
                                              <a href="#">mede mogelijk gemaakt door Hard Rock</a>
                                              </article>


</div>
</div>
</div>

<!--event 7--------------------------------------------------------------------------------------->
<div class="content" data-number="7">
  <div id="InfoOverEvenement7" class="OverEvenement">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav7()">&times;</a>
    <div class="OverEvenement-text">
    <article class="OverEvenement-locatie">
      <h2><?php echo $locatie7?></h2>
      </article>

      <article>
        <h2>Artiesten</h2>
    

      <div class="container">

<section class="AlleTijdenVanArtiest">

<div class="mySlides ArtiestTijd7">  
    <p><?php echo $datum1?></p>
</div>
<div class="mySlides ArtiestTijd7">
    <p><?php echo $datum2?></p>
</div>
<div class="mySlides ArtiestTijd7">
    <p><?php echo $datum3?></p>
</div>
<div class="mySlides ArtiestTijd7">
    <p><?php echo $datum4?></p>
</div>
<div class="mySlides ArtiestTijd7">
    <p><?php echo $datum4?></p>
</div>
<div class="mySlides ArtiestTijd7">
    <p><?php echo $datum5?></p>
</div>
<div class="mySlides ArtiestTijd7">
    <p><?php echo $datum6?></p>
</div>
<div class="mySlides ArtiestTijd7">
    <p><?php echo $datum7?></p>
</div>
<div class="mySlides ArtiestTijd7">
    <p><?php echo $datum8?></p>
</div>
<div class="mySlides ArtiestTijd7">
    <pp>
</div>
</section>

<div class="row">
  <div class="column">
    <a class="demo cursor TijdArtiest7" onclick="currentSlide7(1)" ><?php echo $artiest1?></a>
  </div>
  <div class="column">
    <a class="demo cursor TijdArtiest7" onclick="currentSlide7(2)"><?php echo $artiest2?></a>
  </div>
  <div class="column">
   <a class="demo cursor TijdArtiest7" onclick="currentSlide7(3)"><?php echo $artiest3?></a>
  </div>
  <div class="column">
  <a class="demo cursor TijdArtiest7"  onclick="currentSlide7(4)"><?php echo $artiest4?></a>
  </div>
  <div class="column">
  <a class="demo cursor TijdArtiest7"  onclick="currentSlide7(5)"><?php echo $artiest5?></a>
  </div>
  <div class="column">
  <a class="demo cursor TijdArtiest7" onclick="currentSlide7(6)"><?php echo $artiest6?></a>
  </div>
  <div class="column">
  <a class="demo cursor TijdArtiest7" onclick="currentSlide7(7)"><?php echo $artiest7?></a>
  </div>
  <div class="column">
  <a class="demo cursor TijdArtiest7" onclick="currentSlide7(8)"></a>
  </div>
  <div class="column">
  <a class="demo cursor TijdArtiest7" onclick="currentSlide7(9)"></a>
  <div class="column">
  <a class="demo cursor TijdArtiest7" onclick="currentSlide7(10)"></a>
  </div>
  </div>


</div>
</div>

 </article>


                                              <article class="OverEvenement-sponsor">
                                              <a href="#">mede mogelijk gemaakt door Hard Rock</a>
                                              </article>



</div>
</div>
</div>

<!--event 8--------------------------------------------------------------------------------------->
<div class="content" data-number="8">
  <div id="InfoOverEvenement8" class="OverEvenement" >
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav8()">&times;</a>
    <div class="OverEvenement-text">
    <article class="OverEvenement-locatie">
      <h2><?php echo $locatie8?></h2>
      </article>
     
      

      <article>
        <h2>Artiesten</h2>
    
      


      <div class="container">

<section class="AlleTijdenVanArtiest">

<div class="mySlides ArtiestTijd8">  
    <p><?php echo $datum1?></p>
</div>
<div class="mySlides ArtiestTijd8">
    <p><?php echo $datum2?></p>
</div>
<div class="mySlides ArtiestTijd8">
    <p><?php echo $datum3?></p>
</div>
<div class="mySlides ArtiestTijd8">
    <p><?php echo $datum4?></p>
</div>
<div class="mySlides ArtiestTijd8">
    <p><?php echo $datum5?></p>
</div>
<div class="mySlides ArtiestTijd8">
    <p><?php echo $datum6?></p>
</div>
<div class="mySlides ArtiestTijd8">
    <p><?php echo $datum7?></p>
</div>
<div class="mySlides ArtiestTijd8">
    8<p><?php echo $datum3?></p>
</div>
<div class="mySlides ArtiestTij8">
    <p></p>
</div>
<div class="mySlides ArtiestTijd8">
    <p></p>
</div>
</section>

<div class="row">
  <div class="column">
    <a class="demo cursor TijdArtiest8" onclick="currentSlide8(1)" ><?php echo $artiest1?></a>
  </div>
  <div class="column">
    <a class="demo cursor TijdArtiest8" onclick="currentSlide8(2)"><?php echo $artiest2?></a>
  </div>
  <div class="column">
   <a class="demo cursor TijdArtiest8" onclick="currentSlide8(3)"><?php echo $artiest3?></a>
  </div>
  <div class="column">
  <a class="demo cursor TijdArtiest8"  onclick="currentSlide8(4)"><?php echo $artiest4?></a>
  </div>
  <div class="column">
  <a class="demo cursor TijdArtiest8"  onclick="currentSlide8(5)"><?php echo $artiest5?></a>
  </div>
  <div class="column">
  <a class="demo cursor TijdArtiest8" onclick="currentSlide8(6)"><?php echo $artiest6?></a>
  </div>
  <div class="column">
  <a class="demo cursor TijdArtiest8" onclick="currentSlide8(7)"><?php echo $artiest7?></a>
  </div>
  <div class="column">
  <a class="demo cursor TijdArtiest8" onclick="currentSlide8(8)"></a>
  </div>
  <div class="column">
  <a class="demo cursor TijdArtiest8" onclick="currentSlide8(9)"></a>
  <div class="column">
  <a class="demo cursor TijdArtiest8" onclick="currentSlide8(10)"></a>
  </div>
  </div>




</div>
</div>

 </article>


                                              <article class="OverEvenement-sponsor">
                                              <a href="#">mede mogelijk gemaakt door Hard Rock</a>
                                              </article>


  </div>
  </div>
  </div>

<!--event 9--------------------------------------------------------------------------------------->
<div id="www" class="content" data-number="9">
  <div id="InfoOverEvenement9" class="OverEvenement">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav9()">&times;</a>
    <div class="OverEvenement-text">

        <article class="OverEvenement-locatie">
                  <h2><?php echo $locatie9?></h2>
        </article>

        <article>
        <h2>Artiesten</h2>
    
      


      <div class="container">

<section class="AlleTijdenVanArtiest">

<div class="mySlides ArtiestTijd9">  
    <p><?php echo $datum1?></p>
</div>
<div class="mySlides ArtiestTijd9">
    <p><?php echo $datum2?></p>
</div>
<div class="mySlides ArtiestTijd9">
    <p><?php echo $datum3?></p>
</div>
<div class="mySlides ArtiestTijd9">
    <p><?php echo $datum4?></p>
</div>
<div class="mySlides ArtiestTijd9">
    <p><?php echo $datum5?></p>
</div>
<div class="mySlides ArtiestTijd9">
    <p><?php echo $datum6?></p>
</div>
<div class="mySlides ArtiestTijd9">
    <p><?php echo $datum7?></p>
</div>
<div class="mySlides ArtiestTijd9">
    <p><?php echo $datum8?></p>
</div>
<div class="mySlides ArtiestTij9">
    <p></p>
</div>
<div class="mySlides ArtiestTijd9">
    <p></p>
</div>
</section>

<div class="row">
  <div class="column">
    <a class="demo cursor TijdArtiest9" onclick="currentSlide9(1)" ><?php echo $artiest1?></a>
  </div>
  <div class="column">
    <a class="demo cursor TijdArtiest9" onclick="currentSlide9(2)"><?php echo $artiest2?></a>
  </div>
  <div class="column">
   <a class="demo cursor TijdArtiest9" onclick="currentSlide9(3)"><?php echo $artiest3?></a>
  </div>
  <div class="column">
  <a class="demo cursor TijdArtiest9"  onclick="currentSlide9(4)"><?php echo $artiest4?></a>
  </div>
  <div class="column">
  <a class="demo cursor TijdArtiest9"  onclick="currentSlide9(5)"><?php echo $artiest5?></a>
  </div>
  <div class="column">
  <a class="demo cursor TijdArtiest9" onclick="currentSlide9(6)"><?php echo $artiest6?></a>
  </div>
  <div class="column">
  <a class="demo cursor TijdArtiest9" onclick="currentSlide9(7)"><?php echo $artiest7?></a>
  </div>
  <div class="column">
  <a class="demo cursor TijdArtiest9" onclick="currentSlide9(8)"></a>
  </div>
  <div class="column">
  <a class="demo cursor TijdArtiest9" onclick="currentSlide9(9)"></a>
  <div class="column">
  <a class="demo cursor TijdArtiest9" onclick="currentSlide9(10)"></a>
  </div>
  </div>




</div>
</div>

 </article>




                                              <article class="OverEvenement-sponsor">
                                              <a href="#">mede mogelijk gemaakt door Hard Rock</a>
                                              </article>
        



  </div>
  </div>
  </div>

<!--event 10------------------------------------------------------------------------------------->
<div class="content" data-number="10">
<div id="InfoOverEvenement10" class="OverEvenement">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNa10v()">&times;</a>
    <div class="OverEvenement-text">
    <article class="OverEvenement-locatie">
      <h2><?php echo $locatie10?></h2>
      </article>

     
  
      <article>
        <h2>Artiesten</h2>
    
      


      <div class="container">

<section class="AlleTijdenVanArtiest">

<div class="mySlides ArtiestTijd10">  
    <p><?php echo $datum1?></p>
</div>
<div class="mySlides ArtiestTijd10">
    <p><?php echo $datum2?></p>
</div>
<div class="mySlides ArtiestTijd10">
    <p><?php echo $datum3?></p>
</div>
<div class="mySlides ArtiestTijd10">
    <p><?php echo $datum4?></p>
</div>
<div class="mySlides ArtiestTijd10">
    <p><?php echo $datum5?></p>
</div>
<div class="mySlides ArtiestTijd10">
    <p><?php echo $datum6?></p>
</div>
<div class="mySlides ArtiestTijd10">
    <p><?php echo $datum7?></p>
</div>
<div class="mySlides ArtiestTijd10">
    <p><?php echo $datum8?></p>
</div>
<div class="mySlides ArtiestTij10">
    <p></p>
</div>
<div class="mySlides ArtiestTijd10">
    <p></p>
</div>
</section>

<div class="row">
  <div class="column">
    <a class="demo cursor TijdArtiest10" onclick="currentSlide10(1)" ><?php echo $artiest1?></a>
  </div>
  <div class="column">
    <a class="demo cursor TijdArtiest10" onclick="currentSlide10(2)"><?php echo $artiest2?></a>
  </div>
  <div class="column">
   <a class="demo cursor TijdArtiest10" onclick="currentSlide10(3)"><?php echo $artiest3?></a>
  </div>
  <div class="column">
  <a class="demo cursor TijdArtiest10"  onclick="currentSlide10(4)"><?php echo $artiest4?></a>
  </div>
  <div class="column">
  <a class="demo cursor TijdArtiest10"  onclick="currentSlide10(5)"><?php echo $artiest5?></a>
  </div>
  <div class="column">
  <a class="demo cursor TijdArtiest10" onclick="currentSlide10(6)"><?php echo $artiest6?></a>
  </div>
  <div class="column">
  <a class="demo cursor TijdArtiest10" onclick="currentSlide10(7)"><?php echo $artiest7?></a>
  </div>
  <div class="column">
  <a class="demo cursor TijdArtiest10" onclick="currentSlide10(8)"></a>
  </div>
  <div class="column">
  <a class="demo cursor TijdArtiest10" onclick="currentSlide10(9)"></a>
  <div class="column">
  <a class="demo cursor TijdArtiest10" onclick="currentSlide10(10)"></a>
  </div>
  </div>


</div>
</div>

 </article>

                                              <article class="OverEvenement-sponsor">
                                              <a href="#">mede mogelijk gemaakt door Hard Rock</a>
                                              </article>


  </div>
  </div>
  </div>

  <!--Events-------------------------------------------------------------------------------------->
  <div class="content" data-number="0">
<div id="InfoOverEvenement0" class="OverEvenement ExtraEvenement">
    <div class="ExtraEvenement-text">
      <article>
        <h2>Vind jouw event hier</h2>
        <p></p>
        <a href="#">De best artiesten </a>
        <a href="#">Voor de beste events</a>
      </article>

                                            
  </div>
  </div>
  </div>


          <script>
                  let Buttons = document.querySelectorAll(".selectSection");
                  for (let button of Buttons){
                    button.addEventListener('click', (e) => {
          
                    const et = e.target;
                    const active = document.querySelector(".active");
                    if(active){
                      active.classList.remove("active");
                    }

                    et.classList.add("active");
                    let allContent = document.querySelectorAll('.content');

                    for(let content of allContent){
                    if(content.getAttribute('data-number') === button.getAttribute('data-number')) {
                       content.style.display = "block";
                    } else {
                      content.style.display = "none";
                    }
                    }
                    });
                  }
          </script> 

</div>
</div>
</section>
</section>




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


</body>
</html>
























