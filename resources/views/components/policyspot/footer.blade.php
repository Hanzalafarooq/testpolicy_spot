


<section class="footer">
    <div class="container footer-content">

      <div class="row">
        <div class="footer-col col-md-5 mt-5" style="border-right: 1px solid rgb(148, 147, 147);">
          <img src="{{('asset/img/image 6.png')}}"alt="" class="footer-logo">
          <p class="footer-description">{{$contents->fdisc}}</p>
            <ul class="nav d-flex justify-content-start flex-column ">
              <li class="nav-item">
                <a class="nav-link active" href="#" aria-current="page">{{$contents->femail}}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="#" aria-current="page">{{$contents->fphone}}</a>
              </li>
            <!-- <p class="contact-email">info@policyspot.com</p>
            <p class="contact-number">1-890-234-345</p> -->
            </ul>
          <ul class="social-link d-flex">
            <li class="nav-item"><a class="nav-link" href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
            <li class="nav-item"><a class="nav-link" href="#"><i class="fa-brands fa-instagram"></i></a></li>
            <li class="nav-item"><a class="nav-link" href="#"><i class="fa-brands fa-twitter"></i></a></li>
            <li class="nav-item"><a class="nav-link" href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
          </ul>
        </div>
        <!-- <div class="col-md-3 mt-5">
          <h1 class="footer-quick-links">Quick Links</h1>
          <ul class="nav d-flex flex-column ">
            <li class="nav-item">
              <a class="nav-link active" href="#" aria-current="page">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#" aria-current="page">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#" aria-current="page">FAQ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#" aria-current="page">Contact Us</a>
            </li>


          </ul>
        </div> -->
        <div class="footer-col col-md-5 mt-5 ">
          <h1 class="footer-quick-links">{{$contents->fh1}}</h1>
          <div class="row">
            <div class="col-md-6">
              <ul class="nav d-flex justify-content-start flex-column ">
                <li class="nav-item">
                  <a class="nav-link active" href="#" aria-current="page">{{$contents->flink1}}</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="#" aria-current="page">{{$contents->flink2}}</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link " href="#" aria-current="page">{{$contents->flink3}}</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="#" aria-current="page">{{$contents->flink4}}</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="#" aria-current="page">{{$contents->flink5}}</a>
                </li>
              </ul>
            </div>
            <div class="col-md-6">
              <ul class="nav d-flex justify-content-start flex-column ">

                <li class="nav-item">
                  <a class="nav-link " href="#" aria-current="page">{{$contents->flink6}}</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="#" aria-current="page">{{$contents->flink7}}</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="#" aria-current="page">{{$contents->flink8}}</a>
                </li>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="#" aria-current="page">{{$contents->flink9}}</a>
                </li>


              </ul>
            </div>
          </div>

        </div>
        <div class="footer-col col-md-2 mt-5">
          <h1 class="footer-contact"> {{$contents->fh2}}</h1>
          <ul class="nav d-flex justify-content-start flex-column ">
            <li class="nav-item">
              <a class="nav-link active" href="{{url('/faq')}}" aria-current="page">{{$contents->fh2link1}}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{url('/about')}}" aria-current="page">{{$contents->fh2link2}}</a>
            </li>
          <!-- <p class="contact-email">info@policyspot.com</p>
          <p class="contact-number">1-890-234-345</p> -->
          </ul>
          <!-- <ul class="social-link d-flex">
            <li class="nav-item"><a class="nav-link" href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
            <li class="nav-item"><a class="nav-link" href="#"><i class="fa-brands fa-instagram"></i></a></li>
            <li class="nav-item"><a class="nav-link" href="#"><i class="fa-brands fa-twitter"></i></a></li>
            <li class="nav-item"><a class="nav-link" href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
          </ul> -->
        </div>
        <!-- <hr style="margin-top: 5px;  color: #fff;
        border: none;
        background-color: #fff;
        height: 2px;"> -->
      </div>
      <div class="row copyright-div rounded-pill ">
        <div class="col-12">
          <p class="   my-auto text-center p-3"><span class='span' style="">© Copyright
              2023 Policyspot</span> All rights reserved.</p>

        </div>
      </div>
    </div>

  </section>

  <!-- footer section ends -->
  <script>

  </script>
<script src="{{asset('asset/js/mdb.min.js')}}"></script>

  {{-- <script type="text/javascript" src="js/mdb.min.js"></script> --}}
  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
    integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
  {{-- <script src="./css/slick/slick.min.js"></script> --}}
<script src="{{asset('asset/css/slick/slick.min.js')}}"></script>
<script src="{{asset('asset/js/pace.js')}}"></script>

  {{-- <script src="./js/pace.js"></script> --}}

  <!-- Custom scripts -->

  <script type="text/javascript">

    $('#gallery').slick({

      slidesToShow: 2,
      slidesToScroll: 1,
      infinite: true,
      autoplay: true,
      autoplaySpeed: 0,
      speed: 8000,
      // pauseOnHover: true,
      cssEase: 'linear',
      responsive: [

    {
      breakpoint: 575,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },

  ]


    });

    $('.partner-list').slick({
      slidesToShow: 7,
      slidesToScroll: 1,
      infinite: true,
      autoplay: true,
      autoplaySpeed: 0,
      speed: 8000,
      // pauseOnHover: false,
      cssEase: 'linear',
      rtl: true
    });


    $('.partner-list-2').slick({
      slidesToShow: 7,
      slidesToScroll: 1,
      infinite: true,
      autoplay: true,
      autoplaySpeed: 0,
      speed: 8000,
      // pauseOnHover: false,
      cssEase: 'linear',


    });
    var splide = new Splide('.splide', {
      type: 'loop',
      perPage: 3,
      perMove: 1,
      autoplay: true,
      breakpoints: {
    991: {
      perPage: 2,

    },
    768: {
      perPage: 1,
      arrows:false
    }
  },
    });
    splide.mount();


    /*
        var splide = new Splide('.splide', {
          perPage: 4,
          type: 'loop',
          autoplay:"play",
          // speed:'1s',
          // rewindSpeed:'1s',
          gap: '4rem',
          perMove: 1,
          breakpoints: {
            1199:{
              perPage:3,
              gap:'3rem'
            },
            991:{
              perPage:2,
              gap:'3rem'
            },
            767:{
              perPage:1,
              gap:'2rem',
            },

            640: {
              perPage: 1,

            },
            480: {
              perPage: 1,
            },
            391: {
              perPage: 1,
              arrows:false
            },
          },
        });

        splide.mount();


    */

    const items = document.querySelectorAll(".accordion button");

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

    // loading screen
    $( function() {

paceOptions = {
    ajax: true,
    document: true,
    eventLag: false
};

Pace.on('done', function () {
    $('#preloader').addClass("isdone");
    $('.loading').addClass("isdone");
});
} );
  </script>

</body>

</html>
