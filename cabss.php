<?php session_start();
include "dbconn.php";
?>
      <?php 
            include "header.php";
      include "nav.php"; 
      ?>
<script type="text/javascript">

var gAutoPrint = true;

function processPrint(){

if (document.getElementById != null){

var html = '<html>\n<head>\n';

if (document.getElementsByTagName != null){

var headTags = document.getElementsByTagName("head");

if (headTags.length > 0) html += headTags[0].innerHTML;

}

html += '\n</head>\n<body>\n';

var printReadyElem = document.getElementById("printarea");

if (printReadyElem != null) html += printReadyElem.innerHTML;

else{

alert("Error, no contents.");

return;

}

html += '\n</body>\n</html>';

var printWin = window.open("","processPrint");

printWin.document.open();

printWin.document.write(html);

printWin.document.close();

if (gAutoPrint) printWin.print();

} else alert("Browser not supported.");

}


</script> 
<style type="text/css" media="print" >
body
{
font-size:12px;
}
#btnPrint
{
	display:none;
	}
</style> 

<style>
table, th, td {
    border: 1px solid black;
}

th, td {
    padding: 5px;
    text-align: left;
}

</style>


<br><br><br><br><br>
<div class="container">
<div id="row"> 
<div id="col-sm-7"> 
<div id="printarea">
<?php
          $sel="SELECT * FROM `cab` where id={$_POST["bid"]}";
          $cid;$brdpnt;$drppnt;$bnam;$btyp;$price;
          $str= mysqli_query($conn,$sel) or die(mysqli_error($conn));
          $rows= mysqli_num_rows($str) ;
          if($rows==0)
          {

            echo '<h3 style= "text-align:center;"> <font color="red">Something went wrong Cab Not Available</font></h3>';
            echo "<br>";
          }
          else
          {

            while($row=mysqli_fetch_array($str))
            {
              $cid=$row['id'];
              $brdpnt=$row['board_point'];
              $drppnt=$row['drop_point'];
              $breg=$row['cab_no'];
              $jdate=$row['date'];
              
}
}


$dt=date("Y-m-d");
$tf=$_POST['totalfare'];
$nam=$_POST['name'];
$ph=$_POST['phone'];
$pnr=$_POST['pnr'];
$tran=$_POST['tran'];
$i=$_SESSION['id'];


$insert="INSERT INTO booking_details (journey_date, fare, no_of_passenger,passenger_name, passenger_phone, payment_status, pnr, seat_no, status, transaction_id, bus_id, user_id ,pick_up, board_point, drop_point, bus_no, booking_date) VALUES ('{$jdate}', '{$tf}', '{$nos}', '{$nam}', '{$ph}','TRUE', '{$pnr}', '{$st}', 'TRUE', '{$tran}', '{$bid}', '{$i}', '{$brdtm}', '{$brdpnt}', '{$drppnt}', '{$breg}','{$dt}');";

if (mysqli_query($conn,$insert)) {
//echo "Data Inserted";
}
else {

  echo "Cannot insert data";
}

?>

<table style="width:50%; border:2px solid gray; padding:5px;" border="0">
  <tr>
    <th colspan="2" align="Center" style="border-bottom: 2px solid gray; padding-bottom:5px"><img id="img1" alt="ticlogo.jpg" src="images/aaaaaa.JPG" height="58px" width="180px"></th>
    
    <td align="left" colspan="2" style="color: Blue;border-bottom: 2px solid gray; padding-bottom: 5px">
                                    H.O :- Xtreme Travels,Chembur,Mumbai ||
                                    Ph  :- 9773565937
                                    <br />
                                    B.O :- Xtreme Travels,Santacurz,Mumbai ||
                                    Ph  :- 9773565937
                                </td>
  </tr>
  <tr>
    <td style="padding: 5px; text-align: left; border: 1px solid black;">Ticket Number:</td>
     
    <td style="padding: 5px; text-align: left; border: 1px solid black;"> <?php echo $_POST['pnr'] ?> </td>
    

    <td style="padding: 5px; text-align: left; border: 1px solid black;">Transaction Id:</td>
    <td style="padding: 5px; text-align: left; border: 1px solid black;"><?php echo $_POST['tran'] ?></td>

  </tr>
  <tr>
    <td style="padding: 5px; text-align: left; border: 1px solid black;">Name:</td>
    <td style="padding: 5px; text-align: left; border: 1px solid black;"><p><?php echo $_POST['name'] ?></p></td>
    
    <td style="padding: 5px; text-align: left; border: 1px solid black;">Phone:</td>
    <td style="padding: 5px; text-align: left; border: 1px solid black;"><p><?php echo $_POST['phone'] ?></p></td>
    
  </tr>
  
   <tr>
    <td style="padding: 5px; text-align: left; border: 1px solid black;">Source:</td>
						<td style="padding: 5px; text-align: left; border: 1px solid black;"><p>
								<?php echo $brdpnt; ?>
							</p></td>

						<td style="padding: 5px; text-align: left; border: 1px solid black;">Destination:</td>
						<td style="padding: 5px; text-align: left; border: 1px solid black;"><p>

								<?php echo $drppnt; ?>
							</p></td>

					</tr>
					
					<tr>
    <td style="padding: 5px; text-align: left; border: 1px solid black;">Journey Date:</td>
    <td style="padding: 5px; text-align: left; border: 1px solid black;"><p>
    <?php echo $jdate; ?>
    </p></td>
    
    <td style="padding: 5px; text-align: left; border: 1px solid black;">Journey Time:</td>
    <td style="padding: 5px; text-align: left; border: 1px solid black;"><p>
<?php echo $brdtm ?></p></td>
    
  </tr>
 
 <tr>
 <td style="padding: 5px; text-align: left; border: 1px solid black;">
 
    
    Seat Nos:
 </td>
 
    <td style="padding: 5px; text-align: left; border: 1px solid black;"><p>
<?php 
                                                foreach($booked_seats as $seat) {
                                                echo "{$seat} ";
}
                                              ?>
    
</p></td>
						<td style="padding: 5px; text-align: left; border: 1px solid black;">
    No of Passengers:
						</td>
						
						
						
		<td style="padding: 5px; text-align: left; border: 1px solid black;">		
    <?php echo $_POST['noofseat'] ?></p></td>
		
						</td>
    
  </tr>
  
  
  <tr>
    <td style="padding: 5px; text-align: left; border: 1px solid black;">Boarding Point:</td>
    <td style="padding: 5px; text-align: left; border: 1px solid black;"><p>
<?php echo $brdpnt; ?></p></td>
    
    <td style="padding: 5px; text-align: left; border: 1px solid black;">Bus Number:</td>
    
    <td style="padding: 5px; text-align: left; border: 1px solid black;"><p><?php echo $breg; ?>
</p></td>
    
  </tr>
               
               
                 <tr>
    <td style="padding: 5px; text-align: left; border: 1px solid black;">Booking Date:</td>
    <td style="padding: 5px; text-align: left; border: 1px solid black;"><p>
                                                    <?php echo date("Y-m-d"); ?>

</p></td>
    
    <td style="padding: 5px; text-align: left; border: 1px solid black;">Ticket Fare:</td>
    <td style="padding: 5px; text-align: left; border: 1px solid black;"><p>

                                              <?php echo $_POST['totalfare']; ?>
</p></td>
    
   </tr>
   
   <tr>
    <td style="padding: 5px; text-align: left; border: 1px solid black;">Payment Status:</td>
    <td style="padding: 5px; text-align: left; border: 1px solid black;"><p>
    Payment Successful
    </p></td>
    
    <td style="padding: 5px; text-align: left; border: 1px solid black;">Ticket Status:</td>
    <td style="padding: 5px; text-align: left; border: 1px solid black;"><p>
   Booked 
</p></td>
    
  </tr>
  
</table>

</div>
</div>
<div class="col-sm-4">
<br><br><br>
<button type="button" class="btn btn-info btn-lg" onclick="javascript:void(processPrint());" id="btnPrint">
          <span class="glyphicon glyphicon-print"></span> Print
        </button>


</div>

</div>

      </div>
              
      