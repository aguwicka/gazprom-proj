// General Vars
var $app = $(".app");
var $appHeader = $(".app-header");

// Смена темы
var $root = $("html");
var $lightTheme = $(".js-light-theme");
var $darkTheme = $(".js-dark-theme");
var currentTheme = JSON.parse(localStorage.getItem("theme"));

if (currentTheme === "dark") {
  $root.addClass("dark-theme");
  $lightTheme.removeClass("is-active");
  $darkTheme.addClass("is-active");
}

$darkTheme.on("click", function () {
  $lightTheme.removeClass("is-active");
  $(this).addClass("is-active");
  $root.addClass("dark-theme");
  localStorage.setItem("theme", JSON.stringify("dark"));
});

$lightTheme.on("click", function () {
  $darkTheme.removeClass("is-active");
  $(this).addClass("is-active");
  $root.removeClass("dark-theme");
  localStorage.setItem("theme", JSON.stringify("light"));
});
// end of Смена темы

// Добавляем класс для хедера при прокрутке/загрузке
// Скрываем/показываем хедер при скролле вверх/вниз
var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $appHeader.outerHeight();

$(window).scroll(function (event) {
  didScroll = true;
});
setInterval(function () {
  if (didScroll) {
    hasScrolled();
    didScroll = false;
  }
}, 250);
function hasScrolled() {
  var st = $(this).scrollTop();
  if (Math.abs(lastScrollTop - st) <= delta) return;
  if (st > lastScrollTop && st > navbarHeight) {
    $appHeader.removeClass("nav-down").addClass("nav-up");
  } else {
    if (st + $(window).height() < $(document).height()) {
      $appHeader.removeClass("nav-up").addClass("nav-down");
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
  rootMargin: "0px 0px 100px 0px",
  threshold: 0,
};
const observer = new IntersectionObserver(check, options);
sectionContents.forEach((sectionContent) => observer.observe(sectionContent));
// end of Объекты во вьюпорте

// Dropdown
var $dropdown = $(".dropdown");
$dropdown.on("click", function () {
  $(this).toggleClass("is-open");
  $app.toggleClass("has-overflow-hidden");
});
$(document).on("click", function (e) {
  if ($(e.target).closest(".app-header").length) return;
  $dropdown.removeClass("is-open");
  $app.removeClass("has-overflow-hidden");
});
// end of Dropdown

// Отключаем прелоадер на время сессии
var $preloader = $(".app-preloader");
var isLoaded = JSON.parse(sessionStorage.getItem("loaded"));
if (isLoaded !== "true") {
  $preloader.removeClass("is-disabled");
  $("body")
    .delay(1600)
    .queue(function () {
      $(this).addClass("js-run-anim").clearQueue();
    });
} else {
  $("body").queue(function () {
    $(this).addClass("js-run-anim").clearQueue();
  });
}

$(window).on("load", function () {
  sessionStorage.setItem("loaded", JSON.stringify("true"));
  $root.addClass("page-loaded");
});

// Mеню на мобильном
var $hamburger = $(".js-mobile-menu-trigger");
$hamburger.on("click", function () {
  $app.toggleClass("has-opened-mobile-menu");
});

var formTriggerButton = document.querySelectorAll('.like-button');
var formTriggerClose = document.querySelector('.app-modal__close');

formTriggerButton.forEach(function(item) {
  item.addEventListener('click', function(e) {
    e.preventDefault();
    var modalForm = document.querySelector('.app-modal');
    modalForm.style.display = 'flex';
  });
});

formTriggerClose.addEventListener('click', function(){
  var modalForm = document.querySelector('.app-modal');
  modalForm.style.display = 'none';
});

document.addEventListener( 'wpcf7mailsent', function( event ) {
  if (897 == event.detail.contactFormId) {
    $('.app-form').hide();
    $('.success-banner').css('display', 'flex');
    $( ".form-reset" ).trigger( "click" );
    setTimeout(function(){
      $('.success-banner').css('display', 'none');
      $('.app-modal').css('display', 'none');
      $('.app-form').show();
    }, 3000);
  }
}, false );


