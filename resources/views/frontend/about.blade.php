
  @extends('frontend.layouts.main')
@section('main-content')
  <div class="p-0 bg-white ">




        <!-- Header End -->
        <div class="py-5 mb-5 bg-dark page-header">
            <div class="container pt-5 pb-4 my-5">
                <h1 class="mb-3 text-white display-3 animated slideInDown">About Us</h1>
            </div>
        </div>
        <!-- Header End -->


        <!-- About Start -->
        <div class="py-5 ">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="overflow-hidden rounded row g-0 about-bg">
                            <div class="col-6 text-start">
                                <img class="img-fluid w-100" src="{{url('img/about-1.jpg')}}">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid" src="{{url('img/about-2.jpg')}}" style="width: 85%; margin-top: 15%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid" src="{{url('img/about-3.jpg')}}" style="width: 85%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid w-100" src="{{url('img/about-4.jpg')}}">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="mb-4">We Help To Get The Best Job And Find A Talent</h1>
                        <ul>
                            <li  style="color: black;"><strong>Innovation:</strong> We strive to innovate and adapt to the ever-changing needs of the job market, providing cutting-edge solutions for both job seekers and employers.</li>
                            <li  style="color: black;"><strong>Transparency:</strong> We believe in transparency and honesty in all our dealings, ensuring trust and reliability for both our users and partners.</li>
                            <li  style="color: black;"><strong>Diversity and Inclusion:</strong> We celebrate diversity and promote inclusion, fostering an environment where everyone has equal opportunities to succeed.</li>
                            <li  style="color: black;"><strong>Customer Satisfaction:</strong> We are dedicated to delivering exceptional customer satisfaction by listening to feedback and continuously improving our services.</li>
                            <li  style="color: black;"><strong>Community Impact:</strong> We are committed to making a positive impact on the community by connecting individuals with meaningful employment opportunities.</li>
                        </ul>
                        <a class="px-5 py-3 mt-3 btn btn-primary" href="{{route('aboutUsDetails')}}">Read More</a>
                    </div>
                </div>
            </div>
        </div>
@endsection
        <!-- About End -->

