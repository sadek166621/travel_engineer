@extends('frontend.master')
@section('content')
<main id="content" class="site-main">
    <!-- Inner Banner html start-->
    <section class="inner-banner-wrap">
       <div class="inner-baner-container" style="background-image: url({{asset('frontend')}}/assets/images/inner-banner.jpg);">
          <div class="container">
             <div class="inner-banner-content">
                <h1 class="inner-title">Destination</h1>
             </div>
          </div>
       </div>
    </section>
    <!-- Inner Banner html end-->

    <!-- Destination Part Start -->
    <section class="package-section my-3">
       <div class="container">
          <div class="package-inner">
                  <div class="row">
                    @foreach ($countries as $package )
                     <div class="col-lg-3 col-md-6">
                        <div class="package-wrap">
                           <figure class="feature-image">
                              <a href="{{ route('menu-package-details',$package->id) }}">
                                 <img src="{{asset($package->image)}}" alt="">
                              </a>
                           </figure>
                           <div class="package-price">
                              <h6>
                                 <span>{{ $package->name }}</span>
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
                     <a href="{{ route('all-packages') }}" class="button-primary">VIEW ALL PACKAGES</a>
                  </div>
               </div>
       </div>
    </section>
    <!-- Destination Part end -->
 </main>
@endsection

