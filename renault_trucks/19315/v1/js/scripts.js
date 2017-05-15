/*!
 * Start Bootstrap - Grayscale Bootstrap Theme (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */

// jQuery to collapse the navbar on scroll
function collapseNavbar() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-left").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-left").removeClass("top-nav-collapse");
    }
}

$(window).scroll(collapseNavbar);
$(document).ready(collapseNavbar);

// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});


// Changes the bullet point on the nav bar for active element
$(document).ready(function() {
    $('.navAnchor').click(function() {
    $('.fa.fa-circle').removeClass('fa-circle').addClass('fa-circle-thin');
    //Adds it to the current element
    $(this).children('.fa').addClass('fa-circle').removeClass('fa-circle-thin');
    });
});



// Responsive menu
$(document).ready(function() {
    if($(window).width() < 768) {
        $('.navbar').removeClass('navbar-fixed-left navMinimised navFull').addClass('navbar-fixed-top');
        $('.txtMenu').css('display','block');
    } else {
        $('.navbar').removeClass('navbar-fixed-top').addClass('navbar-fixed-left');
        $('.txtMenu').css('display','none');
    }
});

$(window).on('resize', function() {
    if($(window).width() < 768) {
        $('.navbar').removeClass('navbar-fixed-left navMinimised navFull').addClass('navbar-fixed-top');
        $('.txtMenu').css('display','block');
    } else {
        $('.navbar').removeClass('navbar-fixed-top').addClass('navbar-fixed-left');
        $('.txtMenu').css('display','none');
    }
});


// NAVBAR

$(document).ready(function() {
    if($(window).width() > 768) {
            
        // Navbar expand
        $('.navbar-fixed-left').mouseover(function() {
        $('.navbar').removeClass('navMinimised').addClass('navFull');
        $('.txtMenu').css('display','block');
        });

        $('.navbar-fixed-left').click(function() {
        $('.navbar').removeClass('navMinimised').addClass('navFull');
        $('.txtMenu').css('display','block');
        });

        // Navbar fold
        $('.navbar-fixed-left').mouseleave(function() {
        $('.navbar').removeClass('navFull').addClass('navMinimised');
        $('.txtMenu').css('display','none');
        });

        $(window).scroll(function(){
        $('.navbar').removeClass('navFull').addClass('navMinimised');
        $('.txtMenu').css('display','none');  
        });

    };
});

// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function() {
    $(this).closest('.collapse').collapse('toggle');
});


// PAGE 2 categories

// Categories tabs
$(document).ready(function() {
    $('.products-tab').click(function() {
        var tab_id = $(this).attr('data-tab');
        $('.products-tab').removeClass('active-tab');
        $(this).addClass('active-tab');
        $('products-tab').removeClass('active-tab');
        $('.prod-cat').removeClass('active-cat');
        $(this).addClass('active-tab');
        $("#"+tab_id).addClass('active-cat');
    });
});



// ******************************************** YouTube videos ********************************************

$(document).ready(function(){
    $('#hash').lightGallery({
        download: false,
        counter: false,
        hash: true,
        galleryId: 1

    });

    $('#video-player-param').lightGallery({
        youtubePlayerParams: {
            modestbranding: 1,
            showinfo: 0,
            rel: 0,
            controls: 1
        },
        vimeoPlayerParams: {
            byline : 0,
            portrait : 0,
            color : 'A90707'     
        }
    }); 

    $('#video-thumbnails').lightGallery({
        loadYoutubeThumbnail: true,
        youtubeThumbSize: 'default',
        loadVimeoThumbnail: true,
        vimeoThumbSize: 'thumbnail_medium',
    });

    $('#hash2').lightGallery({
        download: false,
        counter: false,
        hash: true,
        galleryId: 2

    });

    $('#hash3').lightGallery({
        download: false,
        counter: false,
        hash: true,
        galleryId: 3

    });    
});










