<?php
session_start();
include("db.php");
if(@$_SESSION['username']==""){
	session_destroy();
	echo '<script>
		location.href="login.php"
	</script>';

}
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
		<!---start navbar---->

	
		<nav class="bg-white">
	
		      <div class="container-90">
				 <ul class="menu row grid-3 center">
			        <li class="padding "><a href="fees.php" class="display-flex  padding hov">Fees Registration</a></li>
			        <li class="padding"><a href="dasboard.php" class="display-flex   padding hov">Dashboard</a></li>
			        <li class="padding"><a href="logout.php" class="display-flex padding hov">Logout</a></li>
				</ul>  
		    </div>

  		</nav>
	



		<!---end navbar--->
		<br><br>
		<div class="container-80" style="border:3px solid black;">
		
		<h2 class="h2">Fill in the Blanks!</h2>
			<form action="" method="post" enctype="multipart/form-data" style="margin:33px 67px;">
				 <div class="input-box">
					<h3>
						Welcome:<?php echo($_SESSION['username']);?>
					</h3></br></br>
					 <label>Heading:</label></br>
				  <input type="text" required name="heading"></br></br>
				  
				  
				  <label>Image:</label></br>
				  <input type="file" name="images"></br></br>
				  
				  <label>Date:</label></br>
				  <input type="date" required name="date"></br></br>
				  
				  <label>Description:</label></br>
				 <textarea name="description" required rows="10" cols="30" style="width:96%; border: 2px solid rgb(15 4 4 / 80%); border-radius: 40px;">


				</textarea></br></br>
				
				<button type="submit" name="submit" id="button">Submit</button>
				
			
				 </div>
			</form>
		</div>
		<br><br>

	</main>
	<?php
		if(isset($_POST['submit'])){
			$head=$_POST['heading'];
			$image_name=$_FILES['images']['name'];
			$image_temp=$_FILES['images']['tmp_name'];
			$date=$_POST['date'];
			date_default_timezone_set("Asia/kolkata");
			$des=$_POST['description'];

			echo($head);
			echo($date);
			echo($des);
			echo($image_name);


			$insert="insert into upload (heading,image,date,description) value('$head','$image_name','$date','$des')";
			
			$query=mysqli_query($db,  $insert);
			// echo "<pre>";
			// print_r($query);
			// echo "</pre>";
			// die;
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
	 
</body>
</html>