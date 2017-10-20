<?php
/*
@package : Login PHP dan Mysqli
@author  : Fika Ridaul Maulayya
@since   : 2016
@license : https://www.rubypedia.com
*/

//membuat deklarasi variable
$hostname = "localhost";
$username = "root";
$password = "maulayyacyber17";
$database = "belajar-php-mysql";
//create variable connectin
$connection = mysqli_connect($hostname, $username, $password, $database);
//checking connection
if(!$connection)
  {
    
    echo "Koneksi Gagal! : " . mysqli_connect_error();

  }else{

  	//echo "Koneksi Berhasil!";

  }

 ?>