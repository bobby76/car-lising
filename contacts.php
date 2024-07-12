<?php
/**
 * The base (and only) template
 *
	* Template Name: Контакты
	* Template Post Type: page
*/

?><?php get_header();?>



<div class="section_breadcrumbs">
		<div class="container">
			<ul>
				<li><a href="#">Главная</a></li>
				<li>Контакты</li>
			</ul>
		</div>

	</div>
	<?php

// проверяем есть ли данные в гибком содержании
if( have_rows('glavnaya') ):

     // перебираем данные
    while ( have_rows('glavnaya') ) : the_row();?>

       <?php if( get_row_layout() == 'форма' ):
		    $order = get_sub_field('forma');
		    ?>
	<div class="section_main_contacts">
		<div class="container">
			<div class="section_main_contacts_wrap">
				<div class="section_main_contacts_wrap_text">
					<div class="section_main_contacts_title">
						<h1><?php echo $order['zagolovok'];?></h1>
						<div class="section_main_contacts_adress">
							<p><b>Адрес:</b></p>
							<p><b><?php echo $order['adres'];?></b></p>
						</div>
						<div class="section_main_contacts_otdel">
							<p><b>Отдел продаж</b></p>
							<p><a href="tel:<?php echo $order['telefon'];?>"><?php echo $order['telefon'];?></a></p>
							<p><a href="mailto:<?php echo $order['pochta'];?>"><?php echo $order['pochta'];?></a></p>
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
				<div class="section_main_contacts_wrap_form">
					<div class="section_order_form">
						<?php echo do_shortcode('[contact-form-7 id="a128c40" title="Форма внизу"]');?>
					</div>
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
