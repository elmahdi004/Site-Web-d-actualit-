let blogs = document.querySelectorAll(".blog-child");
let blog = blogs.forEach(function(ele,index){
ele.onclick = function(){
let BlogTitle = ele.children[1].children[0].textContent;
document.cookie = `blogTitle = ${BlogTitle}`;
window.open("../back end/blogPage.php","_self");
}
})