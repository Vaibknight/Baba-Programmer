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
	
	<title>login</title>
</head>
	<body class="text">
    <div class="wrapper">
		
	
        <form action="" method="post">
            <h1>Login</h1>
	
            <div class="input-box">
				<label>Username:</label>
				</br>
                <input type="text" placeholder="Username" name="user"required style="border:2px solid #ffffff;color:white;">
               
            </div>
            <div class="input-box">
			<label>Password:</label></br>
                <input type="password" placeholder="password" name="pass"required style="color:white; border:2px solid #ffffff;">
                
            </div>
            
            <button type="submit" name="submit" class="btn log">Login</button>
            
        </form>
    </div>
			<?php
		if(isset($_POST['submit'])){
			$username=$_POST['user'];
			$password=$_POST['pass'];
			$select="select * from login where username='$username' and password='$password'";
			$query=mysqli_query($db,$select);
			
				while($ros=mysqli_fetch_assoc($query)){
				if($ros['username']==$username and $ros['password']==$password){
					$_SESSION['username']=$username;
					echo("you are login successfully");
					header("location:blog.php");
					
				}
				else{
					echo("you are not login");
					
				}
			}
				
			
			
		}
	?>
</body>
</html>