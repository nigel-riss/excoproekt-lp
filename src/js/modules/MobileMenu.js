class MobileMenu {
  constructor() {
    this.headerTop = document.querySelector('.header__top');
    this.menuButton = document.querySelector('.menu-button');
    this.mainNav = document.querySelector('.main-nav');

    if (this.headerTop) {
      this.resetDOM();
      this.addEvents();
    }
  };

  addEvents() {
    this.menuButton.addEventListener('click', () => {
      this.switchMenu();
    });
  };

  resetDOM() {
    this.headerTop.classList.remove('header__top--green');
    this.mainNav.classList.add('main-nav--hidden');
    this.menuButton.classList.remove('menu-button--close');
  };

  switchMenu() {
    this.headerTop.classList.toggle('header__top--green');
    this.mainNav.classList.toggle('main-nav--hidden');
    this.menuButton.classList.toggle('menu-button--close');
  };
}

export default MobileMenu;
