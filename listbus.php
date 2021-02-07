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
        <br><br>
<br>
        <?php 
            if (isset($_POST['submit'])) {
               
               $sql = "INSERT INTO `bus` (`aminities`, `board_point`, `board_time`, `bus_name`, `bus_reg_no`, `bus_type`, `drop_point`, `drop_time`, `max_seats`, `price`, `seats_available`, `active`, `date`, `user_id`) VALUES ('{$_POST['aminities']}', '{$_POST['boardPoint']}', '{$_POST['boardTime']}', '{$_POST['busName']}', '{$_POST['busRegNo']}', '{$_POST['busType']}', '{$_POST['dropPoint']}', '{$_POST['dropTime']}', '{$_POST['maxSeats']}', '{$_POST['price']}', '{$_POST['seatsAvailable']}', '{$_POST['active']}', '{$_POST['date']}', '2')";
               if (mysqli_query($conn,$sql)) {
                echo "Data Inserted";
            }
            else {

                echo "Cannot insert data";
            }

        }
        ?>
        <div class="container">
            
            <script type="text/javascript">
                
                $(document).ready(function(){
                    
                    $('#adminbus').DataTable();

                });
            </script>
            <div class='col-xs-10'>
              
                <?php 

                if (isset($_GET['act']) AND isset($_GET['id'])) {
                   if ($_GET['act']==true) {
                       $query="UPDATE bus SET active=0 WHERE id={$_GET['id']}";
                       if (mysqli_query($conn,$query)) {
echo "<script>window.alert('Bus Deactivated')</script>";
}
else {

    echo "<script>window.alert('Deactivation Unsuccessful')</script>";
}

                   }

                }




                                if (isset($_GET['dact']) AND isset($_GET['id'])) {
                   if ($_GET['dact']==true) {
                       $query="UPDATE bus SET active=1 WHERE id={$_GET['id']}";
                       if (mysqli_query($conn,$query)) {
echo "<script>window.alert('Bus Activated')</script>";
}
else {

    echo "<script>window.alert('Activation Unsuccessful')</script>";
}

                   }

                }



                if (isset($_GET['del']) AND isset($_GET['id'])) {
                   if ($_GET['del']==true) {
                       $query="DELETE FROM bus WHERE id={$_GET['id']}";
                       if (mysqli_query($conn,$query)) {
echo "<script>window.alert('Bus Deleted')</script>Bus Deleted";
}
else {

    echo "<script>window.alert('Delete Unsuccessful')</script>Delete Unsuccessful";
}

                   }

                }
                 ?>
                <?php

                $sel="SELECT * FROM `bus` where user_id= 2" ;
                $str= mysqli_query($conn,$sel) or die(mysqli_error($conn));
                $rows= mysqli_num_rows($str) ;
                if($rows==0)
                {

                    echo '<h3 style= "text-align:center;"> <font color="red">No available Buses </font></h3>';
                    echo "<br>";
                }
                else
                {

                    echo '<h3>All Buses</h3>';
                    echo '<table id="adminbus" class="table table-striped table-borderd display">
                    <thead>         
                    <tr>          
                    <th>BusName</th>
                    <th>BusType</th>
                    <th>Aminities</th>
                    <th>BusRegNo</th>
                    <th>BoardPoint</th>
                    <th>BoardTime</th>
                    <th>DropPoint</th>
                    <th>DropTime</th>
                    <th>SeatsAvailable</th>
                    <th>Fare</th>
                    <th>Activate/Deactivate</th>
                    <th></th>
                    </tr>         
                    </thead>
                    <tbody>
                    ';
                    while($row=mysqli_fetch_array($str))
                    {                            
                        echo "<tr>";
                        echo "<td>".$row['bus_name']."</td>";
                        echo "<td>".$row['bus_type']."</td>";
                        echo "<td>".$row['aminities']."</td>";
                        echo "<td>".$row['bus_reg_no']."</td>";
                        echo "<td>".$row['board_point']."</td>";
                        echo "<td>".$row['board_time']."</td>";
                        echo "<td>".$row['drop_point']."</td>";
                        echo "<td>".$row['drop_time']."</td>";
                        echo "<td>".$row['seats_available']."</td>";
                        echo "<td>".$row['price']."</td>";
                        $busid=$row["id"];
                        if($row['active']=='1')
                        {
                          echo "<td><a class='btn btn-primary' href='listbus.php?act=true & id=$busid'>Deactivate</a></td>";  
                      }
                      else{
                        echo "<td><a class='btn btn-primary' href='listbus.php?dact=true & id=$busid'>&nbsp;&nbsp;Activate&nbsp;&nbsp;</a></td>";
                    }
                    
                    echo "<td><a class='btn btn-primary' href='listbus.php?del=true & id=$busid'>DELETE</a></td>";
    /*echo
    '<td>  <form action="payment.php" method="POST" >
    <input name="Bus_id" type="hidden" value= "<?php echo $Bus_id; ?>" >
    <input name="Seats_no" type="hidden" value="<?php echo $Req; ?>" >
    <input class="btn btn-primary" type="submit" value="Book"  />
    </td>';*/
    echo "</tr>";
}
echo "</tbody>
<tfoot>
<tr>          
<th>BusName</th>
<th>BusType</th>
<th>Aminities</th>
<th>BusRegNo</th>
<th>BoardPoint</th>
<th>BoardTime</th>
<th>DropPoint</th>
<th>DropTime</th>
<th>SeatsAvailable</th>
<th>Fare</th>
<th>Activate/Deactivate</th>
<th></th>
</tr>                 
</tfoot>            
</table>";
}
?>

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js "></script> 

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script src="script.js"></script> 
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
