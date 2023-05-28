// pour afficher menu Pour 'small window'
let menu = document.querySelector(".menu-mobile")
let menuBtn = document.querySelector(".bars")
menuBtn.onclick = function(){
    menu.classList.toggle("active");
}
//Change Hover And underline
let navs = document.querySelectorAll(".container .nav ul li");
let nav = navs.forEach(function(ele){
    ele.onclick = function(){
        for(i = 0;i<navs.length;i++){
            navs[i].classList.remove("active");
        }
        ele.classList.toggle("active");
    }
})
let navsMobile = document.querySelectorAll(".container .menu-mobile ul li");
let navMobile = navsMobile.forEach(function(ele){
    ele.onclick = function(){
        for(i = 0;i<navsMobile.length;i++){
            navsMobile[i].classList.remove("active");
        }
        ele.classList.toggle("active");
    }
})
// ----- user section -------
let user = document.querySelector(".container .user");
let userSection = document.querySelector(".user-action");
let Exit = document.querySelector(".user-action .close");
console.log(user)
user.onclick = function(){
userSection.classList.toggle("active");
}
Exit.onclick = function(){
    userSection.classList.add("active");
}
let logBrn = document.querySelector(".user-action .login button");
let signBtn = document.querySelector(".user-action .signup button");
logBrn.onclick = function(){
    window.open("login.html","_self");
}
signBtn.onclick = function(){
    window.open("signup.html","_self");
}