<x-auth-layout>
    <div class="mb-4">
        <span class="font-bold text-4xl text-white">{{ __('SMP') }}</span>
    </div>

    <div class="bg-white border-2 border-black rounded-lg p-4 w-5/6 sm:w-3/4 md:w-1/2 lg:w-1/3">
        <h1 class="text-xl font-bold">{{ __('Log in to your account') }}</h1>
        <div class="mt-4">
            <form action="" method="POST">
                @csrf

                <div class="flex flex-col space-y-4">
                    <input name="email" id="email" class="border-2 border-black p-2 rounded-lg" placeholder="Email"/>
                    <input name="password" id="password" class="border-2 border-black p-2 rounded-lg" placeholder="Password"/>
                    <button type="submit" class="bg-black hover:bg-gray-800 text-white py-2 rounded-lg">
                        <span class="text-lg">{{ __('Login') }}</span>
                    </button>
                </div>
            </form>
            <div class="flex justify-center mt-4">
                <a href="{{ route('auth.register') }}" class="text-xs underline">
                    {{ __('Don\'t have an account?') }}
                </a>
            </div>
        </div>
    </div>
</x-auth-layout>
