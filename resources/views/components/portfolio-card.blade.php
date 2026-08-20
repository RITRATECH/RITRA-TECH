@props([
    'title',
    'category',
    'description',
    'image' => null,
    'technologies' => [],
    'href' => '#',
])

<article
    class="portfolio-card group relative overflow-hidden rounded-2xl
           border border-white/10
           bg-white/[0.03]
           backdrop-blur-xl
           transition-all duration-500
           hover:-translate-y-2
           hover:border-cyan-400/30">

    {{-- Project Image / Placeholder --}}
    <div
        class="relative aspect-video overflow-hidden
               bg-gradient-to-br
               from-cyan-400/10
               via-[#050816]
               to-green-400/10">

        @if($image)

            <img
                src="{{ $image }}"
                alt="{{ $title }}"
                loading="lazy"
                class="h-full w-full object-cover
                       transition-transform duration-700
                       group-hover:scale-105">

        @else

            {{-- Cyber Placeholder --}}
            <div
                class="absolute inset-0
                       flex items-center justify-center">

                <div
                    class="text-center">

                    <div
                        class="mx-auto mb-4
                               h-16 w-16
                               rounded-2xl
                               border
                               border-cyan-400/20
                               bg-cyan-400/10
                               flex items-center justify-center">

                        <span
                            class="text-2xl text-cyan-400">

                            &lt;/&gt;

                        </span>

                    </div>

                    <div
                        class="text-xs
                               font-mono
                               uppercase
                               tracking-[0.2em]
                               text-gray-500">

                        RITRA TECH

                    </div>

                </div>

            </div>

        @endif


        {{-- Image Overlay --}}
        <div
            class="absolute inset-0
                   bg-gradient-to-t
                   from-[#050816]
                   via-transparent
                   to-transparent
                   opacity-80">
        </div>


        {{-- Category --}}
        <div
            class="absolute
                   top-4
                   left-4">

            <span
                class="rounded-lg
                       border
                       border-cyan-400/20
                       bg-[#050816]/80
                       px-3
                       py-1.5
                       text-xs
                       font-mono
                       text-cyan-400
                       backdrop-blur-md">

                {{ $category }}

            </span>

        </div>

    </div>


    {{-- Content --}}
    <div class="p-6">

        <h3
            class="text-xl
                   font-semibold
                   text-white
                   transition-colors
                   duration-300
                   group-hover:text-cyan-400">

            {{ $title }}

        </h3>


        <p
            class="mt-3
                   text-sm
                   leading-6
                   text-gray-400">

            {{ $description }}

        </p>


        {{-- Technologies --}}
        @if(count($technologies))

            <div
                class="mt-5
                       flex
                       flex-wrap
                       gap-2">

                @foreach($technologies as $technology)

                    <span
                        class="rounded-md
                               border
                               border-white/10
                               bg-white/[0.03]
                               px-2.5
                               py-1
                               text-xs
                               text-gray-400">

                        {{ $technology }}

                    </span>

                @endforeach

            </div>

        @endif


        {{-- Detail Link --}}
        <a
            href="{{ $href }}"
            class="mt-6
                   inline-flex
                   items-center
                   gap-2
                   text-sm
                   font-medium
                   text-cyan-400
                   transition-all
                   duration-300
                   group-hover:gap-3">

            View Project

            <span aria-hidden="true">
                →
            </span>

        </a>

    </div>

</article>