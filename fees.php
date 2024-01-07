<?php 
	 include('db.php');
?>
<html>
	<head>
		<title>
			Web Page
		</title>
		<link href="css/style.css" rel="stylesheet">
	</head>
	<body>
	
		<div class="container">
		
				<div class="container">
					<form  action="#" method="post">
					
						<div>
							<label>Name</label>
							<input type="text" required name="fname" required class="form-control">
						</div>
						<div>
							<label>Course</label>
							<input type="text" required name="course" required class="form-control">
						</div>
						<div>
							<label>Fees</label>
							<input type="text" required name="fees" required class="form-control">
						</div>
						
						
						<input type="submit" name="Login"/>
					</form>
					
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
					
					
					<table>
							<thead>
								<tr>
								
									<th>Name</th>
									<th>Course</th>
									<th>Fees</th>
									<th>Fees Details</th>
									<th>Summary</th>
								</tr>
							</thead>
							<tbody>
								<?php 
									$selectAll="select * from fees_table";
									$selQuery=mysqli_query($db,$selectAll);
									if($selQuery){
										while($row=mysqli_fetch_array($selQuery)){
											  echo($row['id']);
											
									
								?>
								
								<tr>
									<td><?php echo($row['fname']);?></td>
									<td><?php echo($row['course']);?></td>
									<td><?php echo($row['fees']);?></td>
									<td>
										<a href="details.php?details=<?php echo($row['id']);?>">Show Details</a>
									</td>
									<td>
										<a href="summary.php?stuid=<?php echo($row['id']);?>">Show summary</a>
									</td>
								</tr>
								<?php 
										}}
								?>
							</tbody>
						
					</table>

				</div>

		
		
		
		</div>
	</body>
</html>