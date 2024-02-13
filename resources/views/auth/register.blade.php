@extends('layout.app')
@section('content')
<!-- header close -->
<!-- content begin -->
<div class="no-bottom no-top" id="content">
    @if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ session('status') }}
    </div>
    @endif
    <div id="top"></div>
    <section id="section-hero" aria-label="section" class="jarallax">
        <img src="images/background/2.jpg" class="jarallax-img" alt="">
        <div class="v-center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 offset-lg-4">
                        <div class="padding40 rounded-3 shadow-soft" data-bgcolor="#09060670">
                            <h4>Login</h4>
                            <div class="spacer-10"></div>
                            <form id="form_register" class="form-border" method="post" action="{{ route('register') }}">
                                @csrf
                                <div class="field-set">
                                    <input type="text" name="name" id="name" class="form-control"
                                        placeholder="Enter Your name" />
                                </div>
                                <div class="field-set">
                                    <input type="email" id="name" class="form-control" placeholder="Enter Your Email" />
                                </div>
                                <div class="field-set">
                                    <input type="text" name="name" id="name" class="form-control"
                                        placeholder="Enter Your Password" />
                                </div>
                                <div class="field-set">
                                    <input type="text" name="confirmation_password" id="name" class="form-control"
                                        placeholder="Enter Your confirm Password" />
                                </div>
                                <div id="submit">
                                    <input type="submit" id="send_message" value="Sign Up"
                                        class="btn-main btn-fullwidth rounded-3" />
                                </div>



                            </form>
                            <div class="title-line">Or&nbsp;Sign&nbsp;in&nbsp;with</div>
                            <div class="row g-2">
                                <div class="mt-3" id="submit">
                                    <a href="{{ route('login') }}" id="send_message"
                                        class="btn-main btn-fullwidth rounded-3">Sign in</a>
                                </div>
                                <div class="col-lg-6">
                                    <a class="btn-sc btn-fullwidth mb10" href="#"><img src="images/svg/google_icon.svg"
                                            alt="">Google</a>
                                </div>
                                <div class="col-lg-6">
                                    <a class="btn-sc btn-fullwidth mb10" href="#"><img
                                            src="images/svg/facebook_icon.svg" alt="">Facebook</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- content close -->
@endsection()
