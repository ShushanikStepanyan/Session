<?php

	session_start();
	$answer1 = $_POST['answer1']; 
	$_SESSION['answer1'] = $answer1 ;


?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>session</title>
</head>
<body>
	<p>Question 2</p>
	<p>3 + 3= ?</p>
<form action="test3.php" method="post"> 
<input type="text" name="answer2">
<input type="submit">


</form>
</body>
</html>