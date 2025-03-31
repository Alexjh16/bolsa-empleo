<x-layout>
    <x-slot:heading>
        Empleo | Detalle
    </x-slot>


    @can('edit', $job)
        <p class="mt-6">
            <x-button href="{{ route('jobs.edit', $job->id) }}">Edit Job</x-button>
        </p>
    @endcan

    <!-- Encabezado -->


    <!-- Contenido principal -->
    <main class="py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-12 lg:gap-8">
                <!-- Contenido principal -->
                <div class="lg:col-span-8">
                    <!-- Encabezado del empleo -->
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden mb-8">
                        <div class="p-6">
                            <div class="flex items-center">
                                <div
                                    class="flex-shrink-0 h-16 w-16 bg-gray-100 rounded-md flex items-center justify-center">
                                    <svg class="h-10 w-10 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <div class="ml-5">
                                    <h1 class="text-2xl font-bold text-gray-900">{{ $job->title }}</h1>
                                    <div class="mt-1 flex items-center">
                                        <span class="text-lg text-gray-600">{{ $job->employer->name }}</span>
                                        <span class="mx-2 text-gray-500">•</span>
                                        <span class="text-gray-600">Ciudad de México</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-6 flex flex-wrap gap-2">
                                <span
                                    class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800">
                                    Tiempo completo
                                </span>
                                <span
                                    class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800">
                                    Remoto
                                </span>
                                <span
                                    class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-purple-100 text-purple-800">
                                    Tecnología
                                </span>
                            </div>
                            <div class="mt-6 flex items-center justify-between">
                                <div class="flex items-center">
                                    <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <svg class="h-5 w-5 text-gray-300" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    <span class="ml-2 text-gray-600">4.0 (24 reseñas)</span>
                                </div>
                                <div class="flex items-center space-x-2" x-data="{ saved: false }">
                                    <button @click="saved = !saved"
                                        class="flex items-center text-gray-500 hover:text-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                            :class="{ 'text-primary fill-current': saved }" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                                        </svg>
                                        <span class="ml-1" x-text="saved ? 'Guardado' : 'Guardar'">Guardar</span>
                                    </button>
                                    <button class="flex items-center text-gray-500 hover:text-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" />
                                        </svg>
                                        <span class="ml-1">Compartir</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Descripción del empleo -->
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden mb-8">
                        <div class="p-6">
                            <h2 class="text-xl font-bold text-gray-900 mb-4">Descripción del puesto</h2>
                            <div class="prose max-w-none text-gray-600">
                                <p class="mb-4">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla, harum eveniet?
                                    Amet, laudantium perspiciatis ipsam assumenda, cumque provident molestiae mollitia
                                    rerum necessitatibus blanditiis architecto aliquam maxime quo facere deleniti modi!
                                </p>
                                <p class="mb-4">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla, harum eveniet?
                                    Amet, laudantium perspiciatis ipsam assumenda, cumque provident molestiae mollitia
                                    rerum necessitatibus blanditiis architecto aliquam maxime quo facere deleniti modi!
                                </p>
                                <p>
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla, harum eveniet?
                                    Amet, laudantium perspiciatis ipsam assumenda, cumque provident molestiae mollitia
                                    rerum necessitatibus blanditiis architecto aliquam maxime quo facere deleniti modi!
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Responsabilidades -->
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden mb-8">
                        <div class="p-6">
                            <h2 class="text-xl font-bold text-gray-900 mb-4">Responsabilidades</h2>
                            <ul class="list-disc pl-5 space-y-2 text-gray-600">
                                @for ($i = 0; $i <= 10; $i++)
                                    <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
                                @endfor
                            </ul>
                        </div>
                    </div>

                    <!-- Requisitos -->
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden mb-8">
                        <div class="p-6">
                            <h2 class="text-xl font-bold text-gray-900 mb-4">Requisitos</h2>
                            <div class="mb-6">
                                <h3 class="text-lg font-semibold text-gray-900 mb-2">Requisitos esenciales:</h3>
                                <ul class="list-disc pl-5 space-y-2 text-gray-600">
                                    @for ($i = 0; $i <= 10; $i++)
                                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
                                    @endfor
                                </ul>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-2">Requisitos deseables:</h3>
                                <ul class="list-disc pl-5 space-y-2 text-gray-600">
                                    @for ($i = 0; $i <= 10; $i++)
                                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
                                    @endfor
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Beneficios -->
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden mb-8">
                        <div class="p-6">
                            <h2 class="text-xl font-bold text-gray-900 mb-4">Beneficios</h2>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="flex items-start">
                                    <svg class="h-6 w-6 text-primary mt-0.5" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="ml-2 text-gray-600">Salario competitivo</span>
                                </div>
                                <div class="flex items-start">
                                    <svg class="h-6 w-6 text-primary mt-0.5" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="ml-2 text-gray-600">Trabajo 100% remoto</span>
                                </div>
                                <div class="flex items-start">
                                    <svg class="h-6 w-6 text-primary mt-0.5" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="ml-2 text-gray-600">Horario flexible</span>
                                </div>
                                <div class="flex items-start">
                                    <svg class="h-6 w-6 text-primary mt-0.5" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="ml-2 text-gray-600">Seguro médico privado</span>
                                </div>
                                <div class="flex items-start">
                                    <svg class="h-6 w-6 text-primary mt-0.5" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="ml-2 text-gray-600">Presupuesto para equipo y formación</span>
                                </div>
                                <div class="flex items-start">
                                    <svg class="h-6 w-6 text-primary mt-0.5" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="ml-2 text-gray-600">Vacaciones ilimitadas</span>
                                </div>
                                <div class="flex items-start">
                                    <svg class="h-6 w-6 text-primary mt-0.5" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="ml-2 text-gray-600">Oportunidades de crecimiento profesional</span>
                                </div>
                                <div class="flex items-start">
                                    <svg class="h-6 w-6 text-primary mt-0.5" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="ml-2 text-gray-600">Eventos de equipo y actividades sociales</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Proceso de selección -->
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                        <div class="p-6">
                            <h2 class="text-xl font-bold text-gray-900 mb-4">Proceso de selección</h2>
                            <ol class="relative border-l border-gray-200 ml-3 space-y-6">
                                <li class="mb-6 ml-6">
                                    <span
                                        class="absolute flex items-center justify-center w-8 h-8 bg-primary rounded-full -left-4 ring-4 ring-white">
                                        <span class="text-white font-bold">1</span>
                                    </span>
                                    <h3 class="flex items-center text-lg font-semibold text-gray-900">Revisión de CV y
                                        portafolio</h3>
                                    <p class="mt-1 text-gray-600">Evaluaremos tu experiencia, habilidades y proyectos
                                        previos.</p>
                                </li>
                                <li class="mb-6 ml-6">
                                    <span
                                        class="absolute flex items-center justify-center w-8 h-8 bg-primary rounded-full -left-4 ring-4 ring-white">
                                        <span class="text-white font-bold">2</span>
                                    </span>
                                    <h3 class="flex items-center text-lg font-semibold text-gray-900">Entrevista
                                        técnica inicial</h3>
                                    <p class="mt-1 text-gray-600">Conversación con nuestro equipo técnico para evaluar
                                        tus conocimientos y experiencia.</p>
                                </li>
                                <li class="mb-6 ml-6">
                                    <span
                                        class="absolute flex items-center justify-center w-8 h-8 bg-primary rounded-full -left-4 ring-4 ring-white">
                                        <span class="text-white font-bold">3</span>
                                    </span>
                                    <h3 class="flex items-center text-lg font-semibold text-gray-900">Prueba técnica
                                    </h3>
                                    <p class="mt-1 text-gray-600">Realizarás un ejercicio práctico para demostrar tus
                                        habilidades de desarrollo frontend.</p>
                                </li>
                                <li class="ml-6">
                                    <span
                                        class="absolute flex items-center justify-center w-8 h-8 bg-primary rounded-full -left-4 ring-4 ring-white">
                                        <span class="text-white font-bold">4</span>
                                    </span>
                                    <h3 class="flex items-center text-lg font-semibold text-gray-900">Entrevista final
                                    </h3>
                                    <p class="mt-1 text-gray-600">Conocerás a nuestro equipo directivo y discutiremos
                                        aspectos culturales y expectativas.</p>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>

                <!-- Barra lateral -->
                <div class="lg:col-span-4 mt-8 lg:mt-0">
                    <!-- Resumen y botón de aplicación -->
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden mb-8 sticky top-4">
                        <div class="p-6">
                            <h2 class="text-xl font-bold text-gray-900 mb-4">Resumen</h2>
                            <div class="space-y-4">
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Publicado:</span>
                                    <span class="font-medium text-black">15 de marzo, 2025</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Ubicación:</span>
                                    <span class="font-medium text-black">Remoto (México)</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Tipo:</span>
                                    <span class="font-medium text-black">Tiempo completo</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Salario:</span>
                                    <span class="font-bold text-black">{{ $job->salary }}</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Experiencia:</span>
                                    <span class="font-medium text-black">3+ años</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Aplicaciones:</span>
                                    <span class="font-medium text-black">47 candidatos</span>
                                </div>
                            </div>
                            <div class="mt-6 space-y-4">
                                <div x-data="postularForm()">
                                    <form @submit.prevent="submitForm">
                                        <button type="submit"
                                            class="w-full bg-primary cursor-pointer bg-indigo-700 hover:bg-indigo-800 text-white font-bold py-3 px-4 rounded"
                                            :disabled="submitting">
                                            <span x-show="!submitting">Postularme ahora</span>
                                            <span x-show="submitting" class="flex items-center">
                                                <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24">
                                                    <circle class="opacity-25" cx="12" cy="12" r="10"
                                                        stroke="currentColor" stroke-width="4"></circle>
                                                    <path class="opacity-75" fill="currentColor"
                                                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                                    </path>
                                                </svg>
                                                Enviando tu curriculum...
                                            </span>
                                        </button>
                                    </form>
                                    <!-- Mensaje de envio de curriculum -->
                                    <div x-show="success"
                                        class="mt-6 bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded relative"
                                        role="alert">
                                        <strong class="font-bold">¡Postulación exitosa!</strong>
                                        <span class="block sm:inline">Nos pondremos en contacto contigo pronto.</span>
                                    </div>
                                </div>

                                <button
                                    class="cursor-pointer w-full bg-white border border-primary text-primary hover:bg-indigo-50 font-bold py-3 px-4 rounded flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    Preguntar sobre este empleo
                                </button>

                            </div>
                        </div>
                    </div>

                    <!-- Información de la empresa -->
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden mb-8">
                        <div class="p-6">
                            <h2 class="text-xl font-bold text-gray-900 mb-4">Sobre la empresa</h2>
                            <div class="flex items-center mb-4">
                                <div
                                    class="flex-shrink-0 h-16 w-16 bg-gray-100 rounded-md flex items-center justify-center">
                                    <svg class="h-10 w-10 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                    </svg>
                                </div>
                                <div class="ml-4">
                                    <h3 class="text-lg font-semibold text-gray-900">{{ $job->employer->name }}</h3>
                                    <p class="text-gray-600">Tecnología • 50-200 empleados</p>
                                </div>
                            </div>
                            <p class="text-gray-600 mb-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, nisi? Voluptatem
                                corrupti harum sunt vel in odit libero optio pariatur, mollitia repellat? Soluta, facere
                                consectetur? Quidem voluptates expedita soluta nobis!
                            </p>
                            <div class="flex items-center space-x-4">
                                <a href="#" class="text-primary hover:text-indigo-700">
                                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                                <a href="#" class="text-primary hover:text-indigo-700">
                                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                                <a href="#" class="text-primary hover:text-indigo-700">
                                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path
                                            d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                                    </svg>
                                </a>
                                <a href="#" class="text-primary hover:text-indigo-700">
                                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </div>
                            <a href="#" class="block mt-4 text-primary hover:text-indigo-700 font-medium">
                                Ver perfil completo →
                            </a>
                        </div>
                    </div>

                    <!-- Empleos similares -->
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                        <div class="p-6">
                            <h2 class="text-xl font-bold text-gray-900 mb-4">Empleos similares</h2>
                            <div class="space-y-4">
                                <a href="#"
                                    class="block p-4 border border-gray-200 rounded-lg hover:border-primary hover:bg-gray-50">
                                    <h3 class="font-semibold text-gray-900">Desarrollador Frontend Senior</h3>
                                    <p class="text-gray-600 text-sm">InnovateTech • Remoto</p>
                                    <div class="mt-2 flex justify-between items-center">
                                        <span class="text-sm text-primary font-medium">$65,000 - $85,000</span>
                                        <span class="text-xs text-gray-500">Hace 2 días</span>
                                    </div>
                                </a>
                                <a href="#"
                                    class="block p-4 border border-gray-200 rounded-lg hover:border-primary hover:bg-gray-50">
                                    <h3 class="font-semibold text-gray-900">Desarrollador React</h3>
                                    <p class="text-gray-600 text-sm">WebSolutions • Ciudad de México</p>
                                    <div class="mt-2 flex justify-between items-center">
                                        <span class="text-sm text-primary font-medium">$45,000 - $60,000</span>
                                        <span class="text-xs text-gray-500">Hace 5 días</span>
                                    </div>
                                </a>
                                <a href="#"
                                    class="block p-4 border border-gray-200 rounded-lg hover:border-primary hover:bg-gray-50">
                                    <h3 class="font-semibold text-gray-900">Desarrollador Frontend/UX</h3>
                                    <p class="text-gray-600 text-sm">DesignStudio • Remoto</p>
                                    <div class="mt-2 flex justify-between items-center">
                                        <span class="text-sm text-primary font-medium">$55,000 - $75,000</span>
                                        <span class="text-xs text-gray-500">Hace 1 semana</span>
                                    </div>
                                </a>
                            </div>
                            <a href="#"
                                class="block mt-4 text-center text-primary hover:text-indigo-700 font-medium">
                                Ver más empleos similares
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <x-footer></x-footer>
    <script>
        function postularForm() {
            return {
                success:false,
                submitting: false,
                submitForm() {
                    this.submitting = true;
                    setTimeout(() => {
                        this.submitting = false;
                        this.success = true;

                        // Ocultar mensaje de éxito después de 5 segundos
                        setTimeout(() => {
                            this.success = false;
                        }, 5000);
                    }, 2000);
                }
            }
        }
    </script>

</x-layout>
