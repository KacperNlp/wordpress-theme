const BARS_ID = "bars";
const BARS_ICON_ID = "bars-icon";
const CLASS_FOR_ACTIVE_NAV = "active";
const KINDS_OF_ICONS_FOR_BARS = {
  active: "fa-chevron-up",
  disactive: "fa-bars",
};
const NAV_ID = "navigation";

class Nav {
  constructor() {
    this.bars = document.getElementById(BARS_ID);
    this.barsIcon = document.getElementById(BARS_ICON_ID);
    this.nav = document.getElementById(NAV_ID);
    this.navIsActive = false;
  }

  init() {
    this.bars.addEventListener("click", this.handleClick);
  }

  handleClick = () => {
    const { active, disactive } = KINDS_OF_ICONS_FOR_BARS;

    if (this.navIsActive) {
      this.barsIcon.classList.remove(active);
      this.barsIcon.classList.add(disactive);

      this.navIsActive = false;
    } else {
      this.barsIcon.classList.remove(disactive);
      this.barsIcon.classList.add(active);

      this.navIsActive = true;
    }

    this.nav.classList.toggle(CLASS_FOR_ACTIVE_NAV);
  };
}

const nav = new Nav();

nav.init();
