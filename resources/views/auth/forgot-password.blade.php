@extends('layout.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Forget Password:</h1>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="forget_password">
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="block">
                        <x-label for="email" value="{{ __('Email') }}" />
                        <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-button>
                            {{ __('Email Password Reset Link') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
@endsection
