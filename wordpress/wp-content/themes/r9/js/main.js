console.log("hoge");

jQuery(function ($) {
  // var w = $("body").width();

  // var isWhiteHeader = false;
  // if (w > 1000) {
  //   $(window).on("scroll", function () {
  //     var position = $(this).scrollTop();
  //     var height = $("#top_area").position().top;
  //     if (position > height && !isWhiteHeader) {
  //       isWhiteHeader = true;
  //       $("#header").addClass("scrolled");
  //     }
  //     if (position < height && isWhiteHeader) {
  //       isWhiteHeader = false;
  //       $("#header").removeClass("scrolled");
  //     }
  //   });
  // }


  var isOpened = false;
  $(".sp_menu_icon").on("click", function () {
    if (isOpened) {
      $(".sp_menu").removeClass("slide_in");
      $(this).removeClass("close_icon");
      $("html").removeClass("noscroll");
      $("body").removeClass("noscroll");
    } else {
      $(".sp_menu").addClass("slide_in");
      $(this).addClass("close_icon");
      $("html").addClass("noscroll");
      $("body").addClass("noscroll");
    }
    isOpened = !isOpened;
  });

  $(".slide-items").slick();
});

jQuery(function ($) {
  if (document.URL.match(/new_grad/)) {
    $(".menu_sp_menu_container > .menu_wrapper").append(
      '<div class="header_menu header_textmenu menu-item menu-item-type-post_type menu-item-object-page"><a href="https://r09.jp/" class="icon_link" target="_blank"><p>コーポレートサイトはこちら</p><svg class="gaibulink" alt="外部リンク"><use xlink:href="/wp-content/themes/r9/images/gaibulink.svg#gaibulink"></use></svg></a></div>'
    );
  }
  if (document.URL.match(/r9.emposy-server.com/)) {
    $("#sidebar > .category > ul").prepend(
      '<li class="cat-item cat-item-19 sidebar-bg"><a href="https://r9.emposy-server.com/column/">すべて</a></li>'
    );
  }

  if (document.URL.match(/column/)) {
    $("#sidebar > .category > ul > .sidebar-bg").addClass("sidebar-bg-blue");
  }

  if (
    document.URL.match(/mid_career/) &&
    window.matchMedia("(max-width: 1000px)").matches
  ) {
    $("#menu-item-506, #menu-item-505, #menu-item-507").wrapAll(
      '<div class=""></div>'
    );
    $("#menu-item-503, #menu-item-504, #sp-mid-career-corp").wrapAll(
      '<div class=""></div>'
    );
    $(".footer_top_menubox").wrapInner(
      '<div class="mid-career-footer-flex"></div>'
    );
  }

  $(".column_part").each(function () {
    var num = $(this).find(".column_part > .column_box").length;
    if (num < 3) {
      $(this).find(".column_box").css("margin-right", "30px");
    }
    if (num === 3) {
      $(this)
        .find(".common_part .column_part")
        .css("justify-content", "space-between");
      $(this).find(".column_box").css("margin-right", "0px");
    }
  });

  // 	story
  if (document.URL.match(/agent_control_project/)) {
    $(".story_01").toggleClass("none");
  }
  if (document.URL.match(/adoption_consulting_project/)) {
    $(".story_02").toggleClass("none");
  }
  if (document.URL.match(/training_and_development/)) {
    $(".story_03").toggleClass("none");
  }
  if (document.URL.match(/setting_up_a_scout_team/)) {
    $(".story_04").toggleClass("none");
  }
  if (document.URL.match(/what_pr_can_do/)) {
    $(".story_05").toggleClass("none");
  }
  if (document.URL.match(/about_hiring_new_graduates/)) {
    $(".story_06").toggleClass("none");
  }
  if (document.URL.match(/about_onboarding/)) {
    $(".story_07").toggleClass("none");
  }

  $(".fade-in").easyAnimation();
  $(".fade-up").easyAnimation({
    mode: "up",
  });
  $(".fade-left").easyAnimation({
    mode: "left",
  });
  $(".fade-right").easyAnimation({
    mode: "right",
  });
  $(".bound").easyAnimation({
    mode: "bound",
  });
  $(".strong-bound").easyAnimation({
    mode: "strong-bound",
  });
  $(".fade-up-stairs-00").easyAnimation({
    mode: "up-stairs",
  });
  $(".fade-up-rotate-00").easyAnimation({
    mode: "up-rotate",
  });

  // 	 カウントアップ
  $("#box1").on("inview", function (event, isInView) {
    if (isInView) {
      //要素が見えたときに実行する処理
      $("#box1 .count-up").each(function () {
        $(this)
          .prop("Counter", 0)
          .animate({
            //0からカウントアップ
            Counter: $(this).text(),
          }, {
            // スピードやアニメーションの設定
            duration: 2000, //数字が大きいほど変化のスピードが遅くなる。2000=2秒
            easing: "swing", //動きの種類。他にもlinearなど設定可能
            step: function (now) {
              $(this).text(Math.ceil(now));
            },
          });
      });
    }
  });

  $("#box2").on("inview", function (event, isInView) {
    if (isInView) {
      //要素が見えたときに実行する処理
      $("#box2 .count-down").each(function () {
        $(this)
          .prop("Counter", 10)
          .animate({
            //10からカウントダウン
            Counter: $(this).text(),
          }, {
            // スピードやアニメーションの設定
            duration: 1000, //数字が大きいほど変化のスピードが遅くなる。1000=1秒
            easing: "swing", //動きの種類。他にもlinearなど設定可能
            step: function (now) {
              $(this).text(Math.ceil(now));
            },
          });
      });
    }
  });

  $("#box3").on("inview", function (event, isInView) {
    if (isInView) {
      //要素が見えたときに実行する処理
      $("#box3 .count-up").each(function () {
        $(this)
          .prop("Counter", 0)
          .animate({
            //0からカウントアップ
            Counter: $(this).text(),
          }, {
            // スピードやアニメーションの設定
            duration: 2000, //数字が大きいほど変化のスピードが遅くなる。2000=2秒
            easing: "swing", //動きの種類。他にもlinearなど設定可能
            step: function (now) {
              $(this).text(Math.ceil(now));
            },
          });
      });
    }
  });

  $("#box4").on("inview", function (event, isInView) {
    if (isInView) {
      //要素が見えたときに実行する処理
      $("#box4 .count-up").each(function () {
        $(this)
          .prop("Counter", 0)
          .animate({
            //0からカウントアップ
            Counter: $(this).text(),
          }, {
            // スピードやアニメーションの設定
            duration: 2000, //数字が大きいほど変化のスピードが遅くなる。2000=2秒
            easing: "swing", //動きの種類。他にもlinearなど設定可能
            step: function (now) {
              $(this).text(Math.ceil(now));
            },
          });
      });
    }
  });

  $(function ($) {
    $("#confirm_button").on("click", function () {
      const greenTop = $("#formTop").offset().top;
      $("html").animate({
        scrollTop: greenTop
      });
      $("#confirm_button").remove();
      $('.form_page_button_wrapper').show();
    });
  });
});

const displayTop = document.querySelector('#confirm_button');
displayTop.addEventListener('click', scroll_to_top);

function scroll_to_top() {
  if (window.matchMedia("(min-width: 768px)").matches) {
    window.scroll({
      top: 430,
      behavior: 'smooth'
    });
  } else {
    window.scroll({
      top: 350,
      behavior: 'smooth'
    });
  }
};


const swiper = new Swiper(".swiper", {
  loop: true,
  autoplay: {
    delay: 3000,
    disableOnInteraction: true,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});