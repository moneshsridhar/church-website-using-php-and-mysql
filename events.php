<?php
	include_once 'header.php';

if(isset($_SESSION['useruid'])) {
echo '<div class="container">
	<h1>
		Add news
	</h1>
	<form action="includes/news-update.inc.php" method="post">
	  <div class="form-group">
	    <label for="formGroupExampleInput" style="color: black">Add : </label>
	    <input type="text" class="form-control" name="newsdesc" id="formGroupExampleInput" placeholder="Type here..">
	  </div>
	  <button type="submit" name="submit">Update</button>
	</form>
</div>';
}
else{
	header("Location: index.php?loginerror");
}
?>