<?php
	include("db.php");
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

		<!---start navbar---->

	
		<nav class="bg-white">
	
		      <div class="container-90">
				 <ul class="menu row grid-3 center">
			        <li  class="padding">
			        	<a href="fees.php" class="display-flex padding hov">Fees Registration</a>
			        </li>

			        <li class="padding">
			        	<a href="dasboard.php" class="display-flex padding hov">Dashboard</a>
			        </li>

			        <li class="padding">
			        <a href="logout.php" class="display-flex padding hov">Logout</a>
			        </li>
				</ul>  
		    </div>

  		</nav>
	



		<!---end navbar--->

		<br><br>
<div class="container-90" style="border:3px solid black;">

	
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
				 
				
				  
				  <label>Image:</label></br>
				  <input type="file" value="<?php echo($row['image']);?>" name="images"></br></br>
				  
				  <label>Date:</label></br>
				  <input type="date" required value="<?php echo($row['date']);?>" name="date"></br></br>
				  
				  <label>Description:</label></br>
				 <textarea name="description" required rows="10" cols="30"				 textarea name="description" required rows="10" cols="30" style="width:96%; border: 2px solid rgb(15 4 4 / 80%); border-radius: 40px;">
>
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
<!---edit for fees.php-->
<?php
$gett=$_GET['edite'];
$selected="select * from fees_table  where id='$gett'";
$queryy=mysqli_query($db,$selected);
while($rows=mysqli_fetch_array($queryy)){




?>
<div class="container-90" style="border:3px solid black; background-color: wheat;">
	
		<br><br> 
		<h2 class="h2"> Update Fees Details..!</h2>
			<form  action="#" method="post" class="padding-10" style="margin-left: 16%;">
					
						<div>
							<label>Name:</label><br><br> 
							<input type="text" required name="fnamee" value="<?php echo($rows['fname']);?>" required  class="form-control from">
						</div><br><br>
						<div>
							<label>Course:</label><br><br>
							<input type="text" required name="coursee" required class="form-control from" value="<?php echo($rows['course']);?>">
						</div>
						<br><br>

						<div>
							<label>Fees:</label><br><br>
							<input type="text" required name="feess"value="<?php echo($rows['fees']);?>" required class="form-control from">
						</div><br><br>
						
						
						<button type="submit" name="updated" class="button ml" >Update</button>
		</form>
		<?php }?>


		<?php
		if(isset($_POST['updated'])){
			$name=$_POST['fnamee'];
			$course=$_POST['coursee'];
			$fees=$_POST['feess'];
			$updated="update fees_table set fname='$name',course='$course',fees='$fees' where id='$gett' ";
			$query=mysqli_query($db,$updated);
			if($query){
				header("location:fees.php");
			}
			else{
				echo"not updated";
			}
		}

		?>
			
</div>
</body>
</html>