var myIndex = 0;
var slideID = ['slide1', 'slide2']

// carousel();

// function carousel() {
//     var i;
//     var j;
//     var n = document.getElementsByClassName("grid-item__media")
//     var x = document.getElementsByClassName("slide")
//
//     for (j = 0; j < x.length; j++) {
//         for (i = 0; i < n.length; i++) {
//             x[i].style.display = "block";
//         }
//     }
//     myIndex++;
//     if (myIndex > x.length) {myIndex = 1}
//     x[myIndex-1].style.display = "block";
//     setTimeout(carousel, 20000); // Change image every 2 seconds
// }
function initial() {
    const grid = document.getElementsByTagName('#grid')
    var slide = document.getElementsByClassName('slide')
    var header = document.getElementsByClassName('grid-header')

    header.style.fontSize = '20rem'
}