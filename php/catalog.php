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
						<li><a href="catalog-single.html">Легковые</a></li>
						<li><a href="catalog-single.html">Грузовые</a></li>
						<li><a href="catalog-single.html">Авто из ОАЭ</a></li>
						<li><a href="catalog-single.html">Спецтехника</a></li>
						<li><a href="catalog-single.html">Станки</a></li>
					</ul>
				</div>
			</div>
			<div class="section_catalog_filter_wrap">
				<div class="section_catalog_filter_title">Марка авто</div>
				<div class="section_catalog_filter_list">
					<ul>
						<li><a href="catalog-single.html">Audi</a></li>
						<li><a href="catalog-single.html">BMW</a></li>
						<li><a href="catalog-single.html">Cadillac</a></li>
						<li><a href="catalog-single.html">Chery</a></li>
						<li><a href="catalog-single.html">Ford</a></li>
						<li><a href="catalog-single.html">Газель</a></li>
						<li><a href="catalog-single.html">Geely</a></li>
						<li><a href="catalog-single.html">HAVAL</a></li>
						<li><a href="catalog-single.html">Hyundai</a></li>
						<li><a href="catalog-single.html">KIA</a></li>
						<li><a href="catalog-single.html">LADA</a></li>
						<li><a href="catalog-single.html">Lexus</a></li>
						<li><a href="catalog-single.html">Mercedes-Benz</a></li>
						<li><a href="catalog-single.html">Mitsubishi</a></li>
						<li><a href="catalog-single.html">Porsche</a></li>
						<li><a href="catalog-single.html">Renault</a></li>
						<li><a href="catalog-single.html">Skoda</a></li>
						<li><a href="catalog-single.html">Subaru</a></li>
						<li><a href="catalog-single.html">Tesla</a></li>
						<li><a href="catalog-single.html">Toyota</a></li>
						<li><a href="catalog-single.html">Volkswagen</a></li>
						<li><a href="catalog-single.html">Volvo</a></li>
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
			<?php if (is_array($cars)): ?>

<!-- Items Wrapper -->
<div class="doctor-row">
	<div class="container">
		<div class="row js-doctor-row">

			<?php
	$i      = 0;
	$total  = 8;
	$cur    = count($doctors) - $total;

				$hidden_class = 'hidden';

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


				<?php $i++; ?>

<?php endforeach; ?>
<?php endif; ?>
				<div class="section_actions_item">
					<div class="section_actions_item_label">Акция: скидка 10%</div>
					<div class="section_actions_item_image">
						<img src="https://justneed.site/2399/wp-content/themes/bk-leasing/img/action-img.jpg" alt="">
					</div>
					<div class="section_catalog_item_title">Mercedes-Benz E220d 4Matic Sport</div>
					<div class="section_catalog_item_price">141 000 руб в месяц</div>
					<div class="section_catalog_item_options">
						<ul>
							<li>новый</li>
							<li>автомат</li>
							<li>дизель</li>
							<li>2.0л</li>
						</ul>
					</div>
					<div class="section_catalog_item_order">
						<button data-fancybox  data-src="#modal_order">Отправить заявку на рассчёт</button>
					</div>
				</div>
				<div class="section_actions_item">
					<div class="section_actions_item_label">Акция: скидка 10%</div>
					<div class="section_actions_item_image">
						<img src="https://justneed.site/2399/wp-content/themes/bk-leasing/img/action-img.jpg" alt="">
					</div>
					<div class="section_catalog_item_title">Mercedes-Benz E220d 4Matic Sport</div>
					<div class="section_catalog_item_price">141 000 руб в месяц</div>
					<div class="section_catalog_item_options">
						<ul>
							<li>новый</li>
							<li>автомат</li>
							<li>дизель</li>
							<li>2.0л</li>
						</ul>
					</div>
					<div class="section_catalog_item_order">
						<button data-fancybox  data-src="#modal_order">Отправить заявку на рассчёт</button>
					</div>
				</div>
				<div class="section_actions_item">
					<div class="section_actions_item_label">Акция: скидка 10%</div>
					<div class="section_actions_item_image">
						<img src="https://justneed.site/2399/wp-content/themes/bk-leasing/img/action-img.jpg" alt="">
					</div>
					<div class="section_catalog_item_title">Mercedes-Benz E220d 4Matic Sport</div>
					<div class="section_catalog_item_price">141 000 руб в месяц</div>
					<div class="section_catalog_item_options">
						<ul>
							<li>новый</li>
							<li>автомат</li>
							<li>дизель</li>
							<li>2.0л</li>
						</ul>
					</div>
					<div class="section_catalog_item_order">
						<button data-fancybox  data-src="#modal_order">Отправить заявку на рассчёт</button>
					</div>
				</div>
				<div class="section_actions_item">
					<div class="section_actions_item_label">Акция: скидка 10%</div>
					<div class="section_actions_item_image">
						<img src="https://justneed.site/2399/wp-content/themes/bk-leasing/img/action-img.jpg" alt="">
					</div>
					<div class="section_catalog_item_title">Mercedes-Benz E220d 4Matic Sport</div>
					<div class="section_catalog_item_price">141 000 руб в месяц</div>
					<div class="section_catalog_item_options">
						<ul>
							<li>новый</li>
							<li>автомат</li>
							<li>дизель</li>
							<li>2.0л</li>
						</ul>
					</div>
					<div class="section_catalog_item_order">
						<button data-fancybox  data-src="#modal_order">Отправить заявку на рассчёт</button>
					</div>
				</div>
				<div class="section_actions_item">
					<div class="section_actions_item_label">Акция: скидка 10%</div>
					<div class="section_actions_item_image">
						<img src="https://justneed.site/2399/wp-content/themes/bk-leasing/img/action-img.jpg" alt="">
					</div>
					<div class="section_catalog_item_title">Mercedes-Benz E220d 4Matic Sport</div>
					<div class="section_catalog_item_price">141 000 руб в месяц</div>
					<div class="section_catalog_item_options">
						<ul>
							<li>новый</li>
							<li>автомат</li>
							<li>дизель</li>
							<li>2.0л</li>
						</ul>
					</div>
					<div class="section_catalog_item_order">
						<button data-fancybox  data-src="#modal_order">Отправить заявку на рассчёт</button>
					</div>
				</div>
				<div class="section_actions_item">
					<div class="section_actions_item_label">Акция: скидка 10%</div>
					<div class="section_actions_item_image">
						<img src="https://justneed.site/2399/wp-content/themes/bk-leasing/img/action-img.jpg" alt="">
					</div>
					<div class="section_catalog_item_title">Mercedes-Benz E220d 4Matic Sport</div>
					<div class="section_catalog_item_price">141 000 руб в месяц</div>
					<div class="section_catalog_item_options">
						<ul>
							<li>новый</li>
							<li>автомат</li>
							<li>дизель</li>
							<li>2.0л</li>
						</ul>
					</div>
					<div class="section_catalog_item_order">
						<button data-fancybox  data-src="#modal_order">Отправить заявку на рассчёт</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section_catalog">
		<div class="container">
			<div class="section_catalog_wrap">
				<div class="section_catalog_item">
					<div class="section_catalog_item_img">
						<img src="https://justneed.site/2399/wp-content/themes/bk-leasing/img/car-1.jpg" alt="">
					</div>
					<div class="section_catalog_item_title">Mercedes-Benz E220d 4Matic Sport</div>
					<div class="section_catalog_item_price">141 000 руб в месяц</div>
					<div class="section_catalog_item_options">
						<ul>
							<li>новый</li>
							<li>автомат</li>
							<li>дизель</li>
							<li>2.0л</li>
						</ul>
					</div>
					<div class="section_catalog_item_order">
						<button data-fancybox  data-src="#modal_order">Отправить заявку на рассчёт</button>
					</div>
				</div>
				<div class="section_catalog_item">
					<div class="section_catalog_item_img">
						<img src="https://justneed.site/2399/wp-content/themes/bk-leasing/img/car-1.jpg" alt="">
					</div>
					<div class="section_catalog_item_title">Mercedes-Benz E220d 4Matic Sport</div>
					<div class="section_catalog_item_price">141 000 руб в месяц</div>
					<div class="section_catalog_item_options">
						<ul>
							<li>новый</li>
							<li>автомат</li>
							<li>дизель</li>
							<li>2.0л</li>
						</ul>
					</div>
					<div class="section_catalog_item_order">
						<button data-fancybox  data-src="#modal_order">Отправить заявку на рассчёт</button>
					</div>
				</div>
				<div class="section_catalog_item">
					<div class="section_catalog_item_img">
						<img src="https://justneed.site/2399/wp-content/themes/bk-leasing/img/car-1.jpg" alt="">
					</div>
					<div class="section_catalog_item_title">Mercedes-Benz E220d 4Matic Sport</div>
					<div class="section_catalog_item_price">141 000 руб в месяц</div>
					<div class="section_catalog_item_options">
						<ul>
							<li>новый</li>
							<li>автомат</li>
							<li>дизель</li>
							<li>2.0л</li>
						</ul>
					</div>
					<div class="section_catalog_item_order">
						<button data-fancybox  data-src="#modal_order">Отправить заявку на рассчёт</button>
					</div>
				</div>
				<div class="section_catalog_item">
					<div class="section_catalog_item_img">
						<img src="https://justneed.site/2399/wp-content/themes/bk-leasing/img/car-1.jpg" alt="">
					</div>
					<div class="section_catalog_item_title">Mercedes-Benz E220d 4Matic Sport</div>
					<div class="section_catalog_item_price">141 000 руб в месяц</div>
					<div class="section_catalog_item_options">
						<ul>
							<li>новый</li>
							<li>автомат</li>
							<li>дизель</li>
							<li>2.0л</li>
						</ul>
					</div>
					<div class="section_catalog_item_order">
						<button data-fancybox  data-src="#modal_order">Отправить заявку на рассчёт</button>
					</div>
				</div>
				<div class="section_catalog_item">
					<div class="section_catalog_item_img">
						<img src="https://justneed.site/2399/wp-content/themes/bk-leasing/img/car-1.jpg" alt="">
					</div>
					<div class="section_catalog_item_title">Mercedes-Benz E220d 4Matic Sport</div>
					<div class="section_catalog_item_price">141 000 руб в месяц</div>
					<div class="section_catalog_item_options">
						<ul>
							<li>новый</li>
							<li>автомат</li>
							<li>дизель</li>
							<li>2.0л</li>
						</ul>
					</div>
					<div class="section_catalog_item_order">
						<button data-fancybox  data-src="#modal_order">Отправить заявку на рассчёт</button>
					</div>
				</div>
				<div class="section_catalog_item">
					<div class="section_catalog_item_img">
						<img src="https://justneed.site/2399/wp-content/themes/bk-leasing/img/car-1.jpg" alt="">
					</div>
					<div class="section_catalog_item_title">Mercedes-Benz E220d 4Matic Sport</div>
					<div class="section_catalog_item_price">141 000 руб в месяц</div>
					<div class="section_catalog_item_options">
						<ul>
							<li>новый</li>
							<li>автомат</li>
							<li>дизель</li>
							<li>2.0л</li>
						</ul>
					</div>
					<div class="section_catalog_item_order">
						<button data-fancybox  data-src="#modal_order">Отправить заявку на рассчёт</button>
					</div>
				</div>
				<div class="section_catalog_item">
					<div class="section_catalog_item_img">
						<img src="https://justneed.site/2399/wp-content/themes/bk-leasing/img/car-1.jpg" alt="">
					</div>
					<div class="section_catalog_item_title">Mercedes-Benz E220d 4Matic Sport</div>
					<div class="section_catalog_item_price">141 000 руб в месяц</div>
					<div class="section_catalog_item_options">
						<ul>
							<li>новый</li>
							<li>автомат</li>
							<li>дизель</li>
							<li>2.0л</li>
						</ul>
					</div>
					<div class="section_catalog_item_order">
						<button data-fancybox  data-src="#modal_order">Отправить заявку на рассчёт</button>
					</div>
				</div>
				<div class="section_catalog_item">
					<div class="section_catalog_item_img">
						<img src="https://justneed.site/2399/wp-content/themes/bk-leasing/img/car-1.jpg" alt="">
					</div>
					<div class="section_catalog_item_title">Mercedes-Benz E220d 4Matic Sport</div>
					<div class="section_catalog_item_price">141 000 руб в месяц</div>
					<div class="section_catalog_item_options">
						<ul>
							<li>новый</li>
							<li>автомат</li>
							<li>дизель</li>
							<li>2.0л</li>
						</ul>
					</div>
					<div class="section_catalog_item_order">
						<button data-fancybox  data-src="#modal_order">Отправить заявку на рассчёт</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section_order">
		<div class="container">
			<div class="section_order_wrap">
				<div class="section_order_text">
					<div class="section_title">
						<h2>Остались вопросы?</h2>
						<div class="section_order_subtitle">
							<p>Отправьте нам ваш вопрос, и мы
								с удовольствием ответим на него
								в течение дня</p>
						</div>
					</div>
					<div class="section_order_subtext">
						<div class="section_order_subtext_text">
							<p>или свяжитесь с нами 
								в одном из мессенджеров</p>
						</div>
						<div class="section_order_subtext_links">
							<a href="<?php the_field('telegram', 'option'); ?>"><img src="https://justneed.site/2399/wp-content/themes/bk-leasing/img/tg.svg" alt=""></a>
							<a href="<?php the_field('vatsap', 'option'); ?>"><img src="https://justneed.site/2399/wp-content/themes/bk-leasing/img/wh.svg" alt=""></a>
						</div>
					</div>
				</div>
				<div class="section_order_form">
					<form action="">
						<div class="section_order_form_row">
							<input type="text" placeholder="Ваше имя">
							<input type="phone" placeholder="Ваш телефон">
						</div>
						<div class="section_order_form_row">
							<textarea placeholder="Ваш вопрос"></textarea>
						</div>
						<div class="section_order_form_row">
							<button type="submit">Отправить</button>
						</div>
					</form>
				</div>
			</div>
			
		</div>
	</div>



	<?php get_footer();?>
