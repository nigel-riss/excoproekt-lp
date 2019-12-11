class Spoiler {
  constructor() {
    this.addEvents();
  }

  addEvents() {
    document.addEventListener('click', (evt) => {
      if (evt.target.classList.contains('spoiler__title') || evt.target.classList.contains('spoiler__button')) {
        this.toggleSpoiler(evt.target);
      }
    });
  }

  toggleSpoiler(spoilerButton) {
    let spoiler = spoilerButton.parentElement.parentElement;
    spoiler.classList.toggle('spoiler--open');
  }
}

export default Spoiler;
