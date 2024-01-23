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


		<?php
		/*Post request handler*/
		if($_SERVER['REQUEST_METHOD']=="POST" && $_POST['Login']!=''){
			
			extract($_POST); // converts form fields into variables
			$paymentFees = mysqli_real_escape_string($db,$_POST['fname']);
			$stuID = mysqli_real_escape_string($db,$_POST['stuID']);
			$date = mysqli_real_escape_string($db,$_POST['date']);
	
		/*Insert Query*/
		$insQ = "INSERT INTO `fees_details`(`stu_id`,`payment_fee`,`creat_date`) VALUES('$stuID','$paymentFees','$date')";
		$resQ = mysqli_query($db,$insQ);
		if($resQ){
			echo "<span style='color:green;'>Record Inserted!</span>";
			
		}else{
			echo "<span style='color:red;'>Record Insertion failed!</span>";
			
		}
			
			/**echo "<pre>";
			print_r($_POST);
			echo "</pre>";**/
			
		}
		
		
		
		
		
		?>
	   <br><br>
		
				<div class="container-90" style="border:3px solid black; background-color: wheat;">
					<h2 class="h2">Fees Details</h2>
					<form  action="#" method="post" class="padding-10" style="margin-left: 20%;">
					
						<div>
							<label>Payment Fees:</label><br><br>
							<input type="text" required name="fname" required class="form-control from">
							<input type="hidden" name="stuID" value="<?php echo $getId;?>">
						</div><br><br>
						<div>
							<label>date:</label><br><br>
							<input type="date" required name="date" required class="form-control from">
						</div>
						
						
						
						<input type="submit" name="Login" class="button ml" style="margin-top: 30px;" value="submit"/>
					</form>
					
					
					 <?php 
			   
		   ?>
					
					

				</div>

		
		
		
		</div>

		<br><br>
		<div class="container-90">
		    
		       <table style="width:100%">
							<thead>
								<tr>
									<th>Sr.no</th>
									<th>Name</th>
									<th>Course</th>
									<th>Total Fees</th>
									
								</tr>
							</thead>
							<tbody>
								<?php 
								 $getId=mysqli_real_escape_string($db,$_GET['details']);
			               	
			                $selectDetails="select * from fees_table where id='$getId'";
			                $queryDetails=mysqli_query($db,$selectDetails);
									
									if( $queryDetails){
										while($row=mysqli_fetch_array($queryDetails)){
											 
											
									
								?>
								
								<tr>
									<td><?php echo($row['id']);?></td>
									<td><?php echo($row['fname']);?></td>
									<td><?php echo($row['course']);?></td>
									<td><?php echo($row['fees']);?></td>
								
									
								</tr>
								<?php 
										}}
								?>
							</tbody>
						
					</table>
			</div>		
	</body>
</html>