<nav class="border-gray-200 bg-[#8bd4cb] dark:border-gray-700 p-4">
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto relative">
        <a href="#" class="flex items-center space-x-3">
            <img src="/assets/img/Crescendo_symbol.png" class="h-12" alt="Logo" />
            <span class="text-2xl font-semibold text-white">Crescendo</span>
        </a>

        <div class="flex items-center space-x-3">
            <!-- Campo de busca -->
            <div>
                <input type="text" id="search-navbar" class="w-40 p-2 text-sm text-white shadow rounded-lg bg-[#8bd4cb] 
                      dark:text-white" placeholder="Search">
            </div>

            <!-- Carrinho -->
            <button>
                <i
                    class="fi fi-br-cart-shopping-fast text-2xl p-1 pl-2 pr-2 rounded-lg hover:bg-[#85b2bf] text-white"></i>
            </button>

            <!-- Menu -->

            <button data-collapse-toggle="navbar-hamburger" type="button"
                class="inline-flex items-center justify-center p-2 w-10 h-10 text-sm text-gray-500 rounded-lg hover:bg-[#85b2bf] focus:outline-none  dark:text-gray-400  "
                aria-controls="navbar-hamburger" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <i class="fi fi-br-menu-burger text-2xl text-white  "></i>
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden absolute right-0 top-full mt-2 w-48  bg-[#8bd4cb] dark:border-gray-700 rounded-lg shadow-lg"
                id="navbar-hamburger">
                <ul class="flex flex-col font-medium">
                    <li>
                        <a href="#" class="block py-2 px-3 text-white rounded-sm hover:bg-[#85b2bf] "
                            aria-current="page">Perfil</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 dark:text-white dark:hover:bg-[#85b2bf] dark:hover:text-white">Wishlist</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 dark:text-white dark:hover:bg-[#85b2bf] dark:hover:text-white">Logout</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 dark:text-white dark:hover:bg-[#85b2bf] dark:hover:text-white">Contact</a>
                    </li>
                </ul>
                
            </div>
        </div>
</nav>