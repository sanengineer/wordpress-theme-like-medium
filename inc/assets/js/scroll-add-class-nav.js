window.addEventListener("resize", function () {
  disableScriptNav();
});

window.addEventListener("load", function () {
  disableScriptNav();
});

function disableScriptNav() {
  if (screen.width < 768) {
    (function ($) {
      $(window).scroll(function () {
        var scroll = $(window).scrollTop();

        if (scroll > 0) {
          $(".snupperenav").addClass("fixed-top");
          $("#content").css("margin-top", "49.5px");
        } else if (scroll <= 200) {
          $(".snupperenav").removeClass("fixed-top");
          $("#content").css("margin-top", "");
        }
      });
    })(jQuery);
  }
}
