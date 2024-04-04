@extends('frontend.master')
@section('content')
<main id="content" class="site-main">
    <!-- Inner Banner html start-->
    <section class="inner-banner-wrap">
       <div class="inner-baner-container" style="background-image: url({{asset('frontend')}}/assets/images/inner-banner.jpg);">
          <div class="container">
             <div class="inner-banner-content">
                <h1 class="inner-title">BLog Details</h1>

             </div>
          </div>
       </div>
       <div class="inner-shape"></div>
    </section>
    <!-- Inner Banner html end-->
    <div class="single-post-section">
       <div class="single-post-inner">
          <div class="container">
             <div class="row">
                @foreach ($blogs as $blog )
                <div class="col-lg-12 primary right-sidebar">
                    <!-- single blog post html start -->
                    <figure class="feature-image">
                       <img src="{{ asset('assets') }}/images/uploads/blog/{{ $blog->image }}" alt="">
                    </figure>
                    <article class="single-content-wrap">
                       <h3>{{$blog->title}}</h3>
                       <p>{!! $blog->description !!}</p>

                    </article>



                    <!-- post comment html -->

                    <!-- blog post item html end -->
                 </div>
                @endforeach

             </div>
          </div>
       </div>
    </div>
 </main>
@endsection
