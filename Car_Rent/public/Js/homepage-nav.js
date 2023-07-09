
btn1 = document.getElementById('btn1');
btn2 = document.getElementById('btn2');
body = document.body;

let moon = document.querySelector('#img1');
let sun = document.querySelector('#img2');

btn1.addEventListener("click", e=>{
    body.classList.toggle('dark')
    body.classList.toggle('light')
    


    moon.classList.toggle('show')
    sun.classList.toggle('show')
});

btn2.addEventListener("click", e=>{
    body.classList.toggle('dark')
    body.classList.toggle('light')
    


    moon.classList.toggle('show')
    sun.classList.toggle('show')
});
