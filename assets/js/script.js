var $ = jQuery;



//template ajax request 

function MY_AJAX(url,data,callback, type='post'){ 

	$.ajax({ 

		url: url, 

		type: type, 

		data: data, 

		dataType: 'json', 

		success: callback, 

		error: function(jqXHR, exception) { 

			if (jqXHR.status === 0) { 

				console.log('Not connect.n Verify Network.'); 

			} else if (jqXHR.status == 404) { 

				console.log('Requested page not found. [404]'); 

			} else if (jqXHR.status == 500) { 

				console.log('Internal Server Error [500].'); 

			} else if (exception === 'parsererror') { 

				console.log('Requested JSON parse failed.'); 

			} else if (exception === 'timeout') { 

				console.log('Time out error.'); 

			} else if (exception === 'abort') { 

				console.log('Ajax request aborted.'); 

			} else { 

				console.log('Uncaught Error.n' + jqXHR.responseText); 

			} 

		} 

	}); 

}



jQuery(document).ready(function($) { 



	$('.home_our_clients .brands').owlCarousel({

		loop: true,

		dots: false,

		nav: false,

		autoplay: true,

		autoplayTimeout: 5000,

		responsive : {

		    0 : {

		    	items: 3

		    },

		    500 : {

		    	items: 4

		    },

		    768 : {

				items: 6,

		    },

		    1100 : {

				items: 9,

		    }

		}

	});



	$('.tab_buttons > div').on('click', function(){

		index = $(this).index()+1;

		var section = $(this).closest('section');

		section.find('.tab_buttons > div, .tab_contents > *').removeClass('active');

		section.find('.tab_buttons > div:nth-child('+index+'), .tab_contents >*:nth-child('+index+')').addClass('active');

	});



	$('.home_faq__item_title').on('click', function(){

		if ($(this).parent().hasClass('active')) {

			$(this).parent().removeClass('active').find('.home_faq__response').slideUp();

		} else {

			$('.home_faq__item.active .home_faq__response').slideUp();

			$('.home_faq__item.active').removeClass('active');

			$(this).parent().addClass('active').find('.home_faq__response').slideDown();

		}

	});



	$('.fiels_wrap.select input').on('click', function(){

		$(this).closest('p').next().slideToggle();

	});



	$('.fiels_wrap.select .options li').on('click', function(){

		$(this).parent().slideUp().prev().find('input').val($(this).text());

	});



	$(document).on('click', function(e){

		if ($('.fiels_wrap.select').has(e.target).length === 0) {

			$('.fiels_wrap.select .options').slideUp();

		}



		/*$('.menu-item-has-children').each(function(){

			if ($(this).has(e.target).length === 0) {

				$(this).removeClass('show_submenu');

			}			

		});*/

	});



	$('.header__show_menu_btn').on('click', function(e){

		$(this).toggleClass('active');

		$('.header__menu_wrap').slideToggle();

	});



	$('.menu-item-has-children').on('click', '> a', function(e){

		if( $(window).width()<=768) {

			e.preventDefault();

			$(this).parent('li').toggleClass('show_submenu');

		}

	});



	$(document).on('click', '.wpcf7-not-valid-tip', function(){

		$(this).fadeOut();

	});





	$('.page_blog_posts .show_more').on('click', function(e){

		e.preventDefault();

		if($(this).closest('.portfolio_more_examples__gallery').length>0) {

			var i = 0;

			$('.portfolio_more_examples__gallery .item.hidden').each(function(){

				$(this).removeClass('hidden');

				i++;

				if (i==8) {

					return false;

				}

			});

			if ($('.portfolio_more_examples__gallery .item.hidden').length == 0) {

				$(this).hide();

			}

		} else {

			$('.page_blog_posts .show_more').css({

				'pointer-events': 'none',

				'opacity': '.5'

			});

			var ids = [];



			$('.page_blog_posts .item').each(function(){

				ids.push($(this).attr('data-id'));

			});



			var data = {

				action 	: 'show_more_posts',

				ids 	: ids

			}

			MY_AJAX(MyAjax.url, data, function(response){

				$('.page_blog_posts .item:empty').remove();

				$('.page_blog_posts .posts').append(response.html+'<div class="item"></div>');

				if (response.status == 0) {

					$('.page_blog_posts .show_more').hide();

				} else {

					$('.page_blog_posts .show_more').css({

						'pointer-events': '',

						'opacity': ''

					});

				}

				console.log(response);

			});

		}

	});



	$('.popup_wrap .close_btn').on('click', function(){

		$(this).closest('.popup_wrap').fadeOut();
		if ($('.block_video_popup .iframe_wrap').length > 0) {
	    	$('.block_video_popup .iframe_wrap').html('');
	    }

	});



	$('.portfolio_more_examples__gallery .item.with_full_img').on('click', function(){

		$('.popup_full_image img').attr('src', $(this).attr('data-full_imgae_url'));

		$('.popup_full_image').fadeIn();

	});


	// $('.paid_traffic_video .video_thumb').on('click', function(){
	// 	$('.block_video_popup .iframe_wrap').html($(this).attr('data-iframe'));
	// 	$('.block_video_popup').fadeIn();
	// });

	$(document).on('keyup', function(e){
	    if(e.key === "Escape") {
	    	$('.popup_wrap').fadeOut();
		    // if ($('.block_video_popup .iframe_wrap').length > 0) {
		    // 	$('.block_video_popup .iframe_wrap').html('');
		    // }
	    }
	});

});

