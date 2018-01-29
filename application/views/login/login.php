<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Administrator Login Page</title>
    
    <meta name="description" content="Free Admin Template Based On Twitter Bootstrap 3.x">
    <meta name="author" content="">
    
    <meta name="msapplication-TileColor" content="#5bc0de" />
    <meta name="msapplication-TileImage" content="<?php base_url();?>assets/login/img/metis-tile.png" />
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php base_url();?>assets/login/lib/bootstrap/css/bootstrap.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php base_url();?>assets/login/lib/font-awesome/css/font-awesome.css">
    
    <!-- Metis core stylesheet -->
    <link rel="stylesheet" href="<?php base_url();?>assets/login/css/main.css">
    
    <!-- metisMenu stylesheet -->
    <link rel="stylesheet" href="<?php base_url();?>assets/login/lib/metismenu/metisMenu.css">
    
    <!-- onoffcanvas stylesheet -->
    <link rel="stylesheet" href="<?php base_url();?>assets/login/lib/onoffcanvas/onoffcanvas.css">
    
    <!-- animate.css stylesheet -->
    <link rel="stylesheet" href="<?php base_url();?>assets/login/lib/animate.css/animate.css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="login">

  <div class="form-signin">
    <div class="text-center">
        <img src="<?php base_url();?>assets/login/img/logo_121.png" alt="Metis Logo">
    </div>
    <hr>
    <div class="tab-content">
        <div id="login" class="tab-pane active">
            <form method="POST" action="<?php echo base_url(); ?>index.php/MainController/getLogin">
                <p class="text-muted text-center">
                    Enter your username and password
                </p>
                <input type="text" name="username" placeholder="Username" class="form-control top">
                <input type="password" name="password" placeholder="Password" class="form-control bottom" >
                <div class="checkbox">
		  <label>
		    <input type="checkbox"> Remember Me
		  </label>
		</div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            </form>
        </div>
    </div>
    <hr>
  </div>


    <!--jQuery -->
    <script src=<?php base_url();?>assets/login/lib/jquery/jquery.js"></script>

    <!--Bootstrap -->
    <script src="<?php base_url();?>assets/login/lib/bootstrap/js/bootstrap.js"></script>
</body>

</html>
