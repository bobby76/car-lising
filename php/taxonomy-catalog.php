<?php
/**
 * The base (and only) template
 *
	* Template Name: Каталог
*/

?><?php get_header();?>

<div class="section_breadcrumbs">
		<div class="container">
			<ul>
				<li><a href="#">Главная</a></li>
				<li><a href="https://justneed.site/2399/catalog/">Каталог автомобилей</a></li>
				<li><?php single_term_title(); ?></li>
			</ul>
		</div>

	</div>
	<div class="section_main_catalog">
		<div class="container">
			<div class="section_main_catalog_title">
				<h1><?php single_term_title(); ?></h1>
			</div>
		</div>
	</div>
	
	<div class="section_actions">
		<div class="container">
			<div class="section_actions_title">
				<h2>Акционные предложения</h2>
			</div>
			<div class="section_actions_wrap">

		<?php 	$posts = get_posts( [
	'numberposts' => -1,
	'post_type'   => 'product',
	'tax_query' => [
		[
			'taxonomy' => 'catalog',
			'field'    => 'term_id', // тут можно указать slug и ниже вписать ярлыки нужных рубрик
			'terms'    => [ 4 ],
		]
	],
	'orderby'     => 'date',
	'order'       => 'ASC',
] );


 if (is_array($posts)): 
	$i = 0;
	foreach ($posts as $d):
 ?>
 <?php
				if (@$d->ID) $d = $d->ID;
				$postitem = array(
					'title' => get_the_title($d),
					'image' => get_field('izobrazhenie', $d),
					'price' =>  get_field('czena', $d),
					'novizna' =>  get_field('novizna', $d),
					'korobka' =>  get_field('korobka', $d),
					'toplivo' =>  get_field('toplivo', $d),
					'obem_baka' =>  get_field('obem_baka', $d),
					'akczionnyj_tovar' =>  get_field('akczionnyj_tovar', $d),
				);
			?>
			<?php if($postitem['akczionnyj_tovar']): ?>
				<div class="section_actions_item">
					<div class="section_actions_item_label">Акция: скидка 10%</div>
					<div class="section_actions_item_image">
						<img src="<?php echo $postitem['image']; ?>" alt="">
					</div>
					<div class="section_catalog_item_title"><?php echo $postitem['title']; ?></div>
					<div class="section_catalog_item_price"><?php echo $postitem['price']; ?></div>
					<div class="section_catalog_item_options">
						<ul>
							<li><?php echo $postitem['novizna']; ?></li>
							<li><?php echo $postitem['korobka']; ?></li>
							<li><?php echo $postitem['toplivo']; ?></li>
							<li><?php echo $postitem['obem_baka']; ?></li>
						</ul>
					</div>
					<div class="section_catalog_item_order">
						<button data-fancybox  data-src="#modal_order">Отправить заявку на рассчёт</button>
					</div>
				</div>

				<?php endif;
				 	$i++; 
				 	endforeach; 
				 	endif; ?>
				
			</div>
		</div>
	</div>
	<div class="section_catalog">
		<div class="container">
			<div class="section_catalog_wrap">

			<?php 
 if (is_array($posts)): 
	$i = 0;
	foreach ($posts as $d):
 ?>
 <?php
				if (@$d->ID) $d = $d->ID;
				$postitem = array(
					'title' => get_the_title($d),
					'image' => get_field('izobrazhenie', $d),
					'price' =>  get_field('czena', $d),
					'novizna' =>  get_field('novizna', $d),
					'korobka' =>  get_field('korobka', $d),
					'toplivo' =>  get_field('toplivo', $d),
					'obem_baka' =>  get_field('obem_baka', $d),
					'akczionnyj_tovar' =>  get_field('akczionnyj_tovar', $d),
				);
			?>
			<?php if(!$postitem['akczionnyj_tovar']): ?>
				<div class="section_catalog_item">
					<div class="section_catalog_item_img">
						<img src="<?php echo $postitem['image']; ?>" alt="">
					</div>
					<div class="section_catalog_item_title"><?php echo $postitem['title']; ?></div>
					<div class="section_catalog_item_price"><?php echo $postitem['price']; ?></div>
					<div class="section_catalog_item_options">
						<ul>
							<li><?php echo $postitem['novizna']; ?></li>
							<li><?php echo $postitem['korobka']; ?></li>
							<li><?php echo $postitem['toplivo']; ?></li>
							<li><?php echo $postitem['obem_baka']; ?></li>
						</ul>
					</div>
					<div class="section_catalog_item_order">
						<button data-fancybox  data-src="#modal_order">Отправить заявку на рассчёт</button>
					</div>
				</div>
				<?php endif;
				 	$i++; 
				 	endforeach; 
				 	endif; ?>
				
			</div>
		</div>
	</div>
	
	<?php

// проверяем есть ли данные в гибком содержании
if( have_rows('glavnaya',8) ):

     // перебираем данные
    while ( have_rows('glavnaya',8) ) : the_row();?>

       <?php if( get_row_layout() == 'форма' ):
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
