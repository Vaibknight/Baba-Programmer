<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet">
<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.min.js">
</script>
 <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js">
   </script>
 
	<title>Home</title>
</head>
<body>
	<main>

		<?php 
			include("db.php");
			include('include/header.php');
			include('include/nav.php');
		?>


		<?php 
			$visitor_ip = $_SERVER['REMOTE_ADDR'];
			// $visitor_ip = "72.72.72.72";

		    // echo($visitor_ip);

			//checking if user is unique
			$count = "select * from counts where count = '$visitor_ip'";
			$printCount = mysqli_query($db,$count);

			if(!$printCount){
				die('Retrieve query error'.$count);

			   }

			$totalVisitors = mysqli_num_rows($printCount);
			if($totalVisitors < 1){
				$insert = "insert into counts(count) values('$visitor_ip')";

				$printCount = mysqli_query($db,$insert);
				if($insert){
					echo("Successfully Inserted");
				}
			

			}


		// 	// Retrieve existing user
		// 	$count = "select * from counts";
		// 	$printCount = mysqli_query($db,$count);
		// 	if(!$printCount){
		// 		die('Retrieve query error'.$count);

		// 	}

		// 	$totalVisitors = mysqli_num_rows($printCount);

		// ?>

		

		<!-- <h1> <?php echo("$totalVisitors");?></h1> -->
		<section>
			<div>
				<div class="margin-tb">
					<img src="image/bg.jpg" class="img">
				</div>
			</div>
		</section>

		<article>
			<div class="container-80">
				<div>
					<p class="text-center fs-20">Welcome to <strong>Baba Programmer!</strong> Our courses equip you with essential web development skills. Learn Java, Python, C, C++, PHP, MySQL, and delve into digital marketing, SEO strategies, UI development, frontend/backend development, and app development. Stay current with HTML5, CSS3, SASS, and JavaScript (ES5 | ES6). Explore jQuery, AngularJS, and ReactJS for dynamic interfaces. Specialized topics include data structures, social media marketing, email marketing, local SEO, and comprehensive on-page/off-page SEO training. Master the tools to thrive in the dynamic web development industry.</p>
				</div>
			</div>
		</article>

	
		
		<section class="margin-tb-50">

		<div>
			<div class="container-80">
				<div class="margin-tb">
                    <p class="fs-30 text-center" style="    color: rgb(102, 116, 204);">Blogs</p>
					<ul id="phpSQlCourse">
						
					</ul>
				</div>
			</div>
		</div>
			<div class="contain">
				<div class="card1">
					<div class="card__header">
					<img src="https://source.unsplash.com/600x400/?computer" alt="card__image" class="card__image" width="600">
					</div>
					<div class="card__body">
					<span class="tag tag-blue">Technology</span>
					<h4>What's new in 2022 Tech</h4>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi perferendis molestiae non nemo doloribus. Doloremque, nihil! At ea atque quidem!</p>
					</div>
					<div class="card__footer">
					<div class="user">
						<img src="https://i.pravatar.cc/40?img=1" alt="user__image" class="user__image">
						<div class="user__info">
						<h5>Jane Doe</h5>
						<small>2h ago</small>
						</div>
					</div>
					</div>
				</div>
				<div class="card1">
					<div class="card__header">
					<img src="https://source.unsplash.com/600x400/?food" alt="card__image" class="card__image" width="600">
					</div>
					<div class="card__body">
					<span class="tag tag-brown">Food</span>
					<h4>Delicious Food</h4>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi perferendis molestiae non nemo doloribus. Doloremque, nihil! At ea atque quidem!</p>
					</div>
					<div class="card__footer">
					<div class="user">
						<img src="https://i.pravatar.cc/40?img=2" alt="user__image" class="user__image">
						<div class="user__info">
						<h5>Jony Doe</h5>
						<small>Yesterday</small>
						</div>
					</div>
					</div>
				</div>
				<div class="card1">
					<div class="card__header">
					<img src="https://source.unsplash.com/600x400/?car,automobile" alt="card__image" class="card__image" width="600">
					</div>
					<div class="card__body">
					<span class="tag tag-red">Automobile</span>
					<h4>Race to your heart content</h4>
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi perferendis molestiae non nemo doloribus. Doloremque, nihil! At ea atque quidem!</p>
					</div>
					<div class="card__footer">
					<div class="user">
						<img src="https://i.pravatar.cc/40?img=3" alt="user__image" class="user__image">
						<div class="user__info">
						<h5>John Doe</h5>
						<small>2d ago</small>
						</div>
					</div>
					</div>
				</div>
				</div>
		</section>



		<section class="container-90">
			<div>
				<div class="container-80">
					<div class="margin-tb">
						<p class="fs-30 text-center" style="    color: rgb(102, 116, 204);">Our Placed Students</p>
						<ul id="phpSQlCourse">
							
						</ul>
					</div>
				</div>
			</div>

		<div class="owl-carousel owl-theme owl-loaded owl-drag">
            
			<div class="owl-stage-outer">
			  
			  <div class="owl-stage" style="transform: translate3d(-1527px, 0px, 0px); transition: all 0.25s ease 0s; width: 3334px;">
				
				<div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;"><div class="item">
				<div class="card container-90 card-gradient">
					<div class="text-center white baba-logo">

					<a href="index.php" class="text-none display-flex justify-center">
						<img src="image/logo.png" class="" style="width:15%">
					<h2 class="text-none white margin-tb-10"> Baba Programmer</h2>
					</a>
						
					</div>
						<div class="display-flex">
							<div class="flex">
								<img src="student-img/Amit.jpg" height="200" width="200" alt="Avatar" style="" class="margin-tb-10 border-radius">
							</div>
							<div class="flex">
								<div class="card bg-white ">
									<div class="container-90">
									<h4 class="margin-tb-5"><b>Name : </b>Amit Dubey</h4> 
									<p class="margin-tb-5"><b>Desgination</b> : UI Developer</p> 
									<a href="placed.php" class="text-none black"><b>Read More</b></a>
									</div>
								</div>
								
							</div>
						</div>
						
					
					
					</div>
				 </div>
			  </div>
			  
			  <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;"><div class="item">
			  <div class="card container-90 card-gradient">
					<div class="text-center white baba-logo">

					<a href="index.php" class="text-none display-flex justify-center">
						<img src="image/logo.png" class="" style="width:15%">
					<h2 class="text-none white margin-tb-10"> Baba Programmer</h2>
					</a>
						
					</div>
						<div class="display-flex">
							<div class="flex">
								<img src="student-img/Abhishek.jpg" height="200" width="200" alt="Avatar" style="" class="margin-tb-10">
							</div>
							<div class="flex">
								<div class="card bg-white ">

								<div class="container-90">
									<h4 class="margin-tb-5"><b>Name : </b>Abhishek</h4> 
									<p class="margin-tb-5"><b>Desgination</b> : Web Developer</p> 
									<a href="placed.php" class="text-none black"><b>Read More</b></a>
									</div>

									
								</div>
								
							</div>
						</div>
						
					
					
					</div>
				 </div></div>
				
				<div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;"><div class="item">
				<div class="card container-90 card-gradient">
					<div class="text-center white baba-logo">

					<a href="index.php" class="text-none display-flex justify-center">
						<img src="image/logo.png" class="" style="width:15%">
					<h2 class="text-none white margin-tb-10"> Baba Programmer</h2>
					</a>
						
					</div>
						<div class="display-flex">
							<div class="flex">
								<img src="student-img/Yash.jpg" height="200" width="200" alt="Avatar" style="" class="margin-tb-10">
							</div>
							<div class="flex">
								<div class="card bg-white ">

								<div class="container-90">
									<h4 class="margin-tb-5"><b>Name : </b>Yash Singh Thakur</h4> 
									<p class="margin-tb-5"><b>Desgination</b> : Frontend Developer</p> 
									<a href="placed.php" class="text-none black"><b>Read More</b></a>
									</div>
								</div>
								
							</div>
						</div>
						
					
					
					</div>
				 </div></div>
				
				<div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;"><div class="item">
				<div class="card container-90 card-gradient">
					<div class="text-center white baba-logo">

					<a href="index.php" class="text-none display-flex justify-center">
						<img src="image/logo.png" class="" style="width:15%">
					<h2 class="text-none white margin-tb-10"> Baba Programmer</h2>
					</a>
						
					</div>
						<div class="display-flex">
							<div class="flex">
								<img src="student-img/Abhishek2.jpg" height="200" width="200" alt="Avatar"  class="margin-tb-10">
							</div>
							<div class="flex">
								<div class="card bg-white ">

									<div class="container-90">
									<h4 class="margin-tb-5"><b>Name : </b>Abhishek Pathak</h4> 
									<p class="margin-tb-5"><b>Desgination</b> : Python Developer</p> 
									<a href="placed.php" class="text-none black"><b>Read More</b></a>
									</div>
								</div>
								
							</div>
						</div>
						
					
					
					</div>
				 </div></div>
				
				<div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;"><div class="item">
				<div class="card container-90 card-gradient">
					<div class="text-center white baba-logo">

					<a href="index.php" class="text-none display-flex justify-center">
						<img src="image/logo.png" class="" style="width:15%">
					<h2 class="text-none white margin-tb-10"> Baba Programmer</h2>
					</a>
						
					</div>
						<div class="display-flex">
							<div class="flex">
								<img src="student-img/Kuldeep.jpg" height="200" width="200" alt="Avatar"  class="margin-tb-10">
							</div>
							<div class="flex">
								<div class="card bg-white ">

									<div class="container-90">
									<h4 class="margin-tb-5"><b>Name : </b>Kuldeep Shukla</h4> 
									<p class="margin-tb-5"><b>Desgination</b> : PHP Developer</p> 
									<a href="placed.php" class="text-none black"><b>Read More</b></a>
									</div>
								</div>
								
							</div>
						</div>
						
					
					
					</div>
				 </div></div>
				
				<div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;"><div class="item">
				<div class="card container-90 card-gradient">
					<div class="text-center white baba-logo">

					<a href="index.php" class="text-none display-flex justify-center">
						<img src="image/logo.png" class="" style="width:15%">
					<h2 class="text-none white margin-tb-10"> Baba Programmer</h2>
					</a>
						
					</div>
						<div class="display-flex">
							<div class="flex">
								<img src="student-img/Amit.jpg" height="200" width="200" alt="Avatar" style="" class="margin-tb-10">
							</div>
							<div class="flex">
								<div class="card bg-white ">
									<div class="container-90">
									<h4 class="margin-tb-5"><b>Name : </b>Amit Soni</h4> 
									<p class="margin-tb-5"><b>Desgination</b> : Java Developer</p> 
									<a href="placed.php" class="text-none black"><b>Read More</b></a>
									</div>
								</div>
								
							</div>
						</div>
						
					
					
					</div>
				 </div></div>
				
				<div class="owl-item" style="width: 128.906px; margin-right: 10px;"><div class="item">
				<div class="card container-90 card-gradient">
					<div class="text-center white baba-logo">

					<a href="index.php" class="text-none display-flex justify-center">
						<img src="image/logo.png" class="" style="width:15%">
					<h2 class="text-none white margin-tb-10"> Baba Programmer</h2>
					</a>
						
					</div>
						<div class="display-flex">
							<div class="flex">
								<img src="student-img/Narayan.jpg" height="200" width="200" alt="Avatar"  class="margin-tb-10">
							</div>
							<div class="flex">
								<div class="card bg-white ">

									<div class="container-90">
									<h4 class="margin-tb-5"><b>Name : </b>Narayan Chawda</h4> 
									<p class="margin-tb-5"><b>Desgination</b> : Digital Marketing</p> 
									<a href="placed.php" class="text-none black"><b>Read More</b></a>
									</div>
								</div>
								
							</div>
						</div>
						
					
					
					</div>
				 </div></div>
				 
				 <div class="owl-item" style="width: 128.906px; margin-right: 10px;"><div class="item">
				 <div class="card container-90 card-gradient">
					<div class="text-center white baba-logo">

					<a href="index.php" class="text-none display-flex justify-center">
						<img src="image/logo.png" class="" style="width:15%">
					<h2 class="text-none white margin-tb-10"> Baba Programmer</h2>
					</a>
						
					</div>
						<div class="display-flex">
							<div class="flex">
								<img src="student-img/Monu.jpg" height="200" width="200" alt="Avatar" style="" class="margin-tb-10">
							</div>
							<div class="flex">
								<div class="card bg-white ">

									<div class="container-90">
									<h4 class="margin-tb-5"><b>Name : </b>Monu Sainy</h4> 
									<p class="margin-tb-5"><b>Desgination</b> : UI Developer</p> 
									<a href="placed.php" class="text-none black"><b>Read More</b></a>
									</div>
								</div>
								
							</div>
						</div>
						
					
					
					</div>
				 </div></div>
				
				<div class="owl-item" style="width: 128.906px; margin-right: 10px;"><div class="item">
				<div class="card container-90 card-gradient">
					<div class="text-center white baba-logo">

					<a href="index.php" class="text-none display-flex justify-center">
						<img src="image/logo.png" class="" style="width:15%">
					<h2 class="text-none white margin-tb-10"> Baba Programmer</h2>
					</a>
						
					</div>
						<div class="display-flex">
							<div class="flex">
								<img src="student-img/Ankit.jpg" height="200" width="200" alt="Avatar" style="" class="margin-tb-10">
							</div>
							<div class="flex">
								<div class="card bg-white ">

									<div class="container-90">
									<h4 class="margin-tb-5"><b>Name : </b>Ankit Khare</h4> 
									<p class="margin-tb-5"><b>Desgination</b> : Digital Marketing (Brand Managing)</p> 
									<a href="placed.php" class="text-none black"><b>Read More</b></a>
									</div>
								</div>
								
							</div>
						</div>
						
					
					
					</div>
				 </div></div>
				
				<div class="owl-item" style="width: 128.906px; margin-right: 10px;"><div class="item">
				<div class="card container-90 card-gradient">
					<div class="text-center white baba-logo">

					<a href="index.php" class="text-none display-flex justify-center">
						<img src="image/logo.png" class="" style="width:15%">
					<h2 class="text-none white margin-tb-10"> Baba Programmer</h2>
					</a>
						
					</div>
						<div class="display-flex">
							<div class="flex">
								<img src="student-img/Rajeshwar.jpg" height="200" width="200" alt="Avatar" style="" class="margin-tb-10">
							</div>
							<div class="flex">
								<div class="card bg-white ">

									<div class="container-90">
									<h4 class="margin-tb-5"><b>Name : </b>Rajeshwar Parihar</h4> 
									<p class="margin-tb-5"><b>Desgination</b> : Full Stack Web Developer</p> 
									<a href="placed.php" class="text-none black"><b>Read More</b></a>
									</div>
								</div>
								
							</div>
						</div>
						
					
					
					</div>
				 </div></div>
				 
				 
				 <div class="owl-item" style="width: 128.906px; margin-right: 10px;"><div class="item">
				 <div class="card container-90 card-gradient">
					<div class="text-center white baba-logo">

					<a href="index.php" class="text-none display-flex justify-center">
						<img src="image/logo.png" class="" style="width:15%">
					<h2 class="text-none white margin-tb-10"> Baba Programmer</h2>
					</a>
						
					</div>
						<div class="display-flex">
							<div class="flex">
								<img src="student-img/Alka.jpg" height="200" width="200" alt="Avatar" style="" class="margin-tb-10">
							</div>
							<div class="flex">
								<div class="card bg-white ">

									<div class="container-90">
									<h4 class="margin-tb-5"><b>Name : </b>Alka Kurrey</h4> 
									<p class="margin-tb-5"><b>Desgination</b> : Frontend Developer</p> 
									<a href="placed.php" class="text-none black"><b>Read More</b></a>
									</div>
								</div>
								
							</div>
						</div>
						
					
					
					</div>
				 </div></div>
				
				<div class="owl-item active" style="width: 128.906px; margin-right: 10px;"><div class="item">
				<div class="card container-90 card-gradient">
					<div class="text-center white baba-logo">

					<a href="index.php" class="text-none display-flex justify-center">
						<img src="image/logo.png" class="" style="width:15%">
					<h2 class="text-none white margin-tb-10"> Baba Programmer</h2>
					</a>
						
					</div>
						<div class="display-flex">
							<div class="flex">
								<img src="student-img/Yash.jpg" height="200" width="200" alt="Avatar" style="" class="margin-tb-10">
							</div>
							<div class="flex">
								<div class="card bg-white ">
									<div class="container-90">
									<h4 class="margin-tb-5"><b>Name : </b>Yash Todekar</h4> 
									<p class="margin-tb-5"><b>Desgination</b> : UI Developer</p> 
									<a href="placed.php" class="text-none black"><b>Read More</b></a>
									</div>
								</div>
								
							</div>
						</div>
						
					
					
					</div>
				 </div></div>
				
				<div class="owl-item active" style="width: 128.906px; margin-right: 10px;"><div class="item">
				<div class="card container-90 card-gradient">
					<div class="text-center white baba-logo">

					<a href="index.php" class="text-none display-flex justify-center">
						<img src="image/logo.png" class="" style="width:15%">
					<h2 class="text-none white margin-tb-10"> Baba Programmer</h2>
					</a>
						
					</div>
						<div class="display-flex">
							<div class="flex">
								<img src="student-img/Ashutosh.jpg" height="200" width="200" alt="Avatar" style="" class="margin-tb-10">
							</div>
							<div class="flex">
								<div class="card bg-white ">

									<div class="container-90">
									<h4 class="margin-tb-5"><b>Name : </b>Ashutosh Pandey</h4> 
									<p class="margin-tb-5"><b>Desgination</b> : Python Developer</p> 
									<a href="placed.php" class="text-none black"><b>Read More</b></a>
									</div>
								</div>
								
							</div>
						</div>
						
					
					
					</div>
				 </div></div>
				
				<div class="owl-item active" style="width: 128.906px; margin-right: 10px;"><div class="item">
				<div class="card container-90 card-gradient">
					<div class="text-center white baba-logo">

					<a href="index.php" class="text-none display-flex justify-center">
						<img src="image/logo.png" class="" style="width:15%">
					<h2 class="text-none white margin-tb-10"> Baba Programmer</h2>
					</a>
						
					</div>
						<div class="display-flex">
							<div class="flex">
								<img src="student-img/Mayank.jpg" height="200" width="200" alt="Avatar" style="" class="margin-tb-10">
							</div>
							<div class="flex">
								<div class="card bg-white ">
									<div class="container-90">
									<h4 class="margin-tb-5"><b>Name : </b>Mayank Sharma</h4> 
									<p class="margin-tb-5"><b>Desgination</b> : UI Developer</p> 
									<a href="placed.php" class="text-none black"><b>Read More</b></a>
									</div>
								</div>
								
							</div>
						</div>
						
					
					
					</div>
				 </div></div>
				
				<div class="owl-item active" style="width: 128.906px; margin-right: 10px;"><div class="item">
				<div class="card container-90 card-gradient">
					<div class="text-center white baba-logo">

					<a href="index.php" class="text-none display-flex justify-center">
						<img src="image/logo.png" class="" style="width:15%">
					<h2 class="text-none white margin-tb-10"> Baba Programmer</h2>
					</a>
						
					</div>
						<div class="display-flex">
							<div class="flex">
								<img src="student-img/Shikha.jpg" height="200" width="200" alt="Avatar" style="" class="margin-tb-10">
							</div>
							<div class="flex">
								<div class="card bg-white ">

									<div class="container-90">
									<h4 class="margin-tb-5"><b>Name : </b>Sikha Singh</h4> 
									<p class="margin-tb-5"><b>Desgination</b> : Data Analysis</p> 
									<a href="placed.php" class="text-none black"><b>Read More</b></a>
									</div>
								</div>
								
							</div>
						</div>
						
					
					
					</div>
				 </div></div>
				
				<div class="owl-item" style="width: 128.906px; margin-right: 10px;"><div class="item">
				<div class="card container-90 card-gradient">
					<div class="text-center white baba-logo">

					<a href="index.php" class="text-none display-flex justify-center">
						<img src="image/logo.png" class="" style="width:15%">
					<h2 class="text-none white margin-tb-10"> Baba Programmer</h2>
					</a>
						
					</div>
						<div class="display-flex">
							<div class="flex">
								<img src="student-img/Srijan.jpeg" height="200" width="200" alt="Avatar" style="" class="margin-tb-10">
							</div>
							<div class="flex">
								<div class="card bg-white ">
									<div class="container-90">
									<h4 class="margin-tb-5"><b>Name : </b>Srijan Tripathi</h4> 
									<p class="margin-tb-5"><b>Desgination</b> : FullStack Web Developer</p> 
									<a href="placed.php" class="text-none black"><b>Read More</b></a>
									</div>
								</div>
								
							</div>
						</div>
						
					
					
					</div>
				 </div></div>
				
				<div class="owl-item" style="width: 128.906px; margin-right: 10px;"><div class="item">
				<div class="card container-90 card-gradient">
					<div class="text-center white baba-logo">

					<a href="index.php" class="text-none display-flex justify-center">
						<img src="image/logo.png" class="" style="width:15%">
					<h2 class="text-none white margin-tb-10"> Baba Programmer</h2>
					</a>
						
					</div>
						<div class="display-flex">
							<div class="flex">
								<img src="student-img/Keshav.jpeg" height="200" width="200" alt="Avatar" style="" class="margin-tb-10">
							</div>
							<div class="flex">
								<div class="card bg-white ">
									<div class="container-90">
									<h4 class="margin-tb-5"><b>Name : </b>Keshav</h4> 
									<p class="margin-tb-5"><b>Desgination</b> : Web Developer</p> 
									<a href="placed.php" class="text-none black"><b>Read More</b></a>
									</div>
								</div>
								
							</div>
						</div>
						
					
					
					</div>
				 </div>
				 </div>
				 <div class="owl-item" style="width: 128.906px; margin-right: 10px;"><div class="item">
				 <div class="card container-90 card-gradient">
					<div class="text-center white baba-logo">

					<a href="index.php" class="text-none display-flex justify-center">
						<img src="image/logo.png" class="" style="width:15%">
					<h2 class="text-none white margin-tb-10"> Baba Programmer</h2>
					</a>
						
					</div>
						<div class="display-flex">
							<div class="flex">
								<img src="student-img/Ansh.jpeg" height="200" width="200" alt="Avatar" style="" class="margin-tb-10">
							</div>
							<div class="flex">
								<div class="card bg-white ">
									<div class="container-90">
									<h4 class="margin-tb-5"><b>Name : </b>Ans Chaurasiya</h4> 
									<p class="margin-tb-5"><b>Desgination</b> : UI Developer</p> 
									<a href="placed.php" class="text-none black"><b>Read More</b></a>
									</div>
								</div>
								
							</div>
						</div>
						
					
					
					</div>
				 </div></div>
				
				<div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;"><div class="item">
				<div class="card container-90 card-gradient">
					<div class="text-center white baba-logo">

					<a href="index.php" class="text-none display-flex justify-center">
						<img src="image/logo.png" class="" style="width:15%">
					<h2 class="text-none white margin-tb-10"> Baba Programmer</h2>
					</a>
						
					</div>
						<div class="display-flex">
							<div class="flex">
								<img src="student-img/Prateek.jpg" height="200" width="200" alt="Avatar" style="" class="margin-tb-10">
							</div>
							<div class="flex">
								<div class="card bg-white ">
									<div class="container-90">
									<h4 class="margin-tb-5"><b>Name : </b>Prateek Vishwakarma</h4> 
									<p class="margin-tb-5"><b>Desgination</b> : ZOHO Software Developer</p> 
									<a href="placed.php" class="text-none black"><b>Read More</b></a>
									</div>
								</div>
								
							</div>
						</div>
						
					
					
					</div>
				 </div></div>
				
				<div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;"><div class="item">
				<div class="card container-90 card-gradient">
					<div class="text-center white baba-logo">

					<a href="index.php" class="text-none display-flex justify-center">
						<img src="image/logo.png" class="" style="width:15%">
					<h2 class="text-none white margin-tb-10"> Baba Programmer</h2>
					</a>
						
					</div>
						<div class="display-flex">
							<div class="flex">
								<img src="student-img/Suraj.jpg" height="200" width="200" alt="Avatar" style="" class="margin-tb-10">
							</div>
							<div class="flex">
								<div class="card bg-white ">
									<div class="container-90">
									<h4 class="margin-tb-5"><b>Name : </b>Suraj Vastrakar</h4> 
									<p class="margin-tb-5"><b>Desgination</b> : Pyramid IT Solution</p> 
									<a href="placed.php" class="text-none black"><b>Read More</b></a>
									</div>
								</div>
								
							</div>
						</div>
						
					
					
					</div>
				 </div></div>
				
				<div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;"><div class="item">
				<div class="card container-90 card-gradient">
					<div class="text-center white baba-logo">

					<a href="index.php" class="text-none display-flex justify-center">
						<img src="image/logo.png" class="" style="width:15%">
					<h2 class="text-none white margin-tb-10"> Baba Programmer</h2>
					</a>
						
					</div>
						<div class="display-flex">
							<div class="flex">
								<img src="student-img/Ayush.jpg" height="200" width="200" alt="Avatar" style="" class="margin-tb-10">
							</div>
							<div class="flex">
								<div class="card bg-white ">
									<div class="container-90">
									<h4 class="margin-tb-5"><b>Name : </b>Ayush Jain</h4> 
									<p class="margin-tb-5"><b>Desgination</b> : Web Developer</p> 
									<a href="placed.php" class="text-none black"><b>Read More</b></a>
									</div>
								</div>
								
							</div>
						</div>
						
					
					
					</div>
				 </div></div>
				
				<div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;"><div class="item">
				<div class="card container-90 card-gradient">
					<div class="text-center white baba-logo">

					<a href="index.php" class="text-none display-flex justify-center">
						<img src="image/logo.png" class="" style="width:15%">
					<h2 class="text-none white margin-tb-10"> Baba Programmer</h2>
					</a>
						
					</div>
						<div class="display-flex">
							<div class="flex">
								<img src="student-img/Gitesh.jpg" height="200" width="200" alt="Avatar" style="" class="margin-tb-10">
							</div>
							<div class="flex">
								<div class="card bg-white ">
									<div class="container-90">
									<h4 class="margin-tb-5"><b>Name : </b>Gitesh Patel</h4> 
									<p class="margin-tb-5"><b>Desgination</b> : Digital Marketer</p> 
									<a href="placed.php" class="text-none black"><b>Read More</b></a>
									</div>
								</div>
								
							</div>
						</div>
						
					
					
					</div>
				 </div></div>
				
				<div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;"><div class="item">
				<div class="card container-90 card-gradient">
					<div class="text-center white baba-logo">

					<a href="index.php" class="text-none display-flex justify-center">
						<img src="image/logo.png" class="" style="width:15%">
					<h2 class="text-none white margin-tb-10"> Baba Programmer</h2>
					</a>
						
					</div>
						<div class="display-flex">
							<div class="flex">
								<img src="student-img/Amit.jpg" height="200" width="200" alt="Avatar" style="" class="margin-tb-10">
							</div>
							<div class="flex">
								<div class="card bg-white ">
									<div class="container-90">
									<h4 class="margin-tb-5"><b>Name : </b>Amit Dubey</h4> 
									<p class="margin-tb-5"><b>Desgination</b> : UI Developer</p> 
									<a href="placed.php" class="text-none black"><b>Read More</b></a>
									</div>
								</div>
								
							</div>
						</div>
						
					
					
					</div>
				 </div></div>
				
				<div class="owl-item cloned" style=""><div class="item">
				<div class="card container-90 card-gradient">
					<div class="text-center white baba-logo">

					<a href="index.php" class="text-none display-flex justify-center">
						<img src="image/logo.png" class="" style="width:15%">
					<h2 class="text-none white margin-tb-10"> Baba Programmer</h2>
					</a>
						
					</div>
						<div class="display-flex">
							<div class="flex">
								<img src="student-img/Gopi.jpg" height="200" width="200" alt="Avatar" style="" class="margin-tb-10">
							</div>
							<div class="flex">
								<div class="card bg-white ">
									<div class="container-90">
									<h4 class="margin-tb-5"><b>Name : </b>Gopi Kishan</h4> 
									<p class="margin-tb-5"><b>Desgination</b> : Digital Marketing Manager</p> 
									<a href="placed.php" class="text-none black"><b>Read More</b></a>
									</div>
								</div>
								
							</div>
						</div>
						
					
					
					</div>
				 </div></div></div></div><div class="owl-nav disabled">
	   
	   </div>
	   
	 </div>
	 
	 
	 
		</section>

		<section>
			<div class="container-90">
				<div class="grid-4 proCourse">
					
				</div>
			</div>
		</section>

		<section></section>

		<?php 
		
			include('include/footer.php');
		?>
	</main>

	<script>
		 var owl = $('.owl-carousel');
owl.owlCarousel({
    items:3, 
  // items change number for slider display on desktop
  
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true
});</script>

	<script type="module" src="js/script.js"></script>
</body>
</html>