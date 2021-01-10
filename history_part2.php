
<?php
	include_once 'header.php';
?>
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}


 .mid{
        width: 100%;
        margin-right: auto;
        margin-left: auto;

      }

      .next {
              text-decoration: none;
              display: inline-block;
              padding: 8px 16px;
            }

            .next:hover {
              background-color: #ddd;
              color: black;
            }



            .next {
              background-color: rgb(84, 84, 92);
              color: white;
            }

</style>
</head>
<body>

	<div class="site-content">
			<br><br>
			<div class="container">
	 <center><h2>HISTORY OF THE CHURCH</h2></center><br>
	
	
	<h3 style="color:black;text-align: left; font-weight: bold;">THE HISTORY OF DEVOTION (PART2)</h3>

	  <p style="color: black">&nbsp &nbsp This noble lady in turn presented the Holy Infant to her daughter, <b>Lady Polyxena of Lobkovice</b> when she got married in 1587. When Polyxena's husband died in 1623, she resolved to spend the remainder of her days in works of piety and charity.She was particularly generous to the<b> Carmelite</b> priests and brothers of Prague. In 1623, Lady Polyxena presented her beloved statue to the Descalced Carmelites at the church of our Lady Victorious with these prophetic words: "I hereby give you what I prize most highly in this world. As long as you venerate this image you will not be in want".This statue then became known as the <b>Infant Jesus of Prague </b>which stands nineteen inches high.</p>

	  <p  style="color: black">&nbsp &nbsp It is clothed in a royal mantle and has a beautiful jeweled crown on its head. Its right hand raised in <b>blessing</b>, its left holds a<b> globe</b> signifying sovereignty.<b>Mala Strana</b> is situated at the foothills of Prague Castle which belongs to the most enchanting and interesting Prague districts and in its charming environment,<b> the Church of our Lady Victorious</b> stands with its facade facing Karmelitska Street. The city was founded in 1257 by King Premysl Otakar II as Prague's second town where Baroque architecture prevails.</p>

	  <p  style="color: black">&nbsp &nbsp It has an eminent place among the numerous churches of <b>Mala Strana</b>, not only for its architecturic structures and artistic decoration, but mainly because it is here that the famous statuette of the Graceful Infant Jesus of Prague is held and venerated. The church was built in the year 1611-1613.</p>
	</div>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext"></div>
  <center><img src="Polyxena.jpg" style="width:100%">
  <div class="text">Polyxena,Princess Lobkowicz</div></center>
</div>

 <div class="mySlides fade">
  <div class="numbertext"></div>
 <center> <img src="church.jpg" style="width:70%;">
  <div class="text">Lady Victorious Church</div></center>
</div> 
<div class="mySlides fade">
  <div class="numbertext"></div>
  <center><img src="Strana.jpg" style="width:100%">
  <div class="text"> Malá Strana, Prague</div></center>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script><br>

 <div align="center"> <a href="history_part3.php"  class="next">History Part 3 &raquo;</a></div><br><br>


<?php
	include_once 'footer.php';
?>