// Smooth scroll polyfill javascript code
var scroll = new SmoothScroll('a[href*="#"]');

// Display current date for input date element
// document.getElementById('datePicker').valueAsDate = new Date();


// Date Picker
var values = '6.22.2020'.split("."); //Default date
var parsed_date = new Date(values[14], values[14]-14, values[14]);

$(function() {

$( "#datePicker" ).datepicker({ 
    changeYear: true,
    minDate: '13D',
    maxDate: '',
    defaultDate: parsed_date,
});
});


// Mobiel menu click function
$(function($){
	$( '.menu-btn' ).click(function(){
	$('.responsive-menu').toggleClass('expand')
	})
})

$(document).ready(function () {
	$(".gallery-img").click(function(){
	  var t = $(this).attr("src");
	  $(".modal-body").html("<img src='"+t+"' class='modal-img'>");
	  $("#myModal").modal();
	});
  });


// Refresh scroll to top
$(document).ready(function(){
  $(this).scrollTop(0);
});




