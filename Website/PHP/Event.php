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
    <script src="..\JavaScript\Event.js"></script>
    <script src="..\Website\energy.sql"></script>
    <!-- google fonts -->
 <link rel="preconnect" href="https://fonts.gstatic.com">
 <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<style> 
<?php include "..\CSS\Event.css"; ?>
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











/*
$datum01="SELECT datum FROM evenementen LIMIT 1 ";


if ($result = $conn->query($datum01)){
  while ($row = $result->fetch_array()){
    $datum01 = "<section class= qwerty>".$row[0]."</section>";
  } $result->close();
} else { echo"verlopen";}
*/






/**/
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



    <!--event 1-->
    <div class="content" data-number="1">
    <div id="InfoOverEvenement1" class="OverEvenement">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav1()">&times;</a>
    <div class="OverEvenement-text">
     

      <article class="OverEvenement-locatie">
               <h2><?php echo $locatie1?></h2>
      </article>

        <h2>Artiesten</h2>
        <p></p>
        <a href="#">AAAAAAAAA</a>
    
      <a href="#">AAAAAAAAA</a>
      <a href="#">BBBBBBBBB</a>
      <a href="#">xxxxxxxxxxx</a>
      <a href="#">xxxxxxxxxxxx</a>

          <article>
          <a href="#">georganiseerd door Hard Rock</a>
          </article>
    </div>
    </div>
    </div>

<!--event 2-->
  <div class="content" data-number="2">
  <div id="InfoOverEvenement2" class="OverEvenement" >
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav2()">&times;</a>
    <div class="OverEvenement-text">
      <article class="OverEvenement-locatie">
      <h2><?php echo $locatie2?></h2>
      </article>

        <h2>Artiesten</h2>
        <p></p>
        <a href="#">bbbbbbbbbbbbbbb</a>
      </article>
      <a href="#">aaaabbbbbbbbbaaaaa</a>
      <a href="#">aaaabbbbbbbbbbaaaaa</a>
      <a href="#">aaaabbbbbbbbbaaaaaaaaaa</a>
      <a href="#">aaaaaabbbbbbbaaaaa</a>
    </div>
</div>
  </div>

  <!--event 3-->
  <div class="content" data-number="3">
  <div id="InfoOverEvenement3" class="OverEvenement" >
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav3()">&times;</a>
    <div class="OverEvenement-text">
    <article class="OverEvenement-locatie">
      <h2><?php echo $locatie3?></h2>
      </article>

      <article>
        <h2>Artiesten</h2>
        <p></p>
        <a href="#">aaaaaaaaaaaa</a>
      </article>
      <a href="#">33333333333</a>
      <a href="#">33333333333</a>
      <a href="#">3333333333333</a>
      <a href="#">333333333333333</a>
    </div>
</div>
  </div>

  <!--event 4-->
  <div class="content" data-number="4">
  <div id="InfoOverEvenement4" class="OverEvenement" >
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav4()">&times;</a>
    <div class="OverEvenement-text">
    <article class="OverEvenement-locatie">
      <h2><?php echo $locatie4?></h2>
      </article>

      <article>
        <h2>Artiesten</h2>
        <p></p>
        <a href="#">44444444444444444</a>
      </article>
      <a href="#">444444444444444</a>
      <a href="#">44444444444444444</a>
      <a href="#">44444444444444444</a>
      <a href="#">44444444444444444444</a>
    </div>
  </div>
  </div>

  <!--event 5-->
  <div class="content" data-number="5">
  <div id="InfoOverEvenement5" class="OverEvenement" >
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav5()">&times;</a>
    <div class="OverEvenement-text">
    <article class="OverEvenement-locatie">
      <h2><?php echo $locatie5?></h2>
      </article>

      <article>
        <h2>Artiesten</h2>
        <p></p>
        <a href="#">55555555555555</a>
      </article>
      <a href="#">555555555555555</a>
      <a href="#">55555555555555</a>
      <a href="#">5555555555555555</a>
      <a href="#">5555555555555555</a>
    </div>
  </div>
  </div>

  <!--event 6-->
  <div class="content" data-number="6">
  <div id="InfoOverEvenement6" class="OverEvenement" >
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav6()">&times;</a>
    <div class="OverEvenement-text">
    <article class="OverEvenement-locatie">
      <h2><?php echo $locatie6?></h2>
      </article>

      <article>
        <h2>Artiesten</h2>
        <p></p>
        <a href="#">6666666666666666</a>
      </article>
      <a href="#">66666666666666666</a>
      <a href="#">6666666666666666666</a>
      <a href="#">666666666666666</a>
      <a href="#">666666666666666</a>
    </div>
  </div>
  </div>

<!--event 7-->
<div class="content" data-number="7">
  <div id="InfoOverEvenement7" class="OverEvenement">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav7()">&times;</a>
    <div class="OverEvenement-text">
    <article class="OverEvenement-locatie">
      <h2><?php echo $locatie7?></h2>
      </article>

      <article>
        <h2>Artiesten</h2>
        <p></p>
        <a href="#">777777777777</a>
      </article>
      <a href="#">777777777777777</a>
      <a href="#">777777777777</a>
      <a href="#">77777777777</a>
      <a href="#">777777777777777</a>
    </div>
  </div>
  </div>

<!--event 8-->
<div class="content" data-number="8">
  <div id="InfoOverEvenement8" class="OverEvenement" >
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav8()">&times;</a>
    <div class="OverEvenement-text">
    <article class="OverEvenement-locatie">
      <h2><?php echo $locatie8?></h2>
      </article>
      <article>
        <h2>Artiesten</h2>
        <p></p>
        <a href="#">88888888888</a>
      </article>
      <a href="#">88888888888</a>
      <a href="#">88888888888888888</a>
      <a href="#">8888888888888888</a>
      <a href="#">888888888888888</a>
    </div>
  </div>
  </div>

<!--event 9-->
<div id="www" class="content" data-number="9">
  <div id="InfoOverEvenement9" class="OverEvenement">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav9()">&times;</a>
    <div class="OverEvenement-text">

        <article class="OverEvenement-locatie">
                  <h2><?php echo $locatie9?></h2>
        </article>

      <article>
        <h2>Artiesten</h2>
        <p></p>
        <a href="#">999999999999</a>
      </article>
      <a href="#">9999999999999999</a>
      <a href="#">999999999999999</a>
      <a href="#">999999999999999</a>
      <a href="#">99999999999999</a>
    </div>
  </div>
  </div>

<!--event 10-->
<div class="content" data-number="10">
<div id="InfoOverEvenement10" class="OverEvenement">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNa10v()">&times;</a>
    <div class="OverEvenement-text">
    <article class="OverEvenement-locatie">
      <h2><?php echo $locatie10?></h2>
      </article>

      <article>
        <h2>Artiesten</h2>
        <p></p>
        <a href="#">0000000000</a>
      </article>
      <a href="#">000000000</a>
      <a href="#">00000000000</a>
      <a href="#">000000000000</a>
      <a href="#">000000000000</a>
    </div>
  </div>
  </div>

  <!--Events-->
  <div class="content" data-number="0">
<div id="InfoOverEvenement0" class="OverEvenement ExtraEvenement">
    <div class="ExtraEvenement-text">
      <article>
        <h2>Vind jouw event hier</h2>
        <p></p>
        <a href="#">De best artiesten </a>
      </article>
      <a href="#">xxxxxxxxxxxxx</a>
      <a href="#">xxxxxxxxxxxx</a>
      <a href="#">xxxxxxxxxxxx</a>
      <article>
      <a href="#">georganiseerd door Hard Rock</a>
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
























