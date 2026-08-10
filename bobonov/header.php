<!DOCTYPE html>
<html lang="ru">
	<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="robots" content="noindex" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Психологический центр Бобоновых</title>
		<link rel="shortcut icon" href="<?php echo TEMPLATE_URL ?>/img/fav.png">
    <?php wp_head(); ?>
	</head>
<body>
	<header class="header">
		<div class="container header-top">
			<a href="<?php bloginfo('url'); ?>" class="logo">Психологический центр<br> Бобоновых</a>
			<div class="header-right">
				<?php if (get_field('number', FRONT_PAGE)): ?>
					<a href="tel:<?php echo merge_numbers(the_field('number', FRONT_PAGE)); ?>" class="tel"><?php the_field('number', FRONT_PAGE); ?></a>
				<?php endif; ?>
				<?php show_social(); ?>
				<a data-fancybox data-src="#popup" href="javascript:;" class="btn">Записаться</a>
			</div>
			<div class="b-toggle"><span></span><span></span><span></span></div>
		</div>
		<nav class="main-menu">
			<?php wp_nav_menu('menu=top_menu&container=false&menu_class=menu container');?>
			<div class="mobile-contacts">
				<?php if (get_field('number', FRONT_PAGE)): ?>
					<a href="tel:<?php echo merge_numbers(the_field('number', FRONT_PAGE)); ?>" class="tel"><?php the_field('number', FRONT_PAGE); ?></a>
				<?php endif; ?>
				<?php show_social(); ?>
				<a data-fancybox data-src="#popup" href="javascript:;" class="btn-lilac">Записаться</a>
			</div>
		</nav>
	</header>