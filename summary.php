<?php 
	 include('db.php');
	 
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
			<table>
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