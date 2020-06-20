<?php include('hepa_header.html'); include('db_connect.php'); ?>
	<div class="banner_bottom">	
		<div class="container">
			<h3 class="tittle-w3ls">Latest Activities</h3>

			<!--//Activities table -->
			<div class="table-responsive">
				<table class="table">

				<?php 
				$sql_select = "SELECT * FROM permohonan_aktiviti ORDER BY idPermohonanAktiviti ASC";
				$result = mysqli_query($connection, $sql_select)or die(mysqli_error($connection)); 
				echo"<thead class='thead-dark'>";
				echo"<tr>";
				echo"<th scope='col'>Id</th>";
				echo"<th scope='col'>Title</th>";
				echo"<th scope='col'>Date</th>";
				echo"<th scope='col'>Time</th>";
				echo"<th scope='col'>Venue</th>";
				echo"<th scope='col'>Description</th>";
				echo"<th scope='col'>Mark</th>";
				echo"</tr>";
				echo"</thead>";
				
				while($row = mysqli_fetch_array($result))
				{
					echo"<tbody>";
					echo"<tr>";
					echo"<td>".$row['idPermohonanAktiviti']."</td>";
					echo"<td>".$row['peTitle']."</td>";
					echo"<td>".$row['peDate']."</td>";
					echo"<td>".$row['peTime']."</td>";
					echo"<td>".$row['peVenue']."</td>";
					echo"<td>".$row['peDesc']."</td>";
					echo"<td>".$row['peMark']."</td>";
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