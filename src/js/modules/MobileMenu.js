class MobileMenu {
  constructor() {
    this.menuButton = document.querySelector('.menu-button');
    this.mainNav = document.querySelector('.main-nav');

    this.resetDOM();
    this.addEvents();
  };

  addEvents() {
    this.menuButton.addEventListener('click', () => {
      this.switchMenu();
    });
  };

  resetDOM() {
    this.mainNav.classList.add('main-nav--hidden');
    this.menuButton.classList.remove('menu-button--close');
  };

  switchMenu() {
    this.mainNav.classList.toggle('main-nav--hidden');
    this.menuButton.classList.toggle('menu-button--close');
  };
}

export default MobileMenu;
