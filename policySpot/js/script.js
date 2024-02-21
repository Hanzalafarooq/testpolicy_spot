$(document).ready(function(){
    console.log('hi');

    
    // scroll functionings

    window.onscroll = function () { scrollFunction() };

    function scrollFunction() {

      if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 150) {
        document.querySelector(".navigation").style.position = "fixed";
        // document.querySelector(".navigation").style.top = "-20px";
        document.querySelector(".navigation").style.top = "0px";
        // document.querySelector(".navigation").style.width = "479px";


      } else if (document.body.scrollTop < 150 || document.documentElement.scrollTop < 150) {
        document.querySelector(".navigation").style.position = "relative";
        document.querySelector(".navigation").style.top = "0px";

      }
    }




    // accordion 

    const items = document.querySelectorAll("#accordion button");

    function toggleAccordion() {
        // alert('hello')
        if ($(this).children('i').attr('class') == 'fa-solid fa-plus faq-icon') {

            $('.accordion-item button').children('i').addClass('fa-solid fa-plus faq-icon');
            $(this).children('i').removeClass('fa-solid fa-plus faq-icon');
            $(this).children('i').addClass('fa-solid fa-minus faq-icon');
        } else {
            $(this).children('i').removeClass('fa-solid fa-minus faq-icon');
            $(this).children('i').addClass('fa-solid fa-plus faq-icon');
        }

        const itemToggle = this.getAttribute('aria-expanded');

        for (i = 0; i < items.length; i++) {
            items[i].setAttribute('aria-expanded', 'false');
        }

        if (itemToggle == 'false') {
            this.setAttribute('aria-expanded', 'true');
        }
    }

    items.forEach(item => item.addEventListener('click', toggleAccordion));
})