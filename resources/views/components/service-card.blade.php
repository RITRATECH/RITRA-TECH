@props([
    'icon' => '🛡',
    'title',
    'description',
    'color' => 'cyan',
])

<div
    class="service-card group relative h-full
           rounded-2xl
           border border-white/10
           bg-white/[0.03]
           backdrop-blur-xl
           p-7
           overflow-hidden
           transition-all duration-500
           hover:-translate-y-2
           hover:border-cyan-400/30
           hover:bg-white/[0.06]">

    {{-- Glow --}}
    <div
        class="absolute
               -top-20
               -right-20
               w-40 h-40
               rounded-full
               bg-cyan-400/10
               blur-[70px]
               opacity-0
               group-hover:opacity-100
               transition-opacity duration-500">
    </div>

    {{-- Icon --}}
    <div
        class="relative
               w-14 h-14
               rounded-xl
               border border-cyan-400/20
               bg-cyan-400/10
               flex items-center justify-center
               text-2xl
               group-hover:scale-110
               group-hover:border-cyan-400/50
               transition-all duration-500">

        {{ $icon }}

    </div>

    {{-- Content --}}
    <div class="relative mt-6">

        <h3
            class="text-xl
                   font-semibold
                   text-white
                   group-hover:text-cyan-400
                   transition-colors duration-300">

            {{ $title }}

        </h3>

        <p
            class="mt-4
                   text-sm
                   leading-7
                   text-gray-400">

            {{ $description }}

        </p>

    </div>

    {{-- Bottom Line --}}
    <div
        class="absolute
               bottom-0
               left-0
               h-[2px]
               w-0
               bg-gradient-to-r
               from-cyan-400
               to-green-400
               group-hover:w-full
               transition-all duration-500">
    </div>

</div>