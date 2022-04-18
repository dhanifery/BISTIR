var content1 = document.getElementById("content1");
var content2 = document.getElementById("content2");
var content3 = document.getElementById("content3");
var btn1 = document.getElementById("btn1");
var btn2 = document.getElementById("btn2");
var btn3 = document.getElementById("btn3");

function openHTML(){
        content1.style.transform = "translateX(0)";
        content2.style.transform = "translateX(100%)";
        content3.style.transform = "translateX(100%)";
        btn1.style.color = "var(--color-dark)";
        btn1.style.backgroundColor= "var(--color-white)";       
        btn2.style.color = "var(--color-white)";
        btn2.style.backgroundColor ="var(--color-primary)";
        btn3.style.color = "var(--color-white)";
        btn3.style.backgroundColor = "var(--color-primary)";
}
function openCSS(){
        content1.style.transform = "translateX(100%)";
        content2.style.transform = "translateX(0)";
        content3.style.transform = "translateX(100%)";
        btn1.style.color = "var(--color-white)";
        btn1.style.backgroundColor ="var(--color-primary)";
        btn2.style.backgroundColor ="var(--color-white)";
        btn2.style.color = "var(--color-dark)";
        btn3.style.color = "var(--color-white)";
        btn3.style.backgroundColor = "var(--color-primary)";
}
function openJS(){
        content1.style.transform = "translateX(100%)";
        content2.style.transform = "translateX(100%)";
        content3.style.transform = "translateX(0)";
        btn1.style.color = "var(--color-white)";
        btn1.style.backgroundColor= "var(--color-primary)"
        btn2.style.color = "var(--color-white)";
        btn2.style.backgroundColor ="var(--color-primary)";
        btn3.style.color = "var(--color-dark)";
        btn3.style.backgroundColor = "var(--color-white)";
}