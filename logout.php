<?php
/*
@package : Login PHP dan Mysqli
@author  : Fika Ridaul Maulayya
@since   : 2016
@license : https://www.rubypedia.com
*/
session_start();
unset($_SESSION['logged_in']);
 
if(session_destroy())
{
  header("Location: index.php");
}

?>