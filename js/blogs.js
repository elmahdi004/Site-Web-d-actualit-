let userBtn = document.querySelector(".container .nav .menu");
let closeBtn = document.querySelector(".container .nav .user .close");
let userSection = document.querySelector(".container .nav .user");
userBtn.onclick = function(){
    userSection.classList.remove("active");
}
closeBtn.onclick = function(){
    userSection.classList.add("active");
}
// ------  add -----------
let closeAdd = document.querySelector(".container .nav .add form .close");
let addSection = document.querySelector(".container .nav .add");
let addBtn = document.querySelector(".container .nav .user .add-btn");
addBtn.onclick = function(){
    addSection.classList.remove("active");
}
closeAdd.onclick = function(){
    addSection.classList.add("active");
}


// ---- For Close Search 
let SearchClose = document.querySelector(".search-section .close")
let searchSection = document.querySelector(".search-section")
let searchShow = document.querySelector(".container .nav .user .search")
console.log("SearchClose")
searchShow.onclick = function(){
   searchSection.classList.remove("active");
}
SearchClose.onclick = function(){
    searchSection.classList.add("active");
}

// ---- Select All blogs --- 
let blogs = document.querySelectorAll(".blog-child");
let blog = blogs.forEach(function(ele,index){
ele.onclick = function(){
let BlogTitle = ele.children[1].children[0].textContent;
document.cookie = `blogTitle = ${BlogTitle}`;
window.open("../back end/blogPage.php","_self");
}
})

// Comment Section

