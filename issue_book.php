<?php
require ('function.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin_Dashboard</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="admin_dashboard.php">Library</a>
			</div>
			<font color="white">Welcome : <?php echo $_SESSION['email'];?></font>
		    <ul class="nav navbar-nav navbar-right">
		      <li class="nav-item dropdown">
	        	<a class="nav-link dropdown-toggle" data-toggle="dropdown">My Profile </a>
	        	<div class="dropdown-menu">
	        		<a class="dropdown-item" href="view_profile.php">View Profile</a>
	        		<div class="dropdown-divider"></div>
	        		<a class="dropdown-item" href="edit_profile.php">Edit Profile</a>
	        		<div class="dropdown-divider"></div>
	        		<a class="dropdown-item" href="change_password.php">Change Password</a>
	        	</div>
		      </li>
		      <li class="nav-item">
		        <a href="../logout.php">Logout</a>
		      </li>
		    </ul>
		</div>
	</nav>
	<br><br><br>
	<div>
		<center>
			<form>
			<div>
				<input type="text" name="bookname" placeholder="Book Name">
			</div><br>
			<div>
				<input type="text" name="bookid" placeholder="Book Id">
			</div><br>
			<div>
				<input type="text" name="student_id" placeholder="Student Id">
			</div><br>
			<div>
				<input type="text" name="issue_date" placeholder="Issue_date" value="<?php echo date("Y-m-d");?>">
			</div><br>
			<div>
				<button name = "issue_book">Issue Book</button>
			</div>
		</form>
		</center>
		
	</div>
</body>
</html>
<?php

if(isset($_POST['issue_book']))
	{
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"lms");
		$query = "insert into issued_books values(null,'$_POST[book_name]',$_POST[student_id],'$_POST[issue_date]')";
		$query_run = mysqli_query($connection,$query);

		}

?>