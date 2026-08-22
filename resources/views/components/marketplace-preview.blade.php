<section
    id="marketplace"
    class="relative overflow-hidden bg-[#050816] py-24">

    {{-- Background Glow --}}
    <div
        class="pointer-events-none absolute -left-40 top-1/4 h-96 w-96 rounded-full bg-green-400/10 blur-[120px]">
    </div>

    <div
        class="pointer-events-none absolute -right-40 bottom-0 h-96 w-96 rounded-full bg-cyan-400/10 blur-[120px]">
    </div>


    <div class="relative mx-auto max-w-7xl px-6">

        {{-- Header --}}
        <div
            class="mx-auto max-w-3xl text-center fade-up">

            <span
                class="font-mono text-sm uppercase tracking-[0.3em] text-green-400">

                Digital Store

            </span>

            <h2
                class="cyber-title mt-4 text-3xl font-bold text-white md:text-5xl">

                RITRA TECH
                <span class="text-cyan-400">
                    Marketplace
                </span>

            </h2>

            <p
                class="mt-6 leading-relaxed text-gray-400">

                Koleksi digital resources untuk developer,
                security enthusiast, dan praktisi cyber security.

            </p>

        </div>


        {{-- Products --}}
        <div
            class="mt-16 grid gap-6 md:grid-cols-2 lg:grid-cols-3">

            {{-- Product 1 --}}
            <div class="fade-up">

                <x-product-card
                    name="Web Security Cheat Sheet"
                    category="Cyber Security"
                    type="Cheat Sheet"
                    price="Rp 49.000"
                    badge="Popular"
                    description="Cheat sheet praktis untuk membantu security testing aplikasi web secara sistematis."
                    href="/marketplace/web-security-cheat-sheet"
                />

            </div>


            {{-- Product 2 --}}
            <div class="fade-up">

                <x-product-card
                    name="Linux Security Guide"
                    category="Linux"
                    type="Ebook"
                    price="Rp 79.000"
                    badge="New"
                    description="Panduan fundamental Linux security, hardening, permissions, networking, dan monitoring."
                    href="/marketplace/linux-security-guide"
                />

            </div>


            {{-- Product 3 --}}
            <div class="fade-up">

                <x-product-card
                    name="Security Automation Toolkit"
                    category="Security Tools"
                    type="Source Code"
                    price="Rp 99.000"
                    description="Toolkit automation yang dirancang untuk membantu workflow security testing dan analysis."
                    href="/marketplace/security-automation-toolkit"
                />

            </div>

        </div>


        {{-- CTA --}}
        <div
            class="mt-14 text-center fade-up">

            <a
                href="/marketplace"
                class="inline-flex items-center gap-3 rounded-xl border border-green-400/30 bg-green-400/5 px-6 py-3 text-sm font-medium text-green-400 transition-all duration-300 hover:border-green-400/60 hover:bg-green-400/10 hover:shadow-[0_0_30px_rgba(74,222,128,0.12)]">

                Visit Marketplace

                <span aria-hidden="true">
                    →
                </span>

            </a>

        </div>

    </div>

</section>