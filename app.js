
btn = document.querySelector("i")
nav = document.querySelector(".nav")
header = document.querySelector(".header")
war = document.querySelector(".war")
contact = document.querySelector(".contact-link")
overlay = document.querySelector(".overlay1")
scrll = document.querySelector(".scroll")
scrllTop = document.querySelector(".Top")

btn.onclick = function () {
    nav.classList.toggle("nav1");
    overlay.classList.toggle("overlay");
    header.classList.toggle("header1");
}

overlay.onclick = function () {
    overlay.classList.remove("overlay")
    nav.classList.remove("nav1");
    header.classList.remove("header1")
}


scrll.onclick = function scroll() {
    window.scroll({
        top: 2500,
        left: 0,
    });
}



// war.onload = function () {
//     window.scroll({
//         top:2500,
//         left:0,

//     });
// }

scrllTop.onclick = function () {
    window.scroll({
        top: 0,
        left: 0,

    });

}









