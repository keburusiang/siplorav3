//ini unutuk scrolling
$('.page-scroll').on('click', function(e) {

 var tujuan = $(this).attr('href');

 var elemenTujuan = $(tujuan);

 $('html ,body').animate({
  scrollTop: elemenTujuan.offset().top - 0 
 });

 e.preventDefault();
});﻿

//dibawh ini untuk hilangkan navbar
(function ($) {

    var navbar = $('.navbar');
    var lastScrollTop = 10;

    $(window).scroll(function () {
        var st = $(this).scrollTop();
        // Scroll down
        if (st > lastScrollTop) {
            navbar.fadeOut("fast");
        } 
        // Scroll up but still lower than 200 (change that to whatever suits your need)
        else if(st < lastScrollTop && st >10) {
            navbar.fadeIn("fast");
            navbar.removeClass('').addClass('bg-custom');
        }
        // Reached top
        else {
            navbar.removeClass('bg-custom').addClass('b');
        }
        lastScrollTop = st;
    });

})(jQuery);




// Example starter JavaScript for disabling form submissions if there are invalid fields

// (function() {
//   'use strict';
//   window.addEventListener('load', function() {
//     // Fetch all the forms we want to apply custom Bootstrap validation styles to
//     var forms = document.getElementsByClassName('needs-validation');
//     // Loop over them and prevent submission
//     var validation = Array.prototype.filter.call(forms, function(form) {
//       form.addEventListener('submit', function(event) {
//         if (form.checkValidity() === false) {
//           event.preventDefault();
//           event.stopPropagation();
//         }
//         form.classList.add('was-validated');
//       }, false);
//     });
//   }, false);
// })();