<header id="masthead" class="site-header header-primary">
    <!-- header html start -->
    <div class="top-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10 d-none d-lg-block">
                    <div class="header-contact-info">
                        <ul>
                            <li>
                                <a href="#"><i class="fas fa-phone-alt"></i> {{ getSetting()->mobile }}</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-envelope"></i> <span>{{ getSetting()->email }}</span></a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-map-marker-alt"></i> {{ getSetting()->address }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 d-flex justify-content-lg-end justify-content-between">
                    <div class="header-social social-links">
                        <ul>
                            <li><a href="{{ getSetting()->facebook_link }}"><i class="fab fa-facebook-f"
                                        aria-hidden="true"></i></a></li>
                            <li><a href="{{ getSetting()->twitter_link }}"><i class="fab fa-twitter"
                                        aria-hidden="true"></i></a></li>
                            <li><a href="{{ getSetting()->instagram_link }}"><i class="fab fa-instagram"
                                        aria-hidden="true"></i></a></li>
                            <li><a href="{{ getSetting()->linkedin_link }}"><i class="fab fa-linkedin"
                                        aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    {{-- <div class="header-search-icon">
                   <button class="search-icon">
                      <i class="fas fa-search"></i>
                   </button>
                </div> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-header">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="site-identity">
                <h1 class="site-title">
                    <a href="{{ route('home') }}">
                        <img class="white-logo"
                            src="{{ asset('assets') }}/images/uploads/settings/{{ getSetting()->logo }}" alt="logo">
                        <img class="black-logo"
                            src="{{ asset('assets') }}/images/uploads/settings/{{ getSetting()->logo }}" alt="logo">
                    </a>
                </h1>
            </div>
            <div class="main-navigation d-none d-lg-block">
                <nav id="navigation" class="navigation">
                    <ul>
                        <li>
                            <a href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Destination</a>
                            <ul>
                                @foreach ($menu_country as $menu )
                                <li>
                                    <a href="{{ route('menu-package-details',$menu->id) }}">{{ $menu->name }}</a>
                                </li>
                                @endforeach


                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Booking</a>
                            <ul>
                                <li>
                                    <a href="{{ route('flight-tickets') }}">Flight Tickets</a>
                                </li>
                                <li>
                                    <a href="{{ route('hotel-booking') }}">Hotel Booking</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="{{ route('blog') }}">Blog</a>
                        </li>
                        <li>
                            <a href="{{ route('offer') }}">Offers</a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}">About Us</a>
                        </li>
                        <li>
                            <a href="{{ route('contact-us') }}">Contact Us</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="header-btn">
                <a href="{{ route('countrys') }}" class="button-primary">Countries</a>
            </div>
        </div>
    </div>
    <div class="mobile-menu-container"></div>
</header>
