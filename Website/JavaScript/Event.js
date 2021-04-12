  

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














