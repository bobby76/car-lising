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
				<li>Каталог автомобилей</li>
			</ul>
		</div>

	</div>
	<div class="section_main_catalog">
		<div class="container">
			<div class="section_main_catalog_title">
				<h1>Каталог автомобилей</h1>
			</div>
		</div>
	</div>
	<div class="section_catalog_filter">
		<div class="container">
			<div class="section_catalog_filter_wrap">
				<div class="section_catalog_filter_title">Вид транспорта</div>
				<div class="section_catalog_filter_list">
					<ul>
						<li><a href="legkovye/">Легковые</a></li>
						<li><a href="gruzovye">Грузовые</a></li>
						<li><a href="avto-iz-oae">Авто из ОАЭ</a></li>
						<li><a href="specztehnika">Спецтехника</a></li>
						<li><a href="stanki">Станки</a></li>
					</ul>
				</div>
			</div>
			<div class="section_catalog_filter_wrap">
				<div class="section_catalog_filter_title">Марка авто</div>
				<div class="section_catalog_filter_list">
					<ul>
						<li><a href="audi">Audi</a></li>
						<li><a href="bmw">BMW</a></li>
						<li><a href="cadillac">Cadillac</a></li>
						<li><a href="chery">Chery</a></li>
						<li><a href="ford">Ford</a></li>
						<li><a href="gazel">Газель</a></li>
						<li><a href="geely">Geely</a></li>
						<li><a href="haval">HAVAL</a></li>
						<li><a href="hyundai">Hyundai</a></li>
						<li><a href="kia">KIA</a></li>
						<li><a href="lada">LADA</a></li>
						<li><a href="lexus">Lexus</a></li>
						<li><a href="mercedes-benz">Mercedes-Benz</a></li>
						<li><a href="mitsubishi">Mitsubishi</a></li>
						<li><a href="porsche">Porsche</a></li>
						<li><a href="renault">Renault</a></li>
						<li><a href="skoda">Skoda</a></li>
						<li><a href="subaru">Subaru</a></li>
						<li><a href="tesla">Tesla</a></li>
						<li><a href="toyota">Toyota</a></li>
						<li><a href="volkswagen">Volkswagen</a></li>
						<li><a href="volvo">Volvo</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="section_actions">
		<div class="container">
			<div class="section_actions_title">
				<h2>Акционные предложения</h2>
			</div>
			<div class="section_actions_wrap">

			<?php
				$cars = get_posts(array(
					'post_type'       => 'product',
					'posts_per_page'  => -1,
					'orderby'=>'title',
					'order'             => 'ASC',
					'post_status'     => 'publish'
				));
			?>
			<?php if (is_array($cars)): 
				$i = 0;
				foreach ($cars as $d):
			?>

			<?php
				if (@$d->ID) $d = $d->ID;
				$car = array(
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
			<?php if($car['akczionnyj_tovar']): ?>


				<div class="section_actions_item">
					<div class="section_actions_item_label">Акция: скидка 10%</div>
					<div class="section_actions_item_image">
						<img src="<?php echo $car['image']; ?>" alt="">
					</div>
					<div class="section_catalog_item_title"><?php echo $car['title']; ?></div>
					<div class="section_catalog_item_price"><?php echo $car['price']; ?></div>
					<div class="section_catalog_item_options">
						<ul>
							<li><?php echo $car['novizna']; ?></li>
							<li><?php echo $car['korobka']; ?></li>
							<li><?php echo $car['toplivo']; ?></li>
							<li><?php echo $car['obem_baka']; ?></li>
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
				$carsc = get_posts(array(
					'post_type'       => 'product',
					'posts_per_page'  => -1,
					'orderby'=>'title',
					'order'             => 'ASC',
					'post_status'     => 'publish'
				));
			?>
			<?php if (is_array($carsc)): 
				$i = 0;
				foreach ($carsc as $d):
			?>

			<?php
				if (@$d->ID) $d = $d->ID;
				$carc = array(
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
			<?php if(!$carc['akczionnyj_tovar']): ?>
				<div class="section_catalog_item">
					<div class="section_catalog_item_img">
					<img src="<?php echo $carc['image']; ?>" alt="">
					</div>
					<div class="section_catalog_item_title"><?php echo $carc['title']; ?></div>
					<div class="section_catalog_item_price"><?php echo $carc['price']; ?></div>
					<div class="section_catalog_item_options">
						<ul>
							<li><?php echo $carc['novizna']; ?></li>
							<li><?php echo $carc['korobka']; ?></li>
							<li><?php echo $carc['toplivo']; ?></li>
							<li><?php echo $carc['obem_baka']; ?></li>
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
<?php	// проверяем есть ли данные в гибком содержании
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
