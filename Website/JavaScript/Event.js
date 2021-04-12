  

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
  document.getElementById("close1").style.cssText = "width:0%; display: none";
}

function closeNav2() {
  document.getElementById("InfoOverEvenement2").style.cssText = "width:0%; display: none";
}































/*
function openNav3() {
  if(document.getElementById("InfoOverEvenement3").style.width = "0%"){
    document.getElementById("InfoOverEvenement3").style.cssText = "width:65%; display: block";
  }else { document.getElementById("InfoOverEvenement3").style.width = "0%"; }
}
function closeNav3() {
  document.getElementById("InfoOverEvenement3").style.cssText = "width:0%; display: none";
}

function openNav3() {
  if(document.getElementById("InfoOverEvenement3").style.width = "0%"){
    document.getElementById("InfoOverEvenement3").style.cssText = "width:65%; display: block";
}else { document.getElementById("InfoOverEvenement3").style.width = "0%"; }
}
function closeNav3() {
    document.getElementById("InfoOverEvenement3").style.cssText = "width:0%; display: none";
}

function openNav4() {
  if(document.getElementById("InfoOverEvenement4").style.width = "0%"){
    document.getElementById("InfoOverEvenement4").style.cssText = "width:65%; display: block";
}else { document.getElementById("InfoOverEvenement4").style.width = "0%"; }
}
function closeNav4() {
    document.getElementById("InfoOverEvenement4").style.cssText = "width:0%; display: none";
}

function openNav5() {
  if(document.getElementById("InfoOverEvenement5").style.width = "0%"){
    document.getElementById("InfoOverEvenement5").style.cssText = "width:65%; display: block";
}else { document.getElementById("InfoOverEvenement5").style.width = "0%"; }
}
function closeNav5() {
    document.getElementById("InfoOverEvenement5").style.cssText = "width:0%; display: none";
}

function openNa6() {
  if(document.getElementById("InfoOverEvenement6").style.width = "0%"){
    document.getElementById("InfoOverEvenement6").style.cssText = "width:65%; display: block";
}else { document.getElementById("InfoOverEvenement6").style.width = "0%"; }
}
function closeNav6() {
   document.getElementById("InfoOverEvenement6").style.cssText = "width:0%; display: none";
}

function openNav7() {
  if(document.getElementById("InfoOverEvenement7").style.width = "0%"){
    document.getElementById("InfoOverEvenement7").style.cssText = "width:65%; display: block";
}else { document.getElementById("InfoOverEvenement7").style.width = "0%"; }
}
function closeNav7() {
    document.getElementById("InfoOverEvenement7").style.cssText = "width:0%; display: none";
}

function openNav8() {
  if(document.getElementById("InfoOverEvenement8").style.width = "0%"){
    document.getElementById("InfoOverEvenement8").style.cssText = "width:65%; display: block";
}else { document.getElementById("InfoOverEvenement8").style.width = "0%"; }
}
function closeNav8() {
    document.getElementById("InfoOverEvenement8").style.cssText = "width:0%; display: none";
}

function openNav9() {
  if(document.getElementById("InfoOverEvenement9").style.width = "0%"){
    document.getElementById("InfoOverEvenement9").style.cssText = "width:65%; display: block";
}else { document.getElementById("InfoOverEvenement9").style.width = "0%"; }
}
function closeNav9() {
    document.getElementById("InfoOverEvenement9").style.cssText = "width:0%; display: none";
}

function openNav10() {
    if(document.getElementById("InfoOverEvenement10").style.width = "0%"){
  document.getElementById("InfoOverEvenement10").style.cssText = "width:65%; display: block";
}else { document.getElementById("InfoOverEvenement10").style.width = "0%"; }
}
function closeNav10() {
    document.getElementById("InfoOverEvenement10").style.cssText = "width:0%; display: none";
}

*/












