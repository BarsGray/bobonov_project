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
					<p class="lilac">Психологический центр Бобоновых - это место, где вы сможете получить квалифицированную консультацию психолога. Прием ведут специалисты с многолетним опытом. Психологи центра работают с различными проблемами и оказывают психотерапевтическую помощь в кризисных ситуациях. Доверьтесь профессионалам психологического центра Бобоновых и получите поддержку, в которых вы нуждаетесь!</p>
					<p>Кабинет психолога - это безопасное пространство, где вы сможете обсудить проблемы, которые вас беспокоят. Специалист с пониманием отнесется к вашим запросам и поможет найти решение. К психологам могут обратиться люди с различными проблемами, затрагивающими все сферы жизни человека. Психологический центр Бобоновых гарантирует конфиденциальность встреч.</p>
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
			<div class="b-specialist">
				<div class="spec-photo text-center">
					<img src="<?php echo TEMPLATE_URL ?>/img/spec.jpg" alt="Bobonov">
					<p class="lilac h3">Бобонов Андрей Михайлович</p>
					<a data-fancybox data-src="#popup" href="javascript:;" class="btn-lilac">Записаться</a>
				</div>
				<div class="spec-info">
					<p class="lilac h3">Бобонов Андрей Михайлович</p>
					<p>Психотерапевт, клинический психолог</p>
					<p>Стаж: 28 лет</p>
					<p class="lilac">Работает с: депрессия, тревожное расстройство,  панические атаки, тревожно-депрессивное расстройство, расстройство стрессовое посттравматическое, расстройство обсессивно-компульсивное, социофобия</p>
					<p>Мой стаж работы 28 лет. В своей работе я стараюсь придерживаться строгих принципов. Работаю с проблемами в семейной жизни, карьере и личной жизни. Помогу вам установить четкие границы, которые будут способствовать улучшению качества жизни. Вместе мы сможем прийти к решению проблем в семье или с партнером. Я могу помочь вам определить ваши сильные стороны и повысить самооценку.</p>
					<div class="b-accordion">
						<div>
							<p class="h3 lilac">Образование</p>
							<div class="acc-text">
								<ul>
									<li>2002 г. Воронежский Государственный Медицинский Университет им. Н.Н. Бурденко (психотерапия). Циклы переподготовки</li>
									<li>2001 г. Воронежский Государственный Медицинский Университет им. Н.Н. Бурденко (психиатрия-наркология). Циклы переподготовки</li>
									<li>2000 г. Воронежский Государственный Медицинский Университет им. Н.Н. Бурденко (психиатрия). Циклы переподготовки</li>
									<li>1999 г. Воронежский Государственный Медицинский Университет им. Н.Н. Бурденко (анестезиология-реаниматология). Циклы переподготовки</li>
									<li>1997 г. Воронежский Государственный Медицинский Университет им. Н.Н. Бурденко (терапия). Интернатура</li>
									<li>1996 г. Воронежский Государственный Медицинский Университет им. Н.Н. Бурденко (лечебное дело). Базовое образование</li>
								</ul>
							</div>
						</div>
						<div>
							<p class="h3 lilac">Трудовая деятельность</p>
							<div class="acc-text">
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
			<div class="b-specialist spec-2">
				<div class="spec-photo text-center">
					<img src="<?php echo TEMPLATE_URL ?>/img/spec2.jpg" alt="Bobonova">
					<p class="h3 lilac">Бобонова Елена Николаевна</p>
					<a data-fancybox data-src="#popup" href="javascript:;" class="btn-lilac">Записаться</a>
				</div>
				<div class="spec-info">
					<p class="h3 lilac">Бобонова Елена Николаевна</p>
					<p>Психотерапевт</p>
					<p>Стаж: 24 года</p>
					<p class="lilac">Работает с: депрессия, тревожное расстройство,  панические атаки, тревожно-депрессивное расстройство, расстройство стрессовое посттравматическое, расстройство обсессивно-компульсивное, социофобия</p>
					<p>Мой стаж работы 24 года. В своей работе я стараюсь придерживаться строгих принципов. Работаю с проблемами в семейной жизни, карьере и личной жизни. Помогу вам установить четкие границы, которые будут способствовать улучшению качества жизни. Вместе мы сможем прийти к решению проблем в семье или с партнером. Я могу помочь вам определить ваши сильные стороны и повысить самооценку.</p>
					<div class="b-accordion">
						<div>
							<div class="h3 lilac">Образование</div>
							<div class="acc-text">
								<ul>
									<li>2020 г. Центр специализированного образования "Проф-Ресурс" (Психология). Базовое образование</li>
									<li>2019 г. Центр специализированного образования "Проф-Ресурс" (Психотерапия). Циклы переподготовки</li>
									<li>2019 г. Центр специализированного образования "Проф-Ресурс" (Психиатрия). Циклы переподготовки</li>
									<li>2010 г. Воронежский государственный университет (МВА). Базовое образование</li>
									<li>2001 г. Воронежская государственная медицинская академия им. Н.Н. Бурденко (психиатрия-наркология). Интернатура</li>
									<li>2000 г. Воронежская государственная медицинская академия им. Н.Н. Бурденко (лечебное дело). Базовое образование</li>
								</ul>
							</div>
						</div>
						<div>
							<div class="h3 lilac">Трудовая деятельность</div>
							<div class="acc-text">
								<ul>
									<li>2023 — н. в. Центр Современной Педиатрии. Врач-психотерапевт, врач-психиатр</li>
									<li>2021 — 2023. Клиника «На Театральной». Врач-психотерапевт</li>
									<li>2018 — 2022. ВГУ. Преподаватель психологии</li>
									<li>2008 — 2021. Частная практика. Фриланс</li>
									<li>2004 — 2007. Больница скорой медицинской помощи N1. Врач-психиатр-нарколог</li>
									<li>2000 — 2004. Воронежский областной наркологический диспансер. Врач-психиатр-нарколог</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="text-center title-certificats"><p>Дипломы и сертификаты <span class="lilac">Бобоновой Елены Николаевны</span></p></div>
			<div class="certificats">
				<a href="<?php echo TEMPLATE_URL ?>/img/cert13.jpg" data-fancybox="gallery2"><img src="<?php echo TEMPLATE_URL ?>/img/cert13.jpg" alt="certificat"></a>
				<a href="<?php echo TEMPLATE_URL ?>/img/cert14.jpg" data-fancybox="gallery2"><img src="<?php echo TEMPLATE_URL ?>/img/cert14.jpg" alt="certificat"></a>
			</div>
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
			<div id="reviews">
				<div class="text-center h4 lilac">отзывы</div>
				<div class="h1 text-center">Нам важно <span class="lilac">что говорят о нас</span> наши клиенты</div>
				<div class="b-reviews" >
					<script src="https://res.smartwidgets.ru/app.js" defer></script>
					<div class="sw-app" data-app="d4700abffbcc805030ce8cda56e024dc"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="s-price" id="price">
		<div class="container">
			<div class="text-center lilac h4">прайс</div>
			<div class="h1 text-center"><span class="lilac">Цены</span> на услуги</div>
			<div class="b-prices">
				<div class="text-center">
					<p class="h3 lilac">Индивидуальная терапия</p>
					<p>Продолжительность: 45 минут</p>
					<p class="h3 lilac">от 5 000 ₽</p>
					<a data-fancybox data-src="#popup" href="javascript:;" class="btn-lilac">Записаться на прием</a>
				</div>
				<div class="text-center">
					<p class="h3 lilac">Групповая терапия</p>
					<p>Продолжительность: 45 минут</p>
					<p class="h3 lilac">от 5 000 ₽</p>
					<a data-fancybox data-src="#popup" href="javascript:;" class="btn-lilac">Записаться на прием</a>
				</div>
				<div class="text-center">
					<p class="h3 lilac">Семейная терапия</p>
					<p>Продолжительность: 45 минут</p>
					<p class="h3 lilac">от 5 000 ₽</p>
					<a data-fancybox data-src="#popup" href="javascript:;" class="btn-lilac">Записаться на прием</a>
				</div>
			</div>
		</div>
	</div>
	<div class="s-timetable">
		<div class="container">
			<p class="h1 text-center">Расписание</p>
			<div class="b-timetable">
				<div>
					<div class="time-spec">
						<div class="time-photo">
							<img src="<?php echo TEMPLATE_URL ?>/img/ava.jpg" alt="ava">
						</div>
						<div class="spec-title">
							<p class="h2">Бобонов Андрей Михайлович</p>
							<p>Психотерапевт, клинический психолог</p>
						</div>
					</div>
					<div class="spec-timetable">
						<ul>
							<li>Частный прием <span>пн - ср 9:00 - 20:00</span></li>
							<li>Онлайн <span>пн - ср 9:00 - 20:00</span></li>
							<li>Прием в клинике <span>пн - ср 9:00 - 20:00</span></li>
						</ul>
					</div>
				</div>
				<div>
					<div class="time-spec">
						<div class="time-photo">
							<img src="<?php echo TEMPLATE_URL ?>/img/ava2.jpg" alt="ava">
						</div>
						<div class="spec-title">
							<p class="h2">Бобонова Елена Николаевна</p>
							<p>Психотерапевт</p>
						</div>
					</div>
					<div class="spec-timetable">
						<ul>
							<li>Частный прием <span>пн - ср 9:00 - 20:00</span></li>
							<li>Онлайн <span>пн - ср 9:00 - 20:00</span></li>
							<li>Прием в клинике <span>пн - ср 9:00 - 20:00</span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
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
	<div class="s-contacts" id="contacts">
		<div class="b-map"><?php show_map(); ?></div>		
		<div class="b-contacts">
			<p class="h1">Контакты</p>
			<?php show_contacts(); ?>
			<?php show_social(); ?>
		</div>
	</div>

<?php get_footer(); ?>