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

              <h4>Cab Management</h4>

            </div>

            <div class="panel-body">
              <form class="form-horizontal" action="listcab.php" method="POST" >
                <div class="form-group">
                  <label class="control-label col-md-4">Cab Name</label>
                  <div class="col-md-8">

                    <div class="col-md-8">
                    <select name="cabName" class="form-control">
                      <option value="Indica, Swift or similar">Indica, Swift or similar</option>
                        <option value="Dzire, Etios or similar">Dzire, Etios or similar</option>
                        <option value="Innova, Xylo or similar">Innova, Xylo or similar</option>
                    </select>
                    <div class="text-right">
                      <br/>     
                      <input type="hidden" name="active" value=1 />                            
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-group">
                  <label class="control-label col-md-4">Cab Type</label>
                  <div class="col-md-8">

                    <div class="col-md-8">
                    <select name="cabType" class="form-control">
                      <option value="HATCHBACK">HATCHBACK</option>
                        <option value="SEDAN">SEDAN</option>
                        <option value="SUV">SUV</option>
                    </select>
                  </div>
                </div>
              </div>
                
                <div class="form-group">
                  <label class="control-label col-md-4">Aminities</label>
                  <div class="col-md-8">
                    <input type="text" name="aminities" class="form-control"
                    placeholder="Aminities" /> 
                  </div>
                </div>
                
                
                <div class="form-group">
                  <label class="control-label col-md-4">Cab No</label>
                  <div class="col-md-8">
                    <input type="text" name="cabNo" class="form-control"
                    placeholder="Cab No" /> 
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
                  <label class="control-label col-md-4">Drop Point</label>
                  <div class="col-md-8">
                    <input type="text" name="dropPoint" class="form-control"
                    placeholder="Drop Point" />
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
                        <b><p>Copyrights © 2018 Xtreme Travels.</p></b>
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
