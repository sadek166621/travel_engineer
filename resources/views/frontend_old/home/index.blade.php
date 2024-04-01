@extends('frontend.master')
@section('title')
    Home
@endsection
@section('content')
<div class="container-fluid search-bar position-relative" style="top: -50%; transform: translateY(-50%);">
    <div class="container">
        <div class="position-relative rounded-pill w-100 mx-auto p-3" style="background: #00ADCB;">
            <form action="{{route('search')}}" method="post">
                @csrf
                <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text"
                       name="name" placeholder="Search by Country or Place" required>
                <button type="submit" class="btn btn-info rounded-pill py-2 px-4 position-absolute me-2"
                        style="top: 50%; right: 46px; transform: translateY(-50%);">Search</button>
            </form>
        </div>
    </div>
</div>
<!-- Navbar & Hero End -->

<!-- About Start -->
<div class="container-fluid about py-3 d-none">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5">
                <div class="h-100"
                    style="border: 50px solid; border-color: transparent #13357B transparent #13357B;">
                    <img src="img/about-img.jpg" class="img-fluid w-100 h-100" alt="">
                </div>
            </div>
            <div class="col-lg-7"
                style="background: linear-gradient(rgba(255, 255, 255, .8), rgba(255, 255, 255, .8)), url(img/about-img-1.png);">
                <h5 class="section-about-title pe-3">About Us</h5>
                <h1 class="mb-4">Welcome to <span class="text-info">Travela</span></h1>
                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, dolorum,
                    doloribus sunt dicta, officia voluptatibus libero necessitatibus natus impedit quam ullam
                    assumenda? Id atque iste consectetur. Commodi odit ab saepe!</p>
                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quos voluptatem
                    suscipit neque enim, doloribus ipsum rem eos distinctio, dignissimos nisi saepe nulla? Libero
                    numquam perferendis provident placeat molestiae quia?</p>
                <div class="row gy-2 gx-4 mb-4">
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-info me-2"></i>First Class Flights</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-info me-2"></i>Handpicked Hotels</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-info me-2"></i>5 Star Accommodations</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-info me-2"></i>Latest Model Vehicles</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-info me-2"></i>150 Premium City Tours
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-info me-2"></i>24/7 Service</p>
                    </div>
                </div>
                <a class="btn btn-info rounded-pill py-3 px-5 mt-2" href="#">Read More</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Services Start -->
<div class="container-fluid bg-light service py-3 d-none">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Searvices</h5>
            <h1 class="mb-0">Our Services</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="row g-4">
                    <div class="col-12">
                        <div
                            class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 pe-0">
                            <div class="service-content text-end">
                                <h5 class="mb-4">WorldWide Tours</h5>
                                <p class="mb-0">Dolor sit amet consectetur adipisicing elit. Non alias eum, suscipit
                                    expedita corrupti officiis debitis possimus nam laudantium beatae quidem dolore
                                    consequuntur voluptate rem reiciendis, omnis sequi harum earum.
                                </p>
                            </div>
                            <div class="service-icon p-4">
                                <i class="fa fa-globe fa-4x text-info"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div
                            class="service-content-inner d-flex align-items-center  bg-white border border-primary rounded p-4 pe-0">
                            <div class="service-content text-end">
                                <h5 class="mb-4">Hotel Reservation</h5>
                                <p class="mb-0">Dolor sit amet consectetur adipisicing elit. Non alias eum, suscipit
                                    expedita corrupti officiis debitis possimus nam laudantium beatae quidem dolore
                                    consequuntur voluptate rem reiciendis, omnis sequi harum earum.
                                </p>
                            </div>
                            <div class="service-icon p-4">
                                <i class="fa fa-hotel fa-4x text-info"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div
                            class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 pe-0">
                            <div class="service-content text-end">
                                <h5 class="mb-4">Travel Guides</h5>
                                <p class="mb-0">Dolor sit amet consectetur adipisicing elit. Non alias eum, suscipit
                                    expedita corrupti officiis debitis possimus nam laudantium beatae quidem dolore
                                    consequuntur voluptate rem reiciendis, omnis sequi harum earum.
                                </p>
                            </div>
                            <div class="service-icon p-4">
                                <i class="fa fa-user fa-4x text-info"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div
                            class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 pe-0">
                            <div class="service-content text-end">
                                <h5 class="mb-4">Event Management</h5>
                                <p class="mb-0">Dolor sit amet consectetur adipisicing elit. Non alias eum, suscipit
                                    expedita corrupti officiis debitis possimus nam laudantium beatae quidem dolore
                                    consequuntur voluptate rem reiciendis, omnis sequi harum earum.
                                </p>
                            </div>
                            <div class="service-icon p-4">
                                <i class="fa fa-cog fa-4x text-info"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row g-4">
                    <div class="col-12">
                        <div
                            class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                            <div class="service-icon p-4">
                                <i class="fa fa-globe fa-4x text-info"></i>
                            </div>
                            <div class="service-content">
                                <h5 class="mb-4">WorldWide Tours</h5>
                                <p class="mb-0">Dolor sit amet consectetur adipisicing elit. Non alias eum, suscipit
                                    expedita corrupti officiis debitis possimus nam laudantium beatae quidem dolore
                                    consequuntur voluptate rem reiciendis, omnis sequi harum earum.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div
                            class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                            <div class="service-icon p-4">
                                <i class="fa fa-hotel fa-4x text-info"></i>
                            </div>
                            <div class="service-content">
                                <h5 class="mb-4">Hotel Reservation</h5>
                                <p class="mb-0">Dolor sit amet consectetur adipisicing elit. Non alias eum, suscipit
                                    expedita corrupti officiis debitis possimus nam laudantium beatae quidem dolore
                                    consequuntur voluptate rem reiciendis, omnis sequi harum earum.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div
                            class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                            <div class="service-icon p-4">
                                <i class="fa fa-user fa-4x text-info"></i>
                            </div>
                            <div class="service-content">
                                <h5 class="mb-4">Travel Guides</h5>
                                <p class="mb-0">Dolor sit amet consectetur adipisicing elit. Non alias eum, suscipit
                                    expedita corrupti officiis debitis possimus nam laudantium beatae quidem dolore
                                    consequuntur voluptate rem reiciendis, omnis sequi harum earum.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div
                            class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                            <div class="service-icon p-4">
                                <i class="fa fa-cog fa-4x text-info"></i>
                            </div>
                            <div class="service-content">
                                <h5 class="mb-4">Event Management</h5>
                                <p class="mb-0">Dolor sit amet consectetur adipisicing elit. Non alias eum, suscipit
                                    expedita corrupti officiis debitis possimus nam laudantium beatae quidem dolore
                                    consequuntur voluptate rem reiciendis, omnis sequi harum earum.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="text-center">
                    <a class="btn btn-info rounded-pill py-3 px-5 mt-2" href="#">Service More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->

<!-- Packages Start -->
<div class="container-fluid packages py-3">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h2 class="section-title px-3">Awesome Packages</h2>
        </div>
        <div class="packages-carousel owl-carousel">
            @foreach ($packages as $package )
            <div class="packages-item" style="height: 300px">
                <a href="{{ route('package-details',$package->id) }}">
                    <div class="packages-img">
                        <img src="{{asset('uploads')}}/package_thumbnail/{{$package->thumbnail}}" class=" w-100 rounded-top" alt="Image" height="200px">
                    <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute"
                        style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                        <small class="flex-fill text-center border-end py-2"><i
                                class="fa fa-map-marker-alt me-2"></i>{{$package->Country->name}}</small>
                        <small class="flex-fill text-center border-end py-2"><i
                                class="fa fa-calendar-alt me-2"></i>{{$package->days}} days</small>
                        <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>{{$package->no_of_people}}</small>
                    </div>
                    <div class="packages-price py-2 px-4">₹ {{$package->price}}</div>
                </div>
                </a>
               <a href="{{ route('package-details',$package->id) }}">
                 <div class="packages-content bg-light rounded-bottom">
                    <div class="p-4">
                        <h5 class="mb-0">{{$package->name}}</h5>
                    </div>
                </div>
               </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Packages End -->

<!-- Destination Start -->
<div class="container-fluid destination py-3">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h2 class="section-title px-3">Popular Destination</h2>
        </div>
        <div class="tab-class text-center">
            <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">
                <li class="nav-item">
                    <a class="d-flex mx-3 py-2 border border-dark bg-light rounded-pill active"
                        data-bs-toggle="pill" href="#" onclick="getPlaces(0)">
                        <span class="text-dark" style="width: 150px;" >All</span>
                    </a>
                </li>
                @foreach($countries as $country)
                    <li class="nav-item">
                        <a class="d-flex py-2 mx-3 border border-dark bg-light rounded-pill" data-bs-toggle="pill"
                           href="#" onclick="getPlaces({{$country->id}})">
                            <span class="text-dark" style="width: 150px;">{{$country->name}}</span>
                        </a>
                    </li>
                @endforeach


            </ul>
            <div class="tab-content">
                <div id="places" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        @foreach($places as $place)
                            <div class="col-lg-4">
                                <div class="destination-img">
                                    <img class="rounded w-100" src="{{asset($place->image)}}" alt="" height="300px">
                                    <div class="destination-overlay p-4">
                                        <h4 class="text-white mb-2 mt-3">{{$place->name}}</h4>
                                        <a href="{{route('place.package', $place->id)}}" class="btn-hover text-white">View All Packages <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="{{asset($place->image)}}" data-lightbox="destination-4"><i
                                                class="fa fa-window-maximize fa-1x btn btn-light btn-lg-square text-info"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Destination End -->

<!-- Explore Tour Start -->
<div class="container-fluid ExploreTour py-3">
    <div class="container py-3">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h2 class="section-title px-3">The World Trips</h2>
            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum tempore nam, architecto
                doloremque velit explicabo? Voluptate sunt eveniet fuga eligendi! Expedita laudantium fugiat
                corrupti eum cum repellat a laborum quasi.
            </p>
        </div>
        <div class="tab-class text-center">
            <ul class="nav nav-pills d-inline-flex justify-content-center mb-5 d-none">
                <li class="nav-item">
                    <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill active"
                        data-bs-toggle="pill" href="#NationalTab-1">
                        <span class="text-dark" style="width: 250px;">National Tour Category</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex py-2 mx-3 border border-primary bg-light rounded-pill" data-bs-toggle="pill"
                        href="#InternationalTab-2">
                        <span class="text-dark" style="width: 250px;">International tour Category</span>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="NationalTab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        @if(count($categories) >0)
                            @foreach($categories as $category)
                                <div class="col-md-6 col-lg-3">
                                    <div class="national-item">
                                        <img src="{{asset($category->image)}}" height="200px" class=" w-100 rounded"
                                             alt="Image">
                                        <div class="national-content">
                                            <div class="national-info">
                                                <h5 class="text-white text-uppercase mb-2">{{$category->name}}</h5>
                                                <a href="{{route('category.package', $category->id)}}" class="btn-hover text-white">View All Packages <i
                                                        class="fa fa-arrow-right ms-2"></i></a>
                                            </div>
                                        </div>
{{--                                        <div class="national-plus-icon">--}}
{{--                                            <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>--}}
{{--                                        </div>--}}
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="col-md-12 text-center">
                                No Category Included
                            </div>
                        @endif
                    </div>
                </div>

                <div id="InternationalTab-2" class="tab-pane fade show p-0 d-none">
                    <div class="InternationalTour-carousel owl-carousel">
                        <div class="international-item">
                            <img src="{{asset('frontend')}}/assect/img/explore-tour-1.jpg" class="img-fluid w-100 rounded" alt="Image">
                            <div class="international-content">
                                <div class="international-info">
                                    <h5 class="text-white text-uppercase mb-2">Australia</h5>
                                    <a href="#" class="btn-hover text-white me-4"><i
                                            class="fas fa-map-marker-alt me-1"></i> 8 Cities</a>
                                    <a href="#" class="btn-hover text-white"><i class="fa fa-eye ms-2"></i>
                                        <span>143+ Tour Places</span></a>
                                </div>
                            </div>
                            <div class="tour-offer bg-success">30% Off</div>
                            <div class="international-plus-icon">
                                <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                            </div>
                        </div>
                        <div class="international-item">
                            <img src="{{asset('frontend')}}/assect/img/explore-tour-2.jpg" class="img-fluid w-100 rounded" alt="Image">
                            <div class="international-content">
                                <div class="international-info">
                                    <h5 class="text-white text-uppercase mb-2">Germany</h5>
                                    <a href="#" class="btn-hover text-white me-4"><i
                                            class="fas fa-map-marker-alt me-1"></i> 12 Cities</a>
                                    <a href="#" class="btn-hover text-white"><i class="fa fa-eye ms-2"></i>
                                        <span>21+ Tour Places</span></a>
                                </div>
                            </div>
                            <div class="international-plus-icon">
                                <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                            </div>
                        </div>
                        <div class="international-item">
                            <img src="{{asset('frontend')}}/assect/img/explore-tour-3.jpg" class="img-fluid w-100 rounded" alt="Image">
                            <div class="international-content">
                                <div class="tour-offer bg-warning">45% Off</div>
                                <div class="international-info">
                                    <h5 class="text-white text-uppercase mb-2">Spain</h5>
                                    <a href="#" class="btn-hover text-white me-4"><i
                                            class="fas fa-map-marker-alt me-1"></i> 9 Cities</a>
                                    <a href="#" class="btn-hover text-white"><i class="fa fa-eye ms-2"></i>
                                        <span>133+ Tour Places</span></a>
                                </div>
                            </div>
                            <div class="international-plus-icon">
                                <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                            </div>
                        </div>
                        <div class="international-item">
                            <img src="{{asset('frontend')}}/assect/img/explore-tour-4.jpg" class="img-fluid w-100 rounded" alt="Image">
                            <div class="international-content">
                                <div class="international-info">
                                    <h5 class="text-white text-uppercase mb-2">Japan</h5>
                                    <a href="#" class="btn-hover text-white me-4"><i
                                            class="fas fa-map-marker-alt me-1"></i> 8 Cities</a>
                                    <a href="#" class="btn-hover text-white"><i class="fa fa-eye ms-2"></i>
                                        <span>137+ Tour Places</span></a>
                                </div>
                            </div>
                            <div class="international-plus-icon">
                                <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                            </div>
                        </div>
                        <div class="international-item">
                            <img src="{{asset('frontend')}}/assect/img/explore-tour-5.jpg" class="img-fluid w-100 rounded" alt="Image">
                            <div class="international-content">
                                <div class="tour-offer bg-info">70% Off</div>
                                <div class="international-info">
                                    <h5 class="text-white text-uppercase mb-2">London</h5>
                                    <a href="#" class="btn-hover text-white me-4"><i
                                            class="fas fa-map-marker-alt me-1"></i> 17 Cities</a>
                                    <a href="#" class="btn-hover text-white"><i class="fa fa-eye ms-2"></i>
                                        <span>26+ Tour Places</span></a>
                                </div>
                            </div>
                            <div class="international-plus-icon">
                                <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                            </div>
                        </div>
                        <div class="international-item">
                            <img src="{{asset('frontend')}}/assect/img/explore-tour-6.jpg" class="img-fluid w-100 rounded" alt="Image">
                            <div class="international-content">
                                <div class="tour-offer bg-info">70% Off</div>
                                <div class="international-info">
                                    <h5 class="text-white text-uppercase mb-2">London</h5>
                                    <a href="#" class="btn-hover text-white me-4"><i
                                            class="fas fa-map-marker-alt me-1"></i> 17 Cities</a>
                                    <a href="#" class="btn-hover text-white"><i class="fa fa-eye ms-2"></i>
                                        <span>26+ Tour Places</span></a>
                                </div>
                            </div>
                            <div class="international-plus-icon">
                                <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Explore Tour Start -->

<!-- Gallery Start -->
<div class="container-fluid gallery py-3 d-none">
    <div class="mx-auto text-center mb-5" style="max-width: 900px;">
        <h5 class="section-title px-3">Our Gallery</h5>
        <h1 class="mb-4">Tourism & Traveling Gallery.</h1>
        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum tempore nam, architecto
            doloremque velit explicabo? Voluptate sunt eveniet fuga eligendi! Expedita laudantium fugiat corrupti
            eum cum repellat a laborum quasi.
        </p>
    </div>
    <div class="tab-class text-center">
        <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">
            <li class="nav-item">
                <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill active" data-bs-toggle="pill"
                    href="#GalleryTab-1">
                    <span class="text-dark" style="width: 150px;">All</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="d-flex py-2 mx-3 border border-primary bg-light rounded-pill" data-bs-toggle="pill"
                    href="#GalleryTab-2">
                    <span class="text-dark" style="width: 150px;">World tour</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill"
                    href="#GalleryTab-3">
                    <span class="text-dark" style="width: 150px;">Ocean Tour</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill"
                    href="#GalleryTab-4">
                    <span class="text-dark" style="width: 150px;">Summer Tour</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill"
                    href="#GalleryTab-5">
                    <span class="text-dark" style="width: 150px;">Sport Tour</span>
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div id="GalleryTab-1" class="tab-pane fade show p-0 active">
                <div class="row g-2">
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                        <div class="gallery-item h-100">
                            <img src="img/gallery-1.jpg" class="img-fluid w-100 h-100 rounded" alt="Image">
                            <div class="gallery-content">
                                <div class="gallery-info">
                                    <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                    <a href="#" class="btn-hover text-white">View All Place <i
                                            class="fa fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                            <div class="gallery-plus-icon">
                                <a href="img/gallery-1.jpg" data-lightbox="gallery-1" class="my-auto"><i
                                        class="fas fa-plus fa-2x text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="gallery-item h-100">
                            <img src="img/gallery-2.jpg" class="img-fluid w-100 h-100 rounded" alt="Image">
                            <div class="gallery-content">
                                <div class="gallery-info">
                                    <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                    <a href="#" class="btn-hover text-white">View All Place <i
                                            class="fa fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                            <div class="gallery-plus-icon">
                                <a href="img/gallery-2.jpg" data-lightbox="gallery-2" class="my-auto"><i
                                        class="fas fa-plus fa-2x text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                        <div class="gallery-item h-100">
                            <img src="img/gallery-3.jpg" class="img-fluid w-100 h-100 rounded" alt="Image">
                            <div class="gallery-content">
                                <div class="gallery-info">
                                    <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                    <a href="#" class="btn-hover text-white">View All Place <i
                                            class="fa fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                            <div class="gallery-plus-icon">
                                <a href="img/gallery-3.jpg" data-lightbox="gallery-3" class="my-auto"><i
                                        class="fas fa-plus fa-2x text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="gallery-item h-100">
                            <img src="img/gallery-4.jpg" class="img-fluid w-100 h-100 rounded" alt="Image">
                            <div class="gallery-content">
                                <div class="gallery-info">
                                    <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                    <a href="#" class="btn-hover text-white">View All Place <i
                                            class="fa fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                            <div class="gallery-plus-icon">
                                <a href="img/gallery-4.jpg" data-lightbox="gallery-4" class="my-auto"><i
                                        class="fas fa-plus fa-2x text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                        <div class="gallery-item h-100">
                            <img src="img/gallery-5.jpg" class="img-fluid w-100 h-100 rounded" alt="Image">
                            <div class="gallery-content">
                                <div class="gallery-info">
                                    <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                    <a href="#" class="btn-hover text-white">View All Place <i
                                            class="fa fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                            <div class="gallery-plus-icon">
                                <a href="img/gallery-5.jpg" data-lightbox="gallery-5" class="my-auto"><i
                                        class="fas fa-plus fa-2x text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                        <div class="gallery-item h-100">
                            <img src="img/gallery-6.jpg" class="img-fluid w-100 h-100 rounded" alt="Image">
                            <div class="gallery-content">
                                <div class="gallery-info">
                                    <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                    <a href="#" class="btn-hover text-white">View All Place <i
                                            class="fa fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                            <div class="gallery-plus-icon">
                                <a href="img/gallery-6.jpg" data-lightbox="gallery-6" class="my-auto"><i
                                        class="fas fa-plus fa-2x text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                        <div class="gallery-item h-100">
                            <img src="img/gallery-7.jpg" class="img-fluid w-100 h-100 rounded" alt="Image">
                            <div class="gallery-content">
                                <div class="gallery-info">
                                    <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                    <a href="#" class="btn-hover text-white">View All Place <i
                                            class="fa fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                            <div class="gallery-plus-icon">
                                <a href="img/gallery-7.jpg" data-lightbox="gallery-7" class="my-auto"><i
                                        class="fas fa-plus fa-2x text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2">
                        <div class="gallery-item h-100">
                            <img src="img/gallery-8.jpg" class="img-fluid w-100 h-100 rounded" alt="Image">
                            <div class="gallery-content">
                                <div class="gallery-info">
                                    <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                    <a href="#" class="btn-hover text-white">View All Place <i
                                            class="fa fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                            <div class="gallery-plus-icon">
                                <a href="img/gallery-8.jpg" data-lightbox="gallery-8" class="my-auto"><i
                                        class="fas fa-plus fa-2x text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                        <div class="gallery-item h-100">
                            <img src="img/gallery-9.jpg" class="img-fluid w-100 h-100 rounded" alt="Image">
                            <div class="gallery-content">
                                <div class="gallery-info">
                                    <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                    <a href="#" class="btn-hover text-white">View All Place <i
                                            class="fa fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                            <div class="gallery-plus-icon">
                                <a href="img/gallery-9.jpg" data-lightbox="gallery-9" class="my-auto"><i
                                        class="fas fa-plus fa-2x text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 col-xl-2">
                        <div class="gallery-item h-100">
                            <img src="img/gallery-10.jpg" class="img-fluid w-100 h-100 rounded" alt="Image">
                            <div class="gallery-content">
                                <div class="gallery-info">
                                    <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                    <a href="#" class="btn-hover text-white">View All Place <i
                                            class="fa fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                            <div class="gallery-plus-icon">
                                <a href="img/gallery-10.jpg" data-lightbox="gallery-10" class="my-auto"><i
                                        class="fas fa-plus fa-2x text-white"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="GalleryTab-2" class="tab-pane fade show p-0">
                <div class="row g-2">
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="gallery-item h-100">
                            <img src="img/gallery-2.jpg" class="img-fluid w-100 h-100 rounded" alt="Image">
                            <div class="gallery-content">
                                <div class="gallery-info">
                                    <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                    <a href="#" class="btn-hover text-white">View All Place <i
                                            class="fa fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                            <div class="gallery-plus-icon">
                                <a href="img/gallery-2.jpg" data-lightbox="gallery-2" class="my-auto"><i
                                        class="fas fa-plus fa-2x text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                        <div class="gallery-item h-100">
                            <img src="img/gallery-3.jpg" class="img-fluid w-100 h-100 rounded" alt="Image">
                            <div class="gallery-content">
                                <div class="gallery-info">
                                    <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                    <a href="#" class="btn-hover text-white">View All Place <i
                                            class="fa fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                            <div class="gallery-plus-icon">
                                <a href="img/gallery-3.jpg" data-lightbox="gallery-3" class="my-auto"><i
                                        class="fas fa-plus fa-2x text-white"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="GalleryTab-3" class="tab-pane fade show p-0">
                <div class="row g-2">
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="gallery-item h-100">
                            <img src="img/gallery-2.jpg" class="img-fluid w-100 h-100 rounded" alt="Image">
                            <div class="gallery-content">
                                <div class="gallery-info">
                                    <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                    <a href="#" class="btn-hover text-white">View All Place <i
                                            class="fa fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                            <div class="gallery-plus-icon">
                                <a href="img/gallery-2.jpg" data-lightbox="gallery-2" class="my-auto"><i
                                        class="fas fa-plus fa-2x text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                        <div class="gallery-item h-100">
                            <img src="img/gallery-3.jpg" class="img-fluid w-100 h-100 rounded" alt="Image">
                            <div class="gallery-content">
                                <div class="gallery-info">
                                    <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                    <a href="#" class="btn-hover text-white">View All Place <i
                                            class="fa fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                            <div class="gallery-plus-icon">
                                <a href="img/gallery-3.jpg" data-lightbox="gallery-3" class="my-auto"><i
                                        class="fas fa-plus fa-2x text-white"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="GalleryTab-4" class="tab-pane fade show p-0">
                <div class="row g-2">
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="gallery-item h-100">
                            <img src="img/gallery-2.jpg" class="img-fluid w-100 h-100 rounded" alt="Image">
                            <div class="gallery-content">
                                <div class="gallery-info">
                                    <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                    <a href="#" class="btn-hover text-white">View All Place <i
                                            class="fa fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                            <div class="gallery-plus-icon">
                                <a href="img/gallery-2.jpg" data-lightbox="gallery-2" class="my-auto"><i
                                        class="fas fa-plus fa-2x text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                        <div class="gallery-item h-100">
                            <img src="img/gallery-3.jpg" class="img-fluid w-100 h-100 rounded" alt="Image">
                            <div class="gallery-content">
                                <div class="gallery-info">
                                    <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                    <a href="#" class="btn-hover text-white">View All Place <i
                                            class="fa fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                            <div class="gallery-plus-icon">
                                <a href="img/gallery-3.jpg" data-lightbox="gallery-3" class="my-auto"><i
                                        class="fas fa-plus fa-2x text-white"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="GalleryTab-5" class="tab-pane fade show p-0">
                <div class="row g-2">
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="gallery-item h-100">
                            <img src="img/gallery-2.jpg" class="img-fluid w-100 h-100 rounded" alt="Image">
                            <div class="gallery-content">
                                <div class="gallery-info">
                                    <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                    <a href="#" class="btn-hover text-white">View All Place <i
                                            class="fa fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                            <div class="gallery-plus-icon">
                                <a href="img/gallery-2.jpg" data-lightbox="gallery-2" class="my-auto"><i
                                        class="fas fa-plus fa-2x text-white"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-2">
                        <div class="gallery-item h-100">
                            <img src="img/gallery-3.jpg" class="img-fluid w-100 h-100 rounded" alt="Image">
                            <div class="gallery-content">
                                <div class="gallery-info">
                                    <h5 class="text-white text-uppercase mb-2">World Tour</h5>
                                    <a href="#" class="btn-hover text-white">View All Place <i
                                            class="fa fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                            <div class="gallery-plus-icon">
                                <a href="img/gallery-3.jpg" data-lightbox="gallery-3" class="my-auto"><i
                                        class="fas fa-plus fa-2x text-white"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Gallery End -->

<!-- Tour Booking Start -->
<div class="container-fluid booking py-3 d-none">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <h5 class="section-booking-title pe-3">Booking</h5>
                <h1 class="text-white mb-4">Online Booking</h1>
                <p class="text-white mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur
                    maxime ullam esse fuga blanditiis accusantium pariatur quis sapiente, veniam doloribus
                    praesentium? Repudiandae iste voluptatem fugiat doloribus quasi quo iure officia.
                </p>
                <p class="text-white mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur
                    maxime ullam esse fuga blanditiis accusantium pariatur quis sapiente, veniam doloribus
                    praesentium? Repudiandae iste voluptatem fugiat doloribus quasi quo iure officia.
                </p>
                <a href="#" class="btn btn-light text-info rounded-pill py-3 px-5 mt-2">Read More</a>
            </div>
            <div class="col-lg-6">
                <h1 class="text-white mb-3">Book A Tour Deals</h1>
                <p class="text-white mb-4">Get <span class="text-warning">50% Off</span> On Your First Adventure
                    Trip With Travela. Get More Deal Offers Here.</p>
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control bg-white border-0" id="name"
                                    placeholder="Your Name">
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control bg-white border-0" id="email"
                                    placeholder="Your Email">
                                <label for="email">Your Email</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating date" id="date3" data-target-input="nearest">
                                <input type="text" class="form-control bg-white border-0" id="datetime"
                                    placeholder="Date & Time" data-target="#date3" data-toggle="datetimepicker" />
                                <label for="datetime">Date & Time</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <select class="form-select bg-white border-0" id="select1">
                                    <option value="1">Destination 1</option>
                                    <option value="2">Destination 2</option>
                                    <option value="3">Destination 3</option>
                                </select>
                                <label for="select1">Destination</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <select class="form-select bg-white border-0" id="SelectPerson">
                                    <option value="1">Persons 1</option>
                                    <option value="2">Persons 2</option>
                                    <option value="3">Persons 3</option>
                                </select>
                                <label for="SelectPerson">Persons</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <select class="form-select bg-white border-0" id="CategoriesSelect">
                                    <option value="1">Kids</option>
                                    <option value="2">1</option>
                                    <option value="3">2</option>
                                    <option value="3">3</option>
                                </select>
                                <label for="CategoriesSelect">Categories</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control bg-white border-0" placeholder="Special Request"
                                    id="message" style="height: 100px"></textarea>
                                <label for="message">Special Request</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-info text-white w-100 py-3" type="submit">Book Now</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Tour Booking End -->

<!-- Travel Guide Start -->
<div class="container-fluid guide py-3 d-none">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Travel Guide</h5>
            <h1 class="mb-0">Meet Our Guide</h1>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="guide-item">
                    <div class="guide-img">
                        <div class="guide-img-efects">
                            <img src="img/guide-1.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                        </div>
                        <div class="guide-icon rounded-pill p-2">
                            <a class="btn btn-square btn-info rounded-circle mx-1" href="#"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-info rounded-circle mx-1" href="#"><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-info rounded-circle mx-1" href="#"><i
                                    class="fab fa-instagram"></i></a>
                            <a class="btn btn-square btn-info rounded-circle mx-1" href="#"><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="guide-title text-center rounded-bottom p-4">
                        <div class="guide-title-inner">
                            <h4 class="mt-3">Full Name</h4>
                            <p class="mb-0">Designation</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="guide-item">
                    <div class="guide-img">
                        <div class="guide-img-efects">
                            <img src="img/guide-2.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                        </div>
                        <div class="guide-icon rounded-pill p-2">
                            <a class="btn btn-square btn-info rounded-circle mx-1" href="#"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-info rounded-circle mx-1" href="#"><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-info rounded-circle mx-1" href="#"><i
                                    class="fab fa-instagram"></i></a>
                            <a class="btn btn-square btn-info rounded-circle mx-1" href="#"><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="guide-title text-center rounded-bottom p-4">
                        <div class="guide-title-inner">
                            <h4 class="mt-3">Full Name</h4>
                            <p class="mb-0">Designation</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="guide-item">
                    <div class="guide-img">
                        <div class="guide-img-efects">
                            <img src="img/guide-3.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                        </div>
                        <div class="guide-icon rounded-pill p-2">
                            <a class="btn btn-square btn-info rounded-circle mx-1" href="#"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-info rounded-circle mx-1" href="#"><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-info rounded-circle mx-1" href="#"><i
                                    class="fab fa-instagram"></i></a>
                            <a class="btn btn-square btn-info rounded-circle mx-1" href="#"><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="guide-title text-center rounded-bottom p-4">
                        <div class="guide-title-inner">
                            <h4 class="mt-3">Full Name</h4>
                            <p class="mb-0">Designation</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="guide-item">
                    <div class="guide-img">
                        <div class="guide-img-efects">
                            <img src="img/guide-4.jpg" class="img-fluid w-100 rounded-top" alt="Image">
                        </div>
                        <div class="guide-icon rounded-pill p-2">
                            <a class="btn btn-square btn-info rounded-circle mx-1" href="#"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-info rounded-circle mx-1" href="#"><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-info rounded-circle mx-1" href="#"><i
                                    class="fab fa-instagram"></i></a>
                            <a class="btn btn-square btn-info rounded-circle mx-1" href="#"><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="guide-title text-center rounded-bottom p-4">
                        <div class="guide-title-inner">
                            <h4 class="mt-3">Full Name</h4>
                            <p class="mb-0">Designation</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Travel Guide End -->

<!-- Blog Start -->
<div class="container-fluid blog py-3">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h2 class="section-title px-3">Travel tips, Hacks & Tricks</h2>
            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti deserunt tenetur
                sapiente atque. Magni non explicabo beatae sit, vel reiciendis consectetur numquam id similique sunt
                error obcaecati ducimus officia maiores.
            </p>
        </div>
        <div class="row g-4 justify-content-center">
            @foreach ($blogs as $blog )
            <div class="col-lg-3 col-md-6">
                <div class="blog-item">
                    <div class="blog-img">
                        <div class="blog-img-inner">
                            <img class="img-fluid w-100 rounded-top" src="{{ asset('assets') }}/images/uploads/blog/{{ $blog->image }}" alt="Image">
                            <div class="blog-icon">
                                <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                            </div>
                        </div>

                    </div>
                    <div class="blog-content border border-top-0 rounded-bottom p-4">
                        <a href="#" class="h4">{{ $blog->title }}</a>
                        <p class="my-3">{!! $blog->description !!}</p>
                        <a href="#" class="btn btn-info rounded-pill py-2 px-4">Read More</a>
                    </div>
                </div>

            {{-- <div class="col-lg-3 col-md-6">
                <div class="blog-item">
                    <div class="blog-img">
                        <div class="blog-img-inner">
                            <img class="img-fluid w-100 rounded-top" src="{{asset('frontend')}}/assect/img/blog-2.jpg" alt="Image">
                            <div class="blog-icon">
                                <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                            </div>
                        </div>

                    </div>
                    <div class="blog-content border border-top-0 rounded-bottom p-4">
                        <a href="#" class="h4">Adventures Trip</a>
                        <p class="my-3">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam
                            eos</p>
                        <a href="#" class="btn btn-info rounded-pill py-2 px-4">Read More</a>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="col-lg-3 col-md-6">
                <div class="blog-item">
                    <div class="blog-img">
                        <div class="blog-img-inner">
                            <img class="img-fluid w-100 rounded-top" src="{{asset('frontend')}}/assect/img/blog-2.jpg" alt="Image">
                            <div class="blog-icon">
                                <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                            </div>
                        </div>

                    </div>
                    <div class="blog-content border border-top-0 rounded-bottom p-4">
                        <a href="#" class="h4">Adventures Trip</a>
                        <p class="my-3">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam
                            eos</p>
                        <a href="#" class="btn btn-info rounded-pill py-2 px-4">Read More</a>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="col-lg-3 col-md-6">
                <div class="blog-item">
                    <div class="blog-img">
                        <div class="blog-img-inner">
                            <img class="img-fluid w-100 rounded-top" src="{{asset('frontend')}}/assect/img/blog-3.jpg" alt="Image">
                            <div class="blog-icon">
                                <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>
                            </div>
                        </div>

                    </div>
                    <div class="blog-content border border-top-0 rounded-bottom p-4">
                        <a href="#" class="h4">Adventures Trip</a>
                        <p class="my-3">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam
                            eos</p>
                        <a href="#" class="btn btn-info rounded-pill py-2 px-4">Read More</a>
                    </div>
                </div>
            </div> --}}
        </div>
        @endforeach
    </div>

</div>
<!-- Blog End -->

<!-- Testimonial Start -->
<div class="container-fluid testimonial py-3">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h2 class="section-title px-3">Our Clients Say!!!</h2>
        </div>
        <div class="testimonial-carousel owl-carousel">
            @foreach($testimonials as $testimonial)
                <div class="testimonial-item text-center rounded pb-4">
                    <div class="testimonial-comment bg-light rounded p-4">
                        <p class="text-center mb-5">
                            {{$testimonial->description}}
                        </p>
                    </div>
                    <div class="testimonial-img p-1">
                        <img src="{{asset($testimonial->image)}}" class="img-fluid rounded-circle" alt="Image">
                    </div>
                    <div style="margin-top: -35px;">
                        <h5 class="mb-0">{{$testimonial->name}}</h5>
                        <p class="mb-0">{{$testimonial->country}}, {{$testimonial->state}}</p>
                        <div class="d-flex justify-content-center d-none">
                            <i class="fas fa-star text-info"></i>
                            <i class="fas fa-star text-info"></i>
                            <i class="fas fa-star text-info"></i>
                            <i class="fas fa-star text-info"></i>
                            <i class="fas fa-star text-info"></i>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
<!-- Testimonial End -->

<!-- Subscribe Start -->
<div class="container-fluid subscribe py-3">
    <div class="container text-center py-5">
        <div class="mx-auto text-center" style="max-width: 900px;">
            <h5 class="subscribe-title px-3">Subscribe</h5>
            <h1 class="text-white mb-4">Our Newsletter</h1>
            <p class="text-white mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum tempore nam,
                architecto doloremque velit explicabo? Voluptate sunt eveniet fuga eligendi! Expedita laudantium
                fugiat corrupti eum cum repellat a laborum quasi.
            </p>
            <form action="{{ route('news-letter-submit') }}" method="Post">
                @csrf
                <div class="position-relative mx-auto">
                    <input class="form-control border-dark rounded-pill w-100 py-3 ps-4 pe-5" name="email" type="email"
                        placeholder="Your email">
                    <button type="submit" class="btn btn-info rounded-pill position-absolute top-0 end-0 py-2 px-4 mt-2 me-2">Subscribe</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@push('js')
    <script>
        function getPlaces(id) {
            if(1){
                $.ajax({
                    url: '{{ route("get-places-by-country", ":id") }}'.replace(':id', id),
                    type: 'GET',
                    dataType: 'json',
                    success: function (data) {
                        console.log(data);
                        console.log(data.length);
                        $('#places').empty();
                        if(data.length == 0){
                            var html =`<div class="row g-4">
                                <div class="col-lg-12">
                                    No Package Available
                                </div></div>`;
                        }
                        else{
                            var html = `<div class="row g-4">`;
                            $.each(data, function (key, value) {
                                console.log(value);
                                html+=`<div class="col-lg-4">
                            <div class="destination-img">
                                <img class="rounded w-100" src="${value.image}" alt="" height="300px">
                                    <div class="destination-overlay p-4">
                                        <h4 class="text-white mb-2 mt-3">${value.name}</h4>
                                        <a href="{{route('place.package', '')}}/${value.id}" class="btn-hover text-white">View All Packages <i
                                                class="fa fa-arrow-right ms-2"></i></a>
                                    </div>
                                    <div class="search-icon">
                                        <a href="${value.image}" data-lightbox="destination-4"><i
                                                class="fa fa-zoom fa-1x btn btn-light btn-lg-square text-info"></i></a>
                                    </div>
                                </div>
                            </div>`;
                            });

                            html+=` </div>`;
                        }
                        $('#places').html(html);
                    }
                });
            }
        }
    </script>
@endpush
