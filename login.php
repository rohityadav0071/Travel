<?php session_start();
include "dbconn.php";
?>
<?php 
include "header.php";
include "nav.php"; ?>

<br><br><br><br>
<div class="container">

  <div class="col-md-offset-2 col-md-8">
    
   <div class="panel panel-primary">
    <div class="panel-heading"><h4>Login Form</h4></div>
    <div class="panel-body">
      <form class="form-horizontal" method="POST" action="login.php">
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Email:</label>
          <div class="col-sm-6">
            <input type="email" class="form-control" id="email" placeholder="Enter Username" name="email">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Password:</label>
          <div class="col-sm-6">          
            <input type="password" class="form-control" id="pwd" placeholder="Enter Password" name="password">
          </div>
        </div>
        <div class="form-group">        
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" name ="submit" class="btn btn-default">Login</button>
          </div>
        </div>
        <div class="checkbox">
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;
         
         
         <label>
          <h5><a href="/forgetpassword">Forget Password ?</a></h5>
        </label>
      </div>
    </form>
    <div style="float: right;"><h4><a href="registerUser.php">Need a Account?Register Here</a></h4></div>
  </div>
</div>
</div>

</div>  
<?php 
$_SESSION["isloggedin"];
if (isset($_POST['submit'])) {
 $email=$_POST['email'];
 $pass=$_POST['password'];
 $h=md5($_POST['password']);

 $sql="SELECT * FROM USERS WHERE email='{$email}' AND password='{$h}'";

 $str= mysqli_query($conn,$sql) or die(mysqli_error($conn));
 $rows= mysqli_num_rows($str);
 if($rows==0)
 {

  echo "<script>window.alert('Invalid Email or Password')</script>";
  echo "<script>window.open('login.php','_self')</script>";
}
else
{
  $row=mysqli_fetch_array($str);
  if ($row['role']=="USER") {

    $_SESSION["type"] = "USER";
    $_SESSION["id"] = $row['id'];
    $_SESSION["name"] = $row['first_name'].' '.$row['last_name'];
    $_SESSION["email"] = $row['email'];
    $_SESSION["contact"] = $row['contact'];
    $_SESSION["isloggedin"] ="yes";
    echo "<script>window.open('userprofile.php','_self')</script>";                
  }
  else if ($row['role']=="ADMIN") {
    $_SESSION["type"] = "ADMIN";
    $_SESSION["id"] = $row['id'];
    $_SESSION["name"] = $row['first_name'].' '.$row['last_name']; 
    $_SESSION["email"] = $row['email'];
    $_SESSION["contact"] = $row['contact'];
    $_SESSION["isloggedin"] ="yes";                
    echo "<script>window.open('adminprofile.php','_self')</script>";

  }
  
}
}
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!--<script src="bootstrap.min.js"></script>-->
<!-- <script src="jquery.dataTables.js"></script>-->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js "></script> 

<script src="script.js"></script> 

</div>
<br><br><br>
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
