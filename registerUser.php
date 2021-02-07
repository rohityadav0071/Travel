<?php session_start();
include "dbconn.php";
?>
<?php 
include "header.php";
include "nav.php"; ?>

<br><br>
<div class="container">


	<div class="row">

		<div class="col-md-offset-2 col-md-8">

			<div class="panel panel-primary">

				<div class="panel-heading">

					<h4>Register User</h4>

				</div>

				<div class="panel-body">
					<form class="form-horizontal" action="registerUser.php" method="POST" >
						<div class="form-group">
							<label class="control-label col-md-4">First Name:</label>
							<div class="col-md-8">
								<input type="text" name="firstname" class="form-control"
								placeholder="First Name" required />
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-4">Last Name:</label>
							<div class="col-md-8">
								<input type="text" name="lastname" class="form-control"
								placeholder="Last Name" required/>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-4">Email:</label>
							<div class="col-md-8">
								<input type="email" name="email" class="form-control"
								placeholder="Email" required/>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-4">Contact:</label>
							<div class="col-md-8">
								<input type="text" name="contactnumber" class="form-control"
								placeholder="Contact" required/>
							</div>
						</div>

						<div class="form-group">
							<label class="control-label col-md-4">Password:</label>
							<div class="col-md-8">
								<input type="password" name="password" class="form-control"
								placeholder="New Password" required/>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-4">Confirm Password:</label>
							<div class="col-md-8">
								<input type="password" name="confirmpassword" class="form-control"
								placeholder="Confirm Password" required />
							</div>
						</div>

						<div class="form-group">

							<div class="col-md-offset-4 col-md-4">

								<input type="submit" name="submit" value="Save" class="btn btn-primary"/>

							</div>
						</div>						

					</form>


				</div>

			</div>

		</div>

	</div>
</div>

<?php 

if (isset($_POST['submit'])) {
	
	$pass=$_POST['password'];
	$cpass=$_POST['confirmpassword'];
	$h=md5($_POST['password']);
	
	if ($pass==$cpass) {
		
		$sql="INSERT INTO `users` (`first_name`, `last_name`, `email`, `contact`, `password`, `role`) VALUES ('{$_POST['firstname']}', '{$_POST['lastname']}', '{$_POST['email']}', '{$_POST['contactnumber']}', '{$h}', 'USER')";

		if (mysqli_query($conn,$sql)) {
			echo "<script>window.alert('Registration Successful')</script>";
			echo "<script>window.open('login.php','_self')</script>";
		}
		else {

			echo "<script>window.alert('Registration Unsuccessful')</script>";
			echo "<script>window.open('registerUser.php','_self')</script>";

		}
	}


}
?>    

<script src="jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!--<script src="bootstrap.min.js"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<!-- <script src="jquery.dataTables.js"></script>-->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js "></script> 

<script src="script.js"></script> 


</div>

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

</body>
</html>
