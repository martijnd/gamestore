<x-layout>


    <div class="flex justify-center">
        <div class="w-1/3 bg-purple-500 p-8 rounded shadow">
            <h1 class="text-white text-2xl font-bold mb-4">{{ __('Register') }}</h1>
            <hr class="mb-4">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-4">
                    <label class="text-white font-semibold" for="name">{{ __('Name') }}</label>

                    <input id="name"
                           type="text"
                           class="mt-2 form-input w-full @error('name') border border-red-200 @enderror"
                           name="name"
                           value="{{ old('name') }}"
                           required
                           autocomplete="name"
                           autofocus
                           placeholder="Name"
                    >

                    @error('name')
                    <div class="border mt-2 bg-red-200 border-red-400 p-4 rounded text-red-500" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="text-white font-semibold" for="email">{{ __('E-mail Address') }}</label>

                    <input id="email"
                           type="text"
                           class="mt-2 form-input w-full @error('email') border border-red-200 @enderror"
                           name="email"
                           inputmode="email"
                           value="{{ old('email') }}"
                           required
                           autocomplete="email"
                           placeholder="E-mail"
                    >

                    @error('email')
                    <div class="border mt-2 bg-red-200 border-red-400 p-4 rounded text-red-500" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label class="text-white font-semibold" for="password">{{ __('Password') }}</label>

                    <input id="password"
                           type="password"
                           class="mt-2 form-input w-full @error('password') border border-red-200 @enderror"
                           name="password"
                           value="{{ old('password') }}"
                           placeholder="Password"
                    >

                    @error('password')
                    <div class="border mt-2 bg-red-200 border-red-400 p-4 rounded text-red-500" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                    @enderror
                </div>

                <div class="mb-8">
                    <label class="text-white font-semibold" for="password-confirm">{{ __('Password confirmation') }}</label>

                    <input id="password-confirm"
                           type="password"
                           class="mt-2 form-input w-full"
                           name="password_confirmation"
                           autofocus
                           placeholder="Confirm password"
                    >
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="px-4 w-full py-2 bg-purple-700 text-white font-semibold rounded">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
