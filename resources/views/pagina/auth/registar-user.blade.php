<div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
  @section('topbar')
  <livewire:Layout.Topbar />
  @endsection

  @if(session('info'))
  <div
    role="alert"
    class="bg-blue-100 dark:bg-blue-900 border-l-4 border-blue-500 dark:border-blue-700 text-blue-900 dark:text-blue-100 p-2 rounded-lg flex items-center transition duration-300 ease-in-out hover:bg-blue-200 dark:hover:bg-blue-800 transform hover:scale-105">
    <svg
      stroke="currentColor"
      viewBox="0 0 24 24"
      fill="none"
      class="h-5 w-5 flex-shrink-0 mr-2 text-blue-600"
      xmlns="http://www.w3.org/2000/svg">
      <path
        d="M13 16h-1v-4h1m0-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
        stroke-width="2"
        stroke-linejoin="round"
        stroke-linecap="round"></path>
    </svg>
    <p class="text-xs font-semibold">
      {{ session('info') }}
    </p>
  </div>
  @endif
  <div class="w-full bg-[#66c6ba] rounded-lg shadow  md:mt-0 sm:max-w-xl xl:p-0 ">
    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
      <h1
        class="text-xl font-bold leading-tight tracking-tight text-black md:text-2xl ">
        Criar Conta
      </h1>
      <form class="space-y-4 md:space-y-6">
        @csrf
        <div class="flex flex-row justify-around gap-6">
          <div class="w-full">
            <label for="text"
              class="block mb-2 text-sm font-medium text-black">Username</label>
            <input type="text" name="name" id="name" wire:model="user_name"
              class="bg-gray-50 border border-gray-300 placeholder-gray-400 text-black text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
              placeholder="Batata" required="">
            @error('user_name')
            <span class="error">{{ $message }}</span>
            @enderror
          </div>
          <div class="w-full">
            <label for="email"
              class="block mb-2 text-sm font-medium text-black">Your
              email</label>
            <input type="email" name="email" id="email" wire:model="email"
              class="bg-gray-50 border border-gray-300 placeholder-gray-400 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
              placeholder="name@company.com" required="">
            @error('email')
            <span class="error">{{ $message }}</span>
            @enderror
          </div>
        </div>
        <div class="flex flex-row justify-around gap-6">
          <div class="w-full">
            <label for="password"
              class="block mb-2 text-sm font-medium text-black">Password</label>
            <input type="password" name="password" id="password" placeholder="Password" wire:model="password"
              class="bg-gray-50 border border-gray-300 placeholder-gray-400 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
              required="">
            @error('password')
            <span class="error">{{ $message }}</span>
            @enderror
          </div>
          <div class="w-full">
            <label for="confirm-password"
              class="block mb-2 text-sm font-medium text-black">Confirm
              password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" wire:model="password_confirmation"
              placeholder=" Confirm Password"
              class="bg-gray-50 border border-gray-300 placeholder-gray-400 text-black text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
              required="">
            @error('password_confirmation')
            <span class="error">{{ $message }}</span>
            @enderror
          </div>
        </div>
        <button type="button" wire:click="registar"
          class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-[#85b2bf]  dark:focus:bg-[#649dad]">Create
          an account</button>
        <p class="text-sm font-light text-black dark:black">
          Já tens uma conta? <a href="{{ route('login') }}"
            class="font-medium text-primary-600 hover:underline dark:text-primary-500">Autentica-te aqui!
          </a>
        </p>
        <p class="text-sm font-light text-black dark:black">
          Queres registar-te como um artista? <a href="{{ route('registar-artista') }}"
            class="font-medium text-primary-600 hover:underline dark:text-primary-500">Regista-te Aqui!
          </a>
        </p>
      </form>
    </div>
  </div>
</div>