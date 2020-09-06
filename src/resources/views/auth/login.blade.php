<x-layout>
    <div class="card w-1/3 bg-purple-500 rounded mx-auto shadow-lg p-8">

        <h2 class="mb-2 font-bold text-white text-2xl">{{ __('Login') }}</h2>
        <hr class="mb-6">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <label for="email" class="mr-10 text-white font-semibold">{{ __('E-Mail Address') }}</label>

            <input id="email"
                   type="email"
                   class="bg-purple-100 mt-2 block w-full form-input @error('email') border border-red-400 @enderror"
                   name="email"
                   placeholder="E-mail"
                   value="{{ old('email') }}"
                   required
                   autocomplete="email"
                   autofocus
            >

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <div class="mt-4">
                <label for="password" class="mr-10 text-white font-semibold">{{ __('Password') }}</label>

                <div class="col-md-6">
                    <input id="password"
                           type="password"
                           placeholder="Password"
                           class="bg-purple-100 mt-2 block w-full form-input @error('password') border border-red-400 @enderror"
                           name="password"
                           required
                           autocomplete="current-password"
                    >

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
            </div>

            <div class="mt-4">
                <input class="form-checkbox" type="checkbox" name="remember"
                       id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="text-white font-semibold align-middle" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>

            <div class="mt-4 flex justify-between">
                <button class="inline-block uppercase text-xl tracking-wide font-bold px-4 py-2 text-purple-500 bg-white hover:bg-purple-100 hover:shadow-lg transition-all duration-150 font-semibold rounded" type="submit">
                    Log in
                </button>

                @if (Route::has('password.request'))
                    <a class="underline text-white" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>
        </form>
    </div>
</x-layout>
