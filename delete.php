<?php
include("db.php");
?>
<?php
	$get=$_GET['del'];
	$query="delete from upload where id='$get'";
	$mysqli=mysqli_query($db,$query);
	if($mysqli){
		header("location:dasboard.php?succes=deleted succesfully");
	}
	else{
		echo("you are not deleted succesfully");
	}
?>