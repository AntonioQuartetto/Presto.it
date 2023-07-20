"use strict";

console.log('JS CARICATO !!!');

const themeIcon = document.getElementById('theme-icon');
const themeToggle = document.querySelector('.toggle');
const themeElement = document.getElementById('dark-theme');
const mainCustom = document.getElementById('main-custom');

// Controlla se è presente un tema salvato nel localStorage
const savedTheme = localStorage.getItem('theme');
const mainTheme = localStorage.getItem('mainTheme');

if (savedTheme && mainTheme) {
  themeElement.classList.add(savedTheme);
  mainCustom.classList.add(mainTheme);
  if (savedTheme === 'light-theme') {
    themeIcon.classList.replace('bi-moon-stars-fill', 'bi-brightness-high-fill');
    themeToggle.classList.add("active");
  } else {
    themeIcon.classList.replace('bi-brightness-high-fill', 'bi-moon-stars-fill');
    themeToggle.classList.remove("active");
  }
}

themeIcon.addEventListener('click', function(e) {
  e.preventDefault();
  if (themeIcon.classList.contains('bi-moon-stars-fill')) {
    themeIcon.classList.replace('bi-moon-stars-fill', 'bi-brightness-high-fill');
    themeToggle.classList.add("active");
    themeElement.classList.replace('dark-theme','light-theme');
    mainCustom.classList.replace('main_custom_dark', 'main_custom_light');
    localStorage.setItem('theme', 'light-theme');
    localStorage.setItem('mainTheme', 'main_custom_light'); // Salva il tema selezionato nel localStorage
  } else {
    themeIcon.classList.replace('bi-brightness-high-fill', 'bi-moon-stars-fill');
    themeToggle.classList.remove("active");
    themeElement.classList.replace('light-theme', 'dark-theme');
    mainCustom.classList.replace('main_custom_light', 'main_custom_dark');
    localStorage.setItem('theme', 'dark-theme');
    localStorage.setItem('mainTheme', 'main_custom_dark');// Salva il tema selezionato nel localStorage
  }
});
