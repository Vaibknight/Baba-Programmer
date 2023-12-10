<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

		    echo($visitor_ip);

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


			// Retrieve existing user
			$count = "select * from counts";
			$printCount = mysqli_query($db,$count);
			if(!$printCount){
				die('Retrieve query error'.$count);

			}

			$totalVisitors = mysqli_num_rows($printCount);

		?>

		<h1> <?php echo("$totalVisitors");?></h1>
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
					<p class="text-center fs-20">Java Programming | Python Programming | C&&C++ Programming | PHP Programming | Digital Marketing | App Development | Web <br> Development | Web Designing | PHP and MySqL Professional Courses in Bilaspur Chhattisgarh</p>
				</div>
			</div>
		</article>
		<section class="course-list">
			<div class="container-80">
				<div class="margin-tb">
					<p class="fs-20"><strong>Baba Programmer</strong>  provides Job oriented training on this Technologies Listed below:</p>
					<ol>
						<li>
							<p>Java Programming</p>
						</li>
						<li>
							<p>Python Programming</p>
						</li>
						<li>
							<p>C C++ Programming</p>
						</li>
						<li>
							<p>Php & Mysql</p>
						</li>
						<li>
							<p>Digital Marketing</p>
						</li>
						<li>
							<p>SEO (Search Engine Optimization) Development</p>
						</li>
						<li>
							<p>Web Designing</p>
						</li>
						<li>
							<p>Website Development</p>
						</li>
						<li>
							<p>UI Development</p>
						</li>
						<li>
							<p>Front end Development</p>
						</li>
						<li>
							<p>Backend Development</p>
						</li>
						<li>
							<p>App Development</p>
						</li>
						<li>
							<p>Android App Development</p>
						</li>
						<li>
							<p>Ios App Development</p>
						</li>
						<li>
							<p>HTML5 && CSS3</p>
						</li>
						<li>
							<p>SASS (Syntactically Awesome Style Sheets)</p>
						</li>
						<li>
							<p>JavaScript(ES5)|JavaScript(ES6)</p>
						</li>
						<li>
							<p>Bootstrap3 && Bootstrap4</p>
						</li>
						<li>
							<p>WordPress</p>
						</li>
						<li>
							<p>Jquery</p>
						</li>
						<li>
							<p>AngularJs</p>
						</li>
						<li>
							<p>ReactJs</p>
						</li>
						<li>
							<p>Json</p>
						</li>
						<li>
							<p>Ajax</p>
						</li>
						<li>
							<p>D3Js</p>
						</li>
						<li>
							<p>API ( Application Programming Interface )</p>
						</li>
						<li>
							<p>ReactNative</p>
						</li>
						<li>
							<p>Full Stack Development</p>
						</li>
						<li>
							<p>Data Structure</p>
						</li>
						<li>
							<p>SMM ( Social Media Marketing )</p>
						</li>
						<li>
							<p>Email Marketing</p>
						</li>
						<li>
							<p>Local SEO</p>
						</li>
						<li>
							<p>On Page SEO and Off Page SEO</p>
						</li>
						<li>
							<p>Web Application</p>
						</li>
					</ol>
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

	<script src="js/script.js"></script>
</body>
</html>