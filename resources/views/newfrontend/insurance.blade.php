<x-policyspot.header />
@foreach ($content as $contents )
<x-policyspot.nav :contents="$contents" :category="$category"/>
@endforeach
{{-- <section class="header-section about-header gap--b--100">
    <!--Main Navigation-->
    <img src="{{ 'asset/img/about-header-bg.png' }}" alt="" class="about-header-bg">
    <nav class="navigation navbar-expand-lg   bg-none shadow"> --}}
        <!-- Container wrapper -->
        {{-- <div class="container" style="position: relative;">
            <!-- Toggle button -->
            <a class="navbar-brand mt-2 mt-lg-0  outer-brand" href="#">
                <img src="./img/image 6.png" height="15" alt="MDB Logo" loading="lazy" />
            </a>
            <button class="navbar-toggler " style="position: absolute; right:25px; top: 10px; " type="button"
                data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button> --}}

@foreach ($insurance  as $insu)

        <div class="container ">
            <div class="row">
                <div class="col-md-5 header-col  d-md-flex justify-content-center flex-column align-items-start"
                    style="">
                    <h1 class="color-border mb-25"><span style="color: #000; font-weight: 400;">Home</span> | Life
                        Insurance</h1>
                    <h1 class="about-main-heading mb-39">
                        {{ strtok($insu->title, ' ') }} <span class="gradient">{{ substr($insu->title, strpos($insu->title, ' ')+1) }}</span>
                        {{-- class="gradient">{{ strtok($faqs->s3h1, ' ') }}</span>  {{ substr($faqs->s3h1, strpos($faqs->s3h1, ' ')+1) }}</h2> --}}

                    </h1>
                    <p class="insurance-header-content mb-25">
                        {{$insu->s1p1}}
                    </p>
                    <a href="#0" class="btn btn-icon-circle rounded-pill bg-blue7 fw-bold text-white me-4"
                        target="_blank">
                        <small> {{$insu->s1btn}} <i class="fas fa-long-arrow-alt-right"></i> </small>
                    </a>
                    <!-- <button class="btn  new-button">Get Started Now <span><i class="fa-solid fa-right-long"></i></span></button> -->

                </div>
                <div class="col-md-7 header-coltext-center text-center   header-image  ">
                    <img src="{{ asset('banner/img/' .$insu->s1img)}}" class="insurance-header-image" alt="">
                    {{-- <img src="{{ asset('banner/img/' .$insu->s2c4img)}}" class="insurance-png" --}}

                </div>
            </div>
        </div>
        <!-- <img src="./img/header_4_wave.png" class="wave" alt=""> -->
    </section>

    <!-- headers ends -->


    <!-- our plan section -->

    <section class="our-promise-section gap--100">
        <div class="row">
            <div class="col-md-12">
                <!-- <div class="section-head text-center style-4 mb-40">
                    <div class="top-title">
                        <img src="./img/border.png" alt="">
                        <small class="feature-text"> Promise </small>
                        <img src="./img/border.png" alt="">
                    </div> -->
                <h2 class="features-heading-second"><span class="gradient">{{ strtok($insu->s2h1, ' ') }} </span> {{ substr($insu->s2h1, strpos($insu->s2h1, ' ')+1) }}
                    {{-- {{ strtok($insu->s1h1, ' ') }} <span class="gradient">{{ substr($insu->s1h1, strpos($insu->s1h1, ' ')+1) }}</span> --}}

                </h2>
            </div>
        </div>
        </div>
        <div class="content">
            <div class="features-slider7" style="">
                <div class="swiper-container" id="">
                    <div class="container">

                        <div class="row">
                            <div class="col-md-3 d-flex justify-content-center">

                                <div id="" class="insurance-card swiper-slide ">
                                    <a href="#" class="features-card ins-card style-7">
                                        <div class="insurance-icon" style="background-color: #6212A6;">
                                            <img src="{{ asset('banner/img/' .$insu->s2c1img)}}" class="insurance-png"
                                                alt="">
                    {{-- <img src="{{ asset('banner/img/' .$data->featured_image)}}" alt=""> --}}

                                        </div>
                                        <div class="info">
                                            <h5 class="insurace-card-description"> {{$insu->s2c1h}} </h5>
                                            <!-- <p class="color-999"> Features 01 </p> -->
                                        </div>
                                    </a>
                                </div>

                            </div>
                            <div class="col-md-3 d-flex justify-content-center">

                                <div id="" class="insurance-card swiper-slide ">
                                    <a href="#" class="features-card ins-card style-7">
                                        <div class="insurance-icon" style="background-color:  #FFD050;">
                                            <img src="{{ asset('banner/img/' .$insu->s2c2img)}}" class="insurance-png"
                                                alt="">
                                        </div>
                                        <div class="info">
                                            <h5 class="insurace-card-description"> {{$insu->s2c2h}} </h5>
                                            <!-- <p class="color-999"> Features 02 </p> -->
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 d-flex justify-content-center">

                                <div id="" class="insurance-card swiper-slide ">
                                    <a href="#" class="features-card ins-card style-7">
                                        <div class="insurance-icon" style="background-color: #FF7A41;">
                                            <img src="{{ asset('banner/img/' .$insu->s2c3img)}}" class="insurance-png"
                                                alt="">
                                        </div>
                                        <div class="info">
                                            <h5 class="insurace-card-description"> {{$insu->s2c3h}} </h5>
                                            <!-- <p class="color-999"> Features 03 </p> -->
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 d-flex justify-content-center">
                                <div id="" class="insurance-card swiper-slide ">
                                    <a href="#" class="features-card ins-card style-7">
                                        <div class="insurance-icon" style="background-color: #6212A6;">
                                            <img src="{{ asset('banner/img/' .$insu->s2c4img)}}" class="insurance-png"
                                                alt="">
                                        </div>
                                        <div class="info">
                                            <h5 class="insurace-card-description"> {{$insu->s2c4h}} </h5>
                                            <!-- <p class="color-999"> Features 04 </p> -->
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>




                    </div>





                </div>
            </div>

        </div>
        <img src="{{ 'asset/img/about_s4_wave.png' }}" alt=" "class="value-border-2">

    </section>


    <!-- our plan section ends -->


    <!-- life insurance section -->


    <section class="life-insurance-section gap--100">
        <div class="container">



            <div class="row">
                <div class="col-md-6 d-flex align-items-start flex-column justify-content-center">
                    <h2 class="life-insurance-heading"> {{ strtok($insu->s3h1, ' ') }} <span class="offer-sub gradient">{{ substr($insu->s3h1, strpos($insu->s3h1, ' ')+1) }}</span></h2>

                    <p class="life_insurance_description">
                      {{$insu->s3p1}}
                    </p>
                    <a href="#0" class="btn btn-icon-circle rounded-pill bg-blue7 fw-bold text-white me-4"
                        target="_blank">
                        <small> {{$insu->s3btn}} <i class="fas fa-long-arrow-alt-right"></i> </small>
                    </a>

                    <!-- <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <span class="accordion-count">01.</span> Term Life Insurance
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">Our plans are designed just to meet your financial and
                                    family needs. When it comes to protecting your family financially, get Term Life
                                    Insurance protection with our affordable plans.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <span class="accordion-count">02.</span> Term-100 Life Insurance
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <span class="accordion-count">03.</span> Universal Life Insurance
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <span class="accordion-count">04.</span> Permanent Life Insurance
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="col-md-6  text-center d-flex align-items-center justify-content-center">
                    <img src="{{ asset('banner/img/' .$insu->s3img)}}"class="life-insurance-image" alt="">
                </div>
            </div>
        </div>
        <!-- <img src="./img/about_s4_wave.png" alt="" class="value-border-2"> -->

    </section>

    <!-- life insurance section ends -->
    <!--  slider section starts -->

    <section class=" style-7 our-promise section-padding gap--100" style="background-color: #fff;">


        <div class="row">
            <div class="col-md-12">
                <!-- <div class="section-head text-center style-4 mb-40">
                    <div class="top-title">
                        <img src="./img/border.png" alt="">
                        <small class="feature-text"> Promise </small>
                        <img src="./img/border.png" alt="">
                    </div> -->
                <h2 class="features-heading-second"><span class="gradient"> Our Promise </span> To You
                </h2>
            </div>
        </div>
        </div>
        <!-- <img src="./img/section-2-bg.png" class="img-circle rotate-center" alt=""> -->

        <div class="container">

        </div>
    </section>




    <!-- slider section ends -->

    <!-- faq section -->
    <section class="faq-section gap--100 insurance-faq">
        <div class="container">
            <!-- <h2 class="faq-heading mb-5 text-center">FAQ’s</h2> -->
            <h2 class="faq-heading mb-5 text-center" style="color:#2d3134 !important"> <span
                    class="gradient"> {{ strtok($insu->s4h1, ' ') }} </span> {{ substr($insu->s4h1, strpos($insu->s4h1, ' ')+1) }}</h2>
                    {{-- <h2 class="life-insurance-heading"> {{ strtok($insu->s3h1, ' ') }} <span class="offer-sub gradient">{{ substr($insu->s3h1, strpos($insu->s3h1, ' ')+1) }}</span></h2> --}}


            <div class="accordion row" id="accordion">
                <div class="col-1 d-flex justify-content-center">
                    <span class="item-count">01</span>
                </div>
                <div class="col-11">

                    <div class=" accordion-item border-0 ">
                        <button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">Why is
                                the
                                moon sometimes
                                out during the day?</span><i class="fa-solid fa-plus faq-icon"></i></button>
                        <div class="accordion-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et
                                dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra
                                suspendisse
                                potenti.</p>
                        </div>
                    </div>
                </div>
                <div class="col-1 d-flex justify-content-center">
                    <span class="item-count">02</span>
                </div>
                <div class="col-11">
                    <div class="accordion-item border-0 ">
                        <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title">Why is
                                the
                                sky
                                blue?</span><i class="fa-solid fa-plus faq-icon"></i></button>
                        <div class="accordion-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et
                                dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra
                                suspendisse
                                potenti.</p>
                        </div>
                    </div>
                </div>
                <div class="col-1 d-flex justify-content-center">
                    <span class="item-count">03</span>
                </div>
                <div class="col-11">
                    <div class="accordion-item border-0 ">
                        <button id="accordion-button-3" aria-expanded="false"><span class="accordion-title">Will we
                                ever
                                discover
                                aliens?</span><i class="fa-solid fa-plus faq-icon"></i></button>
                        <div class="accordion-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et
                                dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra
                                suspendisse
                                potenti.</p>
                        </div>
                    </div>
                </div>
                <div class="col-1 d-flex justify-content-center">
                    <span class="item-count">04</span>
                </div>
                <div class="col-11">
                    <div class="accordion-item border-0 ">
                        <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title">How much
                                does the Earth
                                weigh?</span><i class="fa-solid fa-plus faq-icon"></i></button>
                        <div class="accordion-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et
                                dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra
                                suspendisse
                                potenti.</p>
                        </div>
                    </div>
                </div>
                <div class="col-1 d-flex justify-content-center">
                    <span class="item-count">05</span>
                </div>
                <div class="col-11">
                    <div class="accordion-item border-0 ">
                        <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">How do
                                airplanes stay
                                up?</span><i class="fa-solid fa-plus faq-icon"></i></button>
                        <div class="accordion-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et
                                dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra
                                suspendisse
                                potenti.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 text-center mt-5">
                    <!-- <a href="#" class="btn new-button">View All<span><i class="fa-solid fa-right-long"></i></span></a> -->
                    <a href="#0" class="btn btn-icon-circle rounded-pill bg-blue7 fw-bold text-white me-4"
                        target="_blank">
                        <small> {{$insu->s4btn}} <i class="fas fa-long-arrow-alt-right"></i> </small>
                    </a>
                </div>
            </div>
        </div>

    </section>




    <!-- faq section ends -->



    <!-- contact us section -->

    <section class="contact-section gap--100">
        <img src="{{ 'asset/img/02.png' }}" alt="" class="contact-img-bg">
        <div class="container pt-5">

            <div class="row d-flex justify-content-center">
                <div class="col-md-6 mb-5   d-flex justify-content-center flex-column align-items-center">
                    <h6 class="contact-heading">{{$insu->s5h1}}</h6>
                    <h1 class="section-description text-center">{{$insu->s5h2}} <br><span class="">
                            </span> </h1>
                    <!-- <a href="#" class="btn new-button">Let’s talk!<span><i class="fa-solid fa-right-long"></i></span></a> -->
                    <a href="#0" class="btn btn-icon-circle rounded-pill bg-blue7 fw-bold text-white me-4"
                        target="_blank">
                        <small> Let's talk <i class="fas fa-long-arrow-alt-right"></i> </small>
                    </a>
                </div>
                <!-- <div class="col-md-6 d-flex justify-content-center align-items-end">
          <img src="./img/chair.png" alt="">
        </div> -->
            </div>
        </div>
        @endforeach
    </section>

    <!-- contact us section ends -->

    <!-- footer section -->
    @foreach ($content as $contents )
    <x-policyspot.footer :contents="$contents"/>
@endforeach

