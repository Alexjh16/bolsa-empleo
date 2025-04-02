<x-layout>
    <x-slot:heading>
        Registro
    </x-slot>
    <form method="POST" action="/register" class="max-w-lg mx-auto p-6 bg-white shadow-lg rounded-lg">
        @csrf

        <div class="space-y-6">
            <div class="border-b border-gray-900/10 pb-6">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Crea una cuenta</h2>

                <x-form-field>
                    <x-form-label for="first_name" required>First Name</x-form-label>
                    <div class="mb-2">
                        <x-form-input name="first_name" id="first_name" required/>
                        <x-form-error name="first_name" />
                    </div>
                </x-form-field>

                <x-form-field>
                    <x-form-label for="last_name" required>Last Name</x-form-label>
                    <div class="mb-2">
                        <x-form-input name="last_name" required/>
                        <x-form-error name="last_name" />
                    </div>
                </x-form-field>

                <x-form-field>
                    <x-form-label for="email" required>Email</x-form-label>
                    <div class="mb-2">
                        <x-form-input name="email" type="email" required/>
                        <x-form-error name="email" />
                    </div>
                </x-form-field>

                <x-form-field>
                    <x-form-label for="password" required>Password</x-form-label>
                    <div class="mb-2">
                        <x-form-input name="password" type="password" required/>
                        <x-form-error name="password" />
                    </div>
                </x-form-field>

                <x-form-field>
                    <x-form-label for="password_confirmation" required>Confirm Password</x-form-label>
                    <div class="mb-2">
                        <x-form-input name="password_confirmation" type="password" required/>
                        <x-form-error name="password_confirmation" />
                    </div>
                </x-form-field>
            </div>
        </div>

        <div class="mt-4 flex items-center justify-between">
            <a href="/" class="text-sm font-semibold text-gray-600 hover:text-gray-800">Cancelar</a>
            <x-form-button>Registrar</x-form-button>
        </div>
    </form>
</x-layout>