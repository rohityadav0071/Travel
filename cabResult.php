<?php session_start();

include "dbconn.php";

if (isset($_SESSION['name']))
{
    
?>
			<?php 
include "header.php";
			include "nav.php"; ?>
			<div class="container">    
				<div class="col-sm-12">                   			

					<?php

					$req=$_POST["putime"];
					$sel="SELECT * FROM `cab` where board_point='".$_POST["boardPoint"]."' and drop_point='".$_POST["dropPoint"]."' and date='".$_POST["date"]."' " ;
					$str= mysqli_query($conn,$sel) or die(mysqli_error($conn));
					$rows= mysqli_num_rows($str) ;
					if($rows==0)
					{

						echo '<h3 style= "text-align:center;"> <font color="red">No available Cabs </font></h3>';
						echo "<br>";
					}
					else
					{

						echo '<h3>Available Cabs</h3>';
						echo '<table id="listbus" class="table table-striped table-borderd">
						<thead>
						<tr>
						<th>Cab Details</th>
					    <th>Depart</th>
						<th>Aminities</th>
					    <th>Fare</th>
					    <th></th>
						</tr>
						</thead>
						<tbody>';
						while($row=mysqli_fetch_array($str))
						{
							$cab_id = $row['id'];
							$Total_fare= $row['price'];
							$time=$req;
	//echo $Bus_id;         
							echo "<tr>";

							echo "<td>".$row['cab_name']."</td>";
							echo "<td>".$row['board_point']."</td>";
							echo "<td>".$row['aminities']."</td>";
							echo "<td>".$row['price']."</td>";
							echo "<td><a href='cabReviews.php?time={$time}& cab_id={$cab_id}& Total_fare={$Total_fare}' class='btn btn-primary'> Book</a></td>";
	/*echo
	'<td>  <form action="payment.php" method="POST" >
	<input name="Bus_id" type="hidden" value= "<?php echo $Bus_id; ?>" >
	<input name="Seats_no" type="hidden" value="<?php echo $Req; ?>" >
	<input class="btn btn-primary" type="submit" value="Book"  />
	</td>';*/
	echo "</tr>";
}
echo "
<tbody>
<tfoot>
<tr>
<th>Cab Details</th>
<th>Depart</th>
<th>Aminities</th>
<th>Fare</th>
<th></th>
</tr>
</tfoot>
</table>";
}
?>

</div>
</div>
<br>

<div class="row">
	<div class="container">

		<div class="jumbotron ">

			<div class="container">

				<div class="row">

					<div class="col-sm-4">
						<h3>Our Products</h3>
											<h5>
												<a href="./index.php">Bus Booking</a><br>
											</h5>
											<h5>
												<a href="./cab.php">Cabs Booking</a><br>
											</h5>
											<h5>
												<a href="./terms.php">Terms & Condition</a><br>
											</h5>
										</div>

										<div class="col-sm-4">
											<h3>Company</h3>
											<h5>
												<a href="./about.php">About Us</a><br>
											</h5>
											<h5>
												<a href="./privacy.php">Privacy Policy</a><br>
											</h5>
											<h5>
												<a href="./feedback.php">Feedback</a><br>
											</h5>

										</div>

										<div class="col-sm-4">
											<h3>More Links</h3>
											<h5>
												<a href="/getTicket?to=print">Print E-Ticket</a><br>
											</h5>
											<h5>
												<a href="./custsupport.php">Customer Support</a><br>
											</h5>
											<h5>
												<a href="getTicket?to=cancel">Cancel Tickets</a><br>
											</h5>

					</div>
				</div>
			</div>
		</div>



		<div class="well">

			<div class="container">

				<div class="row">

					<div class="col-sm-4">
						<h4>Toll Free No : 1234-5678-901</h4>
					</div>

					<div class="col-sm-4">
						<p>
							<h4>For Help: <a href="mailto:xtremetravles123@gmail.com">xtremetravles123@gmail.com</a></h4>
						</p>
						<br>
					</div>
					<div class="col-sm-4">
						<form class="form-inline">
							<div class="form-group">
								<label class="control-label"><h4>Subscribe For
								Offers :</h4></label>
								<div class="input-group">
									<span class="input-group-addon"><i
										class="glyphicon glyphicon-envelope"></i>
									</span> 
									<input class="form-control" type="Email" placeholder="Type Email">										
								</div>
								<button type="submit" class="btn btn-default btn-xs">Subscribe</button>

							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div>
			<div class="well">

				<div class="container">

					<div class="row">

						<div class="col-sm-4">
							<h4>Download our Moblie Apps</h4>

							<div class="d-apps">
								<ul>
									<li><a href="#"><img src="app1.png" alt="" /></a></li>
									<li><a href="#"><img src="app2.png" alt="" /></a></li>
									<li><a href="#"><img src="app3.png " alt="" /></a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-4">
							<h4>We Accept</h4>


							<div class="d-apps">
								<ul>
									<li><a href="#"><img src="c1.png" alt="" /></a></li>
									<li><a href="#"><img src="c2.png" alt="" /></a></li>
									<li><a href="#"><img src="c3.png" alt="" /></a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-4">

							<h4>Follow Us On</h4>

							<div class="social">
								<ul>
									<li><a href="#" class="facebook"> </a></li>
									<li><a href="#" class="facebook twitter"> </a></li>
									<li><a href="#" class="facebook chrome"> </a></li>
									<li><a href="#" class="facebook dribbble"> </a></li>
								</ul>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
<br><br>
<div class="row">

	<div class="container">

		<div class="footer"><hr>

			<footer>
				<div class="row">

					<div class="col-lg-12">
						<b><p>Copyrights © 2018 Xtreme Travels.</p></b>
					</div>
				</div>
			</footer>
		</div>
	</div>
</div>


<!-- Latest compiled and minified JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!--<script src="bootstrap.min.js"></script>-->
<!-- <script src="jquery.dataTables.js"></script>-->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js "></script> 

<script src="script.js"></script> 


</div>
</body>
</html>
<?php 
}
else{

	header("Location: login.php");
}

 ?>