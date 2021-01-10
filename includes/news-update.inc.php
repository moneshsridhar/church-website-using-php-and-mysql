<?php
	if (isset($_POST['submit'])) {

		$newsDesc = $_POST['newsdesc'];
		
		include_once "dbh.inc.php";

		if(empty($newsDesc)) {
			header("Location: ../events.php?upload=empty");
		} else {
			$sql = "SELECT * FROM news;";
			$stmt = mysqli_stmt_init($conn);
			if (!mysqli_stmt_prepare($stmt, $sql)) {
				echo "SQL statement failed!";
			} else {
				mysqli_stmt_execute($stmt);
				$result = mysqli_stmt_get_result($stmt);
				$rowCount = mysqli_num_rows($result);
				$setOrder = $rowCount + 1;
				
				$sql = "INSERT INTO news (descNews, orderNews) VALUES (?, ?);";
				if (!mysqli_stmt_prepare($stmt, $sql)) {
					echo "SQL statement failed!";
				} else {
					mysqli_stmt_bind_param($stmt, "ss", $newsDesc, $setOrder);
					mysqli_stmt_execute($stmt);
					header("Location: ../index.php?upload=success");
				}
			}
		}		
	} 
