<?php
	include("db.php");
	error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/back.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
	<title>Edit Page</title>
</head>
<body>
<div class="container-80" style="border:3px solid black;">

	
	<?php
		$get=$_GET['edit'];
		$select="select * from upload where id='$get'";
		$query=mysqli_query($db,$select);
		while($row=mysqli_fetch_array($query)){
			
		
	?>
	<h2 class="h2">Update Here!</h2>
	<form action="#" method="post" enctype="multipart/form-data" style="margin:33px 67px;">
	
			<div class="input-box">
				<label>Heading:</label></br>
				 <input type="text" required value="<?php echo($row['heading']);?>" name="heading"></br></br>
				 
				 <label>Title:</label></br>
				  <input type="text" required value="<?php echo($row['title']);?>" name="title"></br>
				  
				  <label>Image:</label></br>
				  <input type="file" value="<?php echo($row['image']);?>" name="images"></br></br>
				  
				  <label>Date:</label></br>
				  <input type="date" required value="<?php echo($row['date']);?>" name="date"></br></br>
				  
				  <label>Description:</label></br>
				 <textarea name="description" required rows="10" cols="30" style="width:61%;">
				</textarea></br></br>
				
				<button type="submit" name="update" id="button">Update</button>
				
			</div>
	</form>
	<?php }?>
	<?php
		if(isset($_POST['update'])){
			$head=$_POST['heading'];
			$title=$_POST['title'];
			$image_name=$_FILES['images'] ['name'];
			$image_temp=$_FILES['images'] ['tmp_name'];
			$date=$_POST['date'];
			$desc=$_POST['description'];
			$update="update upload set heading='$head',title='$title',image='$image_name',date='$date',description='$desc' where id='$get'";
			$query=mysqli_query($db,$update);
        if($query){
            move_uploaded_file("$image_temp","upload/".$image_name);
            header("location:dasboard.php");
        }
		else{
			echo("not Update");
		}
		}
	?>
</div>	
</body>
</html>