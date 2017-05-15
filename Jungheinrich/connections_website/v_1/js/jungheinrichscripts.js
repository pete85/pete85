// Categories tabs
$(document).ready(function() {

    $('.leadTab').click(function() {
        var tab_class = $(this).attr('data-tab');
        $('.leadTab').removeClass('active-tab');
        $(this).addClass('active');
        $('.leadTab').removeClass('active-tab');
        $('.leadInfo').removeClass('active-lead');
        $(this).addClass('active-tab');
        $("."+tab_class).addClass('active-lead');
    });
});


$(document).ready(function() {
	$('.allTab').click(function() {
		$('.leadTab').removeClass('active-tab');
		$(this).addClass('active-tab');
		$('.leadInfo').addClass('active-lead');
	});
});






