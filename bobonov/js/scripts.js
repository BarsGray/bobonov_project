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
			$(".main-menu").fadeOut();
		}
		else {
			$(this).addClass("active");
			$(".main-menu").fadeIn();
		}
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
	$("body").on('click', '[href*="#"]', function(e){
		var fixed_offset = 100;
		$('html,body').stop().animate({ scrollTop: $(this.hash).offset().top - fixed_offset }, 1000);
		e.preventDefault();
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