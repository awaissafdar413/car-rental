@extends('layout.app')
@section('content')
<!-- header -->
<!-- header close -->
<div class="no-bottom no-top" id="content">
    <div id="top"></div>
    <section id="de-carousel" class="no-top no-bottom carousel slide carousel-fade" data-mdb-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators z1000">
            <li data-mdb-target="#de-carousel" data-mdb-slide-to="0" class="active"></li>
            <li data-mdb-target="#de-carousel" data-mdb-slide-to="1"></li>
            <li data-mdb-target="#de-carousel" data-mdb-slide-to="2"></li>
        </ol>

        <!-- Inner -->
        <div class="carousel-inner position-relative">
            <!-- Single item -->
            <div class="carousel-item active jarallax">
                <img src="images/slider/1.jpg" class="jarallax-img" alt="">
                <div class="mask">
                    <div class="no-top no-bottom">
                        <div class="h-100 v-center">
                            <div class="container">
                                <div class="row gx-5 align-items-center">
                                    <div class="col-lg-6 offset-lg-3 text-center mb-sm-30">
                                        <h1 class="s3 mb-3 wow fadeInUp">Premium Cars</h1>
                                        <p class="lead wow fadeInUp" data-wow-delay=".3s">Discover the world in
                                            unparalleled comfort and style.</p>
                                        <div class="spacer-10"></div>
                                        <a class="btn-line mb10 wow fadeInUp" data-wow-delay=".6s" href="#">Discover</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single item -->
            <div class="carousel-item jarallax">
                <img src="images/slider/2.jpg" class="jarallax-img" alt="">
                <div class="mask">
                    <div class="no-top no-bottom">
                        <div class="h-100 v-center">
                            <div class="container">
                                <div class="row gx-5 align-items-center">
                                    <div class="col-lg-6 offset-lg-3 text-center mb-sm-30">
                                        <h1 class="s3 mb-3 wow fadeInUp">First Class</h1>
                                        <p class="lead wow fadeInUp" data-wow-delay=".3s">Creating unforgettable moments
                                            and exceeding your every expectation.</p>
                                        <div class="spacer-10"></div>
                                        <a class="btn-line mb10 wow fadeInUp" data-wow-delay=".6s" href="#">Discover</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single item -->
            <div class="carousel-item jarallax">
                <img src="images/slider/3.jpg" class="jarallax-img" alt="">
                <div class="mask">
                    <div class="no-top no-bottom">
                        <div class="h-100 v-center">
                            <div class="container">
                                <div class="row gx-5 align-items-center">
                                    <div class="col-lg-6 offset-lg-3 text-center mb-sm-30">
                                        <h1 class="s3 mb-3 wow fadeInUp">Save Drivers</h1>
                                        <p class="lead wow fadeInUp" data-wow-delay=".3s">Our experienced drivers are
                                            ready to accompany your journey.</p>
                                        <div class="spacer-10"></div>
                                        <a class="btn-line mb10 wow fadeInUp" data-wow-delay=".6s" href="#">Discover</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Inner -->

        <!-- Controls -->
        <a class="carousel-control-prev" href="#de-carousel" role="button" data-mdb-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#de-carousel" role="button" data-mdb-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <div class="de-gradient-edge-bottom"></div>
    </section>

    <section id="section-cars">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 offset-lg-3 text-center">
                    <h2>Our Vehicle Fleet</h2>
                    <p>Driving your dreams to reality with an exquisite fleet of versatile vehicles for unforgettable
                        journeys.</p>
                    <div class="spacer-20"></div>
                </div>

                <div id="items-carousel" class="owl-carousel wow fadeIn">
                    @foreach ($cars as $car )

                    <div class="col-lg-12">
                        <div class="de-item mb30">
                            <div class="d-img">
                                <img src="images\cars\{{ $car->car_image }}.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="d-info">
                                <div class="d-text">
                                    <h4>{{ $car->car_name }}</h4>
                                    <div class="d-item_like">
                                        <i class="fa fa-heart"></i><span>{{ $car->car_review }}</span>
                                    </div>
                                    <div class="d-atr-group">
                                        <span class="d-atr"><img src="images/icons/1-green.svg" alt="">{{ $car->car_passenger }}</span>
                                        <span class="d-atr"><img src="images/icons/2-green.svg" alt=""><small>{{ $car->car_type }}</small></span>
                                        <span class="d-atr"><img src="images/icons/3-green.svg" alt="">{{ $car->car_gate }}</span>
                                        <span class="d-atr"><img src="images/icons/4-green.svg" alt="">{{ $car->car_type }}</span>
                                    </div>
                                    <div class="d-price">
                                        Daily rate from <span>{{ $car->car_rent }}</span>
                                        <a class="btn-main" href="02_dark-car-single.html">Rent Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </section>

    <section class="text-light jarallax">
        <img src="images/background/9.jpg" class="jarallax-img" alt="">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInRight">
                    <h2>We offer customers a wide range of commercial cars and luxury cars for any occasion.</h2>
                </div>
                <div class="col-lg-6 wow fadeInLeft">
                    At our car rental agency, we believe that everyone deserves to experience the pleasure of driving a
                    reliable and comfortable vehicle, regardless of their budget. We have curated a diverse fleet of
                    well-maintained cars, ranging from sleek sedans to spacious SUVs, all at competitive prices. With
                    our streamlined rental process, you can quickly and conveniently reserve your desired vehicle.
                    Whether you need transportation for a business trip, family vacation, or simply want to enjoy a
                    weekend getaway, we have flexible rental options to accommodate your schedule.
                </div>
            </div>
            <div class="spacer-double"></div>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6 mb-sm-30">
                    <div class="de_count transparent text-light wow fadeInUp">
                        <h3 class="timer" data-to="15425" data-speed="3000">0</h3>
                        Completed Orders
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-sm-30">
                    <div class="de_count transparent text-light wow fadeInUp">
                        <h3 class="timer" data-to="8745" data-speed="3000">0</h3>
                        Happy Customers
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-sm-30">
                    <div class="de_count transparent text-light wow fadeInUp">
                        <h3 class="timer" data-to="235" data-speed="3000">0</h3>
                        Vehicles Fleet
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-sm-30">
                    <div class="de_count transparent text-light wow fadeInUp">
                        <h3 class="timer" data-to="15" data-speed="3000">0</h3>
                        Years Experience
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section aria-label="section" class="no-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 offset-lg-3 text-center">
                    <h2>Our Features</h2>
                    <p>Discover a world of convenience, safety, and customization, paving the way for unforgettable
                        adventures and seamless mobility solutions.</p>
                    <div class="spacer-20"></div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-3">
                    <div class="box-icon s2 p-small mb20 wow fadeInRight" data-wow-delay=".5s">
                        <i class="fa bg-color fa-trophy"></i>
                        <div class="d-inner">
                            <h4>First class services</h4>
                            Where luxury meets exceptional care, creating unforgettable moments and exceeding your every
                            expectation.
                        </div>
                    </div>
                    <div class="box-icon s2 p-small mb20 wow fadeInL fadeInRight" data-wow-delay=".75s">
                        <i class="fa bg-color fa-road"></i>
                        <div class="d-inner">
                            <h4>24/7 road assistance</h4>
                            Reliable support when you need it most, keeping you on the move with confidence and peace of
                            mind.
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <img src="images/misc/car-2.png" alt="" class="img-fluid wow fadeInUp">
                </div>

                <div class="col-lg-3">
                    <div class="box-icon s2 d-invert p-small mb20 wow fadeInL fadeInLeft" data-wow-delay="1s">
                        <i class="fa bg-color fa-tag"></i>
                        <div class="d-inner">
                            <h4>Quality at Minimum Expense</h4>
                            Unlocking affordable brilliance with elevating quality while minimizing costs for maximum
                            value.
                        </div>
                    </div>
                    <div class="box-icon s2 d-invert p-small mb20 wow fadeInL fadeInLeft" data-wow-delay="1.25s">
                        <i class="fa bg-color fa-map-pin"></i>
                        <div class="d-inner">
                            <h4>Free Pick-Up & Drop-Off</h4>
                            Enjoy free pickup and drop-off services, adding an extra layer of ease to your car rental
                            experience.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section-testimonials" class="no-top no-bottom">
        <div class="container">
            <div class="row g-4 align-items-center">

                <div class="col-md-4">
                    <div class="de-image-text">
                        <div class="d-text">
                            <div class="d-quote id-color"><i class="fa fa-quote-right"></i></div>
                            <h4>Excellent Service! Car Rent Service!</h4>
                            <blockquote>
                                I have been using Rentaly for my Car Rental needs for over 5 years now. I have never had
                                any problems with their service. Their customer support is always responsive and
                                helpful. I would recommend Rentaly to anyone looking for a reliable Car Rental provider.
                                <span class="by">Stepanie Hutchkiss</span>
                            </blockquote>
                        </div>
                        <img src="images/testimonial/1.jpg" class="img-fluid" alt="">
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="spacer-double sm-hide"></div>
                    <div class="spacer-double sm-hide"></div>
                    <div class="de-image-text">
                        <div class="d-text">
                            <div class="d-quote id-color"><i class="fa fa-quote-right"></i></div>
                            <h4>Excellent Service! Car Rent Service!</h4>
                            <blockquote>
                                We have been using Rentaly for our trips needs for several years now and have always
                                been happy with their service. Their customer support is Excellent Service! and they are
                                always available to help with any issues we have. Their prices are also very
                                competitive.
                                <span class="by">Jovan Reels</span>
                            </blockquote>
                        </div>
                        <img src="images/testimonial/2.jpg" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="spacer-double sm-hide"></div>
                    <div class="spacer-double sm-hide"></div>
                    <div class="spacer-double sm-hide"></div>
                    <div class="spacer-double sm-hide"></div>
                    <div class="de-image-text">
                        <div class="d-text">
                            <div class="d-quote id-color"><i class="fa fa-quote-right"></i></div>
                            <h4>Excellent Service! Car Rent Service!</h4>
                            <blockquote>
                                Endorsed by industry experts, Rentaly is the Car Rental solution you can trust. With
                                years of experience in the field, we provide fast, reliable and secure Car Rental
                                services.
                                <span class="by">Kanesha Keyton</span>
                            </blockquote>
                        </div>
                        <img src="images/testimonial/3.jpg" class="img-fluid" alt="">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="section-news">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 offset-lg-3 text-center">
                    <h2>Latest News</h2>
                    <p>Breaking news, fresh perspectives, and in-depth coverage - stay ahead with our latest news,
                        insights, and analysis.</p>
                    <div class="spacer-20"></div>
                </div>

                <div class="col-lg-4 mb10">
                    <div class="bloglist s2 item">
                        <div class="post-content">
                            <div class="post-image">
                                <div class="date-box">
                                    <div class="m">10</div>
                                    <div class="d">MAR</div>
                                </div>
                                <img alt="" src="images/news/pic-blog-1.jpg" class="lazy">
                            </div>
                            <div class="post-text">
                                <h4><a href="news-single.html">Enjoy Best Travel Experience<span></span></a></h4>
                                <p>Traveling is an enriching experience that allows us to explore new destinations,
                                    immerse ourselves in different cultures, and create lifelong memories.</p>
                                <a class="btn-line" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb10">
                    <div class="bloglist s2 item">
                        <div class="post-content">
                            <div class="post-image">
                                <div class="date-box">
                                    <div class="m">12</div>
                                    <div class="d">MAR</div>
                                </div>
                                <img alt="" src="images/news/pic-blog-2.jpg" class="lazy">
                            </div>
                            <div class="post-text">
                                <h4><a href="news-single.html">The Future of Car Rent<span></span></a></h4>
                                <p>As technology continues to advance at a rapid pace, the car rental industry is poised
                                    for a transformative shift. The future of car rental promises..</p>
                                <a class="btn-line" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb10">
                    <div class="bloglist s2 item">
                        <div class="post-content">
                            <div class="post-image">
                                <div class="date-box">
                                    <div class="m">14</div>
                                    <div class="d">MAR</div>
                                </div>
                                <img alt="" src="images/news/pic-blog-3.jpg" class="lazy">
                            </div>
                            <div class="post-text">
                                <h4><a href="news-single.html">Holiday Tips For Backpacker<span></span></a></h4>
                                <p>For adventure seekers and budget-conscious travelers, backpacking offers a thrilling
                                    and immersive way to explore the world. Whether you're embarking..</p>
                                <a class="btn-line" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="text-light jarallax" aria-label="section">
        <img src="images/background/3.jpg" alt="" class="jarallax-img">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <h1>Let's Your Adventure Begin</h1>
                    <div class="spacer-20"></div>
                </div>
                <div class="col-md-3">
                    <i class="fa fa-trophy de-icon mb20"></i>
                    <h4>First Class Services</h4>
                    <p>Where luxury meets exceptional care, creating unforgettable moments and exceeding your every
                        expectation.</p>
                </div>
                <div class="col-md-3">
                    <i class="fa fa-road de-icon mb20"></i>
                    <h4>24/7 road assistance</h4>
                    <p>Reliable support when you need it most, keeping you on the move with confidence and peace of
                        mind.</p>
                </div>
                <div class="col-md-3">
                    <i class="fa fa-map-pin de-icon mb20"></i>
                    <h4>Free Pick-Up & Drop-Off</h4>
                    <p>Enjoy free pickup and drop-off services, adding an extra layer of ease to your car rental
                        experience.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="section-faq">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2>Have Any Questions?</h2>
                    <div class="spacer-20"></div>
                </div>
            </div>
            <div class="row g-custom-x">
                <div class="col-md-6 wow fadeInUp">
                    <div class="accordion secondary">
                        <div class="accordion-section">
                            <div class="accordion-section-title" data-tab="#accordion-1">
                                How do I get started with Car Rental?
                            </div>
                            <div class="accordion-section-content" id="accordion-1">
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                    voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                                    occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt
                                    mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et
                                    expedita distinctio.</p>
                            </div>
                            <div class="accordion-section-title" data-tab="#accordion-2">
                                Can I rent a car with a debit card??
                            </div>
                            <div class="accordion-section-content" id="accordion-2">
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                    voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                                    occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt
                                    mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et
                                    expedita distinctio.</p>
                            </div>
                            <div class="accordion-section-title" data-tab="#accordion-3">
                                What kind of Car Rental do I need?
                            </div>
                            <div class="accordion-section-content" id="accordion-3">
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                    voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                                    occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt
                                    mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et
                                    expedita distinctio.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 wow fadeInUp">
                    <div class="accordion secondary">
                        <div class="accordion-section">
                            <div class="accordion-section-title" data-tab="#accordion-b-4">
                                What is a rental car security deposit?
                            </div>
                            <div class="accordion-section-content" id="accordion-b-4">
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                    voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                                    occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt
                                    mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et
                                    expedita distinctio.</p>
                            </div>
                            <div class="accordion-section-title" data-tab="#accordion-b-5">
                                Can I cancel or modify my reservation?
                            </div>
                            <div class="accordion-section-content" id="accordion-b-5">
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                    voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                                    occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt
                                    mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et
                                    expedita distinctio.</p>
                            </div>
                            <div class="accordion-section-title" data-tab="#accordion-b-6">
                                Is it possible to extend my rental period?
                            </div>
                            <div class="accordion-section-content" id="accordion-b-6">
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                    voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                                    occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt
                                    mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et
                                    expedita distinctio.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section aria-label="section" class="pt40 pb40 text-light" data-bgcolor="#111111">
        <div class="wow fadeInRight d-flex">
            <div class="de-marquee-list">
                <div class="d-item">
                    <span class="d-item-txt">SUV</span>
                    <span class="d-item-display">
                        <i class="d-item-dot"></i>
                    </span>
                    <span class="d-item-txt">Hatchback</span>
                    <span class="d-item-display">
                        <i class="d-item-dot"></i>
                    </span>
                    <span class="d-item-txt">Crossover</span>
                    <span class="d-item-display">
                        <i class="d-item-dot"></i>
                    </span>
                    <span class="d-item-txt">Convertible</span>
                    <span class="d-item-display">
                        <i class="d-item-dot"></i>
                    </span>
                    <span class="d-item-txt">Sedan</span>
                    <span class="d-item-display">
                        <i class="d-item-dot"></i>
                    </span>
                    <span class="d-item-txt">Sports Car</span>
                    <span class="d-item-display">
                        <i class="d-item-dot"></i>
                    </span>
                    <span class="d-item-txt">Coupe</span>
                    <span class="d-item-display">
                        <i class="d-item-dot"></i>
                    </span>
                    <span class="d-item-txt">Minivan</span>
                    <span class="d-item-display">
                        <i class="d-item-dot"></i>
                    </span>
                    <span class="d-item-txt">Station Wagon</span>
                    <span class="d-item-display">
                        <i class="d-item-dot"></i>
                    </span>
                    <span class="d-item-txt">Truck</span>
                    <span class="d-item-display">
                        <i class="d-item-dot"></i>
                    </span>
                    <span class="d-item-txt">Minivans</span>
                    <span class="d-item-display">
                        <i class="d-item-dot"></i>
                    </span>
                    <span class="d-item-txt">Exotic Cars</span>
                    <span class="d-item-display">
                        <i class="d-item-dot"></i>
                    </span>
                </div>
            </div>

            <div class="de-marquee-list">
                <div class="d-item">
                    <span class="d-item-txt">SUV</span>
                    <span class="d-item-display">
                        <i class="d-item-dot"></i>
                    </span>
                    <span class="d-item-txt">Hatchback</span>
                    <span class="d-item-display">
                        <i class="d-item-dot"></i>
                    </span>
                    <span class="d-item-txt">Crossover</span>
                    <span class="d-item-display">
                        <i class="d-item-dot"></i>
                    </span>
                    <span class="d-item-txt">Convertible</span>
                    <span class="d-item-display">
                        <i class="d-item-dot"></i>
                    </span>
                    <span class="d-item-txt">Sedan</span>
                    <span class="d-item-display">
                        <i class="d-item-dot"></i>
                    </span>
                    <span class="d-item-txt">Sports Car</span>
                    <span class="d-item-display">
                        <i class="d-item-dot"></i>
                    </span>
                    <span class="d-item-txt">Coupe</span>
                    <span class="d-item-display">
                        <i class="d-item-dot"></i>
                    </span>
                    <span class="d-item-txt">Minivan</span>
                    <span class="d-item-display">
                        <i class="d-item-dot"></i>
                    </span>
                    <span class="d-item-txt">Station Wagon</span>
                    <span class="d-item-display">
                        <i class="d-item-dot"></i>
                    </span>
                    <span class="d-item-txt">Truck</span>
                    <span class="d-item-display">
                        <i class="d-item-dot"></i>
                    </span>
                    <span class="d-item-txt">Minivans</span>
                    <span class="d-item-display">
                        <i class="d-item-dot"></i>
                    </span>
                    <span class="d-item-txt">Exotic Cars</span>
                    <span class="d-item-display">
                        <i class="d-item-dot"></i>
                    </span>
                </div>
            </div>
        </div>
    </section>

</div>

@endsection
