<x-policyspot.header/>
</head>
@foreach ($content as $contents )
<x-policyspot.nav :contents="$contents" :category="$category"/>
@endforeach

 
<body>
    @foreach ($contact as $contacts)


        <div class="container ">
            <div class="row">
                <div class="col-md-5 header-col  d-md-flex justify-content-center flex-column align-items-start"
                    style="">
                    <h1 class="color-border mb-25"><span style="color: #000;font-weight: 400;">Home</span> | Contact </h1>
                    <h1 class="about-main-heading 39">
                        <span class="gradient">{{ strtok($contacts->s1h1, ' ') }}</span>  {{ substr($contacts->s1h1, strpos($contacts->s1h1, ' ')+1) }}
                    {{-- class="gradient">{{ strtok($faqs->s2h1, ' ') }}</span>  {{ substr($faqs->s2h1, strpos($faqs->s5h1, ' ')+1) }}</h2> --}}

                    </h1>
                    <p class="insurance-header-content mb-25">
                        {{-- {{ strtok($contacts->s1p1, ' ') }}<strong style="color:#8169F1"> {{ substr($contacts->s1p1, strpos($contacts->s1p1, ' ')+1) }}</strong> to <strong style="color:#8169F1">Saturday</strong> between <strong style="color:#8169F1">8:00</strong> and <strong style="color:#8169F1">20:00</strong>. If you need to get in touch with us, about anything. You can contact us online, by phone, or via email and we will be happy to help. --}}
                        <span class="gradient">{{ strtok($contacts->s1p1, ' ') }} </span> {{ substr($contacts->s1p1, strpos($contacts->s1p1, ' ')+1) }}
                    </p>
                    <a href="#0" class="btn btn-icon-circle rounded-pill bg-blue7 fw-bold text-white me-4"
                        target="_blank">
                        <small>{{$contacts->s1btn}}<i class="fas fa-long-arrow-alt-right"></i> </small>
                    </a>
                    <!-- <button class="btn  new-button">Get Started Now <span><i class="fa-solid fa-right-long"></i></span></button> -->

                </div>
                <div class="col-md-7 header-coltext-center text-center   header-image  ">
                    {{-- <img src="{{ 'asset/img/contact-header.png' }}"alt=""> --}}
                    <img src="{{ asset('banner/img/' .$contacts->s1img)}}"alt="">

                </div>
            </div>
        </div>
        <!-- <img src="./img/header_4_wave.png" class="wave" alt=""> -->
    </section>

    <!-- headers ends -->





    <!--  contact section starts -->

    <section class="contact-form style-7 life-insurance-slider section-padding gap--100" style="background-color: #fff;">



        <div class="row">
            <div class="col-md-12">
                <div class="section-head text-center style-4 mb-40">
                    <div class="top-title">
                        <img src="{{ 'asset/img/border.png' }}" alt="">
                        <small class="feature-text"> {{$contacts->s2sh1}}</small>
                        <img src="{{ 'asset/img/border.png' }}" alt="">
                    </div>
                    <h2 class="features-heading-second">{{ strtok($contacts->s2h1, ' ') }} <span class="gradient"> {{ substr($contacts->s2h1, strpos($contacts->s2h1, ' ')+1) }}</span>
                        {{-- <h2 class="features-heading-second">{{ strtok($contacts->s2h1, ' ') }} <span class="gradient"></span> {{ substr($contacts->s2h1, strpos($contacts->s2h1, ' ')+1) }}</h2> --}}
                        {{-- <span class="gradient">{{ strtok($contacts->s1h1, ' ') }}</span>  {{ substr($contacts->s2h1, strpos($contacts->s1h1, ' ')+1) }} --}}

                    </h2>
                </div>
            </div>

        </div>
        <section class="contact section-padding pt-0 style-6">
            <div class="container">
                <div class="content">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <form action="" class="form" method="post" style="position: relative;">
                                <img src="./img/telegram.png" alt="" class="telegram">
                    {{-- <img src="{{ asset('banner/img/' .$contacts->s1img)}}"alt=""> --}}

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group mb-20">
                                            <input type="text" name="fname" class="form-control" placeholder="First Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-20">
                                            <input type="text" name="lname" class="form-control" placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-20">
                                            <input type="text" name="email" class="form-control" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-20">
                                            <input type="text" name="website" class="form-control" placeholder="Phone Number">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-20">
                                            <select name="option" class="form-select">
                                                <option value="how can we help" selected>How can we help you?</option>
                                                <option value="option 1">option 1</option>
                                                <option value="option 2">option 2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea rows="10" class="form-control" placeholder="Your Message"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="row d-flex justify-content-center pt-20" >
                                            <div class="col-md-6 text-center ">

                                                <a href="#0" class="btn btn-icon-circle rounded-pill bg-blue7 fw-bold text-white me-4"
                                                target="_blank">
                                                <small> {{$contacts->s2btn}}<i class="fas fa-long-arrow-alt-right"></i> </small>
                                            </a>
                                        </div>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>


    </section>




    <!-- contact section ends -->















    <!--location section -->

    <section class="location-section ">

        <div class="container py-5">
            <div class="row d-flex justify-content-center gap-4 ">
                <div class="col-md-4  " style="border-right: 1px solid rgba(0, 0, 0, 0.5);">
                    <h1 class="location-heading mb-20"><span class="icon"><i class="fa-solid fa-location-dot"></i></span>{{$contacts->locationh1}}</h1>
                    <p class="location-description">
                        {{$contacts->locationp1}}
                        <br>
                        <br>
                        {{$contacts->contact}}
                    </p>
                </div>
                <div class="col-md-4">
                    <h1 class="location-heading mb-20"><span class="icon"><i class="fa-solid fa-location-dot"></i></span> {{$contacts->locationh1}}</h1>
                    <p class="location-description">
                        {{$contacts->locationp2}}
                        <br><br>
                        {{$contacts->contact}}
                    </p>
                </div>
            </div>

        </div>
    </section>
    <!--location section ends -->

    <!-- map section -->
    <div class="map-section">
        <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d13288.539840035934!2d73.07594429999999!3d33.6277425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1691750520062!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
@endforeach
    <!-- footer section -->
    @foreach ($content as $contents )
    <x-policyspot.footer :contents="$contents"/>
@endforeach


</body>

</html>
