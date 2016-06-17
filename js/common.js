;(function($){
	$(document).ready(function() {
		//language
		$(".language li").click(function(){
			$(".language li").removeClass("active");
			$(this).addClass("active");
		});
		//fixed menu
		/*$(window).scroll(function () {
			if ($(this).scrollTop() > 1) {
				$('section.navigation').addClass("mob-nav");
				$("section.logo").css("margin-top", "40px");
			} else {
				$('section.navigation').removeClass("mob-nav");
				$("section.logo").css("margin-top", "0");
			}
		});*/
		//media
		if (window.matchMedia('(min-width: 768px)').matches){
			$(window).scroll(function () {
				if ($(this).scrollTop() < 500) {
					$('section.navigation').css("position", "absolute");
					$('section.navigation').css("top", "500px");
				} else {
					$('section.navigation').css("position", "fixed");
					$('section.navigation').css("top", "0");
				}
			});
		} else {
			$(window).scroll(function () {
				if ($(this).scrollTop() > 1) {
					$('section.navigation').css("position", "fixed");
					$('section.navigation').css("top", "0");
				} else {
					$('section.navigation').css("position", "relative");
				}
			});
		}
		$(window).resize(function(){
			if (window.matchMedia('(min-width: 768px)').matches){
				$(window).scroll(function () {
					if ($(this).scrollTop() < 500) {
						$('section.navigation').css("position", "absolute");
						$('section.navigation').css("top", "500px");
					} else {
						$('section.navigation').css("position", "fixed");
						$('section.navigation').css("top", "0");
					}
				});
			} else {
				$(window).scroll(function () {
					if ($(this).scrollTop() > 1) {
						$('section.navigation').css("position", "fixed");
						$('section.navigation').css("top", "0");
					} else {
						$('section.navigation').css("position", "relative");
					}
				});
			}
		});


		/*if (window.matchMedia('(min-width: 768px)').matches){
			$("section.navigation").css("position", "absolute");
		} else if(window.matchMedia('(max-width: 767px)').matches) {
			$("section.navigation").css("position", "relative");
		}*/
		
		// navigation
		$(".navigation ul li:first-child").click(function(){
			$('body,html').animate({
					scrollTop:0}, 500);
			return false;
		});
		$(document).on('click', 'a[href^=#]', function () {
				$('html, body').animate({ scrollTop: $('a[name="'+this.hash.slice(1)+'"]').offset().top }, 1000 ); 
		return false;
		});
	});
})(jQuery)