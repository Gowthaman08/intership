<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Login</title>

<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">

<link rel="stylesheet" type="text/css" href="index_style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
	
</head>
<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
<body>

<body >
<table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" >
  <tbody>
 <nav id="navbar1" class="navbar navbar-inverse " data-spy="affix" data-offset-top="197">
		  <div class="container">
  <div class="container-fluid">
  	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
	      
  </div>
  </div>
</nav>
  </td>
  </tr>
  <tr><td>

	<div class="header">
		<h2>Login</h2>
	</div>
	
	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password" id="myInput">
			
		</div>
		<input type="checkbox" onclick="myFunction()">Show Password
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
	</form>

  </td>
  </tr>
</tbody></table>

</body>
</html>