<?php
require ('function.php');
session_start();
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"project");
$book_name="";
$book_id="";
$price="";
$query = "select * from books where book_id = '$_GET[bid]'";
$query_run = mysqli_query($connection,$query);
while ($row = mysqli_fetch_assoc($query_run)) {
	$book_name=$row["book_name"];
	$book_id=$row['book_id'];
	$price=$row['price'];


}
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
				<label>Book Id:</label><br>
				<input type="text" name="bookid" value="<?php echo $book_id;?>">
			</div>
			<div>
				<label>Book Name:</label><br>
				<input type="text" name="bookname" value="<?php echo $book_name;?>">
			</div><div>
				<label>Book price:</label><br>
				<input type="text" name="price" value="<?php echo $price;?>">
			</div><br>
				<button name="update">Update Book</button>
			</div>
		</form>
		</center>
		
	</div>
	<div></div>

</body>
</html>

<?php
	if(isset($_post['update'])){
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"project");

		$query = "update books set book_id=$_POST[book_id],book_name='$_POST[book_name]',price=$_POST[price] where book_id=$_GET[bid]";
		$query_run = mysqli_query($connection,$query);
		//header('Location:manage_book.php');

	}
?>