<?php session_start();
include "dbconn.php";
if (isset($_SESSION['name']) AND $_SESSION['type']=="ADMIN")
{

?>
<?php include "header.php"; ?>
            <div class="navbar navbar-default navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">Xtreme Travels</a>
                </div>
                <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" aria-expanded="false" style="height: 1px;">

                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>
                                Logout</a>
                            </li>
                                            
                        </ul>
                    </div>
                           </div>
        </div>
            <br>
            <br>

<br>
<br>
    <div class="container">

      <div class="row">

        <div class="col-md-offset-2 col-md-8">

          <div class="panel panel-primary">

            <div class="panel-heading">

              <h4>Bus Management</h4>

            </div>

            <div class="panel-body">
              <form class="form-horizontal" action="listbus.php" method="POST" >
                <div class="form-group">
                  <label class="control-label col-md-4">Bus Name</label>
                  <div class="col-md-8">
                    <input type="text" name="busName" class="form-control"
                    placeholder="Bus Name" />
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="control-label col-md-4">Aminities</label>
                  <div class="col-md-8">
                    <input type="text" name="aminities" class="form-control"
                    placeholder="Bus Reg No" /> 
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="control-label col-md-4">Bus Type</label>
                  <div class="col-md-8">
                    <select name="busType" class="form-control">
                      <option value="Sleeper">Sleeper</option>
                      <option value="Seater">Seater</option>
                      <option value="SleeperAc">SleeperAc</option>
                      
                    </select>
                    <div class="text-right">
                      <br/>     
                      <input type="hidden" name="active" value=1 />                            
                    </div>              
                  </div>
                  
                </div>
                
                <div class="form-group">
                  <label class="control-label col-md-4">Bus Reg No</label>
                  <div class="col-md-8">
                    <input type="text" name="busRegNo" class="form-control"
                    placeholder="Bus Reg No" /> 
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-4">Board Point</label>
                  <div class="col-md-8">
                    <input type="text" name="boardPoint" class="form-control"
                    placeholder="Board Point" /> 
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-4">Board Time</label>
                  <div class="col-md-8">
                    <input type="text" name="boardTime" class="form-control"
                    placeholder="Board Time" />
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-4">Drop Point</label>
                  <div class="col-md-8">
                    <input type="text" name="dropPoint" class="form-control"
                    placeholder="Drop Point" />
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-4">Drop Time</label>
                  <div class="col-md-8">
                    <input type="text" name="dropTime" class="form-control"
                    placeholder="Drop Time" />
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-4">Depature Date</label>
                  <div class="col-md-8">
                    <input type="date" id='datetimepicker1' name="date" class="form-control"
                    placeholder="Depature Date" />
                  </div>
                </div>
                <script type="text/javascript">
                  $('#datetimepicker').data("DateTimePicker").(function () {
                    $('#datetimepicker1').datetimepicker();
                  });
                  
                </script>
                
                <div class="form-group">
                  <label class="control-label col-md-4">Maximum Seats</label>
                  <div class="col-md-8">
                    <input type="number" name="maxSeats" class="form-control"
                    placeholder="Maximum Seats" />
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="control-label col-md-4">Seats Available</label>
                  <div class="col-md-8">
                    <input type="number" name="seatsAvailable" class="form-control"
                    placeholder="Maximum Seats" />
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="control-label col-md-4">Fare</label>
                  <div class="col-md-8">
                    <input type="number" name="price" class="form-control"
                    placeholder="Fare" />
                    <div class="text-right">
                      <br/>     
                      
                    </div>
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
<!-- Latest compiled and minified JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!--<script src="bootstrap.min.js"></script>-->
<!-- <script src="jquery.dataTables.js"></script>-->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js "></script> 

<script src="script.js"></script> 


</div>

</div>
</body>
</html>
<?php
}
else{

  echo "<script>window.alert('You Are not authorised to access this page')</script>";
  echo "<script>window.open('login.php','_self')</script>";
}

 ?>
