<?php 
	require_once("Models/TCarrusel.php");
	class Home extends Controllers{
		use TCarrusel;
		public function __construct()
		{
			parent::__construct();
			session_start();
		}

		public function home()
		{
			$data['page_tag'] = NOMBRE_EMPRESA;
			$data['page_title'] = NOMBRE_EMPRESA;
			$data['page_name'] = "hhh cafe";
			$data['slider'] = $this->getCategoriasT(CAT_SLIDER);
			$data['banner'] = $this->getCategoriasT(CAT_BANNER);
			$this->views->getView($this,"home",$data);
		}

	}
?>