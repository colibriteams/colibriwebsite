window.bootstrap = require('bootstrap/dist/js/bootstrap.esm.min.js');
(function () {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }

          form.classList.add('was-validated')
        }, false)
    })

    var accordions = document.querySelectorAll(".button-toggle");
    Array.prototype.slice.call(accordions)
    .forEach(function (accordion) {
      accordion.addEventListener('mouseover', function (event) {
          accordion.dispatchEvent(new Event('click'));
      }, false);
       /* accordion.addEventListener('mouseout', function (event) {
          accordion.dispatchEvent(new Event('click'));
      }, false);*/
    })

    // scroll to #contact-section on click #nav-contact-btn
    // const contactBtn = document.getElementById('nav-contact-btn')
    // const contactSection = document.getElementById('contact-section')
    // contactBtn.addEventListener('click', () => {
    //     contactSection.scrollIntoView({behavior: 'smooth'});
    //     // if window width is less than 1000px, close the navbar
    //     if (window.innerWidth < 1000) {
    //         const menuToggle = document.getElementById('navbarSupportedContent')
    //         const bsCollapse = new bootstrap.Collapse(menuToggle)
    //         bsCollapse.toggle()
    //     }
    // });

    // show button on scroll
    // const heroContactBtnOffset = document.getElementById('hero-contact-btn').offsetTop;
    // window.onscroll = function() {
    //     // if mobile screen
    //     if (window.innerWidth > 992) {
    //         if (document.body.scrollTop > heroContactBtnOffset-50 || document.documentElement.scrollTop > heroContactBtnOffset-50) {
    //             document.getElementById("nav-contact-btn").classList.remove('d-none');
    //             document.getElementById("hero-contact-btn").classList.add('invisible');
    //         } else {
    //             document.getElementById("nav-contact-btn").classList.add('d-none');
    //             document.getElementById("hero-contact-btn").classList.remove('invisible');
    //         }
    //     }else {
    //         document.getElementById("nav-contact-btn").classList.remove('d-none');
    //         document.getElementById("hero-contact-btn").classList.remove('invisible');
    //     }
    // }

})()
