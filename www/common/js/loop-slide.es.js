"use strict";

/**
 * LoopSlide
 */
class LoopSlide {
  constructor() {
    this.$This = document.querySelectorAll(".-loopSlide");
    this.$This_Array = Array.prototype.slice.call(this.$This, 0);
    this.timer;
  }

  SetSlide() {
    this.$This_Array.forEach((element, index, array) => {
      const ThisWidth = element.clientWidth;
      const $Wrap = element.querySelector('[class$="__wrapper"]');
      const $List = element.querySelector('[class$="__list"]');
      const ListWidth = $List.clientWidth;
      const Number = Math.ceil(ThisWidth / ListWidth);
      const Count = Number >= 1 ? Number + 1 : 2;
      let Fragment = document.createDocumentFragment();
      for (let i = 0; i < Count; i++) {
        const $Clone = $List.cloneNode(true);
        $Clone.classList.add("-clone");
        Fragment.appendChild($Clone);
      }
      $List.parentNode.appendChild(Fragment);
      $Wrap.style.width = `${ListWidth * Count}px`;
      element.classList.add("-animation");
    });
  }

  ResetClone() {
    const $Clone = document.querySelectorAll(".-clone");
    const $Clone_Array = Array.prototype.slice.call($Clone, 0);
    this.$This_Array.forEach((element, index, array) => {
      element.classList.remove("-animation");
    });
    $Clone_Array.forEach((element, index, array) => {
      element.remove();
    });
  }
}

/**
 * Triggers
 */
window.addEventListener(
  "DOMContentLoaded",
  () => {
    // Initial
    const _LoopSlide = new LoopSlide();
    _LoopSlide.SetSlide();

    // Resize
    window.addEventListener("resize", () => {
      if (_LoopSlide.timer > 0) {
        clearTimeout(_LoopSlide.timer);
      }
      _LoopSlide.timer = setTimeout(() => {
        _LoopSlide.ResetClone();
        _LoopSlide.SetSlide();
      }, 340);
    });
  },
  {
    once: true
  }
);
