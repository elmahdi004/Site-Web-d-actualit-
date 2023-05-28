let closeComment = document.querySelector(".add-comment .close");
let commentSection = document.querySelector(".add-comment");
let openComment = document.querySelector(".comment-btn");
closeComment.onclick = function(){
    commentSection.classList.add("active");
}
openComment.onclick = function(){
    console.log("Yes")
    commentSection.classList.remove("active");
}