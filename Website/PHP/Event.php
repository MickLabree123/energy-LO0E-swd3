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
</head>
<body>

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
$locatie01 = "SELECT plaatsnaam, gebouw FROM locaties LIMIT 1 OFFSET 0 ";
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
    $locatie1 = "<section class= qwerty>".$row[0]." . ".$row[1]."</section>";
  } $result->close();
} else { echo"verlopen";}

/* Locatie 2 */
if ($result = $conn->query($locatie02)){
  while ($row = $result->fetch_array()){
    $locatie2 = "<section class= qwerty>".$row[0]." . ".$row[1]."</section>";
  } $result->close();
} else { echo"verlopen";}

/* Locatie 3 */
if ($result = $conn->query($locatie03)){
  while ($row = $result->fetch_array()){
    $locatie3 = "<section class= qwerty>".$row[0]." . ".$row[1]."</section>";
  } $result->close();
} else { echo"verlopen";}

/* Locatie 4 */
if ($result = $conn->query($locatie04)){
  while ($row = $result->fetch_array()){
    $locatie4 = "<section class= qwerty>".$row[0]." . ".$row[1]."</section>";
  } $result->close();
} else { echo"verlopen";}

/* Locatie 5 */
if ($result = $conn->query($locatie05)){
  while ($row = $result->fetch_array()){
    $locatie5 = "<section class= qwerty>".$row[0]." . ".$row[1]."</section>";
  } $result->close();
} else { echo"verlopen";}

/* Locatie 6 */
if ($result = $conn->query($locatie06)){
  while ($row = $result->fetch_array()){
    $locatie6 = "<section class= qwerty>".$row[0]." . ".$row[1]."</section>";
  } $result->close();
} else { echo"verlopen";}

/* Locatie 7 */
if ($result = $conn->query($locatie07)){
  while ($row = $result->fetch_array()){
    $locatie7 = "<section class= qwerty>".$row[0]." . ".$row[1]."</section>";
  } $result->close();
} else { echo"verlopen";}

/* Locatie 8 */
if ($result = $conn->query($locatie08)){
  while ($row = $result->fetch_array()){
    $locatie8 = "<section class= qwerty>".$row[0]." . ".$row[1]."</section>";
  } $result->close();
} else { echo"verlopen";}

/* Locatie 9 */
if ($result = $conn->query($locatie09)){
  while ($row = $result->fetch_array()){
    $locatie9 = "<section class= qwerty>".$row[0]." . ".$row[1]."</section>";
  } $result->close();
} else { echo"verlopen";}

/* Locatie 10 */
if ($result = $conn->query($locatie010)){
  while ($row = $result->fetch_array()){
    $locatie10 = "<section class= qwerty>".$row[0]." . ".$row[1]."</section>";
  } $result->close();
} else { echo"verlopen";}






/**/
?>



<style>
.qwerty{
  background-color: cyan;
}
</style>







<section id="EventZoeken"></section>

<section class="Evenementen">
   <div class="left">
      <input type="text" id="mySearch" onkeyup="myFunction()" placeholder="locatie">
       <ul id="Locatie">
   <li><a class="locatie 1"  href="#" onclick="openNav()"><?php echo $locatie1?></a></li>
   <li><a class="locatie 2"  href="#" onclick="openNav()"><?php echo $locatie2?></a></li>
   <li><a class="locatie 3"  href="#" onclick="openNav()"><?php echo $locatie3?></a></li>
   <li><a class="locatie 4"  href="#" onclick="openNav()"><?php echo $locatie4?></a></li>
   <li><a class="locatie 5"  href="#" onclick="openNav()"><?php echo $locatie5?></a></li>
   <li><a class="locatie 6"  href="#" onclick="openNav()"><?php echo $locatie6?></a></li>  
   <li><a class="locatie 7"  href="#" onclick="openNav()"><?php echo $locatie7?></a></li>
   <li><a class="locatie 8"  href="#" onclick="openNav()"><?php echo $locatie8?></a></li>
   <li><a class="locatie 9"  href="#" onclick="openNav()"><?php echo $locatie9?></a></li>
   <li><a class="locatie 10" href="#" onclick="openNav()"><?php echo $locatie10?></a></li>
        </ul>
   </div>

  <article class="right">
  <div id="InfoOverEvenement" class="OverEvenement">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="OverEvenement-text">
      <a href="#">AAAAAAAAA</a>
      <a href="#">BBBBBBBBB</a>
      <a href="#">CCCCCCCCCCC</a>
      <a href="#">DDDDDDDDDDDD</a>>
    </div>
  </div>
  </article>
</section>










</body>
</html>
























