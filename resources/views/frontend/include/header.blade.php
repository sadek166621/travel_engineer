<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="{{ route('home') }}" class="navbar-brand p-0">
        <!-- <h1 class="m-0"><i class="fa fa-map-marker-alt me-3"></i>Travel</h1> -->
        <img src="{{ asset('assets') }}/images/uploads/settings/{{ getSetting()->logo }}" alt="Logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>
            {{-- <a href="#" class="nav-item nav-link">World</a> --}}
            @foreach ($main_cat as $cat )
            <div class="nav-item dropdown">
                <a href="{{route('category.package', $cat->id)}}" class="nav-link  @if (get_subcategories($cat->id)>0) dropdown-toggle @endif">{{ $cat->name }}</a>
                @if (get_subcategories($cat->id)>0)
                <div class="dropdown-menu m-0">
                    @foreach ($sub_cats as $sub_cat )
                    @if($sub_cat->cat_id == $cat->id  )
                    <a href="{{route('category.package', $sub_cat->id)}}" class="dropdown-item">{{ $sub_cat->name }}</a>
                    @endif
                    @endforeach
                </div>
                @endif

            </div>
            @endforeach

            {{-- <a href="#" class="nav-item nav-link">Speciality Tours</a> --}}

            {{-- <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu m-0">
                    <a href="destination.html" class="dropdown-item">Destination</a>
                    <a href="tour.html" class="dropdown-item">Explore Tour</a>
                    <a href="booking.html" class="dropdown-item">Travel Booking</a>
                    <a href="gallery.html" class="dropdown-item">Our Gallery</a>
                    <a href="guides.html" class="dropdown-item">Travel Guides</a>
                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                    <a href="404.html" class="dropdown-item">404 Page</a>
                </div>
            </div> --}}
            <a href="{{ route('contact-us') }}" class="nav-item nav-link">Contact Us</a>
        </div>
        <a href="{{route('category.all')}}" class="btn btn-info rounded-pill py-2 px-4 ms-lg-4">Explore</a>
    </div>
</nav>
