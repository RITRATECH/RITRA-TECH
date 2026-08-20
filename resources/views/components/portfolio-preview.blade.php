<section
    id="portfolio"
    class="relative py-24 bg-[#050816] overflow-hidden">

    {{-- Background Glow --}}
    <div
        class="absolute
               top-1/4
               -left-40
               h-96
               w-96
               rounded-full
               bg-cyan-400/10
               blur-[120px]
               pointer-events-none">
    </div>

    <div
        class="absolute
               bottom-0
               -right-40
               h-96
               w-96
               rounded-full
               bg-green-400/10
               blur-[120px]
               pointer-events-none">
    </div>


    <div
        class="relative
               mx-auto
               max-w-7xl
               px-6">

        {{-- Header --}}
        <div
            class="mx-auto
                   max-w-3xl
                   text-center
                   fade-up">

            <span
                class="font-mono
                       text-sm
                       uppercase
                       tracking-[0.3em]
                       text-cyan-400">

                Selected Work

            </span>

            <h2
                class="cyber-title
                       mt-4
                       text-3xl
                       font-bold
                       text-white
                       md:text-5xl">

                Featured
                <span class="text-green-400">
                    Projects
                </span>

            </h2>

            <p
                class="mt-6
                       leading-relaxed
                       text-gray-400">

                Beberapa project dan security research yang
                merepresentasikan proses learning, engineering,
                dan problem solving RITRA TECH.

            </p>

        </div>


        {{-- Portfolio Grid --}}
        <div
            class="mt-16
                   grid
                   gap-6
                   md:grid-cols-2
                   lg:grid-cols-3">

            {{-- Project 1 --}}
            <div class="fade-up">

                <x-portfolio-card
                    title="Web Security Assessment"
                    category="Cyber Security"
                    description="Security assessment terhadap aplikasi web untuk mengidentifikasi vulnerability dan meningkatkan security posture."
                    :technologies="[
                        'Laravel',
                        'PHP',
                        'Linux',
                        'Burp Suite'
                    ]"
                    href="/portfolio/web-security-assessment"
                />

            </div>


            {{-- Project 2 --}}
            <div class="fade-up">

                <x-portfolio-card
                    title="Digital Forensics Lab"
                    category="Digital Forensics"
                    description="Eksperimen dan development environment untuk analisis artefak digital dan proses investigasi."
                    :technologies="[
                        'Linux',
                        'Python',
                        'Forensics',
                        'CLI'
                    ]"
                    href="/portfolio/digital-forensics-lab"
                />

            </div>


            {{-- Project 3 --}}
            <div class="fade-up">

                <x-portfolio-card
                    title="Security Automation Toolkit"
                    category="Security Engineering"
                    description="Konsep toolkit automation untuk membantu workflow security testing dan security analysis."
                    :technologies="[
                        'Python',
                        'Linux',
                        'Bash',
                        'Security'
                    ]"
                    href="/portfolio/security-automation-toolkit"
                />

            </div>

        </div>


        {{-- CTA --}}
        <div
            class="mt-14
                   text-center
                   fade-up">

            <a
                href="/portfolio"
                class="inline-flex
                       items-center
                       gap-3
                       rounded-xl
                       border
                       border-cyan-400/30
                       bg-cyan-400/5
                       px-6
                       py-3
                       text-sm
                       font-medium
                       text-cyan-400
                       transition-all
                       duration-300
                       hover:border-cyan-400/60
                       hover:bg-cyan-400/10
                       hover:shadow-[0_0_30px_rgba(34,211,238,0.12)]">

                View All Projects

                <span aria-hidden="true">
                    →
                </span>

            </a>

        </div>

    </div>

</section>