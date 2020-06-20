
<?php
	session_start();

	include('db_connect.php');

	$msg = "";

	if (isset($_POST['submit'])) //if someone press submit
	{
		$loginID = $_POST['userName'];
		$query = mysqli_query($connection,"SELECT * FROM usercredential where userId = '$loginID'") or die(mysqli_error($connection));
		$count = mysqli_num_rows($query);
		$data = mysqli_fetch_assoc($query);
		$password = password_verify($_POST['password'], $data['userPassword']);


		if ($password == true)
		{
			$_SESSION['userID']=$data['userId'];
			$_SESSION['accType']=$data['accType'];

			if($_SESSION['accType']=3){
				header("location:mainhepa.php");
			}
			if($_SESSION['accType']=2){
				header("location:mainkelab.php");
			}
			else{
				header("location:mainpelajar.php");
			}

		}
		else
		{
			$msg = "Invalid Genitals";
		}

	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Sistem MyMerit</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Sistem Pengurusan Merit Universiti pertahanan Nasional Malaysia (UPNM)" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //for bootstrap working -->
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,300,300i,400,400i,500,500i,600,600i,700,800" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700" rel="stylesheet">
	<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>-->
</head>
<body>
		<div class="top_header" id="home">
		<!-- Fixed navbar -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="nav_top_fx_w3ls_agileinfo">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"
					    aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
					<div class="logo-w3layouts-agileits">
						<h1> <a class="navbar-brand" href="mainpage.php"><i class="upnmlogo.png" aria-hidden="true"></i> MyMerit <span class="desc"></span></a></h1>
					</div>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<div class="nav_right_top">
						<ul class="nav navbar-nav navbar-right">
							<li class="active"><a class="bnr-button" href="login.php">login</a></li>

						</ul>
						<ul class="nav navbar-nav">
							<li><a href="mainpage.php">Home</a></li>
							<li><a href="mainclubinfo.php">Clubs </a></li>
							<li><a href="mainactivities.php">Activities</a></li>
							<li><a href="contact.html">about</a></li>
								</ul>
					</div>
				</div>
				<!--/.nav-collapse -->
			</div>
		</nav>
		</div>
		<!--/banner_info-->
		<div class="banner_inner_con">
		</div>
		<div class="services-breadcrumb">
			<div class="inner_breadcrumb">

				<ul class="short">
					<li><a href="mainpage.php">Home</a><span>|</span></li>
					<li>Signin</li>
				</ul>
			</div>
		</div>
		<!--//banner_info-->

	<div class="banner_bottom">
		<div class="container">
			<div class="tittle-w3ls_head">
				
				<h3 class="tittle-w3ls three"><img src="upnm.png"></h3>
				<h3 class="tittle-w3ls three">MyMerit <span>UPNM</span></h3><h4 style="text-align: center;color: red;">

				<?php 
					if($msg != "")
						echo $msg; 

				?> 
				</h4><div class="signin-form">
					<div class="login-form-rec">
				<form method="post" action="login.php">
					<input class="form-control" type="text" name="loginID" placeholder="Login ID"><br>
					<input class="form-control" type="password" name="password" placeholder="Password"><br>
					<div class="tp">
					<input type="submit" name="submit" placeholder="Login" value= "Log In">
					</div><br>
				</form>
			</div>
		</div>
			</div>
		</div>
	</div>

		<!-- footer -->
	<div class="footer">
		<div class="footer_inner_info_w3ls_agileits">
			<div class="col-md-3 footer-left">
				<h2><a href="index.html"><i class="fa fa-clone" aria-hidden="true"></i> MyMerit </a></h2>
				<p>Lorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora.</p>
				<ul class="social-nav model-3d-0 footer-social social two">
					<li>
						<a href="#" class="facebook">
							<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="#" class="twitter">
							<div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="#" class="instagram">
							<div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="#" class="pinterest">
							<div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
						</a>
					</li>
				</ul>
			</div>
			<div class="col-md-9 footer-right">
				<div class="sign-grds">
					<div class="col-md-4 sign-gd">
					<h4>Contact <span>Information</span></h4>
						<div class="address">
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-phone" aria-hidden="true"></i>
								</div>
								<div class="address-right">
									<h6>Phone Number</h6>
									<p>+1 234 567 8901</p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</div>
								<div class="address-right">
									<h6>Email Address</h6>
									<p>Email :<a href="mailto:example@email.com"> mail@example.com</a></p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-map-marker" aria-hidden="true"></i>
								</div>
								<div class="address-right">
									<h6>Location</h6>
									<p>Broome St, NY 10002,California, USA.

									</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
					<div class="col-md-5 sign-gd-two">
						<h4>Quick <span>Links</span> </h4>
						<ul>
							<li><a href="mainpage.html">Home</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="404.html">Services</a></li>
							<li><a href="login.php">Log In</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</div>

					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>
			<p class="copy-right">&copy 2018 Conceit. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
		</div>
	</div>
	<!-- //footer -->

</body>
</html>