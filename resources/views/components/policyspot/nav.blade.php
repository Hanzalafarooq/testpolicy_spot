
<body>
    <div id="preloader">
    </div>
    <!-- header section starts --> 
    <div class="banner-section">
        <div class="container d-flex align-items-center">

          <div class="d-flex align-content-center ">

            <p class="top-email"><i class="fa-solid fa-envelope"></i>{{$contents->hemail}}</p>
            <p class="top-number"><i class="fa-solid fa-phone-flip"></i>{{$contents->hphone}} </p>

            <a href="#0" class="btn btn-icon-circle rounded-pill bg-blue7 fw-bold text-white me-4 qoute-btn" target="_blank">
              <small> get a quote <i class="fas fa-long-arrow-alt-right"></i> </small>
            </a>
          </div>
        </div>
      </div>
    {{-- <section class="header-section insurance-header "> --}}
        <section class="header-section about-header gap--b--100">
        <!--Main Navigation-->
        <img src="{{ 'asset/img/about-header-bg.png' }} "alt="" class="about-header-bg">
        <nav class="navigation navbar-expand-lg   bg-none shadow">
            <!-- Container wrapper -->
            <div class="container" style="position: relative;">
                <!-- Toggle button -->
                <a class="navbar-brand mt-2 mt-lg-0  outer-brand" href="#">
                    <img src="{{ 'asset/img/image 6.png' }}" height="15" alt="MDB Logo" loading="lazy" />
                </a>
                <button class="navbar-toggler " style="position: absolute; right:25px; top: 10px; " type="button"
                    data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <!-- Collapsible wrapper -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Navbar brand -->
                    <a class="navbar-brand mt-2 mt-lg-0 inner-brand" id="" href="#">
                        <img src="{{ 'asset/img/image 6.png' }}" height="15" alt="MDB Logo" loading="lazy" />
                    </a>
                    <!-- Left links -->
                    {{-- <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="header-navbar">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/home')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/about')}}">About</a>
                        </li>
                        @foreach ($category as $cat)
                        <li class="nav-item " style="position: relative;">
{{-- use App\Models\insurance; --}}

                            {{-- <a class="nav-link" href="{{url('/insurance')}}" id="LifeInsurance">{{ $cat->category_title }}
                                    </a> --}}

                            {{-- <ul class="dropdown-list LifeInsurance-list shadow-lg">
                            @foreach($cat->insurances as $data)
                            <li><a class="dropdown-item " href="insurance.html">{{ $data->title }}</a></li> --}}
                            {{-- <li><a class="dropdown-item" href="insurance.html">Another action</a></li>
                            <li><a class="dropdown-item" href="insurance.html">Something else here</a></li>
                            <li><a class="dropdown-item" href="insurance.html">Separated link</a></li> --}}
                            {{-- @endforeach --}}
                            {{-- </ul> --}}
                        {{-- </li> --}}
                        {{-- @endforeach  --}}

                        <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="header-navbar">
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/home') }}">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/about') }}">About</a>
    </li>
    @foreach ($category as $cat)
    @if ($cat->insurances->count() > 1)
        <li class="nav-item" style="position: relative;">
            <a class="nav-link" href="{{ url('/insurance/' . $cat->slug) }}" id="LifeInsurance">{{ $cat->category_title }}</a>
            <ul class="dropdown-list LifeInsurance-list shadow-lg">
                @foreach ($cat->insurances as $data)
                    {{-- <li><a class="dropdown-item" href="{{ url('/insurance/' . $data->id) }}">{{ $data->title }}</a></li> --}}
                    <li><a class="dropdown-item" href="{{ route('insurance', ['id' => $data->slug]) }}">{{ $data->title }}</a></li>
                @endforeach
            </ul>
        </li>
    @else
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/insurance/' . $cat->slug) }}" id="LifeInsurance">{{ $cat->category_title }}</a>
        </li>
    @endif
@endforeach



                        {{-- <li class="nav-item" style="position: relative;">
                            <a class="nav-link" id="travel-insurance">Travel insurance <i
                                    class="custom-icon fa-solid fa-angle-right"></i></a>

                            <ul class="dropdown-list shadow-lg travel-list">
                                <li><a class="dropdown-item " href="insurance.html">Action</a></li>
                                <li><a class="dropdown-item" href="insurance.html">Another action</a></li>
                                <li><a class="dropdown-item" href="insurance.html">Something else here</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="insurance.html">Separated link</a></li>
                            </ul>
                        </li> --}}
                        {{-- <li class="nav-item" style="position: relative;">
                            <a class="nav-link" href="insurance.html" id="resp_rrsp">resp, rrsp & tfsa <i
                                    class="custom-icon fa-solid fa-angle-right"></i></a>

                            <ul class="dropdown-list shadow-lg resp-list">
                                <li><a class="dropdown-item " href="insurance.html">Action</a></li>
                                {{-- <li><a class="dropdown-item" href="insurance.html">Another action</a></li>
                                <li><a class="dropdown-item" href="insurance.html">Something else here</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="insurance.html">Separated link</a></li> --}}
                            {{-- </ul>
                        </li> --}}
                        {{-- <li class="nav-item" style="position: relative;">
                            <a class="nav-link" href="insurance.html" id="int_students">intl students <i
                                    class="custom-icon fa-solid fa-angle-right"></i></a>

                            <ul class="dropdown-list shadow-lg students-list">
                                <li><a class="dropdown-item " href="insurance.html">Action</a></li>
                                <li><a class="dropdown-item" href="insurance.html">Another action</a></li>
                                <li><a class="dropdown-item" href="insurance.html">Something else here</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="insurance.html">Separated link</a></li>
                            </ul>
                        </li> --}}

                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/faq')}}">faq</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/contactus')}}">contact</a>
                        </li>
                    </ul>
                </div>
            </div>
            </div>
        </nav>
