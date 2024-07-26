<?php 
	class Social extends Controllers{
		public function __construct()
		{
			parent::__construct();
			session_start();
		}

		public function social()
		{
			$data['page_tag'] = NOMBRE_EMPRESA;
			$data['page_title'] = NOMBRE_EMPRESA;
			$data['page_name'] = "hhh cafe";
			$this->views->getView($this,"social",$data);
		}

	}
?>