<div class="relative w-full h-20 bg-indigo-300 ">
        <div class="absolute left-24 -top-3 ">
            <img src="{{asset('/assets/img/logo.png')}}" alt="Imagem para ecrãs menores que sm" class="w-24 sm:hidden">
            <img src="{{asset('/assets/img/logo.png')}}" alt="Imagem para ecrãs iguais ou maiores que sm" class="w-48  hidden sm:block">
        </div>
        <div class="absolute right-16 top-5  ">
            <div class="relative inline-block text-left ">
                <livewire:Layout.Dropdown /> 
            </div>
        </div>
        
</div>
