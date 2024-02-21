<x-policyspot.header />

<body>
    @foreach ($content as $contents )
    <x-policyspot.nav :contents="$contents" :category="$category"/>
    @endforeach


    {{-- <div id="preloader">
    </div>
    <!-- header section starts -->
    <div class="banner-section">
        <div class="container d-flex align-items-center">

            <div class="d-flex align-content-center ">

                <p class="top-email"><i class="fa-solid fa-envelope"></i> info@something.ca</p>
                <p class="top-number"><i class="fa-solid fa-phone-flip"></i> +123456789</p>
                <a href="#0" class="btn btn-icon-circle rounded-pill bg-blue7 fw-bold text-white me-4 qoute-btn"
                    target="_blank">
                    <small> get a quote <i class="fas fa-long-arrow-alt-right"></i> </small>
                </a>
            </div>
        </div>
    </div>
    <section class="header-section about-header gap--b--100">
        <!--Main Navigation-->
        <img src="{{ 'asset/img/about-header-bg.png' }}" alt="" class="about-header-bg">
        <nav class="navigation navbar-expand-lg   bg-none shadow">
            <!-- Container wrapper -->
            <div class="container" style="position: relative;">
                <!-- Toggle button -->
                <a class="navbar-brand mt-2 mt-lg-0  outer-brand" href="#">
                    <img src="./img/image 6.png" height="15" alt="MDB Logo" loading="lazy" />
                </a>
                <button class="navbar-toggler " style="position: absolute; right:25px; top: 10px; " type="button"
                    data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <!-- Collapsible wrapper -->
                <x-policyspot.navbar />
            </div>

        </nav> --}}
@foreach ($about as $abcontent)


        <div class="container gap--b--100">
            <div class="row">
                <div class="col-md-6 header-col  d-md-flex justify-content-center flex-column align-items-start justify-content-center"
                    style="padding-top: 130px;">
                    <h1 class="color-border mb-25"><span style="color: #000; font-weight: 400;">Home</span> | ABOUT US
                    </h1>
                    <h1 class="about-main-heading mb-39">
                      {{$abcontent->s1h1}}
                    </h1>
                    <p class="about-header-content mb-25">
                        {{$abcontent->s1p1}}

                    </p>
                    <a href="#0" class="btn btn-icon-circle rounded-pill bg-blue7 fw-bold text-white me-4"
                        target="_blank">
                        <small>   {{$abcontent->s1btn}} <i class="fas fa-long-arrow-alt-right"></i> </small>
                    </a>
                    <!-- <button class="btn  new-button">Get Started Now <span><i class="fa-solid fa-right-long"></i></span></button> -->

                </div>
                <div class="col-md-6 header-coltext-center text-center  header-image mt-5 mb-2">
                    <img src="{{ asset('banner/img/'.$abcontent->s1img )}}" alt="">
                </div>
            </div>
        </div>
        <img src="{{ 'asset/img/header_4_wave.png' }}" class="wave" alt="">
    </section>

    <!-- headers ends -->


    <!-- Why PolicySpot?  starts  -->

    <section class=" gap--100 why-policyspot">
        <div class="container">
            {{-- <h2 class="about-why-heading"> {{$abcontent->s2h1}} <span class="offer-sub gradient"></span></h2> --}}
            <h2 class="about-why-heading">{{ strtok($abcontent->s2h1, ' ') }} <span class="offer-sub gradient">{{ substr($abcontent->s2h1, strpos($abcontent->s2h1, ' ')+1) }}</span></h2>

            <p class="about-why-description">
                {{$abcontent->s2p1}}
            </p>
            <p class="about-why-description">
                {{$abcontent->s2p2}}
            </p>

            <div class="row text-center">
                <div class="col-12">
                    {{-- <img src="{{ 'asset/img/whypolicy.png' }}" class="why-img" alt=""> --}}
                    <img src="{{ asset('banner/img/'.$abcontent->s2img )}}" alt="">

                </div>

            </div>
    </section>

    <!-- Why PolicySpot? ends -->



    <!--  mission section starts -->

    <section class="style-7 section-padding gap--100 " id="about-mission">
        <div class="container">

            <div class="row">
                <div class="col-md-6 d-flex align-items-center ">
                    <div class="section-head mission-responsive style-4 mb-40">
                        <div class="top-title mb-25">
                            <img src="{{ 'asset/img/border.png' }}" alt="">
                            <small class="feature-text">     {{$abcontent->s3sh1}} </small>
                            <img src="{{ 'asset/img/border.png' }}" alt="">
                        </div>
                        <h2 class="mission-heading-second text-start mb-25">
                            {{ strtok($abcontent->s3h1, ' ') }} <span class="gradient"> {{ substr($abcontent->s3h1, strpos($abcontent->s3h1, ' ')+1) }} </span>
                        </h2>
                        <p class="about-mission-description">
                            {{$abcontent->s3p1}}
                        </p>

                        <ul class="mission-list mb-25">
                            <li><span class="mission-list-tag"><img src="{{ 'asset/img/mission-list-tag.png' }}"
                                        alt=""></span>
                                        {{$abcontent->s3l1}} </li>
                            <li><span class="mission-list-tag"><img
                                        src="{{ 'asset/img/mission-list-tag.png' }}"alt=""></span>
                              {{$abcontent->s3l2}}</li>
                            <li><span class="mission-list-tag"><img src="{{ 'asset/img/mission-list-tag.png' }}"
                                        alt=""></span>
                                 {{$abcontent->s3l3}}</li>
                        </ul>
                        <a href="#0"
                            class="btn btn-icon-circle arrow-btn rounded-pill bg-blue7 fw-bold text-white me-4"
                            target="_blank">
                            <small>  {{$abcontent->s3btn}} <i class="fas fa-long-arrow-alt-right"></i> </small>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-center justify-content-center">
                    {{-- <img src="{{ 'asset/img/mission-side-img.png' }}" alt="" class="mission-side-img"> --}}
                    <img src="{{ asset('banner/img/'.$abcontent->s3img )}}" alt="" class="mission-side-img">

                </div>
            </div>
        </div>
        <!-- <img src="./img/section-2-bg.png" class="img-circle rotate-center" alt=""> -->



    </section>




    <!-- mission section ends -->



    <!--  our vision section starts -->

    <section class="style-7 section-padding gap--100" id="about-vision">
        <div class="container">

            <div class="row">
                <div class="col-md-6 text-start d-flex align-items-center justify-content-center vision-image ">
                    {{-- <img src="{{ 'asset/img/vision-side-img.png' }}" alt="" class="vision-side-img"> --}}
                    <img src="{{ asset('banner/img/'.$abcontent->s4img )}}" alt="" class="vision-side-img">

                </div>
                <div class="col-md-6   d-flex align-items-center vision-content ">
                    <div class="section-head style-4 mb-40 ">
                        <div class="top-title mb-25">
                            <img src="{{ 'asset/img/border.png' }}" class="border-line" alt="">
                            <small class="feature-text">{{$abcontent->s4sh1}} </small>
                            <img src="{{ 'asset/img/border.png' }}" class="border-line" alt="">
                        </div>
                        <h2 class="vision-heading-second text-start mb-25">
                            {{ strtok($abcontent->s4h1, ' ') }} <span class="gradient"> {{ substr($abcontent->s4h1, strpos($abcontent->s4h1, ' ')+1) }} </span>
                        </h2>
                        <p class="about-vision-description">
                           {{$abcontent->s4p1}}
                        </p>

                        <ul class="mission-list mb-25">
                            <li><span class="mission-list-tag"><img src="{{ 'asset/img/mission-list-tag.png' }}"
                                        alt=""></span>
                                        {{$abcontent->s4l1}}</li>
                            <li><span class="mission-list-tag"><img src="{{ 'asset/img/mission-list-tag.png' }}"
                                        alt=""></span>
                                        {{$abcontent->s4l2}}</li>
                            <li><span class="mission-list-tag"><img src="{{ 'asset/img/mission-list-tag.png' }}"
                                        alt=""></span>
                                        {{$abcontent->s4l3}}</li>
                        </ul>
                        <a href="#0"
                            class="btn btn-icon-circle arrow-btn rounded-pill bg-blue7 fw-bold text-white me-4"
                            target="_blank">
                            <small>    {{$abcontent->s4btn}} <i class="fas fa-long-arrow-alt-right"></i> </small>
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <!-- <img src="./img/section-2-bg.png" class="img-circle rotate-center" alt=""> -->



    </section>




    <!-- our vision section ends -->



    <!-- core value section starts  -->

    <section class="core-value-section gap--100">
        <div class="container">

            <h2 class="offer-heading">  {{ strtok($abcontent->s5h1, ' ') }} <span class="offer-sub gradient"> {{ substr($abcontent->s5h1, strpos($abcontent->s5h1, ' ')+1) }}</span></h2>
            <p class="offer-description">{{$abcontent->s5p1}}</p>

            <div class="row">
                <div class="offer-card-col col-md-3 mb-3">
                    <div class="offer-card">
                        <img src="{{ asset('banner/img/'.$abcontent->s5c1img )}}"alt="">
                        <h3 class="offer-card-heading">{{$abcontent->s5c1h}}</h3>
                        <p class="offer-card-description">{{$abcontent->s5c1p}}</p>
                    </div>
                </div>

                <div class="offer-card-col col-md-3 mb-5">
                    <div class="offer-card">
                        <img src="{{ asset('banner/img/'.$abcontent->s5c3img )}}" alt="">
                        <h3 class="offer-card-heading">{{$abcontent->s5c2h}}</h3>
                        <p class="offer-card-description">{{$abcontent->s5c2p}}</p>
                    </div>
                </div>

                <div class="offer-card-col col-md-3 mb-3 mt-1">
                    <div class="offer-card">
                        <img src="{{ asset('banner/img/'.$abcontent->s5c3img )}}" alt="">
                        <h3 class="offer-card-heading">{{$abcontent->s5c3h}}</h3>
                        <p class="offer-card-description">{{$abcontent->s5c3p}}</p>
                    </div>
                </div>
                <div class="offer-card-col col-md-3 mb-3">
                    <div class="offer-card">
                        <img src="{{ asset('banner/img/'.$abcontent->s5c4img )}}" alt="">
                        <h3 class="offer-card-heading">{{$abcontent->s5c4h}}</h3>
                        <p class="offer-card-description">{{$abcontent->s5c4p}}</p>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ 'asset/img/about_s4_wave.png' }}"alt="" class="value-border">

    </section>

    <!-- core value section ends -->











    <!-- contact us section -->

    <section class="contact-section gap--100">
        <img src="{{ 'asset/img/02.png' }}"alt="" class="contact-img-bg">
        <div class="container pt-5">

            <div class="row d-flex justify-content-center">
                <div class="col-md-6 mb-5   d-flex justify-content-center flex-column align-items-center">
                    <h6 class="contact-heading">{{$abcontent->s6h1}}</h6>
                    <h1 class="section-description text-center"> {{ strtok($abcontent->s6h2, ' ') }}  <br><span class="">
                        {{ substr($abcontent->s6h2, strpos($abcontent->s6h2, ' ')+1) }} </span> </h1>
                           <span class="gradient"> </span>

                    <!-- <a href="#" class="btn new-button">Let’s talk!<span><i class="fa-solid fa-right-long"></i></span></a> -->
                    <a href="#0" class="btn btn-icon-circle rounded-pill bg-blue7 fw-bold text-white me-4"
                        target="_blank">
                        <small> {{$abcontent->s6btn}}<i class="fas fa-long-arrow-alt-right"></i> </small>
                    </a>
                </div>
                <!-- <div class="col-md-6 d-flex justify-content-center align-items-end">
          <img src="./img/chair.png" alt="">
        </div> -->
            </div>
        </div>
    </section>
    @endforeach
    <!-- contact us section ends -->

    <!-- footer section -->
    @foreach ($content as $contents )
    <x-policyspot.footer :contents="$contents"/>
@endforeach
