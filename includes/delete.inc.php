<?php
	include_once 'dbh.inc.php';
	include_once 'gallery-upload.inc.php';

	$id = $_GET['id'];

	$sql = "SELECT * FROM gallery;";
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		echo "SQL 2 statement failed!";
	} else {
		mysqli_stmt_execute($stmt);
		$sql = "DELETE FROM gallery WHERE idGallery=$id;";
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			echo "SQL statement failed!";
		} else {
			$result = mysqli_query($conn, "SELECT imgFullNameGallery FROM gallery WHERE idGallery=$id;");
			$row = mysqli_fetch_array($result);
			$path = "../images/gallery/".$row[imgFullNameGallery];
			if(!unlink($path)) {
				echo 'Error in deleting files';
			}
			else {
				mysqli_query($conn, $sql);
				mysqli_stmt_execute($stmt);
				header("Location: ../gallery.php?upload=success");
			}
		}
	}
?>