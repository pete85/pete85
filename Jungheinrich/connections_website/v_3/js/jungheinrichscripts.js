// Categories tabs
$(document).ready(function() {

    $('.leadTab').click(function() {
        var tab_class = $(this).attr('data-tab');
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


// EXPAND/HIDE ENQUIRY TYPE and CONTACT INFO

$('.btnExpand').click(function() {
    
    var tab_class = $(this).attr('data-tab');
    
    if ($('.btnExpand').hasClass('fa-minus-circle')) {
        $('.fa').removeClass('fa-minus-circle'); 
        $('.fa').addClass('fa-plus-circle');
        $('.enquiryDetails').removeClass('expanded');
        $('.contactDetails').removeClass('expanded');
        console.log("Hide successful");       
    } else {
        $('.fa').removeClass('fa-minus-circle');
        $('.enquiryDetails').removeClass('expanded');
        $('.contactDetails').removeClass('expanded');
        $(this).removeClass('fa-plus-circle');               
        $(this).addClass('fa-minus-circle');
        $("."+tab_class).addClass('expanded');
        console.log("Expand successful");
    };  
});


// LEADS LIST POUND SYMBOL IN VALUE FIELD

$(".valueInput").keydown(function(e) {
    var oldvalue=$(this).val();
    var field=this;
    setTimeout(function () {
        if(field.value.indexOf('&pound;') !== 0) {
            $(field).val(oldvalue);
        } 
    }, 1);
});





