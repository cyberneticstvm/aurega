/**
* Template Name: SoftLand - v4.10.0
* Template URL: https://bootstrapmade.com/softland-bootstrap-app-landing-page-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/
(function() {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all)
    if (selectEl) {
      if (all) {
        selectEl.forEach(e => e.addEventListener(type, listener))
      } else {
        selectEl.addEventListener(type, listener)
      }
    }
  }

  /**
   * Easy on scroll event listener 
   */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

  /**
   * Toggle .header-scrolled class to #header when page is scrolled
   */
  let selectHeader = select('#header')
  if (selectHeader) {
    const headerScrolled = () => {
      if (window.scrollY > 100) {
        selectHeader.classList.add('header-scrolled')
      } else {
        selectHeader.classList.remove('header-scrolled')
      }
    }
    window.addEventListener('load', headerScrolled)
    onscroll(document, headerScrolled)
  }

  /**
   * Mobile nav toggle
   */
  on('click', '.mobile-nav-toggle', function(e) {
    select('#navbar').classList.toggle('navbar-mobile')
    this.classList.toggle('bi-list')
    this.classList.toggle('bi-x')
  })

  /**
   * Back to top button
   */
  let backtotop = select('.back-to-top')
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add('active')
      } else {
        backtotop.classList.remove('active')
      }
    }
    window.addEventListener('load', toggleBacktotop)
    onscroll(document, toggleBacktotop)
  }

  /**
   * Mobile nav dropdowns activate
   */
  on('click', '.navbar .dropdown > a', function(e) {
    if (select('#navbar').classList.contains('navbar-mobile')) {
      e.preventDefault()
      this.nextElementSibling.classList.toggle('dropdown-active')
    }
  }, true)

  /**
   * Testimonials slider
   */
  new Swiper('.testimonials-slider', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    }
  });

  /**
   * Animation on scroll
   */
  window.addEventListener('load', () => {
    AOS.init({
      duration: 1000,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    })
  });

})()

const input = document.getElementById("First_Name");
const input1 = document.getElementById("Last_Name");
const input2 = document.getElementById("Mobile");
const regex = new RegExp("^[a-zA-Z]*$");
const regex1 = new RegExp("^[0-9]*$");

input.addEventListener("beforeinput", (event) => {
  if (event.data != null && !regex.test(event.data)) 
    event.preventDefault();
});
input1.addEventListener("beforeinput", (event) => {
  if (event.data != null && !regex.test(event.data)) 
    event.preventDefault();
});
input2.addEventListener("beforeinput", (event) => {
  if (event.data != null && !regex1.test(event.data)) 
    event.preventDefault();
});

function validateForm(){
  var ccode = document.getElementById("LEADCF7").value;
  var service = document.getElementById("LEADCF6").value;
  var mobile = document.getElementById("Mobile").value;
  if(!ccode){
    alert("Country Code should not be left blank");
    return false;
  }
  if(!service){
    alert("Service should not be left blank");
    return false;
  }
  if(ccode == '+91 (India)'){    
    if(mobile.length != 10){
      alert('Mobile number should be 10 digits');
      return false;
    }
  }else{
    if(mobile.length != 9){
      alert('Mobile number should be 9 digits');
      return false;
    }
  }
  return true;
}

