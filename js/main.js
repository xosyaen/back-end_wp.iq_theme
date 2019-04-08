$("#phone").mask("+7(999)999-9999");
$("#phone-2").mask("+7(999)999-9999");
$("#phone-3").mask("+7(999)999-9999");
$("#phone-4").mask("+7(999)999-9999");
$("#phone-5").mask("+7(999)999-9999");
$("#phone-6").mask("+7(999)999-9999");

$(".calc_slider").slick({
	infinite: false,
	nextArrow: document.querySelector('.controls__btn_right'),
	prevArrow: document.querySelector('.controls__btn_left')
});

$(".number_slide__all").text($('.calc_slider').slick("getSlick").slideCount);
$(".calc_slider").on('afterChange', function(event,slick,currentSlide) {
	$(".number_slide__current").text(currentSlide + 1);
});

$(".sliders_work_results").slick({
    autoplay: false,
    dots: true,
	nextArrow: document.querySelector('.controls__right'),
	prevArrow: document.querySelector('.controls__left'),
});


$('.nav__btn').click(function() {
  $("#modal_making").fadeIn(500);
    setTimeout(function(){
    $("body").css("overflow", "hidden");
    }, 400);
});
$('.nav__address').click(function() {
  $("#modal_region").fadeIn(500);
    setTimeout(function(){
    $("body").css("overflow", "hidden");
    }, 400);
});
$('.modal .close').click(function() {
  $(".modal").fadeOut(500);
    setTimeout(function(){
    $("body").css("overflow", "auto");
    }, 400);
});

/*
* Проверка подтверждения местоположения посетителем.
* В случае необходимости выводит popover для подтверждения.
*/
// $(document).ready(function () {
//   if (getCookie('wt-ask-about-location') != 1){
//     popoverRegionConfirmedShow();
//     setCookie('wt-ask-about-location', 1);
//   }
// })

//   $(function () {
//     $('.nav__address').popover({
//       html: true,
//       content: '<button class="btn btn-primary btn-xs nav__address" onclick="popoverRegionConfirmedHide(); ' +
//       'modalRegionSelectionShow()">Нет, выбрать регион</button> ' +
//       '<button class="btn btn-default btn-xs" onclick="popoverRegionConfirmedHide()">Да</button>',
//       trigger: 'manual'
//     });
//   });
// function popoverRegionConfirmedHide() {
//   $('.nav__address').popover('hide');
// }

// function popoverRegionConfirmedShow() {
//   $('.nav__address').popover('show');
// }

// function modalRegionSelectionShow() {
//   $('.nav__address').popover('hide');
//   $('#modalLocationSelection').modal('show');
// }

// function modalRegionConfirmedShow() {
//   $('.nav__address').popover('hide');
//   $('#geotargetingConfirmRegionModal').modal('show');
// }