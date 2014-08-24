<?php

class clspUserType
 {
	public $idUserType;
	public $userType;
		 
	public function __construct()
	 {
		$this->idUserType=0;
	 }
	
	public function __get($vproperty)
	 { 
		if( isset($vproperty) )
		 {	throw new Exception("Property doesn't exist: $vproperty");	}
		else
		 {	return $this->vproperty;	}
	 }
	public function __set($vproperty, $vvalue)
	 {
		if( isset($vproperty) )
		 {	throw new Exception("Property doesn't exist: $vproperty");	}
		else
		 {	$this->vproperty=$vvalue;	}
	 }
	
	public function __destruct()
	 {
		unset($this->idUserType, $this->userType);
	 }
 }

?>