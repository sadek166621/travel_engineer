@extends('frontend.master')
@section('content')
<main id="content" class="site-main">
    <!-- Inner Banner html start-->
    <section class="inner-banner-wrap">
       <div class="inner-baner-container" style="background-image: url({{asset('frontend')}}/assets/images/inner-banner.jpg);">
          <div class="container">
             <div class="inner-banner-content">
                <h1 class="inner-title">Offer</h1>
             </div>
          </div>
       </div>
       <div class="inner-shape"></div>
    </section>
    <!-- Inner Banner html end-->

    <div class="step-section offer-section">
       <div class="container">
        @foreach ($offers->take(6) as $offer )
          <div class="row row-cols-lg-6 row-cols-md-3 g-3">
             <div class="col">
                <a href="#american-express"><img src="{{ asset('assets') }}/images/uploads/offer/{{ $offer->image }}" alt=""></a>
             </div>
          </div>
          @endforeach
       </div>
    </div>

    <div class="info-section">
       <!-- Single Bank Info Start -->
       @foreach ($offers as $offer )
       <div id="american-express" class="bank-info mb-3">
        <div class="container">
           <div class="bank-title">
              <h3>{{ $offer->title }}</h3>
           </div>
           <div class="row">
              <div class="col-4">
                 <div class="text-center">
                    <img src="{{ asset('assets') }}/images/uploads/offer/{{ $offer->image }}" alt="image">
                 </div>
              </div>
              <div class="col-8">
                {!! $offer->description !!}
              </div>
              <div class="col-12">
                 <div class="header-btn">
                    <a class="button-primary" data-toggle="collapse" href="#collapseExample" role="button"
                       aria-expanded="false" aria-controls="collapseExample">
                       Terms and Conditions
                    </a>
                 </div>
                 <div class="collapse mt-2" id="collapseExample">
                    <div class="card p-3">
                       {!! $offer->term !!}
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
       @endforeach


       <!-- Single Bank Info End -->
    </div>
 </main>
@endsection
