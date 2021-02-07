<?php session_start();
include "dbconn.php";
if (isset($_SESSION['name']))
{
?>
			<?php 
            include "header.php";
			include "nav.php"; 
			?>
			<br>
			<br>
			<br>
			<br>	
			<div class="container">    
				<div class="col-sm-12">
					<?php
					$booked_seats=array();
                    $Seats_no=$_GET["Seats_no"];
					$sel="SELECT * FROM `bus` where id={$_GET["Bus_id"]}";
					$bid;$brdpnt;$brdtm;$drppnt;$drptm;$bnam;$btyp;$price;$tseat;$aseat;$bseat;
					$str= mysqli_query($conn,$sel) or die(mysqli_error($conn));
					$rows= mysqli_num_rows($str) ;
					echo $sel;
					if($rows==0)
					{

						echo '<h3 style= "text-align:center;"> <font color="red">Something went wrong Bus Not Available</font></h3>';
						echo "<br>";
					}
					else
					{

						while($row=mysqli_fetch_array($str))
						{
							$bid=$row['id'];
							$brdpnt=$row['board_point'];
							$brdtm=$row['board_time'];
							$drppnt=$row['drop_point'];
							$drptm=$row['drop_time'];
							$bnam=$row['bus_name'];
							$btyp=$row['bus_type'];
							$price=$row['price'];
							$tseat=$row['max_seats'];
							$aseat=$row['seats_available'];
							$bseat=$tseat-$aseat;

}
}

for ($i=0; $i <$Seats_no ; $i++) { 
	$bseat++;
array_push($booked_seats, $bseat);
}
?>
					<div class="container">
						<div class="col-sm-11">
							<div class="well well-sm">
								<h4>
									<span class="label label-default">&nbsp;&nbsp;1&nbsp;&nbsp;</span>&nbsp;&nbsp;Review
									Your Trip Details
								</h4>
							</div>
						</div>
						<div class="col-sm-7">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3>Bus Details</h3>
								</div>
								<div class="panel-body">
									<h5>
										<span class="label label-default">DEPART</span>
									</h5>
									<br>
									<div class="container">
										<div class="col-sm-2" align="center">
											<p><?php echo $brdpnt ?></p>

											<h2>
												<b><p><?php echo $brdtm ?></p></b>
											</h2>
											<p>
												<b><?php echo $brdpnt ?></b>
											</p>
										</div>

										<div class="col-sm-2">
											<img src="buslogo.JPG" class="img-rounded" alt=""
											width="170" height="20">
										</div>

										<div class="col-sm-2">
											<p><?php echo $drppnt ?></p>

											<h2>
												<b><p><?php echo $drptm ?></p></b>
											</h2>
											<p>
												<b><?php echo $drppnt ?></b>
											</p>
										</div>
									</div>
								</div><!-- panel body finish -->
							    <div class="panel-footer">

									<div class="container">
										<div class="col-sm-2">
											<p>Opreator:</p>

											<b><p><?php echo $bnam ?></p></b>
											<p>
												<b><?php echo $btyp ?></b>
											</p>
										</div>

										<div class="col-sm-2">
											<p>Boarding Point & Time</p>

											<b><p><?php echo $brdpnt ?></p></b>
											<p>
												<b><?php echo $brdtm ?></b>
											</p>
										</div>

										<div class="col-sm-2">
											<p>Seat No(s):</p>
                                             <?php 
                                                foreach($booked_seats as $seat) {
                                                echo "<b>{$seat}</> ";
}
                                              ?>
											<b><p></p></b>

										</div>
									</div>
								</div>
							</div>
						</div>
					
						<div class="col-sm-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3>Fare Details</h3>
								</div>
								<div class="panel-body">
									<div class="col-sm-3">
										<h4>
											<p>PerPassenger:&nbsp;&nbsp;&nbsp;&#8377;&nbsp;<?php echo $price ?></p>
											<p>GrandTotal:&nbsp;&nbsp;&nbsp;&#8377;&nbsp;<?php echo $_GET["Total_fare"];?></p>
										</h4>
									</div>

								</div>
								<div class="panel-footer">
									 <h4><p>Pay:&nbsp;&nbsp;&nbsp;&#8377;&nbsp;<?php echo $_GET["Total_fare"];?></p>
									</h4>

								</div>

							</div>
						</div>

						<div class="col-sm-11">
							<div class="well well-sm">
								<h4>
									<span class="label label-default">&nbsp;&nbsp;2&nbsp;&nbsp;</span>&nbsp;&nbsp;Traveller
									Details
								</h4>

							</div>
						</div>

						<div class="col-sm-10">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3>Traveller's Info</h3>
								</div>
								<div class="panel-body">
									<form class="form-inline" method="POST"  action="success.php">
										<div class="form-group">
											<label for="sel1">Traveller Name</label> <select
											class="form-control" id="sel1" name="sel1">
											<option>Title</option>
											<option value="Mr">Mr</option>
											<option value="Mrs">Mrs</option>
											<option value="Ms">Ms</option>
											<option value="Master">Master</option>

										</select> <input type="text" class="form-control" id="name"
										placeholder="Enter Name" name="name"> <select
										class="form-control" id="sel1" name="gender">
										<option>Gender</option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
										<option value="Others">Others</option>
									</select> <input type="text" class="form-control" id="age" placeholder="Age"
									name="age">
									<div class="form-group">

									</div>
									<br> <br>
                                     </div>
									<div class="form-group">
										<label for="email">Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
										<input type="email" class="form-control" id="email" placeholder=""	name="email">
									<?php 

$pnr = rand(100000, 1000000);
 $tran=md5(uniqid(rand(), true));
									 ?>

                                    <input type="hidden" name="pnr" value=" <?php echo $pnr; ?>">
                                    <input type="hidden" name="tran" value=" <?php echo $tran; ?>">
                                    <input type="hidden" name="bid" value=" <?php echo $_GET['Bus_id']; ?>">
                                    <input type="hidden" name="seatno" value=" <?php echo $serialized; ?>">
                                    <input type="hidden" name="noofseat" value=" <?php echo $_GET['Seats_no']; ?>">
                                    <input type="hidden" name="totalfare" value=" <?php echo $_GET['Total_fare']; ?>">
									</div>
									<br> <br>
									<div class="form-group">
										<label for="email">Mobile Number:&nbsp;&nbsp;</label> 
										<input type="text" class="form-control" id="phone" placeholder="" name="phone"> <br> <br> 
										<input class="btn btn-primary btn-lg" type="submit" class="form-control" value="Confirm Booking">

									</div>
								</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container"> 
				<div class="well">
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

			<div class="container">
				
				<div class="well">

					<div class="container">

						<div class="row">

							<div class="col-sm-4">
								<h4>Download our Moblie Apps</h4>

								<div class="d-apps">
									<ul>
										<li><a href="#"><img src="app1.png" alt="" ></a></li>
										<li><a href="#"><img src="app2.png" alt="" ></a></li>
										<li><a href="#"><img src="app3.png " alt=""></a></li>
									</ul>
								</div>
							</div>
							<div class="col-sm-4">
								<h4>We Accept</h4>


								<div class="d-apps">
									<ul>
										<li><a href="#"><img src="c1.png" alt=""></a></li>
										<li><a href="#"><img src="c2.png" alt=""></a></li>
										<li><a href="#"><img src="c3.png" alt=""></a></li>
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
<br><br>

			<div class="row">

				<div class="container">

					<div class="footer"><hr>

						<footer>
							<div class="row">

								<div class="col-lg-12">
									<b><p>Copyrights © 2019 Xtreme Travels.</p></b>
								</div>
							</div>
						</footer>
					</div>
				</div>
			</div>

		</div>
		<script src="jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!--<script src="bootstrap.min.js"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<!-- <script src="jquery.dataTables.js"></script>-->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js "></script> 

<script src="script.js"></script> 


	</body>
</html>        
	
<?php 
}
else{

	header("Location: login.php");
}
 ?>