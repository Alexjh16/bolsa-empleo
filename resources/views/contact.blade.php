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
                                            class="shadow-sm focus:ring-primary text-base text-gray-900 focus:border-primary block w-full sm:text-sm border-gray-300 rounded-md p-3 border"
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
                                            class="shadow-sm focus:ring-primary text-base text-gray-900 focus:border-primary block w-full sm:text-sm border-gray-300 rounded-md p-3 border"
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
                                            class="shadow-sm focus:ring-primary text-base text-gray-900 focus:border-primary block w-full sm:text-sm border-gray-300 rounded-md p-3 border"
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
                                            class="shadow-sm focus:ring-primary text-base text-gray-900 focus:border-primary block w-full sm:text-sm border-gray-300 rounded-md p-3 border"
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
                                            class="shadow-sm focus:ring-primary  text-base text-gray-900 focus:border-primary block w-full sm:text-sm border-gray-300 rounded-md p-3 border"
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
                                            class="shadow-sm focus:ring-primary text-base text-gray-900 focus:border-primary block w-full sm:text-sm border-gray-300 rounded-md p-3 border"
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
                                        class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700  cursor-pointer focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary"
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
                                    <span class="text-gray-900">Lunes - Viernes</span>
                                    <span class="text-gray-600 font-medium">9:00 AM - 6:00 PM</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-900">Sábado</span>
                                    <span class="text-gray-600 font-medium">10:00 AM - 2:00 PM</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-900">Domingo</span>
                                    <span class="text-gray-600 font-medium">Cerrado</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Preguntas frecuentes -->
            <div  class="mt-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Preguntas frecuentes</h2>
                <div class="max-w-3xl mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="divide-y  divide-gray-200" x-data="{active: null}">
                        <!-- Pregunta 1 -->
                        <div class=" p-6 ">
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

    <x-footer></x-footer>

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
