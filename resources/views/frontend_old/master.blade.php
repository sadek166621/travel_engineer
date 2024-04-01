<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <title>Travel Bazar Global | @yield('title')</title>
{{--    <meta content="width=device-width, initial-scale=1.0" name="viewport">--}}
{{--    <meta content="" name="keywords">--}}
{{--    <meta content="" name="description">--}}

    <link rel="shortcut icon" href="{{ asset('assets') }}/images/uploads/settings/{{ getSetting()->logo }}" type="image/x-icon">

    <!-- Google Web Fonts -->
    @include('frontend.include.style')

</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-info" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid bg-info px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="{{ getSetting()->twitter_link }}"><i
                            class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="{{ getSetting()->facebook_link }}"><i
                            class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="{{ getSetting()->linkedin_link }}"><i
                            class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="{{ getSetting()->instagram_link }}"><i
                            class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href="{{ getSetting()->youtube_link }}"><i
                            class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px; font-size: larger;">
                    <a href="#"><small class="me-3 text-light"><i class="fa fa-user me-2"></i>Need Help?  Call Us {{ getSetting()->mobile }}</small></a>

                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        @include('frontend.include.header')

        <!-- Carousel Start -->
        @php $route = Route::current()->getName(); @endphp
        @if($route == 'home')
            <div class="carousel-header">
                <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        @foreach($sliders as $key => $slider)
                            <li data-bs-target="#carouselId" data-bs-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}"></li>
                        @endforeach
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        @foreach($sliders as $key => $slider)
                            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                <img src="{{asset('uploads/sliders')}}/{{ $slider->image }}" class="img-fluid" alt="{{ $slider->title }}">
                                <div class="carousel-caption">
                                    <div class="p-3" style="max-width: 900px;">
                                        <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">{{ $slider->title }}</h4>
                                        <h1 class="display-2 text-capitalize text-white mb-4">{{ $slider->main_title }}</h1>
                                        <p class="mb-5 fs-5 d-none">{{ $slider->description }}</p>
                                        <div class="d-flex align-items-center justify-content-center d-none">
                                            <a class="btn-hover-bg btn btn-info rounded-pill text-white py-3 px-5" href="#">{{ $slider->button_text }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon btn bg-info" aria-hidden="false"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                        <span class="carousel-control-next-icon btn bg-info" aria-hidden="false"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        @endif

        <!-- Carousel End -->
    </div>

    @yield('content')
    <!-- Subscribe End -->

    <!-- Footer Start -->
    @include('frontend.include.footer')


    <!-- JavaScript Libraries -->
    @include('frontend.include.script')
    @stack('js')
</body>

</html>
