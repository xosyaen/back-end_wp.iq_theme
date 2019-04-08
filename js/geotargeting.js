jQuery(function () {
    jQuery('.primer-header-region').popover({
        html: true,
        content: '<button class="btn btn-primary btn-xs" onclick="popoverRegionConfirmedHide(); ' +
        'modalRegionSelectionShow()">Нет, выбрать регион</button> ' +
        '<button class="btn btn-default btn-xs" onclick="popoverRegionConfirmedHide()">Да</button>',
        trigger: 'manual'
    });
});

function popoverRegionConfirmedHide() {
    jQuery('.primer-header-region').popover('hide');
}

function popoverRegionConfirmedShow() {
    jQuery('.primer-header-region').popover('show');
}

function modalRegionSelectionShow() {
    jQuery('.primer-header-region').popover('hide');
    jQuery('#modalLocationSelection').modal('show');
}

function modalRegionConfirmedShow() {
    jQuery('.primer-header-region').popover('hide');
    jQuery('#geotargetingConfirmRegionModal').modal('show');
}

/*
 * Проверка подтверждения местоположения посетителем.
 * В случае необходимости выводит popover для подтверждения.
 */
jQuery(document).ready(function () {
    if (getCookie('wt-ask-about-location') != 1){
        popoverRegionConfirmedShow();
        setCookie('wt-ask-about-location', 1);
    }
})