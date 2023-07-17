"use strict";

console.log('JS CARICATO !!!');

const themeIcon = document.getElementById('theme-icon');
const themeToggle = document.querySelector('.toggle');
const themeElement = document.getElementById('dark-theme');
const navbar = document.getElementById('navbar');
const mainCustom = document.getElementById('main-custom');

// Controlla se è presente un tema salvato nel localStorage
const savedTheme = localStorage.getItem('theme');
const savedNavbarClass = localStorage.getItem('navbarClass');
const navbarBg = localStorage.getItem('navbarBg');
const mainTheme = localStorage.getItem('mainTheme');

if (savedTheme && savedNavbarClass && navbarBg && mainTheme) {
  themeElement.classList.add(savedTheme);
  navbar.classList.add(savedNavbarClass.split(' '));
  navbar.classList.add(navbarBg);
  mainCustom.classList.add(mainTheme);
  themeIcon.classList.replace('bi-moon-stars-fill', 'bi-brightness-high-fill');
  themeToggle.classList.add("active");
}

themeIcon.addEventListener('click', function(e) {
  e.preventDefault();
  if (themeIcon.classList.contains('bi-moon-stars-fill')) {
    themeIcon.classList.replace('bi-moon-stars-fill', 'bi-brightness-high-fill');
    themeToggle.classList.add("active");
    themeElement.classList.replace('dark-theme','light-theme');
    navbar.classList.replace('navbar-dark', 'navbar-light');
    navbar.classList.replace('bg-dark', 'bg-light');
    mainCustom.classList.replace('main_custom_dark', 'main_custom_light');
    localStorage.setItem('theme', 'light-theme');
    localStorage.setItem('navbarClass', 'navbar-light');
    localStorage.setItem('navbarBg', 'bg-light');
    localStorage.setItem('mainTheme', 'main_custom_light'); // Salva il tema selezionato nel localStorage
  } else {
    themeIcon.classList.replace('bi-brightness-high-fill', 'bi-moon-stars-fill');
    themeToggle.classList.remove("active");
    themeElement.classList.replace('light-theme', 'dark-theme');
    navbar.classList.replace('navbar-light', 'navbar-dark');
    navbar.classList.replace('bg-light', 'bg-dark');
    mainCustom.classList.replace('main_custom_light', 'main_custom_dark');
    localStorage.setItem('theme', 'dark-theme');
    localStorage.setItem('navbarClass', 'navbar-dark'); 
    localStorage.setItem('navbarBg', 'bg-dark');
    localStorage.setItem('mainTheme', 'main_custom_dark');// Salva il tema selezionato nel localStorage
  }
});
