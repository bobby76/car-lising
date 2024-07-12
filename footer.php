<footer>
		<div class="container">
			<div class="footer_top">
				<div class="footer_top_column">
					<a href="https://justneed.site/2399/" class="footer-logo">
						<img src="https://justneed.site/2399/wp-content/themes/bk-leasing/img/logo-footer.svg" alt="">
					</a>
					<a href="tel:88002223355" class="phone">8 800 222 33 55</a>
				</div>
				<div class="footer_top_column">
					<?php wp_nav_menu(  array( 'menu'	=> 31) ); ?>
				</div>
				<div class="footer_top_column">
					<?php wp_nav_menu(  array( 'menu'	=> 32) ); ?>
				</div>
				<div class="footer_top_column">
					<?php wp_nav_menu(  array( 'menu'	=> 33) ); ?>
					
				</div>
			</div>
		</div>
		<div class="footer_bottom">
			<div class="container">
				<div class="footer_bottom_text">
					<ul>
						<li><?php the_field('tekst_v_podvale_1', 'option'); ?></li>
						<li><?php the_field('tekst_v_podvale_2', 'option'); ?></li>
						<li><?php the_field('tekst_v_podvale_3', 'option'); ?></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

	<div id="modal_order" style="display: none; " class="">
		<div class="modal_wrap">
			<div class="modal_title">Заказать расчет стоимости лизинга авто</div>
			<div class="section_order_form">
				<?php echo do_shortcode('[contact-form-7 id="0b7a962" title="Форма заказать звонок"]');?>
			</div>
		</div>
	</div>
	<div id="modal_call" style="display: none; " class="">
		<div class="modal_wrap">
			<div class="modal_title">Заказать звонок</div>
			<div class="section_order_form">
				<?php echo do_shortcode('[contact-form-7 id="0b7a962" title="Форма заказать звонок"]');?>
			</div>
		</div>
	</div>


<?php wp_footer(); ?>

	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
				<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>-->
				<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>


	<link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
				
	<script src="https://justneed.site/2399/wp-content/themes/bk-leasing/js/script.js?v=1.0"></script>

	
</body>
</html> 
