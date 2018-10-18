var loadImage = (selector) => {
  var el = document.querySelector(selector);
  el.setAttribute('src', el.getAttribute('data-src'))
  el.classList.add("loaded");
}