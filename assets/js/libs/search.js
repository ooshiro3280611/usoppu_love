const searchBtn = $(function() {
  // headerのsearchの開け閉め
  $("#search-js").click(function() {
    $(this).removeClass("search-js");
    $(".close-icon").addClass("close-icon-js");
    $(".search-box").addClass("search-box-open");
    $(".header__nav").removeClass("header__nav-open");
  });
  $("#close-icon-js").click(function() {
    $(this).removeClass("close-icon-js");
    $(".search-icon").addClass("search-js");
    $(".search-box").removeClass("search-box-open");
    $(".header__nav").addClass("header__nav-open");
  });
  //   mobileのsearchの開け閉め
  $("#mobile__search-js").click(function() {
    $(this).removeClass("mobile__search-js");
    $(".mobile__close-icon").addClass("mobile__close-icon-js");
    $(".mobile__search-box").addClass("mobile__search-box-open");
  });
  $("#mobile__close-icon-js").click(function() {
    $(this).removeClass("mobile__close-icon-js");
    $(".mobile__search-icon").addClass("mobile__search-js");
    $(".mobile__search-box").removeClass("mobile__search-box-open");
  });
});

// export { searchBtn };
