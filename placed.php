<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <title>Placed Student in Bilaspur Chhattisgarh</title>
  </head>
  <body>
    <main>
      <?php 
		
			include('include/header.php');
			include('include/nav.php');
		?>

      <div class="margin-tb">
				<ul class="breadcrumb container-90">
					<li class="relative padding-lr">
						<a href="index.php">
						<i class="material-icons absolute">home</i>
						</a>
					
					</li>
					<li>Placed Students</li>
				</ul>
			</div>	

      <section class="html-list">
			<div class="container-80">
				<div class="margin-tb">
                    <p class="fs-30 text-center" style="    color: rgb(102, 116, 204);">Our Placed Students</p>
					<ul id="phpSQlCourse">
						
					</ul>
				</div>
			</div>
		</section>
      

      <section>
        <div class="grid-3" id="placed">
        </div>
      </section>

      <?php 
		
			include('include/footer.php');
		?>
    </main>

    <script src="js/placed.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
