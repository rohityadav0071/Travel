<nav class="navbar navbar-default navbar-fixed-top">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

						<a class="navbar-brand" href="index.php">Xtreme Travels</a>
					</div>
					<div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" aria-expanded="false" style="height: 1px;">
                     <?php error_reporting(E_ALL & ~E_NOTICE) ?>
						<ul class="nav navbar-nav navbar-right">
							<?php 
                            if (!isset($_SESSION["isloggedin"])) {
                            	
						    ?>
							<li><a href="registerUser.php"  style="width:auto;"><span class="glyphicon glyphicon-user"></span>
							  Sign Up</a>
						    </li>
							<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>
							    Login</a>
						    </li>
                            <?php  }?>

							<ul class="nav navbar-nav navbar-left">
                            <?php 
                            if (isset($_SESSION["isloggedin"])) {
                            if ($_SESSION["isloggedin"] =="yes" AND $_SESSION["type"] =="USER") {
							
							 ?>
								<li class="dropdown">
									<a class="dropdown-toggle" type="button" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><b>&nbsp;<?php echo $_SESSION['name']; ?> </b></a>
								
									<ul class="dropdown-menu">
										<br>
										<li><a href="userprofile.php"><span class="glyphicon glyphicon-user"></span>View Profile</li>
										<li role="separator" class="divider"></li>
										<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
									</ul>
							    </li>
							<?php } }?>
							</ul>					
						</ul>
					</div>
				</div>
			</nav><br><br><br><br>
