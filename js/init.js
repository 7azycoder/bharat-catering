(function($){
  $(function(){

    $('.button-collapse').sideNav();
    $('.parallax').parallax();
    $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 5 // Creates a dropdown of 15 years to control year
  });
    $('#textarea1').val('New Text');
  $('#textarea1').trigger('autoresize');

  }); // end of document ready
})(jQuery); // end of jQuery name space