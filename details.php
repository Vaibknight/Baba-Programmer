<?php 
session_start();
	 include('db.php');
	 if(@$_SESSION['username']==''){
		session_destroy();
	 	echo '<script>
	 		location.href="login.php"
	 	</script>';
	 }
?>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/back.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<title>Details Page</title>
	</head>
	<body>
		<?php
		
		$getId=mysqli_real_escape_string($db,$_GET['details']);
		echo($getId);
		
		$seltable = "select * from fees_table where id='$getId'";
		$selQuery = mysqli_query($db,$seltable);
		if($selQuery){
			echo("Con");
			while($row=mysqli_fetch_array($selQuery)){
				echo($row['fees']);

			}
		}
		/*Post request handler*/
		if($_SERVER['REQUEST_METHOD']=="POST" && $_POST['Login']!=''){
			
			extract($_POST); // converts form fields into variables
			$paymentFees = mysqli_real_escape_string($db,$_POST['fname']);
			$stuID = mysqli_real_escape_string($db,$_POST['stuID']);
			$date = mysqli_real_escape_string($db,$_POST['date']);
			echo($stuID);
			echo($paymentFees);
			if($paymentFees)

			
		
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
	



		<!---end navbar--->
		<br><br>
		<h2 class="container-90">Welcome:<?php echo($_SESSION['username']);?></h2></br></br>
		
	   
		<div class="container">
		    
		       <table style="width:100%">
							<thead>
								<tr>
								
									<th>Name</th>
									<th>Course</th>
									<th>Total Fees</th>
									
								</tr>
							</thead>
							<tbody>
								<?php 
								 $getId=mysqli_real_escape_string($db,$_GET['details']);
			               	echo($getId);
			                $selectDetails="select * from fees_table where id='$getId'";
			                $queryDetails=mysqli_query($db,$selectDetails);
									
									if( $queryDetails){
										while($row=mysqli_fetch_array($queryDetails)){
											  echo($row['id']);
											
									
								?>
								
								<tr>
									<td><?php echo($row['fname']);?></td>
									<td><?php echo($row['course']);?></td>
									<td><?php echo($row['fees']);?></td>
								
									
								</tr>
								<?php 
										}}
								?>
							</tbody>
						
					</table>
					<br><br>
	<br><br>

				<div class="container-90" style="border:3px solid black; background-color: wheat;">
					<h2 class="h2">Fees Payment</h2>
					<form  action="#" method="post" class="padding-10" style="margin-left: 20%;">
					
						<div>
							<label>Payment Fees</label>
							<input type="text" required name="fname" required class="form-control from">
							<input type="hidden" name="stuID" value="<?php echo $getId;?>">
						</div><br><br>
						<div>
							<label>date</label>
							<input type="date" required name="date" required class="form-control from">
						</div><br><br>
						
						
						
						<input type="submit" class="button ml" name="Login" value="submit"/>
					</form>
					
					
					 <?php 
			   
		   ?>
					
					

				</div>

		
		
		
		</div>
		<br><br>
	</body>
</html>