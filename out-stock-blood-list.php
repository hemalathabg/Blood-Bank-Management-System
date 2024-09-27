<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Donors Registration</title>
	<link rel="stylesheet" type="text/css" href="css/s1.css">
	<style type="text/css">
	td{
		width:200px;
		height:40px;
	}
</style>
</head>
<body>
<div id="full">
<div id="inner_full">
	<div id="header"><h2><a href="admin-home.php" style="text-decoration: none;color : white;">Blood Bank Management System</a></h2></div>
	<div id="body">
		<br>
		<?php
		$un=$_SESSION['un'];
		if(!$un)
		{
			header("Location:index.php");
		}
		?>
		<h1>Out Stock Blood List</h1>
		<center><div id ="form">
		<form action="" method="post">
		<table>
		<tr>
			<td><center><b><font color="blue">Name</font></b></center></td>
			<td><center><b><font color="blue">Mobile No</font></b></center></td>
			<td><center><b><font color="blue">Blood Group</font></b></center></td>
		</tr>
		<?php
		$q=$db->query("SELECT * FROM donor_registration");
		while($row=$q->fetch(PDO::FETCH_OBJ))
		{
		?>
		<tr>
			<td><center><?= $row->name; ?></center></td>
			<td><center><?= $row->mno; ?></center></td>
			<td><center><?= $row->bgroup; ?></center></td>


		<?php
		}
		?>
		</table>
		</div></center>
		</div>
		<div id="footer"><h4 align="center"></h4>
		     <p align="center"><a href="logout.php"><font color="white">logout</font></a></p>
	        </div>
	</div>
	</body>
	</html>