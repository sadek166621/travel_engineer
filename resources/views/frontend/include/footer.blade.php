<footer id="colophon" class="site-footer footer-primary">
    <div class="top-footer">
       <div class="container">
          <div class="row g-5">
             <div class="col-lg-4 col-md-6">
                <aside class="widget widget_text">
                   <a href="{{ route('home') }}"><img src="{{ asset('assets') }}/images/uploads/settings/{{ getSetting()->logo }}" alt=""></a>
                   <div class="award-img">
                      {{-- <a href="{{ route('home') }}"><img class="award" src="{{asset('frontend')}}/assets/images/vote4us.png" alt=""></a> --}}
                      <!-- <a href="#"><img src="{{asset('frontend')}}/assets/images/ad.png" alt=""></a> -->
                   </div>
                </aside>
             </div>
             <div class="col-lg-4 col-md-6">
                <aside class="widget widget_text">
                   <h3 class="widget-title">Contact Information</h3>
                   <div class="textwidget widget-text" style="line-height: 20px;">

                      <ul>
                         <li>
                            <a href="#">
                               <i class="fas fa-phone-alt"></i>
                               {{ getSetting()->mobile }}
                            </a>
                         </li>
                         <li>
                            <a href="#">
                               <span><i class="fas fa-envelope"></i> {{ getSetting()->email }}</span>
                            </a>
                         </li>
                         <li>
                            <i class="fas fa-map-marker-alt"></i>
                            {{ getSetting()->address }}
                         </li>
                      </ul>
                   </div>
                </aside>
             </div>
             <div class="col-lg-4 col-md-6">
                <aside class="widget widget_text">
                    <h3 class="widget-title">Social Media</h3>
                </aside>
                <aside class="icon">
                   <a href="{{ getSetting()->facebook_link }}"><i class="fab fa-facebook"></i></a>
                   <a href="{{ getSetting()->instagram_link }}"><i class="fab fa-instagram"></i></a>
                   <a href="{{ getSetting()->linkedin_link }}"><i class="fab fa-linkedin"></i></a>
                   <a href="{{ getSetting()->youtube_link }}"><i class="fab fa-youtube"></i></a>
                </aside>
                {{-- <div class="award-img">
                   <a href="#"><img src="{{asset('frontend')}}/assets/images/ad.png" alt=""></a>
                   <a href="#"><img src="{{asset('frontend')}}/assets/images/ad.png" alt=""></a>
                </div> --}}
             </div>
          </div>
       </div>
    </div>
    <div class="buttom-footer">
       <div class="container">
          <div class="row align-items-center">
             <div class="col-md-4">
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

             <div class="col-md-8">
                <div class="copy-right text-right"> © 2024 | Travel Engineer | All Rights Reserved | Designed And Maintenance  By <a href="https://skydreamit.com/">Sky Dream IT</a> </div>
             </div>
          </div>
       </div>
    </div>
 </footer>
