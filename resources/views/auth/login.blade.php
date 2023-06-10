<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="card-body p-5 text-center">
          <div class="mb-md-5 mt-md-4 pb-5">

            <h2 class="mb-2 text-white font-bold text-5xl uppercase">Login</h2>
            <p class="text-gray-400 mb-14">Please enter your login and password!</p>

            <div>
              <x-text-input id="email" class="block mt-1 w-full"
                              type="email"
                              name="email"
                              placeholder="username"
                              :value="old('email')"
                              required
                              autofocus
                              autocomplete="username" />
              <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="mt-4">
              <x-text-input id="password" class="block mt-1 w-full"
                              type="password"
                              name="password"
                              placeholder="password"
                              required autocomplete="current-password" />
              <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <button class="mt-14 text-white border-2 py-2 px-8 rounded-md" type="submit">Login</button>
          </div>
        </div>
    </form>
</x-guest-layout>
