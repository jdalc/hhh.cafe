<?php 
	headerCafe2($data);

    $arrProductos = $data['producto'];
    $arrImages = $arrProductos['images']; 
?>
        
    <!-- Title page -->
    <section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('<?= media() ?>/pagina/img/bg-03.jpg');">
            <h2 class="ltext-105 cl0 txt-center">
                Producto
            </h2>
	</section>		

	<!-- Product Detail -->
	<section class="sec-product-detail bg0 p-t-65 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-7 p-b-30">
					<div class="p-l-25 p-r-30 p-lr-0-lg">
						<div class="wrap-slick3 flex-sb flex-w">
							<div class="wrap-slick3-dots"></div>
							<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

							<div class="slick3 gallery-lb">
                                <?php 
                                if(!empty($arrImages)){
                                    for ($img=0; $img < count($arrImages); $img++) { 
                                   
                                ?>
								<div class="item-slick3" data-thumb="<?= $arrImages[$img]['url_image'] ?>">
									<div class="wrap-pic-w pos-relative">
										<img src="<?= $arrImages[$img]['url_image'] ?>" alt="<?= $arrProductos['nombre'] ?>">

										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn4 trans-04" href="<?= $arrImages[$img]['url_image']; ?>">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>
                                <?php 
                                 }
                                }
                                ?>
							</div>
						</div>
					</div>
				</div>
					
				<div class="col-md-6 col-lg-5 p-b-30">
					<div class="p-r-50 p-t-5 p-lr-0-lg">
						<h4 class="mtext-105 cl2 js-name-detail p-b-14">
                        <?= $arrProductos['nombre']; ?>
						</h4>

						<span class="mtext-106 cl2">
							$5.00
						</span>
                        <?= $arrProductos['descripcion']; ?>

						<!--  -->
						<div class="flex-w flex-m p-l-100 p-t-40 respon7">

							<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
								<i class="fa fa-facebook"></i>
							</a>

							<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Whatsapp">
								<i class="fa fa-whatsapp"></i>
							</a>

							<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Instagram">
								<i class="fa fa-instagram"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php 
	footerCafe($data);
?>