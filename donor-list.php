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
		<h1>Donor List</h1><br><br>
		<center><div id ="form">
		<form action="" method="post">
		<table>
		<tr>
			<td><center><b><font color="blue">Name</font></b></center></td>
			<td><center><b><font color="blue">Father's Name</font></b></center></td>
			<td><center><b><font color="blue">Address</font></b></center></td>
			<td><center><b><font color="blue">City</font></b></center></td>
			<td><center><b><font color="blue">Age</font></b></center></td>
			<td><center><b><font color="blue">Bgroup</font></b></center></td>
			<td><center><b><font color="blue">Mno</font></b></center></td>
			<td><center><b><font color="blue">eMail</font></b></center></td>
		</tr>
		<?php
		$q=$db->query("SELECT * FROM donor_registration");
		while($row=$q->fetch(PDO::FETCH_OBJ))
		{
		?>
		<tr>
			<td><center><?= $row->name; ?></center></td>
			<td><center><?= $row->fname; ?></center></td>
			<td><center><?= $row->address; ?></center></td>
			<td><center><?= $row->city; ?></center></td>
			<td><center><?= $row->age; ?></center></td>
			<td><center><?= $row->bgroup; ?></center></td>
			<td><center><?= $row->mno; ?></center></td>
			<td><center><?= $row->email; ?></center></td>
		
		<?php
		}
		?>
		</table>
		</div></center>
		</div><br><br><br><br>
		<div id="footer"><h4 align="center"></h4>
		     <p align="center"><a href="logout.php"><font color="white">logout</font></a></p>
	        </div>
	</div>
	</body>
	</html>