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
	   
		<div class="container">
		     <a href="fees.php">Home</a>
		       <table>
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
				<div class="container">
					<form  action="#" method="post">
					
						<div>
							<label>Payment Fees</label>
							<input type="text" required name="fname" required class="form-control">
							<input type="hidden" name="stuID" value="<?php echo $getId;?>">
						</div>
						<div>
							<label>date</label>
							<input type="date" required name="date" required class="form-control">
						</div>
						
						
						
						<input type="submit" name="Login" value="submit"/>
					</form>
					
					
					 <?php 
			   
		   ?>
					
					

				</div>

		
		
		
		</div>
	</body>
</html>