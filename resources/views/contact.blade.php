<x-layout>
    <x-slot:heading>
        Contact page
    </x-slot>
      <!-- Contenido principal -->
      <main class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Formulario de contacto -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="p-8" x-data="contactForm()">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">Envíenos un mensaje</h2>
                        <form @submit.prevent="submitForm">
                            <div class="space-y-6">
                                <!-- Nombre -->
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700">Nombre completo <span class="text-red-500">*</span></label>
                                    <div class="mt-1">
                                        <input 
                                            type="text" 
                                            id="name" 
                                            name="name" 
                                            x-model="form.name"
                                            class="shadow-sm focus:ring-primary focus:border-primary block w-full sm:text-sm border-gray-300 rounded-md p-3 border"
                                            :class="{'border-red-500': errors.name}"
                                        >
                                        <p x-show="errors.name" x-text="errors.name" class="mt-1 text-sm text-red-600"></p>
                                    </div>
                                </div>

                                <!-- Email -->
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700">Correo electrónico <span class="text-red-500">*</span></label>
                                    <div class="mt-1">
                                        <input 
                                            type="email" 
                                            id="email" 
                                            name="email" 
                                            x-model="form.email"
                                            class="shadow-sm focus:ring-primary focus:border-primary block w-full sm:text-sm border-gray-300 rounded-md p-3 border"
                                            :class="{'border-red-500': errors.email}"
                                        >
                                        <p x-show="errors.email" x-text="errors.email" class="mt-1 text-sm text-red-600"></p>
                                    </div>
                                </div>

                                <!-- Teléfono -->
                                <div>
                                    <label for="phone" class="block text-sm font-medium text-gray-700">Teléfono</label>
                                    <div class="mt-1">
                                        <input 
                                            type="tel" 
                                            id="phone" 
                                            name="phone" 
                                            x-model="form.phone"
                                            class="shadow-sm focus:ring-primary focus:border-primary block w-full sm:text-sm border-gray-300 rounded-md p-3 border"
                                        >
                                    </div>
                                </div>

                                <!-- Asunto -->
                                <div>
                                    <label for="subject" class="block text-sm font-medium text-gray-700">Asunto <span class="text-red-500">*</span></label>
                                    <div class="mt-1">
                                        <input 
                                            type="text" 
                                            id="subject" 
                                            name="subject" 
                                            x-model="form.subject"
                                            class="shadow-sm focus:ring-primary focus:border-primary block w-full sm:text-sm border-gray-300 rounded-md p-3 border"
                                            :class="{'border-red-500': errors.subject}"
                                        >
                                        <p x-show="errors.subject" x-text="errors.subject" class="mt-1 text-sm text-red-600"></p>
                                    </div>
                                </div>

                                <!-- Mensaje -->
                                <div>
                                    <label for="message" class="block text-sm font-medium text-gray-700">Mensaje <span class="text-red-500">*</span></label>
                                    <div class="mt-1">
                                        <textarea 
                                            id="message" 
                                            name="message" 
                                            rows="5" 
                                            x-model="form.message"
                                            class="shadow-sm focus:ring-primary focus:border-primary block w-full sm:text-sm border-gray-300 rounded-md p-3 border"
                                            :class="{'border-red-500': errors.message}"
                                        ></textarea>
                                        <p x-show="errors.message" x-text="errors.message" class="mt-1 text-sm text-red-600"></p>
                                    </div>
                                </div>

                                <!-- Tipo de consulta -->
                                <div>
                                    <label for="inquiry_type" class="block text-sm font-medium text-gray-700">Tipo de consulta</label>
                                    <div class="mt-1">
                                        <select 
                                            id="inquiry_type" 
                                            name="inquiry_type" 
                                            x-model="form.inquiry_type"
                                            class="shadow-sm focus:ring-primary focus:border-primary block w-full sm:text-sm border-gray-300 rounded-md p-3 border"
                                        >
                                            <option value="">Seleccione una opción</option>
                                            <option value="general">Consulta general</option>
                                            <option value="support">Soporte técnico</option>
                                            <option value="billing">Facturación</option>
                                            <option value="partnership">Asociación</option>
                                            <option value="other">Otro</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Términos y condiciones -->
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input 
                                            id="terms" 
                                            name="terms" 
                                            type="checkbox" 
                                            x-model="form.terms"
                                            class="focus:ring-primary h-4 w-4 text-primary border-gray-300 rounded"
                                            :class="{'border-red-500': errors.terms}"
                                        >
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="terms" class="font-medium text-gray-700">Acepto los <a href="#" class="text-primary hover:text-indigo-800">términos y condiciones</a> <span class="text-red-500">*</span></label>
                                        <p x-show="errors.terms" x-text="errors.terms" class="mt-1 text-sm text-red-600"></p>
                                    </div>
                                </div>

                                <!-- Botón de envío -->
                                <div>
                                    <button 
                                        type="submit" 
                                        class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-primary hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary"
                                        :disabled="submitting"
                                    >
                                        <span x-show="!submitting">Enviar mensaje</span>
                                        <span x-show="submitting" class="flex items-center">
                                            <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                            </svg>
                                            Enviando...
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </form>

                        <!-- Mensaje de éxito -->
                        <div x-show="success" class="mt-6 bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded relative" role="alert">
                            <strong class="font-bold">¡Mensaje enviado!</strong>
                            <span class="block sm:inline">Nos pondremos en contacto contigo pronto.</span>
                        </div>
                    </div>
                </div>

                <!-- Información de contacto -->
                <div class="space-y-8">
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                        <div class="p-8">
                            <h2 class="text-2xl font-bold text-gray-900 mb-6">Información de contacto</h2>
                            <div class="space-y-6">
                                <div class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <svg class="h-6 w-6 text-primary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <h3 class="text-lg font-medium text-gray-900">Teléfono</h3>
                                        <p class="mt-1 text-gray-600">+52 55 1234 5678</p>
                                        <p class="mt-1 text-gray-600">Lunes a Viernes, 9:00 AM - 6:00 PM</p>
                                    </div>
                                </div>

                                <div class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <svg class="h-6 w-6 text-primary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <h3 class="text-lg font-medium text-gray-900">Correo electrónico</h3>
                                        <p class="mt-1 text-gray-600">info@portalempleos.com</p>
                                        <p class="mt-1 text-gray-600">soporte@portalempleos.com</p>
                                    </div>
                                </div>

                                <div class="flex items-start">
                                    <div class="flex-shrink-0">
                                        <svg class="h-6 w-6 text-primary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                    </div>
                                    <div class="ml-3">
                                        <h3 class="text-lg font-medium text-gray-900">Dirección</h3>
                                        <p class="mt-1 text-gray-600">Av. Insurgentes Sur 1602</p>
                                        <p class="mt-1 text-gray-600">Col. Crédito Constructor, Benito Juárez</p>
                                        <p class="mt-1 text-gray-600">Ciudad de México, CP 03940</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Mapa -->
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                        <div class="p-8">
                            <h2 class="text-2xl font-bold text-gray-900 mb-6">Nuestra ubicación</h2>
                            <div class="aspect-w-16 aspect-h-9 bg-gray-200 rounded-lg">
                                <!-- Aquí iría un mapa real, por ahora un placeholder -->
                                <div class="w-full h-64 bg-gray-200 flex items-center justify-center">
                                    <svg class="h-12 w-12 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Horario de atención -->
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                        <div class="p-8">
                            <h2 class="text-2xl font-bold text-gray-900 mb-6">Horario de atención</h2>
                            <div class="space-y-3">
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Lunes - Viernes</span>
                                    <span class="font-medium">9:00 AM - 6:00 PM</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Sábado</span>
                                    <span class="font-medium">10:00 AM - 2:00 PM</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Domingo</span>
                                    <span class="font-medium">Cerrado</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Preguntas frecuentes -->
            <div class="mt-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Preguntas frecuentes</h2>
                <div class="max-w-3xl mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="divide-y divide-gray-200" x-data="{active: null}">
                        <!-- Pregunta 1 -->
                        <div class="p-6">
                            <button 
                                @click="active !== 1 ? active = 1 : active = null" 
                                class="flex justify-between items-center w-full text-left"
                            >
                                <span class="text-lg font-medium text-gray-900">¿Cómo puedo publicar una oferta de empleo?</span>
                                <svg 
                                    class="h-5 w-5 text-primary" 
                                    :class="{'transform rotate-180': active === 1}"
                                    xmlns="http://www.w3.org/2000/svg" 
                                    viewBox="0 0 20 20" 
                                    fill="currentColor"
                                >
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <div x-show="active === 1" class="mt-4 text-gray-600">
                                <p>Para publicar una oferta de empleo, debe registrarse como empleador y crear una cuenta. Una vez que haya iniciado sesión, puede hacer clic en el botón "Publicar Empleo" en su panel de control y seguir las instrucciones para completar el formulario de publicación.</p>
                            </div>
                        </div>

                        <!-- Pregunta 2 -->
                        <div class="p-6">
                            <button 
                                @click="active !== 2 ? active = 2 : active = null" 
                                class="flex justify-between items-center w-full text-left"
                            >
                                <span class="text-lg font-medium text-gray-900">¿Cuánto cuesta publicar un empleo?</span>
                                <svg 
                                    class="h-5 w-5 text-primary" 
                                    :class="{'transform rotate-180': active === 2}"
                                    xmlns="http://www.w3.org/2000/svg" 
                                    viewBox="0 0 20 20" 
                                    fill="currentColor"
                                >
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <div x-show="active === 2" class="mt-4 text-gray-600">
                                <p>Ofrecemos diferentes planes de precios según sus necesidades. Puede publicar un empleo básico por $99, o elegir nuestros planes Premium o Destacado para obtener mayor visibilidad. Visite nuestra página de precios para más detalles.</p>
                            </div>
                        </div>

                        <!-- Pregunta 3 -->
                        <div class="p-6">
                            <button 
                                @click="active !== 3 ? active = 3 : active = null" 
                                class="flex justify-between items-center w-full text-left"
                            >
                                <span class="text-lg font-medium text-gray-900">¿Cómo puedo actualizar mi currículum?</span>
                                <svg 
                                    class="h-5 w-5 text-primary" 
                                    :class="{'transform rotate-180': active === 3}"
                                    xmlns="http://www.w3.org/2000/svg" 
                                    viewBox="0 0 20 20" 
                                    fill="currentColor"
                                >
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <div x-show="active === 3" class="mt-4 text-gray-600">
                                <p>Para actualizar su currículum, inicie sesión en su cuenta, vaya a su perfil y haga clic en la sección "Mi CV". Allí podrá editar su información, agregar nuevas experiencias laborales, habilidades o formación académica.</p>
                            </div>
                        </div>

                        <!-- Pregunta 4 -->
                        <div class="p-6">
                            <button 
                                @click="active !== 4 ? active = 4 : active = null" 
                                class="flex justify-between items-center w-full text-left"
                            >
                                <span class="text-lg font-medium text-gray-900">¿Cómo puedo cancelar mi suscripción?</span>
                                <svg 
                                    class="h-5 w-5 text-primary" 
                                    :class="{'transform rotate-180': active === 4}"
                                    xmlns="http://www.w3.org/2000/svg" 
                                    viewBox="0 0 20 20" 
                                    fill="currentColor"
                                >
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <div x-show="active === 4" class="mt-4 text-gray-600">
                                <p>Para cancelar su suscripción, inicie sesión en su cuenta, vaya a "Configuración" y seleccione "Suscripción". Allí encontrará la opción para cancelar. Si tiene algún problema, no dude en contactar a nuestro equipo de soporte.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

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

    <!-- Alpine.js Script para el formulario -->
    <script>
        function contactForm() {
            return {
                form: {
                    name: '',
                    email: '',
                    phone: '',
                    subject: '',
                    message: '',
                    inquiry_type: '',
                    terms: false
                },
                errors: {},
                submitting: false,
                success: false,
                validateForm() {
                    this.errors = {};
                    
                    if (!this.form.name) {
                        this.errors.name = 'El nombre es obligatorio';
                    }
                    
                    if (!this.form.email) {
                        this.errors.email = 'El correo electrónico es obligatorio';
                    } else if (!/^\S+@\S+\.\S+$/.test(this.form.email)) {
                        this.errors.email = 'El correo electrónico no es válido';
                    }
                    
                    if (!this.form.subject) {
                        this.errors.subject = 'El asunto es obligatorio';
                    }
                    
                    if (!this.form.message) {
                        this.errors.message = 'El mensaje es obligatorio';
                    }
                    
                    if (!this.form.terms) {
                        this.errors.terms = 'Debes aceptar los términos y condiciones';
                    }
                    
                    return Object.keys(this.errors).length === 0;
                },
                submitForm() {
                    if (this.validateForm()) {
                        this.submitting = true;
                        
                        // Simulación de envío de formulario
                        setTimeout(() => {
                            this.submitting = false;
                            this.success = true;
                            this.form = {
                                name: '',
                                email: '',
                                phone: '',
                                subject: '',
                                message: '',
                                inquiry_type: '',
                                terms: false
                            };
                            
                            // Ocultar mensaje de éxito después de 5 segundos
                            setTimeout(() => {
                                this.success = false;
                            }, 5000);
                        }, 2000);
                    }
                }
            }
        }
    </script>
</x-layout>
