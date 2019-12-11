class BranchCard {
  constructor() {
    this.addEventsListeners();
  }

  addEventsListeners() {
    document.addEventListener('click', (evt) => {
      const hasSomeParentOfClass = (element, className) => {
        if (!element || !element.classList) return false;
        if (element.classList.contains(className)) {
          return element;
        }
        return element.parentNode && hasSomeParentOfClass(element.parentNode, className);
      };

      let branchCardSpoilerButton = hasSomeParentOfClass(evt.target, 'branch-card__open-spoiler');

      if (branchCardSpoilerButton) {
        this.switchBranchCardSpoiler(branchCardSpoilerButton.parentNode.parentNode);
      }
    });
  }


  switchBranchCardSpoiler(branchCardElement) {
    branchCardElement.classList.toggle('branch-card--open');
  }
}

export default BranchCard;
