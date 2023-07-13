"use strict";

console.log('JS CARICATO !!!');

const themeIcon = document.getElementById('theme-icon');
const themeToggle = document.querySelector('.toggle');
const themeElement = document.getElementById('dark-theme');

// Controlla se è presente un tema salvato nel localStorage
const savedTheme = localStorage.getItem('theme');
if (savedTheme) {
  themeElement.classList.add(savedTheme);
  themeIcon.classList.replace('bi-moon-stars-fill', 'bi-brightness-high-fill');
  themeToggle.classList.add("active");
}

themeIcon.addEventListener('click', function(e) {
  e.preventDefault();
  if (themeIcon.classList.contains('bi-moon-stars-fill')) {
    themeIcon.classList.replace('bi-moon-stars-fill', 'bi-brightness-high-fill');
    themeToggle.classList.add("active");
    themeElement.classList.replace('dark-theme','light-theme');
    localStorage.setItem('theme', 'light-theme'); // Salva il tema selezionato nel localStorage
  } else {
    themeIcon.classList.replace('bi-brightness-high-fill', 'bi-moon-stars-fill');
    themeToggle.classList.remove("active");
    themeElement.classList.replace('light-theme', 'dark-theme');
    localStorage.setItem('theme', 'dark-theme'); // Salva il tema selezionato nel localStorage
  }
});
