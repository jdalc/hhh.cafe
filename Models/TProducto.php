<?php 
    require_once("Libraries/Core/Mysql.php");
    trait TProducto{
        private $con;
        private $strCategoria;
        private $intIdcategoria;
        private $intIdProducto;
        private $strProducto;
        private $cant;
        private $option;
        private $strRuta;
        private $strRutaCategoria;

        public function getProductosT(){
            $this->con = new Mysql();
			$sql = "SELECT idproducto,
                            codigo,
                            nombre,
                            descripcion,
                            precio,
                            ruta,
                            stock
					FROM producto 
					WHERE status != 0 ";
					$request = $this->con->select($sql);
                    if(!empty($request)){
                        $intIdProducto = $request['idproducto'];
                        $sqlImg = "SELECT img
                                FROM imagen
                                WHERE productoid = $intIdProducto";
                        $arrImg = $this->con->select_all($sqlImg);
                        if(count($arrImg) > 0){
                            for ($i=0; $i < count($arrImg); $i++) { 
                                $arrImg[$i]['url_image'] = media().'/images/uploads/'.$arrImg[$i]['img'];
                            }
                        }else{
                            $arrImg[0]['url_image'] = media().'/images/uploads/product.png';
                        }
                        $request['images'] = $arrImg;
                    }
			return $request;
		}

        public function getProductoT(int $idproducto, string $ruta){
            $this->con = new Mysql();
            $this->intIdProducto = $idproducto;
            $this->strRuta = $ruta;
            $sql = "SELECT p.idproducto,
                            p.codigo,
                            p.nombre,
                            p.descripcion,
                            p.precio,
                            p.ruta,
                            p.stock
                    FROM producto p 
                    WHERE p.status != 0 AND p.idproducto = '{$this->intIdProducto}' AND p.ruta = '{$this->strRuta}' ";
                    $request = $this->con->select($sql);
                    if(!empty($request)){
                        $intIdProducto = $request['idproducto'];
                        $sqlImg = "SELECT img
                                FROM imagen
                                WHERE productoid = $intIdProducto";
                        $arrImg = $this->con->select_all($sqlImg);
                        if(count($arrImg) > 0){
                            for ($i=0; $i < count($arrImg); $i++) { 
                                $arrImg[$i]['url_image'] = media().'/images/uploads/'.$arrImg[$i]['img'];
                            }
                        }else{
                            $arrImg[0]['url_image'] = media().'/images/uploads/product.png';
                        }
                        $request['images'] = $arrImg;
                    }
            return $request;
        }

    }