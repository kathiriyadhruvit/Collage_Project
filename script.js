
document.querySelector("#sign").addEventListener("click",function(e){
        e.preventDefault();
document.querySelector("#form").style.display="block";
})

document.querySelector("#close").addEventListener("click",function(e){
        e.preventDefault();
        document.querySelector("#form").style.display="none";
})

document.querySelector("#loginbtn").addEventListener("click",function(e){
        e.preventDefault();
        document.querySelector("#form").style.display="none";
        document.querySelector("#loginform").style.display="block";
})

document.querySelector("#closebtn").addEventListener("click",function(e){
        document.querySelector("#loginform").style.display="none";
})

