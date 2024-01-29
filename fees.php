<?php 
	session_start();
	 include('db.php');
	 if(@$_SESSION['username']==""){
	 	session_destroy();
	 	echo '<script>
	 		location.href="login.php"
	 	</script>';

	 }
?>
<html>
	<head>
		<title>
			Web Page
		</title>
		
		<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="css/style.css" rel="stylesheet">
		<link rel="stylesheet" href="css/back.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
		
	</head>
	<body>

	<nav class="bg-white">
	
	<?php 
		$count = "select * from counts";
		$printCount = mysqli_query($db,$count);
		if(!$printCount){
			die('Retrieve query error'.$count);

		}

		$totalVisitors = mysqli_num_rows($printCount);

	?>

	

	
		  <div class="container-90">
			 <ul class="menu row grid-4 center">
				<li class="padding "><a href="fees.php" class="display-flex  padding hov">Fees Registration</a></li>
				<li class="padding"><a href="dasboard.php" class="display-flex   padding hov">Dashboard</a></li>
				
				<li class="padding"><a href="logout.php" class="display-flex padding hov">Logout</a></li>
				<li class="padding" style="position : relative">
					<div class="left-eye">
						<div class="shut">
						<span></span>
						</div>
						<div class="ball">
					</div>
					</div>
					<h1 style="position: absolute; right: 30px;"> <?php echo("$totalVisitors");?></h1>
				</li>
			</ul>  
		</div>

	  </nav>
	
	<br><br>
	<br><br>
		<h2 class="container-90">Welcome:<?php echo($_SESSION['username']);?></h2></br></br>
				<div class="container-90" style="border:3px solid black; background-color: wheat;">
					<h2 class="h2">Fees Details..!</h2>
					<form  action="#" method="post" class="padding-10" style="margin-left: 20%;">
					
						<div>
							<label>Name:</label><br><br> 
							<input type="text" required name="fname" required class="form-control from">
						</div><br><br>
						<div>
							<label>Course:</label><br><br>
							<input type="text" required name="course" required class="form-control from">
						</div><br><br>
						<div>
							<label>Fees:</label><br><br>
							<input type="text" required name="fees" required class="form-control from">
						</div><br><br>
						
						
						<input type="submit" class="button ml" name="Login"/>
					</form>
					</div>
					<?php
						if(isset($_POST['Login'])){
							  $fname=$_POST['fname'];
							  $course=$_POST['course']; 
							  $fees=$_POST['fees'];
							  $insert="insert into fees_table(fname,course,fees) values('$fname','$course','$fees')";
							  $query=mysqli_query($db,$insert);
							  if($query){
								  echo("Insertted Success Fully");
								  
							  }
							  else{
								  echo("Not Inserted data:");
							  }
							  
							
						}
					?>
					
					<br><br>
					<div class="container-90">
					<table style="width:100%;">
							<thead>
								<tr>
									<th>id</th>
									<th>Name</th>
									<th>Course</th>
									<th>Fees</th>
									<th>Fees Details</th>
									<th>Summary</th>
									<th>Opreation</th>
								</tr>
							</thead>
							<tbody>
								<?php 
									$selectAll="select * from fees_table order by id ASC";
									$selQuery=mysqli_query($db,$selectAll);
									if($selQuery){
										while($row=mysqli_fetch_array($selQuery)){
											  
											
									
								?>
								
								<tr>
									<td><?php echo $row['id'];?></td>
									<td><?php echo($row['fname']);?></td>
									<td><?php echo($row['course']);?></td>
									<td><?php echo($row['fees']);?></td>
									<td>
										<a href="details.php?details=<?php echo($row['id']);?>" class="button">Show Details</a>
									</td>
									<td>
										<a href="summary.php?stuid=<?php echo($row['id']);?>"class="button bg">Show summary</a>
									</td>
									<td>
										 <a href="delete.php?dele=<?php echo($row['id'])?>"  class="danger text-none white">Delete</a>

										<a href="edit.php?edite=<?php echo($row['id']);?>" class="edit text-none white">Edit</a>

									</td>
								</tr>
								<?php 
										}}
								?>
							</tbody>
						
					</table>
				</div>
				

		
		
		
	
	</body>
</html>