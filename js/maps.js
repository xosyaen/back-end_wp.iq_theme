    // Функция ymaps.ready() будет вызвана, когда
    // загрузятся все компоненты API, а также когда будет готово DOM-дерево.

    ymaps.ready(init);
 
    function init(){
        // Создание карты.
        // https://tech.yandex.ru/maps/doc/jsapi/2.1/dg/concepts/map-docpage/
        var myMap = new ymaps.Map("map", {
            // Координаты центра карты.
            // Порядок по умолчнию: «широта, долгота».
            center: [wt_contacts.latitude,wt_contacts.longitude],
            // Уровень масштабирования. Допустимые значения:
            // от 0 (весь мир) до 19.
            zoom: wt_contacts.zoom,
            // Элементы управления
            // https://tech.yandex.ru/maps/doc/jsapi/2.1/dg/concepts/controls/standard-docpage/
            controls: [
 
                'zoomControl', // Ползунок масштаба
                'rulerControl', // Линейка
                // 'routeButtonControl', // Панель маршрутизации
                'trafficControl', // Пробки
                'typeSelector', // Переключатель слоев карты
                'fullscreenControl', // Полноэкранный режим
 
                // // Поисковая строка
                // new ymaps.control.SearchControl({
                //     options: {
                //         // вид - поисковая строка
                //         size: 'large',
                //         // Включим возможность искать не только топонимы, но и организации.
                //         provider: 'yandex#search'
                //     }
                // })
 
            ]
        });
 
        // Добавление метки
        // https://tech.yandex.ru/maps/doc/jsapi/2.1/ref/reference/Placemark-docpage/
        var myPlacemark = new ymaps.Placemark([wt_contacts.latitude,wt_contacts.longitude], {
            // Хинт показывается при наведении мышкой на иконку метки.
            hintContent: wt_contacts.hintContent,
            // Балун откроется при клике по метке.
            balloonContent: wt_contacts.balloonContent
        },{
            // Опции.
            // Необходимо указать данный тип макета.
            iconLayout: 'default#imageWithContent',
            // Своё изображение иконки метки.
            iconImageHref: 'https://rusiq.ru/wp-content/themes/iq_theme/img/maps-icon.png',
            // Размеры метки.
            iconImageSize: [36, 58],
            // Смещение левого верхнего угла иконки относительно
            // её "ножки" (точки привязки).
            iconImageOffset: [-18, -58],
        });

        // После того как метка была создана, добавляем её на карту.
        myMap.geoObjects.add(myPlacemark);
 
    }