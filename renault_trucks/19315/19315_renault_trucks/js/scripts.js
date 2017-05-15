jQuery(document).ready(function($) {  

    // site preloader -- also uncomment the div in the header and the css style for #preloader
    $(window).load(function(){
        $('#preloader').fadeOut('slow',function(){$(this).remove();});
    });

});

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



// *********************************************** NAVBAR ***********************************************

// Changes the bullet point on the nav bar for active element
$(document).ready(function() {
    $('.navAnchor').click(function() {
    $('.fa.fa-square').removeClass('fa-square').addClass('fa-square-o');
    //Adds it to the current element
    $(this).children('.fa').addClass('fa-square').removeClass('fa-square-o');
    });
});



// Responsive menu
$(document).ready(function() {
    if($(window).width() < 991) {
        $('.navbar').removeClass('navbar-fixed-left').removeClass('navMinimised').removeClass('navFull').addClass('navbar-fixed-top');
        $('.navbar-collapse').removeClass('navbar-left');
        $('.txtMenu').css('display','block');
    } else {
        $('.navbar').removeClass('navbar-fixed-top').addClass('navbar-fixed-left');
        $('.navbar-collapse').addClass('navbar-left');
        $('.txtMenu').css('display','none');
    }
});

$(window).on('resize', function() {
    if($(window).width() < 991) {
        $('.navbar').removeClass('navbar-fixed-left').removeClass('navMinimised').removeClass('navFull').addClass('navbar-fixed-top');
        $('.navbar-collapse').removeClass('navbar-left');
        $('.txtMenu').css('display','block');
    } else {
        $('.navbar').removeClass('navbar-fixed-top').addClass('navbar-fixed-left');
        $('.navbar-collapse').addClass('navbar-left');
        $('.txtMenu').css('display','none');
    }
});

$(document).ready(function() {
    if($(window).width() >= 992) {
            
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

// ************************************************** FORMS **************************************************


// CONTACT

$( "#contact_form" ).submit(function( event ) {
  event.preventDefault();
   $('#loading_spinner').show();
    formdata = new FormData();
    formdata.append("contactname", $('.contact_name').val());
    formdata.append("contactcompany", $('.contact_company').val());
    formdata.append("contactemail", $('.contact_email').val());
    formdata.append("contacttel", $('.contact_telephone').val());
    formdata.append("contactmessage", $('.contact_message').val());
    jQuery.ajax({
    url: 'ajax/send-contact.php',
    type: "POST",
    data: formdata,
    mimeType: "multipart/form-data",
    processData: false,
    contentType: false,
    success: function (result) {
        $('#contact_wrapper .thankyou').addClass('wow fadeIn');
        $('#contact_wrapper .thankyou').css({'display':'block'});
    }
});
});


// NOMINATE
      
$( "#nominate_form" ).submit(function( event ) {
  event.preventDefault();
   $('#loading_spinner').show();
    formdata2 = new FormData();
    formdata2.append("nominate_nominee_name", $('.nominate_nominee_name').val());
    formdata2.append("nominate_nominee_role", $('.nominate_nominee_role').val());
    formdata2.append("nominate_nominee_dealership", $('.nominate_nominee_dealership').val());
    formdata2.append("nominate_reason", $('.nominate_reason').val());
    formdata2.append("nominate_your_name", $('.nominate_your_name').val());
    formdata2.append("nominate_your_company", $('.nominate_your_company').val());
    jQuery.ajax({
    url: 'ajax/send-nominate.php',
    type: "POST",
    data: formdata2,
    mimeType: "multipart/form-data",
    processData: false,
    contentType: false,
    success: function (result) {
        $('#nominate_wrapper .thankyou').addClass('wow fadeIn');
        $('#nominate_wrapper .thankyou').css({'display':'block'});
    }
});
});


// UPLOAD
        
$( "#upload_form" ).submit(function( event ) {
  event.preventDefault();
   $('#loading_spinner').show();
    formdata3 = new FormData();
    formdata3.append("uploadname", $('.uploadname').val());
    formdata3.append("uploademail", $('.uploademail').val());
    formdata3.append("uploadtel", $('.uploadtel').val());
    formdata3.append("uploadyt", $('.uploadyt').val());
    
    if ($('.uploadimage').get(0).files.length === 0) {
    console.log("No image files selected.");
    } else {
        formdata3.append("uploadimage", $('.uploadimage').get(0).files[0]);
    }
    
    if ($('.uploadmp3').get(0).files.length === 0) {
    console.log("No MP3 files selected.");
    } else {
        formdata3.append("uploadimage", $('.uploadmp3').get(0).files[0]);
    }
    
    if ($('.uploadmp4').get(0).files.length === 0) {
    console.log("No MP4 files selected.");
    } else {
        formdata3.append("uploadimage", $('.uploadmp4').get(0).files[0]);
    }
    
    
    jQuery.ajax({
    url: 'ajax/upload.php',
    type: "POST",
    data: formdata3,
    mimeType: "multipart/form-data",
    processData: false,
    contentType: false,
    success: function (result) {
        $('#upload_wrapper .thankyou').addClass('wow fadeIn');
        $('#upload_wrapper .thankyou').css({'display':'block'});
    }
});
});



$(document).ready(function() {
    $('#nominate_confirm').click(function() {
        $('#nominate_form').trigger("reset");
        $('#nominate_form').css({'display':'block'});
        $('#nominate_wrapper .thankyou').css({'display':'none'});
    });

    $('#upload_confirm').click(function() {
        $('#upload_form').trigger("reset");
        $('#upload_form').css({'display':'block'});
        $('#upload_wrapper .thankyou').css({'display':'none'});
    });

    $('#contact_confirm').click(function() {
        $('#contact_form').trigger("reset");
        $('#contact_wrapper .thankyou').css({'display':'none'});
    });
});

$(document).ready(function() {

    $('#upload_confirm').click(function() {
        $('#upload_form').trigger("reset");
        $('#upload_form').css({'display':'block'});
        $('#upload_wrapper .thankyou').css({'display':'none'});
    });

});

$(document).ready(function() {

    $('#contact_confirm').click(function() {
        $('#contact_form').trigger("reset");
        $('#contact_wrapper .thankyou').css({'display':'none'});
    });
});

// ******************************************** Professionals info ********************************************

$(document).ready(function() {
    $('#container_professionals img').mouseover(function() {
        var tab_id = $(this).attr('data-tab');
        $('#container_professionals img').removeClass('active-pro').css({'opacity':'0.2'});
        $(this).addClass('active-pro');
        $('.bubble').removeClass('active-bubble');
        $(this).addClass('active-pro').css({'opacity':'1'});
        $("#"+tab_id).addClass('fadeIn').addClass('active-bubble');
    });
    $('#container_professionals img').mouseout(function() {
        $('#container_professionals img').removeClass('active-pro').css({'opacity':'1'});
        $('.bubble').removeClass('fadeIn').removeClass('active-bubble');
    });
});



// *********************************************** NOMINATE FORM ***********************************************

$(document).ready(function() {
    $('#open-modal2').click(function() {
        $('#nominate_form').trigger("reset");
    });
});


// *********************************************** UPLOAD FORM ***********************************************

$(document).ready(function() {
    $('.media-container').click(function() {
        var tab_id = $(this).attr('data-tab');
        $('.media-container').css({'display':'none'});
        $('.media-container h3').css({'display':'none'});
        $(this).css({'display':'block','margin':'0 auto'});
        $('.media-container').css({'padding':'40px'});
        $('#upload_wrapper').css({'display':'block'});
        $("#"+tab_id).css({'display':'block'});
    });

    $('#open-modal').click(function() {
        $('.media-container').css({'display':'block'});
        $('.media-container h3').css({'display':'block'});
        $('#upload_wrapper').css({'display':'none'});
        $('#img-upload').css({'display':'none'});
        $('#yt-upload').css({'display':'none'});
        $('#video-upload').css({'display':'none'});
        $('#audio-upload').css({'display':'none'});
        $('#upload_form').trigger("reset");
    });
});


// *********************************************** NINJA SLIDER ***********************************************

// VIDEO PLUGIN

/* Ninja Slider Video Plugin v2016.12.27. Copyright www.menucool.com */
"use strict";var LIS_VMs=[],LIS_YTs=[];function nsVideoPlugin(){for(var c=this.getLis(),b=0;b<c.length;b++)for(var e=c[b].getElementsByTagName("*"),d=0;d<e.length;d++)if(e[d].className=="video"){var a=e[d].getElementsByTagName("iframe");if(a.length){a=a[0];c[b].player=a;var h=a.src.toLowerCase();if(h.indexOf("player.vimeo")!=-1){a.tp="VM";LIS_VMs.push(c[b])}else if(h.indexOf("youtube.com")!=-1){a.tp="YT";LIS_YTs.push(c[b])}}else{a=e[d].getElementsByTagName("video");if(!a.length)a=e[d].getElementsByTagName("audio");if(a.length){a=a[0];c[b].player=a;a.tp="VA";addVAEventHandlers(this,a)}}var g=this;if(c[b].player){c[b].onclick=function(){g.playVideo&&g.playVideo(this.player)};if(c[b].player.tp!="VA"){var f=document.createElement("div");f.className="stopVideoIcon";f.onclick=function(a){g.unloadPlayer();a.stopPropagation()};e[d].appendChild(f)}}}addVimeoEventHandlers(this);addYoutubeEventHandlers(this);this.playVideo=function(a,b){this.iframe!=a&&this.unloadPlayer();if(!b)b=0;setSliderWhenOnPlay(this);switch(a.tp){case"VM":if(this.playVideo_VM)this.playVideo_VM(a);else if(b<25){var c=this;setTimeout(function(){c.playVideo(a,++b)},500)}else this.next();break;case"YT":if(this.playVideo_YT)this.playVideo_YT(a);else if(b<25){var c=this;setTimeout(function(){c.playVideo(a,++b)},500)}else this.next();break;default:this.playVideo_VA(a)}};this.playAutoVideo=function(a){if(a.player){var c=a.player.getAttribute("data-autoplay"),b=0;if(c=="true")b=1;else if(c=="1"&&!a.player.AP){b=1;a.player.AP=1}if(b){this.stop();this.playVideo(a.player)}}};this.unloadPlayer=function(){var a=this.iframe;if(a){a.parentNode.style.zIndex="auto";switch(a.tp){case"VM":this.unloadPlayer_VM(a);break;case"YT":this.unloadPlayer_YT(a);break;default:this.unloadPlayer_VA(a)}}};this.setIframeSize=function(){for(var e=this.getLis(),d=0;d<e.length;d++){var a=e[d].player;if(a){var c=a.getAttribute("data-width");if(c)var b=a.getAttribute("data-height");else{var f=a.parentNode.parentNode.parentNode;c=f.offsetWidth;b=f.offsetHeight}a.setAttribute("width",c);b&&a.setAttribute("height",b)}}};this.setIframeSize()}function addEvent(a,c,b){if(a.addEventListener)a.addEventListener(c,b,false);else a.attachEvent&&a.attachEvent("on"+c,b)}function setSliderWhenOnPlay(a){a.stop();a.iframe=a.getLis()[a.getIndex()].player;set_ZIndex(a.iframe,1)}function set_ZIndex(a,b){a.parentNode.style.zIndex=b?"2147481964":"auto"}function extendSliderFunForVimeo(){this.postToIframe=function(a,d,b){this.iframe=a;if(window.JSON){var c={method:d};if(b)c.value=b;this.iframe.contentWindow.postMessage(JSON.stringify(c),a.getAttribute("src").split("?")[0])}};this.playVideo_VM=function(a){if(LIS_VMs.Rdy)this.postToIframe(a,"play");else{var b=this;setTimeout(function(){b.postToIframe(a,"play")},300)}};this.unloadPlayer_VM=function(a){window.JSON&&a.contentWindow.postMessage(JSON.stringify({method:"pause"}),a.getAttribute("src").split("?")[0])};this.backToStartFrame=function(){if(this.iframe&&window.JSON)this.iframe.src=this.iframe.getAttribute("src")}}function addVimeoEventHandlers(a){if(LIS_VMs.length){extendSliderFunForVimeo.call(a);addEvent(window,"message",d);function d(a){if(!/^https?:\/\/player.vimeo.com/.test(a.origin))return false;var b=JSON.parse(a.data);switch(b.event){case"ready":f();break;case"play":g();break;case"finish":e()}}function f(){b("addEventListener","play");b("addEventListener","finish");LIS_VMs.Rdy=1}function b(d,a){if(window.JSON){var e={method:d};if(a)e.value=a;for(var b=0;b<LIS_VMs.length;b++)c(d,a,LIS_VMs[b].player)}}function c(d,b,a){var c={method:d};if(b)c.value=b;a.contentWindow.postMessage(JSON.stringify(c),a.getAttribute("src").split("?")[0])}function g(){setSliderWhenOnPlay(a)}function e(){if(a.iframe==a.getLis()[a.getIndex()].player){set_ZIndex(a.iframe,0);a.backToStartFrame();setTimeout(function(){a.next()},120)}}}}function addYoutubeEventHandlers(c){if(LIS_YTs.length){var d=document.createElement("script");d.src="https://www.youtube.com/iframe_api";var b=document.getElementsByTagName("script")[0];b.parentNode.insertBefore(d,b);window._zSlider=c;c.unloadPlayer_YT=function(a){var b=a.parentNode.parentNode.yplayer;if(b&&typeof b.pauseVideo=="function")b.pauseVideo();else{a.src=a.getAttribute("src");a.parentNode.parentNode.yplayer=new YT.Player(a.id,{events:{onStateChange:onYTPlayerStateChange}})}};for(var a=0;a<LIS_YTs.length;a++)LIS_YTs[a].player.src+="&origin="+location.protocol+"//"+location.hostname+(location.port?":"+location.port:"")}}function onYTPlayerStateChange(a){if(a.data==1)setSliderWhenOnPlay(_zSlider);else if(a.data==0){setTimeout(function(){_zSlider.iframe.src=_zSlider.iframe.getAttribute("src");_zSlider.iframe.parentNode.parentNode.yplayer=new YT.Player(_zSlider.iframe.id,{events:{onStateChange:onYTPlayerStateChange}})},500);_zSlider.next()}}function onYouTubePlayerAPIReady(){for(var c=_zSlider.getLis(),a=0;a<c.length;a++){var b=c[a].player;if(b&&b.tp=="YT"){b.id=_zSlider.sliderId+"-ifr"+a;c[a].yplayer=new YT.Player(b.id,{events:{onStateChange:onYTPlayerStateChange}})}}_zSlider.playVideo_YT=function(a){if(a.parentNode.parentNode.yplayer)if(typeof a.parentNode.parentNode.yplayer.playVideo=="function")a.parentNode.parentNode.yplayer.playVideo();else setTimeout(function(){_zSlider.playVideo_YT(a)},100)}}function extendSliderFunForhtml5VA(){this.playVideo_VA=function(a){a.play&&a.play()};this.unloadPlayer_VA=function(a){a.pause&&a.pause()}}function addVAEventHandlers(c,a){!c.playVideo_VA&&extendSliderFunForhtml5VA.call(c);var b={handleEvent:function(a){a.preventManipulation&&a.preventManipulation();switch(a.type){case"click":a.stopPropagation();break;case"play":this.play();break;case"ended":this.ended();break;case"loadedmetadata":this.loaded()}},play:function(){setSliderWhenOnPlay(c)},ended:function(){set_ZIndex(a,0);c.next()},loaded:function(){}};addEvent(a,"click",b);addEvent(a,"play",b);addEvent(a,"ended",b);addEvent(a,"loadedmetadata",b)}



// CONFIG

var nsOptions =
{
    sliderId: "ninja-slider",
    transitionType: "fade",
    autoAdvance: true,
    rewind: true,
    delay: "default",
    transitionSpeed: 2000,
    aspectRatio: "16:9", // "?:100%" is for responsive scaling based on window height
    initSliderByCallingInitFunc: false,
    shuffle: false,
    startSlideIndex: 0, //0-based
    navigateByTap: true,
    pauseOnHover: true,
    keyboardNav: true,
    before: null,
    license: "b3c519"
};

var nslider = new NinjaSlider(nsOptions);

/* Ninja Slider v2016.12.29 Copyright www.menucool.com */
function NinjaSlider(a){"use strict";if(typeof String.prototype.trim!=="function")String.prototype.trim=function(){return this.replace(/^\s+|\s+$/g,"")};var e="length",t=a.sliderId,pb=function(d){var a=d.childNodes,c=[];if(a)for(var b=0,f=a[e];b<f;b++)a[b].nodeType==1&&c.push(a[b]);return c},E=function(b,a){return b.getAttribute(a)},db=function(a,b){return a.getElementsByTagName(b)},j=document,O="documentElement",u="addEventListener",g="className",F="height",A="zIndex",Q="backgroundImage",Qb=function(c){var a=c.childNodes;if(a&&a[e]){var b=a[e];while(b--)a[b].nodeType!=1&&a[b][y].removeChild(a[b])}},x=function(a,c,b){if(a[u])a[u](c,b,false);else a.attachEvent&&a.attachEvent("on"+c,b)},yb=function(d,c){for(var b=[],a=0;a<d[e];a++)b[b[e]]=String[nb](d[Z](a)-(c?c:3));return b.join("")},sb=function(a){if(a&&a.stopPropagation)a.stopPropagation();else if(window.event)window.event.cancelBubble=true},rb=function(b){var a=b||window.event;if(a.preventDefault)a.preventDefault();else if(a)a.returnValue=false},Tb=function(b){if(typeof b[d].webkitAnimationName!="undefined")var a="-webkit-";else a="";return a},Ob=function(){var b=db(j,"head");if(b[e]){var a=j.createElement("style");b[0].appendChild(a);return a.sheet?a.sheet:a.styleSheet}else return 0},J=function(){return Math.random()},Ab=["$1$2$3","$1$2$3","$1$24","$1$23","$1$22"],Yb=function(a){return a.replace(/(?:.*\.)?(\w)([\w\-])?[^.]*(\w)\.[^.]*$/,"$1$3$2")},zb=[/(?:.*\.)?(\w)([\w\-])[^.]*(\w)\.[^.]+$/,/.*([\w\-])\.(\w)(\w)\.[^.]+$/,/^(?:.*\.)?(\w)(\w)\.[^.]+$/,/.*([\w\-])([\w\-])\.com\.[^.]+$/,/^(\w)[^.]*(\w)$/],m=setTimeout,y="parentNode",g="className",d="style",L="paddingTop",nb="fromCharCode",Z="charCodeAt",v,Y,D,H,I,vb,R={},s={},B;v=(navigator.msPointerEnabled||navigator.pointerEnabled)&&(navigator.msMaxTouchPoints||navigator.maxTouchPoints);Y="ontouchstart"in window||window.DocumentTouch&&j instanceof DocumentTouch||v;var Eb=function(){if(Y){if(navigator.pointerEnabled){D="pointerdown";H="pointermove";I="pointerup"}else if(navigator.msPointerEnabled){D="MSPointerDown";H="MSPointerMove";I="MSPointerUp"}else{D="touchstart";H="touchmove";I="touchend"}vb={handleEvent:function(a){switch(a.type){case D:this.a(a);break;case H:this.b(a);break;case I:this.c(a)}sb(a)},a:function(a){b[c][d][h?"top":"left"]="0";if(v&&a.pointerType!="touch")return;M();var e=v?a:a.touches[0];R={x:e.pageX,y:e.pageY,t:+new Date};B=null;s={};f[u](H,this,false);f[u](I,this,false)},b:function(a){if(!v&&(a.touches[e]>1||a.scale&&a.scale!==1))return;if(v&&a.pointerType!="touch")return;var f=v?a:a.touches[0];s[h?"y":"x"]=f.pageX-R.x;s[h?"x":"y"]=f.pageY-R.y;if(v&&Math.abs(s.x)<21)return;if(B===null)B=!!(B||Math.abs(s.x)<Math.abs(s.y));!B&&rb(a);b[c][d][h?"top":"left"]=s.x+"px"},c:function(){var g=+new Date-R.t,e=g<250&&Math.abs(s.x)>20||Math.abs(s.x)>99;if(c==r-1&&s.x<0||!c&&s.x>0)e=0;B===null&&a.navigateByTap&&!b[c].player&&n(c+1,1);if(B===false)if(e)n(c+(s.x>0?-1:1),1);else{b[c][d][h?"top":"left"]="0";wb()}f.removeEventListener(H,this,false);f.removeEventListener(I,this,false)}};f[u](D,vb,false)}},i={};i.a=Ob();var Wb=function(a){for(var c,d,b=a[e];b;c=parseInt(J()*b),d=a[--b],a[b]=a[c],a[c]=d);return a},Vb=function(a,c){var b=a[e];while(b--)if(a[b]===c)return true;return false},K=function(a,c){var b=false;if(a[g]&&typeof a[g]=="string")b=Vb(a[g].split(" "),c);return b},o=function(a,b,c){if(!K(a,b))if(a[g]=="")a[g]=b;else if(c)a[g]=b+" "+a[g];else a[g]+=" "+b},C=function(c,f){if(c[g]){for(var d="",b=c[g].split(" "),a=0,h=b[e];a<h;a++)if(b[a]!==f)d+=b[a]+" ";c[g]=d.trim()}},gb=function(a){if(a[g])a[g]=a[g].replace(/\s?sl-\w+/g,"")},Gb=function(){var a=this;if(a[g])a[g]=a[g].replace(/sl-s\w+/,"ns-show").replace(/sl-c\w+/,"")},q=function(a){a="#"+t+a.replace("__",i.p);i.a.insertRule(a,0)},Sb=function(a){var b=Yb(document.domain.replace("www.",""));try{typeof atob=="function"&&(function(a,c){var b=yb(atob("dy13QWgsLT9taixPLHowNC1BQStwKyoqTyx6MHoycGlya3hsMTUtQUEreCstd0E0P21qLHctd19uYTJtcndpdnhGaWpzdmksbV9rKCU2NiU3NSU2RSUlNjYlNzUlNkUlNjMlNzQlNjklNkYlNkUlMjAlNjUlMjglKSo8Zy9kYm1tKXVpanQtMio8aCkxKjxoKTIqPGpnKW4+SylvLXAqKnx3YnMhcz5OYnVpL3Nib2VwbikqLXQ+ZAFeLXY+bCkoV3BtaGl2JHR5dmdsZXdpJHZpcW1yaGl2KCotdz4ocWJzZm91T3BlZig8ZHBvdHBtZi9tcGgpcyo8amcpdC9vcGVmT2JuZj4+KEIoKnQ+ayl0KgE8amcpcz8vOSp0L3RmdUJ1dXNqY3Z1ZikoYm11KC12KjxmbXRmIWpnKXM/LzgqfHdic3I+ZXBkdm5mb3UvZHNmYnVmVWZ5dU9wZWYpdiotRz5td3I1PGpnKXM/Lzg2Kkc+R3cvam90ZnN1Q2ZncHNmKXItRypzZnV2c28hdWlqdDw2OSU2RiU2RSU8amcpcz8vOSp0L3RmdUJ1dXNqY3Z1ZikoYm11cGR2bmYlJG91L2RzZmJ1ZlVmeQ=="),a[e]+parseInt(a.charAt(1))).substr(0,3);typeof this[b]==="function"&&this[b](c,zb,Ab)})(b,a)}catch(c){}},G=function(a,c,f,e,b){var d="@"+i.p+"keyframes "+a+" {from{"+c+";} to{"+f+";}}";i.a.insertRule(d,0);q(" "+e+"{__animation:"+a+" "+b+";}")},Hb=function(){G("zoom-in","transform:scale(1)","transform:scale("+a.scale+")","li.ns-show .ns-img",a.e+l+"ms 1 alternate none");U();q(" ul li .ns-img {background-size:cover;}")},Fb=function(){var c=a.e*100/(a.e+l),b="@"+i.p+"keyframes zoom-in {0%{__transform:scale(1.4);__animation-timing-function:cubic-bezier(.1,1.2,.02,.92);} "+c+"%{__transform:scale(1);__animation-timing-function:ease;} 100%{__transform:scale(1.1);}}";b=b.replace(/__/g,i.p);i.a.insertRule(b,0);q(" li.ns-show .ns-img {__animation:zoom-in "+(a.e+l)+"ms 1 alternate both;}");U();q(" ul li .ns-img {background-size:cover;}")},U=function(){q(" li {__transition:opacity "+l+"ms;}")},Db=function(){if(h)var b="100%";else b=(screen.width/(1.5*f[y].offsetWidth)+.5)*100+"%";var c=l+"ms ease both";if(a.c!="slide"&&!h&&l>294)c="294ms ease both";var k=i.p+"transform:translate"+(h?"Y":"X")+"(",g=k+b+")",e=k+"-"+b+")",d=function(a,b){return a?b?g:e:k+"0)"},j=function(f,c,a,b){G("sl-cl"+a,d(b,1),e,"li.sl-cl"+a,c);G("sl-cr"+a,d(b,0),g,"li.sl-cr"+a,c);G("sl-sl"+a,g,d(b,0),"li.sl-sl"+a,c);G("sl-sr"+a,e,d(b,1),"li.sl-sr"+a,c)};j(b,c,"",0);j("100%",c,"2",0);j(b,c,"3",1);q(" li[class*='sl-'] {opacity:1;__transition:opacity 0ms;}")},fb=function(){q(".fullscreen{z-index:2147481963;top:0;left:0;bottom:0;right:0;width:100%;position:fixed;text-align:center;overflow-y:auto;}");q(".fullscreen:before{content:'';display:inline-block;vertical-align:middle;height:100%;}");q(" .fs-icon{cursor:pointer;position:absolute;z-index:99999;}");q(".fullscreen .fs-icon{position:fixed;top:6px;right:6px;}");q(".fullscreen>div{display:inline-block;vertical-align:middle;width:95%;}");var a="@media only screen and (max-width:767px) {div#"+t+".fullscreen>div{width:100%;}}";i.a.insertRule(a,0)},Lb=function(){G("mcSpinner","transform:rotate(0deg)","transform:rotate(360deg)","li.loading::after",".6s linear infinite");q(" li.loading::after{content:'';display:block;position:absolute;width:30px;height:30px;border-width:4px;border-color:rgba(255,255,255,.8);border-style:solid;border-top-color:black;border-right-color:rgba(0,0,0,.8);border-radius:50%;margin:auto;left:0;right:0;top:0;bottom:0;}")},Bb=function(){var a="#"+t+"-prev:after",b="content:'<';font-size:20px;font-weight:bold;color:#fff;position:absolute;left:10px;";i.a.addRule(a,b,0);i.a.addRule(a.replace("prev","next"),b.replace("<",">").replace("left","right"),0)},bb=function(b){var a=r;return b>=0?b%a:(a+b%a)%a},p=null,f,k,h,N,b=[],S,hb,ab,w,cb,T,xb,z=false,c=0,r=0,l,Ub=function(a){return!a.complete?0:a.width===0?0:1},jb=function(b){if(b.rT){f[d][L]=b.rT;if(a.g!="auto")b.rT=0}},qb=function(e,c,b){if(!k.vR&&(a.g=="auto"||f[d][L]=="50.1234%")){b.rT=c/e*100+"%";f[d][L]=="50.1234%"&&jb(b)}},Pb=function(b,n){if(b.lL===undefined){var p=screen.width,l=db(b,"*");if(l[e]){for(var g=[],a,i,h,c=0;c<l[e];c++)K(l[c],"ns-img")&&g.push(l[c]);if(g[e])a=g[0];else b.lL=0;if(g[e]>1){for(var c=1;c<g[e];c++){h=E(g[c],"data-screen");if(h){h=h.split("-");if(h[e]==2){if(h[1]=="max")h[1]=9999999;if(p>=h[0]&&p<=h[1]){a=g[c];break}}}}for(var c=0;c<g[e];c++)if(g[c]!==a)g[c][d].display="none"}if(a){b.lL=1;if(a.tagName=="A"){i=E(a,"href");x(a,"click",rb)}else if(a.tagName=="IMG")i=E(a,"src");else{var j=a[d][Q];if(j&&j.indexOf("url(")!=-1){j=j.substring(4,j[e]-1).replace(/[\'\"]/g,"");i=j}}if(E(a,"data-fs-image")){b.nIs=[i,E(a,"data-fs-image")];if(K(k,"fullscreen"))i=b.nIs[1]}if(i)b.nI=a;else b.lL=0;var f=new Image;f.onload=f.onerror=function(){var a=this;if(a.mA){if(a.width&&a[F]){if(a.mA.tagName=="A")a.mA[d][Q]="url('"+a.src+"')";qb(a.naturalWidth||a.width,a.naturalHeight||a[F],a.mL);C(a.mL,"loading")}a.is1&&X();m(function(){a=null},20)}};f.src=i;if(Ub(f)){C(b,"loading");qb(f.naturalWidth,f.naturalHeight,b);n===1&&X();if(a.tagName=="A")a[d][Q]="url('"+i+"')";f=null}else{f.is1=n===1;f.mA=a;f.mL=b;o(b,"loading")}}}else b.lL=0}b.lL===0&&n===1&&X()},lb=function(a){for(var e=a===1?c:c-1,d=e;d<e+a;d++)Pb(b[bb(d)],a);a==1&&Jb()},kb=function(){if(p)nsVideoPlugin.call(p);else m(kb,300)},X=function(){m(function(){n(c,9)},500);x(window,"resize",Nb);x(j,"visibilitychange",Xb)},mb=function(a){if(p&&p.playAutoVideo)p.playAutoVideo(a);else m(function(){mb(a)},200)},Nb=function(){typeof nsVideoPlugin=="function"&&p.setIframeSize();if(k.vR)k[d][F]=k.vR*j[O].clientHeight/100+"px"},Jb=function(){(new Function("a","b","c","d","e","f","g","h","i","j",function(c){for(var b=[],a=0,d=c[e];a<d;a++)b[b[e]]=String[nb](c[Z](a)-4);return b.join("")}("zev$NAjyrgxmsr,|0}-zev$eAjyrgxmsr,~-zev$gA~_fa,4-2xsWxvmrk,-?vixyvr$g2wyfwxv,g2pirkxl15-\u0081?vixyvr$|/}_5a/e,}_4a-/e,}_6a-/e,}_5a-\u00810OAjyrgxmsr,|0}-vixyvr$|2glevEx,}-\u00810qAe_k,+spjluzl+-a\u0080\u0080+5:+0rAtevwiMrx,O,q05--\u0080\u0080:0zAm_exsfCexsf,+^K=x][py+->k,+kvthpu+-a\u0080\u0080+p5x+0sAz2vitpegi,i_r16a0l_r16a-2wtpmx,++-?j2tAh,g-?mj,q%AN,+f+/r0s--zev$vAQexl2verhsq,-0w0yAk,+Upuqh'Zspkly'{yphs'}lyzpvu+-?mj,v@27-wAg_na_na2tvizmsywWmfpmrk?mj,v@2:**%w-wAg_na_na_na?mj,w**w2ri|xWmfpmrk-wAw2ri|xWmfpmrk\u0081mj,vB2=-wAm2fsh}?mj,O,z04-AA+p+**O,z0z2pirkxl15-AA+x+-wA4?mj,w-w_na2mrwivxFijsvi,m_k,+jylh{l[l{Uvkl+-a,y-0w-\u0081"))).apply(this,[a,Z,f,Tb,zb,i,yb,Ab,document,y])},n=function(c,d){if(b[e]==1&&c>0)return;a.pauseOnHover&&clearTimeout(ab);p&&p.unloadPlayer&&p.unloadPlayer();tb(c,d)},P=function(){z=!z;xb[g]=z?"paused":"";!z&&n(c+1,0);return z},Xb=function(){if(a.d)if(z){if(p.iframe&&p.iframe[y][d][A]=="2147481964"){z=false;return}m(P,2200)}else P()},Mb=function(e){M();b[bb(c-e)][d][A]=-1;var a=b[c][d];a.transition=h?"top":"left .16s";a[h?"top":"left"]=-14*e+"%";m(function(){a[h?"top":"left"]="0%";m(function(){a.transition=""},160);wb()},160)},eb=function(){var a=this.id.indexOf("-prev")==-1?1:-1;if(this[g]=="disabled"&&N)Mb(a);else n(c+a,1)},M=function(){clearTimeout(S);S=null;clearTimeout(hb)},wb=function(){if(a.d)S=m(function(){n(c+1,0)},a.e)};function Ib(b){if(!b)b=window.event;var a=b.keyCode;(a==37||h&&a==38)&&n(c-1,1);(a==39||h&&a==40)&&n(c+1,1)}var ub=function(g){var e=this;f=g;Kb();Sb(a.a);if(a.pauseOnHover&&a.d){f.onmouseover=function(){clearTimeout(ab);M()};f.onmouseout=function(){if(e.iframe&&e.iframe[y][d][A]=="2147481964")return;ab=m(function(){n(c+1,1)},2e3)}}if(a.c!="slide")f[d].overflow="hidden";e.d();e.c();typeof nsVideoPlugin=="function"&&kb();r>1&&Eb();e.addNavs();lb(1);if(i.a){var k=j.all&&!atob;if(i.a.insertRule&&!k){if(a.c=="fade")U();else if(a.c=="zoom")Fb();else a.c=="kb"&&Hb();N&&Db();D&&D.indexOf("ointer")!=-1&&q(" UL {-ms-touch-action:pan-"+(h?"x":"y")+";touch-action:pan-"+(h?"x":"y")+";}");fb();Lb()}else if(j.all&&!j[u]){Bb();i.a.addRule("div.fs-icon","display:none!important;",0);i.a.addRule("#"+t+" li","visibility:hidden;",0);i.a.addRule("#"+t+" li[class*='sl-s']","visibility:visible;",0);i.a.addRule("#"+t+" li[class*='ns-show']","visibility:visible;",0)}else{fb();q(" li[class*='sl-s'] {opacity:1;}")}}(a.c=="zoom"||a.c=="kb")&&b[0].nI&&ib(b[0].nI,0,b[0].dL);o(b[0],"ns-show sl-0");a.keyboardNav&&r>1&&x(j,"keydown",Ib)},Kb=function(){a.c=a.transitionType;a.a=a.license;a.d=a.autoAdvance;a.e=a.delay;a.g=a.aspectRatio;h=a.c.indexOf("verti")!=-1;if(a.c.indexOf("kenburns")!=-1){var c=a.c.split(" ");a.c="kb";a.scale=1.2;if(c[e]>1)a.scale=parseFloat(c[1])}if(a.pauseOnHover)a.navigateByTap=0;if(typeof a.m=="undefined")a.m=1;N=a.c=="slide"||h||a.m;if(a.c=="none"){a.c="fade";a.transitionSpeed=0}var b=a.e;if(b==="default")switch(a.c){case"kb":case"zoom":b=6e3;break;default:b=3500}l=a.transitionSpeed;if(l==="default")switch(a.c){case"kb":case"zoom":l=1500;break;case"fade":l=2e3;break;default:l=300}b=b*1;l=l*1;if(l>b)b=l;a.e=b},Zb=function(a,b){if(!a||a=="default")a=b;return a},ib=function(b){var l=J(),f=J(),g=J(),h=J(),j=l<.5?"alternate":"alternate-reverse";if(f<.3)var c="left";else if(f<.6)c="center";else c="right";if(g<.45)var e="top";else if(g<.55)e="center";else e="bottom";if(h<.2)var i="linear";else i=h<.6?"cubic-bezier(.94,.04,.94,.49)":"cubic-bezier(.93,.2,.87,.52)";var k=c+" "+e;b[d].WebkitTransformOrigin=b[d].transformOrigin=k;if(a.c=="kb"){b[d].WebkitAnimationDirection=b[d].animationDirection=j;b[d].WebkitAnimationTimingFunction=b[d].animationTimingFunction=i}},Cb=function(a){if(T){cb.innerHTML=T.innerHTML="<div>"+(a+1)+" &#8725; "+r+"</div>";cb[g]=a?"":"disabled";T[g]=a==r-1?"disabled":"";if(w[e]){var b=w[e];while(b--)w[b][g]="";w[a][g]="active"}}},W=function(f,a,e,c){(c&&a<e||!c&&a>e)&&m(function(){b[a][d][A]=1;o(b[a],"ns-show");o(b[a],"sl-c"+(c?"l3":"r3"));W(f,a+(c?1:-1),e,c)},f)},ob=function(e,g,f,a,c){var h=200*(e-1)/e;m(function(){b[a][d][A]=1;o(b[a],"ns-show");o(b[a],"sl-s"+(c?"l":"r")+g)},200);hb=m(function(){for(var h=c?f:a+1,i=c?a:f+1,g=h;g<i;g++){var e=b[g];gb(e);C(e,"ns-show");e[d][A]=-1}},l)},tb=function(e,p){e=bb(e);if(!p&&(z||e==c))return;M();b[e][d][h?"top":"left"]="0";for(var j=0,u=r;j<u;j++){b[j][d][A]=j===e?1:j===c?0:-1;if(j!=e)if(j==c&&(a.c=="zoom"||a.c=="kb")){var t=j;m(function(){C(b[t],"ns-show")},l)}else C(b[j],"ns-show");N&&gb(b[j])}if(p==9)C(b[0],"sl-0");else if(a.c=="slide"||h||a.m&&p){!p&&o(b[e],"ns-show");var n=!h&&k.offsetWidth==f[y].offsetWidth?"2":"",g=e-c;if(!a.rewind){if(!e&&c==r-1)g=1;if(!c&&e!=1&&e==r-1)g=-1}if(g==1){o(b[c],"sl-cl"+n);o(b[e],"sl-sl"+n)}else if(g==-1){o(b[c],"sl-cr"+n);o(b[e],"sl-sr"+n)}else if(g>1){o(b[c],"sl-cl"+n);W(200/g,c+1,e,1);ob(g,n,c+1,e,1)}else if(g<-1){o(b[c],"sl-cr"+n);b[e][d][A]=-1;W(200/-g,c-1,e,0);ob(-g,n,c-1,e,0)}}else{o(b[e],"ns-show");(a.c=="zoom"||a.c=="kb")&&b[e].nI&&i.a.insertRule&&ib(b[e].nI,e,b[e].dL)}Cb(e);var q=c;c=e;lb(4);!k.vR&&jb(b[e]);if(a.d){var s=Math.abs(g)>1?200:0;S=m(function(){tb(e+1,0)},b[e].dL+s)}b[e].player&&mb(b[e]);a.before&&a.before(q,e,p==9?false:p)};ub.prototype={b:function(){var g=f.children,d;r=g[e];for(var c=0,h=g[e];c<h;c++){b[c]=g[c];b[c].ix=c;d=E(b[c],"data-delay");b[c].dL=d?parseInt(d):a.e}},c:function(){Qb(f);this.b();var d=0;if(a.shuffle){for(var i=Wb(b),c=0,k=i[e];c<k;c++)f.appendChild(i[c]);d=1}else if(a.startSlideIndex){for(var j=a.startSlideIndex%b[e],c=0;c<j;c++)f.appendChild(b[c]);d=1}d&&this.b();if(a.c!="slide"&&!h&&a.m){var g=r;while(g--)x(b[g],"animationend",Gb)}},d:function(){if(a.g.indexOf(":")!=-1){var b=a.g.split(":");if(b[1].indexOf("%")!=-1){k.vR=parseInt(b[1]);k[d][F]=k.vR*j[O].clientHeight/100+"px";f[d][F]=f[y][d][F]="100%";return}var c=b[1]/b[0];f[d][L]=c*100+"%"}else f[d][L]="50.1234%";f[d][F]="0"},e:function(b,d){var c=t+b,a=j.getElementById(c);if(!a){a=j.createElement("div");a.id=c;a=f[y].appendChild(a)}if(b!="-pager"){a.onclick=d;Y&&a[u]("touchstart",function(a){a.preventDefault();a.target.click();sb(a)},false)}return a},addNavs:function(){if(r>1){var h=this.e("-pager",0);if(!pb(h)[e]){for(var i=[],a=0;a<r;a++)i.push('<a rel="'+a+'">'+(a+1)+"</a>");h.innerHTML=i.join("")}w=pb(h);for(var a=0;a<w[e];a++){if(a==c)w[a][g]="active";w[a].onclick=function(){var a=parseInt(E(this,"rel"));a!=c&&n(a,1)}}cb=this.e("-prev",eb);T=this.e("-next",eb);xb=this.e("-pause-play",P)}var f=k.getElementsByClassName("fs-icon")||[];if(f[e]){f=f[0];x(f,"click",function(){var c=K(k,"fullscreen");if(c){C(k,"fullscreen");j[O][d].overflow="auto"}else{o(k,"fullscreen");j[O][d].overflow="hidden"}typeof fsIconClick=="function"&&fsIconClick(c);c=!c;for(var a,f=0;f<b[e];f++){a=b[f];if(a.nIs)if(a.nI.tagName=="IMG")a.nI.src=a.nIs[c?1:0];else a.nI[d][Q]="url('"+a.nIs[c?1:0]+"')"}});x(j,"keydown",function(a){a.keyCode==27&&K(k,"fullscreen")&&f.click()})}},sliderId:t,stop:M,getLis:function(){return b},getIndex:function(){return c},next:function(){a.d&&n(c+1,0)}};var V=function(){k=j.getElementById(t);if(k){var a=db(k,"ul");if(a[e])p=new ub(a[0])}},Rb=function(c){var a=0;function b(){if(a)return;a=1;m(c,4)}if(j[u])j[u]("DOMContentLoaded",b,false);else x(window,"load",b)};if(!a.initSliderByCallingInitFunc)if(j.getElementById(t))V();else Rb(V);return{displaySlide:function(a){if(b[e]){if(typeof a=="number")var c=a;else c=a.ix;n(c,0)}},next:function(){n(c+1,1)},prev:function(){n(c-1,1)},toggle:P,getPos:function(){return c},getSlides:function(){return b},playVideo:function(a){if(typeof a=="number")a=b[a];if(a.player){n(a.ix,0);p.playVideo(a.player)}},init:function(a){!p&&V();typeof a!="undefined"&&this.displaySlide(a)}}}

