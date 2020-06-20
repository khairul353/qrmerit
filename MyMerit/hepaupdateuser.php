<?php include('hepa_header.html'); include('db_connect.php'); ?>
	<div class="banner_bottom">	
		<div class="container">
			<h3 class="tittle-w3ls">Users List</h3>

			<!--//Activities table -->
			<div class="table-responsive">
				<table class="table">

				<?php 
				$sql_select = "SELECT userId, userName, accType FROM usercredential ORDER BY accType ASC";
				$result = mysqli_query($connection, $sql_select)or die(mysqli_error($connection)); 
				echo"<thead class='thead-dark'>";
				echo"<tr>";
				echo"<th scope='col'>Id</th>";
				echo"<th scope='col'>User Name</th>";
				echo"<th scope='col'>Account Type</th>";

				echo"</tr>";
				echo"</thead>";
				
				while($row = mysqli_fetch_array($result))
				{
					echo"<tbody>";
					echo"<tr>";
					echo"<td>".$row['userId']."</td>";
					echo"<td>".$row['userName']."</td>";
					echo"<td>".$row['accType']."</td>";
					echo"<td><button type='button' onclick='updateuser.php'>Update</button></td>";
					echo"</tr>";
				}
				echo"</tbody>";
				echo"</table>";?>
			</table>
			</div>

			</div>
		</div>
		</body>
	</html>
			<?php include('hepa_footer.html'); ?>