"use strict";

/**
 * LoopSlide
 */
const LoopSlide = () => {
  /**
   * SetSlide
   */
  const SetSlide = () => {
    $Wrap_Array.forEach((element, index, array) => {
      const WrapWidth = element.clientWidth;
      const $List = element.querySelector("ul");
      const ListWidth = $List.clientWidth;
      const Number = Math.ceil(WrapWidth / ListWidth);
      const Count = Number >= 1 ? Number + 1 : 2;
      let Fragment = document.createDocumentFragment();
      for (let i = 0; i < Count; i++) {
        const $Clone = $List.cloneNode(true);
        $Clone.classList.add("-clone");
        Fragment.appendChild($Clone);
      }
      $List.parentNode.appendChild(Fragment);
      element.classList.add("-animation");
    });
  };

  /**
   * Reset
   */
  const ResetClone = () => {
    const $Clone = document.querySelectorAll(".-clone");
    const $Clone_Array = Array.prototype.slice.call($Clone, 0);
    $Wrap_Array.forEach((element, index, array) => {
      element.classList.remove("-animation");
    });
    $Clone_Array.forEach((element, index, array) => {
      element.remove();
    });
  };

  /**
   * Variables
   */
  const $Wrap = document.querySelectorAll(".-loopSlide");
  const $Wrap_Array = Array.prototype.slice.call($Wrap, 0);
  let timer;
  SetSlide();

  /**
   * Window Resize
   */
  window.addEventListener("resize", () => {
    if (timer > 0) {
      clearTimeout(timer);
    }
    timer = setTimeout(() => {
      ResetClone();
      SetSlide();
    }, 340);
  });
};
LoopSlide();
