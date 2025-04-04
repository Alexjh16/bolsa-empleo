<x-layout>
  <x-slot:heading>
      Iniciar sesión
  </x-slot>
  <form method="POST" action="/login" class="max-w-lg mx-auto p-6 bg-white shadow-lg rounded-lg">
      @csrf

      <div class="space-y-6">
          <div class="border-b border-gray-900/10 pb-6">
              <h2 class="text-2xl font-semibold text-gray-800 mb-4">Bienvenido de nuevo</h2>

              <div class="grid grid-cols-1 gap-x-6 gap-y-4 sm:grid-cols-2">
                  <x-form-field>
                      <x-form-label for="email">Email</x-form-label>
                      <div class="mt-2">
                          <x-form-input name="email" id="email" :value="old('email')" placeholder="example@mail.com" required/>
                          <x-form-error name="email"/>
                      </div>
                  </x-form-field>

                  <x-form-field>
                      <x-form-label for="password">Password</x-form-label>
                      <div class="mt-2">
                          <x-form-input name="password" type="password" placeholder="********" required/>
                          <x-form-error name="password"/>
                      </div>
                  </x-form-field>
              </div>
          </div>
      </div>

      <div class="mt-4 flex items-center justify-between">
          <button type="button" class="text-sm font-semibold text-gray-600 hover:text-gray-800 cursor-pointer" onclick="window.location='/'">Cancelar</button>
          <x-form-button>Iniciar sesión</x-form-button>
      </div>
  </form>
</x-layout>