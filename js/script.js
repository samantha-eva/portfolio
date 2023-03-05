const header = document.querySelector("header");

window.addEventListener("scroll", function(){
    header.classList.toggle("sticky", window.scrollY > 0)

});

let menu = document.querySelector('#menu_icon');
let navlist = document.querySelector('.navlist');

menu.onclick = () =>{
    menu.classList.toggle('bx-x');
    navlist.classList.toggle('active');
}

const btnSroll = document.querySelector("#btnScroll");

btnSroll.addEventListener("click", function(){

    window.scrollTo({
        top:0,
        left: 0,
        behavior: "smooth"

    })

})