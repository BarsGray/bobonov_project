jQuery(document).ready(function($){	
	// аккордеон
	$(".b-accordion .h3, .b-accordion .h2").click(function(){
		if($(this).hasClass("active")) {
			$(this).removeClass("active");
			$(this).next(".acc-text").slideUp();
		}
		else {
			$(this).addClass("active");
			$(this).next(".acc-text").slideDown();
		}
	});
	// сертификаты
	$('.certificats').slick({
		dots: false,
		infinite: true,
		speed: 300,
		arrows: true,
		slidesToShow: 4,
		slidesToScroll: 1,
		responsive: [
			{
				breakpoint: 1023,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1,
				}
			},
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 640,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					arrows: false,
					dots: true,
				}
			}
		]
	});
	// мобильное меню
	$(".b-toggle").click(function(){
		if($(this).hasClass("active")) {
			$(this).removeClass("active");
			$(".main-menu").css({ opacity: 1 }).animate({ opacity: 0 }, 300, function () { $(this).css("display", "none"); });
		}
		else {
			$(this).addClass("active");
			$(".main-menu").css({ display: 'flex', opacity: 0 }).animate({ opacity: 1 }, 300);
		}
	});

	$(".menu-item-has-children").click(function () {
		if ($(window).width() > 992) return;
		var $this = $(this);
		var $submenu = $this.children(".sub-menu");
		if ($this.hasClass("active")) {
			$this.removeClass("active");
			$submenu.animate({ opacity: 0, height: 0 }, 300);
		} else {
			$this.addClass("active");
			$submenu.css({opacity: 0, height: 0 });
			var height = $submenu[0].scrollHeight;
			// $submenu.animate({ opacity: 1, height: height }, 300);
			$submenu.animate({ opacity: 1, height: height }, 300, function () { $(this).css("height", height); });
		}
	});
	// Сбрасываем мобильное состояние при переходе на desktop
	var wasMobile = $(window).width() <= 992;
	$(window).on("resize", function () {
			var isMobile = $(window).width() <= 992;
			if (wasMobile && !isMobile) {
					$(".menu-item-has-children").removeClass("active").children(".sub-menu").stop(true, true).removeAttr("style");
					$(".main-menu").removeAttr("style");
					$('.b-toggle').removeClass("active");
			}
			wasMobile = isMobile;
	});
	
	// фиксация меню
	var element = $(".main-menu");
	var height_el = element.offset().top;	
	$(window).scroll(function() {			
		if($(window).scrollTop() > height_el) {			
			$(".header").addClass("fixed");
		} else {			
			$(".header").removeClass("fixed");
		}
	});
	// прокрутка к пункту меню	
	$("body").on("click", '[href*="#"]', function (e) {
    var fixed_offset = 100;
    var target = $(this.hash);

    if (target.length) {
        $("html, body").stop().animate({ scrollTop: target.offset().top - fixed_offset }, 1000);
        e.preventDefault();
    }
	});
	// отправка формы
	// grecaptcha.ready(function () {
		// grecaptcha.execute('6LfePhAqAAAAALWexXCDT2ArcmNxm18UOXX8XT9k',{action:'contact'}).then(function(token){
			// var recaptchaResponse=document.getElementById('recaptchaResponse');
			// recaptchaResponse.value=token;
		// });
	// });
	
	$('#feedback-form').submit(function(){
		this_el=$(this);
		var fd=new FormData(document.forms.feedback);
		this_el.find('.message').remove();
		$.ajax({
			url:'/mail.php',
			contentType:false,
			processData:false,
			data:fd,
			type:'POST',
			success:function(response){
				if(response=='ok')
					this_el.trigger('reset').append('<div class="message success"><p>Ваше сообщение успешно отправлено!</p></div>');
				else
					this_el.append('<div class="message error">'+response+'</div>');
			}
		});
		return false;
	});
		
});