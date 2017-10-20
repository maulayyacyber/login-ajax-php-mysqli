<?php
/*
@package : Login PHP dan Mysqli
@author  : Fika Ridaul Maulayya
@since   : 2016
@license : https://www.rubypedia.com
*/
session_start();

require_once('koneksi.php');

 if(isset($_POST['btn-login']))
 {

  $email 	= $_POST['user_email'];
  $password = md5($_POST['password']);
  
  $query  = "SELECT * FROM tbl_users WHERE email='$email' AND password='$password'";
  $result = mysqli_query($connection,$query)or die(mysqli_error());
  $num_row = mysqli_num_rows($result);
  $row     = mysqli_fetch_array($result);

  if( $num_row >=1 ) {

    echo "ok"; // log in

    $_SESSION['logged_in'] = $row['id_user'];

  }else {

    echo "alamat email atau password salah!.";
  
  }
    
 }

?>
