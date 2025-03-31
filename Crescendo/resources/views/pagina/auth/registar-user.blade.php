<div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
  @section('topbar')
  <livewire:Layout.Topbar />
  @endsection
  <div class="w-full bg-[#649dad] rounded-lg shadow  md:mt-0 sm:max-w-md xl:p-0 ">
    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
      <h1
        class="text-xl font-bold leading-tight tracking-tight text-white md:text-2xl dark:text-white">
        Criar Conta
      </h1>
      <form class="space-y-4 md:space-y-6">
        @csrf
        <div>
          <label for="text"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
          <input type="text" name="name" id="name" wire:model="user_name"
            class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-[#85b2bf] dark:border-gray-600 dark:placeholder-black dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Batata" required="">
          @error('user_name')
          <span class="error">{{ $message }}</span>
          @enderror
        </div>
        <div>
          <label for="email"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
            email</label>
          <input type="email" name="email" id="email" wire:model="email"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-[#85b2bf] dark:border-gray-600 dark:placeholder-black dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="name@company.com" required="">
          @error('email')
          <span class="error">{{ $message }}</span>
          @enderror
        </div>
        <div>
          <label for="password"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
          <input type="password" name="password" id="password" placeholder="Password" wire:model="password"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-[#85b2bf] dark:border-gray-600 dark:placeholder-black dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
            required="">
          @error('password')
          <span class="error">{{ $message }}</span>
          @enderror
        </div>
        <div>
          <label for="confirm-password"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm
            password</label>
          <input type="password" name="password_confirmation" id="password_confirmation" wire:model="password_confirmation"
            placeholder=" Confirm Password"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-[#85b2bf] dark:border-gray-600 dark:placeholder-black dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
            required="">
          @error('password_confirmation')
          <span class="error">{{ $message }}</span>
          @enderror
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
          Queres registar-te como um artista? <a href="{{ route('register-artist') }}"
            class="font-medium text-primary-600 hover:underline dark:text-primary-500">Regista-te Aqui!
          </a>
        </p>
      </form>
    </div>
  </div>
</div>