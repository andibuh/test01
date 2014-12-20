var myTest;

$(function() {
  return $("h1").click(function() {
    return $(this).addClass("blue").fadeOut("slow");
  });
});

myTest = function() {
  return console.log('Hallo');
};
