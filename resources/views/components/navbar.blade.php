<nav
    id="navbar"
    x-data="{ mobileMenuOpen: false }"
    @keydown.escape.window="mobileMenuOpen = false"
    class="fixed top-0 left-0 w-full z-50 transition-all duration-500">

    <div class="max-w-7xl mx-auto px-6">

        <div class="flex items-center justify-between h-20">

            {{-- Logo --}}
            <a
                href="/"
                class="relative z-[60] flex items-center gap-3">

                @include('components.logo')

            </a>


            {{-- Desktop Menu --}}
            <div
                class="hidden lg:flex items-center gap-8">

                <a
                    href="#about"
                    class="text-white hover:text-cyan-400 transition">

                    About

                </a>

                <a
                    href="#services"
                    class="text-white hover:text-cyan-400 transition">

                    Services

                </a>

                <a
                    href="#skills"
                    class="text-white hover:text-cyan-400 transition">

                    Skills

                </a>

                <a
                    href="#portfolio"
                    class="text-white hover:text-cyan-400 transition">

                    Portfolio

                </a>

                <a
                    href="#blog"
                    class="text-white hover:text-cyan-400 transition">

                    Blog

                </a>

                <a
                    href="#marketplace"
                    class="text-white hover:text-cyan-400 transition">

                    Marketplace

                </a>

                <a
                    href="#testimonials"
                    class="text-white hover:text-cyan-400 transition">

                    Testimonials

                </a>
                
                <a
                    href="#contact"
                    class="text-white hover:text-cyan-400 transition">

                    Contact

                </a>

            </div>


            {{-- Desktop Login --}}
            <div
                class="hidden lg:flex">

                <a
                    href="{{ route('login') }}"
                    class="px-5 py-2
                           rounded-lg
                           bg-cyan-500
                           hover:bg-cyan-400
                           text-black
                           font-semibold
                           transition">

                    Login

                </a>

            </div>


            {{-- Mobile Button --}}
            <button
                type="button"
                @click="mobileMenuOpen = true"
                :aria-expanded="mobileMenuOpen.toString()"
                aria-controls="mobile-menu"
                aria-label="Open navigation menu"
                class="lg:hidden
                       relative
                       z-[60]
                       flex
                       items-center
                       justify-center
                       w-10
                       h-10
                       rounded-lg
                       border
                       border-white/10
                       bg-white/5
                       text-white
                       hover:text-cyan-400
                       hover:border-cyan-400/40
                       transition">

                {{-- Hamburger --}}
                <svg
                    x-show="!mobileMenuOpen"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.8"
                    stroke="currentColor"
                    class="w-6 h-6">

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>

                </svg>


                {{-- Close --}}
                <svg
                    x-show="mobileMenuOpen"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.8"
                    stroke="currentColor"
                    class="w-6 h-6">

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M6 18 18 6M6 6l12 12"/>

                </svg>

            </button>

        </div>

    </div>


    {{-- ================================================= --}}
    {{-- MOBILE OVERLAY --}}
    {{-- ================================================= --}}

    <div
        x-show="mobileMenuOpen"
        x-transition:enter="transition-opacity duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition-opacity duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        @click="mobileMenuOpen = false"
        class="fixed
               inset-0
               z-40
               bg-black/60
               backdrop-blur-sm
               lg:hidden">

    </div>


    {{-- ================================================= --}}
    {{-- MOBILE SIDE MENU --}}
    {{-- ================================================= --}}

    <aside
    id="mobile-menu"
    x-show="mobileMenuOpen"
    x-cloak
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="translate-x-full"
    x-transition:enter-end="translate-x-0"
    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="translate-x-0"
    x-transition:leave-end="translate-x-full"
    class="fixed
           inset-y-0
           right-0
           z-[100]
           h-screen
           w-[280px]
           max-w-[82vw]
           border-l
           border-cyan-400/10
           bg-[#050816]/95
           backdrop-blur-2xl
           shadow-[-20px_0_60px_rgba(0,0,0,0.45)]
           lg:hidden">

    <div class="flex h-full flex-col p-6">

        {{-- Header --}}
        <div
            class="flex items-center justify-between
                   pb-6
                   border-b border-white/10">

            <div>

                <div
                    class="text-xs
                           uppercase
                           tracking-[0.25em]
                           text-gray-500
                           font-mono">

                    Navigation

                </div>

                <div
                    class="mt-1
                           text-sm
                           font-semibold
                           text-cyan-400">

                    RITRA TECH

                </div>

            </div>


            {{-- CLOSE BUTTON --}}
            <button
                type="button"
                @click.stop="mobileMenuOpen = false"
                aria-label="Close navigation menu"
                class="relative
                       z-[110]
                       flex
                       h-10
                       w-10
                       cursor-pointer
                       items-center
                       justify-center
                       rounded-lg
                       border
                       border-white/10
                       bg-white/5
                       text-gray-300
                       transition
                       hover:border-cyan-400/40
                       hover:text-cyan-400">

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.8"
                    stroke="currentColor"
                    class="h-5 w-5
                           pointer-events-none">

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M6 18 18 6M6 6l12 12"/>

                </svg>

            </button>

        </div>


        {{-- LINKS --}}
        <div class="mt-8 flex flex-col gap-2">

            <a
                href="#about"
                @click="mobileMenuOpen = false"
                class="mobile-nav-link">

                About

            </a>

            <a
                href="#services"
                @click="mobileMenuOpen = false"
                class="mobile-nav-link">

                Services

            </a>

            <a
                href="#skills"
                @click="mobileMenuOpen = false"
                class="mobile-nav-link">

                Skills

            </a>

            <a
                href="#portfolio"
                @click="mobileMenuOpen = false"
                class="mobile-nav-link">

                Portfolio

            </a>

            <a
                href="#blog"
                @click="mobileMenuOpen = false"
                class="mobile-nav-link">

                Blog

            </a>

            <a
                href="#marketplace"
                @click="mobileMenuOpen = false"
                class="mobile-nav-link">

                Marketplace

            </a>

            <a
                href="#testimonials"
                @click="mobileMenuOpen = false"
                class="mobile-nav-link">

                Testimonials

            </a>

            <a
                href="#contact"
                @click="mobileMenuOpen = false"
                class="mobile-nav-link">

                Contact

            </a>

        </div>


        {{-- LOGIN --}}
        <div
            class="mt-auto
                   border-t
                   border-white/10
                   pt-6">

            <a
                href="{{ route('login') }}"
                class="flex
                       w-full
                       items-center
                       justify-center
                       rounded-xl
                       bg-cyan-500
                       px-5
                       py-3
                       font-semibold
                       text-black
                       transition
                       hover:bg-cyan-400">

                Login

            </a>

        </div>

    </div>

</aside>

</nav>