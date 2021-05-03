
<?php
 include"header.php";
?>	 
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<!-- style="background-color: #e3f2fd;" -->

	
		<!--Carousel Wrapper-->
		<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
		  <!--Indicators-->
		 	<ol class="carousel-indicators">
			    <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-1z" data-slide-to="1"></li>
			    <li data-target="#carousel-example-1z" data-slide-to="2"></li>
		  	</ol>
		  <!--/.Indicators-->
		  <!--Slides-->
		  	<div class="carousel-inner" role="listbox">
		    <!--First slide-->
			    <div class="carousel-item active">
			      	<img class="d-block w-100" src="images/carousel1.jpg"
			        alt="First slide">
			        <div class="carousel-caption col-lg-5 col-md-6 pb-2 text-left text-justify">
			    		<h1 class="h1-responsive"> Sample Text</h1>
			    		<p class="text-monospace">Lorem ipsum</p>
			    	</div>
		    	</div>
		    <!--/First slide-->
		    <!--Second slide-->
			    <div class="carousel-item">
			    	<img class="d-block w-100" src="images/carousel2.png"
			        alt="Second slide">
			    </div>
		    <!--/Second slide-->
		    <!--Third slide-->
			    <div class="carousel-item">
			      <img class="d-block w-100" src="images/wintergrooming.jpg"
			        alt="Third slide">
			    </div>
		    <!--/Third slide-->
		  </div>
		  <!--/.Slides-->
		  <!--Controls-->
		  <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		  <!--/.Controls-->
		</div>
	<!--/.Carousel Wrapper-->
	
	<div class="container">
		<h3 class="text-center mt-2 pt-2"> Top Categories</h3>
		<div class="row">
			<div class="col-md-4 col-sm-12 mt-4">
				<!-- Card 1-->
				<div class="card ">
				  <!-- Card image -->
				 	<img class="card-img-top" style="height: 330px;" src="images/makeupsMain.jpg" alt="Card image cap">
				  <!-- Card content -->
				 	<div class="card-body text-center">
				    <!-- Title -->
					    <h4 class="card-title"><a>Make Up</a></h4>
					    <!-- Text -->
					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
					      content.</p>
					    <!-- Button -->
					    <a href="#" class=" btn btn-outline-primary">SHOP NOW</a>
					</div>
				</div>
				<!-- Card 1-->
			</div>
			<div class="col-md-4 col-sm-12 mt-4">
				<!-- Card 2-->
				<div class="card ">
				  <!-- Card image -->
					<img class="card-img-top" style="height: 330px;" src="images/skincareMain.jpg" alt="Card image cap">
				  <!-- Card content -->
					<div class="card-body text-center">
				    <!-- Title -->
					    <h4 class="card-title"><a>Skin Care</a></h4>
					    <!-- Text -->
					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
					      content.</p>
					    <!-- Button -->
					    <a href="#" class=" btn btn-outline-primary">SHOP NOW</a>
				  	</div>
				</div>
				<!-- Card 2-->
			</div>
			<div class="col-md-4 col-sm-12  mt-4">		
				<!-- Card 3-->
				<div class="card">
				  <!-- Card image -->
				  	<img class="card-img-top" style="height: 330px" src="images/takecaremen.jpg">
				  <!-- Card content -->
					<div class="card-body text-center">
				    <!-- Title -->
					    <h4 class="card-title"><a>Men's Care</a></h4>
					    <!-- Text -->
					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
					      content.</p>
					    <!-- Button -->
					    <a href="#" class=" btn btn-outline-primary">SHOP NOW</a>
				  	</div>
				</div>
				<!-- Card 3-->
			</div>
		</div><!--row-->
		<div class="text-center m-5">
			<a href="#" class="btn btn-outline-secondary btn-lg">All Categories</a>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="card-deck p-5">
			  <div class="card">
			    <img class="card-img-top h-50" src="images/dovemen.jpg" alt="Card image cap">
			    <div class="card-body pb-1">
			      <h5 class="card-title">This is sale</h5>
			      <p class="card-text">This is description.</p>
			      <p class="card-text"><small class="text-muted">This is price</small></p>
			    </div>
			  </div>
			  <div class="card">
			    <img class="card-img-top h-50" src="images/skincareMain.jpg" alt="Card image cap">
			    <div class="card-body">
			      <h5 class="card-title">This is sale</h5>
			      <p class="card-text">This is description.</p>
			      <p class="card-text"><small class="text-muted">This is price</small></p>
			    </div>
			  </div>
			  <div class="card ">
			    <img class="card-img-top h-50" src="images/mencare.jpg" alt="Card image cap">
			    <div class="card-body">
			      <h5 class="card-title">This is sale</h5>
			      <p class="card-text">This is description.</p>
			      <p class="card-text"><small class="text-muted">This is price</small></p>
			    </div>
			  </div>
			  <div class="card">
			    <img class="card-img-top h-50" src="images/skincareMain.jpg" alt="Card image cap">
			    <div class="card-body">
			      <h5 class="card-title">This is sale</h5>
			      <p class="card-text">This is description.</p>
			      <p class="card-text"><small class="text-muted">This is price</small></p>
			    </div>
			  </div>

			</div><!--Card deck-->		
		</div><!--row-->
		<div class="container">
			
		</div>
	</div>
	<?php
	include "footer.php";
?>
</body>

</html>