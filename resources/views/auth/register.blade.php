

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
                                        @error('name')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="field-set">
                                        <input type="email" name="email" id="name" class="form-control"
                                            placeholder="Enter Your Email" />
                                        @error('email')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="field-set">
                                        <input type="text" name="password" id="name" class="form-control"
                                            placeholder="Enter Your Password" />
                                        @error('password')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="field-set">
                                        <input type="text" name="password_confirmation" id="name" class="form-control"
                                            placeholder="Enter Your confirm Password" />
                                        @error('password_confirmation')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div id="submit">
                                        <input type="submit" id="send_message" value="Sign Up"
                                            class="btn-main btn-fullwidth rounded-3" />
                                    </div>

                                    @if (Route::has('password.request'))
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                            href="{{ route('password.request') }}">
                                            {{ __('Forgot your password?') }}
                                        </a>
                                    @endif

                                </form>
                                <div class="title-line">Or&nbsp;sign&nbsp;In&nbsp;with</div>
                                <div class="row g-2">
                                    <div class="mt-3" id="submit">
                                        <a href="{{ route('login') }}" id="send_message"
                                            class="btn-main btn-fullwidth rounded-3">Sign In</a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a class="btn-sc btn-fullwidth mb10" href="{{ route('loginwithgoogle') }}"><img src="images/svg/google_icon.svg"
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
