<x-layout>
    <x-slot:heading>
        Register
    </x-slot>
    <form method="POST" action="/register">
        @csrf

        <div class="space-y-12">
          <div class="border-b border-gray-900/10 pb-12">

            <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <x-form-field>
                    <x-form-label for="first_name" required>First Name</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="first_name" id="first_name" required/>
                            <x-form-error name="first_name" />
                        </div>
                </x-form-field>

                <x-form-field>
                    <x-form-label for="last_name" required>Last Name </x-form-label>
                        <div class="mt-2">
                            <x-form-input name="last_name" required/>
                            <x-form-error name="last_name" />
                        </div>
                </x-form-field>

                <x-form-field>
                    <x-form-label for="email" required>Email Name </x-form-label>
                        <div class="mt-2">
                            <x-form-input name="email" type="email" required/>
                            <x-form-error name="email" />
                        </div>
                </x-form-field>

                <x-form-field>
                    <x-form-label for="password" required>Password</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="password" type="password" required/>
                            <x-form-error name="password" />
                        </div>
                </x-form-field>

                <x-form-field>
                    <x-form-label for="password_confirmation" required>Confirm Password</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="password_confirmation" type="password" required/>
                            <x-form-error name="password_confirmation" />
                        </div>
                </x-form-field>
            </div>


          </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
          <a href="/" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
          <x-form-button>Register</x-form-button>
        </div>
      </form>
</x-layout>
