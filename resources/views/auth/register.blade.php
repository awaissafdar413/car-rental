<x-app-layout>

    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="my-5 py-5">
                    <x-authentication-card>
                        <h1 class="text-center">Register Your Self
                        </h1>
                        <x-validation-errors class="mb-4" />

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div>
                                <label for="name">Name: </label> <br>
                                <input id="name" type="text" name="name" style="width: 75%;background:#fff;" class="d3"
                                    :value="old('name')" required autofocus autocomplete="name" />
                            </div>

                            <div class="mt-4">
                                <label for="email">Email:</label> <br>
                                <input id="email" type="email" name="email" style="width: 75%;background:#fff;" class="d3"
                                    :value="old('email')" required autocomplete="username" />
                            </div>

                            <div class="mt-4">
                                <label for="password">Password:</label> <br>
                                <input id="password" type="password" class="d3" style="width: 75%;background:#fff;" name="password"
                                    required autocomplete="new-password" />
                            </div>

                            <div class="mt-4">
                                <label for="password_confirmation">Confirm Password</label> <br>
                                <input id="password_confirmation" class="d3 block mt-1 w-full" type="password"
                                    style="width: 75%;background:#fff;" name="password_confirmation" required
                                    autocomplete="new-password" />
                            </div>



                            <div class="">
                                <br>
                                <x-button class="ms-4 d3 text-black font-bold">
                                    {{ __('Register') }}
                                </x-button>
                                <br>
                                <br>
                                <a href="{{ route('login') }}">
                                    {{ __('Already registered?') }}
                                </a>


                            </div>
                        </form>
                    </x-authentication-card>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</x-app-layout>
@push('style')
<style>
    #d3{
box-shadow:0px 2px 0px 2px #95929296, inset 5px 1px 1px 2px #00000042 !important;
}
</style>
@endpush
