const menu = document.querySelector('#mobile-menu')
const menuLinks = document.querySelector('.navbar__menu')
menu.addEventListener('click', function(){
  menu.classList.toggle('is-active');
  menuLinks.classList.toggle('active');
});

// js for product gallery 
var Productimg = document.getElementById("Productimg");
    var small__img = document.getElementsByClassName("small__img");
    
    small__img[0].onclick = function() 
    {
        Productimg.src = small__img[0].src;
    }
    small__img[1].onclick = function() 
    {
        Productimg.src = small__img[1].src;
    }
    small__img[2].onclick = function() 
    {
        Productimg.src = small__img[2].src;
    }
    small__img[3].onclick = function() 
    {
        Productimg.src = small__img[3].src;
    }
