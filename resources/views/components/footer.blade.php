<footer
    class="relative overflow-hidden border-t border-white/10 bg-[#03050d]">

    {{-- Glow --}}
    <div
        class="pointer-events-none absolute left-1/2 top-0 h-72 w-72 -translate-x-1/2 rounded-full bg-cyan-400/5 blur-[100px]">
    </div>


    <div
        class="relative mx-auto max-w-7xl px-6 py-16">

        <div
            class="grid gap-10 md:grid-cols-2 lg:grid-cols-4">


            {{-- Brand --}}
            <div>

                <a
                    href="/"
                    class="inline-flex">

                    @include('components.logo')

                </a>

                <p
                    class="mt-5 max-w-sm text-sm leading-7 text-gray-500">

                    RITRA TECH adalah platform personal
                    yang berfokus pada cyber security,
                    technology, digital products, dan knowledge sharing.

                </p>

            </div>


            {{-- Navigation --}}
            <div>

                <h3
                    class="text-sm font-semibold uppercase tracking-wider text-white">

                    Navigation

                </h3>

                <div
                    class="mt-5 flex flex-col gap-3">

                    <a
                        href="#about"
                        class="footer-link">

                        About

                    </a>

                    <a
                        href="#services"
                        class="footer-link">

                        Services

                    </a>

                    <a
                        href="#portfolio"
                        class="footer-link">

                        Portfolio

                    </a>

                    <a
                        href="#blog"
                        class="footer-link">

                        Blog

                    </a>

                </div>

            </div>


            {{-- Resources --}}
            <div>

                <h3
                    class="text-sm font-semibold uppercase tracking-wider text-white">

                    Resources

                </h3>

                <div
                    class="mt-5 flex flex-col gap-3">

                    <a
                        href="#marketplace"
                        class="footer-link">

                        Marketplace

                    </a>

                    <a
                        href="#skills"
                        class="footer-link">

                        Skills

                    </a>

                    <a
                        href="#contact"
                        class="footer-link">

                        Contact

                    </a>

                    <a
                        href="/login"
                        class="footer-link">

                        Login

                    </a>

                </div>

            </div>


            {{-- Connect --}}
            <div>

                <h3
                    class="text-sm font-semibold uppercase tracking-wider text-white">

                    Connect

                </h3>

                <p
                    class="mt-5 text-sm leading-6 text-gray-500">

                    Follow RITRA TECH untuk update
                    project, security research, dan teknologi.

                </p>


                <div
                    class="mt-5 flex gap-3">

                    <a
                        href="#"
                        aria-label="GitHub"
                        class="footer-social">

                        GH

                    </a>

                    <a
                        href="#"
                        aria-label="LinkedIn"
                        class="footer-social">

                        in

                    </a>

                    <a
                        href="#"
                        aria-label="Instagram"
                        class="footer-social">

                        IG

                    </a>

                </div>

            </div>

        </div>


        {{-- Bottom --}}
        <div
            class="mt-14 flex flex-col gap-4 border-t border-white/10 pt-8 text-xs text-gray-600 md:flex-row md:items-center md:justify-between">

            <p>

                © {{ date('Y') }} RITRA TECH.
                All rights reserved.

            </p>

            <div
                class="flex gap-5">

                <a
                    href="#"
                    class="footer-link">

                    Privacy Policy

                </a>

                <a
                    href="#"
                    class="footer-link">

                    Terms

                </a>

            </div>

        </div>

    </div>

</footer>