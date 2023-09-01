<!DOCTYPE html>
<html>
<head>
	<title>Library</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<section>
	   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Library</a>
			</div>
	
		    <ul class="nav navbar-nav navbar-right">
		      <li>
		        <a href="index.php">Admin Login</a>
		      </li>
		      <li >
		        <a href="register.php">Register</a>
		      </li>
		      <li >
		        <a href="index.php">Login</a>
		      </li>
		    </ul>
		</div>
	
		</nav>
		<br><br>
	</section>
	<div>
		<center><h3><u>User Registration Form</u></h3>
		<form action="register.php" method="post">
				<div>
					<input type="text" placeholder="Full Name" name="name"  required>
				</div><br>
				<div >
					<input type="text" placeholder="Email Id" name="email"  required>
				</div><br>
				<div>
					<input type="password" placeholder="Password" name="password"  required>
				</div><br>
				<div>
					<input type="text" placeholder="Mobile" name="mobile" required>
				</div><br>
				<button type="submit">Register</button>	
			</form>
		</center>
	</div>
</body>
</html>