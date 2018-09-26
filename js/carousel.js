var slideIndex = 0;
			carousel1();

			function carousel1() {
			    var i;
			    var x = document.getElementsByClassName("globosCarousel");
			    var y = document.getElementsByClassName("pelotasCarousel");
			    for (i = 0; i < x.length; i++) {
			      x[i].style.display = "none";
			      y[i].style.display = "none";
			    }
			    slideIndex++;
			    if (slideIndex > x.length) {slideIndex = 1}
			    x[slideIndex-1].style.display = "block";
				y[slideIndex-1].style.display = "block";
			    setTimeout(carousel1, 2000);
			}