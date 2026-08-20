<section
    id="skills"
    class="relative py-24 bg-[#050816] overflow-hidden">

    {{-- Background Glow --}}
    <div
        class="absolute
               top-20
               -right-40
               w-96 h-96
               rounded-full
               bg-cyan-400/10
               blur-[120px]
               pointer-events-none">
    </div>

    <div
        class="absolute
               bottom-20
               -left-40
               w-96 h-96
               rounded-full
               bg-green-400/10
               blur-[120px]
               pointer-events-none">
    </div>


    <div
        class="relative
               max-w-7xl
               mx-auto
               px-6">

        {{-- Section Header --}}
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

                Skills & Technologies

            </span>

            <h2
                class="cyber-title
                       mt-4
                       text-3xl
                       md:text-5xl
                       font-bold
                       text-white">

                Tools Behind
                <span class="text-green-400">
                    RITRA TECH
                </span>

            </h2>

            <p
                class="mt-6
                       text-gray-400
                       leading-relaxed">

                Teknologi dan area yang menjadi bagian dari
                proses learning, research, development,
                dan security engineering.

            </p>

        </div>


        {{-- Security Domains --}}
        <div class="mt-16">

            <div
                class="flex items-center gap-4 mb-8 fade-up">

                <div
                    class="h-px flex-1 bg-white/10">
                </div>

                <h3
                    class="text-sm
                           uppercase
                           tracking-[0.25em]
                           text-gray-400
                           font-mono">

                    Security Domains

                </h3>

                <div
                    class="h-px flex-1 bg-white/10">
                </div>

            </div>


            <div
                class="grid
                       grid-cols-2
                       md:grid-cols-3
                       lg:grid-cols-4
                       gap-4">

                {{-- Cyber Security --}}
                <div class="fade-up">

                    <div
                        class="skill-card
                               group
                               glass
                               rounded-xl
                               p-5
                               border
                               border-cyan-400/10
                               hover:border-cyan-400/40
                               transition-all duration-300">

                        <div
                            class="text-2xl
                                   text-cyan-400">

                            🛡️

                        </div>

                        <h4
                            class="mt-4
                                   text-white
                                   font-semibold
                                   group-hover:text-cyan-400
                                   transition-colors">

                            Cyber Security

                        </h4>

                        <p
                            class="mt-2
                                   text-xs
                                   text-gray-500">

                            Security fundamentals

                        </p>

                    </div>

                </div>


                {{-- Pentest --}}
                <div class="fade-up">

                    <div
                        class="skill-card
                               group
                               glass
                               rounded-xl
                               p-5
                               border
                               border-cyan-400/10
                               hover:border-cyan-400/40
                               transition-all duration-300">

                        <div
                            class="text-2xl
                                   text-cyan-400">

                            ◈

                        </div>

                        <h4
                            class="mt-4
                                   text-white
                                   font-semibold
                                   group-hover:text-cyan-400
                                   transition-colors">

                            Penetration Testing

                        </h4>

                        <p
                            class="mt-2
                                   text-xs
                                   text-gray-500">

                            Web & application security

                        </p>

                    </div>

                </div>


                {{-- Forensics --}}
                <div class="fade-up">

                    <div
                        class="skill-card
                               group
                               glass
                               rounded-xl
                               p-5
                               border
                               border-green-400/10
                               hover:border-green-400/40
                               transition-all duration-300">

                        <div
                            class="text-2xl
                                   text-green-400">

                            🔎

                        </div>

                        <h4
                            class="mt-4
                                   text-white
                                   font-semibold
                                   group-hover:text-green-400
                                   transition-colors">

                            Digital Forensics

                        </h4>

                        <p
                            class="mt-2
                                   text-xs
                                   text-gray-500">

                            Digital investigation

                        </p>

                    </div>

                </div>


                {{-- Security Research --}}
                <div class="fade-up">

                    <div
                        class="skill-card
                               group
                               glass
                               rounded-xl
                               p-5
                               border
                               border-green-400/10
                               hover:border-green-400/40
                               transition-all duration-300">

                        <div
                            class="text-2xl
                                   text-green-400">

                            ⚡

                        </div>

                        <h4
                            class="mt-4
                                   text-white
                                   font-semibold
                                   group-hover:text-green-400
                                   transition-colors">

                            Security Research

                        </h4>

                        <p
                            class="mt-2
                                   text-xs
                                   text-gray-500">

                            Vulnerability research

                        </p>

                    </div>

                </div>

            </div>

        </div>


        {{-- Technologies --}}
        <div class="mt-20">

            <div
                class="flex items-center gap-4 mb-8 fade-up">

                <div
                    class="h-px flex-1 bg-white/10">
                </div>

                <h3
                    class="text-sm
                           uppercase
                           tracking-[0.25em]
                           text-gray-400
                           font-mono">

                    Technologies

                </h3>

                <div
                    class="h-px flex-1 bg-white/10">
                </div>

            </div>


            <div
                class="flex
                       flex-wrap
                       justify-center
                       gap-3
                       fade-up">

                @foreach([
                    'Linux',
                    'Ubuntu',
                    'BackBox',
                    'Kali Linux',
                    'PHP',
                    'Laravel',
                    'Python',
                    'JavaScript',
                    'MariaDB',
                    'MySQL',
                    'Git',
                    'GitHub',
                    'Apache',
                    'Docker',
                    'REST API',
                    'Tailwind CSS',
                    'AI / Machine Learning',
                    'Internet of Things'
                ] as $technology)

                    <span
                        class="px-4
                               py-2
                               rounded-lg
                               border
                               border-white/10
                               bg-white/[0.03]
                               text-sm
                               text-gray-300
                               hover:text-cyan-400
                               hover:border-cyan-400/30
                               hover:bg-cyan-400/5
                               transition-all duration-300">

                        {{ $technology }}

                    </span>

                @endforeach

            </div>

        </div>


        {{-- Security Philosophy --}}
        <div
            class="mt-20
                   fade-up">

            <div
                class="glass
                       rounded-2xl
                       p-8
                       md:p-10
                       border
                       border-cyan-400/10
                       text-center">

                <div
                    class="text-xs
                           uppercase
                           tracking-[0.3em]
                           text-cyan-400
                           font-mono">

                    Security Philosophy

                </div>

                <blockquote
                    class="mt-5
                           text-xl
                           md:text-2xl
                           text-white
                           font-medium">

                    "Build secure.
                    Think critically.
                    Keep learning."

                </blockquote>

                <p
                    class="mt-4
                           text-sm
                           text-gray-500">

                    Security is a continuous process,
                    not a one-time feature.

                </p>

            </div>

        </div>

    </div>

</section>