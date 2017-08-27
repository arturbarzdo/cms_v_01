<?php
session_start();
if(isset($_SESSION['login_error'])) {
	$valid = '<div class="alert alert-danger" role="alert">'.$_SESSION["login_error"].' 
			</div> ';
}else $valid = "";

unset($_SESSION['login_error']);
unset($_SESSION['connect_to_servis']);

?>
<!DOCTYPE html>
<html> 
    <head>
        <meta charset="utf8">
        <title>
            admin - cms
        </title>
        <link rel="stylesheet" href="boot/css/bootstrap.css" crossorigin="anonymous">
         <link rel="stylesheet" href="css/style.css">
   </head>
   
<body>
<div id="naglowek">
    <div class="container-fluid">
    <div class="row log col-md-12 col-lg-12 col-xl-12">
    <div class="col-md-6 col-lg-6 col-xl-6">
			   
    <?php echo $valid; ?>
    </div>
       <div class="col-md-6 col-lg-6 col-xl-6">
            <form class="form-inline" role="form" action="login.php" method="POST">
            
                <div class="form-group">
                <div class="padform">
                    <label class="sr-only" for="exampleInputEmail2">Login</label>
                    <input type="text" name="log" class="form-control" id="exampleInputEmail2" placeholder="Podaj login">
                </div>
                </div>
                
                <div class="form-group">
                <div class=" padform">
                    <label class="sr-only" for="exampleInputPassword2">Hasło</label>
                    <input type="password" name="pass" class="form-control" id="exampleInputPassword2" placeholder="Podaj hasło">
                </div>
                </div>
                
                <div class="form-group">
                <div class="padform">
                    <button type="submit" class="btn btn-default">Zaloguj się</button>
                </div>
                </div>
                
                
            </form>
            
        </div>
    	</div>
    </div>
</div>
            
        <script src="boot/js/bootstrap.js"></script>
</body>
        
</html>

