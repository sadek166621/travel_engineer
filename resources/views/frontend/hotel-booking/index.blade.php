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
                    <h1 class="inner-title">Hotel Booking</h1>
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
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('submit-hotel') }}" method="post">
                            @csrf
                            <div id="tour_details" class="booking-content">
                                <div class="form-title">
                                    <h3>Hotel Booking</h3>
                                </div>
                                <div class="row">

                                    <div class="col-sm-4">

                                        <div class="form-group">
                                            <label>Country*</label>
                                            <select class="form-control js-example-basic-single" name="country"
                                                id="country" required>
                                                <option value="" selected="">Select your country</option>
                                                @foreach ($countries as $country )
                                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                                                @endforeach

                                            </select>
                                        </div>

                                    </div>
                                    <div class="col-sm-4">

                                        <div class="form-group">
                                            <label>Hotel Name*</label>
                                            <select class="form-control js-example-basic-single" name="hotel_name"
                                                id="hotel" required>
                                                <option value="" selected="">Select Hotel</option>
                                                {{-- @foreach ($destinations as $destination )
                                                    <option value="{{ $destination->id }}">{{ $destination->name }}
                                                </option>
                                                @endforeach --}}
                                            </select>
                                        </div>

                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Check-In*</label>
                                            <input type="date" class="form-control" required name="check_in"
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
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>How Many Person *</label>
                                <input type="number" class="form-control" required name="person">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Stay Duration *</label>
                                <input type="number" class="form-control" required name="stay_duration">
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
                                <label>First Name *</label>
                                <input type="text" class="form-control" required name="firstname">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Last Name *</label>
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
<script>
    $(document).ready(function () {
        $('#country').change(function () {
            // alert('ok');
            var countryId = $(this).val();
            if (countryId) {
                // alert();
                $.ajax({
                    url: '{{ route("hotel.by_country", ":country") }}'.replace(':country',
                        countryId),
                    type: 'GET',
                    dataType: 'json',
                    success: function (data) {
                        $('#hotel').empty();
                        $('#hotel').append('<option value="">Select Hotel</option>');
                        $.each(data, function (key, value) {
                            $('#hotel').append('<option value="' + value.id + '">' +
                                value.name + '</option>');
                        });
                    }
                });
            } else {
                $('#hotel').empty();
                $('#hotel').append('<option value="">No Hotel Found</option>');
            }
        });
    });

</script>

@endpush
