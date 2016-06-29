;(function($){
	$(document).ready(function() {
		//language
		$(".language li").click(function(){
			$(".language li").removeClass("active");
			$(this).addClass("active");
		});
		//media
		if (window.matchMedia('(min-width: 768px)').matches){
			$(window).scroll(function () {
				if ($(this).scrollTop() < 136) {
					$('section.navigation').css("position", "absolute");
					$('section.navigation').css("top", "136px");
				} else {
					$('section.navigation').css("position", "fixed");
					$('section.navigation').css("top", "0px");
				}
			});
		} else {
			$(window).scroll(function () {
				if ($(this).scrollTop() > 1) {
					$('section.navigation').css("position", "fixed");
					$('section.navigation').css("top", "0");
				} else {
					$('section.navigation').css("position", "relative");
					$('section.navigation').css("top", "0");
				}
			});
		}
		//resize
		$(window).resize(function(){
			if (window.matchMedia('(min-width: 768px)').matches){
				$(window).scroll(function () {
					if ($(this).scrollTop() < 136) {
						$('section.navigation').css("position", "absolute");
						$('section.navigation').css("top", "136px");
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
						$('section.navigation').css("top", "0");
					}
				});
			}
		});
		$(window).resize(function(){
			if (window.matchMedia('(min-width: 768px)').matches){
				if ($(this).scrollTop() < 136) {
					$('section.navigation').css("position", "absolute");
					$('section.navigation').css("top", "136px");
				} else {
					$('section.navigation').css("position", "fixed");
					$('section.navigation').css("top", "0");
				}
			} else {
				if ($(this).scrollTop() > 1) {
					$('section.navigation').css("position", "fixed");
					$('section.navigation').css("top", "0");
				} else {
					$('section.navigation').css("position", "relative");
					$('section.navigation').css("top", "0");
				}
			}
		});


		// navigation (scroll)
		$(".navigation ul li:first-child").click(function(){
			$('body,html').animate({
					scrollTop:0}, 503);
			return false;
		});
		$(document).on('click', 'a[href^=#]', function () {
				$('html, body').animate({ scrollTop: $('a[name="'+this.hash.slice(1)+'"]').offset().top }, 1000 ); 
		return false;
		});
		// navigation (close with scroll)
		$(document).scroll(function(){
			var responsive = $("#responsive-menu");
			var headerMenuState = responsive.attr("aria-expanded");

			if (headerMenuState) {
				responsive.collapse('hide');
			}
		});
		//fancybox
		$(".serteficates").fancybox({
			openEffect  : 'none',
			closeEffect : 'none'
		});
		$(".goods_gallery").fancybox({
			openEffect  : 'none',
			closeEffect : 'none'
		});
		$(".clider-picture").fancybox({
			openEffect  : 'none',
			closeEffect : 'none'
		});
		// gallery
		$('.bxslider').bxSlider();
		//questions/coll back
		$(".phones button, .call-me button, .consultation button, footer button").click(function(){
			$("#topic").val("Заказать звонок");
			$("#question_title").text("Заказать звонок");
		});
		$(".navigation .consult a").click(function(){
			$("#topic").val("Консультация");
			$("#question_title").text("Консультация");
		});
		$("section.goods button").click(function(){
			var val = $(this).parent().find("p").html();
			$("#question_title").text("Узнать цену");
			$("#topic").val("Узнать цену "+ val);
		});
		$("section.catalog button").click(function(){
			var val = $(this).parent().find("h3").html();
			$("#question_title").text("Узнать цену ");
			$("#topic").val("Узнать цену "+ val);
		});


	});
})(jQuery)