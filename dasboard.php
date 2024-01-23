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
	
	<title>dashboard</title>
</head>
<body>
	<!---start navbar---->

	
		<nav class="bg-white">
	
		      <div class="container-90">
				 <ul class="menu row grid-3 center">
			        <li class="padding">
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
	<div class="container-90">
		<h2>Welcome:<?php echo($_SESSION['username']);?></h2></br></br>
		<table style="width:100%;">
			<thead>
				<tr>
					<th>Sr.no</th>
					<th>Heading</th>
					
					<th>Images</th>
					<th>Date</th>
					<th>Description</th>
					<th>Edit</th>
					<th>Delete</th>
					
				</tr>
			</thead>
			<tbody>
				<?php
					$i=0;
					$select="select * from upload";
					$query=mysqli_query($db,$select);
					while($rows=mysqli_fetch_array($query)){
						
					
				?>
				<tr>
                <td>
                    <?php echo(++$i);?>
                </td>

                <td>
                    <?php echo($rows['heading']);?>
                </td>

                
                
                <td>
                    <img src="upload/<?php echo($rows['image']);?>" alt="not image" style="width:100px; height:100px;">
                </td>

                <td>
                    <?php echo($rows['date']);?>
                </td>
				
				<td>
                    <?php echo($rows['description']);?>
                </td>
                <td>
                    <a href="edit.php?edit=<?php echo($rows['id']);?>" class="edit text-none white">Edit</a>
					
                </td>

                <td>
                	 <a href="delete.php?del=<?php echo($rows['id'])?>"  class="danger text-none white">Delete</a>
                </td>
            </tr>
			</tbody>
			<?php }?>
		</table>
	</div>
	  
</body>
</html>