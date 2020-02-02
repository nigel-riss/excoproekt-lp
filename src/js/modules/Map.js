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

    const marker = new ymaps.Placemark([54.71460023478118, 20.50844839216279]);
    this.map.geoObjects.add(marker);
  }
}

export default Map;
