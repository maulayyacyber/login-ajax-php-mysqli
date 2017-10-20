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
	<title>Login Ajax - PHP dan MySqli</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container" style="margin-top: 50px">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Sign in account</h1>
            <div class="account-wall">
                <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                    alt="">    
                <form class="form-signin" method="POST" id="login-form">
                <input type="text" class="form-control" name="user_email" placeholder="Email" autofocus>
                <input type="password" name="password" class="form-control" placeholder="Password">
                <button class="btn btn-lg btn-primary btn-block" name="btn-login" id="btn-login" type="submit">
                    Sign in</button>
                <label class="checkbox pull-left">
                    <input type="checkbox" value="remember-me">
                    Remember me
                </label>
                <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
                </form>
            </div>
            <a href="#" class="text-center new-account">Create an account </a>
            <div id="error" style="margin-top: 10px"></div>
        </div>
    </div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
<script>
    $('document').ready(function()
    { 
         /* validation */
      $("#login-form").validate({
          rules:
       {
       password: {
       required: true,
       },
       user_email: {
                required: true,
                email: true
                },
        },
           messages:
        {
                password:{
                          required: "please enter your password"
                         },
                user_email: "please enter your email address",
           },
        submitHandler: submitForm 
           });  

       function submitForm()
       {  
       var data = $("#login-form").serialize();
        
       $.ajax({
        
       type : 'POST',
       url  : 'login_proses.php',
       data : data,
       beforeSend: function()
       { 
        $("#error").fadeOut();
        $("#btn-login").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
       },
       success :  function(response)
          {      
         if(response == "ok"){
             
          $("#btn-login").html('<img src="https://github.com/maulayyacyber/phantom0308/raw/master/btn-ajax-loader.gif" /> &nbsp; Signing In ...');
          setTimeout(' window.location.href = "dashboard.php"; ',4000);
         }
         else{
             
          $("#error").fadeIn(1000, function(){   

          $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; alamat email atau password salah!.</div>');
               $("#btn-login").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In');

           });
          }
         }
       });
        return false;
      }
    });
</script>
</body>
</html>