<x-layout>
    <x-slot:heading>
        Publicar empleo
    </x-slot>
    <form method="POST" action="/jobs">
        @csrf

        <div class="space-y-12">
          <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base/7 font-semibold text-gray-900">Publicar empleo</h2>
            <p class="mt-1 text-sm/6 text-gray-600">Brindanos los detalles de tu empleo</p>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <x-form-field>
                    <x-form-label for="title" >Titulo</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="title" id="title" placeholder="CEO" required/>
                            <x-form-error name="title" />
                        </div>
                </x-form-field>

                <x-form-field>
                    <x-form-label for="salary">Salario ($USD) </x-form-label>
                        <div class="mt-2">
                            <x-form-input name="salary" placeholder="500.00" required/>
                            <x-form-error name="salary" />
                        </div>
                </x-form-field>
            </div>


          </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
          <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
          <x-form-button>Save</x-form-button>
        </div>
      </form>
</x-layout>
