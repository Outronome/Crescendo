<div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
  @section('topbar')
  <livewire:Layout.Topbar />
  @endsection

  @if(session('info'))
  <div role="alert" class="bg-blue-100 dark:bg-blue-900 border-l-4 border-blue-500 dark:border-blue-700 text-blue-900 dark:text-blue-100 p-2 rounded-lg flex items-center transition duration-300 ease-in-out hover:bg-blue-200 dark:hover:bg-blue-800 transform hover:scale-105">
    <svg stroke="currentColor" viewBox="0 0 24 24" fill="none" class="h-5 w-5 flex-shrink-0 mr-2 text-blue-600" xmlns="http://www.w3.org/2000/svg">
      <path d="M13 16h-1v-4h1m0-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"></path>
    </svg>
    <p class="text-xs font-semibold">
      {{ session('info') }}
    </p>
  </div>
  @endif

  <div class="w-full bg-[#649dad] rounded-lg shadow md:mt-0 sm:max-w-xl xl:p-0 ">
    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
      <h1 class="text-xl font-bold leading-tight tracking-tight text-white md:text-2xl dark:text-white">
        Criar Conta
      </h1>
      <form class="space-y-4 md:space-y-6">
        @csrf
        <div class="flex flex-row justify-around gap-6">
          <div class="w-full">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
            <input type="text" name="name" id="name" wire:model="name"
              class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-[#85b2bf] dark:border-gray-600 dark:placeholder-black dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
              placeholder="Batata" required>
            @error('name')
            <span class="error text-red-500">{{ $message }}</span>
            @enderror
          </div>
          <div class="w-full">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
            <input type="email" name="email" id="email" wire:model="email"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-[#85b2bf] dark:border-gray-600 dark:placeholder-black dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
              placeholder="name@company.com" required>
            @error('email')
            <span class="error text-red-500">{{ $message }}</span>
            @enderror
          </div>
        </div>

        <div class="flex flex-row justify-around gap-6">
          <div class="w-full">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
            <input type="password" name="password" id="password" placeholder="Password" wire:model="password"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-[#85b2bf] dark:border-gray-600 dark:placeholder-black dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
              required>
            @error('password')
            <span class="error text-red-500">{{ $message }}</span>
            @enderror
          </div>
          <div class="w-full">
            <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" wire:model="password_confirmation"
              placeholder=" Confirm Password"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-[#85b2bf] dark:border-gray-600 dark:placeholder-black dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
              required>
            @error('password_confirmation')
            <span class="error text-red-500">{{ $message }}</span>
            @enderror
          </div>
        </div>

        <div class="flex flex-row gap-6">
          <div class="w-3/4">
            <label for="bio" class="block text-gray-700 text-sm font-bold mb-2">
              Biografia
            </label>
            <textarea wire:model="bio" rows="5" placeholder="Enter your content" id="bio"
              class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
            @error('bio')
            <span class="error text-red-500">{{ $message }}</span>
            @enderror
          </div>
          <div class="w-1/4 mt-6">
            <div class="relative w-full group">
              <div class="relative z-40 cursor-pointer group-hover:scale-110 group-hover:shadow-2xl transition-all duration-300 bg-neutral-900 flex items-center justify-center h-32 w-32 mx-auto rounded-xl">
                <svg class="h-6 w-6 text-white/60" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" fill="none" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
                  <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2"></path>
                  <path d="M7 9l5 -5l5 5"></path>
                  <path d="M12 4l0 12"></path>
                </svg>
              </div>
              <div class="absolute inset-y-9 z-50 bg-transparent flex items-center justify-center h-32 w-32 mx-auto rounded-xl">
                <span class="text-white/60 text-center font-semibold text-sm px-4">Foto de perfil</span>
              </div>

              <input type="file" accept="image/*" class="absolute inset-0 z-50 w-full h-full opacity-0 cursor-pointer" wire:model="profile_pic" />
              @error('profile_pic')
              <span class="error text-red-500">{{ $message }}</span>
              @enderror
              <div class="absolute border opacity-0 group-hover:opacity-80 transition-all duration-300 border-dashed border-sky-400 inset-0 z-30 bg-transparent flex items-center justify-center h-32 w-32 mx-auto rounded-xl"></div>

              @if (session()->has('message'))
              <div class="mt-4 text-green-500 text-center">
                {{ session('message') }}
              </div>
              @endif
            </div>
          </div>
        </div>

        <button type="button" wire:click="registarArtista"
          class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-[#85b2bf] dark:focus:bg-[#649dad]">
          Criar Conta
        </button>

        <p class="text-sm font-light text-black dark:text-black">
          Já tens uma conta? <a href="{{ route('login') }}" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Autentica-te aqui!</a>
        </p>

        <p class="text-sm font-light text-black dark:text-black">
          Queres registar-te como um artista? <a href="{{ route('registar-artista') }}" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Regista-te Aqui!</a>
        </p>
      </form>
    </div>
  </div>
</div>