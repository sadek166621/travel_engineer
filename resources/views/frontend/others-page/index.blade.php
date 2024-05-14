@extends('frontend.master')
@section('content')
<main id="content" class="site-main">
    <!-- Inner Banner html start-->
    <section class="inner-banner-wrap">
       <div class="inner-baner-container" style="background-image: url({{asset('frontend')}}/assets/images/inner-banner.jpg);">
          <div class="container">
             <div class="inner-banner-content">
                <h1 class="inner-title">{{ $other->title }}</h1>
             </div>
          </div>
       </div>
    </section>
    <!-- Inner Banner html end-->

    <!-- Destination Part Start -->
    <section class="package-section my-3">
        <div class="container mb-80 mt-50">
            <div class="row">
                <div class="col-lg-11 mb-40 mx-auto">
                    <div class="card py-4 px-3 shadow-sm">
                        <p class="">
                            {!! $other->description !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Destination Part end -->
 </main>
@endsection

