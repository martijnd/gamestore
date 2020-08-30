<x-layout>


    <div class="flex justify-center">
        <div class="w-1/3 bg-purple-400 p-8 rounded shadow">
            <h1 class="text-white text-2xl font-bold mb-4">{{ __('Register') }}</h1>
            <hr class="mb-4">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="flex justify-between mb-4">
                    <label class="w-1/3 text-white font-semibold" for="name">{{ __('Name') }}</label>

                    <div class="w-2/3">
                        <input id="name"
                               type="text"
                               class="form-input w-full @error('name') border border-red-200 @enderror"
                               name="name"
                               value="{{ old('name') }}"
                               required
                               autocomplete="name"
                               autofocus
                               placeholder="Name"
                        >

                        @error('name')
                        <span class="p-4 bg-red-200 border border-red-500" role="alert">
                            <strong class="text-red-500">{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="flex justify-between mb-4">
                    <label class="w-1/3 text-white font-semibold" for="email">{{ __('E-mail Address') }}</label>

                    <div class="w-2/3">
                        <input id="email"
                               type="text"
                               class="form-input w-full @error('email') border border-red-200 @enderror"
                               name="email"
                               inputmode="email"
                               value="{{ old('email') }}"
                               required
                               autocomplete="email"
                               placeholder="E-mail"
                        >

                        @error('email')
                        <span class="p-4 bg-red-200 border border-red-500" role="alert">
                            <strong class="text-red-500">{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="flex justify-between mb-4">
                    <label class="w-1/3 text-white font-semibold" for="password">{{ __('Password') }}</label>

                    <div class="w-2/3">
                        <input id="password"
                               type="password"
                               class="form-input w-full @error('password') border border-red-200 @enderror"
                               name="password"
                               value="{{ old('password') }}"
                               placeholder="Password"
                        >

                        @error('password')
                        <span class="p-4 bg-red-200 border border-red-500" role="alert">
                            <strong class="text-red-500">{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="flex justify-between mb-4">
                    <label class="w-1/3 text-white font-semibold" for="password-confirm">{{ __('Password') }}</label>

                    <div class="w-2/3">
                        <input id="password-confirm"
                               type="password"
                               class="form-input w-full"
                               name="password_confirmation"
                               autofocus
                               placeholder="Confirm password"
                        >
                    </div>
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="px-4 py-2 bg-white text-purple-500 font-semibold rounded">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
