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

function sendMail(){
    var params = {
        from_name : document.getElementById("fullName").value,
        email_id :  document.getElementById("email_id").value,
        message : document.getElementById("message").value
    }
    emailjs.send("service_v0psvyg", "template_icikovk", params).then(function(res) {
        alert("success" +res.status);
    })
}