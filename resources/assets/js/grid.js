var slideIndex = 0
var slide = document.getElementsByClassName('slide')
window.onload = function () {


    setInterval(function () {slideshow ()},1000)
}

window.slideshow = function () {
    var slide = document.getElementsByClassName('slide')
    slideIndex++
    for (let i = 0; i < slide.length; i++) {
        slide[i].style.display = "none"
    }

    if (slideIndex > slide.length) {
        slideIndex = 1
    }

    slide[slideIndex -1].style.display = "block"
    console.log(slide[slideIndex -1])
}