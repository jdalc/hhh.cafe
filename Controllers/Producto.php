<?php
    require_once("Models/TProducto.php");

    class Producto extends Controllers{
        use TProducto;
        public function __construct()
		{
			parent::__construct();
            session_start();
		}

        public function producto()
		{
                $data['page_tag'] = "HHH CAFE - Producto";
                $data['page_title'] = "HHH CAFE - Producto";
                $data['page_name'] = "producto";
                $data['producto'] = $this->getProductosT();
                $this->views->getView($this,"producto",$data);      
		}











    }
    


?>