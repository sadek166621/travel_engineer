@extends('admin.master')
@section('content')
<div class="animated fadeIn">
    <div class="row">
        <div class="col-lg-12">
            <form action="@isset($booking){{ route('admin.booking.update', $booking->id) }}@else{{ route('admin.booking.store') }}@endisset"
                  method="post" enctype="multipart/form-data" id="tourForm">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <strong>Booking Form</strong>
                    </div>
    {{--                @if ($errors->any())--}}
    {{--                    <div class="alert alert-danger">--}}
    {{--                        <ul>--}}
    {{--                            @foreach ($errors->all() as $error)--}}
    {{--                                <li>{{ $error }}</li>--}}
    {{--                            @endforeach--}}
    {{--                        </ul>--}}
    {{--                    </div>--}}
    {{--                @endif--}}
                    <div class="card-body card-block">
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name</label></div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="name" placeholder="Name" class="form-control @error('name') is-invalid @enderror" value="@isset($booking){{ $booking->name }}@else{{old('name')}}@endisset" required>
                                    {{-- <small class="form-text text-muted">This is a help text</small> --}}
                                    @error('name')
                                        <div class="invalid-feedback" role="alert">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Email</label></div>
                                <div class="col-12 col-md-9">
                                    <input type="email" id="text-input" name="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" value="@isset($booking){{ $booking->email }}@else{{old('email')}}@endisset" required>
                                    {{-- <small class="form-text text-muted">This is a help text</small> --}}
                                    @error('email')
                                        <div class="invalid-feedback" role="alert">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Phone</label></div>
                                <div class="col-12 col-md-9">
                                    <input type="number" id="text-input" name="phone" placeholder="Phone" class="form-control @error('phone') is-invalid @enderror" value="@isset($booking){{ $booking->phone }}@else{{old('phone')}}@endisset" required>
                                    {{-- <small class="form-text text-muted">This is a help text</small> --}}
                                    @error('phone')
                                        <div class="invalid-feedback" role="alert">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Expected Travel Date</label></div>
                                <div class="col-12 col-md-9">
                                    <input type="date" id="text-input" name="expected_travel_date" placeholder="Expected Travel Date" class="form-control @error('expected_travel_date') is-invalid @enderror" value="@isset($booking){{ $booking->expected_travel_date }}@else{{old('expected_travel_date')}}@endisset" required>
                                    {{-- <small class="form-text text-muted">This is a help text</small> --}}
                                    @error('expected_travel_date')
                                    <div class="invalid-feedback" role="alert">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Package</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="package_name" id="tourSelect" class="form-control" required>
                                        <option value="">Select Package </option>
                                        @foreach ($tours as $tour )
                                        <option value="{{ $tour->id }}" @isset($booking){{ $booking->package_name ==  $tour->id ? 'selected': ' ' }} @endisset>{{ $tour->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Departure Point</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="departure_point" id="departureSelect" class="form-control" required   >
                                        <option value="">Select Departure Point</option>
                                        @isset($booking)
                                        @foreach ($package_departures as $package_departure )
                                        <option value="{{ $package_departure->departure_id }}" {{ $booking->departure_point ==  $package_departure->departure_id ? 'selected': ' ' }}>{{ $package_departure->departure_id }}</option>
                                        @endforeach
                                        @endisset
                                    </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Number of Person</label></div>
                                <div class="col-12 col-md-9">
                                    <input type="number" id="text-input" name="no_of_person" placeholder="Number of Person" class="form-control @error('no_of_person') is-invalid @enderror" value="@isset($booking){{ $booking->no_of_person }}@else{{old('no_of_person')}}@endisset" required>
                                    {{-- <small class="form-text text-muted">This is a help text</small> --}}
                                    @error('no_of_person')
                                    <div class="invalid-feedback" role="alert">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                    </div>
                </div>
                <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm" onclick="resetForm()">
                            <i class="fa fa-ban"></i> Reset
                        </button>
                    </div>
            </form>
        </div>
    </div>
</div>
@endsection
@push('js')
<script>
    function resetForm() {
        document.getElementById("myForm").reset();
    }
</script>
<script>
    $(document).ready(function() {
        $('#tourSelect').change(function() {
            var tourId = $(this).val();
            if (tourId) {
                $.ajax({
                    url: '/admin/booking/get-departures/' + tourId,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        $('#departureSelect').empty();
                        $('#departureSelect').append('<option value="">Select Departure Point</option>');
                        $.each(data, function(key, value) {
                            $('#departureSelect').append('<option value="'+ value +'">'+ value +'</option>');
                        });
                    }
                });
            } else {
                $('#departureSelect').empty();
                $('#departureSelect').append('<option value="">Select Departure Point</option>');
            }
        });
    });
</script>
@endpush
