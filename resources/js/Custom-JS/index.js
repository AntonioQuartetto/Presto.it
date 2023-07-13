"use strict"

console.log('JS CARICATO !!!');


const themeIcon = document.getElementById('theme-icon');
const ctoggle= document.querySelector('.toggle');
const theme = document.querySelector('.dark-theme');

themeIcon.addEventListener('click', function(e) {
    e.preventDefault();
  if (themeIcon.classList.contains('bi-moon-stars-fill')) {
    themeIcon.classList.replace('bi-moon-stars-fill', 'bi-brightness-high-fill');
    ctoggle.classList.add("active");
    theme.classList.replace('dark-theme','light-theme');

  } else {
    themeIcon.classList.replace('bi-brightness-high-fill', 'bi-moon-stars-fill');
    ctoggle.classList.remove("active");
    theme.classList.replace('light-theme', 'dark-theme');
  }
});