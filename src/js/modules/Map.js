class Map {
  constructor() {
    ymaps.ready(() => {
      this.addMap();
    });
  }

  addMap() {
    this.map = new ymaps.Map(document.querySelector('#map'), {
      center: [54.71460023478118, 20.50844839216279],
      zoom: 16,
      controls: [],
    });

    this.map.behaviors.disable([
      'drag',
      'multiTouch',
    ]);

    const marker = new ymaps.Placemark([54.71460023478118, 20.50844839216279]);
    this.map.geoObjects.add(marker);

    // const logoMarker = new ymaps.Placemark(
    //   [54.72320, 20.50786], 
    //   {},
    //   {
    //     // Опции.
    //     // Необходимо указать данный тип макета.
    //     iconLayout: 'default#image',
    //     // Своё изображение иконки метки.
    //     iconImageHref: 'img/icons/map-marker.svg',
    //     // Размеры метки.
    //     iconImageSize: [72, 72],
    //     // Смещение левого верхнего угла иконки относительно
    //     // её "ножки" (точки привязки).
    //     iconImageOffset: [-36, -72]
    // });

    // this.map.geoObjects.add(logoMarker);
  }
}

export default Map;
