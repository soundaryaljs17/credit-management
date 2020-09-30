<?php
	include("head.php");
	error_reporting(1);
	$cn=mysql_connect("localhost","root","" ) or die("Could not Connect My Sql");
	mysql_select_db("sparks",$cn)  or die("Could connect to Database");
?>
<html>
	<style>
		.art1 b
		{
			font-size:30px;
			color: black;
			margin-top:20px;
			font-family: "Times New Roman", Times, serif;
		}
	</style>
<body style="background-color:#e6ecff;">
<center>
<body>
<div class="container">
	 <div style=" position:absolute;">
					<div class="art1">
							<center><b>List of Users</b></center>							
						</div>
							</div>
				</div>
	<br><br>
		<table border = 4>
			<th width=100 height=40>&#160;&#160;&#160;&#160;&#160;&#160;<b style="color:#1a1aff; font-size:15px;">Name</b></th>
			<th width=400 height=40>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;<b style="color:#1a1aff; font-size:15px;">Email</th>
			<th width=150 height=40>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;<b style="color:#1a1aff; font-size:15px;"><b>SELECT</b></th>
<?php
	$sql = "SELECT * from user";
	$qu =  mysql_query($sql) or die("Could not Connect user");
	while($row = mysql_fetch_array($qu)){
	// while($row = mysql_fetch_array($rs))
?>	
	<tr>
		<td>&#160;&#160;&#160;&#160;&#160;&#160;<b><?php echo $row[1];?></b></td>		
		<td>&#160;&#160;&#160;&#160;&#160;&#160;<b><?php echo $row[2];?></b></td>
		<td> &#160;&#160;&#160;&#160;&#160;&#160; <a href="amount.php?userid=<?php echo $row[0];?>"><button class="btn btn-primary" style="width:100px; height:30px; margin-top:2px; margin-bottom:2px; margin-left:-5px;">SELECT</button></td>

	</tr>
	</center>
</body>
	
<?php
	}
?>
		</table>
<?php
	include("foot.php");
?>
