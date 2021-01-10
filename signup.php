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
							            <span>Sign Up</span>
							          </div>
							          <div class="app-contact">CARMEL INFANT JESUS CHURCH</div>
							          <span style="color: yellow; text-transform: uppercase;">
							            <?php
											if(isset($_GET["error"])) {
												if($_GET["error"] == "emptyinput") {
													echo "<p>Fill in all fields!</p>";
												}
												else if($_GET["error"] == "invaliduid") {
													echo "<p>Choose a proper username!</p>";
												}
												else if($_GET["error"] == "invalidemail") {
													echo "<p>Choose a proper email!</p>";
												}
												else if($_GET["error"] == "passwordsdoesnotmatch") {
													echo "<p>Passwords does not match</p>";
												}
												else if($_GET["error"] == "stmtfailed") {
													echo "<p>Something went wrong, try again!</p>";
												}
												else if($_GET["error"] == "usernametaken") {
													echo "<p>Username already taken</p>";
												}
												else if($_GET["error"] == "none") {
													echo "<p>You have signed up!</p>";
												}
											}
										?>
							            </span>
							        </div>
							        <div class="screen-body-item">
							        <form method="post" action="includes/signup.inc.php">
							          <div class="app-form">
							            <div class="app-form-group">
							              <input type="text" class="app-form-control" name="name" placeholder="FULL NAME">
							            </div>
							            <div class="app-form-group email">
							              <input type="text" class="app-form-control" name="email" placeholder="EMAIL">
							            </div>
							            <div class="app-form-group">
							              <input type="text" class="app-form-control" name="uid" placeholder="USERNAME">
							            </div>
							            <div class="app-form-group">
							              <input type="password" class="app-form-control" name="pwd" placeholder="PASSWORD">
							            </div>
							            <div class="app-form-group">
							              <input type="password" class="app-form-control" name="pwdrepeat" placeholder="REPEAT PASSWORD">
							            </div>
							            <div class="app-form-group buttons">
							              <button type="submit" name="submit">Sign Up</button>
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