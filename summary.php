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


<?php 
	 
	 
	 if(isset($_GET['stuid']) && $_GET['stuid']!=''){
			
			$stuid = mysqli_real_escape_string($db,$_GET['stuid']);
			$paidFees = 0;
			$fees = 0;
			$selName = "SELECT `fname`,`fees` FROM `fees_table` WHERE id='$stuid'";
			$resName = mysqli_query($db,$selName);
			$data = mysqli_fetch_assoc($resName);
			$fees = $data['fees'];
			
			
			/*select data from database*/
			?>
			<table style="width:100%;">
							<thead>
								<tr>
								
									<th>Student Name</th>
									<th>Fees paid</th>
									
									<th>Pending</th>
									<th>Date</th>
									
									
								</tr>
							</thead>
							<tbody>
								<?php 
									
									$selectAll="select * from fees_details where `stu_id`='$stuid'";
									$selQuery=mysqli_query($db,$selectAll);
									if($selQuery){
										while($row=mysqli_fetch_array($selQuery)){
											  //echo($row['id']);
											
									
								?>
								
								<tr>
									<td><?php 
										
										echo $data['fname'];
											
									
									?></td>
									<td><?php 
										echo($row['payment_fee']);
									?></td>
																	
									<td><?php 
									 echo $fees-=$row['payment_fee'];
									
									?></td>
									<td><?php echo($row['creat_date']);?></td>
									
								</tr>
								<?php 
										}}
								?>
								
							</tbody>
						
					</table>
			<?php
		 
		 
		 
	 }else{
		 
		 
		 die("Invalid details!");
	 }
?>
</body>
</html>