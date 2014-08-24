<?php

class MySql
 {
	private	$mNombreServidor, $mNombreUsuario, $mPassword, $mNombreBaseDatos;
	private	$mLink, $mDB, $mQuery;
	public	$mMensajeError, $mNumeroError;
	
    public function __construct() //Constructor de la clase MySql
     {
		//Nombre del servidor
        $this->mNombreServidor= "localhost";
		//Nombre de usuario
        $this->mNombreUsuario= "root";
		//Password
        $this->mPassword= "";
		//Nombre de la Base de Datos
		$this->mNombreBaseDatos="db_tutorias-unach";
     }
	
	public function AbrirConexion($mTipo) //Establece la conexión a la Base de Datos MySql
	 {
		try {
				//Limpiar Propiedades
				$this->LimpiarPropiedades();
				//Abrir la conexión al Sistema Manejador de Base de Datos (Mysql)
				$this->mLink= @mysql_connect($this->mNombreServidor, $this->mNombreUsuario, $this->mPassword);
				//Verificar si no se pudo establecer la conexión
				if ( ! is_resource($this->mLink) )
				 {
					//Establecer los mensajes de error
					$mExceptionString = "Ocurrio un error al tratar de conectarse a la Base de Datos.";
					//Crear una nueva exepción (Error)
					throw new Exception ($mExceptionString);
				 }
				else
				 {
					try {
							//Seleccionar la Base de Datos
							$this->mDB= mysql_select_db($this->mNombreBaseDatos, $this->mLink);
							//Verificar si no se pudo establecer la Base de Datos
							if ( ! $this->mDB )
							 {
								//Establecer los mensajes de error
								$mExceptionString= "Ocurrio un error al tratar de seleccionar la Base de Datos.";
								//Crear una nueva exepción (Error)
								throw new Exception ($mExceptionString);
							 }

							if ( $mTipo==0 )
							 {	$this->EJECUTAR("SET NAMES 'utf8'");	}
							else
							 {	$this->EJECUTAR("SET NAMES 'latin1'");	}
						}
					catch (Exception $mExcepcion)
						{
							$this->mMensajeError=$mExcepcion->getMessage();
							$this->mNumeroError=-1;
							throw new Exception ($mExcepcion->getMessage());
						}
				 }
			}
		catch (Exception $mExcepcion)
			{
				$this->mMensajeError=$mExcepcion->getMessage();
				$this->mNumeroError=-1;
				throw new Exception ($mExcepcion->getMessage());
			}
	 }
	
	public function CerrarConexion() //Cierra la conexión a la Base de Datos MySql
	 {
		$this->__destruct();
	 }
	
	public function Ejecutar($mSql) //Ejecuta un SQL (DDL - Lenguaje de Definición de Datos)
	 {
		try
		 {
		 	$this->LimpiarPropiedades();
	 		$this->mQuery=mysql_query(trim($mSql));
			if ( (is_bool($this->mQuery)) && ($this->mQuery==false) )
			 {	throw new Exception (mysql_error(), mysql_errno());	}
			
			return $this->mQuery;
		 }
		catch (Exception $mExcepcion)
		 {
		 	$this->mQuery=false;
			$this->mMensajeError=$mExcepcion->getMessage();
			$this->mNumeroError=$mExcepcion->getCode();
		 	return $this->mQuery;
		 }
	 }
	
	public function EjecutarSql($mSql) //Ejecuta un SQL (DML - Lenguaje de Manipulación de datos)
	 {
		try 
		 {
			$this->LimpiarPropiedades();
			if ( ($this->mLink!=NULL) && ($this->mLink!=false) && (is_resource($this->mLink)) )
			 {
				$this->mQuery= mysql_query(trim($mSql), $this->mLink);
				if ( (is_bool($this->mQuery)) && ($this->mQuery==false) )
				 {	throw new Exception (mysql_error($this->mLink), mysql_errno($this->mLink));	}
				
				return $this->mQuery;
			 }
			else
			 {
				throw new Exception (mysql_error(), mysql_errno());
			 }
		 }
		catch (Exception $mExcepcion)
		 {
		 	
			$this->mQuery=false;
			$this->mMensajeError=$mExcepcion->getMessage();
			$this->mNumeroError=$mExcepcion->getCode();
		 	return $this->mQuery;
		 }
	 } 
	 
	public function ObtenerNumeroFilasConsultadas() //Obtiene el número de registros (filas) consultadas
	 {
		try 
		 {
		 	$this->LimpiarPropiedades();
			if ( ($this->mQuery!=NULL) && ($this->mQuery!=false) && (is_resource($this->mQuery)) )
			 {
				$mNumeroFilas= mysql_num_rows($this->mQuery);
				if ( (is_bool($mNumeroFilas)) && ($mNumeroFilas==false) )
				 {	throw new Exception (mysql_error($this->mLink), mysql_errno($this->mLink));	}
					
				return $mNumeroFilas;
			 }
			else
			 {	
				throw new Exception (mysql_error(), mysql_errno());
			 }
		 }
		catch (Exception $mExcepcion)
		 {	
			$this->mMensajeError=$mExcepcion->getMessage();
			$this->mNumeroError=$mExcepcion->getCode();
		 	return -1;
		 }
	 }
	
	public function ObtenerNumeroFilasAfectadas() //Obtiene el número de registros (filas) afectadas
	 {
		try
		 {
		 	$this->LimpiarPropiedades();
			if ( ($this->mLink!=NULL) && ($this->mLink!=false) && (is_resource($this->mLink)) )
			 {
				$mNumeroFilas= mysql_affected_rows($this->mLink);
				if ( (is_bool($mNumeroFilas)) && ($mNumeroFilas==false) )
				 {	throw new Exception (mysql_error($this->mLink), mysql_errno($this->mLink));	}
	
				return $mNumeroFilas;
			 }
			else
			 {	
				throw new Exception (mysql_error(), mysql_errno());
			 }
		 }
		catch (Exception $mExcepcion)
		 {	
			$this->mMensajeError=$mExcepcion->getMessage();
			$this->mNumeroError=$mExcepcion->getCode();
		 	return -1;
		 }	 
	 }
	
	public function ObtenerArrayFilas() //Obtiene lo registros (filas) consultadas
	 {
		try 
		 {
		 	$this->LimpiarPropiedades();
			if ( ($this->mQuery!=NULL) && ($this->mQuery!=false) && (is_resource($this->mQuery)) )
			 {
				$mArrayFilas=mysql_fetch_array($this->mQuery);
				if ( (is_bool($mArrayFilas)) && ($mArrayFilas==false) )
				 {	throw new Exception (mysql_error($this->mLink), mysql_errno($this->mLink));	}
					
				return $mArrayFilas;
			 }
			else
			 {	
				throw new Exception (mysql_error(), mysql_errno());
			 }
		 }
		catch (Exception $mExcepcion)
		 {	
			$this->mMensajeError=$mExcepcion->getMessage();
			$this->mNumeroError=$mExcepcion->getCode();
			return false;
		 }
	 }
	
	public function LiberarMemoria() //Libera de memoria una consulta realizada
	 {
	 	try
		 {
			$this->LimpiarPropiedades();
			if ( ($this->mQuery!=NULL) && ($this->mQuery!=false) && (is_resource($this->mQuery)) )
			 {
			 	$mLiberar=mysql_free_result($this->mQuery);
				if ( (is_bool($mLiberar)) && ($mLiberar==false) )
				 {	throw new Exception (mysql_error($this->mLink), mysql_errno($this->mLink));	}	
			 }
			else
			 {	
				throw new Exception (mysql_error(), mysql_errno());
			 }
		 }
		catch (Exception $mExcepcion)
		 {	
			$this->mMensajeError=$mExcepcion->getMessage();
			$this->mNumeroError=$mExcepcion->getCode();
			throw new Exception ($mExcepcion->getMessage(), $mExcepcion->getCode());
		 }
	 }
	
	public function IniciarTransaccion() //Inicia una transacción
	 {
		$this->Ejecutar("START TRANSACTION");
	 }
	
	public function ConfirmarTransaccion() //Cofirma una transacción
	 {
		$this->Ejecutar("COMMIT");
	 }
	
	public function DeshacerTransaccion() //Cancela una transacción
	 {
		$this->Ejecutar("ROLLBACK");
	 }
	
	private function LimpiarPropiedades() //Limpia propiedades (errores)
	 {
		$this->mMensajeError="";
		$this->mNumeroError=0;
	 }
	
	public function __destruct() //Destructor de la clase MySql
	 {
		unset($this->mNombreServidor, $this->mNombreUsuario, $this->mPassword, $this->mNombreBaseDatos, $this->mLink, $this->mDB, $this->mQuery,
			  $this->mMensajeError,$this->mNumeroError);
	 }
 }
 
?>