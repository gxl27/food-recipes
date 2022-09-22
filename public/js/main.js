/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************!*\
  !*** ./resources/js/main.js ***!
  \******************************/
var body = document.querySelector('body');
var main = document.querySelector('main');
var banner = document.querySelector('#banner');
var headerBar = document.querySelector('body > header');
var logo = document.querySelector('#logo');
var recipeNew = document.querySelector('#recipe-new');
var recipeEdit = document.querySelector('#recipe-edit');
var btnRecipeAdd = document.querySelector('#btn-recipe-add');
var btnRecipeDetails = document.querySelectorAll('.btn-recipe-details');
var closeBtn = document.querySelectorAll('.close-btn'); // main.style.visibility = 'visible';
// body.style.visibility = 'hidden';

document.addEventListener("DOMContentLoaded", function () {
  if (main) {
    main.style.visibility = 'visible';
    main.style.opacity = '1';
  }
});
scrollUpScreen();

if (matchMedia) {
  var mq = window.matchMedia("(min-width: 768px)");
  window.device;

  if (mq.matches) {
    // pc
    window.device = true;
  } else {
    // mobile
    window.device = false;
  }

  mq.addListener(WidthChange);
  WidthChange(mq);
} // media query change


function WidthChange(mq) {
  if (mq.matches) {
    //pc
    window.device = true;

    if (banner) {
      banner.style.display = 'flex';
    }
  } else {
    // phone
    window.device = false;

    if (banner) {
      banner.style.display = 'none';
    }
  }
} // logo 


logo.addEventListener("click", function () {
  location.reload();
}); //upscreen

function scrollUpScreen() {
  var upScreen = document.querySelector('#up-screen');
  upScreen.addEventListener("click", function () {
    document.querySelector('html').scrollTo({
      top: 0,
      behavior: "smooth"
    });
  });
  window.addEventListener('scroll', function (e) {
    y = window.scrollY;

    if (y > 70) {
      if (headerBar) {
        headerBar.style.backgroundColor = "white";
      }

      upScreen.style.display = 'initial';
    } else {
      if (headerBar) {
        headerBar.style.backgroundColor = "rgba(243, 247, 248)";
      }

      upScreen.style.display = 'none';
    }
  });
} // show the new recipe form


if (btnRecipeAdd) {
  btnRecipeAdd.addEventListener('click', function () {
    recipeNew.style.display = "block";
  });
} // show the edit recipe form


if (btnRecipeDetails) {
  btnRecipeDetails.forEach(function (element) {
    element.addEventListener('click', function () {
      recipeEdit.style.display = "block";
    });
  });
} // close the parent window


if (closeBtn) {
  closeBtn.forEach(function (element) {
    element.addEventListener('click', function () {
      var parentNode = element.parentNode.parentNode.parentNode;
      parentNode.style.display = "none";
    });
  });
}
/******/ })()
;