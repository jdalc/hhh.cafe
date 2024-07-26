<?php 
class ClientesModel extends Mysql
{
	private $intIdUsuario;
	private $strIdentificacion;
	private $strNombre;
	private $strApellido;
	private $intTelefono;
	private $strEmail;
	private $strPassword;
	private $strToken;
	private $intTipoId;
	private $intStatus;
	private $strNit;
	private $strNomFiscal;
	private $strDirFiscal;

	public function __construct()
	{
		parent::__construct();
	}	

	public function insertCliente(string $identificacion, string $nombre, string $apellido, int $telefono, string $email, string $password, int $tipoid, string $nomFiscal, string $dirFiscal){

		$this->strIdentificacion = $identificacion;
		$this->strNombre = $nombre;
		$this->strApellido = $apellido;
		$this->intTelefono = $telefono;
		$this->strEmail = $email;
		$this->strPassword = $password;
		$this->intTipoId = $tipoid;
		$this->strNomFiscal = $nomFiscal;
		$this->strDirFiscal = $dirFiscal;

		$return = 0;
		$sql = "SELECT * FROM usuarios WHERE 
				correo_usuario = '{$this->strEmail}' or identificacion = '{$this->strIdentificacion}' ";
		$request = $this->select_all($sql);

		if(empty($request))
		{
			$query_insert  = "INSERT INTO usuarios(identificacion,nombres,apellidos,telefono,correo_usuario,contraseña,rolid,nombrefiscal,direccionfiscal) 
							  VALUES(?,?,?,?,?,?,?,?,?)";
        	$arrData = array($this->strIdentificacion,
    						$this->strNombre,
    						$this->strApellido,
    						$this->intTelefono,
    						$this->strEmail,
    						$this->strPassword,
    						$this->intTipoId,
    						$this->strNomFiscal,
    						$this->strDirFiscal);
        	$request_insert = $this->insert($query_insert,$arrData);
        	$return = $request_insert;
		}else{
			$return = "exist";
		}
        return $return;
	}

	public function selectClientes()
	{
		$sql = "SELECT idusuario,identificacion,nombres,apellidos,telefono,correo_usuario,status 
				FROM usuarios 
				WHERE rolid = 3 and status != 0 ";
		$request = $this->select_all($sql);
		return $request;
	}

	public function selectCliente(int $idpersona){
		$this->intIdUsuario = $idpersona;
		$sql = "SELECT idusuario,identificacion,nombres,apellidos,telefono,correo_usuario,nombrefiscal,direccionfiscal,status, DATE_FORMAT(fecha_creada, '%d-%m-%Y') as fechaRegistro 
				FROM usuarios
				WHERE idusuario = $this->intIdUsuario and rolid = 3";
		$request = $this->select($sql);
		return $request;
	}

	public function updateCliente(int $idUsuario, string $identificacion, string $nombre, string $apellido, int $telefono, string $email, string $password, string $nomFiscal, string $dirFiscal){

		$this->intIdUsuario = $idUsuario;
		$this->strIdentificacion = $identificacion;
		$this->strNombre = $nombre;
		$this->strApellido = $apellido;
		$this->intTelefono = $telefono;
		$this->strEmail = $email;
		$this->strPassword = $password;
		$this->strNomFiscal = $nomFiscal;
		$this->strDirFiscal = $dirFiscal;

		$sql = "SELECT * FROM usuarios WHERE (correo_usuario = '{$this->strEmail}' AND idusuario != $this->intIdUsuario)
									  OR (identificacion = '{$this->strIdentificacion}' AND idusuario != $this->intIdUsuario) ";
		$request = $this->select_all($sql);

		if(empty($request))
		{
			if($this->strPassword  != "")
			{
				$sql = "UPDATE usuarios SET identificacion=?, nombres=?, apellidos=?, telefono=?, correo_usuario=?, contraseña=?, nombrefiscal=?, direccionfiscal=? 
						WHERE idusuario = $this->intIdUsuario ";
				$arrData = array($this->strIdentificacion,
        						$this->strNombre,
        						$this->strApellido,
        						$this->intTelefono,
        						$this->strEmail,
        						$this->strPassword,
        						$this->strNomFiscal,
        						$this->strDirFiscal);
			}else{
				$sql = "UPDATE usuarios SET identificacion=?, nombres=?, apellidos=?, telefono=?, correo_usuario=?, nombrefiscal=?, direccionfiscal=? 
						WHERE idusuario = $this->intIdUsuario ";
				$arrData = array($this->strIdentificacion,
        						$this->strNombre,
        						$this->strApellido,
        						$this->intTelefono,
        						$this->strEmail,
        						$this->strNomFiscal,
        						$this->strDirFiscal);
			}
			$request = $this->update($sql,$arrData);
		}else{
			$request = "exist";
		}
		return $request;
	}

	public function deleteCliente(int $intIdpersona)
	{
		$this->intIdUsuario = $intIdpersona;
		$sql = "UPDATE usuarios SET status = ? WHERE idusuario = $this->intIdUsuario ";
		$arrData = array(0);
		$request = $this->update($sql,$arrData);
		return $request;
	}
}

 ?>