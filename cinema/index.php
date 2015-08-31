<!DOCTYPE html>
<html lang="en">

	<?php include './writeFile.php';?>

	<?php
	  function runMyFunction() {
		$emptyNullifyCinemaInformation="[cinema]\n movie_name=\n movie_trailer=\n movie_time=\n";
		$array = explode(' ', $emptyNullifyCinemaInformation);
		write_php_ini($array);
		header("Location: ../");
		die();
	  }

	  if (isset($_GET['clearInfo'])) {
		runMyFunction();
	  }
	?>
	
<head>
	<meta charset="utf-8">
	<title>Information</title>
	<link rel="stylesheet" href="./css/screen.css">
	<script src="../javascript/jquery.js"></script>
	<script src="../javascript/jquery.validate.js"></script>
	
<!-- Plugin files below -->
<link rel="stylesheet" type="text/css" href="../css/jquery.ptTimeSelect.css" />
<script type="text/javascript" src="../javascript/jquery.ptTimeSelect.js"></script>

<!-- Prerequisites: jQuery and jQuery UI Stylesheet -->
<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.21/themes/redmond/jquery-ui.css" />
	
	<script>
	 
	 
	
	function eraseText() {
		document.getElementById("cname").value = "";
		document.getElementById("curl").value = "";
		document.getElementById("selectTime").value = "";
	}

	
$.validator.addMethod("noSpace", function(value, element) { 
    if(value.charAt(0) == " ")
	{
		alert("The film name cannot start with a space!");
	}
	return value.charAt(0) != " "; 
  });

	
	
	
	$().ready(function() {
	
	    // find the input fields and apply the time select to them.
        $('#main #selectTime').ptTimeSelect();
	
		// validate form
		$("#commentForm").validate({
			rules: {
				movie_name: {
					required: true,
					minlength: 1,
					noSpace: true 
				},
				movie_trailer: {
					required: true,
					minlength: 5
				},
				movie_time: {
					required: true
				}
			},
			messages: {
				movie_name: "Please enter a film name",
				movie_trailer: {
					required: 'e.g. https://www.youtube.com/watch?v=yRUAzGQ3nSY'
				},
				movie_time: "Please choose a time"
			}
		});
	});
	</script>
	<style>
	#commentForm {
		width: 500px;
	}
	#commentForm label {
		width: 280px;
	}
	#commentForm label.error {
		margin-left: 283px;
		width: 340px;
	}
	#commentForm input.submit {
		margin-left: 283px;
	}
	#commentForm #curl {
		width: 320px;
	}
	</style>
</head>
<body>
<h1  id="banner">LOFFA Autism Friendly Cinema</h1>
<div id="main">
	<p>LOFFA cinema information</p>
	<form class="cmxform" id="commentForm" method="post" action="validateForm.php">
		<fieldset>
			<legend>Please complete all fields</legend>
			<p>
				<label for="cname">Film Name (required, name of the film)</label>
				<input id="cname" name="movie_name" minlength="2" type="text" value='<?php echo getIniFileProperties("cinema", "movie_name");?>'>
			</p>
			<p>
				<label for="curl">Film trailer (required, paste a youtube link)</label>
				<input id="curl" type="url" name="movie_trailer" value='<?php echo getIniFileProperties("cinema", "movie_trailer");?>'>
			</p>
			<p>
				<label >Film time (required)</label>
				<input id="selectTime" name="movie_time"  value='<?php echo getIniFileProperties("cinema", "movie_time");?>' readonly="readonly" > 
			</p>
			<p>
				<input class="submit" type="submit" value="Submit">
				<input type="button" value="Clear" onclick="javascript:eraseText();">
				</p>
			</p>
			<p>
				<input value="Remove Cinema Information" style="font-face: 'Comic Sans MS'; font-size: larger; color: white; background-color: red; border: 3pt ridge lightgrey;" class="submit" type="button" value="Submit" onclick="javascript:eraseText(); location.href='index.php?clearInfo=true';">
			</p>
		</fieldset>
	</form>
</div>
</body>
</html>
