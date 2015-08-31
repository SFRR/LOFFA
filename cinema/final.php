<?php include './writeFile.php'; ?>
<?php
		include './constants.php';
	$field_movie_name =  htmlspecialchars($_POST['field_movie_name']);
	$field_movie_trailer = ($_POST['field_movie_trailer']);
	$field_movie_time = htmlspecialchars($_POST['field_movie_time']);

	$contents = file_get_contents($FILE_NAME);


	$patterns = array();
	$patterns[0] = '/movie_name=.*/';
	$patterns[1] = '/movie_trailer=.*/';
	$patterns[2] = '/movie_time=.*/';
	$replacements = array();
	$replacements[2] = "movie_name=$field_movie_name$";
	$replacements[1] = "movie_trailer=$field_movie_trailer$";
	$replacements[0] = "movie_time=$field_movie_time$";

	echo $contents;
	$contents = preg_replace($patterns, $replacements, $contents);
	echo "<br>";
	echo $contents;

	$array = explode('$', $contents);
	write_php_ini($array);
	header("Location: ../");
	die();

?>