<?php
	include("head.php");
	error_reporting(1);
	$cn=mysql_connect("localhost","root","" ) or die("Could not Connect My Sql");
	mysql_select_db("sparks",$cn)  or die("Could connect to Database");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/credit.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Information</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">
</head>
<center>
<body style="background-color:#e6ecff;">	
  <div class="container">
    <div class="row mt-4">
      <div class="col-10 mx-auto">
        <div class="card shadow text-center">
		
<?php
	$cn=mysql_connect("localhost","root","" ) or die("Could not Connect My Sql");
	mysql_select_db("sparks",$cn)  or die("Could connect to Database");
	$userid = $_GET['userid'];
	$rs=mysql_query("select * from user where userid='$userid'");
	while($row = mysql_fetch_array($rs)){
?>
</body>
        <div class="card-header">
		<h1><?= $row['name'] ?></h1>
        </div>
		<div class="card-body">
            <h4><b>Email :</b> <?= $row['email'] ?></h4>
            <h4><b>Current Credit :</b> <?= $row['total'] ?></h4>
			<td><a href="transfername.php"><button class="btn btn-primary" style="width:300px; height:35px; margin-top:2px; margin-bottom:2px; margin-left:-5px;">TAP TO CREDIT</button></td>			
		</div>
      </div>  
	</div>
</div>
<?php
	}
?>
<?php
	include("foot.php");
?>
</center>
</body>
</html>