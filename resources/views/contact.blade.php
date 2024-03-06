@extends('layout.app')
@section('content')
<!-- header close -->
<!-- content begin -->
<div class="no-bottom no-top" id="content">
    <div id="top"></div>

    <!-- section begin -->
    <section id="subheader" class="jarallax text-light">
        <img src="images/background/subheader.jpg" class="jarallax-img" alt="">
        <div class="center-y relative text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>Contact Us</h1>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- section close -->


    <section aria-label="section">
        <div class="container">
            <div class="row g-custom-x">

                <div class="col-lg-8 mb-sm-30">
                    @if(Session::has('success'))
                    <div id="success_message" class='success' style="display: block !important;">
                        {{Session::get('success')}}
                    </div>
                    @endif
                    <h3>Do you have any question?</h3>



                    <form name="contactForm" action="{{ route('contact.us.store') }}" id="contact_form"
                        class="form-border" method="post" >
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6 mb10">
                                <div class="field-set">
                                    <input type="text" name="name" id="name" class="form-control"
                                        placeholder="Your Name" required>
                                    @error('name')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mb10">
                                <div class="field-set">
                                    <input type="text" name="email" id="email" class="form-control"
                                        placeholder="Your Email" required>
                                    @error('Email')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mb10">
                                <div class="field-set">
                                    <input type="text" name="phone" id="phone" class="form-control"
                                        placeholder="Your Phone" required>
                                    @error('phone')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 mb10">
                                <div class="field-set">
                                    <input type="text" name="subject" id="subject" class="form-control"
                                        placeholder="Your subject" required>
                                    @error('subject')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="field-set mb20">
                            <textarea name="message" id="message" class="form-control" placeholder="Your Message"
                                required></textarea>
                            @error('message')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>

                        <div id='submit' class="mt20">
                            <input type='submit' id='send_message' value='Send Message' class="btn-main">
                        </div>

                        <div id="success_message" class='success'>
                            Your message has been sent successfully. Refresh this page if you want to send more
                            messages.
                        </div>
                        <div id="error_message" class='error'>
                            Sorry there was an error sending your form.
                        </div>
                    </form>
                </div>

                <div class="col-lg-4">

                    <div class="de-box mb30">
                        <h4>US Office</h4>
                        <address class="s1">
                            <span><i class="id-color fa fa-map-marker fa-lg"></i>08 W 36th St, New York, NY 10001</span>
                            <span><i class="id-color fa fa-phone fa-lg"></i>+1 333 9296</span>
                            <span><i class="id-color fa fa-envelope-o fa-lg"></i><a
                                    href="mailto:contact@example.com">contact@example.com</a></span>
                            <span><i class="id-color fa fa-file-pdf-o fa-lg"></i><a href="#">Download
                                    Brochure</a></span>
                        </address>
                    </div>


                    <div class="de-box mb30">
                        <h4>AU Office</h4>
                        <address class="s1">
                            <span><i class="fa fa-map-marker fa-lg"></i>100 Mainstreet Center, Sydney</span>
                            <span><i class="fa fa-phone fa-lg"></i>+61 333 9296</span>
                            <span><i class="fa fa-envelope-o fa-lg"></i><a
                                    href="mailto:contact@example.com">contact@example.com</a></span>
                            <span><i class="fa fa-file-pdf-o fa-lg"></i><a href="#">Download Brochure</a></span>
                        </address>
                    </div>

                </div>

            </div>
        </div>

    </section>

</div>
<!-- content close -->

@endsection
