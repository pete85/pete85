$(document).ready(function() {

	/*============================================
	Page Preloader
	==============================================*/
	
	$(window).load(function(){
		$('#page-loader').fadeOut(500,function(){
			//loadGmap();
		});
		
	})	
	
	/*============================================
	Header
	==============================================*/

	$('#home').height($(window).height()+50);
	
	$.backstretch('images/bg-2.jpg');
	
	$(window).scroll( function() {
		var st = $(this).scrollTop(),
			wh = $(window).height(),
			sf = 1 + st/(10*wh);

		$('.backstretch img').css({
			'transform' : 'scale('+sf+')',
			'-webkit-transform' : 'scale('+sf+')'
		});

		$('#home .container').css({ 'opacity' : (1.6 - st/200) });

		if($(window).scrollTop() > ($(window).height()+50)){
			$('.backstretch').hide();
		}else{
			$('.backstretch').show();
		}

	});
	
	var st = $(this).scrollTop(),
		wh = $(window).height(),
		sf = 1 + st/(10*wh);

	$('.backstretch img').css({ 
		'transform' : 'scale('+sf+')', 
		'-webkit-transform' : 'scale('+sf+')'
	});

	$('#home .container').css({ 'opacity' : (1.6 - st/200) });

	
	/*============================================
	Navigation Bar
	==============================================*/
	if ($(window).scrollTop()< ($(window).height()-35)){
		$('#main-nav').removeClass('scrolled');
	}
	else{
		$('#main-nav').addClass('scrolled');
	}

	$(window).scroll(function(){
		if ($(window).scrollTop()< ($(window).height()-35)){
			$('#main-nav').removeClass('scrolled');
		}
		else{
			$('#main-nav').addClass('scrolled');
		}
	});
	
	/*============================================
	Navigation Links
	==============================================*/
	$("#main-nav a").click(function() {
        element = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(element).offset().top - 30
        }, 1000);
        if($('#site-nav').is(":visible") && $(window).width() < 769){
            $('.navbar-toggle').trigger('click');
        }
        return false;
    });
    

	/*============================================
	Circle button scroll
	==============================================*/    

	$("a.page-scroll").click(function() {
    element = $(this).attr('href');
    $('html, body').animate({
        scrollTop: $(element).offset().top - 30
    }, 1000);
    if($('#site-nav').is(":visible") && $(window).width() < 769){
        $('.navbar-toggle').trigger('click');
    }
    return false;
    });

    /*============================================
	About Picture
	==============================================*/
    var controller;
    $(document).ready(function($) {
        if ($(window).width() > 769) {
            // init controller
            controller = new ScrollMagic();
            // build scene
            var timelineheight = $('.timeline').outerHeight( true ) - 600;
            var scene = new ScrollScene({triggerElement: "#trigger1", duration: timelineheight, offset: 200})
                            .setPin("#pin1")
                            .addTo(controller);
        }
    });
    
		
	/*============================================
	Project thumbs
	==============================================*/
	$(window).load(function(){

		$('#projects-container').css({visibility:'visible'});

		$('#projects-container').masonry({
			itemSelector: '.project-item:not(.filtered)',
			columnWidth:350,
			isFitWidth: true,
			isResizable: true,
			isAnimated: !Modernizr.csstransitions,
			gutterWidth: 25
		});
		
	});
	
	/*============================================
	Filter Projects
	==============================================*/
	$('#filter-works a').click(function(e){
		e.preventDefault();
		
		$('#filter-works li').removeClass('active');
		$(this).parent('li').addClass('active');

		var category = $(this).attr('data-filter');

		$('.project-item').each(function(){
			if($(this).is(category)){
				$(this).removeClass('filtered');
			}
			else{
				$(this).addClass('filtered');
			}

			$('#projects-container').masonry('reload');
		});

	});
	





	/*============================================
	Contact Form
	==============================================*/

	// Input Lock
	$('textarea').blur(function () {
	    $('#contact-wrapper textarea').each(function () {
	        $this = $(this);
	        if ( this.value != '' ) {
	          $this.addClass('focused');
	          $('textarea + label + span').css({'opacity': 1});
	        }
	        else {
	          $this.removeClass('focused');
	          $('textarea + label + span').css({'opacity': 0});
	        }
	    });
	});

	$('#contact-wrapper .field:first-child input').blur(function () {
	    $('#contact-wrapper .field:first-child input').each(function () {
	        $this = $(this);
	        if ( this.value != '' ) {
	          $this.addClass('focused');
	          $('.field:first-child input + label + span').css({'opacity': 1});
	        }
	        else {
	          $this.removeClass('focused');
	          $('.field:first-child input + label + span').css({'opacity': 0});
	        }
	    });
	});

	$('#contact-wrapper .field:nth-child(2) input').blur(function () {
	    $('#contact-wrapper .field:nth-child(2) input').each(function () {
	        $this = $(this);
	        if ( this.value != '' ) {
	          $this.addClass('focused');
	          $('.field:nth-child(2) input + label + span').css({'opacity': 1});
	        }
	        else {
	          $this.removeClass('focused');
	          $('.field:nth-child(2) input + label + span').css({'opacity': 0});
	        }
	    });
	});








	

});