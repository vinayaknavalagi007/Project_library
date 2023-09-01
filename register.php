<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"project");
$query = "insert into users values('null','$_POST[name]','$_POST[email]','$_POST[password]',$_POST[mobile])";
$query_run = mysqli_query($connection,$query);
?>

<script type="text/javascript">
	alert("Registration successfull...You may Login now !!");
	window.location.href = "index.php";
</script>