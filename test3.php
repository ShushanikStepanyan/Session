<?php

	session_start();
	$answer2 = $_POST['answer2']; 
	$_SESSION['answer2'] = $answer2;

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>session</title>
</head>
<body>
	<p>Question 3</p>
	<p> 4 + 4= ?</p>
<form action="result.php" method="post"> 
<input type="text" name="answer3">
<input type="submit">

</form>

</body>
</html>