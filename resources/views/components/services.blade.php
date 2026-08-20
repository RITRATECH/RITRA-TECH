<section
    id="services"
    class="relative
           py-24
           bg-[#050816]
           overflow-hidden">

    {{-- Background Glow --}}
    <div
        class="absolute
               top-1/3
               -left-40
               w-96 h-96
               bg-cyan-400/10
               blur-[120px]
               rounded-full
               pointer-events-none">
    </div>

    <div
        class="absolute
               bottom-0
               -right-40
               w-96 h-96
               bg-green-400/10
               blur-[120px]
               rounded-full
               pointer-events-none">
    </div>


    <div
        class="relative
               max-w-7xl
               mx-auto
               px-6">

        {{-- Header --}}
        <div
            class="max-w-3xl
                   mx-auto
                   text-center
                   fade-up">

            <span
                class="text-sm
                       uppercase
                       tracking-[0.3em]
                       text-cyan-400
                       font-mono">

                What We Do

            </span>

            <h2
                class="cyber-title
                       mt-4
                       text-3xl
                       md:text-5xl
                       font-bold
                       text-white">

                Cyber Security
                <span class="text-cyan-400">
                    Services
                </span>

            </h2>

            <p
                class="mt-6
                       text-gray-400
                       leading-relaxed">

                Solusi teknologi dan keamanan digital untuk
                membantu melindungi sistem, data, aplikasi,
                dan infrastruktur dari berbagai ancaman cyber.

            </p>

        </div>


        {{-- Services Grid --}}
        <div
            class="grid
                   sm:grid-cols-2
                   lg:grid-cols-3
                   gap-6
                   mt-16">

            {{-- 1 --}}
            <div class="fade-up">

                <x-service-card
                    icon="🛡️"
                    title="Cyber Security"
                    description="Membangun dan meningkatkan security posture untuk aplikasi, sistem, dan infrastruktur digital."
                />

            </div>


            {{-- 2 --}}
            <div class="fade-up">

                <x-service-card
                    icon="⌁"
                    title="Penetration Testing"
                    description="Security assessment untuk menemukan vulnerability dan membantu meningkatkan keamanan aplikasi."
                />

            </div>


            {{-- 3 --}}
            <div class="fade-up">

                <x-service-card
                    icon="🔎"
                    title="Digital Forensics"
                    description="Analisis artefak digital untuk membantu proses investigasi dan memahami aktivitas pada sistem."
                />

            </div>


            {{-- 4 --}}
            <div class="fade-up">

                <x-service-card
                    icon="◈"
                    title="Security Research"
                    description="Research terhadap vulnerability, teknologi keamanan, threat landscape, dan teknik pertahanan."
                />

            </div>


            {{-- 5 --}}
            <div class="fade-up">

                <x-service-card
                    icon="AI"
                    title="AI & Security"
                    description="Eksplorasi artificial intelligence untuk automation, security analysis, dan intelligent security tooling."
                />

            </div>


            {{-- 6 --}}
            <div class="fade-up">

                <x-service-card
                    icon=">_"
                    title="Security Engineering"
                    description="Pengembangan tools dan sistem yang memperhatikan aspek security, reliability, dan maintainability."
                />

            </div>

        </div>


        {{-- Bottom CTA --}}
        <div
            class="mt-16
                   text-center
                   fade-up">

            <p
                class="text-gray-500
                       text-sm">

                Need a custom security solution?

            </p>

            <a
                href="#contact"
                class="inline-flex
                       items-center
                       gap-2
                       mt-4
                       px-6
                       py-3
                       rounded-xl
                       border
                       border-cyan-400/30
                       text-cyan-400
                       hover:bg-cyan-400/10
                       hover:border-cyan-400/60
                       transition-all duration-300">

                Let's Work Together

                <span>→</span>

            </a>

        </div>

    </div>

</section>