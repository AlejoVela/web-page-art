$(window).scroll(function() {
  if ($("#menu").offset().top > 100) {
      $("#menu").addClass("bg-inverse");
      $("#menu").addClass("crece");
  } else {
      $("#menu").removeClass("bg-inverse");
      $("#menu").removeClass("crece");
  }
});
