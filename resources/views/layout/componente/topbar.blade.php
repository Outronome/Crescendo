<nav class="absolute w-full top-5 z-50 bg-transparent">
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css">

    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto relative">
        <a href="{{ route('inicio') }}" class="flex items-center space-x-3">
            <img src="/assets/img/Crescendo_symbol.png" class="h-12" alt="Logo"  />
            <span class="text-2xl font-semibold text-black">Crescendo</span>
        </a>

        <div class="flex items-center space-x-3">
            <!-- Campo de busca -->
            <div>
                <input type="text" id="search-navbar" class="w-40 p-2 text-sm text-black shadow rounded-lg bg-white opacity-25
                      " placeholder="Search">
            </div>
            @if(Auth::check())
                <!-- Carrinho -->
                <button onclick="window.location.href='{{ route('carrinho') }}'" class="hidden md:block">
                    <i
                        class="fi fi-br-cart-shopping-fast text-2xl p-1 pl-2 pr-2 rounded-lg hover:bg-[#85b2bf] text-black"></i>
                </button>
            @endif

            <!-- Menu -->

            <button data-collapse-toggle="navbar-hamburger" type="button"
                class="inline-flex items-center justify-center p-2 w-10 h-10 text-sm text-gray-500 rounded-lg hover:bg-[#85b2bf] focus:outline-none  dark:text-gray-400  "
                aria-controls="navbar-hamburger" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <i class="fi fi-br-menu-burger text-2xl text-black  "></i>
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden absolute right-0 top-full mt-2 w-48  bg-[#8bd4cb] dark:border-gray-700 rounded-lg shadow-lg"
                id="navbar-hamburger">
                <ul class="flex flex-col font-medium">

                    <li>
                        <a href="{{ route('market') }}" class="flex items-center space-x-2  py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 
                             dark:text-white dark:hover:bg-[#85b2bf] dark:hover:text-white">
                            <!-- Ícone de Marketplace -->
                            <i class="fi fi-br-shop pt-1"></i>
                            <span>Marketplace</span>
                        </a>

                    </li>
                    <li>
                        <a href=" {{ route('carrinho') }}"
                            class="block md:hidden py-2 px-3 text-white rounded-sm hover:bg-[#85b2bf] "
                            aria-current="page"><i class="fi fi-br-cart-shopping-fast pt-1"></i>
                            <span>Carrinho</span></a>
                        </a>
                    </li>
                    <li>
                        <a href=" {{ route('perfil') }}"
                            class="block py-2 px-3 text-white rounded-sm hover:bg-[#85b2bf] " aria-current="page"><i
                                class="fi fi-br-user pt-1"></i>
                            <span>Profile</span></a>
                    </li>
                    <li>
                        <a href=" {{ route('wishlist') }}"
                            class="block py-2 px-3 text-white rounded-sm hover:bg-[#85b2bf] " aria-current="page"><i
                                class="fi fi-br-heart pt-1"></i>
                            <span>Wishlist</span>
                        </a>
                    </li>
                    @if(!Auth::check())
                        <li>

                            <a href="{{ route('login') }}"
                                class="flex items-center space-x-2  py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 
                                                                 dark:text-white dark:hover:bg-[#85b2bf] dark:hover:text-white">
                                <!-- Ícone de Marketplace -->
                                <i class="fi fi-br-sign-in-alt pt-1"></i>
                                <span>Autenticar</span>
                            </a>

                        </li>

                        <li>
                            <a href="{{ route('registar') }}"
                                class="flex items-center space-x-2  py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 
                                                                 dark:text-white dark:hover:bg-[#85b2bf] dark:hover:text-white">
                                <!-- Ícone de Marketplace -->
                                <i class="fi fi-br-smile-plus pt-1"></i>
                                <span>Registar</span>
                            </a>

                        </li>
                    @endif

                    @if(Auth::check())

                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <a class="flex items-center space-x-2  py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 
                                    dark:text-white dark:hover:bg-[#85b2bf] dark:hover:text-white ">
                                    <button class="w-full text-start "><i class="fi fi-br-sign-out-alt pt-1"></i>
                                        Logout</button>
                                </a>

                            </form>


                        </li>
                    @endif
                    <li>
                        <a href=" {{ route('gestao-user') }}"
                            class="block py-2 px-3 text-white rounded-sm hover:bg-[#85b2bf] " aria-current="page"><i
                                class="fi fi-br-stats pt-1"></i>
                            <span>Painel Users</span>
                        </a>
                    </li>


                </ul>

            </div>
        </div>
</nav>