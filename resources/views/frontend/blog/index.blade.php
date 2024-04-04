@extends('frontend.master')
@section('content')
<main id="content" class="site-main">
    <!-- Inner Banner html start-->
    <section class="inner-banner-wrap">
       <div class="inner-baner-container" style="background-image: url({{asset('frontend')}}/assets/images/inner-banner.jpg);">
          <div class="container">
             <div class="inner-banner-content">
                <h1 class="inner-title">Blog</h1>
             </div>
          </div>
       </div>
       <div class="inner-shape"></div>
    </section>
    <!-- Inner Banner html end-->
    <div class="archive-section blog-archive">
       <div class="archive-inner">
          <div class="container">
             <div class="row">
                <div class="col-lg-12 primary right-sidebar">
                   <!-- blog post item html start -->
                   <div class="grid row">
                    @foreach ($blogs as $blog )
                    <div class="grid-item col-md-6">
                        <article class="post">
                           <figure class="feature-image">
                              <a href="#">
                                 <img src="{{ asset('assets') }}/images/uploads/blog/{{ $blog->image }}" alt="">
                              </a>
                           </figure>
                           <div class="entry-content">
                              <h3>
                                 <a href="#">{{ $blog->title }}</a>
                              </h3>
                              <p>{!!  $blog->description  !!}
                              </p>
                              <a href="{{ route('blog-details',$blog->id) }}" class="button-text">CONTINUE READING..</a>
                           </div>
                        </article>
                     </div>
                    @endforeach

                   </div>
                   <!-- blog post item html end -->
                   <!-- pagination html start-->
                   {{-- <div class="post-navigation-wrap">
                      <nav>
                         <ul class="pagination">
                            <li>
                               <a href="#">
                                  <i class="fas fa-arrow-left"></i>
                               </a>
                            </li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">..</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                               <a href="#">
                                  <i class="fas fa-arrow-right"></i>
                               </a>
                            </li>
                         </ul>
                      </nav>
                   </div> --}}
                   <!-- pagination html start-->
                </div>

             </div>
          </div>
       </div>
    </div>
 </main>
@endsection
