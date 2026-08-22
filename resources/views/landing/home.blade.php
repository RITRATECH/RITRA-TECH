@extends('layouts.guest')

@section('title', 'RITRA TECH — Cyber Security Solutions')

@section('content')

<section
    id="hero"
    class="relative min-h-screen overflow-hidden bg-[#050816] flex items-center">

    {{-- Cyber Grid --}}
    <div class="cyber-grid absolute inset-0"></div>

    {{-- Neon Glow --}}
    <div
        class="absolute -top-40 -left-40 w-96 h-96
               bg-cyan-400/20 blur-[120px] rounded-full">
    </div>

    <div
        class="absolute -bottom-40 -right-40 w-96 h-96
               bg-green-400/10 blur-[120px] rounded-full">
    </div>

    {{-- Particles --}}
    <div
        id="particles-js"
        class="absolute inset-0 pointer-events-none">
    </div>

    {{-- Content --}}
    <div
        class="relative z-10 max-w-7xl mx-auto
               px-6 pt-32 pb-20 w-full">

        <div
            class="grid lg:grid-cols-2
                   gap-12 items-center">

            {{-- LEFT --}}
            <div class="fade-up">

                <div
                    class="inline-flex items-center gap-2
                           px-4 py-2 mb-6
                           rounded-full
                           border border-cyan-400/30
                           bg-cyan-400/5
                           text-cyan-400
                           text-sm">

                    <span
                        class="w-2 h-2 rounded-full
                               bg-green-400
                               animate-pulse">
                    </span>

                    Cyber Security & Technology

                </div>

                <h1
                    class="cyber-title
                           text-4xl md:text-6xl
                           lg:text-7xl
                           font-bold
                           leading-tight
                           text-white">

                    Securing The
                    <span
                        class="text-cyan-400">
                        Digital
                    </span>

                    <br>

                    <span
                        class="text-green-400">
                        Future.
                    </span>

                </h1>

                <p
                    class="mt-6
                           text-gray-400
                           text-lg
                           max-w-xl
                           leading-relaxed">

                    RITRA TECH menghadirkan solusi teknologi
                    dan cyber security untuk membantu organisasi
                    menghadapi ancaman digital modern.

                </p>

                {{-- Typing --}}
                <div
                    class="mt-6
                           text-xl
                           font-mono
                           text-gray-300">

                    We specialize in

                    <span
                        id="typed-text"
                        class="text-cyan-400">
                    </span>

                </div>

                {{-- CTA --}}
                <div
                    class="flex flex-wrap
                           gap-4 mt-8">

                    <a
                        href="#portfolio"
                        class="px-7 py-3
                               rounded-xl
                               bg-cyan-400
                               text-black
                               font-semibold
                               hover:bg-cyan-300
                               hover:shadow-[0_0_30px_rgba(34,211,238,0.5)]
                               transition-all duration-300">

                        Explore Portfolio

                    </a>

                    <a
                        href="#contact"
                        class="px-7 py-3
                               rounded-xl
                               border border-cyan-400/40
                               text-cyan-400
                               hover:bg-cyan-400/10
                               transition-all duration-300">

                        Contact Me

                    </a>

                </div>

            </div>

            {{-- RIGHT --}}
            <div
                class="relative hidden lg:flex
                       justify-center
                       fade-up">

                <div
                    class="relative
                           w-[420px]
                           h-[420px]">

                    {{-- Outer Ring --}}
                    <div
                        class="absolute inset-0
                               rounded-full
                               border border-cyan-400/20
                               animate-[spin_20s_linear_infinite]">
                    </div>

                    {{-- Middle Ring --}}
                    <div
                        class="absolute inset-10
                               rounded-full
                               border border-green-400/20
                               animate-[spin_15s_linear_infinite_reverse]">
                    </div>

                    {{-- Core --}}
                    <div
                        class="absolute inset-24
                               rounded-full
                               bg-cyan-400/5
                               border border-cyan-400/30
                               backdrop-blur-xl
                               flex items-center justify-center
                               shadow-[0_0_80px_rgba(34,211,238,0.2)]">

                        <div class="text-center">

                            <div
                                class="text-6xl
                                       font-black
                                       text-cyan-400
                                       cyber-title">

                                RT

                            </div>

                            <div
                                class="mt-2
                                       text-xs
                                       tracking-[0.3em]
                                       text-green-400">

                                CYBER TECH

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        {{-- Stats --}}
        <div
            class="grid grid-cols-2 md:grid-cols-4
                   gap-4 mt-20">

            <div
                class="glass rounded-xl p-5
                       text-center">

                <div
                    class="text-2xl
                           font-bold
                           text-cyan-400">

                    10+

                </div>

                <div
                    class="text-sm
                           text-gray-400">

                    Projects

                </div>

            </div>

            <div
                class="glass rounded-xl p-5
                       text-center">

                <div
                    class="text-2xl
                           font-bold
                           text-green-400">

                    5+

                </div>

                <div
                    class="text-sm
                           text-gray-400">

                    Security Domains

                </div>

            </div>

            <div
                class="glass rounded-xl p-5
                       text-center">

                <div
                    class="text-2xl
                           font-bold
                           text-cyan-400">

                    24/7

                </div>

                <div
                    class="text-sm
                           text-gray-400">

                    Learning

                </div>

            </div>

            <div
                class="glass rounded-xl p-5
                       text-center">

                <div
                    class="text-2xl
                           font-bold
                           text-green-400">

                    100%

                </div>

                <div
                    class="text-sm
                           text-gray-400">

                    Passion

                </div>

            </div>

        </div>

    </div>

</section>
@include('components.about')
@include('components.services')
@include('components.skills')
@include('components.portfolio-preview')
@include('components.blog-preview')
@endsection