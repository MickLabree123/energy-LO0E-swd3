  

function myFunction() {
  var input, filter, ul, li, a, i;
    input = document.getElementById("mySearch");
    filter = input.value.toUpperCase();
    ul = document.getElementById("Locatie");
    li = ul.getElementsByTagName("li");
       
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
    if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
        li[i].style.display = "";
    } else {
        li[i].style.display = "none";
        }
      }
    }
    






function closeNav1() {
  document.getElementById("InfoOverEvenement1").style.cssText = "width:0%; display: none";
}

function closeNav2() {
  document.getElementById("InfoOverEvenement2").style.cssText = "width:0%; display: none";
}

function closeNav3() {
  document.getElementById("InfoOverEvenement3").style.cssText = "width:0%; display: none";
}

function closeNav3() {
    document.getElementById("InfoOverEvenement3").style.cssText = "width:0%; display: none";
}

function closeNav4() {
    document.getElementById("InfoOverEvenement4").style.cssText = "width:0%; display: none";
}

function closeNav5() {
    document.getElementById("InfoOverEvenement5").style.cssText = "width:0%; display: none";
}

function closeNav6() {
   document.getElementById("InfoOverEvenement6").style.cssText = "width:0%; display: none";
}

function closeNav7() {
    document.getElementById("InfoOverEvenement7").style.cssText = "width:0%; display: none";
}

function closeNav8() {
    document.getElementById("InfoOverEvenement8").style.cssText = "width:0%; display: none";
}

function openNav9() {
  if(document.getElementById("www").style.cssText = "width:0%; display: none"){
    document.getElementById("www").style.cssText = "width:65%; display: block";
}else { document.getElementById("www").style.cssText = "width:65%; display: block"; }
}
function closeNav9() {
    document.getElementById("InfoOverEvenement9").style.cssText = "width:0%; display: none";
}

function closeNav10() {
    document.getElementById("InfoOverEvenement10").style.cssText = "width:0%; display: none";
}


















var slideIndex = 1;
showArtiest1(slideIndex);

function currentSlide1(n) {
  showArtiest1(slideIndex = n);
}

function showArtiest1(n) {
  var i;
  var slides = document.getElementsByClassName("ArtiestTijd1");
  var dots = document.getElementsByClassName("TijdArtiest1");

  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active2", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active2";
  
}


/*----------------------------------------------------------------------------------*/
var slideIndex = 1;
showArtiest2(slideIndex);

function currentSlide2(n) {
  showArtiest2(slideIndex = n);
}

function showArtiest2(n) {
  var i;
  var slides = document.getElementsByClassName("ArtiestTijd2");
  var dots = document.getElementsByClassName("TijdArtiest2");

  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active2", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active2";
  
}


/*----------------------------------------------------------------------------------*/
var slideIndex = 1;
showArtiest3(slideIndex);

function currentSlide3(n) {
  showArtiest3(slideIndex = n);
}

function showArtiest3(n) {
  var i;
  var slides = document.getElementsByClassName("ArtiestTijd3");
  var dots = document.getElementsByClassName("TijdArtiest3");

  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active2", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active2";
  
}


/*----------------------------------------------------------------------------------*/
var slideIndex = 1;
showArtiest4(slideIndex);

function currentSlide4(n) {
  showArtiest4(slideIndex = n);
}

function showArtiest4(n) {
  var i;
  var slides = document.getElementsByClassName("ArtiestTijd4");
  var dots = document.getElementsByClassName("TijdArtiest4");

  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active2", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active2";
  
}


/*----------------------------------------------------------------------------------*/
var slideIndex = 1;
showArtiest5(slideIndex);

function currentSlide5(n) {
  showArtiest5(slideIndex = n);
}

function showArtiest5(n) {
  var i;
  var slides = document.getElementsByClassName("ArtiestTijd5");
  var dots = document.getElementsByClassName("TijdArtiest5");

  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active2", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active2";
  
}

/*----------------------------------------------------------------------------------*/
var slideIndex = 1;
showArtiest6(slideIndex);

function currentSlide6(n) {
  showArtiest6(slideIndex = n);
}

function showArtiest6(n) {
  var i;
  var slides = document.getElementsByClassName("ArtiestTijd6");
  var dots = document.getElementsByClassName("TijdArtiest6");

  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active2", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active2";
  
}


/*----------------------------------------------------------------------------------*/
var slideIndex = 1;
showArtiest7(slideIndex);

function currentSlide7(n) {
  showArtiest7(slideIndex = n);
}

function showArtiest7(n) {
  var i;
  var slides = document.getElementsByClassName("ArtiestTijd7");
  var dots = document.getElementsByClassName("TijdArtiest7");

  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active2", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active2";
  
}


/*----------------------------------------------------------------------------------*/
var slideIndex = 1;
showArtiest8(slideIndex);

function currentSlide8(n) {
  showArtiest8(slideIndex = n);
}

function showArtiest8(n) {
  var i;
  var slides = document.getElementsByClassName("ArtiestTijd8");
  var dots = document.getElementsByClassName("TijdArtiest8");

  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active2", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active2";
  
}

/*----------------------------------------------------------------------------------*/
var slideIndex = 1;
showArtiest9(slideIndex);

function currentSlide9(n) {
  showArtiest9(slideIndex = n);
}

function showArtiest9(n) {
  var i;
  var slides = document.getElementsByClassName("ArtiestTijd9");
  var dots = document.getElementsByClassName("TijdArtiest9");

  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active2", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active2";
  
}


/*----------------------------------------------------------------------------------*/
var slideIndex = 1;
showArtiest10(slideIndex);

function currentSlide10(n) {
  showArtiest10(slideIndex = n);
}

function showArtiest10(n) {
  var i;
  var slides = document.getElementsByClassName("ArtiestTijd10");
  var dots = document.getElementsByClassName("TijdArtiest10");

  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active2", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active2";
  
}



























