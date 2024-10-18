<x-auth-layout>
    <div class="mb-4">
        <span class="font-bold text-4xl text-white">{{ __('SMP') }}</span>
    </div>

    <div class="bg-white border-2 border-black rounded-lg p-4 w-5/6 sm:w-3/4 md:w-1/2 lg:w-1/3">
        <h1 class="text-xl font-bold">{{ __('Register your account') }}</h1>

        @if($errors->any())
            <div class="mt-2 mb-2 bg-red-500">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="text-white">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="mt-4">
            <form action="{{ route('auth.register.store') }}" method="POST">
                @csrf

                <div class="flex flex-col space-y-4">
                    <input name="full_name" id="full_name" type="text" class="border-2 border-black p-2 rounded-lg" placeholder="Full Name"/>

                    <div class="flex flex-col">
                        <input name="username" id="username" type="text" class="border-2 border-black p-2 rounded-lg" placeholder="Username"/>
                        <span class="text-xs italic text-gray-400 mt-[2px]">{{ __('This will become your handle. e.g. @username') }}</span>
                    </div>

                    <input name="email" id="email" type="email" class="border-2 border-black p-2 rounded-lg" placeholder="Email"/>

                    <input name="password" id="password" type="password" class="border-2 border-black p-2 rounded-lg" placeholder="Password"/>

                    <input name="password_confirmation" id="password_confirmation" type="password" class="border-2 border-black p-2 rounded-lg" placeholder="Password"/>

                    <button type="submit" class="bg-black hover:bg-gray-800 text-white py-2 rounded-lg">
                        <span class="text-lg">{{ __('Register') }}</span>
                    </button>
                </div>
            </form>
            <div class="flex justify-center mt-4">
                <a href="{{ route('auth.login') }}" class="text-xs underline">
                    {{ __('Already registered?') }}
                </a>
            </div>
        </div>
    </div>
</x-auth-layout>
