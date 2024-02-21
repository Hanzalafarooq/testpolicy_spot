<x-policyspot.header />


                <!-- Collapsible wrapper -->
                @foreach ($content as $contents )


                <x-policyspot.nav :contents="$contents" :category="$category"/>
                @endforeach
@foreach ($content as $data)


        <div class="container">
            <div class="row">
                <div class="col-md-6 header-col  d-md-flex justify-content-center flex-column align-items-start"
                    style="">
                    <script src="{{ asset('asset/js/mdb.min.js') }}"></script>
                    <h1 class="color-border"><img src="{{ 'asset/img/border.png' }}" alt=""> {{$data->s1h1 }}
                    </h1>
                    <h1 class="main-heading">
                        {{-- {{$data->s1h2 }}<br> <span class="header-gradient"> </span> <br> --}}
                        {{-- <span --}}
                    {{-- class="gradient"> {{ strtok($data->s1h2, ' ') }} </span> {{ substr($data->s1h2, strpos($data->s1h2, ' ')+1) }} --}}
                    {{ strtok($data->s1h2, ' ') }} <span class="gradient">{{ substr($data->s1h2, strpos($data->s1h2, ' ')+1) }}</span>

                    </h1>
                    <!-- <p class="content">
            When you buy insurance from us, you get more than just financial safety. You also get: our promise of
            simplifying complex insurance terms
          </p> -->
                    <a href="#0" class="btn btn-icon-circle rounded-pill bg-blue7 fw-bold text-white me-4"
                        target="_blank">
                        <small> {{$data->s1btn }} <i class="fas fa-long-arrow-alt-right"></i> </small>
                    </a>
                    <!-- <button class="btn  new-button">Get Started Now <span><i class="fa-solid fa-right-long"></i></span></button> -->

                </div>
                <div class="col-md-6 header-coltext-center header-image mt-5 mb-2">
                    <img src="{{ asset('banner/img/' .$data->featured_image)}}" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- headers ends -->

    <!--  slider section starts -->

    <section class="features style-7 section-padding gap--100 " style="position: relative;">


        <div class="row">
            <div class="col-md-12">
                <div class="section-head text-center style-4 mb-40">
                    <div class="top-title">
                        <img src="{{ 'asset/img/border.png' }}" alt="">
                        <small class="feature-text">{{$data->s2h1 }} </small>
                        <img src="{{ 'asset/img/border.png' }}" alt="">
                    </div>
                    <h2 class="features-heading-second">
                        <span class="gradient"> {{ strtok($data->s2h2, ' ') }} </span> {{ substr($data->s2h2, strpos($data->s2h2, ' ')+1) }}
                    </span>
                    </h2>
                </div>
            </div>
        </div>
        <img src="{{ 'asset/img/section-2-bg.png' }}" class="img-circle rotate-center" alt="">


        <div class="content">
            <div class="features-slider7" style="">
                <div class="swiper-container" id="gallery">
                    <div class="swiper-slide">
                        <a href="#" class="features-card style-7">
                            <div class="icon" style="background-color: #FFD050;">
                                <img src="{{ 'asset/img/pic1.png' }}" alt="">
                            </div>
                            <div class="info">
                                <h5> intl. students </h5>
                                <p class="color-999"> Features 01 </p>
                            </div>
                        </a>
                    </div>


                    <div class="swiper-slide">
                        <a href="#" class="features-card style-7">
                            <div class="icon" style="background-color: #5641B9;">
                                <img src="{{ 'asset/img/pic2.png' }}" alt="">
                            </div>
                            <div class="info">
                                <h5> RESP, RRSP & TFSA </h5>
                                <p class="color-999"> Features 02 </p>
                            </div>
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="features-card style-7">
                            <div class="icon" style="background-color: #6212A6;">
                                <img src="{{ 'asset/img/pic3.png' }}" alt="">
                            </div>
                            <div class="info">
                                <h5> Health & Dental </h5>
                                <p class="color-999"> Features 03 </p>
                            </div>
                        </a>
                    </div>


                    <div class="swiper-slide">
                        <a href="#" class="features-card style-7">
                            <div class="icon" style="background-color: #16716B;">
                                <img src="{{ 'asset/img/pic4.png' }}" alt="">
                            </div>
                            <div class="info">
                                <h5> Disability insurance </h5>
                                <p class="color-999"> Features 04 </p>
                            </div>
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="features-card style-7">
                            <div class="icon" style="background-color: #FF7A41;">
                                <img src="{{ 'asset/img/pic5.png' }}" alt="">
                            </div>
                            <div class="info">
                                <h5> Critical Illness </h5>
                                <p class="color-999"> Features 05 </p>
                            </div>
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="features-card style-7">
                            <div class="icon" style="background-color: #FFD050;">
                                <img src="{{ 'asset/img/pic6.png' }}" alt="">
                            </div>
                            <div class="info">
                                <h5> superVisa </h5>
                                <p class="color-999"> Features 06 </p>
                            </div>
                        </a>
                    </div>


                    <div class="swiper-slide">
                        <a href="#" class="features-card style-7">
                            <div class="icon" style="background-color: #6212A6;">
                                <img src="{{ 'asset/img/pic7.png' }}" alt="">
                            </div>
                            <div class="info">
                                <h5> Visitor's insurance </h5>
                                <p class="color-999"> Features 07 </p>
                            </div>
                        </a>
                    </div>

                    <div class="swiper-slide">
                        <a href="#" class="features-card style-7">
                            <div class="icon" style="background-color: #FF7A41;">
                                <img src="{{ 'asset/img/pic8.png' }}" alt="">
                            </div>
                            <div class="info">
                                <h5>travel insurance </h5>
                                <p class="color-999"> Features 08 </p>
                            </div>
                        </a>
                    </div>


                </div>
            </div>

        </div>
    </section>




    <!-- slider section ends -->



    <!-- services section starts  -->

    <section class="services gap--100">
        <div class="container">
            {{-- <h2 class="services-heading"><span class="services-sub gradient"></span> {{$data->s3h1}}</h2> --}}
            <h2 class="services-heading">{{ strtok($data->s3h1, ' ') }} <span class="gradient">{{ substr($data->s3h1, strpos($data->s3h1, ' ')+1) }}</span></h2>

            {{-- <span class="gradient"> {{ strtok($data->s3h1, ' ') }} </span> {{ substr($data->s3h1, strpos($data->s3h1, ' ')+1) }} --}}
            
            <p class="services-description">{{$data->s3disc}}

            </p>

            <div class="row d-flex justify-content-center">
                <div class="col-md-4 col-lg-3 mb-3 d-flex justify-content-center">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="{{ asset('banner/img/' .$data->s3img1)}}" class="img-fluid" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{$data->s3c1h1}}</h5>
                            <p class="card-text">{{$data->s3c1disc}}</p>
                            <!-- <a href="#!" class="button">Learn More <i class="fa-solid fa-arrow-right"></i></a> -->
                            <a href="#" class=""><i class="fa-solid fa-arrow-right"></i> Read More<i
                                    class="fa-solid fa-arrow-right"></i> </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 mb-3 d-flex justify-content-center">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="{{ asset('banner/img/' .$data->s3img2)}}" class="img-fluid" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{$data->s3c2h1}}</h5>
                            <p class="card-text">{{$data->s3c2disc}}</p>
                            <a href="#!" class="button"><i class="fa-solid fa-arrow-right"></i> Learn More <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 mb-3 d-flex justify-content-center">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="{{ asset('banner/img/' .$data->s3img3)}}" class="img-fluid" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{$data->s3c3h1}}</h5>
                            <p class="card-text">{{$data->s3c3disc}}</p>
                            <a href="#!" class="button"><i class="fa-solid fa-arrow-right"></i> Learn More <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- services section ends -->

    <!-- offer offer starts  -->

    <section class="offer-section gap--100">
        <div class="container">
            {{-- <h2 class="offer-heading">{{$data->s4h1}} <span class="offer-sub gradient"></span></h2> --}}
            <h2 class="services-heading">{{ strtok($data->s4h1, ' ') }} <span class="gradient">{{ substr($data->s4h1, strpos($data->s4h1, ' ')+1) }}</span></h2>

            <p class="offer-description">{{$data->s4disc}}</p>

            <div class="row">
                <div class="offer-card-col col-md-3 mb-3">
                    <div class="offer-card">
                        <img src="{{ asset('banner/img/' .$data->s4c1img)}}" alt="">
                        <h3 class="offer-card-heading">{{$data->s4c1h1}}</h3>
                        <p class="offer-card-description">{{$data->s4c1disc}}</p>
                    </div>
                </div>

                <div class="offer-card-col col-md-3 mb-5">
                    <div class="offer-card">
                        <img src="{{ asset('banner/img/' .$data->s4c2img)}}" alt="">
                        <h3 class="offer-card-heading">{{$data->s4c2h1}}</h3>
                        <p class="offer-card-description">{{$data->s4c2disc}}</p>
                    </div>
                </div>

                <div class="offer-card-col col-md-3 mb-3 mt-1">
                    <div class="offer-card">
                        <img src="{{ asset('banner/img/' .$data->s4c3img)}}"alt="">
                        <h3 class="offer-card-heading">{{$data->s4c3h1}}</h3>
                        <p class="offer-card-description">{{$data->s4c3disc}}</p>
                    </div>
                </div>
                <div class="offer-card-col col-md-3 mb-3">
                    <div class="offer-card">
                        <img src="{{ asset('banner/img/' .$data->s4c4img)}}"alt="">
                        <h3 class="offer-card-heading">{{$data->s4c4h1}}</h3>
                        <p class="offer-card-description">{{$data->s4c4disc}}</p>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- offer offer ends -->



    <!-- review section starts  -->

    <section class="review-section gap--100">

        {{-- <h2 class="review-heading"><span class="review-sub gradient">{{$data->s5h1}}</span> </h2> --}}
        <h2 class="services-heading">{{ strtok($data->s5h1, ' ') }} <span class="gradient">{{ substr($data->s5h1, strpos($data->s5h1, ' ')+1) }}</span></h2>

        

        <p class="review-description">{{$data->s5disc}}</p>


        <section class="splide container" aria-label="Splide Basic HTML Example">
            <div class="splide__track container">

                <div class="splide__list">
                    @foreach ($card as $review)
                    <li class="splide__slide">
                        <div class="card mb-3" style="width: 540px;">
                            <div class="row g-0">
                                <span class="qoute-mark">

                                    <svg width="57" height="57" viewBox="0 0 57 57" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="28.5" cy="28.5" r="28.5"
                                            fill="url(#paint0_linear_12_89)" />
                                        <path
                                            d="M37.7887 18.4679L37.3781 21.6495C36.3746 21.5811 35.5992 21.7635 35.0518 22.1969C34.5044 22.6302 34.1395 23.2346 33.9571 24.0101C33.7746 24.7855 33.7404 25.6636 33.8544 26.6443H37.7887V34.8893H30.2281V25.9601C30.2281 23.2688 30.8667 21.239 32.1439 19.8705C33.4439 18.4793 35.3255 18.0117 37.7887 18.4679ZM27.2517 18.4679L26.8412 21.6495C25.8377 21.5811 25.0623 21.7635 24.5149 22.1969C23.9675 22.6302 23.6026 23.2346 23.4201 24.0101C23.2377 24.7855 23.2035 25.6636 23.3175 26.6443H27.2517V34.8893H19.6912V25.9601C19.6912 23.2688 20.3298 21.239 21.607 19.8705C22.907 18.4793 24.7886 18.0117 27.2517 18.4679Z"
                                            fill="white" />
                                        <defs>
                                            <linearGradient id="paint0_linear_12_89" x1="28.5" y1="0"
                                                x2="28.5" y2="57" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#0AC05E" />
                                                <stop offset="1" stop-color="#19AC6F" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </span>
                                <div class="col-8 d-flex align-items-center">

                                    <div class="card-body">
                                        <p class="card-text">

                                            {{$review->description}}

                                        </p>
                                        <h5 class="card-title">{{$review->title}}</h5>
                                    </div>
                                </div>
                                <div class="col-4 overflow-hidden p-2">
                                    <img src="{{ asset('banner/img/' .$review->image)}}" alt="Trendy Pants and Shoes"
                                        class="img-fluid rounded-start" />
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach

                    {{-- <li class="splide__slide">
                        <div class="card mb-3" style="width: 540px;">
                            <div class="row g-0">
                                <span class="qoute-mark">

                                    <svg width="57" height="57" viewBox="0 0 57 57" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="28.5" cy="28.5" r="28.5"
                                            fill="url(#paint0_linear_12_89)" />
                                        <path
                                            d="M37.7887 18.4679L37.3781 21.6495C36.3746 21.5811 35.5992 21.7635 35.0518 22.1969C34.5044 22.6302 34.1395 23.2346 33.9571 24.0101C33.7746 24.7855 33.7404 25.6636 33.8544 26.6443H37.7887V34.8893H30.2281V25.9601C30.2281 23.2688 30.8667 21.239 32.1439 19.8705C33.4439 18.4793 35.3255 18.0117 37.7887 18.4679ZM27.2517 18.4679L26.8412 21.6495C25.8377 21.5811 25.0623 21.7635 24.5149 22.1969C23.9675 22.6302 23.6026 23.2346 23.4201 24.0101C23.2377 24.7855 23.2035 25.6636 23.3175 26.6443H27.2517V34.8893H19.6912V25.9601C19.6912 23.2688 20.3298 21.239 21.607 19.8705C22.907 18.4793 24.7886 18.0117 27.2517 18.4679Z"
                                            fill="white" />
                                        <defs>
                                            <linearGradient id="paint0_linear_12_89" x1="28.5" y1="0"
                                                x2="28.5" y2="57" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#0AC05E" />
                                                <stop offset="1" stop-color="#19AC6F" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </span>
                                <div class="col-8 d-flex align-items-center">

                                    <div class="card-body">
                                        <p class="card-text">
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laudantium
                                            eligendi rerum, molestias minus non laborum.
                                        </p>
                                        <h5 class="card-title">Mike Taylor</h5>
                                    </div>
                                </div>
                                <div class="col-4 overflow-hidden p-2">
                                    <img src="{{ 'asset/img/Rectangle 152.png' }}" alt="Trendy Pants and Shoes"
                                        class="img-fluid rounded-start" />
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="card mb-3" style="width: 540px;">
                            <div class="row g-0">
                                <span class="qoute-mark">

                                    <svg width="57" height="57" viewBox="0 0 57 57" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="28.5" cy="28.5" r="28.5"
                                            fill="url(#paint0_linear_12_89)" />
                                        <path
                                            d="M37.7887 18.4679L37.3781 21.6495C36.3746 21.5811 35.5992 21.7635 35.0518 22.1969C34.5044 22.6302 34.1395 23.2346 33.9571 24.0101C33.7746 24.7855 33.7404 25.6636 33.8544 26.6443H37.7887V34.8893H30.2281V25.9601C30.2281 23.2688 30.8667 21.239 32.1439 19.8705C33.4439 18.4793 35.3255 18.0117 37.7887 18.4679ZM27.2517 18.4679L26.8412 21.6495C25.8377 21.5811 25.0623 21.7635 24.5149 22.1969C23.9675 22.6302 23.6026 23.2346 23.4201 24.0101C23.2377 24.7855 23.2035 25.6636 23.3175 26.6443H27.2517V34.8893H19.6912V25.9601C19.6912 23.2688 20.3298 21.239 21.607 19.8705C22.907 18.4793 24.7886 18.0117 27.2517 18.4679Z"
                                            fill="white" />
                                        <defs>
                                            <linearGradient id="paint0_linear_12_89" x1="28.5" y1="0"
                                                x2="28.5" y2="57" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#0AC05E" />
                                                <stop offset="1" stop-color="#19AC6F" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </span>
                                <div class="col-8 d-flex align-items-center">

                                    <div class="card-body">
                                        <p class="card-text">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas saepe
                                            voluptas officia eligendi consectetur deserunt!
                                        </p>
                                        <h5 class="card-title">Mike Taylor</h5>
                                    </div>
                                </div>
                                <div class="col-4 overflow-hidden p-2">
                                    <img src="{{ 'asset/img/Rectangle 151.png' }}" alt="Trendy Pants and Shoes"
                                        class="img-fluid rounded-start" />
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="card mb-3" style="width: 540px;">
                            <div class="row g-0">
                                <span class="qoute-mark">

                                    <svg width="57" height="57" viewBox="0 0 57 57" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="28.5" cy="28.5" r="28.5"
                                            fill="url(#paint0_linear_12_89)" />
                                        <path
                                            d="M37.7887 18.4679L37.3781 21.6495C36.3746 21.5811 35.5992 21.7635 35.0518 22.1969C34.5044 22.6302 34.1395 23.2346 33.9571 24.0101C33.7746 24.7855 33.7404 25.6636 33.8544 26.6443H37.7887V34.8893H30.2281V25.9601C30.2281 23.2688 30.8667 21.239 32.1439 19.8705C33.4439 18.4793 35.3255 18.0117 37.7887 18.4679ZM27.2517 18.4679L26.8412 21.6495C25.8377 21.5811 25.0623 21.7635 24.5149 22.1969C23.9675 22.6302 23.6026 23.2346 23.4201 24.0101C23.2377 24.7855 23.2035 25.6636 23.3175 26.6443H27.2517V34.8893H19.6912V25.9601C19.6912 23.2688 20.3298 21.239 21.607 19.8705C22.907 18.4793 24.7886 18.0117 27.2517 18.4679Z"
                                            fill="white" />
                                        <defs>
                                            <linearGradient id="paint0_linear_12_89" x1="28.5" y1="0"
                                                x2="28.5" y2="57" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#0AC05E" />
                                                <stop offset="1" stop-color="#19AC6F" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </span>
                                <div class="col-8 d-flex align-items-center">

                                    <div class="card-body">
                                        <p class="card-text">
                                            Lorem, ipsum dolor
                                        </p>
                                        <h5 class="card-title">Mike Taylor</h5>
                                    </div>
                                </div>
                                <div class="col-4 overflow-hidden p-2">
                                    <img src="{{ 'asset/img/Rectangle 152.png' }}" alt="Trendy Pants and Shoes"
                                        class="img-fluid rounded-start" />
                                </div>
                            </div>
                        </div>
                    </li> --}}

                </div>
            </div>
        </section>

    </section>

    <!-- review section ends -->





    <!-- partners section -->

    <section class="partners-section gap--100">
        <div class="">
            {{-- <h2 class="partners-heading">{{$data->s6h1}}<span class="partners-sub gradient"></span></h2> --}}
            <h2 class="services-heading">{{ strtok($data->s6h1, ' ') }} <span class="gradient">{{ substr($data->s6h1, strpos($data->s6h1, ' ')+1) }}</span></h2>

            <p class="partners-description">{{$data->s6disc}}</p>

            <div class="row partner-list" dir="rtl">
                <div class="col me-2 shadow mb-4 d-flex justify-content-center" style="background-color: #fff; ">
                    <span class="partners-card  ">
                        <svg width="122" height="39" viewBox="0 0 122 39" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1_720)">
                                <path
                                    d="M34.7366 27.0956C34.5465 26.6389 34.3683 26.1587 34.1782 25.7489L33.2991 23.7931L33.2634 23.758C30.6498 18.1367 27.858 12.4218 24.8999 6.80053L24.7811 6.56631C24.4841 6.01589 24.1871 5.40692 23.8782 4.8448C23.498 4.17727 23.1298 3.46291 22.5239 2.78367C21.9333 2.07297 21.19 1.50037 20.3477 1.10719C19.5054 0.714018 18.585 0.510071 17.6531 0.510071C16.7211 0.510071 15.8007 0.714018 14.9584 1.10719C14.1161 1.50037 13.3728 2.07297 12.7822 2.78367C12.2239 3.46291 11.8081 4.17727 11.4279 4.8448C11.1309 5.45377 10.8339 6.05103 10.525 6.60144L10.4062 6.83566C7.49562 12.4569 4.65628 18.1719 2.04267 23.7931L1.97139 23.8634C1.71003 24.4724 1.40115 25.1048 1.10415 25.784C0.914069 26.1939 0.723988 26.6389 0.533908 27.1308C0.0207285 28.4187 -0.143146 29.8163 0.0584353 31.1857C0.260016 32.5551 0.820095 33.849 1.68347 34.9401C2.54685 36.0311 3.68373 36.8816 4.98206 37.4076C6.2804 37.9337 7.69537 38.1171 9.08754 37.94C10.4222 37.7668 11.7074 37.3285 12.8654 36.6518C14.4098 35.7969 15.8948 34.5555 17.558 32.7637C19.2212 34.5555 20.7419 35.7969 22.2506 36.6635C23.7015 37.503 25.3446 37.9663 27.0264 38.0102C28.974 38.0182 30.8587 37.3313 32.3326 36.0764C33.8065 34.8215 34.7701 33.0833 35.0454 31.1827C35.3636 29.817 35.256 28.3883 34.7366 27.0839V27.0956ZM17.6768 29.0396C15.6334 26.4632 14.3029 24.0976 13.8514 22.0716C13.6644 21.3209 13.6241 20.5419 13.7326 19.7763C13.8158 19.179 14.0415 18.652 14.3504 18.207C15.0632 17.1881 16.3106 16.5558 17.6768 16.5558C18.3256 16.5362 18.9692 16.6758 19.5498 16.962C20.1304 17.2481 20.6298 17.6719 21.0032 18.1953C21.3121 18.6637 21.5378 19.179 21.6091 19.7763C21.7279 20.4555 21.6804 21.2401 21.4903 22.0716C21.0389 24.0625 19.7083 26.4515 17.6768 29.0396ZM32.812 30.7729C32.677 31.7378 32.2879 32.651 31.6834 33.4215C31.079 34.192 30.2802 34.793 29.3668 35.1645C28.4639 35.5392 27.466 35.6446 26.4918 35.5392C25.5414 35.4221 24.591 35.1176 23.6168 34.5555C21.9994 33.57 20.545 32.3456 19.3044 30.9251C21.7992 27.8803 23.308 25.1048 23.8782 22.6337C24.1514 21.4627 24.1871 20.4087 24.0683 19.4367C23.9199 18.5153 23.5714 17.6365 23.0466 16.8602C22.4474 16.0185 21.6475 15.3348 20.7174 14.8692C19.7873 14.4037 18.7554 14.1705 17.7125 14.1901C15.5146 14.1901 13.5544 15.1973 12.3664 16.8485C11.8316 17.6228 11.486 18.5087 11.3566 19.4367C11.2022 20.4204 11.2378 21.5095 11.5467 22.6337C12.117 25.1048 13.6614 27.9154 16.1205 30.9485C14.901 32.3962 13.4432 33.6314 11.8081 34.6023C10.822 35.1645 9.8835 35.4572 8.9331 35.5744C7.45509 35.761 5.96208 35.365 4.7786 34.4725C3.59513 33.58 2.81684 32.2631 2.61292 30.808C2.49412 29.8711 2.57728 28.9342 2.95744 27.8803C3.07624 27.5055 3.25444 27.1308 3.44452 26.6857C3.70588 26.0768 4.01476 25.4444 4.31176 24.812L4.35928 24.73C6.92537 19.1439 9.72906 13.4406 12.6397 7.85452L12.7585 7.6203C13.0555 7.05817 13.3525 6.46091 13.6614 5.89879C13.9702 5.30153 14.3029 4.72769 14.7306 4.25925C15.1008 3.82363 15.5633 3.4733 16.0857 3.23292C16.6081 2.99255 17.1776 2.86798 17.754 2.86798C18.3305 2.86798 18.9 2.99255 19.4224 3.23292C19.9447 3.4733 20.4073 3.82363 20.7775 4.25925C21.1933 4.72769 21.5378 5.30153 21.8467 5.89879C22.1437 6.46091 22.4407 7.06988 22.7496 7.6203L22.8684 7.85452C25.7671 13.4406 28.5708 19.1439 31.1844 24.73L31.2201 24.7651C31.5289 25.3741 31.7903 26.0533 32.0873 26.6389C32.2774 27.0956 32.4675 27.4587 32.5863 27.8451C32.812 28.8991 32.9308 29.836 32.812 30.7729ZM49.349 28.782C48.4538 28.7949 47.5671 28.609 46.7548 28.238C45.9424 27.867 45.2252 27.3204 44.6564 26.6389C43.3782 25.1867 42.6998 23.3142 42.7556 21.3924C42.736 19.4287 43.4363 17.5241 44.7277 16.0288C45.325 15.3385 46.0686 14.7858 46.906 14.4095C47.7435 14.0331 48.6544 13.8423 49.5747 13.8505C50.4407 13.8272 51.2985 14.0213 52.0674 14.4146C52.8364 14.8079 53.4912 15.3876 53.9704 16.099L54.0892 14.2604H57.5581V28.4072H54.0773L53.9585 26.3461C53.4645 27.1058 52.7817 27.7283 51.9749 28.1546C51.1682 28.581 50.2643 28.7969 49.349 28.782ZM50.2519 25.4092C50.9409 25.4092 51.5468 25.2219 52.1171 24.8822C52.6398 24.5075 53.0675 24.0156 53.4001 23.4184C53.6971 22.8211 53.8516 22.1068 53.8516 21.3104C53.8979 20.6188 53.7613 19.9271 53.4552 19.3031C53.1491 18.679 52.6839 18.144 52.1052 17.7503C51.5491 17.4087 50.9071 17.2277 50.2519 17.2277C49.5967 17.2277 48.9547 17.4087 48.3986 17.7503C47.8759 18.125 47.4482 18.6169 47.1156 19.2141C46.8014 19.8728 46.6469 20.5945 46.6641 21.3221C46.6178 22.0138 46.7544 22.7054 47.0605 23.3295C47.3666 23.9535 47.8318 24.4885 48.4105 24.8822C48.9689 25.2219 49.5747 25.4092 50.2519 25.4092ZM63.4982 10.4426C63.4982 10.8525 63.4269 11.2273 63.2368 11.5318C63.0467 11.8245 62.7854 12.0939 62.4408 12.2813C62.0963 12.4686 61.728 12.5389 61.3479 12.5389C60.9677 12.5389 60.5875 12.4686 60.243 12.2813C59.9172 12.1024 59.6432 11.8444 59.4471 11.5318C59.2631 11.1981 59.1728 10.8221 59.1857 10.4426C59.1857 10.021 59.2689 9.64629 59.4471 9.35352C59.6371 9.00219 59.9104 8.79139 60.243 8.60402C60.5875 8.41664 60.9558 8.33466 61.3479 8.33466C61.726 8.32607 62.1 8.41436 62.4331 8.59089C62.7663 8.76743 63.0473 9.02616 63.2487 9.34181C63.4216 9.68324 63.5072 10.0611 63.4982 10.4426ZM59.4589 28.3604V14.237H63.2368V28.3838H59.4471L59.4589 28.3604ZM73.3348 17.9377V17.9845C73.1566 17.9025 72.919 17.8674 72.7408 17.8323C72.5032 17.7854 72.3131 17.7854 72.0874 17.7854C71.0301 17.7854 70.2341 18.0899 69.7114 18.7223C69.1412 19.3664 68.8798 20.2681 68.8798 21.4275V28.3721H65.0901V14.2253H68.5709L68.6897 16.3684C69.0699 15.6189 69.5213 15.0568 70.1629 14.6352C70.801 14.2255 71.5522 14.021 72.3131 14.0496C72.5864 14.0496 72.8477 14.073 73.0735 14.1199C73.1923 14.155 73.2635 14.155 73.3348 14.1901V17.9377ZM74.8555 28.3604V8.42835H78.6333V16.0405C79.1679 15.3612 79.7738 14.8342 80.5341 14.4244C81.7378 13.8426 83.1052 13.6776 84.4157 13.9559C85.7262 14.2343 86.9034 14.9397 87.7572 15.9585C89.0382 17.4137 89.7168 19.2909 89.658 21.2167C89.6776 23.1804 88.9773 25.085 87.6859 26.5803C87.0886 27.2706 86.345 27.8233 85.5076 28.1996C84.6701 28.576 83.7592 28.7668 82.8389 28.7586C81.9729 28.7819 81.1151 28.5878 80.3462 28.1945C79.5772 27.8012 78.9224 27.2215 78.4433 26.5101L78.3245 28.3487L74.8555 28.3838V28.3604ZM82.1617 25.4092C82.8389 25.4092 83.4448 25.2219 84.015 24.8822C84.5377 24.5075 84.9654 24.0156 85.298 23.4184C85.6069 22.8211 85.7495 22.1068 85.7495 21.3104C85.7495 20.5258 85.6069 19.8114 85.298 19.2141C84.9861 18.6382 84.5477 18.1382 84.015 17.7503C83.4589 17.4087 82.8169 17.2277 82.1617 17.2277C81.5065 17.2277 80.8645 17.4087 80.3084 17.7503C79.7738 18.125 79.358 18.6169 79.0135 19.2141C78.6993 19.8728 78.5448 20.5945 78.562 21.3221C78.5157 22.0138 78.6523 22.7054 78.9584 23.3295C79.2645 23.9535 79.7297 24.4885 80.3084 24.8822C80.8668 25.2219 81.4727 25.4092 82.1617 25.4092ZM91.0836 28.3721V14.2253H94.5645L94.6833 16.0639C95.1207 15.3591 95.7412 14.7823 96.4806 14.3932C97.2199 14.0041 98.0514 13.8167 98.8888 13.8505C99.8465 13.8342 100.788 14.0966 101.595 14.6048C102.402 15.1131 103.039 15.8446 103.427 16.708C103.843 17.598 104.069 18.6989 104.069 19.9285V28.4072H100.279V20.4204C100.279 19.4367 100.053 18.6637 99.6016 18.0899C99.1502 17.5278 98.5324 17.2233 97.7483 17.2233C97.1781 17.2233 96.6791 17.3404 96.2396 17.598C95.8238 17.8674 95.4792 18.207 95.2179 18.6872C94.9536 19.1725 94.8226 19.7175 94.8377 20.2681V28.3721H91.0836ZM105.957 28.3721V8.41664H109.747V16.0288C110.26 15.3457 110.928 14.7901 111.697 14.4059C112.467 14.0216 113.316 13.8195 114.178 13.8154C115.074 13.8025 115.96 13.9884 116.773 14.3594C117.585 14.7304 118.302 15.277 118.871 15.9585C120.143 17.4136 120.817 19.2851 120.76 21.205C120.781 23.1689 120.08 25.0739 118.788 26.5686C118.191 27.2588 117.447 27.8116 116.61 28.1879C115.772 28.5643 114.861 28.7551 113.941 28.7469C113.075 28.7702 112.217 28.5761 111.448 28.1828C110.679 27.7894 110.024 27.2098 109.545 26.4984L109.438 28.337L105.957 28.3721ZM113.299 25.4092C113.988 25.4092 114.594 25.2219 115.153 24.8822C115.687 24.5075 116.103 24.0156 116.448 23.4184C116.745 22.8211 116.899 22.1068 116.899 21.3104C116.945 20.6188 116.809 19.9271 116.503 19.3031C116.196 18.679 115.731 18.144 115.153 17.7503C114.597 17.4087 113.954 17.2277 113.299 17.2277C112.644 17.2277 112.002 17.4087 111.446 17.7503C110.923 18.125 110.496 18.6169 110.163 19.2141C109.831 19.8669 109.676 20.5929 109.712 21.3221C109.665 22.0138 109.802 22.7054 110.108 23.3295C110.414 23.9535 110.879 24.4885 111.458 24.8822C112.016 25.2219 112.587 25.4092 113.299 25.4092Z"
                                    fill="#FF385C" />
                            </g>
                            <defs>
                                <clipPath id="clip0_1_720">
                                    <rect width="121.176" height="37.4751" fill="white"
                                        transform="translate(0 0.536377)" />
                                </clipPath>
                            </defs>
                        </svg>


                    </span>
                </div>

                <div class="col me-2 shadow mb-4 d-flex justify-content-center" style="background-color: #fff; ">
                    <span class="partners-card  ">
                        <svg width="122" height="39" viewBox="0 0 122 39" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1_722)">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M75.1755 29.8427C68.1338 35.1692 57.9271 38.0111 49.1394 38.0111C36.8177 38.0111 25.7249 33.3342 17.3328 25.5555C16.6735 24.9438 17.2642 24.1102 18.0555 24.5866C27.1122 29.9943 38.3104 33.2476 49.8779 33.2476C57.6792 33.2476 66.2612 31.5912 74.1522 28.1538C75.3443 27.6342 76.3412 28.955 75.1755 29.8427Z"
                                    fill="#FF9900" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M78.1032 26.4054C77.2065 25.2253 72.1533 25.8478 69.8852 26.1239C69.1942 26.2105 69.0887 25.5934 69.7111 25.1495C73.7357 22.2427 80.3397 23.0817 81.1098 24.0561C81.8799 25.0358 80.9093 31.8293 77.1274 35.0718C76.5471 35.5698 75.9933 35.3045 76.2518 34.6441C77.101 32.4681 79.0052 27.5908 78.1032 26.4054Z"
                                    fill="#FF9900" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M70.0433 4.62832V1.80267C70.0433 1.37503 70.3598 1.08813 70.7396 1.08813H83.0667C83.4623 1.08813 83.7787 1.38044 83.7787 1.80267V4.22233C83.7735 4.62832 83.4412 5.1588 82.8504 5.99784L76.4627 15.3571C78.8363 15.2976 81.3418 15.6603 83.4939 16.9053C83.9792 17.1868 84.1111 17.5982 84.148 18.0041V21.0193C84.148 21.4306 83.7049 21.9124 83.2407 21.6634C79.4482 19.6227 74.4108 19.4007 70.2174 21.6851C69.7901 21.9232 69.3418 21.4469 69.3418 21.0355V18.1719C69.3418 17.7118 69.3471 16.9269 69.7954 16.2286L77.1959 5.33744H70.7554C70.3598 5.33744 70.0433 5.05054 70.0433 4.62832Z"
                                    fill="black" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M25.0761 22.2594H21.3257C20.9671 22.2323 20.6822 21.9563 20.6559 21.6044V1.85195C20.6559 1.45679 20.9776 1.14282 21.3785 1.14282H24.8756C25.2396 1.15905 25.5297 1.44596 25.5561 1.80322V4.38528H25.6247C26.5372 1.88983 28.2515 0.726013 30.5618 0.726013C32.9091 0.726013 34.3754 1.88983 35.4304 4.38528C36.3376 1.88983 38.4001 0.726013 40.6102 0.726013C42.182 0.726013 43.9016 1.39183 44.9513 2.88585C46.1381 4.54767 45.8955 6.96193 45.8955 9.07846L45.8902 21.5449C45.8902 21.94 45.5684 22.2594 45.1675 22.2594H41.4225C41.048 22.2323 40.7473 21.9238 40.7473 21.5449V11.0759C40.7473 10.2423 40.8212 8.16364 40.6418 7.37332C40.3623 6.04711 39.5236 5.6736 38.437 5.6736C37.5297 5.6736 36.5803 6.29611 36.1952 7.29213C35.8102 8.28814 35.8471 9.95538 35.8471 11.0759V21.5449C35.8471 21.94 35.5253 22.2594 35.1244 22.2594H31.3794C30.9996 22.2323 30.7042 21.9238 30.7042 21.5449L30.699 11.0759C30.699 8.87276 31.0524 5.6303 28.3886 5.6303C25.6932 5.6303 25.7987 8.79156 25.7987 11.0759V21.5449C25.7987 21.94 25.477 22.2594 25.0761 22.2594"
                                    fill="black" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M94.3912 0.726013C99.9561 0.726013 102.968 5.6303 102.968 11.8662C102.968 17.891 99.6396 22.6708 94.3912 22.6708C88.9266 22.6708 85.9516 17.7665 85.9516 11.6551C85.9516 5.5058 88.9635 0.726013 94.3912 0.726013ZM94.4229 4.75879C91.6589 4.75879 91.4849 8.62375 91.4849 11.0326C91.4849 13.4468 91.4479 18.6001 94.3912 18.6001C97.2976 18.6001 97.4348 14.4429 97.4348 11.9095C97.4348 10.2423 97.3662 8.25025 96.8756 6.66962C96.4537 5.29469 95.615 4.75879 94.4229 4.75879Z"
                                    fill="black" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M110.184 22.2594H106.449C106.075 22.2323 105.774 21.9238 105.774 21.5449L105.769 1.78698C105.801 1.42431 106.112 1.14282 106.492 1.14282H109.968C110.295 1.15905 110.564 1.38642 110.638 1.69496V4.71548H110.706C111.756 2.01434 113.227 0.726013 115.817 0.726013C117.5 0.726013 119.14 1.34852 120.195 3.05365C121.176 4.63428 121.176 7.29213 121.176 9.20296V21.6369C121.134 21.9833 120.823 22.2594 120.454 22.2594H116.693C116.35 22.2323 116.065 21.9725 116.028 21.6369V10.9081C116.028 8.74826 116.271 5.58699 113.681 5.58699C112.769 5.58699 111.93 6.21492 111.513 7.16762C110.986 8.37475 110.917 9.57646 110.917 10.9081V21.5449C110.912 21.94 110.585 22.2594 110.184 22.2594"
                                    fill="black" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M60.2165 12.8242C60.2165 14.3236 60.2534 15.574 59.5149 16.9057C58.9189 17.9883 57.9694 18.6541 56.9197 18.6541C55.4797 18.6541 54.6358 17.5282 54.6358 15.8663C54.6358 12.586 57.5 11.9905 60.2165 11.9905V12.8242ZM63.9984 22.2051C63.7505 22.4325 63.3918 22.4487 63.1123 22.2971C61.8674 21.2362 61.6406 20.7436 60.9602 19.7313C58.903 21.8857 57.4419 22.5299 54.7782 22.5299C51.6186 22.5299 49.1659 20.5325 49.1659 16.5322C49.1659 13.4088 50.8116 11.2814 53.1641 10.2421C55.2002 9.32187 58.0433 9.15948 60.2165 8.90507V8.40706C60.2165 7.49224 60.285 6.40961 59.7576 5.6193C59.3039 4.91018 58.4283 4.61787 57.6529 4.61787C56.2235 4.61787 54.9523 5.3703 54.6411 6.92927C54.5778 7.27572 54.3298 7.61674 53.987 7.63298L50.3527 7.23241C50.0468 7.16204 49.7039 6.90762 49.7936 6.42586C50.627 1.90049 54.6147 0.536377 58.1804 0.536377C60.0055 0.536377 62.3896 1.03439 63.8296 2.45262C65.6547 4.20106 65.4806 6.53412 65.4806 9.07287V15.0706C65.4806 16.8732 66.2086 17.6635 66.8943 18.6379C67.1316 18.9843 67.1844 19.4011 66.8784 19.6609C66.1136 20.3159 64.7527 21.5339 64.0037 22.2159L63.9984 22.2051"
                                    fill="black" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M11.0506 12.8244C11.0506 14.3238 11.0875 15.5743 10.349 16.9059C9.75298 17.9885 8.8088 18.6543 7.75386 18.6543C6.31385 18.6543 5.47517 17.5284 5.47517 15.8666C5.47517 12.5862 8.33935 11.9908 11.0506 11.9908V12.8244ZM14.8325 22.2053C14.5846 22.4327 14.226 22.4489 13.9464 22.2974C12.7016 21.2364 12.48 20.7438 11.7943 19.7316C9.73715 21.886 8.28133 22.5301 5.61231 22.5301C2.45802 22.5301 0 20.5327 0 16.5324C0 13.409 1.65099 11.2817 3.99825 10.2423C6.03429 9.32211 8.87737 9.15972 11.0506 8.90531V8.4073C11.0506 7.49248 11.1191 6.40986 10.5969 5.61954C10.138 4.91042 9.26243 4.61811 8.49232 4.61811C7.06287 4.61811 5.78638 5.37054 5.47517 6.92952C5.41187 7.27596 5.16396 7.61698 4.82638 7.63322L1.18682 7.23265C0.88088 7.16228 0.543297 6.90786 0.627692 6.4261C1.46638 1.90073 5.4488 0.536621 9.01452 0.536621C10.8396 0.536621 13.2238 1.03463 14.6638 2.45287C16.4888 4.2013 16.3147 6.53436 16.3147 9.07311V15.0709C16.3147 16.8734 17.0427 17.6637 17.7284 18.6381C17.971 18.9845 18.0238 19.4013 17.7178 19.6612C16.953 20.3162 15.5921 21.5341 14.8431 22.2162L14.8326 22.2053"
                                    fill="black" />
                            </g>
                            <defs>
                                <clipPath id="clip0_1_722">
                                    <rect width="121.176" height="37.4751" fill="white"
                                        transform="translate(0 0.536377)" />
                                </clipPath>
                            </defs>
                        </svg>

                    </span>
                </div>

                <div class="col me-2 shadow mb-4 d-flex justify-content-center" style="background-color: #fff; ">
                    <span class="partners-card  ">
                        <svg width="118" height="36" viewBox="0 0 118 36" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1_731)">
                                <path
                                    d="M87.6634 34.7886L97.4747 23.9717L87.6634 13.1533H98.0153L102.875 18.4082L107.554 13.1533H117.545L107.78 23.9271L117.679 34.7886H107.284L102.469 29.4906L97.6992 34.7886H87.6634Z"
                                    fill="#FF6600" />
                                <path
                                    d="M87.6633 8.30351H76.5513V13.1533H87.6633V20.4625H76.5513V27.1714H87.6633V34.7887H68.384V0.707275H87.6633V8.30351Z"
                                    fill="#FF6600" />
                                <path
                                    d="M60.2512 0.707275V14.655H60.1617C58.3612 12.6243 56.1116 11.9187 53.5013 11.9187C48.1545 11.9187 44.1269 15.4852 42.7131 20.2005C41.1008 15.0049 36.9428 11.8213 30.777 11.8213C25.7699 11.8213 21.8159 14.0267 19.7525 17.6202V13.1538H9.4026V8.30451H20.6972V0.707275H0.176514V34.7892H9.4026V20.4625H18.5985C18.3243 21.515 18.1781 22.6417 18.1781 23.8307C18.1781 30.9401 23.7131 35.9285 30.777 35.9285C36.7172 35.9285 40.6318 33.1921 42.7024 28.2033H34.796C33.7264 29.7019 32.9151 30.1471 30.777 30.1471C28.2978 30.1471 26.1602 28.0246 26.1602 25.5086H42.2594C42.9576 31.1554 47.4405 36.0254 53.5924 36.0254C56.2461 36.0254 58.6758 34.7445 60.1617 32.5818H60.2512V34.7882H68.3842V0.707275H60.2512ZM26.4169 20.5644C26.93 18.3997 28.641 16.9848 30.777 16.9848C33.1284 16.9848 34.7525 18.356 35.1796 20.5644C35.3596 20.5644 26.4169 20.5644 26.4169 20.5644ZM55.3157 29.5996C52.3177 29.5996 50.4548 26.8587 50.4548 23.9969C50.4548 20.9378 52.0752 17.9962 55.3157 17.9962C58.6758 17.9962 60.0144 20.9378 60.0144 23.9969C60.0139 26.8978 58.5955 29.5996 55.3157 29.5996Z"
                                    fill="#652C8F" />
                            </g>
                            <defs>
                                <clipPath id="clip0_1_731">
                                    <rect width="117.647" height="35.1329" fill="white"
                                        transform="translate(0.176514 0.707275)" />
                                </clipPath>
                            </defs>
                        </svg>

                    </span>
                </div>
                <div class="col me-2 shadow mb-4 d-flex justify-content-center" style="background-color: #fff; ">
                    <span class="partners-card">
                        <svg width="113" height="39" viewBox="0 0 113 39" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1_737)">
                                <path
                                    d="M48.2674 19.7546C48.2674 24.9563 44.1625 28.7893 39.1248 28.7893C34.0872 28.7893 29.9823 24.9563 29.9823 19.7546C29.9823 14.5162 34.0872 10.7198 39.1248 10.7198C44.1625 10.7198 48.2674 14.5162 48.2674 19.7546ZM44.2652 19.7546C44.2652 16.504 41.8861 14.28 39.1248 14.28C36.3636 14.28 33.9845 16.504 33.9845 19.7546C33.9845 22.9726 36.3636 25.2292 39.1248 25.2292C41.8861 25.2292 44.2652 22.9685 44.2652 19.7546Z"
                                    fill="#EA4335" />
                                <path
                                    d="M67.9905 19.7546C67.9905 24.9563 63.8856 28.7893 58.848 28.7893C53.8104 28.7893 49.7055 24.9563 49.7055 19.7546C49.7055 14.5203 53.8104 10.7198 58.848 10.7198C63.8856 10.7198 67.9905 14.5162 67.9905 19.7546ZM63.9884 19.7546C63.9884 16.504 61.6093 14.28 58.848 14.28C56.0868 14.28 53.7077 16.504 53.7077 19.7546C53.7077 22.9726 56.0868 25.2292 58.848 25.2292C61.6093 25.2292 63.9884 22.9685 63.9884 19.7546Z"
                                    fill="#FBBC05" />
                                <path
                                    d="M86.892 11.2657V27.4859C86.892 34.1581 82.9227 36.8832 78.2302 36.8832C73.813 36.8832 71.1545 33.9544 70.1519 31.5592L73.6363 30.1213C74.2568 31.5918 75.7771 33.3271 78.2261 33.3271C81.2298 33.3271 83.0911 31.49 83.0911 28.0317V26.7323H82.9514C82.0557 27.828 80.3299 28.7853 78.1521 28.7853C73.5952 28.7853 69.4205 24.8504 69.4205 19.7872C69.4205 14.6873 73.5952 10.7198 78.1521 10.7198C80.3258 10.7198 82.0516 11.6771 82.9514 12.7402H83.0911V11.2698H86.892V11.2657ZM83.3747 19.7872C83.3747 16.6059 81.2339 14.28 78.5096 14.28C75.7484 14.28 73.435 16.6059 73.435 19.7872C73.435 22.9359 75.7484 25.2292 78.5096 25.2292C81.2339 25.2292 83.3747 22.9359 83.3747 19.7872Z"
                                    fill="#4285F4" />
                                <path d="M93.1582 1.75806V28.235H89.2546V1.75806H93.1582Z" fill="#34A853" />
                                <path
                                    d="M108.37 22.7285L111.476 24.7814C110.474 26.2519 108.058 28.7856 103.883 28.7856C98.7054 28.7856 94.8389 24.8181 94.8389 19.7508C94.8389 14.378 98.7383 10.7161 103.435 10.7161C108.164 10.7161 110.478 14.4473 111.234 16.4636L111.649 17.4901L99.4656 22.4922C100.398 24.3048 101.849 25.2295 103.883 25.2295C105.921 25.2295 107.334 24.2356 108.37 22.7285ZM98.8082 19.4779L106.952 16.1255C106.504 14.9972 105.157 14.211 103.57 14.211C101.537 14.211 98.7054 15.9911 98.8082 19.4779Z"
                                    fill="#EA4335" />
                                <path
                                    d="M15.2066 17.4044V13.5713H28.2362C28.3636 14.2394 28.4293 15.0296 28.4293 15.885C28.4293 18.7608 27.6363 22.3169 25.0805 24.8505C22.5946 27.4167 19.4183 28.7854 15.2107 28.7854C7.41181 28.7854 0.853851 22.4879 0.853851 14.7567C0.853851 7.02541 7.41181 0.727966 15.2107 0.727966C19.5251 0.727966 22.5987 2.4062 24.9079 4.5936L22.1795 7.29832C20.5236 5.75859 18.2801 4.56101 15.2066 4.56101C9.51151 4.56101 5.05736 9.11097 5.05736 14.7567C5.05736 20.4024 9.51151 24.9523 15.2066 24.9523C18.9006 24.9523 21.0044 23.4818 22.3521 22.1458C23.4451 21.0623 24.1642 19.5144 24.4477 17.4003L15.2066 17.4044Z"
                                    fill="#4285F4" />
                            </g>
                            <defs>
                                <clipPath id="clip0_1_737">
                                    <rect width="111.765" height="37.4751" fill="white"
                                        transform="translate(0.705811 0.536377)" />
                                </clipPath>
                            </defs>
                        </svg>

                    </span>
                </div>

                <div class="col me-2 shadow mb-4 d-flex justify-content-center" style="background-color: #fff; ">
                    <span class="partners-card  ">
                        <svg width="144" height="31" viewBox="0 0 144 31" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1_749)">
                                <path
                                    d="M50.8983 17.5396L50.0428 19.9472H49.9715C49.829 19.4043 49.5676 18.5782 49.1398 17.5868L44.5536 6.13913H40.0623V24.3846H43.0327V13.1258C43.0327 12.4177 43.0327 11.6151 43.0089 10.6238C42.9852 10.1281 42.9377 9.75046 42.9139 9.46722H42.9852C43.1278 10.1753 43.2941 10.6946 43.4129 11.025L48.926 24.3374H51.0171L56.4827 10.907C56.6015 10.6002 56.7203 9.98649 56.8391 9.46722H56.9104C56.8391 10.8126 56.7916 12.0164 56.7678 12.7481V24.3138H59.9283V6.09192H55.6034L50.8983 17.5396ZM62.9225 11.2375H66.0117V24.3138H62.9225V11.2375ZM64.4908 5.71426C63.968 5.71426 63.5403 5.90309 63.1839 6.23354C62.8274 6.56399 62.6373 6.98885 62.6373 7.50813C62.6373 8.0038 62.8274 8.42866 63.1839 8.75911C63.5403 9.08956 63.968 9.25479 64.4908 9.25479C65.0136 9.25479 65.4651 9.06596 65.7978 8.75911C66.1543 8.42866 66.3444 8.0038 66.3444 7.50813C66.3444 7.01246 66.1543 6.58759 65.7978 6.23354C65.4889 5.90309 65.0374 5.71426 64.4908 5.71426ZM76.9665 11.1195C76.3962 11.0014 75.8021 10.9306 75.2318 10.9306C73.8298 10.9306 72.5465 11.2375 71.4772 11.8512C70.4079 12.4649 69.5524 13.3146 69.0058 14.3767C68.4355 15.4625 68.1504 16.7135 68.1504 18.1533C68.1504 19.4043 68.4355 20.5136 68.9821 21.5286C69.5286 22.5199 70.289 23.3225 71.3109 23.8653C72.2851 24.4082 73.4258 24.6915 74.709 24.6915C76.1823 24.6915 77.4418 24.3846 78.4398 23.8181L78.4636 23.7945V20.9621L78.3448 21.0565C77.8933 21.387 77.3705 21.6702 76.8477 21.8354C76.3011 22.0243 75.8021 22.1187 75.3744 22.1187C74.1387 22.1187 73.1644 21.7646 72.4753 20.9857C71.7624 20.2304 71.4059 19.1919 71.4059 17.8937C71.4059 16.5483 71.7624 15.4861 72.499 14.7072C73.2357 13.9283 74.21 13.527 75.3981 13.527C76.3962 13.527 77.418 13.8575 78.3448 14.5184L78.4636 14.6128V11.6151L78.4398 11.5915C78.0358 11.4263 77.5843 11.2375 76.9665 11.1195ZM87.1609 11.025C86.4005 11.025 85.6876 11.2611 85.0697 11.7568C84.5469 12.1816 84.1905 12.7953 83.8816 13.527H83.8578V11.2375H80.7686V24.3138H83.8578V17.634C83.8578 16.5011 84.0954 15.5569 84.6182 14.8724C85.141 14.1643 85.8064 13.8103 86.6143 13.8103C86.8995 13.8103 87.1846 13.8811 87.5411 13.9283C87.8738 14.0227 88.1114 14.1171 88.2777 14.2351L88.3966 14.3295V11.2611L88.3253 11.2375C88.1114 11.0959 87.6837 11.025 87.1609 11.025ZM95.573 10.9542C93.4106 10.9542 91.6759 11.5915 90.464 12.8425C89.2283 14.0935 88.6342 15.8166 88.6342 17.9881C88.6342 20.018 89.252 21.6702 90.4402 22.874C91.6284 24.0542 93.2442 24.6679 95.2641 24.6679C97.379 24.6679 99.0662 24.0306 100.278 22.756C101.514 21.4814 102.108 19.7819 102.108 17.6812C102.108 15.6041 101.538 13.9519 100.373 12.7481C99.2563 11.5443 97.6167 10.9542 95.573 10.9542ZM98.0444 21.0093C97.4741 21.741 96.5711 22.0951 95.4542 22.0951C94.3374 22.0951 93.4344 21.741 92.7927 20.9621C92.1511 20.2304 91.8422 19.1683 91.8422 17.8229C91.8422 16.4302 92.1749 15.3681 92.7927 14.6128C93.4344 13.8575 94.3136 13.4798 95.4305 13.4798C96.5236 13.4798 97.379 13.8339 97.9969 14.5656C98.6147 15.2973 98.9474 16.3594 98.9474 17.752C98.8999 19.1682 98.6385 20.2776 98.0444 21.0093ZM108.999 16.6663C108.025 16.265 107.407 15.9582 107.122 15.6985C106.884 15.4625 106.765 15.1321 106.765 14.7072C106.765 14.3531 106.908 13.9991 107.265 13.7631C107.621 13.527 108.025 13.409 108.619 13.409C109.142 13.409 109.688 13.5034 110.211 13.645C110.734 13.7867 111.209 13.9991 111.589 14.2823L111.708 14.3767V11.4971L111.637 11.4735C111.28 11.3319 110.805 11.1903 110.235 11.0723C109.665 10.9778 109.142 10.9306 108.714 10.9306C107.241 10.9306 106.029 11.2847 105.078 12.0636C104.128 12.7953 103.676 13.7867 103.676 14.9432C103.676 15.5569 103.771 16.0998 103.985 16.5483C104.199 16.9967 104.508 17.4216 104.936 17.7756C105.363 18.1061 105.981 18.4837 106.837 18.8378C107.55 19.1446 108.096 19.3807 108.429 19.5695C108.762 19.7583 108.975 19.9708 109.142 20.136C109.261 20.3248 109.332 20.5609 109.332 20.8677C109.332 21.741 108.667 22.1659 107.312 22.1659C106.789 22.1659 106.243 22.0715 105.601 21.859C104.959 21.6466 104.365 21.3398 103.866 20.9857L103.748 20.8913V23.8889L103.819 23.9126C104.27 24.125 104.817 24.2666 105.482 24.4318C106.148 24.5498 106.742 24.6443 107.265 24.6443C108.857 24.6443 110.164 24.2902 111.09 23.5113C112.041 22.756 112.54 21.7882 112.54 20.5373C112.54 19.6639 112.302 18.885 111.78 18.2949C111.09 17.7284 110.235 17.1384 108.999 16.6663ZM120.691 10.9542C118.528 10.9542 116.794 11.5915 115.582 12.8425C114.37 14.0935 113.752 15.8166 113.752 17.9881C113.752 20.018 114.37 21.6702 115.558 22.874C116.746 24.0542 118.362 24.6679 120.382 24.6679C122.497 24.6679 124.184 24.0306 125.396 22.756C126.631 21.4814 127.226 19.7819 127.226 17.6812C127.226 15.6041 126.655 13.9519 125.491 12.7481C124.374 11.5443 122.734 10.9542 120.691 10.9542ZM123.138 21.0093C122.568 21.741 121.665 22.0951 120.548 22.0951C119.407 22.0951 118.528 21.741 117.887 20.9621C117.245 20.2304 116.936 19.1683 116.936 17.8229C116.936 16.4302 117.269 15.3681 117.887 14.6128C118.528 13.8575 119.407 13.4798 120.524 13.4798C121.594 13.4798 122.473 13.8339 123.091 14.5656C123.709 15.2973 124.041 16.3594 124.041 17.752C124.041 19.1682 123.732 20.2776 123.138 21.0093ZM143.741 13.7631V11.2375H140.628V7.36651L140.533 7.39011L137.586 8.26344L137.515 8.28704V11.2375H132.857V9.58523C132.857 8.82992 133.048 8.23984 133.38 7.86218C133.713 7.48452 134.212 7.2957 134.83 7.2957C135.258 7.2957 135.709 7.39011 136.208 7.60254L136.327 7.67335V5.00616L136.256 4.98256C135.828 4.84093 135.257 4.74652 134.521 4.74652C133.594 4.74652 132.786 4.95895 132.049 5.313C131.313 5.71426 130.766 6.25714 130.362 6.98885C129.958 7.69696 129.744 8.49948 129.744 9.42001V11.2375H127.582V13.7394H129.744V24.3138H132.857V13.7631H137.515V20.49C137.515 23.2517 138.822 24.6443 141.436 24.6443C141.864 24.6443 142.315 24.5734 142.743 24.5026C143.194 24.4082 143.527 24.2902 143.717 24.1958L143.741 24.1722V21.6466L143.622 21.741C143.432 21.859 143.266 21.9535 142.981 22.0243C142.743 22.0951 142.529 22.1187 142.363 22.1187C141.745 22.1187 141.317 21.9771 141.008 21.623C140.723 21.2926 140.58 20.7497 140.58 19.9472V13.7631H143.741Z"
                                    fill="#737373" />
                                <path d="M0.235291 0.00219727H14.8021V14.4711H0.235291V0.00219727Z" fill="#F25022" />
                                <path d="M16.3228 0.00219727H30.8897V14.4711H16.3228V0.00219727Z" fill="#7FBA00" />
                                <path d="M0.235291 15.9818H14.8021V30.4507H0.235291V15.9818Z" fill="#00A4EF" />
                                <path d="M16.3228 15.9818H30.8897V30.4507H16.3228V15.9818Z" fill="#FFB900" />
                            </g>
                            <defs>
                                <clipPath id="clip0_1_749">
                                    <rect width="143.529" height="30.4485" fill="white"
                                        transform="translate(0.235291 0.00219727)" />
                                </clipPath>
                            </defs>
                        </svg>

                    </span>
                </div>

                <div class="col me-2 shadow mb-4 d-flex justify-content-center" style="background-color: #fff; ">
                    <span class="partners-card  ">
                        <svg width="116" height="41" viewBox="0 0 116 41" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1_755)">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M101.972 18.8689L94.6341 31.5569L88.3735 31.5818L101.972 7.70013L115.52 31.5818H109.16L101.972 18.8676V18.8689ZM82.2133 26.0584H89.2252L85.9696 31.5818H76.8304L76.8552 24.8564V7.84695H82.2393L82.2145 26.0584H82.2133ZM62.9827 7.8482C69.6685 7.87308 75.0775 13.1738 75.0527 19.7262C75.0279 26.255 69.619 31.5569 62.9319 31.5569C56.2709 31.532 50.862 26.2313 50.862 19.6777C50.8868 13.1489 56.2957 7.8482 62.9827 7.8482ZM62.9579 26.0347C66.5382 26.0347 69.4169 23.2114 69.4169 19.7262C69.4429 16.2422 66.5382 13.394 62.9827 13.394C59.426 13.3691 56.5213 16.2173 56.5213 19.7025C56.4965 23.1866 59.4012 26.0347 62.9567 26.0347H62.9579ZM40.8958 17.8411C40.8215 16.8581 40.5698 15.5578 40.1942 14.3073C39.4212 11.7243 38.0774 9.3497 36.263 7.36044C35.3109 6.33016 34.2348 5.37206 32.6306 4.24349C31.4077 3.63777 30.2054 2.99121 29.0255 2.30489C28.2494 1.86316 27.3221 1.3219 26.096 0.929947C24.6423 0.58553 23.1562 0.396589 21.6628 0.366284C20.2123 0.316512 18.7581 0.440941 17.356 0.709708C15.8783 0.954833 14.6509 1.34678 13.0232 1.73998C9.3412 3.33516 6.48736 5.74037 4.03271 8.93197C-4.53129 20.9331 3.20705 37.746 17.506 39.7331C19.8602 40.0529 22.2145 39.9297 24.4422 39.4146L26.0204 38.9977C26.07 38.9729 26.1456 38.948 26.1952 38.948L27.999 38.2611C28.0982 38.2113 28.1738 38.1865 28.2742 38.1379L29.0255 37.7945C30.467 37.0805 31.8201 36.1993 33.0571 35.1691C31.9311 36.1959 30.7064 37.1083 29.4011 37.8928L29.4755 37.9426C29.7272 37.8679 29.9516 37.7945 30.202 37.746C30.202 37.746 30.202 38.1379 30.1524 38.0645C29.752 38.3594 30.378 38.0894 31.1789 37.6713C31.981 37.2545 32.7571 36.7381 33.4575 36.1496C34.4852 35.291 35.3865 34.3578 36.6634 32.8373C37.9651 30.554 39.5941 28.5656 40.3454 25.8904C40.5958 25.1787 40.8202 24.345 40.9715 23.4852C41.1202 22.6266 41.2219 21.7432 41.2219 20.8348C41.1971 19.9265 41.0967 18.9933 40.8958 17.8411ZM22.3645 38.016C26.7469 37.3279 30.4276 34.8991 33.4327 31.5855C34.2596 30.3823 34.9105 29.2774 35.7113 28.0754C36.713 25.6204 36.6386 23.4367 36.9634 21.8912C37.3651 19.0916 36.413 16.8345 35.6121 14.4292C34.3848 11.6308 32.7571 9.54541 29.902 7.92534C22.6893 3.45834 12.8732 4.70885 8.19073 11.3857C8.16594 11.3857 8.03949 11.5574 7.78906 11.9008C8.11511 10.5272 8.94201 9.71712 9.76766 8.93073C12.2223 6.91871 15.0774 5.32229 18.3329 4.53839C22.0149 4.14519 25.6696 4.53839 28.9499 6.13357C33.8592 8.93073 37.1147 13.3256 37.9403 18.5267V23.3384C36.9138 31.2172 30.1524 37.206 22.3645 38.016ZM40.3702 20.0982C40.1942 8.56366 28.7503 0.783121 17.6064 2.35466C14.3509 3.16345 10.7942 4.78351 8.26512 7.0419C7.03779 7.85069 6.46256 9.34881 5.23524 10.5508C0.325939 17.7428 1.17887 26.9468 7.28822 32.5436C8.07189 33.3212 8.90866 34.043 9.79245 34.7037C4.6848 31.634 2.38016 26.9941 1.5793 21.3512C1.5793 19.338 1.97973 17.3496 2.40495 15.3376C5.26127 6.52552 14.2505 0.119915 24.0431 1.73998C25.6708 2.13318 27.2986 2.55001 28.9524 2.94321C31.0053 3.752 33.0335 4.95522 34.6613 6.55165C36.289 8.14558 37.5164 10.1588 38.7437 12.146C39.5693 13.7424 39.971 15.7544 40.3714 17.3496C40.4458 18.2579 40.4458 19.1911 40.3714 20.0995L40.3702 20.0982Z"
                                    fill="black" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M30.203 20.2707C30.203 25.2292 26.0462 29.2544 20.9125 29.2544C15.7801 29.2544 11.622 25.2292 11.622 20.2707C11.622 15.3134 15.7788 11.2881 20.9125 11.2881C26.0462 11.2881 30.203 15.3134 30.203 20.2719V20.2707Z"
                                    fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M30.2539 18.7493C30.1287 18.0625 29.9279 17.5224 29.7283 16.7622C28.9262 15.0923 27.7497 13.7921 26.1963 12.6871C20.387 8.83481 12.3982 12.5403 11.5477 19.1189C11.2229 21.7207 12.149 24.2242 13.8016 26.1391C13.3007 25.6228 12.7503 25.084 12.3746 24.4693L12.325 24.5191C12.3746 24.6659 12.5755 24.7642 12.6251 24.911C12.6251 24.911 12.4242 24.911 12.4751 24.8861C12.3251 24.7157 12.4503 24.9857 12.6747 25.3527C12.8755 25.7211 13.1259 26.0657 13.4259 26.3843C13.8524 26.8509 14.3024 27.2677 15.0537 27.8326C16.157 28.3963 17.1327 29.1329 18.4096 29.4763C18.7604 29.5759 19.1609 29.6729 19.5625 29.7463C19.9878 29.821 20.3882 29.8459 20.8395 29.8459C21.2647 29.8459 21.7159 29.7961 22.2664 29.6966C22.834 29.6295 23.395 29.515 23.9437 29.3544C25.1693 28.9841 26.2983 28.3468 27.2501 27.4879C27.7261 27.0475 28.403 26.4826 28.9274 25.7459C29.3539 24.9123 29.4035 24.4942 29.6043 24.1259C29.8039 23.7576 30.0543 23.3407 30.2304 22.7758C30.3738 22.1057 30.4576 21.424 30.4808 20.7389C30.456 20.0521 30.4064 19.3889 30.2552 18.7505L30.2539 18.7493ZM24.2933 14.1853C25.145 14.6755 25.2702 14.7489 24.819 14.4304C25.4711 14.5772 25.8715 14.9455 26.2719 15.3138C27.2488 16.4187 28.0497 17.719 28.4501 19.2159C28.6757 20.9094 28.4997 22.6029 27.7745 24.101C26.4728 26.383 24.3937 27.9048 21.9143 28.3216C21.6391 28.3216 21.3391 28.3216 21.0626 28.3465C21.7643 28.2233 22.2156 27.7816 23.4925 27.315C24.8686 26.8247 26.4219 24.5427 27.1744 23.2163C29.3774 19.6079 26.7728 16.2707 24.2933 14.1853ZM19.5861 28.3701C15.7802 27.9782 12.8495 24.8613 12.449 21.2528C12.7986 23.2661 14.0012 24.8115 15.6289 26.1864C16.2054 26.5547 17.0558 27.0699 17.6323 27.4382C18.6092 27.8065 19.1844 28.1997 20.1365 28.3714H19.5861V28.3701ZM29.8274 21.8177C29.6539 22.5792 29.4778 23.3146 29.3018 24.0761C28.9262 25.0093 28.3757 25.9662 27.6245 26.7264C26.8732 27.4879 25.9211 28.0765 24.9702 28.6414C24.2189 29.0334 23.2668 29.23 22.4908 29.4253C22.0395 29.4751 21.5139 29.2785 21.0626 29.2548C26.6228 29.1068 30.4287 23.9293 29.6031 18.7991C29.2014 17.3022 28.4005 16.0007 27.4236 14.7004C27.0232 14.1355 26.2459 13.7921 25.6707 13.2271C22.1895 11.0434 17.5827 11.4851 14.9533 14.357C14.5846 14.7343 14.2412 15.1359 13.9255 15.5589C15.3289 13.4972 17.5827 12.0501 20.2865 11.632C21.2387 11.6071 22.2156 11.78 23.1664 11.9518C27.374 13.2271 30.5043 17.3022 29.8274 21.819V21.8177Z"
                                    fill="#D7DF23" />
                            </g>
                            <defs>
                                <clipPath id="clip0_1_755">
                                    <rect width="115.294" height="39.8173" fill="white"
                                        transform="translate(0.353027 0.317627)" />
                                </clipPath>
                            </defs>
                        </svg>


                    </span>
                </div>

                <div class="col me-2 shadow mb-4 d-flex justify-content-center" style="background-color: #fff; ">
                    <span class="partners-card  ">
                        <svg width="142" height="34" viewBox="0 0 142 34" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1_760)">
                                <path
                                    d="M50.6527 12.494V14.3523H50.71C51.3843 13.3574 52.5038 12.1857 54.9852 12.1857C56.9157 12.1857 58.3966 13.1601 59.0313 14.6319H59.0886C59.6307 13.8878 60.2522 13.3245 60.9485 12.9257C61.7727 12.4529 62.6895 12.1816 63.8443 12.1816C66.4579 12.1816 68.7718 13.8672 68.7718 18.1183V26.1806H64.7875V18.6816C64.7875 16.5272 64.0029 15.2815 62.3722 15.2815C61.1777 15.2815 60.3095 16.0298 59.9789 16.9507C59.8643 17.2673 59.8114 17.699 59.8114 18.0608V26.1847H55.827V18.3773C55.827 16.5478 55.0734 15.2774 53.4646 15.2774C52.1776 15.2774 51.3711 16.223 51.0405 17.0329C50.8995 17.3783 50.8554 17.7771 50.8554 18.1512V26.1806H46.8666V12.494H50.6527ZM89.3371 12.494V15.0759H89.4473C90.179 13.1025 91.9155 12.1857 93.4405 12.1857C93.824 12.1857 94.0355 12.2145 94.344 12.272V15.8571C93.9782 15.8078 93.6388 15.7584 93.1628 15.7584C91.4351 15.7584 90.2319 16.6958 89.9277 18.1635C89.8616 18.4678 89.8396 18.7967 89.8396 19.1749V26.1847H85.7495V12.494H89.3371ZM99.8975 7.95923V12.2679H103.353V15.7543H99.8975V20.8976C99.8975 22.5627 100.351 23.3685 101.7 23.3685C102.335 23.3685 102.802 23.2945 103.207 23.1999L103.26 26.0902C102.718 26.2793 101.563 26.4849 100.391 26.4849C99.0116 26.4849 97.8612 26.0367 97.1604 25.3419C96.3583 24.5484 95.988 23.2493 95.988 21.3992V7.95923H99.8975ZM44.0899 26.1806H40.1232V7.95923H44.0899V26.1806ZM33.5119 21.2923C33.5119 21.5431 33.4899 21.8062 33.415 22.0323C33.1065 22.982 32.0531 23.7837 30.7396 23.7837C29.6422 23.7837 28.7695 23.204 28.7695 21.9747C28.7695 20.0959 30.9909 19.5737 33.5164 19.5861V21.2923H33.5119ZM37.4743 18.0155C37.4743 14.9115 36.0551 12.1857 31.2553 12.1857C28.7915 12.1857 26.8346 12.8312 25.768 13.4067L26.5481 15.8982C27.5222 15.3226 29.078 14.8498 30.5501 14.8498C32.9875 14.8457 33.3841 16.1367 33.3841 16.963V17.1604C28.0731 17.1522 24.719 18.8666 24.719 22.3612C24.719 24.495 26.4247 26.4931 29.3954 26.4931C31.2245 26.4931 32.7495 25.8147 33.6662 24.7252H33.7544C33.7544 24.7252 34.3626 27.0892 37.7035 26.1847C37.5272 25.198 37.4699 24.1496 37.4699 22.8875V18.0155H37.4743ZM4.79278 7.95923C5.20268 9.88744 6.36625 15.4871 6.36625 15.4871C6.85548 17.7894 7.30505 20.2028 7.64442 22.1104H7.70613C8.03669 20.0835 8.55677 18.1635 9.11212 15.7872L11.0734 7.95923H15.4148L17.2483 15.9887C17.7287 18.2211 18.1122 19.9437 18.4163 22.02H18.4736C18.8042 19.9232 19.2361 18.1307 19.7077 15.8365L21.4707 7.95923H25.6358L20.4746 26.1806C17.1866 26.8508 15.9261 25.6174 15.4765 23.6604C15.027 21.6993 14.1455 17.9703 14.1455 17.9703C13.6915 15.927 13.3389 14.488 13.0921 12.3912H13.0304C12.6778 14.4675 12.3075 15.9229 11.761 17.9662L9.59694 26.1847C6.23844 26.8097 5.07486 25.8846 4.43137 23.3726C3.87603 21.2224 0.411743 7.96334 0.411743 7.96334H4.79278V7.95923ZM79.1382 21.2923C79.1382 21.5431 79.1162 21.8062 79.0413 22.0323C78.7327 22.982 77.6793 23.7837 76.3659 23.7837C75.2685 23.7837 74.3958 23.204 74.3958 21.9747C74.3958 20.0959 76.6171 19.5737 79.1426 19.5861V21.2923H79.1382ZM83.1006 18.0155C83.1006 14.9115 81.6813 12.1857 76.8816 12.1857C74.4178 12.1857 72.4609 12.8312 71.3943 13.4067L72.1744 15.8982C73.1485 15.3226 74.7043 14.8498 76.1764 14.8498C78.6093 14.8457 79.0104 16.1367 79.0104 16.963V17.1604C73.7038 17.1522 70.3497 18.8666 70.3497 22.3612C70.3497 24.495 72.0598 26.4931 75.026 26.4931C76.8507 26.4931 78.3801 25.8147 79.2925 24.7252H79.385C79.385 24.7252 79.9933 27.0892 83.3341 26.1847C83.1578 25.198 83.1006 24.1496 83.1006 22.8875V18.0155Z"
                                    fill="#041E42" />
                                <path
                                    d="M119.433 19.9055C119.824 20.571 119.797 21.3137 119.38 21.6528L112.166 26.5942C111.415 27.0192 110.29 26.504 109.653 25.4265C109.012 24.3446 109.126 23.1382 109.877 22.7132L117.864 19.0813C118.365 18.8924 119.042 19.2401 119.433 19.9055ZM128.927 19.9055C129.322 19.2401 129.994 18.8967 130.495 19.077L138.487 22.7089C139.238 23.1339 139.348 24.3403 138.711 25.4222C138.069 26.4997 136.94 27.0106 136.193 26.5899L128.979 21.6485C128.566 21.3137 128.536 20.5667 128.927 19.9055ZM124.178 22.5844C124.964 22.5844 125.61 22.9794 125.698 23.4989L126.475 32.0765C126.475 32.9265 125.46 33.622 124.182 33.622C122.908 33.622 121.889 32.9265 121.889 32.0765L122.662 23.4989C122.75 22.9794 123.396 22.5844 124.178 22.5844ZM128.979 12.8048L136.193 7.8591C136.94 7.43408 138.069 7.94496 138.711 9.02682C139.348 10.1087 139.238 11.315 138.487 11.7401L130.495 15.3763C129.994 15.5566 129.318 15.2132 128.927 14.5477C128.536 13.8823 128.566 13.1396 128.979 12.8048ZM117.864 15.3763L109.877 11.7401C109.13 11.315 109.016 10.1087 109.653 9.02682C110.29 7.94496 111.419 7.43408 112.166 7.8591L119.38 12.8048C119.797 13.1353 119.824 13.8823 119.433 14.5477C119.042 15.2132 118.365 15.5566 117.864 15.3763ZM122.662 10.9544L121.889 2.37681C121.889 1.52678 122.903 0.831299 124.182 0.831299C125.46 0.831299 126.475 1.52678 126.475 2.37681L125.698 10.9544C125.61 11.4696 124.964 11.8689 124.178 11.8689C123.396 11.8689 122.75 11.4696 122.662 10.9544ZM140.661 26.5598V26.3452H140.859C140.925 26.3452 140.969 26.3881 140.969 26.4525C140.969 26.5126 140.925 26.5598 140.859 26.5598H140.661ZM140.499 26.9505C140.499 26.972 140.516 26.9934 140.543 26.9934H140.626C140.648 26.9934 140.67 26.972 140.67 26.9505V26.7058H140.806L140.916 26.9634C140.925 26.9806 140.938 26.9934 140.956 26.9934H141.057C141.087 26.9934 141.109 26.9634 141.096 26.9333C141.057 26.8561 141.017 26.7745 140.978 26.6929C141.043 26.6715 141.145 26.6071 141.145 26.4525C141.145 26.2894 141.008 26.1949 140.872 26.1949H140.543C140.521 26.1949 140.499 26.2164 140.499 26.2379V26.9505ZM140.143 26.5942C140.143 26.2464 140.433 25.9631 140.789 25.9631C141.145 25.9631 141.434 26.2421 141.434 26.5942C141.434 26.9419 141.149 27.2253 140.789 27.2253C140.428 27.2253 140.143 26.9419 140.143 26.5942ZM139.989 26.5942C139.989 27.0235 140.345 27.3755 140.789 27.3755C141.228 27.3755 141.588 27.0235 141.588 26.5942C141.588 26.1649 141.228 25.8128 140.789 25.8128C140.345 25.8128 139.989 26.1649 139.989 26.5942Z"
                                    fill="#FFC124" />
                            </g>
                            <defs>
                                <clipPath id="clip0_1_760">
                                    <rect width="141.176" height="32.7907" fill="white"
                                        transform="translate(0.411743 0.831299)" />
                                </clipPath>
                            </defs>
                        </svg>


                    </span>
                </div>
                <div class="col me-2 shadow mb-4 d-flex justify-content-center" style="background-color: #fff; ">
                    <span class="partners-card">
                        <svg width="100" height="38" viewBox="0 0 100 38" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1_763)">
                                <path
                                    d="M81.8397 36.3715C91.2261 36.3715 98.8635 28.646 98.8635 19.1517C98.8635 9.65175 91.2261 1.93188 81.8397 1.93188C72.4515 1.93188 64.816 9.65175 64.816 19.1517C64.816 28.646 72.4515 36.3715 81.8397 36.3715ZM81.8397 13.0114C85.1848 13.0114 87.909 15.7658 87.909 19.1498C87.909 22.5338 85.1829 25.2845 81.8379 25.2845C78.4909 25.2845 75.7705 22.5338 75.7705 19.1479C75.7705 15.7602 78.4928 13.0076 81.8379 13.0076L81.8397 13.0114ZM17.6119 36.3715C26.9983 36.3715 34.6356 28.646 34.6356 19.1517C34.6356 9.65175 26.9983 1.93188 17.6119 1.93188C8.22738 1.93188 0.588135 9.65175 0.588135 19.1517C0.588135 28.646 8.22738 36.3715 17.6119 36.3715ZM17.6119 13.0114C20.9588 13.0114 23.6811 15.7658 23.6811 19.1498C23.6811 22.5338 20.9588 25.2845 17.6119 25.2845C14.2668 25.2845 11.5464 22.5338 11.5464 19.1479C11.5464 15.7602 14.2687 13.0076 17.6119 13.0076V13.0114ZM49.7165 12.6235L44.49 2.15674H32.2527L43.6827 25.054V35.8337H55.7522V25.054L67.1821 2.15674H54.9392L49.7183 12.6235H49.7165Z"
                                    fill="#EE2E24" />
                            </g>
                            <defs>
                                <clipPath id="clip0_1_763">
                                    <rect width="98.8235" height="37.4751" fill="white"
                                        transform="translate(0.588135 0.489502)" />
                                </clipPath>
                            </defs>
                        </svg>


                    </span>
                </div>
            </div>


            <div class="row partner-list-2" dir="ltr">
                <div class="col me-2 shadow mb-4 d-flex justify-content-center" style="background-color: #fff; ">
                    <span class="partners-card  ">
                        <svg width="122" height="39" viewBox="0 0 122 39" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1_720)">
                                <path
                                    d="M34.7366 27.0956C34.5465 26.6389 34.3683 26.1587 34.1782 25.7489L33.2991 23.7931L33.2634 23.758C30.6498 18.1367 27.858 12.4218 24.8999 6.80053L24.7811 6.56631C24.4841 6.01589 24.1871 5.40692 23.8782 4.8448C23.498 4.17727 23.1298 3.46291 22.5239 2.78367C21.9333 2.07297 21.19 1.50037 20.3477 1.10719C19.5054 0.714018 18.585 0.510071 17.6531 0.510071C16.7211 0.510071 15.8007 0.714018 14.9584 1.10719C14.1161 1.50037 13.3728 2.07297 12.7822 2.78367C12.2239 3.46291 11.8081 4.17727 11.4279 4.8448C11.1309 5.45377 10.8339 6.05103 10.525 6.60144L10.4062 6.83566C7.49562 12.4569 4.65628 18.1719 2.04267 23.7931L1.97139 23.8634C1.71003 24.4724 1.40115 25.1048 1.10415 25.784C0.914069 26.1939 0.723988 26.6389 0.533908 27.1308C0.0207285 28.4187 -0.143146 29.8163 0.0584353 31.1857C0.260016 32.5551 0.820095 33.849 1.68347 34.9401C2.54685 36.0311 3.68373 36.8816 4.98206 37.4076C6.2804 37.9337 7.69537 38.1171 9.08754 37.94C10.4222 37.7668 11.7074 37.3285 12.8654 36.6518C14.4098 35.7969 15.8948 34.5555 17.558 32.7637C19.2212 34.5555 20.7419 35.7969 22.2506 36.6635C23.7015 37.503 25.3446 37.9663 27.0264 38.0102C28.974 38.0182 30.8587 37.3313 32.3326 36.0764C33.8065 34.8215 34.7701 33.0833 35.0454 31.1827C35.3636 29.817 35.256 28.3883 34.7366 27.0839V27.0956ZM17.6768 29.0396C15.6334 26.4632 14.3029 24.0976 13.8514 22.0716C13.6644 21.3209 13.6241 20.5419 13.7326 19.7763C13.8158 19.179 14.0415 18.652 14.3504 18.207C15.0632 17.1881 16.3106 16.5558 17.6768 16.5558C18.3256 16.5362 18.9692 16.6758 19.5498 16.962C20.1304 17.2481 20.6298 17.6719 21.0032 18.1953C21.3121 18.6637 21.5378 19.179 21.6091 19.7763C21.7279 20.4555 21.6804 21.2401 21.4903 22.0716C21.0389 24.0625 19.7083 26.4515 17.6768 29.0396ZM32.812 30.7729C32.677 31.7378 32.2879 32.651 31.6834 33.4215C31.079 34.192 30.2802 34.793 29.3668 35.1645C28.4639 35.5392 27.466 35.6446 26.4918 35.5392C25.5414 35.4221 24.591 35.1176 23.6168 34.5555C21.9994 33.57 20.545 32.3456 19.3044 30.9251C21.7992 27.8803 23.308 25.1048 23.8782 22.6337C24.1514 21.4627 24.1871 20.4087 24.0683 19.4367C23.9199 18.5153 23.5714 17.6365 23.0466 16.8602C22.4474 16.0185 21.6475 15.3348 20.7174 14.8692C19.7873 14.4037 18.7554 14.1705 17.7125 14.1901C15.5146 14.1901 13.5544 15.1973 12.3664 16.8485C11.8316 17.6228 11.486 18.5087 11.3566 19.4367C11.2022 20.4204 11.2378 21.5095 11.5467 22.6337C12.117 25.1048 13.6614 27.9154 16.1205 30.9485C14.901 32.3962 13.4432 33.6314 11.8081 34.6023C10.822 35.1645 9.8835 35.4572 8.9331 35.5744C7.45509 35.761 5.96208 35.365 4.7786 34.4725C3.59513 33.58 2.81684 32.2631 2.61292 30.808C2.49412 29.8711 2.57728 28.9342 2.95744 27.8803C3.07624 27.5055 3.25444 27.1308 3.44452 26.6857C3.70588 26.0768 4.01476 25.4444 4.31176 24.812L4.35928 24.73C6.92537 19.1439 9.72906 13.4406 12.6397 7.85452L12.7585 7.6203C13.0555 7.05817 13.3525 6.46091 13.6614 5.89879C13.9702 5.30153 14.3029 4.72769 14.7306 4.25925C15.1008 3.82363 15.5633 3.4733 16.0857 3.23292C16.6081 2.99255 17.1776 2.86798 17.754 2.86798C18.3305 2.86798 18.9 2.99255 19.4224 3.23292C19.9447 3.4733 20.4073 3.82363 20.7775 4.25925C21.1933 4.72769 21.5378 5.30153 21.8467 5.89879C22.1437 6.46091 22.4407 7.06988 22.7496 7.6203L22.8684 7.85452C25.7671 13.4406 28.5708 19.1439 31.1844 24.73L31.2201 24.7651C31.5289 25.3741 31.7903 26.0533 32.0873 26.6389C32.2774 27.0956 32.4675 27.4587 32.5863 27.8451C32.812 28.8991 32.9308 29.836 32.812 30.7729ZM49.349 28.782C48.4538 28.7949 47.5671 28.609 46.7548 28.238C45.9424 27.867 45.2252 27.3204 44.6564 26.6389C43.3782 25.1867 42.6998 23.3142 42.7556 21.3924C42.736 19.4287 43.4363 17.5241 44.7277 16.0288C45.325 15.3385 46.0686 14.7858 46.906 14.4095C47.7435 14.0331 48.6544 13.8423 49.5747 13.8505C50.4407 13.8272 51.2985 14.0213 52.0674 14.4146C52.8364 14.8079 53.4912 15.3876 53.9704 16.099L54.0892 14.2604H57.5581V28.4072H54.0773L53.9585 26.3461C53.4645 27.1058 52.7817 27.7283 51.9749 28.1546C51.1682 28.581 50.2643 28.7969 49.349 28.782ZM50.2519 25.4092C50.9409 25.4092 51.5468 25.2219 52.1171 24.8822C52.6398 24.5075 53.0675 24.0156 53.4001 23.4184C53.6971 22.8211 53.8516 22.1068 53.8516 21.3104C53.8979 20.6188 53.7613 19.9271 53.4552 19.3031C53.1491 18.679 52.6839 18.144 52.1052 17.7503C51.5491 17.4087 50.9071 17.2277 50.2519 17.2277C49.5967 17.2277 48.9547 17.4087 48.3986 17.7503C47.8759 18.125 47.4482 18.6169 47.1156 19.2141C46.8014 19.8728 46.6469 20.5945 46.6641 21.3221C46.6178 22.0138 46.7544 22.7054 47.0605 23.3295C47.3666 23.9535 47.8318 24.4885 48.4105 24.8822C48.9689 25.2219 49.5747 25.4092 50.2519 25.4092ZM63.4982 10.4426C63.4982 10.8525 63.4269 11.2273 63.2368 11.5318C63.0467 11.8245 62.7854 12.0939 62.4408 12.2813C62.0963 12.4686 61.728 12.5389 61.3479 12.5389C60.9677 12.5389 60.5875 12.4686 60.243 12.2813C59.9172 12.1024 59.6432 11.8444 59.4471 11.5318C59.2631 11.1981 59.1728 10.8221 59.1857 10.4426C59.1857 10.021 59.2689 9.64629 59.4471 9.35352C59.6371 9.00219 59.9104 8.79139 60.243 8.60402C60.5875 8.41664 60.9558 8.33466 61.3479 8.33466C61.726 8.32607 62.1 8.41436 62.4331 8.59089C62.7663 8.76743 63.0473 9.02616 63.2487 9.34181C63.4216 9.68324 63.5072 10.0611 63.4982 10.4426ZM59.4589 28.3604V14.237H63.2368V28.3838H59.4471L59.4589 28.3604ZM73.3348 17.9377V17.9845C73.1566 17.9025 72.919 17.8674 72.7408 17.8323C72.5032 17.7854 72.3131 17.7854 72.0874 17.7854C71.0301 17.7854 70.2341 18.0899 69.7114 18.7223C69.1412 19.3664 68.8798 20.2681 68.8798 21.4275V28.3721H65.0901V14.2253H68.5709L68.6897 16.3684C69.0699 15.6189 69.5213 15.0568 70.1629 14.6352C70.801 14.2255 71.5522 14.021 72.3131 14.0496C72.5864 14.0496 72.8477 14.073 73.0735 14.1199C73.1923 14.155 73.2635 14.155 73.3348 14.1901V17.9377ZM74.8555 28.3604V8.42835H78.6333V16.0405C79.1679 15.3612 79.7738 14.8342 80.5341 14.4244C81.7378 13.8426 83.1052 13.6776 84.4157 13.9559C85.7262 14.2343 86.9034 14.9397 87.7572 15.9585C89.0382 17.4137 89.7168 19.2909 89.658 21.2167C89.6776 23.1804 88.9773 25.085 87.6859 26.5803C87.0886 27.2706 86.345 27.8233 85.5076 28.1996C84.6701 28.576 83.7592 28.7668 82.8389 28.7586C81.9729 28.7819 81.1151 28.5878 80.3462 28.1945C79.5772 27.8012 78.9224 27.2215 78.4433 26.5101L78.3245 28.3487L74.8555 28.3838V28.3604ZM82.1617 25.4092C82.8389 25.4092 83.4448 25.2219 84.015 24.8822C84.5377 24.5075 84.9654 24.0156 85.298 23.4184C85.6069 22.8211 85.7495 22.1068 85.7495 21.3104C85.7495 20.5258 85.6069 19.8114 85.298 19.2141C84.9861 18.6382 84.5477 18.1382 84.015 17.7503C83.4589 17.4087 82.8169 17.2277 82.1617 17.2277C81.5065 17.2277 80.8645 17.4087 80.3084 17.7503C79.7738 18.125 79.358 18.6169 79.0135 19.2141C78.6993 19.8728 78.5448 20.5945 78.562 21.3221C78.5157 22.0138 78.6523 22.7054 78.9584 23.3295C79.2645 23.9535 79.7297 24.4885 80.3084 24.8822C80.8668 25.2219 81.4727 25.4092 82.1617 25.4092ZM91.0836 28.3721V14.2253H94.5645L94.6833 16.0639C95.1207 15.3591 95.7412 14.7823 96.4806 14.3932C97.2199 14.0041 98.0514 13.8167 98.8888 13.8505C99.8465 13.8342 100.788 14.0966 101.595 14.6048C102.402 15.1131 103.039 15.8446 103.427 16.708C103.843 17.598 104.069 18.6989 104.069 19.9285V28.4072H100.279V20.4204C100.279 19.4367 100.053 18.6637 99.6016 18.0899C99.1502 17.5278 98.5324 17.2233 97.7483 17.2233C97.1781 17.2233 96.6791 17.3404 96.2396 17.598C95.8238 17.8674 95.4792 18.207 95.2179 18.6872C94.9536 19.1725 94.8226 19.7175 94.8377 20.2681V28.3721H91.0836ZM105.957 28.3721V8.41664H109.747V16.0288C110.26 15.3457 110.928 14.7901 111.697 14.4059C112.467 14.0216 113.316 13.8195 114.178 13.8154C115.074 13.8025 115.96 13.9884 116.773 14.3594C117.585 14.7304 118.302 15.277 118.871 15.9585C120.143 17.4136 120.817 19.2851 120.76 21.205C120.781 23.1689 120.08 25.0739 118.788 26.5686C118.191 27.2588 117.447 27.8116 116.61 28.1879C115.772 28.5643 114.861 28.7551 113.941 28.7469C113.075 28.7702 112.217 28.5761 111.448 28.1828C110.679 27.7894 110.024 27.2098 109.545 26.4984L109.438 28.337L105.957 28.3721ZM113.299 25.4092C113.988 25.4092 114.594 25.2219 115.153 24.8822C115.687 24.5075 116.103 24.0156 116.448 23.4184C116.745 22.8211 116.899 22.1068 116.899 21.3104C116.945 20.6188 116.809 19.9271 116.503 19.3031C116.196 18.679 115.731 18.144 115.153 17.7503C114.597 17.4087 113.954 17.2277 113.299 17.2277C112.644 17.2277 112.002 17.4087 111.446 17.7503C110.923 18.125 110.496 18.6169 110.163 19.2141C109.831 19.8669 109.676 20.5929 109.712 21.3221C109.665 22.0138 109.802 22.7054 110.108 23.3295C110.414 23.9535 110.879 24.4885 111.458 24.8822C112.016 25.2219 112.587 25.4092 113.299 25.4092Z"
                                    fill="#FF385C" />
                            </g>
                            <defs>
                                <clipPath id="clip0_1_720">
                                    <rect width="121.176" height="37.4751" fill="white"
                                        transform="translate(0 0.536377)" />
                                </clipPath>
                            </defs>
                        </svg>


                    </span>
                </div>

                <div class="col me-2 shadow mb-4 d-flex justify-content-center" style="background-color: #fff; ">
                    <span class="partners-card  ">
                        <svg width="122" height="39" viewBox="0 0 122 39" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1_722)">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M75.1755 29.8427C68.1338 35.1692 57.9271 38.0111 49.1394 38.0111C36.8177 38.0111 25.7249 33.3342 17.3328 25.5555C16.6735 24.9438 17.2642 24.1102 18.0555 24.5866C27.1122 29.9943 38.3104 33.2476 49.8779 33.2476C57.6792 33.2476 66.2612 31.5912 74.1522 28.1538C75.3443 27.6342 76.3412 28.955 75.1755 29.8427Z"
                                    fill="#FF9900" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M78.1032 26.4054C77.2065 25.2253 72.1533 25.8478 69.8852 26.1239C69.1942 26.2105 69.0887 25.5934 69.7111 25.1495C73.7357 22.2427 80.3397 23.0817 81.1098 24.0561C81.8799 25.0358 80.9093 31.8293 77.1274 35.0718C76.5471 35.5698 75.9933 35.3045 76.2518 34.6441C77.101 32.4681 79.0052 27.5908 78.1032 26.4054Z"
                                    fill="#FF9900" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M70.0433 4.62832V1.80267C70.0433 1.37503 70.3598 1.08813 70.7396 1.08813H83.0667C83.4623 1.08813 83.7787 1.38044 83.7787 1.80267V4.22233C83.7735 4.62832 83.4412 5.1588 82.8504 5.99784L76.4627 15.3571C78.8363 15.2976 81.3418 15.6603 83.4939 16.9053C83.9792 17.1868 84.1111 17.5982 84.148 18.0041V21.0193C84.148 21.4306 83.7049 21.9124 83.2407 21.6634C79.4482 19.6227 74.4108 19.4007 70.2174 21.6851C69.7901 21.9232 69.3418 21.4469 69.3418 21.0355V18.1719C69.3418 17.7118 69.3471 16.9269 69.7954 16.2286L77.1959 5.33744H70.7554C70.3598 5.33744 70.0433 5.05054 70.0433 4.62832Z"
                                    fill="black" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M25.0761 22.2594H21.3257C20.9671 22.2323 20.6822 21.9563 20.6559 21.6044V1.85195C20.6559 1.45679 20.9776 1.14282 21.3785 1.14282H24.8756C25.2396 1.15905 25.5297 1.44596 25.5561 1.80322V4.38528H25.6247C26.5372 1.88983 28.2515 0.726013 30.5618 0.726013C32.9091 0.726013 34.3754 1.88983 35.4304 4.38528C36.3376 1.88983 38.4001 0.726013 40.6102 0.726013C42.182 0.726013 43.9016 1.39183 44.9513 2.88585C46.1381 4.54767 45.8955 6.96193 45.8955 9.07846L45.8902 21.5449C45.8902 21.94 45.5684 22.2594 45.1675 22.2594H41.4225C41.048 22.2323 40.7473 21.9238 40.7473 21.5449V11.0759C40.7473 10.2423 40.8212 8.16364 40.6418 7.37332C40.3623 6.04711 39.5236 5.6736 38.437 5.6736C37.5297 5.6736 36.5803 6.29611 36.1952 7.29213C35.8102 8.28814 35.8471 9.95538 35.8471 11.0759V21.5449C35.8471 21.94 35.5253 22.2594 35.1244 22.2594H31.3794C30.9996 22.2323 30.7042 21.9238 30.7042 21.5449L30.699 11.0759C30.699 8.87276 31.0524 5.6303 28.3886 5.6303C25.6932 5.6303 25.7987 8.79156 25.7987 11.0759V21.5449C25.7987 21.94 25.477 22.2594 25.0761 22.2594"
                                    fill="black" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M94.3912 0.726013C99.9561 0.726013 102.968 5.6303 102.968 11.8662C102.968 17.891 99.6396 22.6708 94.3912 22.6708C88.9266 22.6708 85.9516 17.7665 85.9516 11.6551C85.9516 5.5058 88.9635 0.726013 94.3912 0.726013ZM94.4229 4.75879C91.6589 4.75879 91.4849 8.62375 91.4849 11.0326C91.4849 13.4468 91.4479 18.6001 94.3912 18.6001C97.2976 18.6001 97.4348 14.4429 97.4348 11.9095C97.4348 10.2423 97.3662 8.25025 96.8756 6.66962C96.4537 5.29469 95.615 4.75879 94.4229 4.75879Z"
                                    fill="black" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M110.184 22.2594H106.449C106.075 22.2323 105.774 21.9238 105.774 21.5449L105.769 1.78698C105.801 1.42431 106.112 1.14282 106.492 1.14282H109.968C110.295 1.15905 110.564 1.38642 110.638 1.69496V4.71548H110.706C111.756 2.01434 113.227 0.726013 115.817 0.726013C117.5 0.726013 119.14 1.34852 120.195 3.05365C121.176 4.63428 121.176 7.29213 121.176 9.20296V21.6369C121.134 21.9833 120.823 22.2594 120.454 22.2594H116.693C116.35 22.2323 116.065 21.9725 116.028 21.6369V10.9081C116.028 8.74826 116.271 5.58699 113.681 5.58699C112.769 5.58699 111.93 6.21492 111.513 7.16762C110.986 8.37475 110.917 9.57646 110.917 10.9081V21.5449C110.912 21.94 110.585 22.2594 110.184 22.2594"
                                    fill="black" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M60.2165 12.8242C60.2165 14.3236 60.2534 15.574 59.5149 16.9057C58.9189 17.9883 57.9694 18.6541 56.9197 18.6541C55.4797 18.6541 54.6358 17.5282 54.6358 15.8663C54.6358 12.586 57.5 11.9905 60.2165 11.9905V12.8242ZM63.9984 22.2051C63.7505 22.4325 63.3918 22.4487 63.1123 22.2971C61.8674 21.2362 61.6406 20.7436 60.9602 19.7313C58.903 21.8857 57.4419 22.5299 54.7782 22.5299C51.6186 22.5299 49.1659 20.5325 49.1659 16.5322C49.1659 13.4088 50.8116 11.2814 53.1641 10.2421C55.2002 9.32187 58.0433 9.15948 60.2165 8.90507V8.40706C60.2165 7.49224 60.285 6.40961 59.7576 5.6193C59.3039 4.91018 58.4283 4.61787 57.6529 4.61787C56.2235 4.61787 54.9523 5.3703 54.6411 6.92927C54.5778 7.27572 54.3298 7.61674 53.987 7.63298L50.3527 7.23241C50.0468 7.16204 49.7039 6.90762 49.7936 6.42586C50.627 1.90049 54.6147 0.536377 58.1804 0.536377C60.0055 0.536377 62.3896 1.03439 63.8296 2.45262C65.6547 4.20106 65.4806 6.53412 65.4806 9.07287V15.0706C65.4806 16.8732 66.2086 17.6635 66.8943 18.6379C67.1316 18.9843 67.1844 19.4011 66.8784 19.6609C66.1136 20.3159 64.7527 21.5339 64.0037 22.2159L63.9984 22.2051"
                                    fill="black" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M11.0506 12.8244C11.0506 14.3238 11.0875 15.5743 10.349 16.9059C9.75298 17.9885 8.8088 18.6543 7.75386 18.6543C6.31385 18.6543 5.47517 17.5284 5.47517 15.8666C5.47517 12.5862 8.33935 11.9908 11.0506 11.9908V12.8244ZM14.8325 22.2053C14.5846 22.4327 14.226 22.4489 13.9464 22.2974C12.7016 21.2364 12.48 20.7438 11.7943 19.7316C9.73715 21.886 8.28133 22.5301 5.61231 22.5301C2.45802 22.5301 0 20.5327 0 16.5324C0 13.409 1.65099 11.2817 3.99825 10.2423C6.03429 9.32211 8.87737 9.15972 11.0506 8.90531V8.4073C11.0506 7.49248 11.1191 6.40986 10.5969 5.61954C10.138 4.91042 9.26243 4.61811 8.49232 4.61811C7.06287 4.61811 5.78638 5.37054 5.47517 6.92952C5.41187 7.27596 5.16396 7.61698 4.82638 7.63322L1.18682 7.23265C0.88088 7.16228 0.543297 6.90786 0.627692 6.4261C1.46638 1.90073 5.4488 0.536621 9.01452 0.536621C10.8396 0.536621 13.2238 1.03463 14.6638 2.45287C16.4888 4.2013 16.3147 6.53436 16.3147 9.07311V15.0709C16.3147 16.8734 17.0427 17.6637 17.7284 18.6381C17.971 18.9845 18.0238 19.4013 17.7178 19.6612C16.953 20.3162 15.5921 21.5341 14.8431 22.2162L14.8326 22.2053"
                                    fill="black" />
                            </g>
                            <defs>
                                <clipPath id="clip0_1_722">
                                    <rect width="121.176" height="37.4751" fill="white"
                                        transform="translate(0 0.536377)" />
                                </clipPath>
                            </defs>
                        </svg>

                    </span>
                </div>

                <div class="col me-2 shadow mb-4 d-flex justify-content-center" style="background-color: #fff; ">
                    <span class="partners-card  ">
                        <svg width="118" height="36" viewBox="0 0 118 36" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1_731)">
                                <path
                                    d="M87.6634 34.7886L97.4747 23.9717L87.6634 13.1533H98.0153L102.875 18.4082L107.554 13.1533H117.545L107.78 23.9271L117.679 34.7886H107.284L102.469 29.4906L97.6992 34.7886H87.6634Z"
                                    fill="#FF6600" />
                                <path
                                    d="M87.6633 8.30351H76.5513V13.1533H87.6633V20.4625H76.5513V27.1714H87.6633V34.7887H68.384V0.707275H87.6633V8.30351Z"
                                    fill="#FF6600" />
                                <path
                                    d="M60.2512 0.707275V14.655H60.1617C58.3612 12.6243 56.1116 11.9187 53.5013 11.9187C48.1545 11.9187 44.1269 15.4852 42.7131 20.2005C41.1008 15.0049 36.9428 11.8213 30.777 11.8213C25.7699 11.8213 21.8159 14.0267 19.7525 17.6202V13.1538H9.4026V8.30451H20.6972V0.707275H0.176514V34.7892H9.4026V20.4625H18.5985C18.3243 21.515 18.1781 22.6417 18.1781 23.8307C18.1781 30.9401 23.7131 35.9285 30.777 35.9285C36.7172 35.9285 40.6318 33.1921 42.7024 28.2033H34.796C33.7264 29.7019 32.9151 30.1471 30.777 30.1471C28.2978 30.1471 26.1602 28.0246 26.1602 25.5086H42.2594C42.9576 31.1554 47.4405 36.0254 53.5924 36.0254C56.2461 36.0254 58.6758 34.7445 60.1617 32.5818H60.2512V34.7882H68.3842V0.707275H60.2512ZM26.4169 20.5644C26.93 18.3997 28.641 16.9848 30.777 16.9848C33.1284 16.9848 34.7525 18.356 35.1796 20.5644C35.3596 20.5644 26.4169 20.5644 26.4169 20.5644ZM55.3157 29.5996C52.3177 29.5996 50.4548 26.8587 50.4548 23.9969C50.4548 20.9378 52.0752 17.9962 55.3157 17.9962C58.6758 17.9962 60.0144 20.9378 60.0144 23.9969C60.0139 26.8978 58.5955 29.5996 55.3157 29.5996Z"
                                    fill="#652C8F" />
                            </g>
                            <defs>
                                <clipPath id="clip0_1_731">
                                    <rect width="117.647" height="35.1329" fill="white"
                                        transform="translate(0.176514 0.707275)" />
                                </clipPath>
                            </defs>
                        </svg>

                    </span>
                </div>
                <div class="col me-2 shadow mb-4 d-flex justify-content-center" style="background-color: #fff; ">
                    <span class="partners-card">
                        <svg width="113" height="39" viewBox="0 0 113 39" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1_737)">
                                <path
                                    d="M48.2674 19.7546C48.2674 24.9563 44.1625 28.7893 39.1248 28.7893C34.0872 28.7893 29.9823 24.9563 29.9823 19.7546C29.9823 14.5162 34.0872 10.7198 39.1248 10.7198C44.1625 10.7198 48.2674 14.5162 48.2674 19.7546ZM44.2652 19.7546C44.2652 16.504 41.8861 14.28 39.1248 14.28C36.3636 14.28 33.9845 16.504 33.9845 19.7546C33.9845 22.9726 36.3636 25.2292 39.1248 25.2292C41.8861 25.2292 44.2652 22.9685 44.2652 19.7546Z"
                                    fill="#EA4335" />
                                <path
                                    d="M67.9905 19.7546C67.9905 24.9563 63.8856 28.7893 58.848 28.7893C53.8104 28.7893 49.7055 24.9563 49.7055 19.7546C49.7055 14.5203 53.8104 10.7198 58.848 10.7198C63.8856 10.7198 67.9905 14.5162 67.9905 19.7546ZM63.9884 19.7546C63.9884 16.504 61.6093 14.28 58.848 14.28C56.0868 14.28 53.7077 16.504 53.7077 19.7546C53.7077 22.9726 56.0868 25.2292 58.848 25.2292C61.6093 25.2292 63.9884 22.9685 63.9884 19.7546Z"
                                    fill="#FBBC05" />
                                <path
                                    d="M86.892 11.2657V27.4859C86.892 34.1581 82.9227 36.8832 78.2302 36.8832C73.813 36.8832 71.1545 33.9544 70.1519 31.5592L73.6363 30.1213C74.2568 31.5918 75.7771 33.3271 78.2261 33.3271C81.2298 33.3271 83.0911 31.49 83.0911 28.0317V26.7323H82.9514C82.0557 27.828 80.3299 28.7853 78.1521 28.7853C73.5952 28.7853 69.4205 24.8504 69.4205 19.7872C69.4205 14.6873 73.5952 10.7198 78.1521 10.7198C80.3258 10.7198 82.0516 11.6771 82.9514 12.7402H83.0911V11.2698H86.892V11.2657ZM83.3747 19.7872C83.3747 16.6059 81.2339 14.28 78.5096 14.28C75.7484 14.28 73.435 16.6059 73.435 19.7872C73.435 22.9359 75.7484 25.2292 78.5096 25.2292C81.2339 25.2292 83.3747 22.9359 83.3747 19.7872Z"
                                    fill="#4285F4" />
                                <path d="M93.1582 1.75806V28.235H89.2546V1.75806H93.1582Z" fill="#34A853" />
                                <path
                                    d="M108.37 22.7285L111.476 24.7814C110.474 26.2519 108.058 28.7856 103.883 28.7856C98.7054 28.7856 94.8389 24.8181 94.8389 19.7508C94.8389 14.378 98.7383 10.7161 103.435 10.7161C108.164 10.7161 110.478 14.4473 111.234 16.4636L111.649 17.4901L99.4656 22.4922C100.398 24.3048 101.849 25.2295 103.883 25.2295C105.921 25.2295 107.334 24.2356 108.37 22.7285ZM98.8082 19.4779L106.952 16.1255C106.504 14.9972 105.157 14.211 103.57 14.211C101.537 14.211 98.7054 15.9911 98.8082 19.4779Z"
                                    fill="#EA4335" />
                                <path
                                    d="M15.2066 17.4044V13.5713H28.2362C28.3636 14.2394 28.4293 15.0296 28.4293 15.885C28.4293 18.7608 27.6363 22.3169 25.0805 24.8505C22.5946 27.4167 19.4183 28.7854 15.2107 28.7854C7.41181 28.7854 0.853851 22.4879 0.853851 14.7567C0.853851 7.02541 7.41181 0.727966 15.2107 0.727966C19.5251 0.727966 22.5987 2.4062 24.9079 4.5936L22.1795 7.29832C20.5236 5.75859 18.2801 4.56101 15.2066 4.56101C9.51151 4.56101 5.05736 9.11097 5.05736 14.7567C5.05736 20.4024 9.51151 24.9523 15.2066 24.9523C18.9006 24.9523 21.0044 23.4818 22.3521 22.1458C23.4451 21.0623 24.1642 19.5144 24.4477 17.4003L15.2066 17.4044Z"
                                    fill="#4285F4" />
                            </g>
                            <defs>
                                <clipPath id="clip0_1_737">
                                    <rect width="111.765" height="37.4751" fill="white"
                                        transform="translate(0.705811 0.536377)" />
                                </clipPath>
                            </defs>
                        </svg>

                    </span>
                </div>

                <div class="col me-2 shadow mb-4 d-flex justify-content-center" style="background-color: #fff; ">
                    <span class="partners-card  ">
                        <svg width="144" height="31" viewBox="0 0 144 31" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1_749)">
                                <path
                                    d="M50.8983 17.5396L50.0428 19.9472H49.9715C49.829 19.4043 49.5676 18.5782 49.1398 17.5868L44.5536 6.13913H40.0623V24.3846H43.0327V13.1258C43.0327 12.4177 43.0327 11.6151 43.0089 10.6238C42.9852 10.1281 42.9377 9.75046 42.9139 9.46722H42.9852C43.1278 10.1753 43.2941 10.6946 43.4129 11.025L48.926 24.3374H51.0171L56.4827 10.907C56.6015 10.6002 56.7203 9.98649 56.8391 9.46722H56.9104C56.8391 10.8126 56.7916 12.0164 56.7678 12.7481V24.3138H59.9283V6.09192H55.6034L50.8983 17.5396ZM62.9225 11.2375H66.0117V24.3138H62.9225V11.2375ZM64.4908 5.71426C63.968 5.71426 63.5403 5.90309 63.1839 6.23354C62.8274 6.56399 62.6373 6.98885 62.6373 7.50813C62.6373 8.0038 62.8274 8.42866 63.1839 8.75911C63.5403 9.08956 63.968 9.25479 64.4908 9.25479C65.0136 9.25479 65.4651 9.06596 65.7978 8.75911C66.1543 8.42866 66.3444 8.0038 66.3444 7.50813C66.3444 7.01246 66.1543 6.58759 65.7978 6.23354C65.4889 5.90309 65.0374 5.71426 64.4908 5.71426ZM76.9665 11.1195C76.3962 11.0014 75.8021 10.9306 75.2318 10.9306C73.8298 10.9306 72.5465 11.2375 71.4772 11.8512C70.4079 12.4649 69.5524 13.3146 69.0058 14.3767C68.4355 15.4625 68.1504 16.7135 68.1504 18.1533C68.1504 19.4043 68.4355 20.5136 68.9821 21.5286C69.5286 22.5199 70.289 23.3225 71.3109 23.8653C72.2851 24.4082 73.4258 24.6915 74.709 24.6915C76.1823 24.6915 77.4418 24.3846 78.4398 23.8181L78.4636 23.7945V20.9621L78.3448 21.0565C77.8933 21.387 77.3705 21.6702 76.8477 21.8354C76.3011 22.0243 75.8021 22.1187 75.3744 22.1187C74.1387 22.1187 73.1644 21.7646 72.4753 20.9857C71.7624 20.2304 71.4059 19.1919 71.4059 17.8937C71.4059 16.5483 71.7624 15.4861 72.499 14.7072C73.2357 13.9283 74.21 13.527 75.3981 13.527C76.3962 13.527 77.418 13.8575 78.3448 14.5184L78.4636 14.6128V11.6151L78.4398 11.5915C78.0358 11.4263 77.5843 11.2375 76.9665 11.1195ZM87.1609 11.025C86.4005 11.025 85.6876 11.2611 85.0697 11.7568C84.5469 12.1816 84.1905 12.7953 83.8816 13.527H83.8578V11.2375H80.7686V24.3138H83.8578V17.634C83.8578 16.5011 84.0954 15.5569 84.6182 14.8724C85.141 14.1643 85.8064 13.8103 86.6143 13.8103C86.8995 13.8103 87.1846 13.8811 87.5411 13.9283C87.8738 14.0227 88.1114 14.1171 88.2777 14.2351L88.3966 14.3295V11.2611L88.3253 11.2375C88.1114 11.0959 87.6837 11.025 87.1609 11.025ZM95.573 10.9542C93.4106 10.9542 91.6759 11.5915 90.464 12.8425C89.2283 14.0935 88.6342 15.8166 88.6342 17.9881C88.6342 20.018 89.252 21.6702 90.4402 22.874C91.6284 24.0542 93.2442 24.6679 95.2641 24.6679C97.379 24.6679 99.0662 24.0306 100.278 22.756C101.514 21.4814 102.108 19.7819 102.108 17.6812C102.108 15.6041 101.538 13.9519 100.373 12.7481C99.2563 11.5443 97.6167 10.9542 95.573 10.9542ZM98.0444 21.0093C97.4741 21.741 96.5711 22.0951 95.4542 22.0951C94.3374 22.0951 93.4344 21.741 92.7927 20.9621C92.1511 20.2304 91.8422 19.1683 91.8422 17.8229C91.8422 16.4302 92.1749 15.3681 92.7927 14.6128C93.4344 13.8575 94.3136 13.4798 95.4305 13.4798C96.5236 13.4798 97.379 13.8339 97.9969 14.5656C98.6147 15.2973 98.9474 16.3594 98.9474 17.752C98.8999 19.1682 98.6385 20.2776 98.0444 21.0093ZM108.999 16.6663C108.025 16.265 107.407 15.9582 107.122 15.6985C106.884 15.4625 106.765 15.1321 106.765 14.7072C106.765 14.3531 106.908 13.9991 107.265 13.7631C107.621 13.527 108.025 13.409 108.619 13.409C109.142 13.409 109.688 13.5034 110.211 13.645C110.734 13.7867 111.209 13.9991 111.589 14.2823L111.708 14.3767V11.4971L111.637 11.4735C111.28 11.3319 110.805 11.1903 110.235 11.0723C109.665 10.9778 109.142 10.9306 108.714 10.9306C107.241 10.9306 106.029 11.2847 105.078 12.0636C104.128 12.7953 103.676 13.7867 103.676 14.9432C103.676 15.5569 103.771 16.0998 103.985 16.5483C104.199 16.9967 104.508 17.4216 104.936 17.7756C105.363 18.1061 105.981 18.4837 106.837 18.8378C107.55 19.1446 108.096 19.3807 108.429 19.5695C108.762 19.7583 108.975 19.9708 109.142 20.136C109.261 20.3248 109.332 20.5609 109.332 20.8677C109.332 21.741 108.667 22.1659 107.312 22.1659C106.789 22.1659 106.243 22.0715 105.601 21.859C104.959 21.6466 104.365 21.3398 103.866 20.9857L103.748 20.8913V23.8889L103.819 23.9126C104.27 24.125 104.817 24.2666 105.482 24.4318C106.148 24.5498 106.742 24.6443 107.265 24.6443C108.857 24.6443 110.164 24.2902 111.09 23.5113C112.041 22.756 112.54 21.7882 112.54 20.5373C112.54 19.6639 112.302 18.885 111.78 18.2949C111.09 17.7284 110.235 17.1384 108.999 16.6663ZM120.691 10.9542C118.528 10.9542 116.794 11.5915 115.582 12.8425C114.37 14.0935 113.752 15.8166 113.752 17.9881C113.752 20.018 114.37 21.6702 115.558 22.874C116.746 24.0542 118.362 24.6679 120.382 24.6679C122.497 24.6679 124.184 24.0306 125.396 22.756C126.631 21.4814 127.226 19.7819 127.226 17.6812C127.226 15.6041 126.655 13.9519 125.491 12.7481C124.374 11.5443 122.734 10.9542 120.691 10.9542ZM123.138 21.0093C122.568 21.741 121.665 22.0951 120.548 22.0951C119.407 22.0951 118.528 21.741 117.887 20.9621C117.245 20.2304 116.936 19.1683 116.936 17.8229C116.936 16.4302 117.269 15.3681 117.887 14.6128C118.528 13.8575 119.407 13.4798 120.524 13.4798C121.594 13.4798 122.473 13.8339 123.091 14.5656C123.709 15.2973 124.041 16.3594 124.041 17.752C124.041 19.1682 123.732 20.2776 123.138 21.0093ZM143.741 13.7631V11.2375H140.628V7.36651L140.533 7.39011L137.586 8.26344L137.515 8.28704V11.2375H132.857V9.58523C132.857 8.82992 133.048 8.23984 133.38 7.86218C133.713 7.48452 134.212 7.2957 134.83 7.2957C135.258 7.2957 135.709 7.39011 136.208 7.60254L136.327 7.67335V5.00616L136.256 4.98256C135.828 4.84093 135.257 4.74652 134.521 4.74652C133.594 4.74652 132.786 4.95895 132.049 5.313C131.313 5.71426 130.766 6.25714 130.362 6.98885C129.958 7.69696 129.744 8.49948 129.744 9.42001V11.2375H127.582V13.7394H129.744V24.3138H132.857V13.7631H137.515V20.49C137.515 23.2517 138.822 24.6443 141.436 24.6443C141.864 24.6443 142.315 24.5734 142.743 24.5026C143.194 24.4082 143.527 24.2902 143.717 24.1958L143.741 24.1722V21.6466L143.622 21.741C143.432 21.859 143.266 21.9535 142.981 22.0243C142.743 22.0951 142.529 22.1187 142.363 22.1187C141.745 22.1187 141.317 21.9771 141.008 21.623C140.723 21.2926 140.58 20.7497 140.58 19.9472V13.7631H143.741Z"
                                    fill="#737373" />
                                <path d="M0.235291 0.00219727H14.8021V14.4711H0.235291V0.00219727Z" fill="#F25022" />
                                <path d="M16.3228 0.00219727H30.8897V14.4711H16.3228V0.00219727Z" fill="#7FBA00" />
                                <path d="M0.235291 15.9818H14.8021V30.4507H0.235291V15.9818Z" fill="#00A4EF" />
                                <path d="M16.3228 15.9818H30.8897V30.4507H16.3228V15.9818Z" fill="#FFB900" />
                            </g>
                            <defs>
                                <clipPath id="clip0_1_749">
                                    <rect width="143.529" height="30.4485" fill="white"
                                        transform="translate(0.235291 0.00219727)" />
                                </clipPath>
                            </defs>
                        </svg>

                    </span>
                </div>

                <div class="col me-2 shadow mb-4 d-flex justify-content-center" style="background-color: #fff; ">
                    <span class="partners-card  ">
                        <svg width="116" height="41" viewBox="0 0 116 41" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1_755)">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M101.972 18.8689L94.6341 31.5569L88.3735 31.5818L101.972 7.70013L115.52 31.5818H109.16L101.972 18.8676V18.8689ZM82.2133 26.0584H89.2252L85.9696 31.5818H76.8304L76.8552 24.8564V7.84695H82.2393L82.2145 26.0584H82.2133ZM62.9827 7.8482C69.6685 7.87308 75.0775 13.1738 75.0527 19.7262C75.0279 26.255 69.619 31.5569 62.9319 31.5569C56.2709 31.532 50.862 26.2313 50.862 19.6777C50.8868 13.1489 56.2957 7.8482 62.9827 7.8482ZM62.9579 26.0347C66.5382 26.0347 69.4169 23.2114 69.4169 19.7262C69.4429 16.2422 66.5382 13.394 62.9827 13.394C59.426 13.3691 56.5213 16.2173 56.5213 19.7025C56.4965 23.1866 59.4012 26.0347 62.9567 26.0347H62.9579ZM40.8958 17.8411C40.8215 16.8581 40.5698 15.5578 40.1942 14.3073C39.4212 11.7243 38.0774 9.3497 36.263 7.36044C35.3109 6.33016 34.2348 5.37206 32.6306 4.24349C31.4077 3.63777 30.2054 2.99121 29.0255 2.30489C28.2494 1.86316 27.3221 1.3219 26.096 0.929947C24.6423 0.58553 23.1562 0.396589 21.6628 0.366284C20.2123 0.316512 18.7581 0.440941 17.356 0.709708C15.8783 0.954833 14.6509 1.34678 13.0232 1.73998C9.3412 3.33516 6.48736 5.74037 4.03271 8.93197C-4.53129 20.9331 3.20705 37.746 17.506 39.7331C19.8602 40.0529 22.2145 39.9297 24.4422 39.4146L26.0204 38.9977C26.07 38.9729 26.1456 38.948 26.1952 38.948L27.999 38.2611C28.0982 38.2113 28.1738 38.1865 28.2742 38.1379L29.0255 37.7945C30.467 37.0805 31.8201 36.1993 33.0571 35.1691C31.9311 36.1959 30.7064 37.1083 29.4011 37.8928L29.4755 37.9426C29.7272 37.8679 29.9516 37.7945 30.202 37.746C30.202 37.746 30.202 38.1379 30.1524 38.0645C29.752 38.3594 30.378 38.0894 31.1789 37.6713C31.981 37.2545 32.7571 36.7381 33.4575 36.1496C34.4852 35.291 35.3865 34.3578 36.6634 32.8373C37.9651 30.554 39.5941 28.5656 40.3454 25.8904C40.5958 25.1787 40.8202 24.345 40.9715 23.4852C41.1202 22.6266 41.2219 21.7432 41.2219 20.8348C41.1971 19.9265 41.0967 18.9933 40.8958 17.8411ZM22.3645 38.016C26.7469 37.3279 30.4276 34.8991 33.4327 31.5855C34.2596 30.3823 34.9105 29.2774 35.7113 28.0754C36.713 25.6204 36.6386 23.4367 36.9634 21.8912C37.3651 19.0916 36.413 16.8345 35.6121 14.4292C34.3848 11.6308 32.7571 9.54541 29.902 7.92534C22.6893 3.45834 12.8732 4.70885 8.19073 11.3857C8.16594 11.3857 8.03949 11.5574 7.78906 11.9008C8.11511 10.5272 8.94201 9.71712 9.76766 8.93073C12.2223 6.91871 15.0774 5.32229 18.3329 4.53839C22.0149 4.14519 25.6696 4.53839 28.9499 6.13357C33.8592 8.93073 37.1147 13.3256 37.9403 18.5267V23.3384C36.9138 31.2172 30.1524 37.206 22.3645 38.016ZM40.3702 20.0982C40.1942 8.56366 28.7503 0.783121 17.6064 2.35466C14.3509 3.16345 10.7942 4.78351 8.26512 7.0419C7.03779 7.85069 6.46256 9.34881 5.23524 10.5508C0.325939 17.7428 1.17887 26.9468 7.28822 32.5436C8.07189 33.3212 8.90866 34.043 9.79245 34.7037C4.6848 31.634 2.38016 26.9941 1.5793 21.3512C1.5793 19.338 1.97973 17.3496 2.40495 15.3376C5.26127 6.52552 14.2505 0.119915 24.0431 1.73998C25.6708 2.13318 27.2986 2.55001 28.9524 2.94321C31.0053 3.752 33.0335 4.95522 34.6613 6.55165C36.289 8.14558 37.5164 10.1588 38.7437 12.146C39.5693 13.7424 39.971 15.7544 40.3714 17.3496C40.4458 18.2579 40.4458 19.1911 40.3714 20.0995L40.3702 20.0982Z"
                                    fill="black" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M30.203 20.2707C30.203 25.2292 26.0462 29.2544 20.9125 29.2544C15.7801 29.2544 11.622 25.2292 11.622 20.2707C11.622 15.3134 15.7788 11.2881 20.9125 11.2881C26.0462 11.2881 30.203 15.3134 30.203 20.2719V20.2707Z"
                                    fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M30.2539 18.7493C30.1287 18.0625 29.9279 17.5224 29.7283 16.7622C28.9262 15.0923 27.7497 13.7921 26.1963 12.6871C20.387 8.83481 12.3982 12.5403 11.5477 19.1189C11.2229 21.7207 12.149 24.2242 13.8016 26.1391C13.3007 25.6228 12.7503 25.084 12.3746 24.4693L12.325 24.5191C12.3746 24.6659 12.5755 24.7642 12.6251 24.911C12.6251 24.911 12.4242 24.911 12.4751 24.8861C12.3251 24.7157 12.4503 24.9857 12.6747 25.3527C12.8755 25.7211 13.1259 26.0657 13.4259 26.3843C13.8524 26.8509 14.3024 27.2677 15.0537 27.8326C16.157 28.3963 17.1327 29.1329 18.4096 29.4763C18.7604 29.5759 19.1609 29.6729 19.5625 29.7463C19.9878 29.821 20.3882 29.8459 20.8395 29.8459C21.2647 29.8459 21.7159 29.7961 22.2664 29.6966C22.834 29.6295 23.395 29.515 23.9437 29.3544C25.1693 28.9841 26.2983 28.3468 27.2501 27.4879C27.7261 27.0475 28.403 26.4826 28.9274 25.7459C29.3539 24.9123 29.4035 24.4942 29.6043 24.1259C29.8039 23.7576 30.0543 23.3407 30.2304 22.7758C30.3738 22.1057 30.4576 21.424 30.4808 20.7389C30.456 20.0521 30.4064 19.3889 30.2552 18.7505L30.2539 18.7493ZM24.2933 14.1853C25.145 14.6755 25.2702 14.7489 24.819 14.4304C25.4711 14.5772 25.8715 14.9455 26.2719 15.3138C27.2488 16.4187 28.0497 17.719 28.4501 19.2159C28.6757 20.9094 28.4997 22.6029 27.7745 24.101C26.4728 26.383 24.3937 27.9048 21.9143 28.3216C21.6391 28.3216 21.3391 28.3216 21.0626 28.3465C21.7643 28.2233 22.2156 27.7816 23.4925 27.315C24.8686 26.8247 26.4219 24.5427 27.1744 23.2163C29.3774 19.6079 26.7728 16.2707 24.2933 14.1853ZM19.5861 28.3701C15.7802 27.9782 12.8495 24.8613 12.449 21.2528C12.7986 23.2661 14.0012 24.8115 15.6289 26.1864C16.2054 26.5547 17.0558 27.0699 17.6323 27.4382C18.6092 27.8065 19.1844 28.1997 20.1365 28.3714H19.5861V28.3701ZM29.8274 21.8177C29.6539 22.5792 29.4778 23.3146 29.3018 24.0761C28.9262 25.0093 28.3757 25.9662 27.6245 26.7264C26.8732 27.4879 25.9211 28.0765 24.9702 28.6414C24.2189 29.0334 23.2668 29.23 22.4908 29.4253C22.0395 29.4751 21.5139 29.2785 21.0626 29.2548C26.6228 29.1068 30.4287 23.9293 29.6031 18.7991C29.2014 17.3022 28.4005 16.0007 27.4236 14.7004C27.0232 14.1355 26.2459 13.7921 25.6707 13.2271C22.1895 11.0434 17.5827 11.4851 14.9533 14.357C14.5846 14.7343 14.2412 15.1359 13.9255 15.5589C15.3289 13.4972 17.5827 12.0501 20.2865 11.632C21.2387 11.6071 22.2156 11.78 23.1664 11.9518C27.374 13.2271 30.5043 17.3022 29.8274 21.819V21.8177Z"
                                    fill="#D7DF23" />
                            </g>
                            <defs>
                                <clipPath id="clip0_1_755">
                                    <rect width="115.294" height="39.8173" fill="white"
                                        transform="translate(0.353027 0.317627)" />
                                </clipPath>
                            </defs>
                        </svg>


                    </span>
                </div>

                <div class="col me-2 shadow mb-4 d-flex justify-content-center" style="background-color: #fff; ">
                    <span class="partners-card  ">
                        <svg width="142" height="34" viewBox="0 0 142 34" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1_760)">
                                <path
                                    d="M50.6527 12.494V14.3523H50.71C51.3843 13.3574 52.5038 12.1857 54.9852 12.1857C56.9157 12.1857 58.3966 13.1601 59.0313 14.6319H59.0886C59.6307 13.8878 60.2522 13.3245 60.9485 12.9257C61.7727 12.4529 62.6895 12.1816 63.8443 12.1816C66.4579 12.1816 68.7718 13.8672 68.7718 18.1183V26.1806H64.7875V18.6816C64.7875 16.5272 64.0029 15.2815 62.3722 15.2815C61.1777 15.2815 60.3095 16.0298 59.9789 16.9507C59.8643 17.2673 59.8114 17.699 59.8114 18.0608V26.1847H55.827V18.3773C55.827 16.5478 55.0734 15.2774 53.4646 15.2774C52.1776 15.2774 51.3711 16.223 51.0405 17.0329C50.8995 17.3783 50.8554 17.7771 50.8554 18.1512V26.1806H46.8666V12.494H50.6527ZM89.3371 12.494V15.0759H89.4473C90.179 13.1025 91.9155 12.1857 93.4405 12.1857C93.824 12.1857 94.0355 12.2145 94.344 12.272V15.8571C93.9782 15.8078 93.6388 15.7584 93.1628 15.7584C91.4351 15.7584 90.2319 16.6958 89.9277 18.1635C89.8616 18.4678 89.8396 18.7967 89.8396 19.1749V26.1847H85.7495V12.494H89.3371ZM99.8975 7.95923V12.2679H103.353V15.7543H99.8975V20.8976C99.8975 22.5627 100.351 23.3685 101.7 23.3685C102.335 23.3685 102.802 23.2945 103.207 23.1999L103.26 26.0902C102.718 26.2793 101.563 26.4849 100.391 26.4849C99.0116 26.4849 97.8612 26.0367 97.1604 25.3419C96.3583 24.5484 95.988 23.2493 95.988 21.3992V7.95923H99.8975ZM44.0899 26.1806H40.1232V7.95923H44.0899V26.1806ZM33.5119 21.2923C33.5119 21.5431 33.4899 21.8062 33.415 22.0323C33.1065 22.982 32.0531 23.7837 30.7396 23.7837C29.6422 23.7837 28.7695 23.204 28.7695 21.9747C28.7695 20.0959 30.9909 19.5737 33.5164 19.5861V21.2923H33.5119ZM37.4743 18.0155C37.4743 14.9115 36.0551 12.1857 31.2553 12.1857C28.7915 12.1857 26.8346 12.8312 25.768 13.4067L26.5481 15.8982C27.5222 15.3226 29.078 14.8498 30.5501 14.8498C32.9875 14.8457 33.3841 16.1367 33.3841 16.963V17.1604C28.0731 17.1522 24.719 18.8666 24.719 22.3612C24.719 24.495 26.4247 26.4931 29.3954 26.4931C31.2245 26.4931 32.7495 25.8147 33.6662 24.7252H33.7544C33.7544 24.7252 34.3626 27.0892 37.7035 26.1847C37.5272 25.198 37.4699 24.1496 37.4699 22.8875V18.0155H37.4743ZM4.79278 7.95923C5.20268 9.88744 6.36625 15.4871 6.36625 15.4871C6.85548 17.7894 7.30505 20.2028 7.64442 22.1104H7.70613C8.03669 20.0835 8.55677 18.1635 9.11212 15.7872L11.0734 7.95923H15.4148L17.2483 15.9887C17.7287 18.2211 18.1122 19.9437 18.4163 22.02H18.4736C18.8042 19.9232 19.2361 18.1307 19.7077 15.8365L21.4707 7.95923H25.6358L20.4746 26.1806C17.1866 26.8508 15.9261 25.6174 15.4765 23.6604C15.027 21.6993 14.1455 17.9703 14.1455 17.9703C13.6915 15.927 13.3389 14.488 13.0921 12.3912H13.0304C12.6778 14.4675 12.3075 15.9229 11.761 17.9662L9.59694 26.1847C6.23844 26.8097 5.07486 25.8846 4.43137 23.3726C3.87603 21.2224 0.411743 7.96334 0.411743 7.96334H4.79278V7.95923ZM79.1382 21.2923C79.1382 21.5431 79.1162 21.8062 79.0413 22.0323C78.7327 22.982 77.6793 23.7837 76.3659 23.7837C75.2685 23.7837 74.3958 23.204 74.3958 21.9747C74.3958 20.0959 76.6171 19.5737 79.1426 19.5861V21.2923H79.1382ZM83.1006 18.0155C83.1006 14.9115 81.6813 12.1857 76.8816 12.1857C74.4178 12.1857 72.4609 12.8312 71.3943 13.4067L72.1744 15.8982C73.1485 15.3226 74.7043 14.8498 76.1764 14.8498C78.6093 14.8457 79.0104 16.1367 79.0104 16.963V17.1604C73.7038 17.1522 70.3497 18.8666 70.3497 22.3612C70.3497 24.495 72.0598 26.4931 75.026 26.4931C76.8507 26.4931 78.3801 25.8147 79.2925 24.7252H79.385C79.385 24.7252 79.9933 27.0892 83.3341 26.1847C83.1578 25.198 83.1006 24.1496 83.1006 22.8875V18.0155Z"
                                    fill="#041E42" />
                                <path
                                    d="M119.433 19.9055C119.824 20.571 119.797 21.3137 119.38 21.6528L112.166 26.5942C111.415 27.0192 110.29 26.504 109.653 25.4265C109.012 24.3446 109.126 23.1382 109.877 22.7132L117.864 19.0813C118.365 18.8924 119.042 19.2401 119.433 19.9055ZM128.927 19.9055C129.322 19.2401 129.994 18.8967 130.495 19.077L138.487 22.7089C139.238 23.1339 139.348 24.3403 138.711 25.4222C138.069 26.4997 136.94 27.0106 136.193 26.5899L128.979 21.6485C128.566 21.3137 128.536 20.5667 128.927 19.9055ZM124.178 22.5844C124.964 22.5844 125.61 22.9794 125.698 23.4989L126.475 32.0765C126.475 32.9265 125.46 33.622 124.182 33.622C122.908 33.622 121.889 32.9265 121.889 32.0765L122.662 23.4989C122.75 22.9794 123.396 22.5844 124.178 22.5844ZM128.979 12.8048L136.193 7.8591C136.94 7.43408 138.069 7.94496 138.711 9.02682C139.348 10.1087 139.238 11.315 138.487 11.7401L130.495 15.3763C129.994 15.5566 129.318 15.2132 128.927 14.5477C128.536 13.8823 128.566 13.1396 128.979 12.8048ZM117.864 15.3763L109.877 11.7401C109.13 11.315 109.016 10.1087 109.653 9.02682C110.29 7.94496 111.419 7.43408 112.166 7.8591L119.38 12.8048C119.797 13.1353 119.824 13.8823 119.433 14.5477C119.042 15.2132 118.365 15.5566 117.864 15.3763ZM122.662 10.9544L121.889 2.37681C121.889 1.52678 122.903 0.831299 124.182 0.831299C125.46 0.831299 126.475 1.52678 126.475 2.37681L125.698 10.9544C125.61 11.4696 124.964 11.8689 124.178 11.8689C123.396 11.8689 122.75 11.4696 122.662 10.9544ZM140.661 26.5598V26.3452H140.859C140.925 26.3452 140.969 26.3881 140.969 26.4525C140.969 26.5126 140.925 26.5598 140.859 26.5598H140.661ZM140.499 26.9505C140.499 26.972 140.516 26.9934 140.543 26.9934H140.626C140.648 26.9934 140.67 26.972 140.67 26.9505V26.7058H140.806L140.916 26.9634C140.925 26.9806 140.938 26.9934 140.956 26.9934H141.057C141.087 26.9934 141.109 26.9634 141.096 26.9333C141.057 26.8561 141.017 26.7745 140.978 26.6929C141.043 26.6715 141.145 26.6071 141.145 26.4525C141.145 26.2894 141.008 26.1949 140.872 26.1949H140.543C140.521 26.1949 140.499 26.2164 140.499 26.2379V26.9505ZM140.143 26.5942C140.143 26.2464 140.433 25.9631 140.789 25.9631C141.145 25.9631 141.434 26.2421 141.434 26.5942C141.434 26.9419 141.149 27.2253 140.789 27.2253C140.428 27.2253 140.143 26.9419 140.143 26.5942ZM139.989 26.5942C139.989 27.0235 140.345 27.3755 140.789 27.3755C141.228 27.3755 141.588 27.0235 141.588 26.5942C141.588 26.1649 141.228 25.8128 140.789 25.8128C140.345 25.8128 139.989 26.1649 139.989 26.5942Z"
                                    fill="#FFC124" />
                            </g>
                            <defs>
                                <clipPath id="clip0_1_760">
                                    <rect width="141.176" height="32.7907" fill="white"
                                        transform="translate(0.411743 0.831299)" />
                                </clipPath>
                            </defs>
                        </svg>


                    </span>
                </div>
                <div class="col me-2 shadow mb-4 d-flex justify-content-center" style="background-color: #fff; ">
                    <span class="partners-card">
                        <svg width="100" height="38" viewBox="0 0 100 38" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1_763)">
                                <path
                                    d="M81.8397 36.3715C91.2261 36.3715 98.8635 28.646 98.8635 19.1517C98.8635 9.65175 91.2261 1.93188 81.8397 1.93188C72.4515 1.93188 64.816 9.65175 64.816 19.1517C64.816 28.646 72.4515 36.3715 81.8397 36.3715ZM81.8397 13.0114C85.1848 13.0114 87.909 15.7658 87.909 19.1498C87.909 22.5338 85.1829 25.2845 81.8379 25.2845C78.4909 25.2845 75.7705 22.5338 75.7705 19.1479C75.7705 15.7602 78.4928 13.0076 81.8379 13.0076L81.8397 13.0114ZM17.6119 36.3715C26.9983 36.3715 34.6356 28.646 34.6356 19.1517C34.6356 9.65175 26.9983 1.93188 17.6119 1.93188C8.22738 1.93188 0.588135 9.65175 0.588135 19.1517C0.588135 28.646 8.22738 36.3715 17.6119 36.3715ZM17.6119 13.0114C20.9588 13.0114 23.6811 15.7658 23.6811 19.1498C23.6811 22.5338 20.9588 25.2845 17.6119 25.2845C14.2668 25.2845 11.5464 22.5338 11.5464 19.1479C11.5464 15.7602 14.2687 13.0076 17.6119 13.0076V13.0114ZM49.7165 12.6235L44.49 2.15674H32.2527L43.6827 25.054V35.8337H55.7522V25.054L67.1821 2.15674H54.9392L49.7183 12.6235H49.7165Z"
                                    fill="#EE2E24" />
                            </g>
                            <defs>
                                <clipPath id="clip0_1_763">
                                    <rect width="98.8235" height="37.4751" fill="white"
                                        transform="translate(0.588135 0.489502)" />
                                </clipPath>
                            </defs>
                        </svg>


                    </span>
                </div>
            </div>

    </section>

    <!-- partners section ends -->
    <!-- faq section -->
    <section class="faq-section gap--100">
        <div class="container">
            <h2 class="faq-heading mb-5 text-center" style="color:#2d3134 !important"> <span
                    {{-- class="gradient">{{$data->s7h1}}</span> </h2> --}}
            <h2 class="services-heading">{{ strtok($data->s7h1, ' ') }} <span class="gradient">{{ substr($data->s7h1, strpos($data->s7h1, ' ')+1) }}</span></h2>

            <div class="accordion row">
                <div class="col-1 d-flex justify-content-center">
                    <span class="item-count">01</span>
                </div>
                <div class="col-11">

                    <div class=" accordion-item border-0 ">
                        <button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">Why is
                                the moon sometimes
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
                                the sky
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
                                ever discover
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
                        <small> {{$data->s7btn}} <i class="fas fa-long-arrow-alt-right"></i> </small>
                    </a>
                </div>
            </div>
        </div>

    </section>




    <!-- faq section ends -->



    <!-- contact us section -->

    <section class="contact-section gap--100">
        <img src="{{ 'asset/img/02.png' }}alt=" class="contact-img-bg">
        <div class="container pt-5">

            <div class="row d-flex justify-content-center">
                <div class="col-md-6 mb-5   d-flex justify-content-center flex-column align-items-center">
                    <h6 class="contact-heading">{{$data->s8h1}}</h6>
                    <h1 class="section-description text-center">{{$data->s8h2}} <br><span class="">
                            </span>  </h1>
                    <!-- <a href="#" class="btn new-button">Let’s talk!<span><i class="fa-solid fa-right-long"></i></span></a> -->
                    <a href="#0" class="btn btn-icon-circle rounded-pill bg-blue7 fw-bold text-white me-4"
                        target="_blank">
                        <small>{{$data->s8btn}}<i class="fas fa-long-arrow-alt-right"></i> </small>
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
