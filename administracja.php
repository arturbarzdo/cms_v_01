<?php 
session_start();

if(isset($_SESSION['connect_to_servis']) && $_SESSION['connect_to_servis']==true){

}
else{
header('Location: admin.php');

}

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
    <div class="col-md-10 col-lg-10 col-xl-10">
			   
    
    </div>
       <div class="col-md-2 col-lg-2 col-xl-2">
            <form class="form-inline" role="form" action="wyloguj.php" method="POST">
            
                
                
                <div class="form-group">
                
                    <button type="submit" class="btn btn-default">Wyloguj się</button>
               
                </div>
                
                
            </form>
            
        </div>
    	</div>
    </div>
</div>

</body>

</html>