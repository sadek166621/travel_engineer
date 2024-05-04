@extends('frontend.master')

@section('content')
<style>
    .select2-container .select2-selection--single {
        height: 32px !important;
        width: 220px !important;
    }

    .select2-container--open .select2-dropdown--above {
        width: 220px !important;
    }

</style>
<main id="content" class="site-main">
    <!-- Inner Banner html start-->
    <section class="inner-banner-wrap">
        <div class="inner-baner-container"
            style="background-image: url({{asset('frontend')}}/assets/images/inner-banner.jpg);">
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
                                    <h3>Flight Details</h3>
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
                                    <div class="col-sm-4">

                                        <div class="form-group">
                                            <label>Origin*</label>
                                            <select class="form-control js-example-basic-single" name="origin" required>
                                                <option value="" selected="">Select Your Origin</option>
                                                @foreach ($origins as $origin )
                                                <option value="{{ $origin->id }}">{{ $origin->name }}</option>
                                                @endforeach

                                            </select>
                                        </div>

                                    </div>
                                    <div class="col-sm-4">

                                        <div class="form-group">
                                            <label>Destination*</label>
                                            <select class="form-control js-example-basic-single" name="destination"
                                                required>
                                                <option value="" selected="">Select Your Destination</option>
                                                @foreach ($destinations as $destination )
                                                <option value="{{ $destination->id }}">{{ $destination->name }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>

                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Departure Date*</label>
                                            <input type="date" class="form-control" required name="departure_date"
                                                style="height: 33px;border-radius: 4px">
                                        </div>
                                    </div>
                                    <div class="col-sm-4 round-trip" style="display: none">
                                        {{-- <div class="form-group">
                                            <label>Origin*</label>
                                            <select class="form-control js-example-basic-single" name="origin" required>
                                                <option value="" selected="">Select your country</option>
                                                @foreach ($origins as $origin )
                                                <option value="{{ $origin->id }}">{{ $origin->name }}</option>
                                                @endforeach
                                            </select>
                                        </div> --}}
                                    </div>
                                    <div class="col-sm-4 round-trip" style="display: none">
                                        {{-- <div class="form-group">
                                            <label>Destination*</label>
                                            <select class="form-control js-example-basic-single" name="destination"
                                                required>
                                                <option value="" selected="">Select your country</option>
                                                @foreach ($destinations as $destination )
                                                <option value="{{ $destination->id }}">{{ $destination->name }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div> --}}
                                    </div>
                                    <div class="col-sm-4 round-trip" style="display: none;">
                                        <div class="form-group">
                                            <label>Return Date*</label>
                                            <input type="date" class="form-control" name="return_date"
                                                style="height: 33px;border-radius: 4px">
                                        </div>
                                    </div>
                                </div>



                            </div>

                            <div class="booking-content">
                                <div class="form-title">
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

                            </div>

                            <div class="booking-content">
                                <div class="form-title">
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
                                <div class="row justify-content-between" style="float: right;">
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

    $(document).ready(function () {
        $('.js-example-basic-single').select2();
    });

</script>

<script>
    $('#exampleRadios2').click(function () {
        $('.round-trip').show();
    })
    $('#exampleRadios1').click(function () {
        $('.round-trip').hide();
    })

</script>

@endpush
