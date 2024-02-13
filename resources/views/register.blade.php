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
                            <form id="form-register" method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="fieldset">
                                    {{-- <x-label for="name" value="" /> --}}
                                    <input id="name"  placeholder="{{ __('Name') }}" type="text" name="name" :value="old('name')" required autocomplete="name" />
                                </div>

                                <div class="mt-4">
                                    <x-input id="email"  placeholder="{{ __('Email') }}"  type="email" name="email" :value="old('email')" required autocomplete="username" />

                                </div>

                                <div class="mt-4">
                                    <x-input id="password"  placeholder="{{ __('Password') }}"  type="password" name="password" required autocomplete="new-password" />
                                </div>

                                <div class="mt-4">
                                    <x-input id="password_confirmation" placeholder="{{ __('Confirm Password') }}"  type="password" name="password_confirmation" required autocomplete="new-password" />
                                </div>

                                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                    <div class="mt-4">
                                        <x-label for="terms">
                                            <div class="flex items-center">
                                                <x-checkbox name="terms" id="terms" required />

                                                <div class="ms-2">
                                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                                    ]) !!}
                                                </div>
                                            </div>
                                        </x-label>
                                    </div>
                                @endif

                                <div class="flex items-center justify-end mt-4">
                                    <x-button class="ms-4 text-black " >
                                        {{ __('Register') }}
                                    </x-button>
                                    <br>
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                                        {{ __('Already registered?') }}
                                    </a>


                                </div>
                            </form>
                            <div class="title-line">Or&nbsp;sign&nbsp;up&nbsp;with</div>
                            <div class="row g-2">
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
