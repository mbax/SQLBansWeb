<?php
/*
 * Core Authentication File
 */
class auth {

	public function __construct($authType, $loginInfo){
	
		$this->a = $authType;
		$this->info = $loginInfo;
	
	}
	
	public function doLogin($user, $pass){
	
		if($this->a === true){
		
			/*
			 * Plaintext Password
			 */
			foreach($this->info as $this->u => $this->p){
			
				if($user == $this->u && $pass == $this->p){
				
					$this->s = true;
				
				}
			
			}
			
			if(!$this->s || $this->s === false){
			
				return false;
				
			}else{
			
				return true;
				
			}
		
		}else{
		
			/*
			 * MySQL Password
			 */
			 mysql_query("SELECT * FROM ".$config['SQLUserDB']['table']) or die(mysql_error());
		
		}
		
	}
	
	public function setSession(){
	
		$_SESSION['sqlbans_auth'] = true;
		$_SESSION['sqlbans_authtime'] = time();
	
	}
	

}
 
?>