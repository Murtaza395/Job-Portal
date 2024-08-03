
@extends('frontend.layouts.main')
        @section('main-content')
        <!-- Carousel Start -->
        <div class="p-0 container-fluid">
            <div class="owl-carousel header-carousel position-relative">
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="img/carousel-1.jpg" alt="">
                    <div class="top-0 position-absolute start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(43, 57, 64, .5);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="mb-4 text-white display-3 animated slideInDown">Find The Perfect Job That You Deserved</h1>
                                    <p class="pb-2 mb-4 text-white fs-5 fw-medium">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
                                    <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Search A Job</a>
                                    <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Find A Talent</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="img/carousel-2.jpg" alt="">
                    <div class="top-0 position-absolute start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(43, 57, 64, .5);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="mb-4 text-white display-3 animated slideInDown">Find The Best Startup Job That Fit You</h1>
                                    <p class="pb-2 mb-4 text-white fs-5 fw-medium">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
                                    <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Search A Job</a>
                                    <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Find A Talent</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->


        <!-- Search Start -->
        {{-- <div class="mb-5 container-fluid bg-primary wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
            <div class="container">
                <div class="row g-2">
                    <div class="col-md-10">
                        <div class="row g-2">
                            <div class="col-md-4">
                                <input type="text" class="border-0 form-control" placeholder="Keyword" />
                            </div>
                            <div class="col-md-4">
                                <select class="border-0 form-select">
                                    <option selected>Category</option>
                                    <option value="1">Category 1</option>
                                    <option value="2">Category 2</option>
                                    <option value="3">Category 3</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="border-0 form-select">
                                    <option selected>Location</option>
                                    <option value="usa">USA</option>
                                    <option value="china">China</option>
                                    <option value="pakistan">Pakistan</option>
                                    <option value="germany">Germany</option>

                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <button class="border-0 btn btn-dark w-100">Search</button>
                    </div>
                </div>
            </div>
        </div>
                        --}}

        <!-- Search End -->

<div style="bg-white shadow pd-5">
    <div class="container">
        <h1 class="section-title">About OneClick Job Portal</h1>
        <div style="color:black">
            <p style="color:black">Welcome to OneClick, your one-stop destination for seamless job hunting and efficient recruitment solutions. At OneClick, we understand the challenges both job seekers and employers face in today's competitive market. That's why we've created a platform that simplifies the entire job search and hiring process, making it easier than ever to find the perfect match.</p>
            <h4>For Job Seekers:</h4>
            <p style="color:black">OneClick is committed to helping you find your dream job with just a click. Our user-friendly interface and advanced search features allow you to browse through thousands of job listings effortlessly. Whether you're a recent graduate looking for your first job or an experienced professional seeking new opportunities, OneClick has something for everyone. With easy application processes and personalized job recommendations, your next career move is just a click away.</p>
            <h4>For Employers:</h4>
            <p style="color:black">Finding the right talent for your organization can be a daunting task. That's where OneClick comes in. Our platform offers innovative recruitment solutions tailored to your specific needs. From posting job listings to managing applications and scheduling interviews, we provide the tools you need to streamline your hiring process. With access to a diverse pool of qualified candidates and advanced analytics, hiring top talent has never been easier.</p>
            <h4>Our Mission:</h4>
            <p style="color:black">At OneClick, our mission is to bridge the gap between employers and job seekers by providing a seamless and efficient platform that connects talent with opportunity. We are committed to empowering individuals to achieve their career goals and helping businesses thrive by finding the right talent to drive their success.</p>
            <p style="color:black">Join the OneClick community today and experience the future of job hunting and recruitment. With us, finding your next job or hiring the perfect candidate is just a click away!</p>
        </div>
    </div>
</div>





        <!-- Jobs Start -->

        @endsection
