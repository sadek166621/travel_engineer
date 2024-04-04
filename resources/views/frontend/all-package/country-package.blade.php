@extends('frontend.master')
@section('content')
<main id="content" class="site-main">
    <!-- Inner Banner html start-->
    <section class="inner-banner-wrap">
       <div class="inner-baner-container" style="background-image: url({{asset('frontend')}}/assets/images/inner-banner.jpg);">
          <div class="container">
             <div class="inner-banner-content">
                <h1 class="inner-title">All Packages</h1>
             </div>
          </div>
       </div>
       <div class="inner-shape"></div>
    </section>
    <!-- Inner Banner html end-->

    <!-- Packages Part Start -->
    <section class="category-section mb-5">
        @foreach ($packages as $package )
        <div class="container mt-3">
            <div class="row">
               <div class="col-lg-3 col-md-6 category-img">
                  <img src="{{asset('uploads')}}/package_thumbnail/{{$package->thumbnail}}" alt="">
               </div>
               <div class="col-lg-7 col-md-6 border">
                  <div class="mt-4 d-flex align-items-center justify-content-between">
                     <h2>{{ $package->name }}</h2>
                     <p class="text">{{ $package->night }} Night {{$package->days}} Days</p>
                  </div>
                  <hr>
                  <div>
                     <h4>Package Details</h4>
                  </div>
                  <div class="row">
                    <?php $activities = $package->dayactivity->take(6); ?>
                    @foreach ($activities as $activity)
                    <div class="col-6">
                        <p><i class="fas fa-plane"></i> {{ $activity->activity }}</p>
                    </div>
                    @endforeach

                    @foreach ($package->dayactivity->skip(6) as $index => $activity)
                    <div class="col-6 more-details22" style="display: none;">
                        <p><i class="fas fa-plane"></i> {{ $activity->activity }}</p>
                    </div>
                    @endforeach

                    <div class="col-12">
                        <div class="header-btn  mb-2">
                            <a href="#" class="button-primary mx-auto view-more-btn">View More</a>
                        </div>
                    </div>
                </div>
               </div>
               <div class="col-lg-2 col-md-6 border d-flex flex-column align-items-center justify-content-center">
                  <h3 class="title">LKR {{ $package->price }}</h3>
                  <h5 class="text">Starting Price</h5>
                  <div class="header-btn mt-2">
                     <a href="#" class="button-secondary">Submit Inquiry</a>
                  </div>
                  <div class="header-btn mt-3">
                     <a href="#" class="button-secondary">Call Now</a>
                  </div>

               </div>
            </div>
         </div>
        @endforeach


       {{-- <div class="container mt-3">
          <div class="row g-5">
             <div class="col-lg-3 col-md-6 category-img">
                <img src="{{asset('frontend')}}/assets/images/gallery-3.jpg" alt="">
             </div>
             <div class="col-lg-6 col-md-6 border">
                <div class="mt-4 d-flex align-items-center justify-content-between">
                   <h2>Dubai Tour</h2>
                   <p class="text">4 Nights 5 Days</p>
                </div>
                <hr>
                <div>
                   <h4>Package Details</h4>
                </div>
                <div class="row">
                   <div class="col-6">
                      <p><i class="fas fa-plane"></i> 4 Nights Hotel Accommodation</p>
                      <p><i class="fas fa-plane"></i> All Transfers</p>
                      <p><i class="fas fa-plane"></i> City Tour</p>
                   </div>
                   <div class="col-6">
                      <p><i class="fas fa-plane"></i> Burj Khalifa 124th Floor OD</p>
                      <p><i class="fas fa-plane"></i> Desert Safari with BBQ Dinner</p>
                      <p><i class="fas fa-plane"></i> Desert Safari with BBQ Dinner</p>
                   </div>
                </div>
             </div>
             <div class="col-lg-3 col-md-6 border d-flex flex-column align-items-center justify-content-center">
                <h3 class="title">LKR 155,000</h3>
                <h5 class="text">Starting Price</h5>
                <div class="header-btn mt-2">
                   <a href="#" class="button-primary">Submit Inquiry</a>
                </div>
                <div class="header-btn mt-3">
                   <a href="#" class="button-primary">Call Now</a>
                </div>

             </div>
          </div>
       </div> --}}

       {{-- <div class="container mt-3">
          <div class="row">
             <div class="col-lg-3 col-md-6 category-img">
                <img src="{{asset('frontend')}}/assets/images/gallery-3.jpg" alt="">
             </div>
             <div class="col-lg-6 col-md-6 border">
                <div class="mt-4 d-flex align-items-center justify-content-between">
                   <h2>Dubai Tour</h2>
                   <p class="text">4 Nights 5 Days</p>
                </div>
                <hr>
                <div>
                   <h4>Package Details</h4>
                </div>
                <div class="row">
                   <div class="col-6">
                      <p><i class="fas fa-plane"></i> 4 Nights Hotel Accommodation</p>
                      <p><i class="fas fa-plane"></i> All Transfers</p>
                      <p><i class="fas fa-plane"></i> City Tour</p>
                   </div>
                   <div class="col-6">
                      <p><i class="fas fa-plane"></i> Burj Khalifa 124th Floor OD</p>
                      <p><i class="fas fa-plane"></i> Desert Safari with BBQ Dinner</p>
                      <p><i class="fas fa-plane"></i> Desert Safari with BBQ Dinner</p>
                   </div>
                </div>
             </div>
             <div class="col-lg-3 col-md-6 border d-flex flex-column align-items-center justify-content-center">
                <h3 class="title">LKR 155,000</h3>
                <h5 class="text">Starting Price</h5>
                <div class="header-btn mt-2">
                   <a href="#" class="button-primary">Submit Inquiry</a>
                </div>
                <div class="header-btn mt-3">
                   <a href="#" class="button-primary">Call Now</a>
                </div>

             </div>
          </div>
       </div> --}}
    </section>
    <!-- Packages Part end -->
 </main>
@endsection
@push('js')
<script>
    document.querySelectorAll('.view-more-btn').forEach(button => {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            const moreDetails = this.closest('.row').querySelectorAll('.more-details22');
            moreDetails.forEach(detail => {
                detail.style.display = detail.style.display === 'none' ? 'block' : 'none';
            });
            this.innerText = this.innerText === 'View More' ? 'View Less' : 'View More';
        });
    });
    </script>
@endpush
