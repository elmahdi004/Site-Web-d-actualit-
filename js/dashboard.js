
let users = document.querySelectorAll(".drop");
let x = users.forEach(function(ele){
ele.onclick = function(){
let id = ele.parentElement.parentElement.firstElementChild.textContent;
ele.parentElement.parentElement.remove();
document.cookie = "IdDelete ="+id;
window.open("drop.php");
}
})
// ----------------
let close = document.querySelector(".modify-section .close");
var addSection = document.querySelector(".modify-section");
close.onclick = function(){
    addSection.classList.add("active");
}
// ------- For Close ----------- 
let usersMod = document.querySelectorAll(".modify");
let idMod = usersMod.forEach(function(ele){
    ele.onclick = function(){
    let id = ele.parentElement.parentElement.firstElementChild.textContent;
    document.cookie = "IdMod ="+id;
    addSection.classList.remove("active");
// window.open("modify.php");
    }
})
// ---------- For Add A User -------------
let addUser = document.querySelectorAll(".modify-section")[1];
let close_2 = document.querySelectorAll(".modify-section .close")[1];
let addUserBtn = document.querySelector(".nav .add-user");
addUserBtn.onclick = function(){
    addUser.classList.remove("active");
}
close_2.onclick = function(){
    addUser.classList.add("active");
}
// ---------------------------------------- For Table Blog ---------------------------------------------------------- 
let usersBlo = document.querySelectorAll(".dropBlog");
let xBlog = usersBlo.forEach(function(ele){
ele.onclick = function(){
let id = ele.parentElement.parentElement.children[1].textContent;
console.log(id);
ele.parentElement.parentElement.remove();
document.cookie = "IdDeleteBlog ="+id;
window.open("dropBlog.php");
}
})
// ----- Modify ------
    // ---- close and open form 
    let modBlogSec = document.querySelector(".modify-blog");
    let blogSeclose = document.querySelector(".modify-blog .close");
    let AllModify = document.querySelectorAll(".modifyBlog");
    let z = AllModify.forEach(function(ele){
        ele.onclick = function(){
            modBlogSec.classList.remove("active");
            id = ele.parentElement.parentElement.children[1].textContent;
            document.cookie = `idModBlog = ${id}`
        }
    })
blogSeclose.onclick = function(){
modBlogSec.classList.add("active");
}
// ----------------------------End Table Blog --------------------------------------------------------------------------