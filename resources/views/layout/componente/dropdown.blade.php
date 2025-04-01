<div>
    @if ($user)
        <button wire:click="abrirfechar" class="flex items-center justify-center px-4 py-2 text-sm font-medium text-gray-900 rounded-full   md:mr-0 focus:ring-4 focus:ring-gray-100   w-52 focus:outline-none focus:ring-transparent ">
            <div class="flex items-center">
                <!--<img class="w-8 h-8 rounded-full" src="{{asset('/assets/img/logo/logo25.png')}}" alt="user photo">
        -->
                <a class="text-right pr-4">{{$user->name}}</a><!--quando colocar img pl-4 enquanto sem img pr-4-->
                <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                
            </div>
        </button>
        @if($aberto==true)
            <div class=" z-10 bg-white divide-y divide-gray-400 rounded-lg shadow w-52 ">
                <div class="px-4 py-3 text-sm text-gray-900 ">
                    <div class="text-center font-medium ">{{$user->username}}</div>
                    <div class="text-center font-medium truncate">{{$user->email}}</div>
                </div>
                <!--<ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
                    <li>Futuro modificar perfil da pessoa
                        <a href="" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Perfil</a>
                    </li>
                </ul>-->
                <div class="py-2">
                    <button wire:click="logout" class="w-full font-medium block px-4 py-2 text-sm text-gray-700 hover:-translate-y-1 duration-300 ">
                        Sair
                    </button>
                </div>
            </div>
        @endif
    @endif
</div>
