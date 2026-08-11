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
  <div class="s-top oter_top" style="background-image: url('<?php echo TEMPLATE_URL ?>/img/nd_img/reviews_title.jpg');">
    <div class="container">
      <p class="h1"><span class="lilac">Прайс</p>
			<div class="bread">
        <span>
          <a href="/"><span><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_2006_569)"><path d="M14.6667 3.816V1.33333C14.6667 0.965335 14.3687 0.666668 14 0.666668C13.6313 0.666668 13.3333 0.965335 13.3333 1.33333V2.91067L9.86467 0.570002C8.732 -0.193998 7.268 -0.193998 6.13533 0.570002L1.46867 3.71934C0.549333 4.34 0 5.37267 0 6.48267V12.6667C0 14.5047 1.49533 16 3.33333 16H5.33333C5.702 16 6 15.7013 6 15.3333V10C6 9.63267 6.29867 9.33334 6.66667 9.33334H9.33333C9.70133 9.33334 10 9.63267 10 10V15.3333C10 15.7013 10.298 16 10.6667 16H12.6667C14.5047 16 16 14.5047 16 12.6667V6.48267C16 5.42867 15.504 4.444 14.6667 3.816ZM14.6667 12.6667C14.6667 13.7693 13.7693 14.6667 12.6667 14.6667H11.3333V10C11.3333 8.89734 10.436 8 9.33333 8H6.66667C5.564 8 4.66667 8.89734 4.66667 10V14.6667H3.33333C2.23067 14.6667 1.33333 13.7693 1.33333 12.6667V6.48267C1.33333 5.81667 1.66267 5.19667 2.21467 4.82467L6.88133 1.67533C7.56133 1.21667 8.43867 1.21667 9.118 1.67533L13.7847 4.82467C14.3367 5.19667 14.666 5.81667 14.666 6.48267L14.6667 12.6667Z" fill="white"/></g><defs><clipPath id="clip0_2006_569"><rect width="16" height="16" fill="white"/></clipPath></defs></svg></span></a>
					<span class="divider">></span>
					<span class="kb_title">Прайс</span>
				</span>
			</div>
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
			<div class="text-center lilac h4">
				о центре
			</div>
			<div class="h1 text-center">
				Наша <span class="lilac">миссия</span> улучшить ваше качество жизни 
			</div>
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
					<div class="social">
						<a href=""><svg> <use xlink:href="#vk"></use></svg></a>
						<a href=""><svg> <use xlink:href="#wt"></use></svg></a>
						<a href=""><svg> <use xlink:href="#tg"></use></svg></a>
					</div>
					<p class="contacts-info">г. Воронеж, ул. Плехановская, д. 23</p>
					<p class="contacts-info"><a href="tel:+79999999999">+7 (999) 999 99 99</a></p>
					<p class="contacts-info"><a href="mailto:psy_center@mail.ru">psy_center@mail.ru</a></p>
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
									<div>
										<p class="h3 lilac">Образование</p>
										<div class="acc-text" style="display: none;">
											<ul>
												<?php if (!empty(get_field('obrazovanie')) && is_array(get_field('obrazovanie'))):?>
													<?php foreach (get_field('obrazovanie') as $item):?>
														<li><?php echo $item['period']; ?></li>
													<?php endforeach;?>
												<?php endif; ?>
												
												<!-- <li>2002 г. Воронежский Государственный Медицинский Университет им. Н.Н. Бурденко (психотерапия). Циклы переподготовки</li>
												<li>2001 г. Воронежский Государственный Медицинский Университет им. Н.Н. Бурденко (психиатрия-наркология). Циклы переподготовки</li>
												<li>2000 г. Воронежский Государственный Медицинский Университет им. Н.Н. Бурденко (психиатрия). Циклы переподготовки</li>
												<li>1999 г. Воронежский Государственный Медицинский Университет им. Н.Н. Бурденко (анестезиология-реаниматология). Циклы переподготовки</li>
												<li>1997 г. Воронежский Государственный Медицинский Университет им. Н.Н. Бурденко (терапия). Интернатура</li>
												<li>1996 г. Воронежский Государственный Медицинский Университет им. Н.Н. Бурденко (лечебное дело). Базовое образование</li> -->
											</ul>
										</div>
									</div>
									<div>
										<p class="h3 lilac">Трудовая деятельность</p>
										<div class="acc-text" style="display: none;">
											<ul>
												<li>2023 — н. в. «Центр Современной Педиатрии». Врач-психиатр, психотерапевт</li>
												<li>2021 — 2023. клиника «На Театральной». Врач-психотерапевт, врач-психиатр</li>
												<li>2021 — 2023. ООО «Скорая помощь 072». Заместитель главного врача, психиатр, психотерапевт</li>
												<li>2020 — н. в. Санкт-Петербург, Научно-Клинический Центр «Карповка». Главный врач, психиатр, психотерапевт, психиатр-нарколог</li>
												<li>2010 — 2017. ООО «Альтернатива +», Южно-Моравская, 29а. Врач психиатр, психотерапевт, психиатр - нарколог</li>
												<li>2001 — 2017. Медико-психотерапевтический центр, Московский проспект, 6. Врач психотерапевт, психиатр - нарколог</li>
												<li>1997 — 2007. БУЗ ВО «ГКБСМП №1», Проспект Патриотов, 23. Врач психиатр - нарколог, врач анестезиолог-реаниматолог ПИТ</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="text-center title-certificats"><p>Дипломы и сертификаты <span class="lilac">Бобонова Андрея Михайловича</span></p></div>
						<div class="certificats">
							<a href="<?php echo TEMPLATE_URL ?>/img/cert1.jpg" data-fancybox="gallery"><img src="<?php echo TEMPLATE_URL ?>/img/cert1.jpg" alt="certificat"></a>
							<a href="<?php echo TEMPLATE_URL ?>/img/cert2.jpg" data-fancybox="gallery"><img src="<?php echo TEMPLATE_URL ?>/img/cert2.jpg" alt="certificat"></a>
							<a href="<?php echo TEMPLATE_URL ?>/img/cert3.jpg" data-fancybox="gallery"><img src="<?php echo TEMPLATE_URL ?>/img/cert3.jpg" alt="certificat"></a>
							<a href="<?php echo TEMPLATE_URL ?>/img/cert4.jpg" data-fancybox="gallery"><img src="<?php echo TEMPLATE_URL ?>/img/cert4.jpg" alt="certificat"></a>
							<a href="<?php echo TEMPLATE_URL ?>/img/cert5.jpg" data-fancybox="gallery"><img src="<?php echo TEMPLATE_URL ?>/img/cert5.jpg" alt="certificat"></a>
							<a href="<?php echo TEMPLATE_URL ?>/img/cert6.jpg" data-fancybox="gallery"><img src="<?php echo TEMPLATE_URL ?>/img/cert6.jpg" alt="certificat"></a>
							<a href="<?php echo TEMPLATE_URL ?>/img/cert7.jpg" data-fancybox="gallery"><img src="<?php echo TEMPLATE_URL ?>/img/cert7.jpg" alt="certificat"></a>
							<a href="<?php echo TEMPLATE_URL ?>/img/cert8.jpg" data-fancybox="gallery"><img src="<?php echo TEMPLATE_URL ?>/img/cert8.jpg" alt="certificat"></a>
							<a href="<?php echo TEMPLATE_URL ?>/img/cert9.jpg" data-fancybox="gallery"><img src="<?php echo TEMPLATE_URL ?>/img/cert9.jpg" alt="certificat"></a>
							<a href="<?php echo TEMPLATE_URL ?>/img/cert10.jpg" data-fancybox="gallery"><img src="<?php echo TEMPLATE_URL ?>/img/cert10.jpg" alt="certificat"></a>
							<a href="<?php echo TEMPLATE_URL ?>/img/cert11.jpg" data-fancybox="gallery"><img src="<?php echo TEMPLATE_URL ?>/img/cert11.jpg" alt="certificat"></a>
							<a href="<?php echo TEMPLATE_URL ?>/img/cert12.jpg" data-fancybox="gallery"><img src="<?php echo TEMPLATE_URL ?>/img/cert12.jpg" alt="certificat"></a>
						</div>
					</div>
				<?php endwhile; ?>
			<?php wp_reset_postdata(); endif; ?>
		</div>
	</div>
<?php }
function show_otzyvy() { ?>
  <div class="s-reviews_page">
		<div class="container">
			<div id="reviews">
				<div class="text-center h4 lilac">отзывы</div>
				<div class="h1 text-center">Нам важно <span class="lilac">что говорят о нас</span> наши клиенты</div>
				<div class="b-reviews" >
					<?php echo get_field('otzivi', 44); ?>
					<div class="sw-app" data-app="d4700abffbcc805030ce8cda56e024dc"></div>
				</div>
			</div>
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