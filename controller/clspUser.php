<?php

require_once (dirname(dirname(__FILE__)) . "/controller/clspUserType.php");
require_once (dirname(dirname(__FILE__)) . "/controller/tools/MySql.php");

class clspUser
 {
	public $idUser;
	public $userType;
	public $firstName;
	public $lastName;
	public $name;
	private $password;
	public $active;
	
	public function __construct()
	 {
		$this->idUser="";
		$this->userType=new clspUserType();
		$this->password="123";
		$this->active=1;
	 }
	
	public function __get($vproperty) //Get value property
	 { 
		if( isset($vproperty) )
		 {	throw new Exception("Property doesn't exist: $vproperty");	}
		else
		 {	return $this->vproperty;	}
	 }
	public function __set($vproperty, $vvalue) //Set value property
	 {
		if( isset($vproperty) )
		 {	throw new Exception("Property doesn't exist: $vproperty");	}
		else
		 {	$this->vproperty=$vvalue;	}
	 }
	
	/*
	public function addToDataBase()
	 {
		try
	     {
			$vsql ="INSERT INTO c_user(id_user, id_userType, id_business, fldfirstName, fldlastName, fldname, fldpassword) ";
			$vsql.="VALUES('" . $this->idUser . "'";
			$vsql.=", " . $this->userType->idUserType;
			$vsql.=", " . $this->business->idBusiness;
			$vsql.=", '" . $this->firstName . "'";
			$vsql.=", '" . $this->lastName . "'";
			$vsql.=", '" . $this->name . "'";
			$vsql.=", '" . md5($this->password) . "')";
			
			$vmySql= new MySql();
			$vmySql->AbrirConexion(0);
			if ( $vmySql->EjecutarSql($vsql) )
			 {
				if ( $vmySql->ObtenerNumeroFilasAfectadas()!=1 )
				 {	throw new Exception ("Ocurrió un error al registrar los datos del usuario, intente de nuevo", 0);	}
		 	 }
			else
			 {	throw new Exception ("Ocurrió un error al registrar los datos del usuario", -1);	}
			$vmySql->CerrarConexion();
			
			unset($vsql, $vmySql);
			return 1;
		 }
		catch (Exception $vexcepcion)
		 {
			return $vexcepcion->getCode();
		 }
	 }
	
	public function updateInDataBase() //It updates a user in the database
	 {
		try
	     {
			$vsql ="UPDATE c_user ";
			$vsql.="SET id_business=" . $this->business->idBusiness;
			$vsql.=", fldfirstName='" . $this->firstName . "'";
			$vsql.=", fldlastName='" . $this->lastName . "'";
			$vsql.=", fldname='" . $this->name . "' ";
			$vsql.="WHERE id_user='" . $this->idUser . "'";
			
			$vmySql= new MySql();
			$vmySql->AbrirConexion(0);
			if ( $vmySql->EjecutarSql($vsql) )
			 {
				if ( $vmySql->ObtenerNumeroFilasAfectadas()==0 )
				 {	throw new Exception ("Ningún dato se ha modificado del usuario", 0);	}
				if ( $vmySql->ObtenerNumeroFilasAfectadas()!=1 )
				 {	throw new Exception ("Ocurrió un error al modificar los datos del usuario, intente de nuevo", -1);	}
			 }
			else
			 {	throw new Exception ("Ocurrió un error al modificar los datos del usuario", -2);	}
			$vmySql->CerrarConexion();
			
			unset($vsql, $vmySql);
			return 1;
		 }
		catch (Exception $vexcepcion)
	     {
			return $vexcepcion->getCode();
		 }
	 }
	 
	public function updatePasswordInDataBase($vpassword) 
	 {
		try
	     {
			$vsql ="UPDATE c_user ";
			$vsql.="SET fldpassword='" . md5($vpassword) . "' ";
			$vsql.="WHERE id_user='" . $this->idUser . "'";
			
			$vmySql= new MySql();
			$vmySql->AbrirConexion(0);
			if ( $vmySql->EjecutarSql($vsql) )
			 {
				if ( $vmySql->ObtenerNumeroFilasAfectadas()==0 )
				 {	throw new Exception ("No se modificó el password del usuario", 0);	}
				if ( $vmySql->ObtenerNumeroFilasAfectadas()!=1 )
				 {	throw new Exception ("Ocurrió un error al modificar el password del usuario, intente de nuevo", -1);	}
				 $this->password=$vpassword;
			 }
			else
			 {	throw new Exception ("Ocurrió un error al modificar el password del usuario", -2);	}
			$vmySql->CerrarConexion();
			
			unset($vsql, $vmySql);
			return 1;
		 }
		catch (Exception $vexcepcion)
	     {
			return $vexcepcion->getCode();
		 }
	 }
	*/
	public function queryToDataBase()
	 {
		try
		 {
			$vsql ="SELECT c_user.*, c_usertype.flduserType ";
			$vsql.="FROM c_user ";
			$vsql.="INNER JOIN c_usertype ON c_user.id_userType=c_usertype.id_userType ";
			$vsql.="WHERE c_user.id_user='" . $this->idUser. "'";
			
			$vmySql= new MySql();
			$vmySql->AbrirConexion(0);
			if ( $vmySql->EjecutarSql($vsql) )
			 {
				if ( $vmySql->ObtenerNumeroFilasConsultadas()==1 )
				 {
					$vrow=$vmySql->ObtenerArrayFilas();
					$this->userType->idUserType=(int)($vrow["id_userType"]);
					$this->userType->userType=trim($vrow["flduserType"]);
					$this->firstName=trim($vrow["fldfirstName"]);
					$this->lastName=trim($vrow["fldlastName"]);
					$this->name=trim($vrow["fldname"]);
					$this->password=trim($vrow["fldpassword"]);
					$this->active=(int)($vrow["fldactive"]);
					
					unset($vrow);
				 }
				else
				 {	throw new Exception ("No existen usuarios registrados con el identificador proporcionado", 0);	}
			 }
			else
			 {	throw new Exception ("Ocurrió un error al obtener los datos del usuario, intente de nuevo", -1);	} 
			$vmySql->LiberarMemoria();
			$vmySql->CerrarConexion();
			
			unset($vsql, $vmySql);
			return 1;
		 }
		catch (Exception $vexcepcion)
	     {
			return $vexcepcion->getCode();
		 }
	 }
	
	public function verifyPasswordToDataBase($vpassword)
	 {
		try
		 {
			$vsql ="SELECT fldactive ";
			$vsql.="FROM c_user ";
			$vsql.="WHERE id_user='" . $this->idUser . "' ";
			$vsql.="AND fldpassword=MD5('" . $vpassword . "')";
			
			$vmySql= new MySql();
			$vmySql->AbrirConexion(0);
			if ( $vmySql->EjecutarSql($vsql) )
			 {
				if ( $vmySql->ObtenerNumeroFilasConsultadas()!=1 )
				 {	throw new Exception ("No existen usuarios registrados con el nombre y/o contraseña proporcionado", 0);	}
				
				$vrow=$vmySql->ObtenerArrayFilas();
				if ( (int)(trim($vrow["fldactive"])) )
				 {	$vstatus=1;	}
				else
				 {	$vstatus=-1;	}
				
				unset($vrow);
			 }
			else
			 {	throw new Exception ("Ocurrió un error al tratar de logearse, intente de nuevo", -2);	}
			$vmySql->LiberarMemoria();
			$vmySql->CerrarConexion();
			
			unset($vsql, $vmySql);
			return $vstatus;
		 }
		catch (Exception $vexcepcion)
	     {
			return $vexcepcion->getCode();
		 }
	 }
	
	
	public function __destruct()
	 {
		unset($this->idUser, $this->userType, $this->firstName, $this->lastName, $this->name, $this->password, $this->active);
	 }
 }

?>