<?php
	include"db_connect.php";
	//session_unset();
	if(isset($_SESSION['UserID']))
	{
	$id = $_SESSION['UserID'];
	$email = $_SESSION['UserEmail'];
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/ui.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/responsive.css">
	<link rel="stylesheet" type="text/css" href="asset/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
	<!--script type="text/javascript" src="bootstrap/js/script.js"></script-->
</head>
<body>
<header class="section-header">
	<?php if(isset($_GET['registererror']))
	{ echo "<p style='color:red;'>Password does not match</p>";}
		?>
<section class="header-top-light border-bottom">
  <div class="container">
    <nav class="d-flex flex-column flex-md-row">
      <ul class="nav mr-auto d-none d-md-flex">
        <li><a href="#" class="nav-link px-2"> <i class="fa fa-facebook"></i> </a></li>
		<li><a href="#" class="nav-link px-3"> <i class="fa fa-instagram"></i> </a></li>
		<li><a href="#" class="nav-link px-2"> <i class="fa fa-twitter"></i> </a></li>
      </ul>
      <ul class="nav">
        <li class="nav-item"><a href="#" class="nav-link" > Delivery </a></li>
		<li class="nav-item"><a href="#" class="nav-link" > Help </a></li>
		<!-- <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"> USD </a>
			<ul class="dropdown-menu dropdown-menu-right">
				<li><a class="dropdown-item" href="#">EUR</a></li>
				<li><a class="dropdown-item" href="#">AED</a></li>
				<li><a class="dropdown-item" href="#">RUBL </a></li>
            </ul>
		</li> -->
        <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">   Language </a>
            <ul class="dropdown-menu dropdown-menu-right">
				<li><a class="dropdown-item" href="#">English</a></li>
				<li><a class="dropdown-item" href="#">Arabic</a></li>
				<li><a class="dropdown-item" href="#">Russian </a></li>
            </ul>
        </li>
      </ul> <!-- navbar-nav.// -->
    </nav>
  </div>
</section>

<section class="header-main border-bottom">
	<div class="container">
<div class="row align-items-center">
	<div class="col-lg-3 col-sm-4 col-12">
	<a href="index.php" class="/brand-wrap">
		<img class="logo" src="images/Logo.png" style="height: 120px; width: 100px;"  >
		<!--bootstrap-ecommerce-html/images/logo.png-->
	</a> <!-- brand-wrap.// -->
	</div>
	<div class="col-lg-4 col-xl-5 col-sm-8 col-12">
		<form action="#" class="search">
			<div class="input-group w-100">
			    <input type="text" class="form-control" style="width:55%;" placeholder="Search">
			    <select class="custom-select"  name="category_name">
						<option value="">All type</option><option value="codex">Special</option>
						<option value="comments">Only best</option>
						<option value="content">Latest</option>
				</select>
			    <div class="input-group-append">
			      <button class="btn btn-primary" type="submit">
			        <i class="fa fa-search"></i>
			      </button>
			    </div>
		    </div>
		</form> <!-- search-wrap .end// -->
	</div> <!-- col.// -->
	<div class="col-lg-5 col-xl-4 col-sm-12">
		<div class="widgets-wrap float-md-right">
			<a href="#" class="widget-header mr-2">
				<div class="icon">
					<i class="icon-sm rounded-circle border fa fa-shopping-cart"></i>
					<span class="notify">0</span>
				</div>
			</a>
			<a href="#" class="widget-header mr-2">
				<div class="icon">
					<i class="icon-sm rounded-circle border fa fa-heart"></i>
				</div>
			</a>
			<?php
				//if (isset($_SESSION['UserID'])) {
					
			?>
			<div class="widget-header dropdown">
				<a href="#" data-toggle="dropdown" data-offset="20,10">
			
					<div class="icontext">
						<div class="icon">
							<i class="icon-sm rounded-circle border fa fa-user"></i>
						</div>
						<div class="text">
						<?php if(isset($_SESSION['UserEmail'])){?>
							<small class="text-muted"><?php echo $email;?></small>
							<div>My Profile <i class="fa fa-caret-down"></i> </div>
						<?php }else{?>	
							<small class="text-muted">Sign in | Join</small>
							<div>My account <i class="fa fa-caret-down"></i> </div>
						<?php }	?>
						</div>
					</div>
				</a>
				<div class="dropdown-menu dropdown-menu-right">
					<form method="POST" action="db_connect.php" class="px-4 py-3">
					<?php if(isset($_SESSION['UserID'])){ ?>
						<li><a class="dropdown-item" href="">Edit Profile</a></li>
						<li><a class="dropdown-item" href="">My Wishlist</a></li>
						<li><a class="dropdown-item" href="">My Cart</a></li>
						<hr class="dropdown-divider">
						<a href="">Log Out</a>
					<?php }else{ ?>
						<div class="form-group">
						  <label>Email address</label>
						  <input type="email" name="UserEmail" class="form-control" placeholder="email@example.com" required="">
						</div>
						<div class="form-group">
						  <label>Password</label>
						  <input type="password" name="UserPass" class="form-control" placeholder="Password" required="">
						</div>
						<button type="submit" name="btnLogin" class="btn btn-primary">Sign in</button>
						</form>
						<hr class="dropdown-divider">
						<a class="dropdown-item" href="" data-target="#rmyModal" data-toggle="modal">Don't have account? Sign up</a>
						<a class="dropdown-item" href="#">Forgot password?</a>
					<?php }?>
				</div> <!--  dropdown-menu .// -->
			</div>  <!-- widget-header .// -->
		</div> <!-- widgets-wrap.// -->
	</div> <!-- col.// -->
</div> <!-- row.// -->
	</div> <!-- container.// -->
</section> <!-- header-main .// -->
<nav class="navbar-expand-lg border-bottom">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav5" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="main_nav5">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link pl-0" href="#"> <strong>All category</strong></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Make Up</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Skin Cares</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Men's Care</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Bath &amp Body</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Personal Care</a>
        </li>
        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">More</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Eyes</a></li>
            <li><a class="dropdown-item" href="#">Lips</a></li>
            <!-- <div class="dropdown-divider"></div> -->
            <li><a class="dropdown-item" href="#">Eyebrows</a></li>
            <li><a class="dropdown-item" href="#">Fragrance</a></li>
            <li><a class="dropdown-item" href="#"></a></li>
          </ul>
        </li>

      </ul>

    </div> <!-- collapse .// -->
  	
  </div> <!-- container .// -->
</nav> <!-- navbar main end.// -->

</header> <!-- section-header.// -->
	<!-- style="background-color: #e3f2fd;" -->


</body>
</html>