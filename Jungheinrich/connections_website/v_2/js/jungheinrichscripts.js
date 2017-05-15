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


// SEARCH FILTERS - LEADS.PHP

// $("#filter-enquiry").change(function(){
//     $("#tblLeads").find("p").each(function(){
//         if($(this).text() != $("#filter-enquiry").val()) $(this).hide();
//         else $(this).show();
//     });
// });

 $(document).ready(function () {
    $('select#filter-enquiry').bind('change', function () {
        $('select.ddlFilterTableRow').attr('disabled', 'disabled');
       $('#tableRegisterKids').find('.Row').hide();
        var critriaAttribute = '';

        $('select.ddlFilterTableRow').each(function () {
            if ($(this).val() != '0') {
                critriaAttribute += '[data-' + $(this).data('attribute') + '="' + $(this).val() + '"]';
            }
        });

        $('#tableRegisterKids').find('.Row' + critriaAttribute).show();
        $('#headerCount').html($('table#tableRegisterKids tr.Row:visible').length + ' Registered Kids');
        $('select.ddlFilterTableRow').removeAttr('disabled');
    });
});

























function filterSource() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("filter-source");
  filter = input.value.toUpperCase();
  table = document.getElementById("tblLeads");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[5];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
};


function filterContact() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("filter-contact");
  filter = input.value.toUpperCase();
  table = document.getElementById("tblLeads");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[6];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
};





