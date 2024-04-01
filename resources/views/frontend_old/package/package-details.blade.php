@extends('frontend.master')
@section('content')
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Packages Details</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active text-white">Packages Details</li>
            </ol>
    </div>
</div>
<!-- Header End -->

<!-- Package Name Start -->
<div class="container-fluid about py-4">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5">
                <div class="h-100">
                    <img src="{{asset('uploads')}}/package_thumbnail/{{$items->thumbnail}}" class="img-fluid w-100 h-100" alt="">
                </div>
            </div>
            <div class="col-lg-7">
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <h5 class="section-about-title pe-3">TOUR NAME</h5>
                <h1 class="mb-4">{{ $items->name }}</h1>
                <div class="row gy-2 gx-4 mb-4">
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-info me-2"></i><strong>Category:</strong>
                            {{ $items->Cat->name }}</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-info me-2"></i><strong>Country:</strong>
                            {{ $items->Country->name }}</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-info me-2"></i><strong>Place:</strong>
                            {{ $items->Place->name }}</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-info me-2"></i>
                            <strong>Departure Point:</strong>
                                    @foreach ($departures as $departure )
                                        {{ $departure->departure_id }},
                                    @endforeach
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-info me-2"></i><strong>Duration:</strong> {{ $items->night }} Nights/{{ $items->days }}
                            Days
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-info me-2"></i><strong>Number of
                                Person:</strong> {{ $items->no_of_people }}</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-info me-2"></i><strong>Price:</strong> {{ $items->price }}
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-info me-2"></i><strong>Age:</strong>
                            @if ($items->age==1)
                                Adult
                            @elseif($items->age==2)
                                Kids
                            @elseif($items->age==3)
                                Both
                            @endif
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-info me-2"></i><strong>Travel
                                Period:</strong> {{ $items->daterange }}</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-info me-2"></i><strong>Exception:</strong>
                           @if ($items->exception != Null)
                           {{ $items->exception }}
                           @else
                           No Exception Found
                           @endif
                        </p>
                    </div>
                </div>
                <a class="btn btn-info rounded-pill py-3 px-5 mt-2" data-bs-toggle="modal"
                data-bs-target="#exampleModal" href="#">Book Now</a>

                <!-- Book Now Modal Start -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <div class="modal-title" id="exampleModalLabel">
                                    <h3 class="text-info mb-3">Book A Tour Deals</h3>
                                    <p class="text-info mb-4">
                                        <span class="text-warning">
                                           @if ($items->booking_offer!=null)
                                           {{ $items->booking_offer }}
                                           @else
                                           
                                           @endif
                                        </span>.
                                    </p>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('submit-package-booking') }}" method="Post" enctype="multipart/form-data" >
                                    @csrf
                                    <input type="hidden" value="{{ $items->id }}" class="form-control bg-light border-0" name="package_name">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control bg-light border-0" name="name"
                                                    placeholder="Your Name">
                                                <label for="name">Your Name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="email" class="form-control bg-light border-0"
                                                    name="email" placeholder="Your Email">
                                                <label for="email">Your Email</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="number" class="form-control bg-light border-0"
                                                    name="phone" placeholder="Your Phone Number">
                                                <label for="email">Phone Number</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating date">
                                                <input type="date" class="form-control bg-light border-0"
                                                    name="expected_travel_date" placeholder="Date"/>
                                                <label for="date">Expected Travel Date</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <select class="form-select bg-light border-0" name="departure_point">
                                                    @foreach ($departures as $departure )
                                                    <option value="{{ $departure->departure_id }}">{{ $departure->departure_id }}</option>
                                                    @endforeach
                                                </select>
                                                <label for="select1">Departure Point</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control bg-light border-0"
                                                    name="no_of_person" placeholder="Number of Person">
                                                <label for="email">Number of Person</label>
                                            </div>
                                        </div>
                                        {{-- <div class="col-12">
                                            <div class="form-floating">
                                                <textarea class="form-control bg-light border-0"
                                                    placeholder="Special Request" name="message"
                                                    style="height: 100px"></textarea>
                                                <label for="message">Special Request</label>
                                            </div>
                                        </div> --}}
                                        <div class="col-12">
                                            <button class="btn btn-info text-white w-100 py-3" type="submit">Book
                                                Now</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Book Now Modal End -->
            </div>
        </div>
    </div>
</div>
<!-- Package Name End -->

<!-- Packages Details Start -->
<div class="container-fluid">
    <!-- Single Day Start -->
    @foreach ($days as $day )
    <div class="container py-4">
        <div class="text-center pb-3">
            <h3 class="text-info">{{ $day->title }}</h3>
        </div>
        @foreach ($dayactivitys as $dayactivity )
        @if ($day->id == $dayactivity->day_id )
        <div class="py-4">
            <div class="pb-3">
                <h5 class="text-dark">{{ $dayactivity->activity }}</h5>
                <p>
                    {{ $dayactivity->description }}
                </p>
            </div>
            @if ($dayactivity->image1 && $dayactivity->image2 != null )
            <div class="row g-4">
                <div class="col-lg-6">
                    <img style="height: 250px;" class="w-100" src="{{asset('uploads')}}/activity/{{$dayactivity->image1}}" alt="">
                </div>
                <div class="col-lg-6">
                    <img style="height: 250px;" class="w-100" src="{{asset('uploads')}}/activity/{{$dayactivity->image2}}" alt="">
                </div>
            </div>
            @elseif($dayactivity->image1 != null)
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <img style="height: 250px;" class="w-100" src="{{asset('uploads')}}/activity/{{$dayactivity->image1}}" alt="">
                </div>
            </div>
            @elseif($dayactivity->image2 != null)
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <img style="height: 250px;" class="w-100" src="{{asset('uploads')}}/activity/{{$dayactivity->image2}}" alt="">
                </div>
            </div>
            @endif
        </div>
        @endif
        @endforeach
    </div>
    @endforeach

    <!-- Single Day End -->

    <!-- Single Day Start -->
    {{-- <div class="container py-4">
        <div class="text-center pb-3">
            <h3 class="text-info">DAY 2: Kolkata to Pattaya Arrival via Bangkok</h3>
        </div>
        <div class="py-4">
            <div class="pb-3">
                <h5 class="text-dark">Kolkata to Pattaya Arrival via Bangkok</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam dicta voluptate culpa, sed,
                    suscipit
                    dolore cumque facilis adipisci aliquid voluptatem praesentium, earum mollitia ipsum. Dolorum
                    deserunt ipsam quos tempora assumenda.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-6">
                    <img style="height: 250px;" class="w-100" src="{{asset('frontend')}}/assect/img/Bangkok.jpg" alt="">
                </div>
                <div class="col-lg-6">
                    <img style="height: 250px;" class="w-100" src="{{asset('frontend')}}/assect/img/Bangkok.jpg" alt="">
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Single Day End -->

    <!-- Single Day Start -->
    {{-- <div class="container py-4">
        <div class="text-center pb-3">
            <h3 class="text-info">DAY 3: Kolkata to Pattaya Arrival via Bangkok</h3>
        </div>
        <div class="py-4">
            <div class="pb-3">
                <h5 class="text-dark">Kolkata to Pattaya Arrival via Bangkok</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam dicta voluptate culpa, sed,
                    suscipit
                    dolore cumque facilis adipisci aliquid voluptatem praesentium, earum mollitia ipsum. Dolorum
                    deserunt ipsam quos tempora assumenda.</p>
            </div>
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <img style="height: 250px;" class="w-100" src="{{asset('frontend')}}/assect/img/Bangkok.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Single Day End -->

    <!-- Single Day Start -->
    <div class="container py-4">
        <div class="text-center pb-3">
            <h3 class="text-info">DAY 4: Kolkata to Pattaya Arrival via Bangkok</h3>
        </div>
        <div class="py-4">
            <div class="pb-3">
                <h5 class="text-dark">Kolkata to Pattaya Arrival via Bangkok</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam dicta voluptate culpa, sed,
                    suscipit
                    dolore cumque facilis adipisci aliquid voluptatem praesentium, earum mollitia ipsum. Dolorum
                    deserunt ipsam quos tempora assumenda.</p>
            </div>
        </div>
    </div> --}}
    <!-- Single Day End -->

    <!-- Includes Part Start -->
    <div class="container py-4">
        <div class="text-center pb-3">
            <h3 class="text-info">Includes</h3>
        </div>
        <div class="p-4 border">
            <p>
                @if ($items->includes != null)
                {!! $items->includes !!}.
                @else
                N/A
                @endif
            </p>
        </div>
    </div>
    <!-- Includes Part End -->

    <!-- Excludes Part Start -->
    <div class="container py-4">
        <div class="text-center pb-3">
            <h3 class="text-info">Excludes</h3>
        </div>
        <div class="p-4 border">
            <p>
                @if ($items->exclude!=null)
                {!! $items->exclude !!}.
                @else
                N/A
                @endif
            </p>
        </div>
    </div>
    <!-- Excludes Part End -->

    <!-- Important Note Part Start -->
    <div class="container py-4">
        <div class="text-center pb-3">
            <h3 class="text-info">Important Note</h3>
        </div>
        <div class="p-4 border">
            <p>
                @if ($items->important_note!=Null)
                {!! $items->important_note !!}.
                @else
                N/A
                @endif
            </p>
        </div>
    </div>
    <!-- Important Note Part End -->

    <!-- Terms & Condition Part Start -->
    <div class="container py-4">
        <div class="text-center pb-3">
            <h3 class="text-info">Terms & Condition</h3>
        </div>
        <div class="p-4 border">
            <p>
                @if ($items->terms!=Null)
                {!! $items->terms !!}.
                @else
                N/A
                @endif
            </p>
        </div>
    </div>
    <!-- Terms & Condition Part End -->
</div>
<!-- Packages Details End -->
    <!-- Terms & Condition Part End -->
@endsection
