import Typed from "typed.js/src/typed";

new Typed('.typed', {
  strings: ["Welcome to My Portfolio.", "Let's scroll down."],
  typeSpeed: 40,
  startDelay: 2700,
  backspeed: 80,
  loop: false,
  showCursor: false,
  backDelay: 500
});

/*$(function() {
  $('.header_wrap,.header_background').css
  ('width',$('#onlyheader').outerWidth())
});
*/
$('.globalMenuSp a[href]').on('click', function() {
        $('.globalMenuSp,.hamburger').removeClass('active');
    });
$(function() {
    $('.hamburger').click(function() {
        $(this).toggleClass('active');

        if ($(this).hasClass('active')) {
            $('.globalMenuSp').addClass('active');
        } else {
            $('.globalMenuSp').removeClass('active');
        }
    });
});

$(document).ready(function() {
            $('.bxslider').bxSlider({

                auto: true, //自動切り替えの有無

                pause: 3000, //停止時間※デフォルトは4000

                speed: 2500, //動くスピード※デフォルトは500

                minSlides: 1, //一度に表示させる画像の最小値

                maxSlides: 1, //一度に表示させる画像の数

                slideWidth: 650,

                slideMargin: 10,

                moveSlides: 1,


                responsive: true,

            });
        });

var sheader = $("header"),
    animationClass = "is-animation";

$(window).scroll(function () {
  var value = $(this).scrollTop();
  if (value > 100) {
    sheader.addClass(animationClass);
  } else {
    sheader.removeClass(animationClass);
  }
});

$(".scroll,.hamburger").css({
  opacity: '0'
});
setTimeout(function () {
  $(".scroll,.hamburger").stop().animate({
    opacity: '1'
  });
}, 6000);

$(".down").click(function () {
  var speed = 700;
  var href = $(this).attr("href");
  var target = $(href == "#" || href == "" ? 'html' : href);
  var position = target.offset().top;
  jQuery('body,html').animate({
    scrollTop: position
  }, speed, 'swing');
  return false;
});

$(window).scroll(function () {
  $(".about_content,.card,.skill_card_list,.title_all,.section1,.section1Wrap,.section1Flex").each(function () {
    var fade = $(this).offset().top;
    var scroll = $(window).scrollTop();
    var windowheight = $(window).height();

    if (scroll > fade - windowheight + windowheight / 5) {
      $(this).addClass("fade_on");
    } else {
      $(this).removeClass("fade_on");
    }
  });
});
$(function() {
            let scrollTop = $('.scrollTop');
            let scrolladdclass = "scroll_on";
            $(window).scroll(function() {
                if ($(this).scrollTop() > 300) {
                  scrollTop.addClass(scrolladdclass);
                } else {
                  scrollTop.removeClass(scrolladdclass);
            }
            scrollTop.click(function() {
                $('body,html').animate({
                    scrollTop: 0
                }, 700);
                return false;
      });
  });
});
