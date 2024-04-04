@extends('frontend.master')
@section('content')
<style>
    .select2-container .select2-selection--single {
    height: 32px !important;
    }
</style>
<main id="content" class="site-main">
    <!-- Inner Banner html start-->
    <section class="inner-banner-wrap">
       <div class="inner-baner-container" style="background-image: url({{asset('frontend')}}/assets/images/inner-banner.jpg);">
          <div class="container">
             <div class="inner-banner-content">
                <h1 class="inner-title">Flight Tickets</h1>
             </div>
          </div>
       </div>
       <div class="inner-shape"></div>
    </section>
    <!-- Inner Banner html end-->
    <div class="step-section booking-section">
       <div class="container">
          <div class="row">
             <div class="col-lg-8 mx-auto">
                <!-- step one form html start -->
                <div class="booking-form-wrap">
                    @if (Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                   <form action="{{ route('submit-tickets') }}" method="post">
                    @csrf
                      <div id="tour_details" class="booking-content">
                         <div class="form-title">
                            <span>1</span>
                            <h3>Tour Details</h3>
                         </div>
                         <div class="row">
                            <div class="col-sm-12">
                               <div class="form-group">
                                  <label>Tour Type *</label>
                                  <div class="d-flex justify-content-around">
                                     <div class="form-check">
                                        <input class="form-check-input" type="radio" name="way"
                                           id="exampleRadios1" value="1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                           One Way
                                        </label>
                                     </div>
                                     <div class="form-check">
                                        <input class="form-check-input" type="radio" name="way"
                                           id="exampleRadios2" value="2">
                                        <label class="form-check-label" for="exampleRadios2">
                                           Round Trip
                                        </label>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="col-sm-6">
                               <div class="form-group">
                                  <div class="form-group">
                                     <label>Origin*</label>
                                     <select class="form-control js-example-basic-single" name="origin" required >
                                        <option value="" selected="">Select your country</option>
                                        @foreach ($origins as $origin )
                                        <option value="{{ $origin->id }}">{{ $origin->name }}</option>
                                        @endforeach

                                     </select>
                                  </div>
                               </div>
                            </div>
                            <div class="col-sm-6">
                               <div class="form-group">
                                  <div class="form-group">
                                     <label>Destination*</label>
                                     <select class="form-control js-example-basic-single" name="destination" required >
                                        <option value="" selected="">Select your country</option>
                                        @foreach ($destinations as $destination )
                                        <option value="{{ $destination->id }}">{{ $destination->name }}</option>
                                        @endforeach
                                     </select>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="row justify-content-end">
                            <a class="button-secondary"
                               onclick="changePart('tour_details', 'information')">Next</a>
                         </div>
                      </div>

                      <div id="information" class="booking-content" style="display: none;">
                         <div class="form-title">
                            <span>2</span>
                            <h3>Information</h3>
                         </div>
                         <div class="row">
                            <div class="col-sm-4">
                               <div class="form-group">
                                  <label>Adults *</label>
                                  <input type="number" class="form-control" required name="adult">
                               </div>
                            </div>
                            <div class="col-sm-4">
                               <div class="form-group">
                                  <label>Children</label>
                                  <input type="number" class="form-control" name="children">
                               </div>
                            </div>
                            <div class="col-sm-4">
                               <div class="form-group">
                                  <label>Infants</label>
                                  <input type="number" class="form-control" name="infants">
                               </div>
                            </div>
                         </div>
                         <div class="row">
                            <div class="col-sm-6">
                               <div class="form-group">
                                  <label>Departure Date *</label>
                                  <input type="date" class="form-control" required name="departure_date">
                               </div>
                            </div>
                            <div class="col-sm-6">
                               <div class="form-group">
                                  <label>Return Date</label>
                                  <input type="date" class="form-control" required name="return_date">
                               </div>
                            </div>
                         </div>
                         <div class="row justify-content-between">
                            <a class="button-secondary"
                               onclick="changePart('information', 'tour_details')">Previous</a>
                            <a class="button-secondary"
                               onclick="changePart('information', 'personal_info')">Next</a>
                         </div>
                      </div>

                      <div id="personal_info" class="booking-content" style="display: none;">
                         <div class="form-title">
                            <span>3</span>
                            <h3>YOUR DETAILS</h3>
                         </div>
                         <div class="row">
                            <div class="col-sm-6">
                               <div class="form-group">
                                  <label>First Name</label>
                                  <input type="text" class="form-control" required name="firstname">
                               </div>
                            </div>
                            <div class="col-sm-6">
                               <div class="form-group">
                                  <label>Last Name</label>
                                  <input type="text" class="form-control" required name="lastname">
                               </div>
                            </div>
                         </div>
                         <div class="row">
                            <div class="col-sm-6">
                               <div class="form-group">
                                  <label>Email*</label>
                                  <input type="email" class="form-control" required name="email">
                               </div>
                            </div>
                            <div class="col-sm-6">
                               <div class="form-group">
                                  <label>Phone*</label>
                                  <input type="text" class="form-control" required name="phone">
                               </div>
                            </div>
                         </div>
                         <div class="row justify-content-between">
                            <a class="button-secondary"
                               onclick="changePart('personal_info', 'information')">Previous</a>
                            <button type="submit" class="button-secondary">Submit</button>
                         </div>
                         <!--End row -->
                      </div>
                   </form>
                </div>
                <!-- step one form html end -->
             </div>
          </div>
       </div>
    </div>
 </main>
@endsection
@push('js')
<script>
    function changePart(init, next) {
       $('#' + init).hide();
       $('#' + next).show();
    }

    $(document).ready(function() {
    $('.js-example-basic-single').select2();
    });

 </script>

@endpush

