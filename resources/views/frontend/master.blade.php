<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- favicon -->
   <link rel="icon" type="image/png" href="{{asset('frontend')}}/assets/images/Travel_Engineer_logo.png">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="{{asset('frontend')}}/assets/vendors/bootstrap/css/bootstrap.min.css" media="all">
   <!-- Fonts Awesome CSS -->
   <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/assets/vendors/fontawesome/css/all.min.css">
   <!-- jquery-ui css -->
   <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/assets/vendors/jquery-ui/jquery-ui.min.css">
   <!-- modal video css -->
   <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/assets/vendors/modal-video/modal-video.min.css">
   <!-- light box css -->
   <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/assets/vendors/lightbox/dist/css/lightbox.min.css">
   <!-- slick slider css -->
   <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/assets/vendors/slick/slick.css">
   <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/assets/vendors/slick/slick-theme.css">
   <!-- google fonts -->
   <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400&amp;family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&amp;display=swap"
      rel="stylesheet">
   <!-- Custom CSS -->
   <link rel="stylesheet" type="text/css" href="{{asset('frontend')}}/assets/css/style.css">
   <title>Travel Engineer </title>
</head>

<body class="home">
   <div id="siteLoader" class="site-loader">
      <div class="preloader-content">
         <img src="{{asset('frontend')}}/assets/images/loader1.gif" alt="">
      </div>
   </div>
   <div id="page" class="full-page">
      <header id="masthead" class="site-header header-primary">
         <!-- header html start -->
         <div class="top-header">
            <div class="container">
               <div class="row">
                  <div class="col-lg-8 d-none d-lg-block">
                     <div class="header-contact-info">
                        <ul>
                           <li>
                              <a href="#"><i class="fas fa-phone-alt"></i> +8801700-000000</a>
                           </li>
                           <li>
                              <a href="#"><i class="fas fa-envelope"></i> <span>info@example@com</span></a>
                           </li>
                           <li>
                              <a href="#"><i class="fas fa-map-marker-alt"></i> House-30, Road-8, Dhanmondi,
                                 Dhaka-1207</a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-lg-4 d-flex justify-content-lg-end justify-content-between">
                     <div class="header-social social-links">
                        <ul>
                           <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                     <div class="header-search-icon">
                        <button class="search-icon">
                           <i class="fas fa-search"></i>
                        </button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="bottom-header">
            <div class="container d-flex justify-content-between align-items-center">
               <div class="site-identity">
                  <h1 class="site-title">
                     <a href="index.html">
                        <img class="white-logo" src="{{asset('frontend')}}/assets/images/Travel_Engineer_logo.png" alt="logo">
                        <img class="black-logo" src="{{asset('frontend')}}/assets/images/Travel_Engineer_logo.png" alt="logo">
                     </a>
                  </h1>
               </div>
               <div class="main-navigation d-none d-lg-block">
                  <nav id="navigation" class="navigation">
                     <ul>
                        <li>
                           <a href="index.html">Home</a>
                        </li>
                        <li class="menu-item-has-children">
                           <a href="#">Destination</a>
                           <ul>
                              <li>
                                 <a href="#">India</a>
                              </li>
                              <li>
                                 <a href="#">Dubai</a>
                              </li>
                              <li>
                                 <a href="#">Turkey</a>
                              </li>
                              <li>
                                 <a href="#">Singapore</a>
                              </li>
                              <li>
                                 <a href="#">Europe</a>
                              </li>
                           </ul>
                        </li>
                        <li>
                           <a href="#">Flight Tickets</a>
                        </li>
                        <li>
                           <a href="#">Blog</a>
                        </li>
                        <li>
                           <a href="#">Offers</a>
                        </li>
                        <li>
                           <a href="#">About Us</a>
                        </li>
                        <li>
                           <a href="#">Contact Us</a>
                        </li>
                     </ul>
                  </nav>
               </div>
               <div class="header-btn">
                  <a href="#" class="button-primary">BOOK NOW</a>
               </div>
            </div>
         </div>
         <div class="mobile-menu-container"></div>
      </header>

      <main id="content" class="site-main">
         <!-- Home slider html start -->
         <section class="home-slider-section">
            <div class="home-slider">
                @foreach ($sliders as $slider )
                <div class="home-banner-items">
                    <div class="banner-inner-wrap" style="background-image: url({{asset('uploads/sliders')}}/{{ $slider->image }});">
                    </div>
                    <div class="banner-content-wrap">
                       <div class="container">
                          <div class="banner-content text-center">
                             <h2 class="banner-title">{{ $slider->main_title }}</h2>
                             <p>{{ $slider->title }}</p>
                             <a href="#" class="button-primary">Contact Us</a>
                          </div>
                       </div>
                    </div>
                    <div class="overlay"></div>
                 </div>
                @endforeach
            </div>
         </section>
         <!-- slider html start -->

         <!-- Search Field Part Start -->
         <div class="trip-search-section shape-search-section d-none">
            <div class="slider-shape"></div>
            <div class="container">
               <div class="trip-search-inner white-bg d-flex">
                  <div class="input-group">
                     <label> Search Destination* </label>
                     <input type="text" name="s" placeholder="Enter Destination">
                  </div>
                  <div class="input-group">
                     <label> Pax Number* </label>
                     <input type="text" name="s" placeholder="No.of People">
                  </div>
                  <div class="input-group width-col-3">
                     <label> Checkin Date* </label>
                     <i class="far fa-calendar"></i>
                     <input class="input-date-picker" type="text" name="s" placeholder="MM / DD / YY" autocomplete="off"
                        readonly="readonly">
                  </div>
                  <div class="input-group width-col-3">
                     <label> Checkout Date* </label>
                     <i class="far fa-calendar"></i>
                     <input class="input-date-picker" type="text" name="s" placeholder="MM / DD / YY" autocomplete="off"
                        readonly="readonly">
                  </div>
                  <div class="input-group width-col-3">
                     <label class="screen-reader-text"> Search </label>
                     <input type="submit" name="travel-search" value="INQUIRE NOW">
                  </div>
               </div>
            </div>
         </div>
         <!-- Search Field Part End -->

         <!-- Destination Part Start -->
         <section class="destination-section mt-5 pt-5 d-none">
            <div class="container">
               <div class="section-heading text-center">
                  <h5 class="dash-style">Popular Destination</h5>
                  <h2>Trending International Destinations</h2>
               </div>
               <div class="destination-inner destination-three-column">
                  <div class="row">
                     <div class="col-lg-3 col-md-6 col-12">
                        <div class="desti-item overlay-desti-item">
                           <figure class="desti-image">
                              <img src="{{asset('frontend')}}/assets/images/img1.jpg" alt="">
                           </figure>
                           <div class="meta-cat bg-meta-cat">
                              <a href="#">THAILAND</a>
                           </div>
                           <div class="desti-content">
                              <h3>
                                 <a href="#">Disney Land</a>
                              </h3>
                              <div class="rating-start d-none" title="Rated 5 out of 4">
                                 <span style="width: 53%"></span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-12">
                        <div class="desti-item overlay-desti-item">
                           <figure class="desti-image">
                              <img src="{{asset('frontend')}}/assets/images/img2.jpg" alt="">
                           </figure>
                           <div class="meta-cat bg-meta-cat">
                              <a href="#">NORWAY</a>
                           </div>
                           <div class="desti-content">
                              <h3>
                                 <a href="#">Besseggen Ridge</a>
                              </h3>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-12">
                        <div class="desti-item overlay-desti-item">
                           <figure class="desti-image">
                              <img src="{{asset('frontend')}}/assets/images/img1.jpg" alt="">
                           </figure>
                           <div class="meta-cat bg-meta-cat">
                              <a href="#">THAILAND</a>
                           </div>
                           <div class="desti-content">
                              <h3>
                                 <a href="#">Disney Land</a>
                              </h3>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-3 col-md-6 col-12">
                        <div class="desti-item overlay-desti-item">
                           <figure class="desti-image">
                              <img src="{{asset('frontend')}}/assets/images/img2.jpg" alt="">
                           </figure>
                           <div class="meta-cat bg-meta-cat">
                              <a href="#">NORWAY</a>
                           </div>
                           <div class="desti-content">
                              <h3>
                                 <a href="#">Besseggen Ridge</a>
                              </h3>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="btn-wrap text-center">
                     <a href="#" class="button-primary">MORE DESTINATION</a>
                  </div>
               </div>
            </div>
         </section>
         <!-- Destination Part End -->

         <!-- Destination Part Start -->
         <section class="package-section">
            <div class="container">
               <div class="section-heading text-center">
                  <div class="row">
                     <div class="col-lg-8 offset-lg-2">
                        <h5 class="dash-style">Popular Destination</h5>
                        <h2>Trending International Destinations</h2>
                     </div>
                  </div>
               </div>
               <div class="package-inner">
                  <div class="row">
                    @foreach ($packages as $package )
                     <div class="col-lg-3 col-md-6">
                        <div class="package-wrap">
                           <figure class="feature-image">
                              <a href="#">
                                 <img src="{{asset('uploads')}}/package_thumbnail/{{$package->thumbnail}}" style="width: 267px;" alt="">
                              </a>
                           </figure>
                           <div class="package-price">
                              <h6>
                                 <span>{{$package->Country->name}}</span>
                              </h6>
                           </div>
                        </div>
                     </div>
                     @endforeach
                     {{-- <div class="col-lg-3 col-md-6">
                        <div class="package-wrap">
                           <figure class="feature-image">
                              <a href="#">
                                 <img src="{{asset('frontend')}}/assets/images/img6.jpg" alt="">
                              </a>
                           </figure>
                           <div class="package-price">
                              <h6>
                                 <span> Canada </span>
                              </h6>
                           </div>
                        </div>
                     </div> --}}
                     {{-- <div class="col-lg-3 col-md-6">
                        <div class="package-wrap">
                           <figure class="feature-image">
                              <a href="#">
                                 <img src="{{asset('frontend')}}/assets/images/img6.jpg" alt="">
                              </a>
                           </figure>
                           <div class="package-price">
                              <h6>
                                 <span> Canada </span>
                              </h6>
                           </div>
                        </div>
                     </div> --}}
                     {{-- <div class="col-lg-3 col-md-6">
                        <div class="package-wrap">
                           <figure class="feature-image">
                              <a href="#">
                                 <img src="{{asset('frontend')}}/assets/images/img7.jpg" alt="">
                              </a>
                           </figure>
                           <div class="package-price">
                              <h6>
                                 <span> Portugal</span>
                              </h6>
                           </div>
                        </div>
                     </div> --}}
                  </div>
                  <div class="btn-wrap text-center">
                     <a href="#" class="button-primary">VIEW ALL PACKAGES</a>
                  </div>
               </div>
            </div>
         </section>
         <!-- Destination Part end -->

         <!-- Packages Part Start -->
         <section class="package-section">
            <div class="container">
               <div class="section-heading text-center">
                  <div class="row">
                     <div class="col-lg-8 offset-lg-2">
                        <h5 class="dash-style">Explore Great Place</h5>
                        <h2>Travel Engineer Special</h2>
                     </div>
                  </div>
               </div>
               <div class="package-inner">
                  <div class="row">
                    @foreach ($packages as $package )
                     @if ($package->special == 1)
                     <div class="col-lg-3 col-md-6">
                        <div class="package-wrap">
                           <figure class="feature-image">
                              <a href="#">
                                 <img src="{{asset('uploads')}}/package_thumbnail/{{$package->thumbnail}}" style="width: 267px;" alt="">
                              </a>
                           </figure>
                           <div class="package-price">
                              <h6>
                                 <span>{{$package->Country->name}}</span>
                              </h6>
                           </div>
                           <div class="package-content-wrap">

                              @if ($package->price != null)
                              <div class="package-meta text-center">
                                <ul>
                                   <li>
                                      <i class=""></i>
                                      Tk{{$package->price}}
                                   </li>
                                   <li>
                                      <i class=""></i>
                                      Per Person

                                   </li>
                                </ul>
                             </div>
                              @endif
                              <div class="package-content d-none">
                                 <h3>
                                    <a href="#">Sunset view of beautiful lakeside resident</a>
                                 </h3>
                                 <div class="review-area">
                                    <span class="review-text">(25 reviews)</span>
                                    <div class="rating-start" title="Rated 5 out of 5">
                                       <span style="width: 60%"></span>
                                    </div>
                                 </div>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit luctus nec ullam. Ut elit
                                    tellus, luctus nec ullam elit tellpus.</p>
                                 <div class="btn-wrap">
                                    <a href="#" class="button-text width-6">Book Now<i
                                          class="fas fa-arrow-right"></i></a>
                                    <a href="#" class="button-text width-6">Wish List<i class="far fa-heart"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     @endif
                     @endforeach
                     {{-- <div class="col-lg-3 col-md-6">
                        <div class="package-wrap">
                           <figure class="feature-image">
                              <a href="#">
                                 <img src="{{asset('frontend')}}/assets/images/img6.jpg" alt="">
                              </a>
                           </figure>
                           <div class="package-price">
                              <h6>
                                 <span>$1,230 </span> / per person
                              </h6>
                           </div>
                           <div class="package-content-wrap">
                              <div class="package-meta text-center">
                                 <ul>
                                    <li>
                                       <i class="far fa-clock"></i>
                                       5D/4N
                                    </li>
                                    <li>
                                       <i class="fas fa-map-marker-alt"></i>
                                       Canada
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div> --}}
                     {{-- <div class="col-lg-3 col-md-6">
                        <div class="package-wrap">
                           <figure class="feature-image">
                              <a href="#">
                                 <img src="{{asset('frontend')}}/assets/images/img6.jpg" alt="">
                              </a>
                           </figure>
                           <div class="package-price">
                              <h6>
                                 <span>$1,230 </span> / per person
                              </h6>
                           </div>
                           <div class="package-content-wrap">
                              <div class="package-meta text-center">
                                 <ul>
                                    <li>
                                       <i class="far fa-clock"></i>
                                       5D/4N
                                    </li>
                                    <li>
                                       <i class="fas fa-map-marker-alt"></i>
                                       Canada
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div> --}}
                     {{-- <div class="col-lg-3 col-md-6">
                        <div class="package-wrap">
                           <figure class="feature-image">
                              <a href="#">
                                 <img src="{{asset('frontend')}}/assets/images/img7.jpg" alt="">
                              </a>
                           </figure>
                           <div class="package-price">
                              <h6>
                                 <span>$2,000 </span> / per person
                              </h6>
                           </div>
                           <div class="package-content-wrap">
                              <div class="package-meta text-center">
                                 <ul>
                                    <li>
                                       <i class="far fa-clock"></i>
                                       6D/5N
                                    </li>
                                    <li>
                                       <i class="fas fa-map-marker-alt"></i>
                                       Portugal
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div> --}}
                  </div>
                  <div class="btn-wrap text-center">
                     <a href="#" class="button-primary">VIEW ALL PACKAGES</a>
                  </div>
               </div>
            </div>
         </section>
         <!-- Packages Part end -->

         <!-- Callback Part Start -->
         <section class="callback-section">
            <div class="container">
               <div class="row no-gutters align-items-center">
                  <div class="col-lg-5">
                     <div class="callback-img" style="background-image: url({{asset('frontend')}}/assets/images/img8.jpg);">
                        <div class="video-button">
                           <a id="video-container" data-video-id="IUN664s7N-c">
                              <i class="fas fa-play"></i>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-7">
                     <div class="callback-inner">
                        <div class="section-heading section-heading-white">
                           <h5 class="dash-style">Callback For More</h5>
                           <h2>Go Travel. Discover. Remember Us!</h2>
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec
                              ullamcorper mattis, pulvinar dapibus leo. Eaque adipiscing, luctus eleifend.</p>
                        </div>
                        <div class="callback-counter-wrap">
                           <div class="counter-item">
                              <div class="counter-icon">
                                 <img src="{{asset('frontend')}}/assets/images/icon1.png" alt="">
                              </div>
                              <div class="counter-content">
                                 <span class="counter-no">
                                    <span class="counter">500</span>K+
                                 </span>
                                 <span class="counter-text">
                                    Satisfied Clients
                                 </span>
                              </div>
                           </div>
                           <div class="counter-item">
                              <div class="counter-icon">
                                 <img src="{{asset('frontend')}}/assets/images/icon2.png" alt="">
                              </div>
                              <div class="counter-content">
                                 <span class="counter-no">
                                    <span class="counter">250</span>K+
                                 </span>
                                 <span class="counter-text">
                                    Satisfied Clients
                                 </span>
                              </div>
                           </div>
                           <div class="counter-item">
                              <div class="counter-icon">
                                 <img src="{{asset('frontend')}}/assets/images/icon3.png" alt="">
                              </div>
                              <div class="counter-content">
                                 <span class="counter-no">
                                    <span class="counter">15</span>K+
                                 </span>
                                 <span class="counter-text">
                                    Satisfied Clients
                                 </span>
                              </div>
                           </div>
                           <div class="counter-item">
                              <div class="counter-icon">
                                 <img src="{{asset('frontend')}}/assets/images/icon4.png" alt="">
                              </div>
                              <div class="counter-content">
                                 <span class="counter-no">
                                    <span class="counter">10</span>K+
                                 </span>
                                 <span class="counter-text">
                                    Satisfied Clients
                                 </span>
                              </div>
                           </div>
                        </div>
                        <div class="support-area">
                           <div class="support-icon">
                              <img src="{{asset('frontend')}}/assets/images/icon5.png" alt="">
                           </div>
                           <div class="support-content">
                              <h4>Our 24/7 Emergency Phone Services</h4>
                              <h3>
                                 <a href="#">Call: 123-456-7890</a>
                              </h3>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- Callback Part End -->

         <!-- Activity Part Start -->
         <section class="activity-section">
            <div class="container">
               <div class="section-heading text-center">
                  <div class="row">
                     <div class="col-lg-8 offset-lg-2">
                        <h5 class="dash-style">Travel By Activity</h5>
                        <h2>Adventure & Activity</h2>
                     </div>
                  </div>
               </div>
               <div class="activity-inner row row-cols-1 row-cols-lg-5 g-1">
                  <div class="col card-group">
                     <div class="activity-item card">
                        <div class="activity-icon">
                           <a href="#">
                              <img src="{{asset('frontend')}}/assets/images/icon6.png" alt="">
                           </a>
                        </div>
                        <div class="activity-content">
                           <h4>
                              <a href="#">Trusted Advisor</a>
                           </h4>
                           <p>Being a pioneer in the travel industry for over 7 years culminating in customer
                              satisfaction and loyalty by being Sri Lanka’s most trusted Travel Agent and Trusted
                              Adviser in making travelling fun and safe journeys to over 25,000 clients worldwide!</p>
                        </div>
                     </div>
                  </div>
                  <div class="col card-group">
                     <div class="activity-item card">
                        <div class="activity-icon">
                           <a href="#">
                              <img src="{{asset('frontend')}}/assets/images/icon10.png" alt="">
                           </a>
                        </div>
                        <div class="activity-content">
                           <h4>
                              <a href="#">Responsive</a>
                           </h4>
                           <p>To make every holiday a memorable one for all our clients, our openness for suggestions
                              and feedback brings the most out of being a highly responsive Travel Agent in Sri Lanka to
                              furnish our holidays with a unique and exclusive travel experience.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col card-group">
                     <div class="activity-item card">
                        <div class="activity-icon">
                           <a href="#">
                              <img src="{{asset('frontend')}}/assets/images/icon9.png" alt="">
                           </a>
                        </div>
                        <div class="activity-content">
                           <h4>
                              <a href="#">Memorable Experience</a>
                           </h4>
                           <p>Holidays are made with memorable experiences that last a lifetime. And that’s why we as
                              best travel agent in Colombo assure you that our holidays are filled with moments of
                              journeys that fill up your memory lane and are a worthwhile travel experience!</p>
                        </div>
                     </div>
                  </div>
                  <div class="col card-group">
                     <div class="activity-item card">
                        <div class="activity-icon">
                           <a href="#">
                              <img src="{{asset('frontend')}}/assets/images/icon8.png" alt="">
                           </a>
                        </div>
                        <div class="activity-content">
                           <h4>
                              <a href="#">Ease</a>
                           </h4>
                           <p>Our holidays are designed to bring the best of your holiday experience. We also allow our
                              clients to feel the necessity of ease of mind, body and budget.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col card-group">
                     <div class="activity-item card">
                        <div class="activity-icon">
                           <a href="#">
                              <img src="{{asset('frontend')}}/assets/images/icon7.png" alt="">
                           </a>
                        </div>
                        <div class="activity-content">
                           <h4>
                              <a href="#">Recognize Connect</a>
                           </h4>
                           <p>Our team of experienced travel agents and expert travel advisors in Sri Lanka brings our
                              clients and their dream holidays together by understanding all our client's travel needs
                              and offering the best travel experience.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- Activity Part End -->

         <!-- Subscribe Part Start -->
         <section class="subscribe-section" style="background-image: url({{asset('frontend')}}/assets/images/img16.jpg);">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-lg-6">
                     <div class="section-heading section-heading-white">
                        <h5 class="dash-style">HOLIDAY PACKAGE OFFER</h5>
                        <h2>HOLIDAY SPECIAL 25% OFF !</h2>
                        <h4>Sign up now to recieve hot special offers and information about the best tour packages,
                           updates and discounts !!</h4>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="section-heading section-heading-white">
                        <div class="newsletter-form">
                           <form>
                              <input type="text" name="s" placeholder="Your Name">
                              <input type="email" name="s" placeholder="Your Email Address">
                              <input type="text" name="s" placeholder="Your Phone Number">
                              <select class="form-select">
                                 <option selected>Requirement</option>
                                 <option value="1">One</option>
                                 <option value="2">Two</option>
                                 <option value="3">Three</option>
                              </select>
                              <select class="form-select">
                                 <option selected>Travel Destinations</option>
                                 <option value="1">One</option>
                                 <option value="2">Two</option>
                                 <option value="3">Three</option>
                              </select>
                              <input type="submit" name="message" value="Send Message">
                           </form>
                        </div>

                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- subscribe Part End -->

         <!-- Blog Part Start -->
         <section class="blog-section d-none">
            <div class="container">
               <div class="section-heading text-center">
                  <div class="row">
                     <div class="col-lg-8 offset-lg-2">
                        <h5 class="dash-style">FROM OUR BLOG</h5>
                        <h2>OUR RECENT POSTS</h2>
                        <p>Mollit voluptatem perspiciatis convallis elementum corporis quo veritatis aliquid blandit,
                           blandit torquent, odit placeat. Adipiscing repudiandae eius cursus? Nostrum magnis maxime
                           curae placeat.</p>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6 col-lg-4">
                     <article class="post">
                        <figure class="feature-image">
                           <a href="#">
                              <img src="{{asset('frontend')}}/assets/images/img17.jpg" alt="">
                           </a>
                        </figure>
                        <div class="entry-content">
                           <h3>
                              <a href="#">Life is a beautiful journey not a destination</a>
                           </h3>
                           <div class="entry-meta">
                              <span class="byline">
                                 <a href="#">Demoteam</a>
                              </span>
                              <span class="posted-on">
                                 <a href="#">August 17, 2021</a>
                              </span>
                              <span class="comments-link">
                                 <a href="#">No Comments</a>
                              </span>
                           </div>
                        </div>
                     </article>
                  </div>
                  <div class="col-md-6 col-lg-4">
                     <article class="post">
                        <figure class="feature-image">
                           <a href="#">
                              <img src="{{asset('frontend')}}/assets/images/img18.jpg" alt="">
                           </a>
                        </figure>
                        <div class="entry-content">
                           <h3>
                              <a href="#">Take only memories, leave only footprints</a>
                           </h3>
                           <div class="entry-meta">
                              <span class="byline">
                                 <a href="#">Demoteam</a>
                              </span>
                              <span class="posted-on">
                                 <a href="#">August 17, 2021</a>
                              </span>
                              <span class="comments-link">
                                 <a href="#">No Comments</a>
                              </span>
                           </div>
                        </div>
                     </article>
                  </div>
                  <div class="col-md-6 col-lg-4">
                     <article class="post">
                        <figure class="feature-image">
                           <a href="#">
                              <img src="{{asset('frontend')}}/assets/images/img19.jpg" alt="">
                           </a>
                        </figure>
                        <div class="entry-content">
                           <h3>
                              <a href="#">Journeys are best measured in new friends</a>
                           </h3>
                           <div class="entry-meta">
                              <span class="byline">
                                 <a href="#">Demoteam</a>
                              </span>
                              <span class="posted-on">
                                 <a href="#">August 17, 2021</a>
                              </span>
                              <span class="comments-link">
                                 <a href="#">No Comments</a>
                              </span>
                           </div>
                        </div>
                     </article>
                  </div>
               </div>
            </div>
         </section>
         <!-- Blog Part End -->

         <!-- Testimonial Part Start -->
         <div class="testimonial-section" style="background-image: url({{asset('frontend')}}/assets/images/img23.jpg);">
            <div class="container">
               <div class="row">
                  <div class="col-lg-10 offset-lg-1">
                     <div class="testimonial-inner testimonial-slider">
                        <div class="testimonial-item text-center">
                           <figure class="testimonial-img">
                              <img src="{{asset('frontend')}}/assets/images/img20.jpg" alt="">
                           </figure>
                           <div class="testimonial-content">
                              <p>" Dolorum aenean dolorem minima! Voluptatum? Corporis condimentum ac primis fusce,
                                 atque! Vivamus. Non cupiditate natus excepturi, quod quo, aute facere? Deserunt
                                 aliquip, egestas ipsum, eu.Dolorum aenean dolorem minima!? Corporis condi mentum acpri!
                                 "</p>
                              <cite>
                                 Johny English
                                 <span class="company">Travel Agent</span>
                              </cite>
                           </div>
                        </div>
                        <div class="testimonial-item text-center">
                           <figure class="testimonial-img">
                              <img src="{{asset('frontend')}}/assets/images/img21.jpg" alt="">
                           </figure>
                           <div class="testimonial-content">
                              <p>" Dolorum aenean dolorem minima! Voluptatum? Corporis condimentum ac primis fusce,
                                 atque! Vivamus. Non cupiditate natus excepturi, quod quo, aute facere? Deserunt
                                 aliquip, egestas ipsum, eu.Dolorum aenean dolorem minima!? Corporis condi mentum acpri!
                                 "</p>
                              <cite>
                                 William Housten
                                 <span class="company">Travel Agent</span>
                              </cite>
                           </div>
                        </div>
                        <div class="testimonial-item text-center">
                           <figure class="testimonial-img">
                              <img src="{{asset('frontend')}}/assets/images/img22.jpg" alt="">
                           </figure>
                           <div class="testimonial-content">
                              <p>" Dolorum aenean dolorem minima! Voluptatum? Corporis condimentum ac primis fusce,
                                 atque! Vivamus. Non cupiditate natus excepturi, quod quo, aute facere? Deserunt
                                 aliquip, egestas ipsum, eu.Dolorum aenean dolorem minima!? Corporis condi mentum acpri!
                                 "</p>
                              <cite>
                                 Alison Wright
                                 <span class="company">Travel Guide</span>
                              </cite>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Testimonial Part End -->

         <!-- Client Part Start -->
         <div class="client-section">
            <div class="client-wrap client-slider secondary-bg">
               <div class="client-item">
                  <figure>
                     <img src="{{asset('frontend')}}/assets/images/logo1.png" alt="">
                  </figure>
               </div>
               <div class="client-item">
                  <figure>
                     <img src="{{asset('frontend')}}/assets/images/logo2.png" alt="">
                  </figure>
               </div>
               <div class="client-item">
                  <figure>
                     <img src="{{asset('frontend')}}/assets/images/logo3.png" alt="">
                  </figure>
               </div>
               <div class="client-item">
                  <figure>
                     <img src="{{asset('frontend')}}/assets/images/logo4.png" alt="">
                  </figure>
               </div>
               <div class="client-item">
                  <figure>
                     <img src="{{asset('frontend')}}/assets/images/logo5.png" alt="">
                  </figure>
               </div>
               <div class="client-item">
                  <figure>
                     <img src="{{asset('frontend')}}/assets/images/logo2.png" alt="">
                  </figure>
               </div>
            </div>
         </div>
         <!-- Client Part End -->

         <!-- Contact Details Part Start -->
         <section class="contact-section d-none">
            <div class="container">
               <div class="row">
                  <div class="col-lg-4">
                     <div class="contact-img" style="background-image: url({{asset('frontend')}}/assets/images/img24.jpg);">
                     </div>
                  </div>
                  <div class="col-lg-8">
                     <div class="contact-details-wrap">
                        <div class="row">
                           <div class="col-sm-4">
                              <div class="contact-details">
                                 <div class="contact-icon">
                                    <img src="{{asset('frontend')}}/assets/images/icon12.png" alt="">
                                 </div>
                                 <ul>
                                    <li>
                                       <a href="#"><span>info@example.com</span></a>
                                    </li>
                                    <li>
                                       <a href="#"><span>info@example.com</span></a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <div class="col-sm-4">
                              <div class="contact-details">
                                 <div class="contact-icon">
                                    <img src="{{asset('frontend')}}/assets/images/icon13.png" alt="">
                                 </div>
                                 <ul>
                                    <li>
                                       <a href="#">02200 000000</a>
                                    </li>
                                    <li>
                                       <a href="#">+8801700 000000</a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                           <div class="col-sm-4">
                              <div class="contact-details">
                                 <div class="contact-icon">
                                    <img src="{{asset('frontend')}}/assets/images/icon14.png" alt="">
                                 </div>
                                 <ul>
                                    <li>
                                       House-30, Road-6,
                                    </li>
                                    <li>
                                       Dhanmondi, Dhaka-1207
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="contact-btn-wrap">
                        <h3>Let's Join Us For More Update !</h3>
                        <a href="#" class="button-primary">Contact Us</a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!--  contact details html end -->
      </main>

      <footer id="colophon" class="site-footer footer-primary">
         <div class="top-footer">
            <div class="container">
               <div class="row g-5">
                  <div class="col-lg-4 col-md-6">
                     <aside class="widget widget_text">
                        <a href="#"><img src="{{asset('frontend')}}/assets/images/Travel_Engineer_logo.png" alt=""></a>
                        <div class="award-img">
                           <a href="#"><img class="award" src="{{asset('frontend')}}/assets/images/vote4us.png" alt=""></a>
                           <!-- <a href="#"><img src="{{asset('frontend')}}/assets/images/ad.png" alt=""></a> -->
                        </div>
                     </aside>
                  </div>
                  <div class="col-lg-4 col-md-6">
                     <aside class="widget widget_text">
                        <h3 class="widget-title">Contact Information</h3>
                        <div class="textwidget widget-text">

                           <ul>
                              <li>
                                 <a href="#">
                                    <i class="fas fa-phone-alt"></i>
                                    +8801700-000000
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                    <span><i class="fas fa-envelope"></i> info@example.com</span>
                                 </a>
                              </li>
                              <li>
                                 <i class="fas fa-map-marker-alt"></i>
                                 House-30, Road-6, Dhanmondi, Dhaka-1207
                              </li>
                           </ul>
                        </div>
                     </aside>
                  </div>
                  <div class="col-lg-4 col-md-6">
                     <aside class="icon">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                     </aside>
                     <div class="award-img">
                        <a href="#"><img src="{{asset('frontend')}}/assets/images/ad.png" alt=""></a>
                        <a href="#"><img src="{{asset('frontend')}}/assets/images/ad.png" alt=""></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="buttom-footer">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-md-6">
                     <div class="footer-menu">
                        <ul>
                           <li>
                              <a href="#">Privacy Policy</a>
                           </li>
                           <li>
                              <a href="#">Term & Condition</a>
                           </li>
                           <li>
                              <a href="#">FAQ</a>
                           </li>
                        </ul>
                     </div>
                  </div>

                  <div class="col-md-6">
                     <div class="copy-right text-right">Copyright © 2024 Travel Engineer. All rights reserveds.</div>
                  </div>
               </div>
            </div>
         </div>
      </footer>

      <a id="backTotop" href="#" class="to-top-icon">
         <i class="fas fa-chevron-up"></i>
      </a>
      <!-- custom search field html -->
      <div class="header-search-form">
         <div class="container">
            <div class="header-search-container">
               <form class="search-form" role="search" method="get">
                  <input type="text" name="s" placeholder="Enter your text...">
               </form>
               <a href="#" class="search-close">
                  <i class="fas fa-times"></i>
               </a>
            </div>
         </div>
      </div>
      <!-- header html end -->
   </div>

   <!-- JavaScript -->
   <script data-cfasync="false" src="{{asset('frontend')}}/assets/vendors/scripts/email-decode.min.js"></script>
   <script src="{{asset('frontend')}}/assets/js/jquery.js"></script>
   <script src="{{asset('frontend')}}/assets/vendors/ajax/lib/waypoints.min.js"></script>
   <script src="{{asset('frontend')}}/assets/vendors/bootstrap/js/bootstrap.min.js"></script>
   <script src="{{asset('frontend')}}/assets/vendors/jquery-ui/jquery-ui.min.js"></script>
   <script src="{{asset('frontend')}}/assets/vendors/countdown-date-loop-counter/loopcounter.js"></script>
   <script src="{{asset('frontend')}}/assets/js/jquery.counterup.js"></script>
   <script src="{{asset('frontend')}}/assets/vendors/modal-video/jquery-modal-video.min.js"></script>
   <script src="{{asset('frontend')}}/assets/vendors/masonry/masonry.pkgd.min.js"></script>
   <script src="{{asset('frontend')}}/assets/vendors/lightbox/dist/js/lightbox.min.js"></script>
   <script src="{{asset('frontend')}}/assets/vendors/slick/slick.min.js"></script>
   <script src="{{asset('frontend')}}/assets/js/jquery.slicknav.js"></script>
   <script src="{{asset('frontend')}}/assets/js/custom.min.js"></script>
   <script>(function () { if (!document.body) return; var js = "window['__CF$cv$params']={r:'869688a80b14786d',t:'MTcxMTI4MTk3Mi42NTMwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../cdn-cgi/challenge-platform/h/g/scripts/jsd/dc6b543c1346/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);"; var _0xh = document.createElement('iframe'); _0xh.height = 1; _0xh.width = 1; _0xh.style.position = 'absolute'; _0xh.style.top = 0; _0xh.style.left = 0; _0xh.style.border = 'none'; _0xh.style.visibility = 'hidden'; document.body.appendChild(_0xh); function handler() { var _0xi = _0xh.contentDocument || _0xh.contentWindow.document; if (_0xi) { var _0xj = _0xi.createElement('script'); _0xj.innerHTML = js; _0xi.getElementsByTagName('head')[0].appendChild(_0xj); } } if (document.readyState !== 'loading') { handler(); } else if (window.addEventListener) { document.addEventListener('DOMContentLoaded', handler); } else { var prev = document.onreadystatechange || function () { }; document.onreadystatechange = function (e) { prev(e); if (document.readyState !== 'loading') { document.onreadystatechange = prev; handler(); } }; } })();</script>
</body>

</html>
