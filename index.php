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

		<p>Hello</p>
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

		<!-- <section class="catalog">
        	<div>
        		<div class="my-3">
        			<h3 class="text-center text-light">
						स्वामी विवेकानंद पर कुछ अच्छी पुस्तकें 
					</h3>
        		</div>
        		<div class="row">
        			<div id="owl-example" class="owl-carousel owl-theme" style="opacity: 1; display: block;">
					  <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 4128px; left: 0px; display: block;"><div class="owl-item" style="width: 344px;"><div class="container-80"><a href="https://www.flipkart.com/swami-vivekanand-ki-vichaardhara-evam-hindi-sahitya/p/itm17e21f0220ab4"><img src="img/book.jpeg" alt=""></a></div></div><div class="owl-item" style="width: 344px;"><div class="container-80"><a href="https://www.bookgeeks.in/swami-vivekananda-books/"><img src="https://www.bookgeeks.in/wp-content/uploads/2022/07/19-My-Idea-of-Education.jpg" alt=""></a></div></div><div class="owl-item" style="width: 344px;"><div class="container-80"><a href="https://www.amazon.in/Motivating-Thoughts-Swami-Vivekananda/dp/9355212410"><img src="https://m.media-amazon.com/images/I/512dGu6nLOL.jpg" alt=""></a></div></div><div class="owl-item" style="width: 344px;"><div class="container-80"><a href="https://www.nbtindia.gov.in/books_detail__14__young-india-library__1177__a-simple-life-of-swami-vivekananda.nbt"><img src="https://www.nbtindia.gov.in/writereaddata/booksimages/1177.jpg" alt=""></a></div></div><div class="owl-item" style="width: 344px;"><div class="container-80"><a href="https://www.goodreads.com/book/show/560932.Complete_Works_of_Swami_Vivekananda_9_Vols_"><img src="https://rukminim2.flixcart.com/image/850/1000/book/7/5/4/the-complete-works-of-swami-vivekananda-set-of-9-volumes-original-imaebnkc8p6ksufk.jpeg?q=90" alt=""></a></div></div><div class="owl-item" style="width: 344px;"><div class="container-80"><a href="https://librarywala.com/books/294768629451-swami-vivekanand-biography-marathi-"><img src="https://cdn.exoticindia.com/images/products/original/books-2019/uah233.jpg" alt=""></a></div></div></div></div>
					  
					  
					  
					  
					  
					<div class="owl-controls clickable"><div class="owl-pagination"><div class="owl-page active"><span class=""></span></div><div class="owl-page"><span class=""></span></div></div><div class="owl-buttons"><div class="owl-prev"><span class="fa-stack"><i class="fa fa-angle-left" style="font-size:24px"></i></span></div><div class="owl-next"><span class="fa-stack"><i class="fa fa-angle-right" style="font-size:24px"></i></span></div></div></div></div>
        		</div>
        	</div>
        </section> -->

		<section>
		<div class="owl-carousel owl-theme owl-loaded owl-drag">
            
			<div class="owl-stage-outer">
			  
			  <div class="owl-stage" style="transform: translate3d(-1527px, 0px, 0px); transition: all 0.25s ease 0s; width: 3334px;">
				
				<div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;"><div class="item">
				   <h4>1</h4>
				 </div>
			  </div>
			  
			  <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;"><div class="item">
				   <h4>2</h4>
				 </div></div>
				
				<div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;"><div class="item">
				   <h4>3</h4>
				 </div></div>
				
				<div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;"><div class="item">
				   <h4>4</h4>
				 </div></div>
				
				<div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;"><div class="item">
				   <h4>5</h4>
				 </div></div>
				
				<div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;"><div class="item">
				   <h4>6</h4>
				 </div></div>
				
				<div class="owl-item" style="width: 128.906px; margin-right: 10px;"><div class="item">
				   <h4>7</h4>
				 </div></div><div class="owl-item" style="width: 128.906px; margin-right: 10px;"><div class="item">
				   <h4>8</h4>
				 </div></div>
				
				<div class="owl-item" style="width: 128.906px; margin-right: 10px;"><div class="item">
				   <h4>9</h4>
				 </div></div>
				
				<div class="owl-item" style="width: 128.906px; margin-right: 10px;"><div class="item">
				   <h4>10</h4>
				 </div></div><div class="owl-item" style="width: 128.906px; margin-right: 10px;"><div class="item">
				   <h4>11</h4>
				 </div></div>
				
				<div class="owl-item active" style="width: 128.906px; margin-right: 10px;"><div class="item">
				   <h4>12</h4>
				 </div></div>
				
				<div class="owl-item active" style="width: 128.906px; margin-right: 10px;"><div class="item">
				   <h4>13</h4>
				 </div></div>
				
				<div class="owl-item active" style="width: 128.906px; margin-right: 10px;"><div class="item">
				   <h4>14</h4>
				 </div></div>
				
				<div class="owl-item active" style="width: 128.906px; margin-right: 10px;"><div class="item">
				   <h4>15</h4>
				 </div></div>
				
				<div class="owl-item" style="width: 128.906px; margin-right: 10px;"><div class="item">
				   <h4>16</h4>
				 </div></div>
				
				<div class="owl-item" style="width: 128.906px; margin-right: 10px;"><div class="item">
				   <h4>17</h4>
				 </div>
				 </div>
				 <div class="owl-item" style="width: 128.906px; margin-right: 10px;"><div class="item">
				   <h4>18</h4>
				 </div></div>
				
				<div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;"><div class="item">
				   <h4>19</h4>
				 </div></div>
				
				<div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;"><div class="item">
				   <h4>20</h4>
				 </div></div>
				
				<div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;"><div class="item">
				   <h4>21</h4>
				 </div></div>
				
				<div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;"><div class="item">
				   <h4>22</h4>
				 </div></div>
				
				<div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;"><div class="item">
				   <h4>23</h4>
				 </div></div>
				
				<div class="owl-item cloned" style=""><div class="item">
				   <h4>24</h4>
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
    items:4, 
  // items change number for slider display on desktop
  
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:30000,
    autoplayHoverPause:true
});</script>

	<script src="js/script.js"></script>
</body>
</html>