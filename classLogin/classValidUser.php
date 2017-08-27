<?php
class ValidUser{
		private $user;
		private $password;
		
		
		function __construct($user,$password){
			
					$this ->user= $user;
					$this ->password = $password;
			}
			
			
				public function UserExist(PDO $pdo){
				
			
					$stmt = $pdo->query("SELECT * FROM `logowanie` WHERE `login`='{$this->user}' AND `password`='{$this->password}'");
					
 					$row = $stmt -> fetch();
 					
 					if (empty($row['login'])){return false;}
					else return true;
		}
}

?>