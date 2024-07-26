<?php 
	headerCafe($data);

	$arrSlider = $data['slider'];
	$arrBanner = $data['banner'];
?>
    <!-- Header - carousel -->
	<section class="section-slide">
		<div class="wrap-slick1 rs2-slick1">
			<div class="slick1">

			<?php 
			for ($i=0; $i < count($arrSlider) ; $i++) { 

			?>
				<div class="item-slick1 bg-overlay1" style="background-image: url(<?= $arrSlider[$i]['portada'] ?>);">
					<div class="container h-full">
						<div class="flex-col-c-m h-full p-t-100 p-b-60 respon5">
							<div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
								<span class="ltext-202 txt-center cl0 respon2">
									<?= $arrSlider[$i]['descripcion'] ?>
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
								<h2 class="ltext-104 txt-center cl0 p-t-22 p-b-40 respon1">
									<?= $arrSlider[$i]['nombre'] ?>
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
								<a href="<?= base_url(); ?>/producto" class="flex-c-m stext-101 cl0 size-101 bg10 bor1 hov-btn4 p-lr-15 trans-04">
									Ver Ahora
								</a>
							</div>
						</div>
					</div>
				</div>
				<?php 
			}
			?>
			</div>
		</div>
	</section>

    <!-- Content page -->
	<section class=" p-t-75 p-b-120">
		<div class="container">
			<div class="row p-b-148">
				<div class="col-md-7 col-lg-8">
					<div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
						<h3 class="mtext-111 cl2 p-b-16 position-text">
							Problemas
						</h3>
                        <ul>
                            <li>
                                <p class="stext-113 cl6 p-b-26">
                                    Deforestación y Cambio Climático: El cultivo de café es responsable de aproximadamente el 2.5% de la deforestación anual en los países productores.
                                </p>
                            </li>
                            <li>
                                <p class="stext-113 cl6 p-b-26">
                                    Desigualdad de Oportunidades Laborales: El subempleo afecta al 46.4% de la población ocupada.
                                </p>
                            </li>
                            <li>
                                <p class="stext-113 cl6 p-b-26">
                                    Restricciones Normativas de la UE respecto a la exportacion de cafe
                                </p>
                            </li>
                        </ul>
					</div>
				</div>

				<div class="col-11 col-md-5 col-lg-4 m-lr-auto">
					<div class="how-bor1 ">
						<div class="hov-img0">
							<?php 
							if (!empty($arrBanner) && isset($arrBanner[0])) {
								$ruta = $arrBanner[0]['ruta']; 
							?>
							<div class="hov-img0">
								<img src="<?= $arrBanner[0]['portada'] ?>" alt="<?= $arrBanner[0]['nombre'] ?>">
							</div>
							<?php 
							}else{
								echo"No hay imágenes disponibles.";
							}
							?>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="order-md-2 col-md-7 col-lg-8 p-b-30">
					<div class="p-t-7 p-l-85 p-l-15-lg p-l-0-md">
						<h3 class="mtext-111 cl2 p-b-16 position-text">
							Oportunidades
						</h3>
                        <ul>
                            <li>
                                <p class="stext-113 cl6 p-b-26">
                                    Creacion y distribucion de mini invernaderos modulares en toda la poblacion.
                                </p>
                            </li>
                            <li>
                                <p class="stext-113 cl6 p-b-26">
                                    Creacion de sistemas automatizados para contar con una mayor produccion de cafe debido a las condiciones mejoradas.
                                </p>
                            </li>
                            <li>
                                <p class="stext-113 cl6 p-b-26">
                                    Brindar la oportunidad a las familias de tener ingresos pasivos mediante la cosecha de cafe.
                                </p>
                            </li>
                        </ul>
					</div>
				</div>

				<div class="order-md-1 col-11 col-md-5 col-lg-4 m-lr-auto p-b-30">
					<div class="how-bor2">
							<?php 
							if (!empty($arrBanner) && isset($arrBanner[1])) {
								$ruta = $arrBanner[1]['ruta']; 
							?>
							<div class="hov-img0">
								<img src="<?= $arrBanner[1]['portada'] ?>" alt="<?= $arrBanner[1]['nombre'] ?>">
							</div>
							<?php 
							}else{
								echo"No hay imágenes disponibles.";
							}
							?>
					</div>
				</div>

			</div>
		</div>
    </div>

    <div class="bg6 flex-c-m flex-w size-302 m-t-73 p-tb-15">
        	<!-- Blog -->
	<section class="sec-blog bg6 p-t-95 p-b55">
		<div class="container">
			<div class="p-b-66">
				<h3 class="ltext-105 cl5 txt-center respon1">
					Proyecciones
				</h3>
			</div>

			<div class="row">

				<div class="col-md-6 p-b-30 p-b-40 txt-center">
					<div class="blog-item">
						<div class="hov-img0">
							<?php 
							if (!empty($arrBanner) && isset($arrBanner[2])) {
								$ruta = $arrBanner[2]['ruta']; 
							?>
							<a href="<?= base_url(); ?>/proyeccion-ventas">
								<img src="<?= $arrBanner[2]['portada'] ?>" alt="<?= $arrBanner[2]['nombre'] ?>">
							</a>
							<?php 
							}else{
								echo"No hay imágenes disponibles.";
							}
							?>
						</div>

						<div class="p-t-15">
							<h4 class="p-b-12">
                                <p class="mtext-101 text-dark">
                                    Proyeccion Ventas 
                                </p>
							</h4>

							<p class="stext-108 cl6 m-b-10">
								Ventas desde el primer, tercer y quinto año
							</p>
						</div>
                            <a href="blog-detail.html" class="stext-101 cl13 hov-cl2 trans-04 m-tb-10 ">
                                Leer más
                                <i class="fa fa-long-arrow-right m-l-9"></i>
                            </a>
					</div>
				</div>

				<div class="col-md-6 p-b-30 p-b-40 txt-center">
					<div class="blog-item">
						<div class="hov-img0">
							<?php 
							if (!empty($arrBanner) && isset($arrBanner[3])) {
								$ruta = $arrBanner[3]['ruta']; 
							?>
							<a href="<?= base_url(); ?>/impacto-social">
								<img src="<?= $arrBanner[3]['portada'] ?>" alt="<?= $arrBanner[3]['nombre'] ?>">
							</a>
							<?php 
							}else{
								echo"No hay imágenes disponibles.";
							}
							?>
						</div>

						<div class="p-t-15">

							<h4 class="p-b-12">
                                <p class="mtext-101 text-dark">Impacto Social y Ambiental</p>
							</h4>

							<p class="stext-108 cl6 m-b-10">
								Descripción de cómo el proyecto empodera a comunidades vulnerables
							</p>
						</div>
                        <a href="blog-detail.html" class="stext-101 cl13 hov-cl2 trans-04 m-tb-10">
                            Leer más
                            <i class="fa fa-long-arrow-right m-l-9"></i>
                        </a>
					</div>
				</div>
			</div>
		</div>
	</section>
	</div>
</section>	
<?php 
	footerCafe($data);
?>


