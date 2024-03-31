@extends('frontend.master')
@section('content')
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Contact Us</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active text-white">Contact</li>
            </ol>
    </div>
</div>
<!-- Header End -->

<!-- Contact Start -->
<div class="container-fluid contact bg-light py-5">
    <div class="container py-5">
        <div class="mx-auto text-center mb-5" style="max-width: 900px;">
            <h5 class="section-title px-3">Contact Us</h5>
            <h1 class="mb-0">Contact For Any Query</h1>
        </div>
        <div class="row g-5 align-items-center">
            <div class="col-lg-4">
                <div class="bg-white rounded p-4">
                    <div class="text-center mb-4">
                        <i class="fa fa-map-marker-alt fa-3x text-info"></i>
                        <h4 class="text-info">
                            <Address></Address>
                        </h4>
                        <p class="mb-0">{{ getSetting()->address }}</p>
                    </div>
                    <div class="text-center mb-4">
                        <i class="fa fa-phone-alt fa-3x text-info mb-3"></i>
                        <h4 class="text-info">Mobile</h4>
                        <p class="mb-0">{{ getSetting()->mobile }}</p>
                        <p class="mb-0">{{ getSetting()->telephone }}</p>
                    </div>

                    <div class="text-center">
                        <i class="fa fa-envelope-open fa-3x text-info mb-3"></i>
                        <h4 class="text-info">Email</h4>
                        <p class="mb-0">{{ getSetting()->email }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <h3 class="mb-2">Send us a message</h3>
                <form action="{{ route('contact-form-submit') }}" method="Post">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control border-0" required name="name" placeholder="Your Name">
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control border-0" required name="email"
                                    placeholder="Your Email">
                                <label for="email">Your Email</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control border-0" required name="subject" placeholder="Subject">
                                <label for="subject">Subject</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control border-0" placeholder="Leave a message here"
                                    name="message" style="height: 160px" required></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-info w-100 py-3" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4">
                <div class="bg-white rounded p-4" style="height: 529px;">
                    <div class="text-center mb-4">
                        <i class="fa fa-map-marker-alt fa-3x text-info"></i>
                        <h4 class="text-info">
                            <Address></Address>
                        </h4>
                        <p class="mb-0">19th Floor, TOWER-1, PS Srijan Corporate Park, Unit 14, GP Block, Sector V, Saltlake, Kolkata, West Bengal 700091</p>
                    </div>
                    <div class="text-center mb-4">
                        <i class="fa fa-phone-alt fa-3x text-info mb-3"></i>
                        <h4 class="text-info">Mobile</h4>
                        <p class="mb-0">9073999972</p>
                        <p class="mb-0">9073999948</p>
                    </div>

                    <div class="text-center">
                        <i class="fa fa-envelope-open fa-3x text-info mb-3"></i>package@travelbazarglobal.com
                        <h4 class="text-info">Email</h4>
                        <p class="mb-0">info@travelbazarglobal.com
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-white rounded p-4" style="height: 529px;">
                    <div class="text-center mb-4">
                        <i class="fa fa-map-marker-alt fa-3x text-info"></i>
                        <h4 class="text-info">
                            <Address></Address>
                        </h4>
                        <p class="mb-0">Office no. 905, Haware Infotech Park, Sector 30A, Vashi, Navi Mumbai, Maharashtra 400051</p>
                    </div>
                    <div class="text-center mb-4">
                        <i class="fa fa-phone-alt fa-3x text-info mb-3"></i>
                        <h4 class="text-info">Mobile</h4>
                        <p class="mb-0">9073999989</p>
                        <p class="mb-0">9230777122</p>
                    </div>

                    <div class="text-center">
                        <i class="fa fa-envelope-open fa-3x text-info mb-3"></i>
                        <h4 class="text-info">Email</h4>
                        <p class="mb-0">info@travelbazarglobal.com
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="bg-white rounded p-4">
                    <div class="text-center mb-4">
                        <i class="fa fa-map-marker-alt fa-3x text-info"></i>
                        <h4 class="text-info">
                            <Address></Address>
                        </h4>
                        <p class="mb-0">Unit 707 & 708, 7th Floor, Lotus link square, near Metro Station DN Nagar, Sahayog Nagar, Bhudargarh Colony, Andheri
                            West, Mumbai, Maharashtra 400053</p>
                    </div>
                    <div class="text-center mb-4">
                        <i class="fa fa-phone-alt fa-3x text-info mb-3"></i>
                        <h4 class="text-info">Mobile</h4>
                        <p class="mb-0">9230777123

                            </p>
                        <p class="mb-0"> 9230777129</p>
                    </div>

                    <div class="text-center">
                        <i class="fa fa-envelope-open fa-3x text-info mb-3"></i>
                        <h4 class="text-info">Email</h4>
                        <p class="mb-0">info@travelbazarglobal.com
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="rounded">
                    <iframe class="rounded w-100" style="height: 450px;"
                        src="{{ getSetting()->map }}"
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>


        </div>
    </div>
</div>
<!-- Contact End -->

<!-- Subscribe Start -->
<div class="container-fluid subscribe py-3">
    <div class="container text-center py-5">
        <div class="mx-auto text-center" style="max-width: 900px;">
            <h5 class="subscribe-title px-3">Subscribe</h5>
            <h1 class="text-white mb-4">Our Newsletter</h1>
            <p class="text-white mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum tempore nam,
                architecto doloremque velit explicabo? Voluptate sunt eveniet fuga eligendi! Expedita laudantium
                fugiat corrupti eum cum repellat a laborum quasi.
            </p>
            <form action="{{ route('news-letter-submit') }}" method="Post">
                @csrf
                <div class="position-relative mx-auto">
                    <input class="form-control border-dark rounded-pill w-100 py-3 ps-4 pe-5" name="email" type="email"
                        placeholder="Your email">
                    <button type="submit" class="btn btn-info rounded-pill position-absolute top-0 end-0 py-2 px-4 mt-2 me-2">Subscribe</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Subscribe End -->
@endsection
