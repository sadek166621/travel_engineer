@extends('frontend.master')
@section('title')
    All Categories
@endsection
@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h1 class="text-white display-3 mb-4">All Categories</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active text-white"> Categories</li>
                    <li class="breadcrumb-item active text-white"> All</li>
                </ol>
        </div>
    </div>
    <!-- Header End -->
    <!-- Packages Start -->
    <div class="container-fluid ExploreTour py-3">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h2 class="section-title px-3">
                    Explore Your Destination
                </h2>
            </div>
            <div class="tab-content">
                <div id="NationalTab-1" class="tab-pane fade show p-0 active">
                    <div class="row ">
                        @if(count($categories) >0)
                            @foreach($categories as $category)
                                <div class="col-md-6 col-lg-3">
                                    <div class="national-item">
                                        <img src="{{asset($category->image)}}" height="200px" class="w-100 rounded"
                                             alt="Image">
                                        <div class="national-content">
                                            <div class="national-info">
                                                <h5 class="text-white text-uppercase mb-2">{{$category->name}}</h5>
                                                <a href="{{route('category.package', $category->id)}}" class="btn-hover text-white">View All Packages <i
                                                        class="fa fa-arrow-right ms-2"></i></a>
                                            </div>
                                        </div>
                                        {{--                                        <div class="national-plus-icon">--}}
                                        {{--                                            <a href="#" class="my-auto"><i class="fas fa-link fa-2x text-white"></i></a>--}}
                                        {{--                                        </div>--}}
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="col-md-12 text-center">
                                No Category Included
                            </div>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Packages End -->
@endsection

