/* Javscript DocumentDev By BWD [andrikanich@gmail.com]console.info();*/$(document).ready(function() {		var isMobile = {Android: function() {return navigator.userAgent.match(/Android/i);},BlackBerry: function() {return navigator.userAgent.match(/BlackBerry/i);},iOS: function() {return navigator.userAgent.match(/iPhone|iPad|iPod/i);},Opera: function() {return navigator.userAgent.match(/Opera Mini/i);},Windows: function() {return navigator.userAgent.match(/IEMobile/i);},any: function() {return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());}};	if(isMobile.any()){	}		var act="click";	if(isMobile.iOS()){		var act="touchstart";	}	$('.header-menu__icon').click(function(event) {		$(this).toggleClass('active');		$('.header-menu').toggleClass('active');		$('body').toggleClass('lock');	});	$('.header-menu-more').click(function(event) {		$(this).toggleClass('active');		$('.header-submenu').toggleClass('active');	});	$('.filter-menu__link span').click(function(event) {		$(this).parent().toggleClass('active').next().slideToggle(300);		return false;	});		//ZOOM	if($('.zoom').length>0){		$('.zoom').fancybox({			helpers:{				overlay:{locked: false},				title:{type: 'inside'}			}		});	}	if($('.cloud-zoom').length>0 && !isMobile.any()){		$('.cloud-zoom').CloudZoom();	}	$('.pl').click(function(event) {			$('.popup').removeClass('active').hide();			$('body').addClass('lock');		if($(this).hasClass('callback')){			$('.popup-callback').fadeIn(300).delay(300).addClass('active');		}		if($(this).hasClass('incart')){			$('.popup-incart').fadeIn(300).delay(300).addClass('active');		}		if($(this).hasClass('othersize')){			$('.popup-othersize').fadeIn(300).delay(300).addClass('active');		}		if($(this).hasClass('sizes')){			$('.popup-sizes').fadeIn(300).delay(300).addClass('active');		}		if($(this).hasClass('vid')){				var v=$(this).data('vid');			$('.popup-video').fadeIn(300).delay(300).addClass('active');			$('.popup-video .popup-video__value').html('<iframe src="https://www.youtube.com/embed/'+v+'?autoplay=1"  allow="autoplay; encrypted-media" allowfullscreen></iframe>');		}			return false;	});	function popupclose(){		$('.popup').removeClass('active').fadeOut(300);		$('body').removeClass('lock');	}	$('.popup').click(function(e) {		if (!$(e.target).is(".popup>.popup-table>.cell *") || $(e.target).is(".popup-close") || $(e.target).is(".popup__close")) {			popupclose();			return false;		}	});	$('.header-body-lang__title').click(function(event) {		$('.header-body-lang').toggleClass('active');	});		function ibg(){		$.each($('.ibg'), function(index, val) {			if($(this).find('img').length>0){				$(this).css('background-image','url("'+$(this).find('img').attr('src')+'")');			}		});	}		ibg();			//Клик вне области	$(document).on('click touchstart',function(e) {		if (!$(e.target).is(".header-body-lang *")) {			$('.header-body-lang').removeClass('active');		};		if (!$(e.target).is(".header-submenu *") && !$(e.target).is(".header-menu-more *") && !$(e.target).is(".header-menu-more")) {			$('.header-submenu,.header-menu-more').removeClass('active');		};	});	//UP	$(window).scroll(function() {			var w=$(window).width();		if($(window).scrollTop()>$('.header-body').outerHeight()){			$('.header-bottom').addClass('fix');			if(!$('body').hasClass('headpage')){				$('.header-body').addClass('margin');			}		}else{			$('.header-bottom').removeClass('fix');			$('.header-body').removeClass('margin');		}	});	$('#up').click(function(event) {		$('body,html').animate({scrollTop:0},300);	});	$('.tab__navitem').click(function(event) {				var eq=$(this).index();			if($(this).hasClass('parent')){				var eq=$(this).parent().index();			}		if(!$(this).hasClass('active')){				$(this).closest('.tabs').find('.tab__navitem').removeClass('active');				$(this).addClass('active');				$(this).closest('.tabs').find('.tab__item').removeClass('active').eq(eq).addClass('active');			if($(this).closest('.tabs').find('.slick-slider').length>0){				$(this).closest('.tabs').find('.slick-slider').slick('setPosition');			}		}	});	$.each($('.spoller.active'), function(index, val) {		$(this).next().show();	});	$('.spoller').click(function(event) {		if($(this).hasClass('mob') && !isMobile.any()){			return false;		}		if($(this).hasClass('closeall') && !$(this).hasClass('active')){			$.each($(this).closest('.spollers').find('.spoller'), function(index, val) {				$(this).removeClass('active');				$(this).next().slideUp(300);			});		}		$(this).toggleClass('active').next().slideToggle(300,function(index, val) {				if($(this).parent().find('.slick-slider').length>0){					$(this).parent().find('.slick-slider').slick('setPosition');				}		});	});	function scrolloptions(){		var opt={			cursorcolor:"#a0a7b5",			cursorwidth: "26px",			background: "#f3f5f8",			horizrailenabled: false,			cursorfixedheight: 26,			railalign: 'left',			autohidemode:false,			bouncescroll:false,			cursorborderradius: "50%",			scrollspeed:100,			mousescrollstep:50,			directionlockdeadzone:0,			cursorborder: "0px solid #fff",		};		return opt;	}	function scroll(){		$('.scroll-body').niceScroll('.scroll-list',scrolloptions());	}	if($('.scroll-body').length>0 && !isMobile.any()){		scroll();	}	//Adaptive functions	$(window).resize(function(event) {		adaptive_function();	});	function adaptive_header() {			var w=$(window).outerWidth();			var headerTop=$('.header-body-top');			var headerBottom=$('.header-body-bottom');			var headerSubmenu=$('.header-submenu');			var headerPhone=$('.header-body-contacts__phone');		if(w<767){			if($('.header-menu').find('.header-body-top').length==0){				headerSubmenu.appendTo('.header-menu');				headerTop.appendTo('.header-menu');				headerBottom.appendTo('.header-menu');				headerPhone.appendTo('.header-body .container');			}		}else{			if($('.header-menu').find('.header-body-top').length>0){				headerTop.appendTo('.header-body .container');				headerBottom.appendTo('.header-body .container');				headerSubmenu.appendTo('.header-bottom');				headerPhone.prependTo('.header-body-contacts');							}		}	}	function adaptive_filter() {			var w=$(window).outerWidth();		if(w<767){				$('.filter__open').addClass('spoller');			if(!$('.filter__open').hasClass('active')){				$('.filter-body').hide();			}		}else{				$('.filter__open').removeClass('spoller');			$('.filter-body').show();		}	}	$('.toordermain__scroll').click(function(event) {		$('body,html').animate({scrollTop:$('.toorderservices').offset().top},500, function() {});		return false;	});		$('.repairmain-content__getprice').click(function(event) {		$('body,html').animate({scrollTop:$('.getprice').offset().top},500, function() {});		return false;	});		function adaptive_function() {		adaptive_header();		adaptive_filter();		if($('.mainslider').length>0){			msbh();		}		if($('.repairmain,.toordermain').length>0){			fsh();		}			}		adaptive_function();		function map(n){		var markers = new Array();		var infowindow = new google.maps.InfoWindow({			//pixelOffset: new google.maps.Size(-230,250)		});		var locations = [			[new google.maps.LatLng(53.819055,27.8813694)],		]		var options = {			zoom: 10,			panControl:false,			mapTypeControl:false,			center: locations[0][0],			scrollwheel:false,			mapTypeId: google.maps.MapTypeId.ROADMAP		}; 		var map = new google.maps.Map(document.getElementById('map'), options);		var icons ={			start:new google.maps.MarkerImage('img/icons/map.svg',				new google.maps.Size(42,42),				new google.maps.Point(0,0),				new google.maps.Point(21,21)),			end:new google.maps.MarkerImage('img/icons/map-b.svg',				new google.maps.Size(68,68),				new google.maps.Point(0,0),				new google.maps.Point(34,34))		};		for (var i = 0; i < locations.length; i++) {			var marker = new google.maps.Marker({				//icon:icons.start,				position: locations[i][0],				map: map,			});		}	}	function baloonstyle(){		$('.gm-style-iw').parent().addClass('baloon');		$('.gm-style-iw').prev().addClass('baloon-style');		$('.gm-style-iw').next().addClass('baloon-close');		$('.gm-style-iw').addClass('baloon-content');	}	if($("#map").length){		map(1);	}	if($('.t,.tip').length>0){		tip();	}	function tip(){		$('.t,.tip').webuiPopover({			placement:'auto',			trigger:'hover',			backdrop: false,			animation:'fade',			dismissible: true,			padding:false,			//hideEmpty: true		});	}	//SLIDERS	if($('.mainslider').length>0){		$('.mainslider-slider').slick({			//autoplay: true,			//infinite: false,			fade:true,			dots: false,			arrows: true,			accessibility:false,			slidesToShow:1,			autoplaySpeed: 3000,			//asNavFor:'',			//appendDots:			appendArrows:$('.mainslider-arrows .container'),			nextArrow:'<button type="button" class="slick-next"></button>',			prevArrow:'<button type="button" class="slick-prev"></button>',			responsive: [{				breakpoint: 768,				settings: {}			}]		});	}	if($('.clients-items').length>0){		$('.clients-items').slick({			//autoplay: true,			//infinite: false,			//fade:true,			dots: false,			arrows: true,			accessibility:false,			slidesToShow:3,			autoplaySpeed: 3000,			//asNavFor:'',			//appendDots:			nextArrow:'<button type="button" class="slick-next"></button>',			prevArrow:'<button type="button" class="slick-prev"></button>',			responsive: [{				breakpoint: 992,				settings: {					slidesToShow:2				}			},{				breakpoint: 710,				settings: {					slidesToShow:1				}			}]		});	}	function msbh(){			var msbh=$(window).outerHeight()-$('header').outerHeight()-$('.mainline').outerHeight();		$('.mainslide-body').css({height:msbh});	}	function fsh(){			var msbh=$(window).outerHeight()-$('header').outerHeight();		$('.repairmain-content').css({height:msbh});		$('.toordermain-content').css({height:msbh});	}	if($('.catalog-slider').length>0){		$('.catalog-slider-body').slick({			//autoplay: true,			//infinite: false,			dots: false,			arrows: true,			accessibility:false,			slidesToShow:3,			autoplaySpeed: 3000,			//asNavFor:'',			//appendDots:			nextArrow:'<button type="button" class="slick-next"></button>',			prevArrow:'<button type="button" class="slick-prev"></button>',			responsive: [{				breakpoint: 1246,				settings: {					slidesToShow:2				}			},{				breakpoint: 992,				settings: {					slidesToShow:2				}			},{				breakpoint: 767,				settings: {					slidesToShow:2				}			},{				breakpoint: 650,				settings: {					slidesToShow:1				}			}]		});	}	if($('.catalog-slider').length>0){		$('.product-slider-body').slick({			//autoplay: true,			//infinite: false,			dots: false,			arrows: true,			accessibility:false,			slidesToShow:4,			autoplaySpeed: 3000,			//asNavFor:'',			//appendDots:			nextArrow:'<button type="button" class="slick-next"></button>',			prevArrow:'<button type="button" class="slick-prev"></button>',			responsive: [{				breakpoint: 1246,				settings: {					slidesToShow:3				}			},{				breakpoint: 992,				settings: {					slidesToShow:2				}			},{				breakpoint: 767,				settings: {					slidesToShow:2				}			},{				breakpoint: 650,				settings: {					slidesToShow:1				}			}]		});	}	if($('.product-main-mainimages').length>0){		$('.product-main-mainimages').slick({			//autoplay: true,			//infinite: false,			fade:true,			dots: false,			arrows: false,			//waitForAnimate:false,			accessibility:false,			slidesToShow:1,			autoplaySpeed: 3000,			//asNavFor:'.product-main-subimages',			//appendDots:			//appendArrows:$('.mainslider-arrows .container'),			nextArrow:'<button type="button" class="slick-next fa fa-angle-right"></button>',			prevArrow:'<button type="button" class="slick-prev fa fa-angle-left"></button>',			responsive: []		});	}	if($('.product-main-subimages').length>0){		$('.product-main-subimages').slick({			//autoplay: true,			//infinite: false,			dots: false,			arrows: true,			//waitForAnimate:false,			accessibility:false,			vertical:true,			slidesToShow:3,			autoplaySpeed: 3000,			//asNavFor:'.product-main-mainimages',			//appendDots:			//appendArrows:$('.mainslider-arrows .container'),			nextArrow:'<button type="button" class="slick-next fa fa-angle-down"></button>',			prevArrow:'<button type="button" class="slick-prev fa fa-angle-up"></button>',			responsive: [{				breakpoint: 1260,				settings: {vertical:false}			},{				breakpoint: 992,				settings: {vertical:false,slidesToShow:3}			},{				breakpoint: 750,				settings: {vertical:false,slidesToShow:3}			},{				breakpoint: 560,				settings: {vertical:false,slidesToShow:2}			}]		});		$('.product-main-subimage').click(function(event) {			$('.product-main-mainimages').slick('goTo',$(this).data('slick-index'));		});	}	if($('.newsmodule-slider').length>0){		$('.newsmodule-slider').slick({			//autoplay: true,			//infinite: false,			fade:true,			dots: false,			arrows: false,			accessibility:false,			slidesToShow:1,			autoplaySpeed: 3000,			//asNavFor:'',			//appendDots:			//appendArrows:$('.mainslider-arrows .container'),			nextArrow:'<button type="button" class="slick-next fa fa-angle-right"></button>',			prevArrow:'<button type="button" class="slick-prev fa fa-angle-left"></button>',			responsive: [{				breakpoint: 768,				settings: {	}			}]		});		$('.newsmodule-items-item').click(function(event) {			$('.newsmodule-items-item').removeClass('active');			$(this).addClass('active');			$('.newsmodule-slider').slick('goTo',$(this).index());		});		$('.newsmodule-navigator-info span').eq(1).html($('.newsmodule-items-item').length);		$('.newsmodule-slider').on('afterChange', function(event, slick, currentSlide){			$('.newsmodule-navigator-info span').eq(0).html(currentSlide+1);		});		$('.newsmodule-navigator__arrow.fa-angle-left').click(function(event) {			$('.newsmodule-slider').slick('slickPrev');		});		$('.newsmodule-navigator__arrow.fa-angle-right').click(function(event) {			$('.newsmodule-slider').slick('slickNext');		});	}});