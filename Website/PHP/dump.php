
<html lang="NL">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="language" content="NL"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="energydrink">
    <meta name="author" content="sathyam">
    <meta name="keywords" content="Rock hard, energy, drink, event">
    <title>Rock Hard</title>
    <link rel="stylesheet" type="text/css" href="..\CSS\Event.css">
    <link rel="stylesheet" type="text/css" href="..\CSS\Event.css">
    <script src="..\JavaScript\Event.js"></script>
    <script src="..\Website\energy.sql"></script>
    <!-- google fonts -->
 <link rel="preconnect" href="https://fonts.gstatic.com">
 <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<style> 
<?php include "dump.css"; ?>
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
    $locatie1 = "<section class= qwerty>".$row[0]."  ".$row[1]."</section>";
  } $result->close();
} else { echo"verlopen";}

/* Locatie 2 */
if ($result = $conn->query($locatie02)){
  while ($row = $result->fetch_array()){
    $locatie2 = "<section class= qwerty>".$row[0]."  ".$row[1]."</section>";
  } $result->close();
} else { echo"verlopen";}

/* Locatie 3 */
if ($result = $conn->query($locatie03)){
  while ($row = $result->fetch_array()){
    $locatie3 = "<section class= qwerty>".$row[0]."  ".$row[1]."</section>";
  } $result->close();
} else { echo"verlopen";}

/* Locatie 4 */
if ($result = $conn->query($locatie04)){
  while ($row = $result->fetch_array()){
    $locatie4 = "<section class= qwerty>".$row[0]."  ".$row[1]."</section>";
  } $result->close();
} else { echo"verlopen";}

/* Locatie 5 */
if ($result = $conn->query($locatie05)){
  while ($row = $result->fetch_array()){
    $locatie5 = "<section class= qwerty>".$row[0]."  ".$row[1]."</section>";
  } $result->close();
} else { echo"verlopen";}

/* Locatie 6 */
if ($result = $conn->query($locatie06)){
  while ($row = $result->fetch_array()){
    $locatie6 = "<section class= qwerty>".$row[0]."  ".$row[1]."</section>";
  } $result->close();
} else { echo"verlopen";}

/* Locatie 7 */
if ($result = $conn->query($locatie07)){
  while ($row = $result->fetch_array()){
    $locatie7 = "<section class= qwerty>".$row[0]."  ".$row[1]."</section>";
  } $result->close();
} else { echo"verlopen";}

/* Locatie 8 */
if ($result = $conn->query($locatie08)){
  while ($row = $result->fetch_array()){
    $locatie8 = "<section class= qwerty>".$row[0]."   ".$row[1]."</section>";
  } $result->close();
} else { echo"verlopen";}

/* Locatie 9 */
if ($result = $conn->query($locatie09)){
  while ($row = $result->fetch_array()){
    $locatie9 = "<section class= locatie>".$row[0]."  ".$row[1]."</section>";
  } $result->close();
} else { echo"verlopen";}

/* Locatie 10 */
if ($result = $conn->query($locatie010)){
  while ($row = $result->fetch_array()){
    $locatie10 = $row[0]."  ".$row[1];
  } $result->close();
} else { echo"verlopen";}


/*
$datum01="SELECT datum FROM evenementen LIMIT 1 ";


if ($result = $conn->query($datum01)){
  while ($row = $result->fetch_array()){
    $datum01 = "<section class= qwerty>".$row[0]."</section>";
  } $result->close();
} else { echo"verlopen";}
*/







?>













<header id="homepage-header">
        <article class="homepage-logo">
            <img src="..\Images\logo.png" height="100" alt="rockhard energy">
        </article>
        <article class="homepage-webNav">
            <a href="homepage.php"><button>Home</button></a>
            <a href="#"><button>Events</button></a>
            <a href="#"><button>Acties</button></a>
            <a href="artiesten.php"><button>Artiesten</button></a>
            <a class ="contact" href="#"><button>Contact</button></a>
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
<li><a> <button class="locatie4 selectSection"  href="#" onclick="openNav()"><?php echo $locatie4?></button></a></li>
<li><a> <button class="locatie5 selectSection"  href="#" onclick="openNav()"><?php echo $locatie5?></button></a></li>
<li><a> <button class="locatie6 "  href="#" onclick="openNav()"><?php echo $locatie6?></button></a></li>  
<li><a> <button class="locatie7 "  href="#" onclick="openNav()"><?php echo $locatie7?></button></a></li>
<li><a> <button class="locatie8 "  href="#" onclick="openNav()"><?php echo $locatie8?></button></a></li>
<li><a> <button class="locatie9 "  href="#" onclick="openNav()"><?php echo $locatie9?></button></a></li>
<li><a> <button class="locatie10 " href="#" onclick="openNav()"><?php echo $locatie10?></button></a></li>
</ul>
   </div>


<article class="right">
<div class="contentSection">








  <!--event 1-->
    <div class="content" data-number="1">
    <div id="InfoOverEvenement1" class="OverEvenement">    
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav1()">&times;</a>
    <div   class="OverEvenement-text">
      <article>
    <h2>Artiesten</h2>
        





<div class="container">

<section class="AlleTijdenVanArtiest">
<div class="mySlides">  
    <p>hallo111</p>
</div>
<div class="mySlides">
    <p>hallo222</p>
</div>
<div class="mySlides">
    <p>hallo333333</p>
</div>
<div class="mySlides">
    <p>hallo444444444</p>
</div>
<div class="mySlides">
    <p>hallo555555555</p>
</div>
<div class="mySlides">
    <p>hallo66666666</p>
</div>
<div class="mySlides">
    <p>hallo777777777</p>
</div>
<div class="mySlides">
    <p>hallo88888888888</p>
</div>
<div class="mySlides">
    <p>hallo999999999</p>
</div>
<div class="mySlides">
    <p>hallo0000000</p>
</div>
</section>

<div class="row">
  <div class="column">
    <a class="demo cursor" onclick="currentSlide(1)" >hi111111</a>
  </div>
  <div class="column">
    <a class="demo cursor" onclick="currentSlide(2)">hi22222</a>
  </div>
  <div class="column">
   <a class="demo cursor" onclick="currentSlide(3)">hi333333333</a>
  </div>
  <div class="column">
  <a class="demo cursor"  onclick="currentSlide(4)">hi44444444</a>
  </div>
  <div class="column">
  <a class="demo cursor"  onclick="currentSlide(5)">hi5555555</a>
  </div>
  <div class="column">
  <a class="demo cursor" onclick="currentSlide(6)">hi6666666</a>
  </div>
  <div class="column">
  <a class="demo cursor" onclick="currentSlide(7)">hi77777777</a>
  </div>
  <div class="column">
  <a class="demo cursor" onclick="currentSlide(8)">hi88888888</a>
  </div>
  <div class="column">
  <a class="demo cursor" onclick="currentSlide(9)">hi999999999</a>
  <div class="column">
  <a class="demo cursor" onclick="currentSlide(10)">hi000000000</a>
  </div>
  </div>

</div>
</div>

 </article>








    </div>
    </div>
    </div>
    </div>

</article>








</section>
</section>













   


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





































</body>
</html>
