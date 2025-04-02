<div class="flex min-h-screen">
  <!-- Sidebar -->
  <div class="w-64 bg-gray-200 p-6">
    <h2 class="text-xl font-bold mb-6">Crescendo</h2>
    <nav class="space-y-2">
      <a href="/" class="block text-gray-700 py-2">Home</a>
      <a href="#" class="block text-gray-900 font-bold py-2 bg-gray-300 rounded-md">Settings</a>
    </nav>
  </div>

  <!-- Main Content -->
  <div class="flex-1 p-10 bg-white shadow-md">
    <!-- Tabs -->
    <div class="flex border-b mb-6">
      <button class="px-4 py-2 text-blue-600 border-b-2 border-blue-600">User</button>
    </div>

    <!-- Profile Section -->
    <div class="flex items-center space-x-6 mb-6">
      <div class="w-20 h-20 bg-blue-600 text-white flex items-center justify-center rounded-full text-xl font-bold">
        {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
      </div>
      <div>
        <h3 class="text-xl font-semibold">{{ Auth::user()->name }}</h3>
        <p class="text-gray-500">Pro Plan</p>
      </div>
    </div>

    <!-- Editable Fields -->
    <form>
      @csrf
      <div class="space-y-4">
        <div>
          <label class="block text-gray-600">First Name</label>
          <input type="text" name="name" wire:model="name" value="{{$name}}" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div>
          <label class="block text-gray-600">Email</label>
          <input type="email" name="email" wire:model="email" value="{{ $email }}" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="w-full">
            <label for="password"
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
            <input type="password" name="password" id="password" placeholder="Password" wire:model="password"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-[#85b2bf] dark:border-gray-600 dark:placeholder-black dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500"
              required="">
            @error('password')
            <span class="error">{{ $message }}</span>
            @enderror
          </div>
          <div class="w-full">
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
          <div class="mt-6">
        <button type="button" class="bg-purple-600 text-white px-6 py-2 rounded-md hover:bg-purple-700">Save</button>
      </div>
      </div>

      <!-- Save Button -->
      
    </form>
  </div>
</div>