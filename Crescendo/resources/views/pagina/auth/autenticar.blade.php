<div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
  @section('topbar')
  <livewire:Layout.Topbar />
  @endsection
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
          
          <a href="{{ route('password.request') }}"
            class="text-sm font-medium text-white hover:underline dark:text-primary-500">Forgot
            password?</a>
        </div>
        <button type="button" wire:click="autenticar"
          class="w-full  text-white bg-[#85b2bf] hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Sign
          in</button>
        <p class="text-sm font-light text-white">
          Don’t have an account yet? <a href="{{ route('register') }}"
            class="font-medium text-primary-600 hover:underline dark:text-primary-500">Sign
            up</a>
        </p>
      </form>
    </div>
</div>