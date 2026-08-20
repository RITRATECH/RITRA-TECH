<nav
    id="navbar"
    class="fixed top-0 left-0 w-full z-50 transition-all duration-500">

    <div
        class="max-w-7xl mx-auto px-6">

        <div
            class="flex items-center justify-between h-20">

            {{-- Logo --}}
            <a href="/"
               class="flex items-center gap-3">

                @include('components.logo')

            </a>

            {{-- Desktop Menu --}}
            <div
                class="hidden lg:flex items-center gap-8">

                <a href="#about"
                   class="text-white hover:text-cyan-400 transition">
                    About
                </a>

                <a href="#services"
                   class="text-white hover:text-cyan-400 transition">
                    Services
                </a>
                <a
                    href="#skills"
                    class="text-white hover:text-cyan-400 transition">

                    Skills

                </a>
                <a href="#portfolio"
                   class="text-white hover:text-cyan-400 transition">
                    Portfolio
                </a>

                <a href="#blog"
                   class="text-white hover:text-cyan-400 transition">
                    Blog
                </a>

                <a href="#marketplace"
                   class="text-white hover:text-cyan-400 transition">
                    Marketplace
                </a>

                <a href="#contact"
                   class="text-white hover:text-cyan-400 transition">
                    Contact
                </a>

            </div>

            {{-- Login Button --}}
            <div
                class="hidden lg:flex">

                <a
                    href="{{ route('login') }}"
                    class="px-5 py-2 rounded-lg bg-cyan-500 hover:bg-cyan-400 text-black font-semibold">

                    Login

                </a>

            </div>

            {{-- Mobile Button --}}
            <button
                id="menu-button"
                class="lg:hidden text-white">

                ☰

            </button>

        </div>

    </div>

</nav>