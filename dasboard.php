<?php
session_start();
include("db.php");
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
	<div class="container">
		<h2>Welcome:<?php echo($_SESSION['username']);?></h2></br></br>
		<table style="width:100%;">
			<thead>
				<tr>
					<th>Sr.no</th>
					<th>Heading</th>
					<th>Title</th>
					<th>Images</th>
					<th>Date</th>
					<th>Description</th>
					<th><a href="logout.php" class="danger text-none white">Logout</a></th>
					
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
                    <?php echo($rows['title']);?>
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
					
                    <a href="delete.php?del=<?php echo($rows['id'])?>"  class="danger text-none white">Delete</a>
                </td>
            </tr>
			</tbody>
			<?php }?>
		</table>
	</div>
	  <?php
        if(!isset($_SESSION['username'])){
            header("location:index.php");
            exit();
        }
    ?>
</body>
</html>