



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
    

function openNav() {
    if(document.getElementById("InfoOverEvenement").style.width = "0%"){
      document.getElementById("InfoOverEvenement").style.width = "80%";
    }else{
      document.getElementById("InfoOverEvenement").style.width = "0%";
      }
    }
  
    function closeNav() {
      document.getElementById("InfoOverEvenement").style.width = "0%";
    }



































