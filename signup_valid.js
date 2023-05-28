let firstName = document.getElementById("first_name");
let lastName = document.getElementById("last_name")
let user = document.getElementById("username");
let mail = document.getElementById("mail");
let password = document.getElementById("password");
let rePassword = document.getElementById("retry_password");
let subBtn = document.getElementById("signup");
let errorMsg = document.querySelector(".signup form .error");
// test if empty
subBtn.onclick = function(){
        errorMsg.textContent = "Please Complete All Fieds , Or Check Password And Retry Password Are Not The Same";
errorMsg.style.visibility = "visible";
    }
