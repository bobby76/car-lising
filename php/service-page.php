<?php
/**
 * The base (and only) template
 *
	* Template Name: Страница сервиса
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
	<div class="section_main_service">
		<div class="container">
			<div class="section_main_service_title">
				<h1><?php echo $block_main['zagolovok'];?></h1>
				<div class="section_main_service_subtitle"><?php echo $block_main['podzagolovok'];?></div>
				<button data-fancybox  data-src="#modal_order"><?php echo $block_main['tekst_knopki'];?></button>
			</div>
		</div>
	</div>
	<?php elseif( get_row_layout() == 'условия' ):
		    $usloviya = get_sub_field('usloviya');
		    ?>
	<div class="section_lisingmore">
		<div class="container">
			<div class="section_title">
				<h2><?php echo $usloviya['zagolovok'];?></h2>
				<div class="section_subtitle"><?php echo $usloviya['podzagolovok'];?></div>
			</div>
			<div class="section_lisingmore_wrap">
					<?php if( $usloviya['uslovie'] ):
						$repeaters = $usloviya['uslovie'];
							foreach($repeaters as $repeater) {
								echo '
									<div class="section_lisingmore_item">
										<div class="section_lisingmore_item_img">
											<img src="'.$repeater["ikonka"].'" alt="">
										</div>
										<div class="section_lisingmore_item_text">
										'.$repeater["tekst"].'
										</div>
									</div>';
								};
								endif; ?>
			</div>
		</div>
	</div>
	<?php elseif( get_row_layout() == 'как_оформить' ):
		    $how = get_sub_field('kak_oformit');
		    ?>
	<div class="section_how">
		<div class="container">
			<div class="section_title">
				<h2><?php echo $how['zagolovok'];?></h2>
				<div class="section_subtitle"><?php echo $how['podzagolovok'];?></div>
			</div>
			<div class="section_how_wrap">
					<?php if( $how ):
						$repeaters = $how['punkty'];
							foreach($repeaters as $repeater) {
								echo '
									<div class="section_how_wrap_item">
										<div class="section_how_wrap_number">'.$repeater["czifra"].'</div>
										<div class="section_how_wrap_text">
											<p>'.$repeater["tekst"].'</p>
										</div>
									</div>';
								};
								endif; ?>
			</div>
		</div>
	</div>
	<?php elseif( get_row_layout() == 'каталог' ):
		    $katalog = get_sub_field('katalog');
		    ?>
	<div class="section_catalog">
		<div class="container">
			<div class="section_title">
				<h2><?php echo $katalog['zagolovok'];?></h2>
				<a href="/2399/catalog/"><?php echo $katalog['tekst_knopki'];?></a>
			</div>
			<div class="section_catalog_wrap">
					<?php if( $katalog['avtomobili'] ):
						$repeaters = $katalog['avtomobili'];
							foreach($repeaters as $repeater) {
								$postid = $repeater["avtomobil"];
								echo '							
									<div class="section_catalog_item">
										<div class="section_catalog_item_img">
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
	<?php elseif( get_row_layout() == 'калькулятор' ):
		    $calc = get_sub_field('kalkulyator');
		    ?>
	<div class="section_calc">
		<div class="container">
			<div class="section_title">
				<h2><?php echo $calc['zagolovok'];?></h2>
				<div class="section_subtitle"><?php echo $calc['podzagolovok'];?></div>
			</div>
			<div class="section_calc_wrap">
				<div class="wrapper">
					<div class="calculator">
							<div class="calculator__row">
								<div class="calculator__row_item">
									<label for="marka">Выбор автомобиля</label>
									<select name="marka" id="marka">
										<option value="" selected="">Выбор автомобиля</option>
										<option value="Mercedes-Benz">Mercedes-Benz</option>
										<option value="Volkswagen">Volkswagen</option>
										<option value="KIA">KIA</option>
										<option value="Hyundai">Hyundai</option>
										<option value="Toyoyta">Toyoyta</option>
										<option value="Skoda">Skoda</option>
										<option value="BMW">BMW</option>
										<option value="Geely">Geely</option>
										<option value="Audi">Audi</option>
										<option value="Porsche">Porsche</option>
										<option value="Chery">Chery</option>
										<option value="Volvo">Volvo</option>
										<option value="Mitsubishi">Mitsubishi</option>
										<option value="Subaru">Subaru</option>
										<option value="Ford">Ford</option>
									</select>
								</div>
								<div class="calculator__row_item">
									<label for="price">Стоимость автомобиля</label>
									<input type="text" id="price" class="calculator__price" value="3000000" required/>
								</div>
							</div>
							<div class="calculator__row">
								<div class="calculator__row_item">
									<label for="tip">Первый взнос, %<span class="tip-amount">15</span></label>
									<input type="range" min="15" max="50" value="15" step="5" class="calculator__tip" id="tip" required/>
								</div>
								<div class="calculator__row_item">
									<label for="time">Срок сделки, мес<span class="time-amount">12</span></label>
									<input type="range" min="12" max="60" value="12" step="12" class="calculator__time" id="time" required/>
								</div>
							</div>
							<div class="calculator__row">
								<div class="calculator__row_item">
									<label for="target">Цель использования</label>
									<select name="target" id="target">
										<option value="" selected="">Цель использования</option>
										<option value="Такси">Такси</option>
										<option value="Личное использование">Личное использование</option>
										<option value="Расширение автопарка">Расширение автопарка</option>
									</select>
									<div class="calculator__row_item_resultblock">
										<div class="calculator__row_item_resultblock_text">Ваш ежемесячный платёж:</div>
										<div class="calculator__row_item_resultblock_price"><span class="calculator__result" id="monthlypricevalue">248 625 ₽</span></div>
									</div>
								</div>
								<div class="calculator__row_item">
									<div class="calculator__row_item_form">
										<?php echo do_shortcode('[contact-form-7 id="d9159d2" title="Калькулятор"]');?>
									</div>
								</div>
							</div>

					</div>
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
	<?php elseif( get_row_layout() == 'галерея' ):
		    $gall = get_sub_field('galereya');
		    ?>
	<div class="section_gallery">
		<div class="container">
			<div class="section_title">
				<h2><?php echo $gall['zagolovok'];?></h2>
				<div class="section_subtitle"><?php echo $gall['podzagolovok'];?></div>
			</div>
			<div class="section_gallery_wrap">
				<?php if( $gall['fotografii'] ):
						$repeaters = $gall['fotografii'];
							foreach($repeaters as $repeater) {
								echo '
									<img src="'.$repeater["foto"].'" alt="">';
								};
								endif; ?>
				
			</div>
		</div>
	</div>
	<?php elseif( get_row_layout() == 'вопросы' ):
		    $faq = get_sub_field('voprosy');
		    ?>
	<div class="section_faq">
		<div class="container">
			<div class="section_title">
			<h2><?php echo $faq['zagolovok'];?></h2>
			</div>
			<div class="section_faq_wrap">
				<?php if( $faq['voprosy'] ):
						$repeaters = $faq['voprosy'];
							foreach($repeaters as $repeater) {
								echo '
									<div class="section_faq_wrap_item">
										<div class="section_faq_wrap_item_title">'.$repeater["vopros"].'</div>
										<div class="section_faq_wrap_item_text">
											<p>'.$repeater["otvet"].'</p>
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
	<div class="section_text">
		<div class="container">
			<div class="section_text_wrap">
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
