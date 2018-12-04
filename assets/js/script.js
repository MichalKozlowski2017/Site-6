

jQuery(document).ready(function($) {
	/*-------------------------------------
	Custom scrollbar
	-------------------------------------*/
	$(window).on("load",function(){
	    $(".related-products").mCustomScrollbar({
	    	theme:"--nazwa-firmy--"
	    });
	    $(".kariera__oferty__lista").mCustomScrollbar({
	    	theme:"--nazwa-firmy--"
	    });
	});

	/*-------------------------------------
	Top nav
	-------------------------------------*/
	$(function(){
      // scroll is still position
		var scroll = $(document).scrollTop(),
			window_view = $(window),
			headerHeight = $('#header').outerHeight();
		//console.log(headerHeight);


		window_view.on('scroll', function() {
		$(function(){
			// scrolled is new position just obtained
			var scrolled = $(document).scrollTop(),
				page_header = $('#header');

				if (scrolled > scroll && scroll > headerHeight) {
					page_header.addClass('off-canvas-menu');
				} else {
					page_header.removeClass('off-canvas-menu');
				}
				scroll = $(document).scrollTop();
			});
		});
	});





	$('.carousel-screen .item').each(function(){
	    var itemToClone = $(this);

	    for (var i=1;i<2;i++) {
	      itemToClone = itemToClone.next();

	      // wrap around if at end of item collection
	      if (!itemToClone.length) {
	        itemToClone = $(this).siblings(':first');
	      }

	      // grab item, clone, add marker class, add to collection
	      itemToClone.children(':first-child').clone()
	        .addClass("cloneditem-"+(i))
	        .appendTo($(this));
	    }
  	});
  	$('.slick-slider').slick({
		  infinite: true,
	      placeholders: false,
	      slidesToShow: 6,
	      slidesToScroll: 6,
	      rows: 2,
	      arrows: true,
	      prevArrow: '<div><span class="glyphicon glyphicon-triangle-left" aria-hidden="true"></span></div>',
		  nextArrow: '<div><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"></span></div>',
	    responsive: [
	    {
	      breakpoint: 480,
	      settings: {
	      	  infinite: true,
		      placeholders: false,
		      slidesToShow: 2,
		      slidesToScroll: 2,
		      rows: 2,
		      arrows: true,
	      }
	    },
	    {
	      breakpoint: 768,
	      settings: {
	      	  infinite: true,
		      placeholders: false,
		      slidesToShow: 4,
		      slidesToScroll: 4,
		      rows: 2,
		      arrows: true,
	      }
	    }
	  ]
	});
	$('#slider-przepis').slick({
	    // centerMode: true,
	    // slidesToShow: 1,
	    // // variableWidth: true,
	    nextArrow: '<div><span class="glyphicon glyphicon-chevron-right"></span></div>',
	    prevArrow: '<div><span class="glyphicon glyphicon-chevron-left"></span></div>'
		// adaptiveHeight: true
	});
	$('#slider-ambasador').slick({
	    // centerMode: true,
	    // slidesToShow: 1,
	    // // variableWidth: true,
		autoplay:true,
  		autoplaySpeed:3000,
		dots: true,
	    nextArrow: '<div class="ambasador-arrow-right"><span class="glyphicon glyphicon-chevron-right"></span></div>',
	    prevArrow: '<div class="ambasador-arrow-left"><span class="glyphicon glyphicon-chevron-left"></span></div>'
		// adaptiveHeight: true
	});
	// function resizeIframe(obj){
	// 	obj.style.height = 0;
	// 	obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
	// }

	$('.carousel').bcSwipe({ threshold: 50 });


	$('.product__package__image').click(function(e) {
		e.preventDefault();
		$('.product__image img').attr('src', $(this).data('image'));
		$('.kup-teraz-btn a').attr('href', $(this).data('link'));
		if ($(this).data('link').length === 0) {
			$('.product_download').addClass('hide');
		} else {
			$('.product_download').removeClass('hide');
		}
	});


	$('.kv__animation__slides').bxSlider({
		controls: false,
		pager: false,
		auto: true,
		pause: 3000
	});
	if (!Cookies.get('cookies_accepted')) {
		// $('.cookies').show();
	}
	$('.cookies__close').click(function(e) {
		e.preventDefault();
		Cookies.set('cookies_accepted', true);
		$('.cookies').slideUp(300);
	});
	$('.carousel-inner').each(function() {

	    if ($(this).children('div').length === 1) $(this).siblings('.carousel-control, .carousel-indicators').hide();

	});



});
