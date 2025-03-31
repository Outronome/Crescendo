<div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
  @section('topbar')
  <livewire:Layout.Topbar />
  @endsection
  @if(session('error'))
  <div
    role="alert"
    class="bg-red-100 dark:bg-red-900 border-l-4 border-red-500 dark:border-red-700 text-red-900 dark:text-red-100 p-2 rounded-lg flex items-center transition duration-300 ease-in-out hover:bg-red-200 dark:hover:bg-red-800 transform hover:scale-105">
    <svg
      stroke="currentColor"
      viewBox="0 0 24 24"
      fill="none"
      class="h-5 w-5 flex-shrink-0 mr-2 text-red-600"
      xmlns="http://www.w3.org/2000/svg">
      <path
        d="M13 16h-1v-4h1m0-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
        stroke-width="2"
        stroke-linejoin="round"
        stroke-linecap="round"></path>
    </svg>
    <p class="text-xs font-semibold">{{ session('error') }}</p>
  </div>
  
  @endif
  <form class="w-full bg-[#649dad] rounded-lg shadow  md:mt-0 sm:max-w-md xl:p-0 ">
    @csrf
    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
      <h1
        class="text-xl font-bold leading-tight tracking-tight text-white md:text-2xl dark:text-white">
        Autenticar
      </h1>
      <form class="space-y-4 md:space-y-6">
        <div>
          <label for="email"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
          <input type="email" name="email" id="email" wire:model="email"
            class="bg-[#85b2bf] border border-gray-300 text-black rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  dark:border-gray-600 dark:placeholder-black dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="name@company.com" id="email" name="email" value="{{ old('email') }}"
            required>
          @error('email')
          <span class="error">{{ $message }}</span>
          @enderror
        </div>
        <div>
          <label for="password"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Palavra-Passe</label>
          <input type="password" name="password" id="password" required placeholder="••••••••" wire:model="password"
            class="bg-[#85b2bf] border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  dark:border-gray-600 dark:placeholder-black  dark:focus:ring-blue-500 dark:focus:border-blue-500"
            required="">
          @error('password')
          <span class="error">{{ $message }}</span>
          @enderror
        </div>
        <div class="flex items-center justify-between">

          <a href="{{ route('esqueci') }}"
            class="text-sm font-medium text-white hover:underline dark:text-primary-500">Esqueci
            a palavra-passe?</a>
        </div>
        <button type="button" wire:click="autenticar"
          class="w-full  text-white bg-[#85b2bf] hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Sign
          in</button>
        <p class="text-sm font-light text-white">
          Ainda não tens conta? 
          <a href="{{ route('registar') }}"
            class="font-medium text-primary-600 hover:underline dark:text-primary-500">
            Regista-te!
          </a>
        </p>
      </form>
    </div>
</div>