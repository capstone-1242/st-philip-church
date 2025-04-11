/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */


// this is for navigation

const hamburger = document.querySelector(".menu-toggle");
const headerNav = document.querySelector(".main-navigation");

if (hamburger){
  hamburger.addEventListener("click",function(){
  headerNav.classList.toggle("show-nav");
  let expanded = this.getAttribute("aria-expanded") === "true" || false;
  this.setAttribute("aria-expanded", !expanded);
})
}