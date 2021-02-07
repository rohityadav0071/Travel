<?php session_start();
include "dbconn.php";
if (isset($_SESSION['name']))
{

    ?>

    <?php 

    include "header.php";
    include "nav.php"; ?>
    <br>
    <br>
    <br>
    <br>    

    <div class="container bootstrap snippet">
        <div class="row">
            <div class="col-sm-10">
                <h1>My Account</h1>
                <h4>Welcome to User Profile</h4>
            </div>
            <div class="col-sm-2">
                <a href="/users" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="https://bootdey.com/img/Content/avatar/avatar1.png"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <!--left col-->

                <ul class="list-group">
                    <li class="list-group-item text-muted">Profile</li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Email:</strong></span><?php echo  $_SESSION["email"] ?></li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Phone:</strong></span><?php echo $_SESSION["contact"] ?> </li>
                    <li class="list-group-item text-right"><span class="pull-left"><strong>Name:</strong></span><?php  echo $_SESSION["name"] ?></li>

                </ul>
            </div>
            <!--/col-3-->
            <div class="col-sm-9">

                <ul class="nav nav-tabs" id="myTab">
                    <li class="active"><a href="#home" data-toggle="tab">Your Bookings</a></li>
                    <!--<li><a href="#actions" data-toggle="tab">Feedbacks</a></li>-->
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="home">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                    <th>Id</th>
                                    <th>Pnr</th>
                                    <th>Booking Date</th>
                                    <th>Passenger Name</th>
                                    <th>Passenger Phone</th>
                                    <th>TransactionId </th>
                                    <th>Fare </th>
                                    </tr>
                                </thead>
                                <tbody id="items">

                                    <?php
                                    $i=$_SESSION['id'];
$sel="SELECT * FROM `booking_details` WHERE user_id ={$i}";
$str= mysqli_query($conn,$sel) or die(mysqli_error($conn));
                    $rows= mysqli_num_rows($str) ;
                    while($row=mysqli_fetch_array($str))
                        {                                 
                       echo "<tr>";
                       echo "<td>{$row['id']}</td>";
                       echo "<td>{$row['pnr']}</td>";
                       echo "<td>{$row['booking_date']}</td>";
                       echo "<td>{$row['passenger_name']}</td>";
                       echo "<td>{$row['passenger_phone']}</td>";
                       echo "<td>{$row['transaction_id']}</td>";
                       echo "<td>{$row['fare']}</td>";
                       echo "</tr>";
                   }
?>
                                </tbody>
        
                            </table>
                            <hr>
                            <div class="row">
                                <div class="col-md-4 col-md-offset-4 text-center">
                                    <ul class="pagination" id="myPager"></ul>
                                </div>
                            </div>
                        </div>
                        <hr>

                    </div>     
                    
                    <div class="tab-pane" id="actions">
                        <br>
                        
                        

                    </div>
                    
                    
                </div>
                <!--/tab-pane-->
            </div>
            <!--/tab-content-->

        </div>
    </div>
    <!--/row-->
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

    header("Location: login.php");
}
?>