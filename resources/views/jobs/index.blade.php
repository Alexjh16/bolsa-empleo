<x-layout>
    <x-slot:heading>
        Listado de Empleos
    </x-slot>


    <div class="space-y-4">
        @foreach ($jobs as  $job)
        <div class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300" x-data="{ saved: false }">
            <div class="p-6">
                <div class="flex justify-between items-start">
                    <div>
                        <h3 class="text-xl font-bold text-gray-900">{{ $job->title }}</h3>
                        <p class="text-gray-500">{{ $job->employer->name }}</p>
                    </div>
                    <button @click="saved = !saved" class="text-gray-400 hover:text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" :class="{ 'text-primary fill-current': saved }" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                        </svg>
                    </button>
                </div>
                <div class="mt-4 flex flex-wrap gap-2">
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                        Tiempo completo
                    </span>
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                        Remoto
                    </span>
                </div>
                <p class="mt-4 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus nostrum, voluptate soluta perferendis voluptatem tempore nemo laboriosam ab officiis exercitationem illo tenetur numquam maxime ad consectetur iste, dolores impedit. Voluptatibus!</p>
                <div class="mt-6 flex justify-between items-center">
                    <span class="text-primary font-bold">pays: {{ $job->salary }}</span>
                    <a href="{{ route('jobs.show', $job->id) }}" class="text-navy hover:text-primary font-medium text-primary   ">Ver detalles →</a>
                </div>
            </div>
        </div>

        @endforeach
        <div>
            {{ $jobs->links() }}
        </div>
    </div>

</x-layout>
