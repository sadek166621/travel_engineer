@extends('frontend.master')
@section('content')
<main id="content" class="site-main">
    <!-- Inner Banner html start-->
    <section class="inner-banner-wrap">
       <div class="inner-baner-container" style="background-image: url({{asset('frontend')}}/assets/images/inner-banner.jpg);">
          <div class="container">
             <div class="inner-banner-content">
                <h1 class="inner-title">About us</h1>
             </div>
          </div>
       </div>
       <div class="inner-shape"></div>
    </section>
    <!-- Inner Banner html end-->
    <!-- about section html start -->
    <section class="about-section about-page-section">
       <div class="about-service-wrap">
          <div class="container">
             <div class="section-heading">
                <div class="row align-items-end">
                   <div class="col-lg-6">
                      <h5 class="dash-style">About Our Company</h5>
                      <h2>Hello. Our Agency Has Been Present Best In The Market</h2>
                   </div>
                </div>
                <br>
                <div class="row align-items-end">
                      <div class="col-lg-12">
                        <div class="section-disc">
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec
                              ullamcorper mattis, pulvinar dapibus leo.Placeat nostrud natus tempora justo.
                              Laboriosam, eget mus nostrud natus Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, ex recusandae? Laborum cupiditate ab dolor esse ipsa, amet sit nobis, iste adipisci sunt et minus inventore error at ex eius?</p>
                        </div>
                     </div>
                </div>
                <br>
             </div>
             <div class="about-service-container">
                <div class="row">
                   <div class="col-lg-4">
                      <div class="about-service">
                         <div class="about-service-icon">
                            <img src="{{asset('frontend')}}/assets/images/icon15.png" alt="">
                         </div>
                         <div class="about-service-content">
                            <h4>AFFORDABLE PRICE</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-4">
                      <div class="about-service">
                         <div class="about-service-icon">
                            <img src="{{asset('frontend')}}/assets/images/icon16.png" alt="">
                         </div>
                         <div class="about-service-content">
                            <h4>BEST DESTINATION</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-4">
                      <div class="about-service">
                         <div class="about-service-icon">
                            <img src="{{asset('frontend')}}/assets/images/icon17.png" alt="">
                         </div>
                         <div class="about-service-content">
                            <h4>PERSONAL SERVICE</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <div class="about-video-wrap" style="background-image: url({{asset('frontend')}}/assets/images/img25.jpg);">
                <div class="video-button">
                   <a id="video-container" data-video-id="IUN664s7N-c">
                      <i class="fas fa-play"></i>
                   </a>
                </div>
             </div>
          </div>
       </div>
       <!-- client section html start -->
       <div class="client-section">
          <div class="container">
             <div class="row">
                <div class="col-lg-8 offset-lg-2">
                   <div class="section-heading text-center">
                      <h5 class="dash-style">Our Assocaites</h5>
                      <h2>Partner's & Clients</h2>
                      <p>Mollit voluptatem perspiciatis convallis elementum corporis quo veritatis aliquid blandit,
                         blandit torquent, odit placeat. Adipiscing repudiandae eius cursus? Nostrum magnis maxime
                         curae placeat.</p>
                   </div>
                </div>
             </div>
             <div class="client-wrap client-slider">
                <div class="client-item">
                   <figure>
                      <img src="{{asset('frontend')}}/assets/images/logo7.png" alt="">
                   </figure>
                </div>
                <div class="client-item">
                   <figure>
                      <img src="{{asset('frontend')}}/assets/images/logo8.png" alt="">
                   </figure>
                </div>
                <div class="client-item">
                   <figure>
                      <img src="{{asset('frontend')}}/assets/images/logo9.png" alt="">
                   </figure>
                </div>
                <div class="client-item">
                   <figure>
                      <img src="{{asset('frontend')}}/assets/images/logo10.png" alt="">
                   </figure>
                </div>
                <div class="client-item">
                   <figure>
                      <img src="{{asset('frontend')}}/assets/images/logo11.png" alt="">
                   </figure>
                </div>
                <div class="client-item">
                   <figure>
                      <img src="{{asset('frontend')}}/assets/images/logo8.png" alt="">
                   </figure>
                </div>
             </div>
          </div>
       </div>
       <!-- client html end -->
       <!-- callback section html start -->
       <div class="fullwidth-callback" style="background-image: url({{asset('frontend')}}/assets/images/img26.jpg);">
          <div class="container">
             <div class="section-heading section-heading-white text-center">
                <div class="row">
                   <div class="col-lg-8 offset-lg-2">
                      <h5 class="dash-style">Callback For More</h5>
                      <h2>Go Travel. Discover. Remember Us!</h2>
                      <p>Mollit voluptatem perspiciatis convallis elementum corporis quo veritatis aliquid blandit,
                         blandit torquent, odit placeat. Adipiscing repudiandae eius cursus? Nostrum magnis maxime
                         curae placeat.</p>
                   </div>
                </div>
             </div>
             <div class="callback-counter-wrap">
                <div class="counter-item">
                   <div class="counter-item-inner">
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
                </div>
                <div class="counter-item">
                   <div class="counter-item-inner">
                      <div class="counter-icon">
                         <img src="{{asset('frontend')}}/assets/images/icon2.png" alt="">
                      </div>
                      <div class="counter-content">
                         <span class="counter-no">
                            <span class="counter">250</span>K+
                         </span>
                         <span class="counter-text">
                            Awards Achieve
                         </span>
                      </div>
                   </div>
                </div>
                <div class="counter-item">
                   <div class="counter-item-inner">
                      <div class="counter-icon">
                         <img src="{{asset('frontend')}}/assets/images/icon3.png" alt="">
                      </div>
                      <div class="counter-content">
                         <span class="counter-no">
                            <span class="counter">15</span>K+
                         </span>
                         <span class="counter-text">
                            Active Members
                         </span>
                      </div>
                   </div>
                </div>
                <div class="counter-item">
                   <div class="counter-item-inner">
                      <div class="counter-icon">
                         <img src="{{asset('frontend')}}/assets/images/icon4.png" alt="">
                      </div>
                      <div class="counter-content">
                         <span class="counter-no">
                            <span class="counter">10</span>K+
                         </span>
                         <span class="counter-text">
                            Tour Destnation
                         </span>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <!-- callback html end -->
    </section>
    <!-- about html end -->
 </main>
@endsection
