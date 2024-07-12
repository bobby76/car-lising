<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<!-- nocache -->
	<meta http-equiv="cache-control" content="no-cache, no-store, must-revalidate" />
	<meta http-equiv="pragma" content="no-cache" />
	<meta http-equiv="expires" content="0" />
	<!-- nocache end -->
	<link rel="stylesheet" href="https://justneed.site/2399/wp-content/themes/bk-leasing/css/main1.css?v=1.0">
	<link rel="stylesheet" href="https://justneed.site/2399/wp-content/themes/bk-leasing/js/slick/slick.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
	<link rel="icon" href="https://justneed.site/2399/wp-content/themes/bk-leasing/img/fav.png" type="image/x-icon">
    
</head>
<?php wp_head(); ?>
</head>

<body>
	<header>
		<div class="header_main">
			<div class="container">
				<div class="header_logo">
					<a href="https://justneed.site/2399/" class="logo">
						<img src="https://justneed.site/2399/wp-content/themes/bk-leasing/img/logo.svg">
					</a>
				</div>
				<div class="header_nav">
					<?php wp_nav_menu(  array( 'menu'	=> 34) ); ?>
					

					<div class="header_nav_bottom_block mobile">
						<div class="header_nav_bottom_block_phone">
							<a href="tel:8-800-222-33-55">8-800-222-33-55</a>
						</div>
					</div>
				</div>
				<button id="nav-trigger" class="nav-trigger mobile" type="button">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
				<div class="header_button">
					<a href="tel:8-800-222-33-55" class="callme">8-800-222-33-55</a>
					<button data-fancybox  data-src="#modal_call" class="order">Заказать звонок</button>
				</div>
			</div>
		</div>
	</header>
	

	<body <?php body_class(); ?>><?php wp_body_open(); ?>

