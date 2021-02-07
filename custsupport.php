<?php session_start();
include "dbconn.php";
if (isset($_SESSION['name']))
?>

<?php 
            if (isset($_POST['send'])) {
               
               $sql = "INSERT INTO `customer_support` (`name`, `email`, `subject`, `query`) VALUES ('{$_POST['userName']}', '{$_POST['userEmail']}', '{$_POST['subject']}', '{$_POST['content']}')";
               if (mysqli_query($conn,$sql)) {
                echo $sql;
                echo "Data Inserted";
            }
            else {
                echo $sql;
                echo "Cannot insert data";
            }

        }
        ?>
		
<html>
<head>
<title>Contact Us Form</title>
<link rel="stylesheet" type="text/css" href="stylecs.css" />
</head>
<body style="width:100%">
   <div class="form-container" style="margin-left:30%; width: 40%; margin-top: 5%">
	  <h3>Customer Support</h3>
        <form name="frmContact" id="" frmContact"" method="post"
            action="" enctype="multipart/form-data"
            onsubmit="return validateContactForm()">

            <div class="input-row">
                <label style="padding-top: 20px;">Name</label> <span
                    id="userName-info" class="info"></span><br /> <input
                    type="text" class="input-field" name="userName"
                    id="userName" />
            </div>
            <div class="input-row">
                <label>Email</label> <span id="userEmail-info"
                    class="info"></span><br /> <input type="text"
                    class="input-field" name="userEmail" id="userEmail" />
            </div>
            <div class="input-row">
                <label>Subject</label> <span id="subject-info"
                    class="info"></span><br /> <input type="text"
                    class="input-field" name="subject" id="subject" />
            </div>
            <div class="input-row">
                <label>Query:</label> <span id="userMessage-info"
                    class="info"></span><br />
                <textarea name="content" id="content"
                    class="input-field" cols="60" rows="6"></textarea>
            </div>
            <div>
                <input type="submit" name="send" class="btn-submit"
                    value="Send" />

                <div id="statusMessage"> 
                        <?php
                        if (! empty($message)) {
                            ?>
                            <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                        <?php
                        }
                        ?>
                    </div>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-2.1.1.min.js"
        type="text/javascript"></script>
    <script type="text/javascript">
        function validateContactForm() {
            var valid = true;

            $(".info").html("");
            $(".input-field").css('border', '#e0dfdf 1px solid');
            var userName = $("#userName").val();
            var userEmail = $("#userEmail").val();
            var subject = $("#subject").val();
            var content = $("#content").val();
            
            if (userName == "") {
                $("#userName-info").html("Required.");
                $("#userName").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (userEmail == "") {
                $("#userEmail-info").html("Required.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
            {
                $("#userEmail-info").html("Invalid Email Address.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }

            if (subject == "") {
                $("#subject-info").html("Required.");
                $("#subject").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (content == "") {
                $("#userMessage-info").html("Required.");
                $("#content").css('border', '#e66262 1px solid');
                valid = false;
            }
            return valid;
        }
</script>
<?php 
include "header.php";
			include "nav.php"; ?>
			<div class="container">
				<div class="col-sm-10">

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
												<a href="/cabs">Cabs Booking</a><br>
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
									<b><p>Copyrights © 2019 Xtreme Travels.</p></b>
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
