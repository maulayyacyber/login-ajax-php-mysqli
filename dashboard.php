<?php
session_start();

if(!isset($_SESSION['logged_in']))
{
 header("Location: index.php");
}

require_once ('koneksi.php');

$session = $_SESSION['logged_in'];

$query  = "SELECT * FROM tbl_users WHERE id_user = '$session'";
$result = mysqli_query($connection,$query)or die(mysqli_error());
$row     = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<!--
/*
@package : Login PHP dan Mysqli
@author  : Fika Ridaul Maulayya
@since   : 2016
@license : https://www.rubypedia.com
*/
-->
<html>
<head>
	<title> Dashboard - Login Ajax PHP dan MySqli</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Login Ajax - PHP dan MySQLi</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        	<div class="navbar-form navbar-right">
				<a href="logout.php" type="submit" class="btn btn-success"><i class="fa fa-sign-out"></i> Logout</a>
        	</div>
      </div>
    </nav>
<div class="container" style="margin-top: 80px">
	<div class="row">
		<div class="col-md-3">
			<div class="list-group">
			  <a href="#" class="list-group-item active" style="text-align: center;background-color: black;border-color: black">
			    ADMINISTRATOR
			  </a>
			  <a href="dashboard.php" class="list-group-item"><i class="fa fa-dashboard"></i> Dashboard</a>
			  <a href="#" class="list-group-item"><i class="fa fa-book"></i> Blog</a>
			  <a href="#" class="list-group-item"><i class="fa fa-folder"></i> Kategori</a>
			  <a href="#" class="list-group-item"><i class="fa fa-comments-o"></i> Komentar</a>
			  <a href="logout.php" class="list-group-item"><i class="fa fa-sign-out"></i> Logout</a>
			</div>
		</div>
		<div class="col-md-9">
			<div class="panel panel-default">
			  <div class="panel-heading">
			    <h3 class="panel-title"><i class="fa fa-dashboard"></i> Dashboard</h3>
			  </div>
			  <div class="panel-body">
			    Selamat Datang <b><?php echo $row['nama'] ?></b> di halaman Administrator System
			  </div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>