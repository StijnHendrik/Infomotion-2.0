var slideIndex = 0
var counter = 0
// var item__media = document.getElementsByClassName('grid-item__media')
window.onload = function () {
  let innerText =  document.getElementsByClassName('menu-inline');
  let innerTextVal = innerText[0].innerHTML;
  let arrayText = [];
  arrayText.push(innerTextVal);
  let arrayTextLen= arrayText.length;
  let i=0;

  for (i ; i<arrayTextLen; i++ ){
      var replace = arrayText[i].replace(/,/g, "<br>");
      document.getElementsByClassName('menu-inline')[0].innerHTML =replace;

  }




}

