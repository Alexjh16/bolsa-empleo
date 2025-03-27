<x-layout>
    <x-slot:heading>
        Bienvenido a tu nuevo empleo.
    </x-slot>

    <!-- Hero Section -->
    <section class="bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-20">
            <div class="text-center">
                <h2 class="text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-6xl">Encuentra tu trabajo ideal</h2>
                <p class="mt-5 max-w-xl mx-auto text-xl text-gray-500">Explora miles de ofertas de empleo y encuentra la oportunidad perfecta para tu carrera profesional.</p>
            </div>

            <div class="mt-10 max-w-xl mx-auto" x-data="{ open: false }">
                <div class="flex flex-col md:flex-row shadow-lg rounded-lg overflow-hidden">
                    <input type="text" placeholder="Buscar empleos..." class="flex-1 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary">
                    <button class="bg-indigo-700 hover:bg-indigo-800 cursor-pointer text-white font-bold py-3 px-6">
                        Buscar
                    </button>
                </div>
                <div class="mt-4 flex flex-wrap gap-2">
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-gray-100 text-gray-800">
                        Tiempo completo
                    </span>
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-gray-100 text-gray-800">
                        Remoto
                    </span>
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-gray-100 text-gray-800">
                        Tecnología
                    </span>
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-gray-100 text-gray-800">
                        Marketing
                    </span>
                </div>
            </div>
        </div>
    </section>

    <!-- Empleos Destacados -->
    <section class="bg-gray-50 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-900">Empleos Destacados</h2>
                <p class="mt-4 max-w-2xl mx-auto text-lg text-gray-500">Descubre las mejores oportunidades laborales seleccionadas para ti.</p>
            </div>

            <div class="mt-10 grid gap-8 md:grid-cols-2 lg:grid-cols-3">
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
                                <a href="{{ route('jobs.show', $job->id) }}" class="text-navy hover:text-primary font-medium">Ver detalles →</a>
                            </div>
                        </div>
                    </div>


                @endforeach

            </div>

            <div class="mt-12 text-center">
                <a href="{{ route('jobs.index') }}" class="inline-flex items-center px-6 py-3 bg-cyan-500 hover:bg-cyan-600 border border-transparent text-base font-medium rounded-md text-white bg-primary ">
                    Ver todos los empleos
                </a>
            </div>
        </div>
    </section>

    <!-- Categorías de Empleos -->
    <section class="bg-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-900">Explora por Categoría</h2>
                <p class="mt-4 max-w-2xl mx-auto text-lg text-gray-500">Encuentra empleos en tu área de especialización.</p>
            </div>

            <div class="mt-10 grid gap-6 grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                <!-- Categoría 1 -->
                <a href="#" class="group">
                    <div class="flex flex-col items-center p-6 bg-gray-50 rounded-lg border border-gray-200 hover:bg-gray-100 hover:border-primary transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <h3 class="mt-4 text-lg font-medium text-gray-900 group-hover:text-primary">Tecnología</h3>
                        <p class="mt-1 text-sm text-gray-500">458 empleos</p>
                    </div>
                </a>

                <!-- Categoría 2 -->
                <a href="#" class="group">
                    <div class="flex flex-col items-center p-6 bg-gray-50 rounded-lg border border-gray-200 hover:bg-gray-100 hover:border-primary transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                        </svg>
                        <h3 class="mt-4 text-lg font-medium text-gray-900 group-hover:text-primary">Marketing</h3>
                        <p class="mt-1 text-sm text-gray-500">325 empleos</p>
                    </div>
                </a>

                <!-- Categoría 3 -->
                <a href="#" class="group">
                    <div class="flex flex-col items-center p-6 bg-gray-50 rounded-lg border border-gray-200 hover:bg-gray-100 hover:border-primary transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <h3 class="mt-4 text-lg font-medium text-gray-900 group-hover:text-primary">Finanzas</h3>
                        <p class="mt-1 text-sm text-gray-500">286 empleos</p>
                    </div>
                </a>

                <!-- Categoría 4 -->
                <a href="#" class="group">
                    <div class="flex flex-col items-center p-6 bg-gray-50 rounded-lg border border-gray-200 hover:bg-gray-100 hover:border-primary transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        <h3 class="mt-4 text-lg font-medium text-gray-900 group-hover:text-primary">Recursos Humanos</h3>
                        <p class="mt-1 text-sm text-gray-500">195 empleos</p>
                    </div>
                </a>

                <!-- Categoría 5 -->
                <a href="#" class="group">
                    <div class="flex flex-col items-center p-6 bg-gray-50 rounded-lg border border-gray-200 hover:bg-gray-100 hover:border-primary transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                        <h3 class="mt-4 text-lg font-medium text-gray-900 group-hover:text-primary">Inmobiliaria</h3>
                        <p class="mt-1 text-sm text-gray-500">142 empleos</p>
                    </div>
                </a>

                <!-- Categoría 6 -->
                <a href="#" class="group">
                    <div class="flex flex-col items-center p-6 bg-gray-50 rounded-lg border border-gray-200 hover:bg-gray-100 hover:border-primary transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                        <h3 class="mt-4 text-lg font-medium text-gray-900 group-hover:text-primary">Salud</h3>
                        <p class="mt-1 text-sm text-gray-500">310 empleos</p>
                    </div>
                </a>

                <!-- Categoría 7 -->
                <a href="#" class="group">
                    <div class="flex flex-col items-center p-6 bg-gray-50 rounded-lg border border-gray-200 hover:bg-gray-100 hover:border-primary transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <h3 class="mt-4 text-lg font-medium text-gray-900 group-hover:text-primary">Administración</h3>
                        <p class="mt-1 text-sm text-gray-500">275 empleos</p>
                    </div>
                </a>

                <!-- Categoría 8 -->
                <a href="#" class="group">
                    <div class="flex flex-col items-center p-6 bg-gray-50 rounded-lg border border-gray-200 hover:bg-gray-100 hover:border-primary transition-colors duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                        <h3 class="mt-4 text-lg font-medium text-gray-900 group-hover:text-primary">Educación</h3>
                        <p class="mt-1 text-sm text-gray-500">218 empleos</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="bg-navy text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:flex lg:items-center lg:justify-between">
                <div class="lg:w-0 lg:flex-1">
                    <h2 class="text-3xl font-extrabold text-gray-900 tracking-tight sm:text-4xl">¿Listo para encontrar tu próximo empleo?</h2>
                    <p class="mt-4 max-w-3xl text-lg text-gray-500">Crea tu perfil ahora y comienza a postularte a los mejores empleos disponibles en el mercado.</p>
                </div>
                <div class="mt-8 lg:mt-0 lg:ml-8">
                    <div class="flex flex-col sm:flex-row lg:flex-col xl:flex-row gap-4">
                        <a href="/register" class="inline-flex bg-green-400  items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-navy  hover:bg-green-500">
                            Crear Cuenta
                        </a>
                        <a href="{{ route('jobs.create') }}" class="inline-flex bg-indigo-600 items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-primary hover:bg-indigo-700">
                            Publicar Empleo
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Estadísticas -->
    <section class="bg-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 gap-8 md:grid-cols-4">
                <div class="text-center">
                    <span class="block text-4xl font-extrabold text-primary">2,500+</span>
                    <span class="block mt-2 text-lg text-gray-500">Empleos Activos</span>
                </div>
                <div class="text-center">
                    <span class="block text-4xl font-extrabold text-primary">1,200+</span>
                    <span class="block mt-2 text-lg text-gray-500">Empresas</span>
                </div>
                <div class="text-center">
                    <span class="block text-4xl font-extrabold text-primary">15,000+</span>
                    <span class="block mt-2 text-lg text-gray-500">Candidatos</span>
                </div>
                <div class="text-center">
                    <span class="block text-4xl font-extrabold text-primary">8,500+</span>
                    <span class="block mt-2 text-lg text-gray-500">Contrataciones</span>
                </div>
            </div>
        </div>
    </section>
<x-footer></x-footer>

</x-layout>
