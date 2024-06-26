@extends('frontend.master')
@section('content')
<main id="content" class="site-main">
    <!-- Inner Banner html start-->
    <section class="inner-banner-wrap">
        <div class="inner-baner-container"
            style="background-image: url({{asset('frontend')}}/assets/images/inner-banner.jpg);">
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
                        @if ($package->night != NULL && $package->days != NULL)
                        <p class="text">{{ $package->night }} Night {{$package->days}} Days</p>
                        @else
                        <p class="text">{{ $package->comment }}</p>
                        @endif
                    </div>
                    <hr>
                    <div>
                        <h4>Package Details</h4>
                    </div>
                    <div class="row bulet-point">
                        <?php $activities = $package->dayactivity->take(10); ?>
                        @foreach ($activities as $activity)
                        <div class="col-6">
                            <p><i class="fas fa-plane"></i> {{ $activity->activity }}</p>
                        </div>
                        @endforeach

                        @foreach ($package->dayactivity->skip(10) as $index => $activity)
                        <div class="col-6 more-details22" style="display: none;">
                            <p><i class="fas fa-plane"></i> {{ $activity->activity }}</p>
                        </div>
                        @endforeach

                        <!--<div class="col-12">-->
                        <!--    <div class="header-btn  mb-2">-->
                        <!--        <a href="#" class=" mx-auto view-more-btn"style="color: black;font-weight: bold; margin-top: 30px;">View More</a>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <div class="col-12">
                            <div class="header-btn  mb-2">
                                <a href="#" class=" mx-auto view-more-btn" style="color: black;font-weight: bold;">View
                                    More</a>
                            </div>
                                  
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 border d-flex flex-column align-items-center justify-content-center">
                    <h3 class="title">TK {{ $package->price }}</h3>
                    <h5 class="text">Starting Price</h5>
                    <div class="header-btn mt-2">
                        <a href="#" class="button-secondary" data-toggle="modal"
                            data-target="#exampleModal{{ $package->id }}">Submit
                            Inquiry</a>
                        {{-- @php
                           dd($package->id);
                     @endphp --}}
                        <!-- Inquiry Modal Start -->
                        <div class="modal fade" id="exampleModal{{ $package->id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel{{ $package->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title" id="exampleModalLabel{{ $package->id }}">Book A Tour
                                            Deals</h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="package-booking-form" action="{{ route('submit-package-booking') }}"
                                            method="Post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" value="{{ $package->id }}"
                                                class="form-control bg-light border-0" name="package_name">

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="name">Name</label>
                                                    <input type="text" name="name" value="" required
                                                        class="form-control border-danger rounded"
                                                        placeholder="Your Name">
                                                    <div class="error-message" id="name-error"></div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="email">Email</label>
                                                    <input type="email" name="email" value="" required
                                                        class="form-control border-danger rounded"
                                                        placeholder="Your Email">
                                                    <div class="error-message" id="email-error"></div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="phone-number">Phone Number</label>
                                                    <input type="text" name="phone" value="" required
                                                        class="form-control border-danger rounded"
                                                        placeholder="Your Phone Number">
                                                    <div class="error-message" id="phone-error"></div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="person">Number Of Person</label>
                                                    <input type="number" name="no_of_person" value=""
                                                        class="form-control border-danger rounded"
                                                        placeholder="Number Of Person">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-12">
                                                    <label for="date">Expected Travel Date</label>
                                                    <input type="date" name="expected_travel_date"
                                                        class="form-control border-danger rounded" id="inputCity">
                                                </div>
                                            </div>
                                            <button type="submit" class="button-primary px-4">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal End for package {{ $package->id }} -->
                        <!-- Inquiry Modal End -->
                    </div>
                    <div class="header-btn mt-3">
                        <a href="tel:+{{ getsetting()->mobile }}" class="button-secondary">Call Now</a>
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
{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#package-booking-form').submit(function(event) {
            var name = $('input[name="name"]').val();
            var email = $('input[name="email"]').val();
            var phone = $('input[name="phone"]').val();

            if (name === '' || email === '' || phone === '') {
                event.preventDefault(); // Prevent form submission
                // Display error messages
                if (name === '') {
                    $('#name-error').text('Please enter your name');
                }
                if (email === '') {
                    $('#email-error').text('Please enter your email');
                }
                if (phone === '') {
                    $('#phone-error').text('Please enter your phone number');
                }
            }
        });
    });
</script> --}}
<script>
    document.querySelectorAll('.view-more-btn').forEach(button => {
        button.addEventListener('click', function (event) {
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
