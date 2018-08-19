var slideIndex = 0
var counter = 0
// var item__media = document.getElementsByClassName('grid-item__media')
window.onload = function () {
    setInterval(function () {slideshow ()},500)
}

// window.slideshow = function () {
//     var item__media = document.getElementsByClassName('grid-item__media')
//
//     let media = item__media[slideIndex].getElementsByClassName('slide')
//     for (let j = 0; j < media.length; j++) {
//         console.log(media[j].dataset.test)
//         media[j].style.display = "none"
//     }
//
//     if ((counter >= media.length)) {
//         counter = 0
//     }
//         media[counter].style.display = "block"
//     counter++
//     slideIndex++
//     if (slideIndex > item__media.length) {
//         slideIndex = 0
//     }
// }