<?php
require "classLogin/classAbstractSetLog.php";

class Login extends LogAndPas{
	private $login;
	private $pass;
	public $flaglog;
	public $flagpass;
	
		function __construct($log,$pas){
			
			$this->login = $log;
			$this->pass = $pas;
	
		}
		
		public function setFlagLogin(){
			if(empty($this->login))		$this->flaglog = false;
											
											
			else if(!ctype_alnum($this->login))		$this->flaglog = false;
											
																			
				else $this->flaglog = true;
		
		}
		
			function setFlagPass(){
				if(empty($this->pass))		$this->flagpass = false;
												
			
			
			else if(!ctype_alnum($this->pass))		$this->flagpass = false;
															
																									
				else $this->flagpass = true;
		
			}
		
		function getLogin(){
			return "{$this -> login}";
				
		}
		
		function getPass(){
			return "{$this -> pass}";
				
		}		
		
		
		function getFlaglog(){
			return "{$this -> flaglog}";		
		}
		
		function getFlagpass(){
			return "{$this -> flagpass}";		
		}
}

?>