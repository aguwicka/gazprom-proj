// General Vars
var $app = $('.app');
var $appHeader = $('.app-header');

// Смена темы
var $root = $('html');
var $lightTheme = $('.js-light-theme');
var $darkTheme = $('.js-dark-theme');
var currentTheme = JSON.parse(localStorage.getItem('theme'));

if (currentTheme === "dark") {
    $root.addClass('dark-theme');
    $lightTheme.removeClass('is-active');
    $darkTheme.addClass('is-active');
}

$darkTheme.on('click', function() {
    $lightTheme.removeClass('is-active');
    $(this).addClass('is-active');
    $root.addClass('dark-theme');
    localStorage.setItem('theme', JSON.stringify('dark'));
});

$lightTheme.on('click', function() {
    $darkTheme.removeClass('is-active');
    $(this).addClass('is-active');
    $root.removeClass('dark-theme');
    localStorage.setItem('theme', JSON.stringify('light'));
});
// end of Смена темы

// Добавляем класс для хедера при прокрутке/загрузке
// Скрываем/показываем хедер при скролле вверх/вниз
var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $appHeader.outerHeight();

$(window).scroll(function(event){
    didScroll = true;
});
setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);
function hasScrolled() {
    var st = $(this).scrollTop();
    if (Math.abs(lastScrollTop - st) <= delta)
        return;
    if (st > lastScrollTop && st > navbarHeight){
        $appHeader.removeClass('nav-down').addClass('nav-up');
    } else {
        if(st + $(window).height() < $(document).height()) {
            $appHeader.removeClass('nav-up').addClass('nav-down');
        }
    }
    lastScrollTop = st;
}
// end of Скрываем/показываем хедер при скролле вверх/вниз

// Объекты во вьюпорте
const sectionContents = document.querySelectorAll(".app-section__content");
function check(entries) {
  entries.map((entry) => {
    if (entry.isIntersecting) {
        entry.target.classList.add("is-visible");
        entry.target.classList.add("play-anim");
        observer.unobserve(entry.target);
    }
  });
}

let app = document.querySelector("app-main");

let options = {
    root: app,
    rootMargin: '0px 0px 100px 0px',
    threshold: 0
}
const observer = new IntersectionObserver(check, options);
sectionContents.forEach((sectionContent) => observer.observe(sectionContent));
// end of Объекты во вьюпорте

// Dropdown 
var $dropdown = $('.dropdown');
$dropdown.on('click', function(){
    $(this).toggleClass('is-open');
    $app.toggleClass('has-overflow-hidden');
})
$(document).on('click',function (e) {
    if ($(e.target).closest('.app-header').length) return;
    $dropdown.removeClass('is-open');
    $app.removeClass('has-overflow-hidden');
});
// end of Dropdown

// Отключаем прелоадер на время сессии
var $preloader = $('.app-preloader');
var isLoaded = JSON.parse(sessionStorage.getItem('loaded'));
if (isLoaded !== "true") {
    $preloader.removeClass('is-disabled');
    $('body').delay(1600).queue(function(){
        $(this).addClass('js-run-anim').clearQueue();
    });
}
else {
    $('body').queue(function(){
        $(this).addClass('js-run-anim').clearQueue();
    });
}

$(window).on('load', function () {
    sessionStorage.setItem('loaded', JSON.stringify('true'));
    $root.addClass('page-loaded');
});

// Mеню на мобильном
var $hamburger = $('.js-mobile-menu-trigger');
$hamburger.on('click', function(){
    $app.toggleClass('has-opened-mobile-menu');
});



// Анимация svg 
// Часть анимации описана в css (необходимо это исправить)
$('.js-icon-book').on('mouseenter', function(){
    TweenMax.to("#page1", .35, {
        attr: {
            d: "M28.5 41.0002C28.5 38.0003 24 37.0002 19.5 37.5002L1.5 39.5002C2.66667 40.3336 3 43.5002 3.5 44.5002M28.5 41.0002C28.5 44.6002 28.5 48.5002 28.5 49.5002M28.5 41.0002C29.3333 39.0002 32.6371 36.1596 40 38.0002C48 40.0001 52.5 41.0002 55 42.0002C53.8333 42.8335 52.5 45.0002 52 46.5002"
        },
    });
    
    TweenMax.to("#page2", .35, {
        attr: {
            d: "M1.26552 48.7966L0.374794 46.1244C0.178878 45.5367 0.557035 44.9147 1.17216 44.8408C7.93777 44.0283 19.5118 44.248 21 44C24 43.5001 24 46.5 24.5 48C25 49.5 26.5 49.5 29 49.5C31.5 49.5 33 49.6623 33 46.5C33 43.5 36 43.8334 37 44L54.3397 46.8118C54.948 46.9105 55.3232 47.5305 55.1283 48.1152L54.265 50.7049C54.1117 51.1649 53.6505 51.4486 53.1708 51.3781L37 49C36 51.5 34.5 54 28 54C21.9792 54 20.3333 50.8334 20 49L2.24122 49.48C1.80098 49.4919 1.40479 49.2144 1.26552 48.7966Z"
        },
    });
});
$('.js-icon-book').on('mouseleave', function(){
    TweenMax.to("#page1", .35, {
        attr: {
            d: "M28.5 41.0002C28.5 38.0003 22.5 36.5002 20 37.5002L1.5 42.5002C2.66667 43.3335 4.9 46.5003 4.5 48.5003M28.5 41.0002C28.5 44.6002 28.5 48.5002 28.5 49.5002M28.5 41.0002C29.3333 39.0002 32.8 35.6003 40 38.0003C47.2 40.4002 52.6667 42.3336 54.5 43.0003C53.3333 43.8336 51.5 46.0002 51.5 48.0002"
        },
    });
    
    TweenMax.to("#page2", .35, {
        attr: {
            d: "M2.19722 53.0917L1.32913 50.4874C1.14952 49.9486 1.45073 49.3695 1.99649 49.2123C8.52192 47.3325 19.5011 44.2498 21 44C24 43.5001 24 46.5 24.5 48C25 49.5 26.5 49.5 29 49.5C31.5 49.5 33 49.6623 33 46.5C33 43.5 36 43.8334 37 44L55.0002 49.2106C55.5458 49.3686 55.8505 49.9486 55.6709 50.4874L54.8028 53.0917C54.6335 53.5996 54.0942 53.8841 53.5794 53.737L37 49C36 51.5 34.5 54 28 54C21.9792 54 20.3333 50.8334 20 49L3.42063 53.737C2.90584 53.8841 2.36653 53.5996 2.19722 53.0917Z"
        },
    });
});


$('.js-icon-people').on('mouseenter', function(){
    TweenMax.to("#hand", .35, {
        attr: {
            d: "M57.5 13.5C55.5 21 54.4828 23.521 45.6897 23.0218C41.5589 22.7873 40 24.5194 40 24.5194"
        },
    });
});

$('.js-icon-people').on('mouseleave', function(){
    TweenMax.to("#hand", .35, {
        attr: {
            d: "M55 37C55 31.0093 54.4828 23.5211 45.6897 23.0218C41.5589 22.7873 40 24.5195 40 24.5195"
        },
    });
});

$('.js-icon-chart1').on('mouseenter', function(){
    TweenMax.to("#chart1-small-col", .35, {
        attr: {
            d: "M2 50.5H5.5M51 50.5H14M5.5 50.5V43.5C5.5 42.3954 6.39543 41.5 7.5 41.5H12C13.1046 41.5 14 42.3954 14 43.5V50.5M5.5 50.5H14"
        },
    });
    TweenMax.to("#chart1-arrow", .35, {
        attr: {
            d: "M8 25.5L25.5 7.5L30 11.5L41 0.5M41 0.5V6.5M41 0.5H35.5"
        },
    });
});

$('.js-icon-chart1').on('mouseleave', function(){
    TweenMax.to("#chart1-small-col", .35, {
        attr: {
            d: "M2 50.5H5.5M51 50.5H14M5.5 50.5V41C5.5 39.8954 6.39543 39 7.5 39H12C13.1046 39 14 39.8954 14 41V50.5M5.5 50.5H14"
        },
    });
    TweenMax.to("#chart1-arrow", .35, {
        attr: {
            d: "M4 29L22 11L26.5 15L38.5 3M38.5 3V9M38.5 3H33"
        },
    });
});

$('.js-icon-chart2').on('mouseenter', function(){
    TweenMax.to("#chart2-big-col", .35, {
        attr: {
            d: "M21.9214 51.4902V31C21.9214 29.8954 22.8168 29 23.9214 29H28.5881C29.6926 29 30.5881 29.8954 30.5881 31V51.4902M37.7253 51.4902V24.5C37.7253 23.3954 38.6207 22.5 39.7253 22.5H44.9018C46.0064 22.5 46.9018 23.3954 46.9018 24.5V51.4902"
        },
    });
    TweenMax.to("#chart2-arrow", .35, {
        attr: {
            d: "M7 29.5098L28.4216 10.9216L32.5 15L45.2353 3M45.2353 3V9.11765M45.2353 3H39.6275"
        },
    });
});

$('.js-icon-chart2').on('mouseleave', function(){
    TweenMax.to("#chart2-big-col", .35, {
        attr: {
            d: "M21.5 50.5V32C21.5 30.8954 22.3954 30 23.5 30H28C29.1046 30 30 30.8954 30 32V50.5M37 50.5V18C37 16.8954 37.8954 16 39 16H44C45.1046 16 46 16.8954 46 18V50.5"
        },
    });
    TweenMax.to("#chart2-arrow", .35, {
        attr: {
            d: "M5 30.5L21.5 16L25.5 20L42.5 4.5M42.5 4.5V10.5M42.5 4.5H37"
        },
    });
});

$('.js-icon-search').on('mouseenter', function(){
    TweenMax.to("#zoom1", .35, {
        attr: {
            d: "M21.908 22.3604C25.6928 18.5651 31.8377 18.5565 35.633 22.3413C39.295 25.9932 39.45 31.8753 35.9853 35.715L36.7265 36.4561C37.3253 35.8573 38.2962 35.8571 38.8951 36.4559C38.8951 36.456 38.8952 36.4561 38.8953 36.4561L43.9556 41.5164C44.5544 42.1152 44.5546 43.0861 43.9558 43.685C43.9557 43.6851 43.9556 43.6851 43.9556 43.6852L43.2328 44.408C42.634 45.0066 41.6633 45.0066 41.0645 44.408L36.0042 39.3477C35.4054 38.7488 35.4053 37.7779 36.0041 37.1791C36.0041 37.179 36.0042 37.1789 36.0042 37.1789L35.2631 36.4377C31.2864 40.0315 25.1494 39.721 21.5556 35.7444C18.0843 31.9033 18.2394 26.0136 21.908 22.3604ZM36.7265 38.6244L41.7868 43.6847C41.9864 43.8842 42.3099 43.8842 42.5095 43.6847L43.2323 42.9614C43.4315 42.7619 43.4315 42.4387 43.2323 42.2392L38.172 37.1789C37.9698 36.9856 37.6514 36.9856 37.4492 37.1789L36.7265 37.9021C36.5273 38.1017 36.5273 38.4248 36.7265 38.6244ZM22.6302 35.372C26.0237 38.7653 31.5256 38.7653 34.9189 35.3718C38.3122 31.9783 38.3122 26.4765 34.9187 23.0831C31.5253 19.6898 26.0236 19.6898 22.6302 23.0831C19.2423 26.4789 19.2423 31.9762 22.6302 35.372Z"
        },
    });
    TweenMax.to("#zoom2", .35, {
        attr: {
            d: "M23.0038 24.1802C23.1898 23.9676 23.5154 23.9682 23.7152 24.1679C23.9146 24.3674 23.9128 24.6898 23.7293 24.9039C21.4913 27.5159 21.6069 31.451 24.0761 33.9262C24.0761 33.9262 24.4418 34.3367 24.0456 34.6763C23.6494 34.9594 23.3534 34.649 23.3534 34.649C20.4849 31.7748 20.3684 27.1932 23.0038 24.1802Z"
        },
    });
});

$('.js-icon-search').on('mouseleave', function(){
    TweenMax.to("#zoom1", .35, {
        attr: {
            d: "M20.3343 25.1148C24.1191 21.3195 30.2639 21.3109 34.0592 25.0957C37.7213 28.7476 37.8762 34.6297 34.4116 38.4694L35.1528 39.2105C35.7516 38.6117 36.7225 38.6115 37.3213 39.2103C37.3214 39.2104 37.3215 39.2105 37.3215 39.2105L42.3818 44.2708C42.9807 44.8696 42.9808 45.8405 42.382 46.4394C42.382 46.4395 42.3819 46.4395 42.3818 46.4396L41.6591 47.1623C41.0603 47.761 40.0896 47.761 39.4908 47.1623L34.4305 42.102C33.8316 41.5032 33.8315 40.5323 34.4303 39.9335C34.4304 39.9334 34.4305 39.9333 34.4305 39.9333L33.6894 39.1921C29.7127 42.7859 23.5757 42.4754 19.9819 38.4988C16.5106 34.6577 16.6657 28.768 20.3343 25.1148ZM35.1528 41.3788L40.2131 46.4391C40.4127 46.6386 40.7362 46.6386 40.9358 46.4391L41.6586 45.7158C41.8578 45.5163 41.8578 45.1931 41.6586 44.9936L36.5983 39.9333C36.3961 39.74 36.0777 39.74 35.8755 39.9333L35.1528 40.6565C34.9535 40.8561 34.9535 41.1792 35.1528 41.3788ZM21.0565 38.1264C24.45 41.5197 29.9518 41.5197 33.3452 38.1262C36.7385 34.7327 36.7384 29.2309 33.345 25.8375C29.9516 22.4442 24.4499 22.4442 21.0565 25.8375C17.6686 29.2333 17.6686 34.7306 21.0565 38.1264Z"
        },
    });
    TweenMax.to("#zoom2", .35, {
        attr: {
            d: "M21.43 26.9346C21.616 26.722 21.9417 26.7226 22.1414 26.9223C22.3409 27.1218 22.339 27.4442 22.1555 27.6583C19.9176 30.2703 20.0332 34.2054 22.5024 36.6806C22.5024 36.6806 22.8681 37.0911 22.4719 37.4307C22.0756 37.7137 21.7796 37.4034 21.7796 37.4034C18.9112 34.5292 18.7947 29.9476 21.43 26.9346Z"
        },
    });
});