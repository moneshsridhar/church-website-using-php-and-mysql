<?php 
	include_once 'header.php';
?>

<style>
	<?php 
		include_once 'signup-style.css';
	?>	
</style>

	<main class="main-content">
			<div class="fullwidth-block">
				<div class="container">
					<div class="background">
						<div class="container">
						    <div class="screen">
						      <div class="screen-body">
						        <div class="screen-body-item left">
						          <div class="app-title">
						            <span>Login</span>
						          </div>
						          <div class="app-contact">CARMEL INFANT JESUS CHURCH</div>
						          <span style="color: yellow; text-transform: uppercase;">
						            <?php
										if(isset($_GET["error"])) {
											if($_GET["error"] == "wronglogin") {
												echo "<p>Incorrect Login Information!</p>";
											}
											else if($_GET["error"] == "emptyinput") {
												echo "<p>Fill in all fields!</p>";
											}
										}
									?>
							      </span>
						        </div>
						        <div class="screen-body-item">
						        <form method="post" action="includes/login.inc.php">
						          <div class="app-form">
						            <div class="app-form-group">
						              <input type="text" class="app-form-control" name="uid" placeholder="USERNAME / EMAIL">
						            </div>
						            <div class="app-form-group">
						              <input type="password" class="app-form-control" name="pwd" placeholder="PASSWORD">
						            </div>
						            <div class="app-form-group buttons">
						              <button type="submit" name="submit">Login</button>
						            </div>
						          </div>
						        </form>
						        </div>
						      </div>
						    </div>
						</div>
					</div>
				</div>
			</div>
			</main> <!-- .main-content -->


<?php 
	include_once 'footer.php';
?>			