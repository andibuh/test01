/******************************************************************************
  Normally, tests would appear in a separate file named
  test/test.js, but for our examples it's convenient to place this
  test code in the same JavaScript file as the code that calls it.
******************************************************************************/


/******************************************************************************
  End test code; begin custom script code.
******************************************************************************/
$(document).ready(function() {
  $('#selected-plays > li').addClass('horizontal');
  $('a[href^="mailto:"]').addClass('mailto');
  $('a[href$=".pdf"]').addClass('pdflink');
});
