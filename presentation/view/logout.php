<!-- 
    logout.php
    This file is an HTML page notifying the user that they have logged out and linking them back to the initial login page.
 -->

<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/autoloader.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';
    
    if(isset($_SESSION['UserEmail'])) {
        session_destroy();
    }
?>

<!DOCTYPE html>
<html>

	<head>
		<link rel="stylesheet" type="text/css" href="/presentation/css/style.css">
		<title>Logged Out</title>
	</head>
	
	<body>
		<div class="page-heading">
			<h1>You have been logged out, Proceed to Login!</h1>
			<a href="/index.php">Go to Login</a>
		</div>
		
	</body>
	
	
</html>