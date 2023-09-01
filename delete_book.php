<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"project");
	$query = "delete from books where book_id=$_GET[bid]";
	$query_run = mysqli_query($connection,$query);


?>
<script type="text/javascript">
	alert("book deleted..")
	window.location.href = "manage_book.php";
</script>