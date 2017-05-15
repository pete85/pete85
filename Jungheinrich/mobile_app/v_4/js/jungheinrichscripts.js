// Hamburger menu
$(document).ready(function () {
		$('.mobile-nav-button').on('click', function() {
		$( ".mobile-nav-button .mobile-nav-button__line:nth-of-type(1)" ).toggleClass( "mobile-nav-button__line--1");
		$( ".mobile-nav-button .mobile-nav-button__line:nth-of-type(2)" ).toggleClass( "mobile-nav-button__line--2");  
		$( ".mobile-nav-button .mobile-nav-button__line:nth-of-type(3)" ).toggleClass( "mobile-nav-button__line--3");  

		$('.mobile-menu').toggleClass('mobile-menu--open');
		return false;
	}); 
});


var form = $("#enquiry_form").show();
 
form.steps({
    headerTag: "h3",
    bodyTag: "fieldset",
    transitionEffect: "slideLeft",
    onStepChanging: function (event, currentIndex, newIndex)
    {
        // Allways allow previous action even if the current form is not valid!
        if (currentIndex > newIndex)
        {
            return true;
        }
        // Needed in some cases if the user went back (clean up)
        if (currentIndex < newIndex)
        {
            // To remove error styles
            form.find(".body:eq(" + newIndex + ") label.error").remove();
            form.find(".body:eq(" + newIndex + ") .error").removeClass("error");
        }
        form.validate().settings.ignore = ":disabled,:hidden";
        return form.valid();
    },
    onStepChanged: function (event, currentIndex, priorIndex)
    {
        // Used to skip the "Warning" step if the user is old enough and wants to the previous step.
        if (currentIndex === 2 && priorIndex === 3)
        {
            form.steps("previous");
        }
    },
    onFinishing: function (event, currentIndex)
    {
        form.validate().settings.ignore = ":disabled";
        return form.valid();
    },
    onFinished: function (event, currentIndex)
    {
        window.location.href = "enquiry.php#thankyou";
    }
});

// Categories tabs
$(document).ready(function() {

    $('.leadTab').click(function() {
        var tab_class = $(this).attr('data-tab');
        $('.leadTab').removeClass('active');
        $(this).addClass('active');
        $('.leadTab').removeClass('active');
        $('.leadInfo').removeClass('active-lead');
        $(this).addClass('active');
        $("."+tab_class).addClass('active-lead');
    });
});


$(document).ready(function() {
	$('.allTab').click(function() {
		$('.leadTab').removeClass('active');
		$(this).addClass('active');
		$('.leadInfo').addClass('active-lead');
	});
});







