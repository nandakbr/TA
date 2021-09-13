$(document).ready(function() {

  //toggle nav
  $('#hamburger').on('click', function() {
    $('#list').toggleClass('height-auto');
    $('nav').toggleClass('height-fixed');

  })

})