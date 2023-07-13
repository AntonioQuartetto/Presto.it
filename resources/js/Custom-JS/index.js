"use strict"

console.log('JS CARICATO !!!');


const toggle = document.querySelector('.fa-solid');
const ctoggle= document.querySelector('.toggle')
const theme = document.querySelector('.theme')

toggle.addEventListener('click', function() {
  if (toggle.classList.contains('fa-sun')) {
    toggle.classList.replace('fa-sun', 'fa-moon');
    ctoggle.classList.add("active");
    theme.classList.add("active");
    document.querySelector('body').style.backgroundColor = '#222';

  } else {
    toggle.classList.replace('fa-moon', 'fa-sun');
    ctoggle.classList.remove("active");
    theme.classList.remove("active");
    document.querySelector('body').style.backgroundColor = '#fff';
  }
});
