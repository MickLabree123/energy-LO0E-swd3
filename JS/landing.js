// slideshow
var foto = ["1.jpg","2.jpg","3.jpg","4.jpg","5.jpg",]

var test;
var indexSlide = 0;

window.onload = function() {
    test = document.getElementById("slideShow");

    setInterval(slideShow, 2000);

}

function slideShow() {
    test.style.backgroundImage = "url(img/" + foto[indexSlide] + ")";
    indexSlide++;
    if (indexSlide == foto.length) {
        indexSlide = 0;
    }
}

// dropdown
