<?php 
session_start();

if(isset($_SESSION['connect_to_servis']) && $_SESSION['connect_to_servis']==true){

echo "udało się zalogować do serwisu";


}
else{
header('Location: admin.php');

}


?>