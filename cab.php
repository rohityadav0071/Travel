<head>
<script type="text/javascript">
function validate()
{
	var today=new Date();
	var day=parseInt(today.getDate());
	var month=parseInt(today.getMonth()+1);
	var year=parseInt(today.getFullYear());
	var datepicker=document.getElementById('datepicker').value;
	var selectday=parseInt(datepicker.substr(8,2));
	var selectmonth=parseInt(datepicker.substr(5,2));
	var selectyear=parseInt(datepicker.substr(0,4));
	var daybool=selectday>=day;
	//alert('Day '+selectday+' Month '+selectmonth+' Year '+selectyear);
	if(selectday>=day)
	{
		if(selectmonth>=month)
		{
			if(selectyear>=year)
			{
				return true;
			}
			else
			{
				alert('Invalid Date');
				return false;
			}
		}
		else
		{
			alert('Invalid Date');
			return false;
		}
	}
	else
	{
		alert('Invalid Date');
		return false;
	}
}
</script>

</head>
<?php session_start() ?>
<?php 

		 if(isset($_SESSION['msg']))
		{
			echo '<p class="message"> <font size="5" color="White"> <center> <i>';
			echo $_SESSION['msg'];
			echo "</i></center></font></p>";
			unset($_SESSION['msg']);
		}

		 ?>
			<?php 
include "header.php";
			include "nav.php"; ?>
			<div class="container">
				<div class="col-sm-10">
					<div class="panel panel-primary">
						<div class="panel-heading">
							<h4>Book Cabs Across India</h4>
						</div>
						<div class="panel-body">


							<form class="form-inline" action="cabResult.php" method="post" onsubmit="return validate();">

								<div class="form-group">
									<label class="control-label">From :</label>
									<div class="input-group">
										<span class="input-group-addon"><i
											class="glyphicon glyphicon-map-marker"></i></span> <input
											class="form-control" type="text" name="boardPoint" required>
										</div>
									</div>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<div class="form-group">
										<label class="control-label">To :</label>
										<div class="input-group">
											<span class="input-group-addon"><i
												class="glyphicon glyphicon-map-marker"></i></span> <input
												class="form-control" type="text" name="dropPoint" required>
											</div>
										</div>

										<br> <br>

										<div class="form-group">
											<label class="control-label">Depature :</label>
											<div class='input-group date' id='datetimepicker1'>
												<input type="date" class="form-control" name="date" id="datepicker"  required/> <span
												class="input-group-addon"> <span
												class="glyphicon glyphicon-calendar"></span>
											</span>
										</div>
									</div>
									<script type="text/javascript">
										$('#datetimepicker').data("DateTimePicker").(function () {
											$('#datetimepicker1').datetimepicker();
										});

									</script>

									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<div class="form-group">
										<label for="select" class="control-label">Pickup Time</label>
										<div class="input-group">
											<select class="form-control" id="select" name="putime" required>
									<option value="7:30">7:30</option>
									<option value="8:00">8:00</option>
									<option value="8:30">8:30</option>
									<option value="9:00">9:00</option>
									<option value="9:30">9:30</option>
								</select>

										</div>
									</div>
									&nbsp;&nbsp;&nbsp;&nbsp; <br> <br>
									<input type="submit" value="Submit" class="btn btn-default"/>
								</form>
							</div>


						</div>

						<br> <br>

						<div class="row">
							<div class="col-sm-10">
								<div id="myCarousel" class="carousel slide" data-ride="carousel">
									<!-- Indicators -->
									<ol class="carousel-indicators">
										<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
										<li data-target="#myCarousel" data-slide-to="1"></li>
										<li data-target="#myCarousel" data-slide-to="2"></li>
									</ol>

									<!-- Wrapper for slides -->
									<div class="carousel-inner">

										<div class="item active">
											<img src="images/car1.png" alt="Luxury Car" style="width: 100%;">
											<div class="carousel-caption">
												<h3>Luxury Car</h3>
											</div>
										</div>

									<div class="item">
										<img src="images/car2.jpg" alt="Sedan Cars" style="width: 100%;" />
											<div class="carousel-caption">
												<h3>Sedan Cars</h3>
											</div>
									</div>

									<div class="item">
										<img src="images/car3.jpg" alt="HatchBack Car" style="width: 100%">
											<div class="carousel-caption">
												<h3>HatchBack Car</h3>
											</div>
										</div>
									</div>

									<!-- Left and right controls -->
								<a class="left carousel-control" href="#myCarousel"
									data-slide="prev"> <span
									class="glyphicon glyphicon-chevron-left"></span> <span
									class="sr-only">Previous</span>
								</a> 

								<a class="right carousel-control" href="#myCarousel"
								data-slide="next"> <span
								class="glyphicon glyphicon-chevron-right"></span> <span
								class="sr-only">Next</span>
							    </a>
						    </div>
					    </div>
				    </div>
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
											<h4>Download our Moblie Apps</h4>

											<div class="d-apps">
												<ul>
													<li><a href="#"><img src="images/app1.png" alt="" /></a></li>
													<li><a href="#"><img src="images/app2.png" alt="" /></a></li>
													<li><a href="#"><img src="images/app3.png " alt="" /></a></li>
												</ul>
											</div>
		                                </div>
										<div class="col-sm-4">
											<h4>We Accept</h4>


											<div class="d-apps">
												<ul>
													<li><a href="#"><img src="images/c1.png" alt="" /></a></li>
													<li><a href="#"><img src="images/c2.png" alt="" /></a></li>
													<li><a href="#"><img src="images/c3.png" alt="" /></a></li>
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

					
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!--<script src="bootstrap.min.js"></script>-->
<!-- <script src="jquery.dataTables.js"></script>-->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js "></script> 

<script src="script.js"></script> 
			
	    </div>
	</body>
</html>
