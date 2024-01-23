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

<?php
$gett=$_GET['dele'];
$quey="delete from fees_table where id='$gett'";
$sqli=mysqli_query($db,$quey);
if($sqli){
	header("location:fees.php?success=deleted successfully");
}
else{
	echo "you are not deleted succesfully";
}
?>