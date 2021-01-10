<?php 
	include_once 'header.php';
?>

<style>
	<?php
		include_once 'gallery-grid.css';
	?>
</style>

<br/><br/>
<div class="container gallery-container">
    	<?php
    		if(isset($_SESSION['useruid'])) {
    			echo "<p>Welcome " . $_SESSION['useruid'] . "!</p>";
    		}
    	?>
    <div class="tz-gallery">
    	
        <div class="row">

        	<?php
        	
        	include_once 'includes/dbh.inc.php';
        	$sql = "SELECT * FROM gallery ORDER BY orderGallery DESC;";
        	$stmt = mysqli_stmt_init($conn);
        	if(!mysqli_stmt_prepare($stmt, $sql)) {
        		echo "SQL statement failed";
        	} else {
        		mysqli_stmt_execute($stmt);
        		$result = mysqli_stmt_get_result($stmt);

        		while($row = mysqli_fetch_assoc($result)) {
        			if(isset($_SESSION['useruid'])) {
	        			echo '<div class="col-sm-6 col-md-4 equal-size">

	                            <a class="lightbox" href="images/gallery/'.$row["imgFullNameGallery"].'">
	                                <img src="images/gallery/'.$row["imgFullNameGallery"].'" alt="'.$row["titleGallery"].'" width="350px" height="350px">
	                            </a>
	                            <a href="includes/delete.inc.php?id='.$row["idGallery"].'" style="color:red;">Delete</a>
	                            <h3>'.$row["titleGallery"].'</h3>
	                            <p>'.$row["descGallery"].'</p>
	                            
	                        </div>';
                    } else {
                    	echo '<div class="col-sm-6 col-md-4 equal-size">
	                            <a class="lightbox" href="images/gallery/'.$row["imgFullNameGallery"].'">
	                                <img src="images/gallery/'.$row["imgFullNameGallery"].'" alt="'.$row["titleGallery"].'" width="350px" height="350px">
	                            </a>
	                            <h3>'.$row["titleGallery"].'</h3>
	                            <p>'.$row["descGallery"].'</p>
	                        </div>';
                    }
        		}
        	}
            
            ?>
            
        </div>

    </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>

<br>

<div>
<center>
	<?php
	 	if(isset($_SESSION['useruid'])) {
			echo '<h2>Image Upload</h2>
			<form action="includes/gallery-upload.inc.php" method="post" enctype="multipart/form-data">
				<table>
				<label class="btn btn-info">
					<input type="file" name="file">
				</label>
				<tr>
				<td style="color:black;">
					Filename
				</td>
				<td>
					:
				</td> 
				<td>
					<input type="text" name="filename" placeholder="Filename"> 
				</td>
				</tr>
				<tr>
				<td style="color:black;">
					Image Title
				</td>
				<td>
					:
				</td> 
				<td>
					<input type="text" name="filetitle" placeholder="Image title">
				</td>
				</tr>
				<tr>
				<td style="color:black;"> 
					Image Description 
				</td>
				<td>
					:
				</td> 
				<td>
					<input type="text" name="filedesc" placeholder="Image description">
				</td>
				</tr>
				</table>

				

				<button type="submit" name="submit">Upload</button>
			</form>';
		}
	?>
	<form>
		<input type="" name="">
	</form>
</center>
</div>
<br>

<?php 
	include_once 'footer.php';
?>	