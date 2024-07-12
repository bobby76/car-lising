<?php
/**
 * The base (and only) template
 *
	* Template Name: Импорт
	* Template Post Type: page
*/

?><?php get_header();?>


<div class="section_breadcrumbs">
		<div class="container">
			<ul>
				<li><a href="#">Главная</a></li>
				<li><?php the_title();?></li>
			</ul>
		</div>

	</div>
		

<?php

// проверяем есть ли данные в гибком содержании
if( have_rows('glavnaya') ):

     // перебираем данные
    while ( have_rows('glavnaya') ) : the_row();?>

       <?php if( get_row_layout() == 'первый_экран' ):
			$block_main = get_sub_field('pervyj_ekran');


			?>
			<?php elseif( get_row_layout() == 'форма' ):
		    $order = get_sub_field('forma');
		    ?>
	<div class="section_main_import">
		<div class="container">
			<div class="section_main_import_title">
			<h1><?php echo $block_main['zagolovok'];?></h1>
				<div class="section_main_import_subtitle"><?php echo $block_main['podzagolovok'];?></div>
				<button data-fancybox  data-src="#modal_order"><?php echo $block_main['tekst_knopki'];?></button>
			</div>
		</div>
	</div>
	<?php elseif( get_row_layout() == 'каталог' ):
		    $katalog = get_sub_field('katalog');
		    ?>
	<div class="section_actions">
		<div class="container">
			<div class="section_actions_title">
				<h2><?php echo $katalog['zagolovok'];?></h2>
			</div>
			<div class="section_actions_wrap">
				<?php if( $katalog['avtomobili'] ):
						$repeaters = $katalog['avtomobili'];
							foreach($repeaters as $repeater) {
								$postid = $repeater["avtomobil"];
								echo '
									<div class="section_actions_item">
										<div class="section_actions_item_label">Акция: скидка 10%</div>
										<div class="section_actions_item_image">
											<img src="'.get_field("izobrazhenie", $postid).'" alt="">
										</div>
										<div class="section_catalog_item_title">'.get_the_title($postid).'</div>
															<div class="section_catalog_item_price">'.get_field("czena", $postid).'</div>
										<div class="section_catalog_item_options">
											<ul>
												<li>'.get_field("novizna", $postid).'</li>
												<li>'.get_field("korobka", $postid).'</li>
												<li>'.get_field("toplivo", $postid).'</li>
												<li>'.get_field("obem_baka", $postid).'</li>
											</ul>
										</div>
										<div class="section_catalog_item_order">
											<button data-fancybox  data-src="#modal_order">Отправить заявку на рассчёт</button>
										</div>
									</div>';
								};
								endif; ?>
			</div>
		</div>
	</div>
	<?php elseif( get_row_layout() == 'текст' ):
		    $text = get_sub_field('tekst');
		    ?>
	<div class="section_text ">
		<div class="container">
			<div class="section_main_about_subtitle" style="margin-top:0px">
				<?php echo $text['tekstovyj_blok'];?>
			</div>
		</div>
	</div>

	<?php elseif( get_row_layout() == 'форма' ):
		    $order = get_sub_field('forma');
		    ?>
	<div class="section_order">
		<div class="container">
			<div class="section_order_wrap">
				<div class="section_order_text">
					<div class="section_title">
						<h2><?php echo $order['zagolovok'];?></h2>
						<div class="section_order_subtitle">
							<p><?php echo $order['tekst_1'];?></p>
						</div>
					</div>
					<div class="section_order_subtext">
						<div class="section_order_subtext_text">
							<p><?php echo $order['tekst_2'];?></p>
						</div>
						<div class="section_order_subtext_links">
							<a href="<?php the_field('telegram', 'option'); ?>"><img src="https://justneed.site/2399/wp-content/themes/bk-leasing/img/tg.svg" alt=""></a>
							<a href="<?php the_field('vatsap', 'option'); ?>"><img src="https://justneed.site/2399/wp-content/themes/bk-leasing/img/wh.svg" alt=""></a>
						</div>
					</div>
				</div>
				<div class="section_order_form">
					
					<?php echo do_shortcode('[contact-form-7 id="a128c40" title="Форма внизу"]');?>
				</div>
			</div>
			
		</div>
	</div>
	<?php endif;
endwhile;
else :
    // макетов не найдено
endif;

?>

	<?php get_footer();?>
