<?php
session_start();


include_once "root/root.php";
include("classLogin/classLogin.php");
include("classLogin/classValidUser.php");


	       	 $login =$_REQUEST['log'];
       		 $password =$_REQUEST['pass'];
       		 
       		 
     $logIn = new Login($login,$password);
     $logIn -> setFlagLogin();
     $logIn -> setFlagPass();
     
   
    if((!$logIn -> getFlaglog()) || (!$logIn -> getFlagpass())){
    	$_SESSION['login_error']="hasło lub login zawiera niedozwolone znaki";
     	header('Location: admin.php');
     	exit();
     }
     
     $pdo = new PDO('mysql:host='.$host.';dbname='.$dbname.';',$user,$pass);
			$pdo->query ('SET NAMES utf8');
				$pdo->query ('SET CHARACTER_SET utf8_unicode_ci');
					$pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
					
					$obj = new ValidUser($logIn->getLogin() , $logIn->getPass());
					if($obj -> UserExist($pdo)){
					$_SESSION['connect_to_servis'] = true;
					header('Location: administracja.php');
					}else{
					$_SESSION['login_error']="błędny login lub hasło";
					header('Location: admin.php');
					}

?>
