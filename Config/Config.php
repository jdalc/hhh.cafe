<?php 
	
	//define("BASE_URL", "http://localhost/hhcafe/");
	const BASE_URL = "http://localhost:8080/hhhcafe";

	//Zona horaria
	date_default_timezone_set('America/Lima');

	//Datos de conexión a Base de Datos
	const DB_HOST = "localhost";
	const DB_NAME = "hhhcafe";
	const DB_USER = "root";
	const DB_PASSWORD = "";
	const DB_CHARSET = "charset=utf8";

	//Deliminadores decimal y millar Ej. 24,1989.00
	const SPD = ".";
	const SPM = ",";

	//Simbolo de moneda
	const SMONEY = "S/";

	//Datos envio de correo
	const NOMBRE_REMITENTE = "Homenaje a la Herencia Huanuqueña";
	const EMAIL_REMITENTE = "no-reply@hhhcafe.com";
	const NOMBRE_EMPRESA = "Homenaje a la Herencia Huanuqueña Cafe";
	const WEB_EMPRESA = "www.hhhcafe.com";

	const DESCRIPCION = "Homenaje a la Herencia Huanuqueña - Café";
	const SHAREDHASH = "HHH CAFE";

	//Datos Empresa
	const DIRECCION = "dir";
	const TELEMPRESA = "tel";
	const WHATSAPP = "0000-0000";
	const EMAIL_EMPRESA = "";
	const EMAIL_PEDIDOS = ""; 
	const EMAIL_SUSCRIPCION = "";
	const EMAIL_CONTACTO = "";
		
	const CAT_SLIDER = "1,2,3";
	const CAT_BANNER = "4,5,6,7";

	//Módulos
	const MDASHBOARD = 1;
	const MUSUARIOS = 2;
	const MCLIENTES = 3;
	const MCARRUSEL = 4;
	const MPRODUCTOS = 5;
	const MDCONTACTOS = 6;
	

?>