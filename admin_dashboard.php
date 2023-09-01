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
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd">
		<div class="container-fluid">
			
		    <ul class="nav navbar-nav navbar-center">
		      <li class="nav-item">
		        <a class="nav-link" href="admin_dashboard.php">Dashboard</a>
		      </li>
		      <li class="nav-item dropdown">
	        	<a class="nav-link dropdown-toggle" data-toggle="dropdown">Books </a>
	        	<div class="dropdown-menu">
	        		<a class="dropdown-item" href="add_book.php">Add New Book</a>
	        		<div class="dropdown-divider"></div>
	        		<a class="dropdown-item" href="manage_book.php">Manage Books</a>
	        	</div>
		      </li>
		      </li>
	          <li class="nav-item">
		        <a class="nav-link" href="issue_book.php">Issue Book</a>
		      </li>
		  </ul>
	</nav><br>
	<div class="col-md-3">
	<div class="card" style="width: 18rem;">
  		<div class="card-body">
    		<h5 class="card-title">Registered users</h5>
    		<p class="card-text">No.of total Users:<?php echo get_user_count();?></p>
    	<a href="registered_user.php" class="card-link">view registered users</a>
  		</div>
	</div>
</div><br>
	<div class="col-md-3">
	<div class="card" style="width: 18rem;">
  		<div class="card-body">
    		<h5 class="card-title">Registered books</h5>
    		<p class="card-text">No.of available book :<?php echo get_book_count()?></p>
    	<a href="regbook.php" class="card-link"> View registered books</a>
  		</div>
	</div>
</div><br>

<div class="col-md-3">
	<div class="card" style="width: 18rem;">
  		<div class="card-body">
    		<h5 class="card-title">Issued books</h5>
    		<p class="card-text">No.of issued book:<?php echo get_issued_book_count()?>;</p>
    	<a href="view_issued_book.php" class="card-link"> View issued books</a>
  		</div>
	</div>
</div>
</body>
</html>