<?php 
require_once('db_connect.php');
include('hepa_header.html');

$msg = "";
	
	if (isset($_POST['submit'])) //if someone press submit
	{

		$loginID = $_POST['loginID'];
		$userName = $_POST['userName'];
		$accType = $_POST['accType'];
		$password = $_POST['userPassword'];
		$cPass = $_POST['cUserPassword'];

		if($password != $cPass)
		{
			$msg = "Please Check Your Password";
		}

		else 
		{

			//create hash here

			$passwordHash = password_hash($password, PASSWORD_DEFAULT);

			$query = "INSERT INTO usercredential (userId, userName, accType, userPassword) VALUES ('$loginID', '$userName','$accType','$passwordHash')";
			mysqli_query($connection, $query) or die(mysqli_error($connection));
			$msg = "Register Successful";
		}

	}

?>
<body>
		<div class="services-breadcrumb">
		<div class="inner_breadcrumb">

			<ul class="short">
				<li><a href="index.html">Home</a><span>|</span></li>
				<li>Register</li>
			</ul>
		</div>
		</div>
		<div class="banner_bottom">
		<div class="container">
				<div class="tittle-w3ls_head">
				<h3 class="tittle-w3ls three">Register New User</h3>

				<br><h4 style="text-align:center;">User Details</h4><br><h5 style="text-align:center;">

				<?php 
					if($msg != "")
						echo $msg; 

				?></h5>
				<div class="inner_sec_info_wthree_agile">
				<div class="signin-form">
					<div class="login-form-rec">
				<form method="post" action="daftar-pengguna.php">
					<input type="text" name="loginID" placeholder="User Login ID" required="true">
					<input type="text" name="userName" required="true" placeholder="User Name">
					<input type="password" name="userPassword" required="true" placeholder="User Password">
					<input type="password" name="cUserPassword" required="true" placeholder="Confirm Password">
					<input type="radio" name="accType" value="1" checked="true"> Pelajar
					<input type="radio" name="accType" value="2"> Kelab
					<input type="radio" name="accType" value="3"> Pegawai HEPA 
					<input type="submit" name="submit" placeholder="Submit" value="Submit">
				</form>
				</div>
				</div>
			</div>

			</div>
		</div>
	</div>
<?php include('kelab_footer.html')?>