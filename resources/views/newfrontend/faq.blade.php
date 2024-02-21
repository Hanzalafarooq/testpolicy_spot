<x-policyspot.header />
@foreach ($content as $contents )
<x-policyspot.nav :contents="$contents" :category="$category"/>
@endforeach
@foreach ($faq as $faqs)


    <div class="container gap--b--100">
        <div class="row">
            <div class="col-md-6 header-col  d-md-flex justify-content-center flex-column align-items-start"
                style="">
                <h1 class="color-border mb-25"><span style="color: #000; font-weight: 400;">Home</span> | FAQ</h1>
                <h1 class="about-main-heading mb-39">
                  {{$faqs->s1h1}}
                </h1>
                <p class="about-header-content mb-25">
                    {{$faqs->s1p1}}
                </p>

                <!-- <button class="btn  new-button">Get Started Now <span><i class="fa-solid fa-right-long"></i></span></button> -->

            </div>

            <div class="col-md-6 header-coltext-center text-center  header-image mt-5 mb-2">
                <img src="{{ 'asset/img/faq-header-image.png' }}" alt="">
            </div>
        </div>
    </div>
    <img src="{{ 'asset/img/header_4_wave.png' }}" class="wave" alt="">
    </section>

    <!-- headers ends -->

    <!-- page-faqs-section -->
    <section class="page-faqs-section gap--100">
        <div class="container">
            <h2 class="faq-heading mb-5 text-center" style="color:#2d3134 !important"> <span
                    class="gradient">{{ strtok($faqs->s2h1, ' ') }}</span>  {{ substr($faqs->s2h1, strpos($faqs->s5h1, ' ')+1) }}</h2>
                    {{-- <h2 class="offer-heading">  {{ strtok($abcontent->s5h1, ' ') }} <span class="offer-sub gradient"> {{ substr($abcontent->s5h1, strpos($abcontent->s5h1, ' ')+1) }}</span></h2> --}}
 
            {{-- <div class="row">
                <div class="col-md-6"> --}}
                    {{-- <ul class="nav nav-tabs tabs-container  d-flex flex-column">
@foreach($insurance as$key-> $insuran)
                        <li class="nav-item"><a href="#life_insurance" data-bs-toggle="tab" class="nav-link active">{{$insuran->title}}
                                 <span class="faq-number">04</span></a></li>
                         @endforeach                     
            </ul>
                </div>
@foreach($faqss as $faq)
                <div class="col-md-6">
                    <div class="tab-content">
                        <div class="tab-pane active show " id="{{$key++}}">
                            <section class="faq-section faq-page-section">
                                <div class="container">
                                    <h2 class="faq-heading text-start fag-page-heading" style="color: #000 !important;">
                                        {{$faq->insurance->title}}</h2>
                                    <div class="accordion row faq-page-section" id="accordion">
                                        <div class="col-1 d-flex outer-counter justify-content-center">
                                            <span class="item-count">01</span>
                                        </div>
                                        <div class="col-11">
                                            <div class=" accordion-item border-0 ">
                                                <button id="accordion-button-1" aria-expanded="false"><span
                                                        class="accordion-title">

                                                        {{$faq->question}}</span><i
                                                        class="fa-solid fa-plus faq-icon"></i></button>
                                                <div class="accordion-content">
                                                    <p>{{$faq->answer}}.</p>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        <div class="col-1 d-flex outer-counter justify-content-center">
                                            <span class="item-count">02</span>
                                        </div>  
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div> --}}
                        
                                 
                
                <div class="row">
                    <div class="col-md-6">
                        <ul class="nav nav-tabs tabs-container d-flex flex-column">
                            @foreach($insurance as $insuran)
                                @php
                                    $questionCount = $faqss->where('insurance_id', $insuran->id)->count();
                                @endphp
                                <li class="nav-item">
                                    <a href="#{{ 'insurance_' . $insuran->id }}" data-bs-toggle="tab" class="nav-link @if($loop->first) active @endif">
                                        {{ $insuran->title }}
                                        <span class="faq-number">{{ $questionCount }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                
                    <div class="col-md-6">
                        <div class="tab-content">
                            @foreach($insurance as $insuran)
                                <div class="tab-pane @if($loop->first) active show @endif" id="{{ 'insurance_' . $insuran->id }}">
                                    <section class="faq-section faq-page-section">
                                        <div class="container">
                                            <h2 class="faq-heading text-start fag-page-heading" style="color: #000 !important;">
                                                {{ $insuran->title }}
                                            </h2>
                                            <div class="accordion row faq-page-section" id="accordion">
                                                @foreach($faqss as $faq)
                                                    @if($faq->insurance_id === $insuran->id)
                                                    <div class="col-1 d-flex outer-counter justify-content-center">
                                                        <span class="item-count">01</span>
                                                    </div>
                                                    <div class="col-11">
                                                        <div class="accordion-item border-0">
                                                            <button id="accordion-button-3" aria-expanded="false"><span
                                                                    class="accordion-title">

                                                                    {{ $faq->question }}
                                                                </span>
                                                                <i class="fa-solid fa-plus faq-icon"></i>
                                                            </button>
                                                            <div class="accordion-content">
                                                                <p>{{ $faq->answer }}.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                </div>
        </div>
    </section>
                        
    <!-- page-faqs-section ends -->


    <!-- faq page insurace section starts  -->
    <section class="faq-page-contact style-7 section-padding gap--100">
        <div class="row">
            <div class="col-md-12">
                <div class="section-head d-flex flex-column align-items-center text-center style-4 mb-40">
                    <div class="top-title">
                        <img src="{{ 'asset/img/border.png' }}" alt="">
                        <small class="feature-text"> {{$faqs->s3sh1}} </small>
                        <img src="{{ 'asset/img/border.png' }}" alt="">
                    </div>
                    <h2 class="faq-heading mb-2 text-center" style="color:#2d3134 !important"> <span
                            class="gradient">{{ strtok($faqs->s3h1, ' ') }}</span>  {{ substr($faqs->s3h1, strpos($faqs->s3h1, ' ')+1) }}</h2>

                    <!-- <h2 class="features-heading-second">
                  <span class="gradient"> FAQ </span> <br>
              </h2> -->
                    <p class="faq-support-description">
                        {{$faqs->s3p1}}
                    </p>
                    <a href="" class="contact-us-btn">{{$faqs->s3l1}}</a>
                    <br>
                    <a href="#0"
                        class="btn btn-icon-circle rounded-pill contact-btn bg-blue7 fw-bold text-white me-4"
                        target="_blank">
                        <small> {{$faqs->s3btn}}<i class="fas fa-long-arrow-alt-right"></i> </small>
                    </a>
                </div>
            </div>
        </div>

        <img src="{{ 'asset/img/about_s4_wave.png' }}" class="faq-border" alt="">

    </section>
    @endforeach

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

   
        
        
    <!-- faq page insurace section ends -->

    <!-- footer section -->
    @foreach ($content as $contents )
    <x-policyspot.footer :contents="$contents"/>
@endforeach

