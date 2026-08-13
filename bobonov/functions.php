<?php function show_social() { ?>
  <div class="social">
    <?php if (get_field('vk', FRONT_PAGE)): ?>
      <a rel="nofollow" target="_blank" href="<?php the_field('vk', FRONT_PAGE); ?>"><svg><use xlink:href="#vk" /></svg></a>
    <?php endif; ?>
    <?php if (get_field('whatsapp', FRONT_PAGE)): ?>
      <a rel="nofollow" target="_blank" href="<?php the_field('whatsapp', FRONT_PAGE); ?>"><svg><use xlink:href="#wt" /></svg></svg></a>
    <?php endif; ?>
    <?php if (get_field('telegram', FRONT_PAGE)): ?>
      <a rel="nofollow" target="_blank" href="<?php the_field('telegram', FRONT_PAGE); ?>"><svg><use xlink:href="#tg" /></svg></a>
    <?php endif; ?>
  </div>
<?php }

function show_map() { if ($map = get_field('map', FRONT_PAGE)) echo $map; }

function show_contacts() { ?>
  <?php if (get_field('adres', FRONT_PAGE)): ?>
    <p class="contacts-info"><?php the_field('adres', FRONT_PAGE); ?></p>
  <?php endif; ?>
  <?php if (get_field('number', FRONT_PAGE)): ?>
    <p class="contacts-info"><a href="tel:<?php echo merge_numbers(get_field('number', FRONT_PAGE)); ?>"><?php the_field('number', FRONT_PAGE); ?></a></p>
  <?php endif; ?>
  <?php if (get_field('email', FRONT_PAGE)): ?>
    <p class="contacts-info"><a href="mailto:<?php the_field('email', FRONT_PAGE); ?>"><?php the_field('email', FRONT_PAGE); ?></a></p>
  <?php endif; ?>
<?php }

function show_page_title() { ?>
	<?php $bg_img_title = ($item_img = get_field('izobrazhenie_v_shapke')) ? $item_img['url'] : TEMPLATE_URL . '/img/nd_img/specials_title.jpg'; ?>
  <div class="s-top oter_top" style="background-image: url('<?php echo $bg_img_title; ?>');">
    <div class="container">
      <p class="h1"><span class="lilac"><?php the_title(); ?></p>
			<?php
			if (is_singular('services') && $sub_title_text = get_field('sub_title_text')) echo '<p class="sub_title_text">' . $sub_title_text . '</p>';
			else breadcrumbs();
			?>
			<a data-fancybox data-src="#popup" href="javascript:;" class="btn">Записаться</a>
		</div>
	</div>
<?php }

function show_price() { ?>
  <div class="s-price_page">
		<div class="container">
			<div class="text-center lilac h4">прайс</div>
			<div class="h1 text-center"><span class="lilac">Цены</span> на услуги</div>
			<div class="prices_box">
				<div class="price_item">
					<p class="price_title">Индивидуальная терапия</p>
					<p class="text_dec">Что происходит на сессии:</p>
					<ul class="procedur_list">
						<li class="procedur_item"><p>Разбираем вашу конкретную ситуацию без воды</p></li>
						<li class="procedur_item"><p>Выявляем, что именно держит вас в напряжении</p></li>
						<li class="procedur_item"><p>Даю техники, которые можно применить уже сегодня</p></li>
					</ul>
					<p class="procedur_time">Продолжительность: 45 минут</p>
					<p class="price">от 5 000 ₽</p>
					<a href="#" class="price_link">Записаться на прием</a>
				</div>
				<div class="price_item">
					<p class="price_title">Индивидуальная терапия</p>
					<p class="text_dec">Что происходит на сессии:</p>
					<ul class="procedur_list">
						<li class="procedur_item"><p>Разбираем вашу конкретную ситуацию без воды</p></li>
						<li class="procedur_item"><p>Выявляем, что именно держит вас в напряжении</p></li>
						<li class="procedur_item"><p>Даю техники, которые можно применить уже сегодня</p></li>
					</ul>
					<p class="procedur_time">Продолжительность: 45 минут</p>
					<p class="price">от 5 000 ₽</p>
					<a href="#" class="price_link">Записаться на прием</a>
				</div>
				<div class="price_item">
					<p class="price_title">Индивидуальная терапия</p>
					<p class="text_dec">Что происходит на сессии:</p>
					<ul class="procedur_list">
						<li class="procedur_item"><p>Разбираем вашу конкретную ситуацию без воды</p></li>
						<li class="procedur_item"><p>Выявляем, что именно держит вас в напряжении</p></li>
						<li class="procedur_item"><p>Даю техники, которые можно применить уже сегодня</p></li>
					</ul>
					<p class="procedur_time">Продолжительность: 45 минут</p>
					<p class="price">от 5 000 ₽</p>
					<a href="#" class="price_link">Записаться на прием</a>
				</div>
			</div>
		</div>
	</div>
<?php }

function show_about() { ?>
  <div class="s-about s-about_page" id="about">
		<div class="container">
			<div class="text-center lilac h4">о центре</div>
			<div class="h1 text-center">Наша <span class="lilac">миссия</span> улучшить ваше качество жизни</div>
			<div class="b-about">
				<div class="text-about">
					<p class="lilac"><?php the_field('o_centre_top', 39); ?></p>
					<p><?php the_field('o_centre_bottom', 39); ?></p>
				</div>
			</div>
		</div>
	</div>
<?php }

function show_contacts_page() { ?>
  <div class="contacts_page">
		<div class="container">
			<div class="contacts_left_box">
				<div class="left_box_top">
					<p class="contacts_title">Сделайте первый шаг</p>
					<p class="contacts_desc">Задайте вопрос, который вас беспокоит, или запишитесь на консультацию в удобное время.</p>
				</div>
				<div class="left_box_bottom">
					<?php
						show_social();
						show_contacts();
					?>
				</div>
			</div>
			<div class="contacts_right_box">
				<div class="form_box">
					<p class="text-center h2 lilac">Запись на прием</p>
					<form id="popup-form" action="/" method="POST">
						<div class="form-flex">
							<p><input type="text" required name="name" class="input-text" placeholder="Имя"></p>
							<p><input type="tel" required name="phone" class="input-text" placeholder="Телефон"></p>
						</div>
						<textarea name="comment" class="input-text" placeholder="Что вас беспокоит?"></textarea>
						<input type="text" name="docs" class="input-text" placeholder="К кому вы хотели бы записаться?">					
						<div class="submit_box">
							<label class="input-label">
								<input type="checkbox" class="input-check" name="check">
								<span>Нажимая на кнопку “Записаться”, я даю свое согласие на обработку персональных данных</span>
							</label>
							<div class="text-center">
								<input type="submit" class="btn-lilac" value="Отправить">
							</div>
						</div>
						<!-- <input type="hidden" name="recaptcha_response" id="recaptchaResponse"> -->
					</form>
				</div>
			</div>
		</div>
	</div>
<?php }

function show_obrazovanie() {
	if (!empty(get_field('obrazovanie')) && is_array(get_field('obrazovanie'))):?>
		<div>
			<p class="h3 lilac">Образование</p>
			<div class="acc-text" style="display: none;">
				<ul>
					<?php foreach (get_field('obrazovanie') as $item):?>
						<li><?php echo $item['period']; ?></li>
					<?php endforeach;?>
				</ul>
			</div>
		</div>
	<?php endif;
}

function show_trudovaya_deyatelnost() {
	if (!empty(get_field('trudovaya_deyatelnost')) && is_array(get_field('trudovaya_deyatelnost'))):?>
		<div>
			<p class="h3 lilac">Трудовая деятельность</p>
			<div class="acc-text" style="display: none;">
				<ul>
					<?php foreach (get_field('trudovaya_deyatelnost') as $item):?>
						<li><?php echo $item['deyatelnost']; ?></li>
					<?php endforeach;?>
				</ul>
			</div>
		</div>
	<?php endif;
}

function show_diplomi($name) {
  $diplomi = get_field('diplomi');
	if ($diplomi): ?>
		<div class="text-center title-certificats"><p>Дипломы и сертификаты <span class="lilac"><?php echo $name; ?></span></p></div>
		<div class="certificats">
			<?php foreach($diplomi as $item): ?>
				<a href="<?php echo $item['url']; ?>" data-fancybox="gallery"><img src="<?php echo $item['url']; ?>" alt="<?php echo $item['alt']; ?>"></a>
			<?php endforeach; ?>
		</div>
	<?php endif;
}

function show_spetsialisty() { ?>
  <div class="s_specialist s-specialists_page">
		<div class="container">
			<?php 
			$query = new WP_Query(['post_type' => 'specials','posts_per_page' => -1,]);
			if ($query->have_posts()): ?>
				<?php while ($query->have_posts()): $query->the_post(); ?>
					<div class="specialist">
						<div class="s_specialist_inner">
							<div class="specialist_foto"><?the_post_thumbnail();?></div>
							<div class="spec-info">
								<p class="lilac h1 text-center name"><?php the_title(); ?></p>
								<p class="text-center lilac level"><?php the_field('specializaciya'); ?></p>
								<p class="text-center stazh">Стаж: <?php the_field('stazh'); ?></p>
								<p class="lilac specializations">Работает с: <?php the_field('work_with'); ?></p>
								<p><?php the_content(); ?></p>
								<div class="b-accordion">
									<?php show_obrazovanie(); show_trudovaya_deyatelnost(); ?>
								</div>
							</div>
						</div>
						<?php show_diplomi(get_the_title()); ?>
					</div>
				<?php endwhile; ?>
			<?php wp_reset_postdata(); endif; ?>
		</div>
	</div>
<?php }

function show_spetsialisty_front() {
	$query = new WP_Query(['post_type' => 'specials','posts_per_page' => -1,]);
	$count = 0;
	if ($query->have_posts()): ?>
		<?php while ($query->have_posts()): $query->the_post(); $count++; ?>
			<div class="b-specialist<?php echo $count % 2 === 0 ? ' spec-2 ' : ''; ?>">
				<div class="spec-photo text-center">
					<?php the_post_thumbnail(); ?>
					<p class="lilac h3"><?php the_title(); ?></p>
					<a data-fancybox data-src="#popup" href="javascript:;" class="btn-lilac">Записаться</a>
				</div>
				<div class="spec-info">
					<p class="lilac h3"><?php the_title(); ?></p>
					<p><?php the_field('specializaciya'); ?></p>
					<p>Стаж: <?php the_field('stazh'); ?></p>
					<p class="lilac">Работает с: <?php the_field('work_with'); ?></p>
					<p><?php the_content(); ?></p>
					<div class="b-accordion">
						<?php show_obrazovanie(); show_trudovaya_deyatelnost(); ?>
					</div>
				</div>
			</div>
			<?php show_diplomi(get_the_title()); ?>
		<?php endwhile; ?>
	<?php wp_reset_postdata(); endif; ?>
<?php }

function show_reviews_box() { ?>
	<div id="reviews">
		<div class="text-center h4 lilac">отзывы</div>
		<div class="h1 text-center">Нам важно <span class="lilac">что говорят о нас</span> наши клиенты</div>
		<div class="b-reviews" >
			<?php echo get_field('otzivi', 44); ?>
			<div class="sw-app" data-app="d4700abffbcc805030ce8cda56e024dc"></div>
		</div>
	</div>
<?php }

function show_otzyvy() { ?>
  <div class="s-reviews_page">
		<div class="container">
			<?php show_reviews_box(); ?>
		</div>
	</div>
<?php }

function show_bottom_contacts() { ?>
	<div class="s-contacts" id="contacts">
		<div class="b-map"><?php show_map(); ?></div>		
		<div class="b-contacts">
			<p class="h1">Контакты</p>
			<?php show_contacts(); ?>
			<?php show_social(); ?>
		</div>
	</div>
<?php }

function show_feedback() { ?>
	<div class="s-feedback" id="feedback">
		<div class="container">
			<div class="b-feedback">
				<p class="h1"><span class="lilac">Записаться</span> на прием</p>
				<form id="feedback-form" action="/" method="POST">
					<div class="form-flex">
						<p><input type="text" required name="name" class="input-text" placeholder="Имя"></p>
						<p><input type="tel" required name="phone" class="input-text" placeholder="Телефон"></p>
					</div>
					<textarea name="comment" class="input-text" placeholder="Что вас беспокоит?"></textarea>
					<input type="text" name="docs" class="input-text" placeholder="К кому вы хотели бы записаться?">					
					<label class="input-label">
						<input type="checkbox" class="input-check" name="check">
						<span>Нажимая на кнопку “Записаться”, я даю свое согласие на обработку персональных данных</span>
					</label>
					<input type="submit" class="btn-round" value="Записаться на прием">
					<!-- <input type="hidden" name="recaptcha_response" id="recaptchaResponse"> -->
				</form>
			</div>
		</div>
	</div>
<?php }

function show_raspisanie() {
	$query = new WP_Query(['post_type' => 'specials','posts_per_page' => -1,]);
	if ($query->have_posts()): ?>
	<?php while ($query->have_posts()): $query->the_post();
		$formats_priema = get_field('formats_priema'); ?>
	<div>
		<div class="time-spec">
			<div class="time-photo"><?php the_post_thumbnail(); ?></div>
			<div class="spec-title">
				<p class="h2"><?php the_title(); ?></p>
				<p><?php the_field('specializaciya'); ?></p>
			</div>
		</div>
		<div class="spec-timetable">
			<?php if (!empty($formats_priema) && is_array($formats_priema)): ?>
				<ul>
					<?php foreach($formats_priema as $item): ?>
						<li><?php echo $item['format_priema']; ?> <span><?php echo $item['time_priema']; ?></span></li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>
		</div>
	</div>
	<?php endwhile; ?>
	<?php wp_reset_postdata(); endif; ?>
<?php }