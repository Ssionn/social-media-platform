<aside class="flex flex-col items-end py-6 px-1 sm:w-1/4 md:w-1/2">
    <div class="flex flex-col items-start space-y-3">
        <div class="flex justify-center w-full">
            <a href="/app" class="bg-transparent hover:bg-gray-600 font-bold text-white py-2 px-4 rounded-full">
                <x-heroicon-s-beaker class="w-6 h-6"/>
            </a>
        </div>

        <x-sidebar-tab :href="route('home')" :active="request()->routeIs('home')" :icon="'heroicon-s-home'">
            Home
        </x-sidebar-tab>

        <x-sidebar-tab :href="'#'" :icon="'heroicon-o-magnifying-glass'">
            Explore
        </x-sidebar-tab>

        <x-sidebar-tab :href="route('profile.index')" :active="request()->routeIs('profile.index')" :icon="'css-profile'">
            Profile
        </x-sidebar-tab>
    </div>

    <div class="mt-auto flex justify-end items-center space-x-2 p-4 w-full">
        @auth
            <x-dropdown alignment="top">
                <x-slot name="trigger">
                    <div class="inline-flex items-center space-x-2 hover:bg-gray-600 rounded-lg p-2">
                        <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->avatar ?? 'https://via.placeholder.com/150' }}" alt="Avatar">

                        <div>
                            <div class="text-sm font-semibold text-white">{{ Auth::user()->name }}</div>
                            <div class="text-xs text-gray-500">{{ '@' . Auth::user()->username }}</div>
                        </div>

                        <div>
                            <x-zondicon-dots-horizontal-triple class="w-4 h-4 text-white"/>
                        </div>
                    </div>
                </x-slot>

                <x-dropdown-item to="#" class="flex items-center" onclick="event.preventDefault(); document.getElementById('js-logout').submit()">
                    <span class="inline-flex items-center mr-2 text-white">
                        <x-tabler-logout class="text-white h-6 w-6"/>
                        Log out
                    </span>
                </x-dropdown-item>

                <x-form method="POST" action="{{ route('auth.logout') }}" id="js-logout"></x-form>
            </x-dropdown>
        @endauth
        </div>
</aside>
