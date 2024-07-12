<?php
/**
 * The base (and only) template
 *
	* Template Name: О компании
	* Template Post Type: page
*/

?><?php get_header();?>



	<div class="section_breadcrumbs">
		<div class="container">
			<ul>
				<li><a href="#">Главная</a></li>
				<li>О компании</li>
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
	<div class="section_main_about">
		<div class="container">
			<div class="section_main_about_title">
				<h1><?php echo $block_main['zagolovok'];?></h1>
				<div class="section_main_about_subtitle">
				<?php echo $block_main['tekst'];?>
				</div>
			</div>
		</div>
	</div>
	<?php elseif( get_row_layout() == 'партнеры' ):
		    $part = get_sub_field('partnery');
		    ?>
	<div class="section_partners">
		<div class="container">
			<div class="section_title">
				<h2><?php echo $part['zagolovok'];?></h2>
				<div class="section_subtitle"><?php echo $part['podzagolovok'];?></div>
			</div>
			<div class="section_partners_list">
				<?php if( $part['partner'] ):
						$repeaters = $part['partner'];
						echo '<ul>';
							foreach($repeaters as $repeater) {
								echo '
									<li><a href="#">'.$repeater["nazvanie"].'</a></li>';
								};
								echo '</ul>';
								endif; ?>
				<?php if( $part['partner_2'] ):
						$repeaters = $part['partner_2'];
						echo '<ul>';
							foreach($repeaters as $repeater) {
								echo '
									<li><a href="#">'.$repeater["nazvanie"].'</a></li>';
								};
								echo '</ul>';
								endif; ?>
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
