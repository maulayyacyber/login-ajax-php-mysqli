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
$password = $_SERVER['PASSWORD'];
$database = "belajar-php-mysql";
//create variable connectin
$connection = mysqli_connect($hostname, $username, $password, $database);
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

/*The closing ?> tag MUST be omitted from files containing only PHP.
 Reff http://www.php-fig.org/psr/psr-2/#22-files
 ?>
 */
