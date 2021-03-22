

<?php
session_start(); 
$id=$_SESSION['id'];
if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['id']);
		header("location: login.php");
	}
$db = mysqli_connect('localhost', 'root', '', 'exam');
$sql = "SELECT * FROM user WHERE id=$id";
$result = $db->query($sql);
$row = $result->fetch_array();

?>


<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>User Profile</title>

<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">

<link rel="stylesheet" type="text/css" href="index_style.css"> 
<link href="css/footer.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/topheader.css">
	
	
</head>
<body>
<div class="header">
		<h2>User Table Profile</h2>
		<?php  if (isset($_SESSION['id'])) : ?>
			<li><a href="login.php?logout='1'" style="color: red;" >logout</a> </li>
		<?php endif ?>
		
	</div>
		
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	
		<div class="input-group">
			<label>Id</label>
			<input type="text"value="<?php echo $row[0]; ?>">
		</div>
		<div class="input-group">
			<label>Name</label>
			<input type="text"value="<?php echo $row[2]; ?>">
		</div>
		<div class="input-group">
			<label>Username</label>
			<input type="text"value="<?php echo $row[1]; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email"value="<?php echo $row[9]; ?>">
		</div>

	</form>

</body>
</html>