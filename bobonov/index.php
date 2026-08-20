<?php /* Template Name: Главная */ get_header(); ?>
	<div class="s-top">
		<div class="container">
			<h1><span class="lilac">Психологический центр</span>в Воронеже</h1>
			<div class="main-contacts">
				<?php if (get_field('number', FRONT_PAGE)): ?>
					<p><span>телефон</span><a href="tel:<?php echo merge_numbers(the_field('number', FRONT_PAGE)); ?>"><?php the_field('number', FRONT_PAGE); ?></a></p>
				<?php endif; ?>
				<?php if (get_field('email', FRONT_PAGE)): ?>
					<p><span>email</span><a href=""><?php the_field('email', FRONT_PAGE); ?></a></p>
				<?php endif; ?>
			</div>
			<?php show_social(); ?>
		</div>
		<div class="garanties">
			<div class="container">
				<p class="garanties-title">Гарантируем ответственность в психологии и психотерапии.</p>
				<p>Мы обеспечиваем конфиденциальность и комфорт.</p>
			</div>
		</div>
	</div>
	<div class="s-about" id="about">
		<div class="container">
			<div class="text-center lilac h4">о центре</div>
			<div class="h1 text-center">Наша <span class="lilac">миссия</span> улучшить ваше качество жизни </div>
			<div class="b-about">
				<div class="img-about">
					<img src="<?php echo TEMPLATE_URL ?>/img/about.jpg" alt="">
				</div>
				<div class="text-about">
					<p class="lilac"><?php the_field('o_centre_top', 39); ?></p>
					<p><?php the_field('o_centre_bottom', 39); ?></p>
					<a data-fancybox data-src="#popup" href="javascript:;" class="btn-round">Записаться на прием</a>
				</div>
			</div>
		</div>
		<div class="progress">
			<div class="text-center"><span class="h1 lilac">более 100</span>довольных клиентов</div>
			<div class="text-center"><span class="h1 lilac">более 25 лет</span>профессионального опыта</div>
			<div class="text-center">
				<span class="h1 lilac">более 200</span>положительных отзывов</div>
		</div>
	</div>
	<div class="s-directions">
		<div class="container">
			<div class="directions-title">
				<p class="lilac h4">направления деятельности</p>
				<p class="h1"><span class="lilac">Что можно обсудить</span>с психологом</p>
			</div>
			<div class="activities">
				<div>
					<p class="lilac">Проблемы в личной жизни</p>Страхи и переживания по поводу личной жизни<br>Проблемы в отношениях
				</div>
				<div>
					<p class="lilac">Проблемы в карьере</p>Отсутствие карьерных перспектив<br>Проблемы в отношениях с коллегами и начальством
				</div>
				<div>
					<p class="lilac">Низкая самооценка</p>Нет четких границ<br>Отсутствие внутренней опоры
				</div>
			</div>
		</div>
	</div>
	<div class="s-results">
		<p class="results-decor text-uppercase">результаты</p>
		<div class="container">
			<p class="lilac text-center h4">результаты работы</p>
			<p class="h1 text-center"><span class="lilac">В процессе терапии</span> вы сможете<p>
			<div class="b-results">
				<div class="h3"><p class="text-uppercase">Решить</p> проблемы в личной жизни</div>
				<div class="h3"><p class="text-uppercase">Обрести</p> гармонию и спокойствие</div>
				<div class="h3"><p class="text-uppercase">СПРАВИТЬСЯ</p> с тревожностью</div>
			</div>
		</div>
	</div>
	<div class="s-specialists" id="specialists">
		<div class="spec-decor"><div></div></div>
		<div class="container">
			<p class="text-center lilac h4">о психологах</p>
			<p class="h1 text-center">Прием ведут  <span class="lilac">квалифицированные специалисты</span></p>
			<?php show_spetsialisty_front(); ?>
		</div>
	</div>
	<div class="s-faq" id="faq">
		<div class="container">
			<p class="text-center h4 lilac">То, что важно знать</p>
			<p class="h1 text-center"><span class="lilac">Вопросы</span> клиентов</p>
			<div class="b-accordion">
				<div>
					<p class="h2">Как понять, что <span class="lilac">помощь</span> наших специалистов вам <span class="lilac">подойдет</span>?</p>
					<div class="acc-text">Вы всегда можете проконсультироваться с специалистом позвонив по телефону или написав на почту. Также мы всегда рекомендуем посетить понравившегося терапевта лично, т.к. только при личном контакте можно определить степень комфорта на консультации, которая влияет на качество дальнейшей терапии.</div>
				</div>
				<div>
					<p class="h2">Как <span class="lilac">проходит</span> консультация?</p>
					<div class="acc-text">Вы всегда можете проконсультироваться с специалистом позвонив по телефону или написав на почту. Также мы всегда рекомендуем посетить понравившегося терапевта лично, т.к. только при личном контакте можно определить степень комфорта на консультации, которая влияет на качество дальнейшей терапии.</div>
				</div>
				<div>
					<p class="h2">Что нужно знать перед <span class="lilac">первой консультацией</span>?</p>
					<div class="acc-text">Вы всегда можете проконсультироваться с специалистом позвонив по телефону или написав на почту. Также мы всегда рекомендуем посетить понравившегося терапевта лично, т.к. только при личном контакте можно определить степень комфорта на консультации, которая влияет на качество дальнейшей терапии.</div>
				</div>
			</div>
			<?php show_reviews_box(); ?>
		</div>
	</div>
	<div class="s-price" id="price">
		<div class="container">
			<div class="text-center lilac h4">прайс</div>
			<div class="h1 text-center"><span class="lilac">Цены</span> на услуги</div>
			<div class="b-prices">
				<?php $price_front_page = get_field('price_front_page');
					if(!empty($price_front_page) && is_array($price_front_page)):
						foreach($price_front_page as $item): ?>
							<div class="text-center">
								<p class="h3 lilac"><?php echo $item['price_front_title']; ?></p>
								<p>Продолжительность: <?php echo $item['price_front_time']?></p>
								<p class="h3 lilac"><?php echo $item['price_front_cena']?></p>
								<a data-fancybox data-src="#popup" href="javascript:;" class="btn-lilac">Записаться на прием</a>
							</div>
					<?php endforeach;
					endif; ?>
			</div>
		</div>
	</div>
	<div class="s-timetable">
		<div class="container">
			<p class="h1 text-center">Расписание</p>
			<div class="b-timetable">
				<?php show_raspisanie(); ?>
			</div>
		</div>
	</div>
	<?php	if (get_the_content()): ?>
		<div class="content_container"><?php the_content();?></div>
	<?php endif; ?>
<?php
	show_feedback();
	show_bottom_contacts();
	get_footer();
?>