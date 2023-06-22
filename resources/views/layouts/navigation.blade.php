<nav x-data="{ open: false }" class="sticky top-0 z-50 w-full p-3 bg-white border-b border-gray-200">
    <!-- Primary Navigation Menu -->
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex items-center shrink-0">
                    <a href="{{ route('home') }}" class="flex items-center">
                        <img src="{{asset('images/hub_logo_preta.png')}}" class="h-14">
                    </a>
                </div>
            </div>
            <div class="items-center hidden space-x-8 sm:-my-px md:ml-10 md:flex">
                <!-- Navigation Links -->
                <livewire:nav-projects/>
                <a href="#" class="font-semibold text-lg hover:text-[#04DBFD]">Sobre</a>
                <a href="#parceiros"class="font-semibold text-lg hover:text-[#04DBFD]">Parceiros</a>
                <a href="#imagens"class="font-semibold text-lg hover:text-[#04DBFD]">Imagens</a>
                <a href="#contato"class="font-semibold text-lg hover:text-[#04DBFD]">Contato</a>

            </div>

            <!-- Settings Dropdown -->
            @auth()
                <div class="hidden md:flex sm:items-center sm:ml-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-500 transition duration-150 ease-in-out bg-white border border-transparent rounded-md focus:outline-none">
                                <div>{{ Auth::user()->name }}</div>
                                <div class="ml-1">
                                    <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Perfil') }}
                            </x-dropdown-link>

                            <x-dropdown-link :href="route('index-projects')">
                                {{ __('Projetos') }}
                            </x-dropdown-link>

                            <x-dropdown-link :href="route('index-partners')">
                                {{ __('Parceiros') }}
                            </x-dropdown-link>

                            <x-dropdown-link :href="route('index-images')">
                                {{ __('Imagens') }}
                            </x-dropdown-link>
                            
                            <x-dropdown-link :href="route('index-users')">
                                {{ __('Usuários') }}
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                                 onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>

                        </x-slot>
                    </x-dropdown>
                </div>
            @endauth

            <!-- Hamburger -->
            <div class="flex items-center -mr-2 md:hidden">
                <button @click="open = ! open"
                        class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500">
                    <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex"
                              stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                              stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="mt-3 space-y-1 px-6 py-4 flex flex-col items-start gap-1.5">
                <livewire:nav-projects/>
                <a href="#" class="font-semibold text-lg hover:text-[#04DBFD]">Sobre</a>
                <a href="#parceiros"class="font-semibold text-lg hover:text-[#04DBFD]">Parceiros</a>
                <a href="#imagens"class="font-semibold text-lg hover:text-[#04DBFD]">Imagens</a>
                <a href="#contato"class="font-semibold text-lg hover:text-[#04DBFD]">Contato</a>
            </div>
            @auth()
                <div class="px-4 mt-4 border-t-2 border-gray-100">
                    <div class="mt-2 text-base font-medium text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="text-sm font-medium text-gray-500">{{ Auth::user()->email }}</div>
                </div>

                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-responsive-nav-link>

                    <x-responsive-nav-link :href="route('index-projects')">
                        {{ __('Projetos') }}
                    </x-responsive-nav-link>

                    <x-responsive-nav-link :href="route('index-images')">
                        {{ __('Imagens') }}
                    </x-responsive-nav-link>

                    <x-responsive-nav-link :href="route('index-partners')">
                        {{ __('Parceiros') }}
                    </x-responsive-nav-link>
                    
                    <x-responsive-nav-link :href="route('index-users')">
                        {{ __('Usuários') }}
                    </x-responsive-nav-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')"
                                               onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            @endauth

        </div>
    </div>
</nav>
