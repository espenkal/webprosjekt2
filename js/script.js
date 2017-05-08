$(".btnExpandContact").click( function () {
  $('html, body').animate({
      scrollTop: $(".btnExpandContact").offset().top + 376
  }, 650);
});
