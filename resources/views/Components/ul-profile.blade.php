<ul class="hidden items-center gap-4 sm:flex ">
    <!-- User Pic -->
    <li x-data="{ userDropDownIsOpen: false, openWithKeyboard: false }"
        x-on:keydown.esc.window="userDropDownIsOpen = false, openWithKeyboard = false"
        class="relative flex items-center">
        <button x-on:click="userDropDownIsOpen = ! userDropDownIsOpen"
            x-bind:aria-expanded="userDropDownIsOpen"
            x-on:keydown.space.prevent="openWithKeyboard = true"
            x-on:keydown.enter.prevent="openWithKeyboard = true"
            x-on:keydown.down.prevent="openWithKeyboard = true"
            class="rounded-full focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black dark:focus-visible:outline-white"
            aria-controls="userMenu">
            <img src="https://penguinui.s3.amazonaws.com/component-assets/avatar-8.webp"
                alt="User Profile" class="size-10 rounded-full object-cover" />
        </button>
        <!-- User Dropdown -->
        <ul  x-cloak x-show="userDropDownIsOpen || openWithKeyboard" x-transition.opacity
            x-trap="openWithKeyboard"
            x-on:click.outside="userDropDownIsOpen = false, openWithKeyboard = false"
            x-on:keydown.down.prevent="$focus.wrap().next()"
            x-on:keydown.up.prevent="$focus.wrap().previous()" id="userMenu"
            class="z-10 absolute right-0 top-12 flex w-fit min-w-48 flex-col overflow-hidden rounded-sm border border-neutral-300 bg-neutral-50 py-1.5 ">
            <li class="border-b border-neutral-300 ">
                <div class="flex flex-col px-4 py-2">
                    <span class="text-sm font-medium text-neutral-900 ">{{ Auth::user()->first_name." ".Auth::user()->last_name}}</span>
                    <p class="text-xs text-neutral-600 ">
                        {{ Auth::user()->email }}</p>
                </div>
            </li>
            <li><a href="/"
                    class="block bg-neutral-50 px-4 py-2 text-sm text-neutral-600 hover:bg-neutral-900/5 hover:text-neutral-900 focus-visible:bg-neutral-900/10 focus-visible:text-neutral-900 focus-visible:outline-hidden ">Inicio</a>
            </li>
            <li><a href="/perfil"
                    class="block bg-neutral-50 px-4 py-2 text-sm text-neutral-600 hover:bg-neutral-900/5 hover:text-neutral-900 focus-visible:bg-neutral-900/10 focus-visible:text-neutral-900 focus-visible:outline-hidden ">Mi Perfil</a>
            </li>
            <li>
                <a class="block bg-neutral-50 px-4 py-2 text-sm text-neutral-600 hover:bg-neutral-900/5 hover:text-neutral-900 focus-visible:bg-neutral-900/10 focus-visible:text-neutral-900 focus-visible:outline-hidden">
                <form action="/logout" method="POST">
                    @csrf
                <button class="cursor-pointer" type="submit"
                    >Cerrar Sesión</button>
                </form>
                </a>
                </li>

        </ul>
    </li>
</ul>