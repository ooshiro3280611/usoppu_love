$(function() {
  var $pageTextWrap = $(".page-text-wrap");
  var $returnMessage = $(".return-message");
  var $truthMessage = $(".truth-message");
  $pageTextWrap.hover(
    function() {
      if ($(this).hasClass("open")) {
        $returnMessage.addClass("message-hover");
      } else {
        $truthMessage.addClass("message-hover");
      }
    },
    function() {
      if (!$(this).hasClass("open")) {
        $truthMessage.removeClass("message-hover");
      } else {
        $returnMessage.removeClass("message-hover");
      }
    }
  );

  $pageTextWrap.click(function() {
    if ($(this).hasClass("open")) {
      $(this).removeClass("open");
      $(this)
        .find(".truth-text")
        .slideUp(500);
      $(this)
        .find(".arrow__up")
        .removeClass("arrow__opa");
      $(this)
        .find(".arrow__down")
        .delay(500)
        .addClass("arrow__opa");
      $(this)
        .find(".return-message")
        .removeClass("message-hover");
    } else {
      $(this).addClass("open");
      $(this)
        .find(".truth-text")
        .slideDown(500);
      $(this)
        .find(".arrow__down")
        .removeClass("arrow__opa");
      $(this)
        .find(".arrow__up")
        .delay(500)
        .addClass("arrow__opa");
      $(this)
        .find(".truth-message")
        .removeClass("message-hover");
    }
  });
});
