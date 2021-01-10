<?php
	include_once 'header.php';
?>

<style type="text/css">
	.scroll-left {
		height: 50px; 
		overflow: hidden;
		position: relative;
		background: lavender; 
	}
	.scroll-left p {
		position: absolute;
		width: 100%;
		height: 100%;
		color: darkblue;
		margin: 0;
		line-height: 50px;
		text-align: center;
		animation: blinker 1s linear infinite;
		/* Starting position */
		-moz-transform:translateX(100%);
		-webkit-transform:translateX(100%); 
		transform:translateX(100%);
		/* Apply animation to this element */ 
		-moz-animation: scroll-left 15s linear infinite;
		-webkit-animation: scroll-left 15s linear infinite;
		animation: scroll-left 15s linear infinite;
		}
		@keyframes blinker {  
  			50% { opacity: 0; }
		}
		/* Move it (define the animation) */
		@-moz-keyframes scroll-left {
		0% { -moz-transform: translateX(100%); }
		100% { -moz-transform: translateX(-100%); }
		}
		@-webkit-keyframes scroll-left {
		0% { -webkit-transform: translateX(100%); }
		100% { -webkit-transform: translateX(-100%); }
		}
		@keyframes scroll-left {
		0% { 
		-moz-transform: translateX(100%); /* Browser bug fix */
		-webkit-transform: translateX(100%); /* Browser bug fix */
		transform: translateX(100%); 
		}
		100% { 
		-moz-transform: translateX(-100%); /* Browser bug fix */
		-webkit-transform: translateX(-100%); /* Browser bug fix */
		transform: translateX(-100%); 
		}

		
	}
</style>
<div class="hero">
	<div class="slides">
		<li data-bg-image="images/DSC_4763.jpg">
			<div class="container">
				<div class="slide-content">
					<small class="slide-subtitle">thanjai Carmel Infant Jesus Church</small>
					<h2 class="slide-title">Place with a real love</h2>
					<a href="https://www.youtube.com/channel/UCY6KjrDBN_tIRFT_QNqQbRQ" class="button">Watch Us On Youtube</a>
				</div>
			</div>
		</li>

		<li data-bg-image="images/DSC_4767.jpg">
			<div class="container">
				<div class="slide-content">
					<small class="slide-subtitle">தஞ்சை கார்மல் குழந்தை இயேசு தேவாலயம்</small>
					<h2 class="slide-title">Place with a real love</h2>
					<a href="https://www.youtube.com/channel/UCY6KjrDBN_tIRFT_QNqQbRQ" class="button">Watch Us On Youtube</a>
				</div>
			</div>
		</li>
	</div>
</div>
<div class="scroll-left">
		<p>
			<?php
        	include_once 'includes/dbh.inc.php';
        	$sql = "SELECT * FROM news ORDER BY orderNews DESC;";
        	$stmt = mysqli_stmt_init($conn);
        	if(!mysqli_stmt_prepare($stmt, $sql)) {
        		echo "SQL statement failed";
        	} else {
        		mysqli_stmt_execute($stmt);
        		$result = mysqli_stmt_get_result($stmt);

        		$row = mysqli_fetch_assoc($result);
        		echo '<p> [NEWS] : '.$row["descNews"].'</p>';
        	}
            ?>
		</p>
	</div>

<main class="main-content">
	<div class="fullwidth-block">
		<div class="container">
			<center><h2>History Of the Church</h2></center><br>
			 <center>
			 <div class="col-md-6">
			 <div class="flip-card">
			  <div class="flip-card-inner">
			    <div class="flip-card-front">
			      <img src=https://rlv.zcache.com/our_lady_of_mount_carmel_baby_jesus_scapular_classic_round_sticker-r797d7a047b6a45c2a15f49bdc47e8cc6_0ugmp_8byvr_704.jpg alt="Avatar" style="width:300px;height:300px;">
			    </div>
			    <div class="flip-card-back"><br><br>
			      <h3>THE HISTORY OF DEVOTION</h3> 
			      <p>The history of the Infant of Prague started in the 17th century when the statue was brought into Bohemia(now Czech Republic) by a Spanish Lady .....</p>
			      <a href="history.php"><button class="button1 button5">Read More</button></a>
			    </div>
			  </div>
			</div>
			</div>
			</center>
				
			<center>
			<div class="col-md-6">
			 <div class="flip-card">
			  <div class="flip-card-inner">
			    <div class="flip-card-front">
			      <img src=https://rlv.zcache.com/our_lady_of_mount_carmel_baby_jesus_scapular_classic_round_sticker-r24b85c0bf113442298e8cb44ff879f68_0ugmp_8byvr_307.jpg alt="Avatar" style="width:300px;height:300px;">
			    </div>
			    <div class="flip-card-back"><br><br>
			      <h3>HISTORY OF INFANT JESUS OF PRAGUE</h3> 
			      <p>The childhood of Jesus is an active devotion in the Catholic church for nearly a thousand years.</p>
			      <a href="history_jesus.php"><button class="button1 button5">Read More</button></a>
			    </div>
			  </div>
			</div>
			</div>
			</center>
		</div> <!-- .container -->
	</div> <!-- section -->

	<div class="fullwidth-block">
	 	<div class="container">
			<div class="row">
			 	<center><h2 style=" padding-top: 50px">Reading Of the Day</h2></center>
				<br>
				<div align="center">
					<a href="https://www.vaticannews.va/en/word-of-the-day.html"><button class="button1 button5" style="text-transform: uppercase; font-size: 17px;">Today's reading</button></a>
					<a href="http://bibleintamil.com/reflection/u_startingreflection.htm"><button class="button1 button5">இன்றைய வாசிப்பு</button></a>
				</div>
			</div>
		</div>
	</div>

	 <div class="fullwidth-block">
	 		<div class="container">
			 <div class="row">
			 	<div class="col-md-6">
					<a href="thoughts.php"> <div class="card">
					   <img src="images/card1.jpg" alt="Avatar" style="width:100%">
					   <center> <h3><b style="color: grey;">Thought of the day</b></h3></center>
					   <center> <b><span id="date"></span>.
					     <span id="month"></span>.
					      <span id="year"></span></b></center>
					    <script type="text/javascript"> 
					    var d=new Date();
					    var date=d.getDate();
					    var month=d.getMonth();
					    var year=d.getFullYear();
					    document.getElementById('date').innerHTML=date;
					    document.getElementById('month').innerHTML=month+1;
					    document.getElementById('year').innerHTML=year;

					    </script>
					</div></a>
				</div>
				<div class="col-md-6">
					<a href="prayer_request.php">
						<div class="card-right">
					    <img src="images/request.jpg" alt="Avatar" style="width:100%">
					    <center> <h3><b style="color: grey;">Prayer Request</b></h3></center>
						</div>
					</a>
				</div>
			</div>
		</div> <!-- .container -->	
	</div> <!-- section -->


</main> <!-- .main-content --> 
		

<?php 
	include_once 'footer.php';
?>			