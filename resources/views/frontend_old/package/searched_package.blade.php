@extends('frontend.master')
@section('title')
    Searched Packages
@endsection
@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h1 class="text-white display-3 mb-4">Travel Packages</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active text-white">Packages</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->
    <!-- Packages Start -->
    <div class="container-fluid packages py-3">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h2 class="section-title px-3">
                    Packages Based on Search Criteria
                </h2>
            </div>
            @if($items && count($items)>0)
                <div class="row row-cols-lg-4 g-3">
                    @foreach($items as $item)
                        <div class="packages-item" style="height: 300px">
                            <a href="{{ route('package-details',$item->id) }}">
                                <div class="packages-img">
                                    <img src="{{asset('uploads')}}/package_thumbnail/{{$item->thumbnail}}" height="200px" class="w-100 rounded-top" alt="Image">
                                    <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute"
                                         style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-map-marker-alt me-2"></i>{{$item->name}}</small>
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-calendar-alt me-2"></i>{{$item->days}} {{$item->days == 1 ? 'Day':'Days'}}</small>
                                        <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>{{$item->no_of_people}}  {{$item->days == 1 ? 'Person':'Persons'}} </small>
                                    </div>
                                    <div class="packages-price py-2 px-4">₹{{$item->discount_price != null ?$item->discount_price:$item->price}}</div>
                                </div>
                            </a>
                           <a href="{{ route('package-details',$item->id) }}">
                            <div class="packages-content bg-light rounded-bottom">
                                <div class="p-4">
                                    <h5 class="mb-0 ">{{$item->name}}</h5>
                                    <small class="text-uppercase d-none">Hotel Deals</small>
                                    <div class="mb-3 d-none">
                                        <small class="fa fa-star text-info"></small>
                                        <small class="fa fa-star text-info"></small>
                                        <small class="fa fa-star text-info"></small>
                                        <small class="fa fa-star text-info"></small>
                                        <small class="fa fa-star text-info"></small>
                                    </div>
                                    <p class="mb-4 d-none">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt
                                        nemo quia
                                        quae illum aperiam fugiat voluptatem repellat</p>
                                </div>
                                <div class="row bg-info rounded-bottom mx-0 d-none">
                                    <div class="col-6 text-start px-0">
                                        <a href="#" class="btn-hover btn text-white py-2 px-4">Read More</a>
                                    </div>
                                    <div class="col-6 text-end px-0">
                                        <a href="#" class="btn-hover btn text-white py-2 px-4">Book Now</a>
                                    </div>
                                </div>
                            </div>
                           </a>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="col-md-12 text-center">No Package Found</div>
            @endif
        </div>
    </div>
    <!-- Packages End -->
@endsection

