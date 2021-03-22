<?php 
	session_start();

	// variable declaration
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'exam');


	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username= mysqli_real_escape_string($db, $_POST['username']);
		$password= mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
			$results=mysqli_query($db, $query);
			
			$row = $results->fetch_array();
			if (mysqli_num_rows($results) == 1) {
				$_SESSION['id'] = $row[0];
				header('location: userListPro.php');
			}else {
				array_push($errors, "invalid password alert");
			}
		}
	}


?>