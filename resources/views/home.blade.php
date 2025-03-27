<x-layout>
    <x-slot:heading>
        Home page
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
                    <button class="bg-primary hover:bg-indigo-700 text-white font-bold py-3 px-6">
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
                <!-- Job Card 1 -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300" x-data="{ saved: false }">
                    <div class="p-6">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-xl font-bold text-gray-900">Desarrollador Frontend</h3>
                                <p class="text-gray-500">TechCorp Inc.</p>
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
                        <p class="mt-4 text-gray-600">Buscamos un desarrollador frontend con experiencia en HTML, CSS y JavaScript para unirse a nuestro equipo.</p>
                        <div class="mt-6 flex justify-between items-center">
                            <span class="text-primary font-bold">$50,000 - $70,000</span>
                            <a href="#" class="text-navy hover:text-primary font-medium">Ver detalles →</a>
                        </div>
                    </div>
                </div>

                <!-- Job Card 2 -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300" x-data="{ saved: false }">
                    <div class="p-6">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-xl font-bold text-gray-900">Diseñador UX/UI</h3>
                                <p class="text-gray-500">Creative Solutions</p>
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
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                                Híbrido
                            </span>
                        </div>
                        <p class="mt-4 text-gray-600">Estamos buscando un diseñador UX/UI talentoso para crear experiencias de usuario excepcionales.</p>
                        <div class="mt-6 flex justify-between items-center">
                            <span class="text-primary font-bold">$60,000 - $80,000</span>
                            <a href="#" class="text-navy hover:text-primary font-medium">Ver detalles →</a>
                        </div>
                    </div>
                </div>

                <!-- Job Card 3 -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300" x-data="{ saved: false }">
                    <div class="p-6">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-xl font-bold text-gray-900">Desarrollador Backend</h3>
                                <p class="text-gray-500">InnovateTech</p>
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
                        <p class="mt-4 text-gray-600">Buscamos un desarrollador backend con experiencia en PHP/Laravel para unirse a nuestro equipo.</p>
                        <div class="mt-6 flex justify-between items-center">
                            <span class="text-primary font-bold">$65,000 - $85,000</span>
                            <a href="#" class="text-navy hover:text-primary font-medium">Ver detalles →</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-12 text-center">
                <a href="#" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-primary hover:bg-indigo-700">
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
                    <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl">¿Listo para encontrar tu próximo empleo?</h2>
                    <p class="mt-4 max-w-3xl text-lg">Crea tu perfil ahora y comienza a postularte a los mejores empleos disponibles en el mercado.</p>
                </div>
                <div class="mt-8 lg:mt-0 lg:ml-8">
                    <div class="flex flex-col sm:flex-row lg:flex-col xl:flex-row gap-4">
                        <a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-navy bg-white hover:bg-gray-100">
                            Crear Cuenta
                        </a>
                        <a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-primary hover:bg-indigo-700">
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

    <!-- Footer -->
    <footer class="bg-navy text-white">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center">
                        <svg class="h-8 w-8 text-indigo-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <span class="ml-3 text-xl font-bold">Portal de Empleos</span>
                    </div>
                    <p class="mt-4 text-gray-300">Conectamos a los mejores talentos con las mejores empresas. Encuentra tu próximo empleo o al candidato perfecto con nosotros.</p>
                    <div class="mt-6 flex space-x-6">
                        <a href="#" class="text-gray-400 hover:text-white">
                            <span class="sr-only">Facebook</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <span class="sr-only">Instagram</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <span class="sr-only">Twitter</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-gray-300 tracking-wider uppercase">Empresa</h3>
                    <ul class="mt-4 space-y-4">
                        <li><a href="#" class="text-base text-gray-300 hover:text-white">Sobre Nosotros</a></li>
                        <li><a href="#" class="text-base text-gray-300 hover:text-white">Blog</a></li>
                        <li><a href="#" class="text-base text-gray-300 hover:text-white">Testimonios</a></li>
                        <li><a href="#" class="text-base text-gray-300 hover:text-white">Contacto</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-gray-300 tracking-wider uppercase">Enlaces Útiles</h3>
                    <ul class="mt-4 space-y-4">
                        <li><a href="#" class="text-base text-gray-300 hover:text-white">Empleos</a></li>
                        <li><a href="#" class="text-base text-gray-300 hover:text-white">Empresas</a></li>
                        <li><a href="#" class="text-base text-gray-300 hover:text-white">Preguntas Frecuentes</a></li>
                        <li><a href="#" class="text-base text-gray-300 hover:text-white">Política de Privacidad</a></li>
                    </ul>
                </div>
            </div>
            <div class="mt-12 border-t border-gray-700 pt-8">
                <p class="text-base text-gray-400 text-center">&copy; 2025 Portal de Empleos. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>
</x-layout>
