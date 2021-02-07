<?php session_start();
include "dbconn.php";
if (isset($_SESSION['name']) AND $_SESSION['type']=="ADMIN")
{

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Xtreme Travles</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!--<link rel="stylesheet" href="bootstrap.css">
            <link rel="stylesheet" href="bootstrap-theme.css">-->
            <link rel="stylesheet" href="style.css">

            <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
   <style type="text/css">
    

 #wrapper {
    width: 100%;
    margin-top:50px;
}

#page-wrapper {
    padding: 15px 15px;
    min-height: 600px;
    background:#F3F3F3;
   
}
#page-inner {
    width:100%;
    margin:10px 20px 10px 0px;
    background-color:#fff!important;
    padding:10px;
    min-height:1200px;
}

.user-image-back {
    background-color:#8B7BFF;
}

.arrow {
    float: right;
}

.fa.arrow:before {
    content: "\f104";
}

.active > a > .fa.arrow:before {
    content: "\f107";
}


.nav-second-level li,
.nav-third-level li {
    border-bottom: none !important;
}

.nav-second-level li a {
    padding-left: 37px;
}

.nav-third-level li a {
    padding-left: 55px;
}
.sidebar-collapse , .sidebar-collapse .nav{
    background:none;
}
.sidebar-collapse .nav {
    padding:0;
}
.sidebar-collapse .nav > li > a {
background: #FFFFFF;
text-shadow: none;
color:#0000FF;
}
.sidebar-collapse > .nav > li > a {
    padding:15px 10px;
}
.sidebar-collapse > .nav > li {
    border-bottom: 1px solid rgba(240, 240, 240, 1) !important;
}
.sidebar-collapse .nav > li > a:hover,
.sidebar-collapse .nav > li > a:focus {
    
    background:#F3F3F3;
    outline:0;
}
.nav-second-level  > li:last-child > a:after,
.nav-third-level  > li:last-child > a:after {
    height:50%;
}
.nav-third-level > li > a:after,
.nav-third-level > li > a:before  {
    left:40px;
}
.navbar-side {
    border:none;
    background-color: #202020;
    
}
.navbar-default {
border:0px solid #DDDDDD;
     
}
.navbar-default .navbar-toggle:hover, .navbar-default .navbar-toggle:focus {
background-color: #B40101;
}
.navbar-default .navbar-toggle {
border-color: #fff;
}

.navbar-default .navbar-toggle .icon-bar {
background-color: #FFF;
}
.nav > li > a > i {
    margin-right:10px;
}
.adjust-nav {
    padding-left:20px;padding-right:20px;
}
.bg-color-blue {
background-color: #9A86EB;
color: #fff;
}

.no-boder {
border: 1px solid #f3f3f3;
}
.back-footer-blue {
background-color: #7479E6;
border-top: 0px solid #fff;
}

.nav-tabs > li > a {
     -webkit-border-radius: 0px 0px 0px 0px;
-moz-border-radius: 0px 0px 0px 0px;
border-radius: 0px 0px 0px 0px;
}
 @media(min-width:768px) {
     #page-wrapper{
               margin: 0 0 0 260px;
        padding: 15px 30px;
        min-height: 1200px;
        
    }
    
    
    .navbar-side {
        z-index: 1;
        position: absolute;
        width: 260px;
    }

   .navbar {
 border-radius: 0px; 
}
   
}
   </style>
</head>
<body>
     
           
          
    <div id="wrapper">
         <div class="navbar navbar-default navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">Xtreme Travels</a>
                </div>
                           </div>
        </div>
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center user-image-back">
                        <img src="admin.png" style="padding:40px;border-radius: 50px 20px;" class="img-responsive" />
                     
                    </li>


                    <li>
                        <a href="adminprofile.php"><i class="fa fa-desktop "></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="addbus.php"><i class="fa fa-edit "></i>Add Bus</a>
                    </li>
                    <li>
                        <a href="listbus.php"><i class="fa fa-edit "></i>All Buses</a>
                    </li>
<li>
                        <a href="addcab.php"><i class="fa fa-edit "></i>Add Cab</a>
                    </li>
                    <li>
                        <a href="listcab.php"><i class="fa fa-edit "></i>All Cabs</a>
                    </li>

                    <li>
                        <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;&nbsp;Logout</a>
                    </li>
                </ul>

            </div>

        </nav>
        <div id="page-wrapper" >
            <div id="page-inner">
                            <div class="row">
                    <div class="col-md-12">
                    
                                      <h2>Welcome to Admin Panel</h2>   
                    
                     <h2>Admin Dashboard</h2>   
                     
                     <h4>Graphical View of most used routes Booked 
                     It Will help to analyze which servie is used most
                     </h4>
                     
                    </div>
                </div>  
                            
                  <hr />
                  
                   <table>
                        <tr>
                        <td><div id="piechart"></div></td>
                        <td><div id="barchart"></div></td>
                        
                        </tr>
                        
                     </table>         
              
    </div>
            </div>
        </div>
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!--<script src="bootstrap.min.js"></script>-->
<!-- <script src="jquery.dataTables.js"></script>-->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js "></script> 

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script src="script.js"></script> 
      
 <script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Name', 'Quantity'],
  ['Mumbai to Nagpur', 48],
  ['Mumbai to Banglore', 10],
  ['Banglore to Hydrabad', 3]
  ]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Which Service is used Most(PieChart View)', 'width':550, 'height':400};

  var options1 = {'title':'Which Service is used Most(BarChart View)', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
  
  var barchart = new google.visualization.BarChart(document.getElementById('barchart'));
  barchart.draw(data, options1);  
  
}
</script>
</body>
</html>
<?php
}
else{

  echo "<script>window.alert('You Are not authorised to access this page')</script>";
  echo "<script>window.open('login.php','_self')</script>";
}

 ?>
