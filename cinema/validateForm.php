<!DOCTYPE html>
<html lang="en">

	<?php include './writeFile.php';?>

	
<head>
	<meta charset="utf-8">
	<title>Verify Information</title>
	<link rel="stylesheet" href="./css/screen.css">
</head>
<body>
<h1  id="banner">Verify Information</h1>
	<div id="main">
		<p>You are about to change the LOFFA cinema information</p>

			<legend>Please check all fields</legend>
			<p>
				<?php 	
					$movie_name = htmlspecialchars($_POST['movie_name']);  
					$movie_trailer = htmlspecialchars($_POST['movie_trailer']);
					//$movie_time = htmlspecialchars($_POST['movie_time'])." ".htmlspecialchars($_POST['am_pm']);
					$movie_time = htmlspecialchars($_POST['movie_time']);	
						  
					echo "<li>Movie Name: ".$movie_name."</li>";
					echo "<li>Test link: <a href='".$movie_trailer."' target='_blank'>".$movie_name."</a></li>";
					echo "<li>Movie Time: ".$movie_time."</li>";
					$whatIWant = substr($movie_trailer, strpos($movie_trailer, "=") + 1);    
				?> 
			</p>
			<p>
				<form method="post" action="final.php">
					<input type="hidden" name="field_movie_name" value="<?php echo $movie_name; ?>">
					<input type="hidden" name="field_movie_trailer" value="<?php echo $whatIWant; ?>">
					<input type="hidden" name="field_movie_time" value="<?php echo $movie_time; ?>">
					<input type="submit" name="submit" value="Update Cinema Information">
					<input type="button" value="Back" onclick="history.go(-1);return true;">
				</form>
			</p>
			
	</div>
</body>
</html>




