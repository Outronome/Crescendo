<div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
  @section('topbar')
  <livewire:Layout.Topbar />
  @endsection
  <div
    class="w-full p-6 bg-[#649dad]  rounded-lg shadow  md:mt-0 sm:max-w-md  dark:border-gray-700 sm:p-8">
    <h1
      class="mb-1 text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
      Esqueci-me da Palavra-Passe?
    </h1>
    <p class=" text-black">
      Não Te Passes! Apenas escreve o teu email e nos vamos te um email para introduzires uma nova palavra-passe!
    </p>
    <form class="mt-4 space-y-4 lg:mt-5 md:space-y-5">
      <div>
        @csrf
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
          O teu Email
        </label>
        <input type="email" name="email" id="email" wire:model="email"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-[#85b2bf] dark:border-gray-600 dark:placeholder-black dark:black dark:focus:ring-blue-500 dark:focus:border-blue-500"
          placeholder="nome@empresa.com">
        @error('email')
        <span class="error">{{ $message }}</span>
        @enderror
      </div>
      <button type="button" wire:click="esqueci"
        class="w-full text-white bg-[#85b2bf] hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
        Mudar Palavra-Passe
      </button>
    </form>
  </div>
</div>