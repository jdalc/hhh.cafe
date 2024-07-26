<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['page_tag']; ?></title>
    <link rel="stylesheet" href="<?= media() ?>/pagina/css/custom.css">
    <link rel="shortcut icon" href="<?= media() ?>/pagina/img/icon.ico" type="image/x-icon">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?= media() ?>/pagina/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?= media() ?>/pagina/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?= media() ?>/pagina/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?= media() ?>/pagina/fonts/linearicons-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?= media() ?>/pagina/vendor/animate/animate.css">
    <!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= media() ?>/pagina/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="<?= media() ?>/pagina/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->	
        <link rel="stylesheet" type="text/css" href="<?= media() ?>/pagina/vendor/slick/slick.css">
    <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?= media() ?>/pagina/css/util.css">
        <link rel="stylesheet" type="text/css" href="<?= media() ?>/pagina/css/main.css">
		<link rel="stylesheet" type="text/css" href="<?= media(); ?>/css/style.css">
    <!--===============================================================================================-->
</head>
<body>
<div id="divLoading" >
    <div>
        <img src="<?= media(); ?>/images/loading.svg" alt="Loading">
    </div>
</div>
    <!-- Header -->
	<header class="header-v3">
		<!-- Header desktop -->
		<div class="container-menu-desktop trans-03">
			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop p-l-100">
					
					<!-- Logo desktop -->		
					<a href="<?= base_url(); ?>" class="logo">
						<img src="<?= media() ?>/pagina/img/logo1.png" alt="HHH CAFE">
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu menu-position animation-menu">
							<li>
								<a href="<?= base_url(); ?>">Inicio</a>
							</li>

							<li>
								<a href="<?= base_url(); ?>/producto">Producto</a>
							</li>
							
							<li>
								<a href="<?= base_url(); ?>/nosotros">Nosotros</a>
							</li>

							<li>
								<a href="<?= base_url(); ?>/social">Social</a>
							</li>

                            <li>
								<a href="<?= base_url(); ?>/contacto">Contacto</a>
							</li>
						</ul>
					</div>
					
					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m h-full">							
						<div class="flex-c-m h-full p-r-25 bor6">
						</div>
						<div class="flex-c-m h-full p-lr-19">
                                <div class="icon-header-item-1 cl0 hov-cl3 trans-04 p-lr-11">

									<?php if(isset($_SESSION['login'])) { ?>
									<a class="cl0 hov-cl3 trans-04" href="<?= base_url() ?>/dashboard">
										<i class="fa fa-user p-r-5"></i>
										<?= $_SESSION['userData']['nombres'].' '.$_SESSION['userData']['apellidos'] ?>
									</a>
									<?php } else { ?>
									<a href="<?= base_url() ?>/login" class="cl0 hov-cl3 trans-04">
										<i class="fa fa-user p-r-5"></i>
										Iniciar Sesión
									</a>
									<?php } ?>
									
                                </div>
						</div>
					</div>
				</nav>
			</div>	
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="<?= base_url(); ?>"><img src="<?= media() ?>/pagina/img/logo3.png" alt="HHH CAFE" ></a>
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="main-menu-m">
				<li>
                    <a class="cl0 hov-cl2 trans-04" href="<?= base_url(); ?>">Inicio</a>
                </li>
				
				<li>
					<a class="cl0 hov-cl2 trans-04" href="<?= base_url(); ?>/producto">Producto</a>
				</li>
				
                <li>
                    <a class="cl0 hov-cl2 trans-04" href="<?= base_url(); ?>/nosotros">Nosotros</a>
                </li>

                <li>
                    <a class="cl0 hov-cl2 trans-04" href="<?= base_url(); ?>/social">Social</a>
                </li>

                <li>
                    <a class="cl0 hov-cl2 trans-04" href="<?= base_url(); ?>/contacto">Contacto</a>
                </li>
				<li>
					<?php if(isset($_SESSION['login'])) { ?>
						<a class="cl0 hov-cl2 trans-04" href="<?= base_url() ?>/dashboard">
							<?= $_SESSION['userData']['nombres'].' '.$_SESSION['userData']['apellidos'] ?>
						</a>
						<?php } else { ?>
						<a href="<?= base_url() ?>/login" class="cl0 hov-cl2 trans-04">
							Iniciar Sesión
						</a>
					<?php } ?>
                </li>
			</ul>
		</div>
	</header>