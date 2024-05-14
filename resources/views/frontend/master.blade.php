<!doctype html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- favicon -->
   <link rel="icon" type="image/png" href="{{ asset('assets') }}/images/uploads/settings/{{ getSetting()->fav_icon }}">
   <!-- Bootstrap CSS -->
   @include('frontend.include.style')
   <title>Travel Engineer </title>
</head>

<body class="home">
   {{-- <div id="siteLoader" class="site-loader">
      <div class="preloader-content">
         <img src="{{asset('frontend')}}/assets/images/loader1.gif" alt="">
      </div>
   </div> --}}
   <div id="page" class="full-page">
    @include('frontend.include.header')

     @yield('content')

    @include('frontend.include.footer')

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
   @include('frontend.include.script')
   @stack('js')
</body>

</html>
