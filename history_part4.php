<?php
	include_once 'header.php';
?>
<style>
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
              
	</style>
			<br><br>
	<center><h2>HISTORY OF THE CHURCH</h2></center><br>
<div class="container">
<h3 style="color:black;text-align: left; font-weight: bold;">THE DEVOTION HISTORY (PART-4)</h3>

<p style="color: black;">&nbsp &nbspAfter that period, Prague experienced more wars and unrest, but the church and <b>the Infant Jesus chapel</b> was <b>miraculously protected</b>. In 1776, the altar was rebuilt using marble and two huge sculptures of the Blessed Virgin Mary and St. Joseph were placed to the left and right sides of the altar. The Holy Infant was left in a glass case standing in a pedestal engraced with crystals and surrounding the Infant were twenty angels in gold.During the Pentecost holidays in 1637,<b> Father Cyrillus</b> returned to Prague from Munich and lived there until his death in 1675. And after a prolonged search, he found the broken, abandoned, long-last treasure almost buried in dust. Full of joy and gratitude, he kissed the disfigured statue and placed it on an altar in the oratory.</p>
<p style="color: black;">&nbsp &nbspThe long forgotten devotion were now revived with renewed vigor. One day, while praying before the statue, he distinctly heard these words, "Have pity on me, and I will have pity on you. Give me my hands, and I will give you peace. <b>The more you honour me, the more I will bless you.</b>" After great efforts and much hardships, he had the Infant Jesus hands repaired.The "Little Prague Baby" again became an object of worship of believers and many extraodinary events were attributed to it. And ever since the statue was fixed, a number of miracles had occurred and the word began to spread, resulting in a large number of veneration to the Holy Infant.</p>
<p style="color: black;">&nbsp &nbspIn thanksgiving for the numerous graces and cures received, the consecrating Bishop of Prague solemnly crowned the Holy Infant on <b>April 14, 1655</b> on a Sunday after Easter as a sign emphasizing the <b>royal and divine dignity of God who has become a child.</b>
And the anniversary of this coronation has been celebrated ever since with a festive mass on the<b> Ascension holiday</b> which is the culmination of the Easter mystery considered by the New Testament to be the real coronation in the glory and the fulfilment of God's Incarnation.
</p><br>

<h3 style="color:black;text-align: left; font-weight: bold;">THE DEVOTION HISTORY (PART-5)</h3>

<h5 style="color:black;text-align: left; font-weight: bold;">CONCLUSION</h4>
<p style="color: black;">&nbsp &nbspDevotion to the royal Christ Child under the title of the Infant Jesus of Prague is one of the more powerful and beloved devotions in the church.
This devotion has grown proportion and has continued to spread throughout the world. Many favours and graces were received which brought thousands of people to his statue.
</p>
<p style="color: black;">&nbsp &nbspThe Miraculous Infant Jesus of Prague is adorned by believers not only in Europe, but also in India, in the Philippines, in Australia and especially Latin American countries. A testimony to this veneration are the many sanctuaries all over the world further spreading the fame of this little statue and the reverence for the Incarnation of Jesus Christ, our Lord and our God.</p>
</div>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext"></div>
  <center><img src="birth2.jpg" style="width:90%">
  <div class="text"></div></center>
</div>

 <div class="mySlides fade">
  <div class="numbertext"></div>
 <center> <img src="birth.jpg" style="width:90%;">
  <div class="text"></div></center>
</div> 
<!-- <div class="mySlides fade">
  <div class="numbertext"></div>
  <center><img src="" style="width:70%">
  <div class="text"></div></center>
</div> -->

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <!-- <span class="dot"></span>  -->
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
  setTimeout(showSlides, 3000); // Change image every 3 seconds
}
</script><br>

<?php
	include_once 'footer.php';
?>
