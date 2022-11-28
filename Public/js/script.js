const hamburger = document.querySelector('.nav_toggler')
const navigationlinks = document.querySelector('nav')
const links = document.getElementsByClassName('nav_link')
hamburger.addEventListener("click", function () {
  hamburger.classList.toggle("active")
  navigationlinks.classList.toggle("active")
})
for (var i = 0; i < links.length; i++) {
  links[i].addEventListener("click", function () {
    navigationlinks.classList.toggle("active")
    console.log('yes')
    hamburger.classList.toggle("active")
  })
}