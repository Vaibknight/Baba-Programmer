<?php
session_start();
include("db.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/back.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
	<title>blog</title>
</head>
<body>
	<main>
		<div class="container-80" style="border:3px solid black;">
		<a href="fees.php">Fees Registration</a>
		<h2 class="h2">Fill in the Blanks!</h2>
			<form action="" method="post" enctype="multipart/form-data" style="margin:33px 67px;">
				 <div class="input-box">
					<h3>
						Welcome:<?php echo($_SESSION['username']);?>
					</h3></br></br>
					 <label>Heading:</label></br>
				  <input type="text" required name="heading"></br></br>
				  
				  <label>Title:</label></br>
				  <input type="text" required name="title"></br></br>
				  
				  <label>Image:</label></br>
				  <input type="file" name="images"></br></br>
				  
				  <label>Date:</label></br>
				  <input type="date" required name="date"></br></br>
				  
				  <label>Description:</label></br>
				 <textarea name="description" required rows="10" cols="30" style="width:61%;">
				</textarea></br></br>
				
				<button type="submit" name="submit" id="button">Submit</button>
				
				<button type="submit" name="submit" id="dasboard">
					<a href="dasboard.php" class="text-none white">Dasboard</a>
				</button>
				 </div>
			</form>
		</div>
	</main>
	<?php
		if(isset($_POST['submit'])){
			$head=$_POST['heading'];
			$title=$_POST['title'];
			$image_name=$_FILES['images']['name'];
			$image_temp=$_FILES['images']['tmp_name'];
			$date=$_POST['date'];
			$des=$_POST['description'];
			$insert="insert into upload (heading,title,image,date,description) value('$head','$title','$image_name','$date','$des')";
			$query=mysqli_query($db,$insert);
			if($query){
				move_uploaded_file("$image_temp","upload/".$image_name);
				echo("you are inserted successfully");
				header("location:dasboard.php");
				
			}
			else{
				echo("not inserted");
			}
			
		}
	?>
	 <?php
        if(!isset($_SESSION['username'])){
            header("location:index.php");
            exit();
        }
    ?>
</body>
</html>