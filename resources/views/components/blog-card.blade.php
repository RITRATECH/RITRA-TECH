@props([
    'title',
    'category',
    'excerpt',
    'date',
    'readTime' => '5 min read',
    'image' => null,
    'href' => '#',
])

<article
    class="blog-card group overflow-hidden rounded-2xl border border-white/10 bg-white/[0.03] backdrop-blur-xl transition-all duration-500 hover:-translate-y-2 hover:border-cyan-400/30">

    {{-- Image --}}
    <div
        class="relative aspect-video overflow-hidden bg-gradient-to-br from-cyan-400/10 via-[#050816] to-green-400/10">

        @if($image)

            <img
                src="{{ $image }}"
                alt="{{ $title }}"
                loading="lazy"
                class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105">

        @else

            <div class="absolute inset-0 flex items-center justify-center">

                <div class="text-center">

                    <div
                        class="mx-auto mb-4 flex h-16 w-16 items-center justify-center rounded-2xl border border-cyan-400/20 bg-cyan-400/10">

                        <span class="font-mono text-2xl text-cyan-400">
                            &lt;/&gt;
                        </span>

                    </div>

                    <span
                        class="font-mono text-xs uppercase tracking-[0.2em] text-gray-500">

                        RITRA TECH

                    </span>

                </div>

            </div>

        @endif

        {{-- Gradient --}}
        <div
            class="absolute inset-0 bg-gradient-to-t from-[#050816] via-transparent to-transparent opacity-80">
        </div>

        {{-- Category --}}
        <div class="absolute left-4 top-4">

            <span
                class="rounded-lg border border-cyan-400/20 bg-[#050816]/80 px-3 py-1.5 font-mono text-xs text-cyan-400 backdrop-blur-md">

                {{ $category }}

            </span>

        </div>

    </div>


    {{-- Content --}}
    <div class="p-6">

        {{-- Meta --}}
        <div
            class="flex items-center gap-3 text-xs text-gray-500">

            <time datetime="{{ $date }}">
                {{ $date }}
            </time>

            <span>
                •
            </span>

            <span>
                {{ $readTime }}
            </span>

        </div>


        {{-- Title --}}
        <h3
            class="mt-4 text-xl font-semibold leading-snug text-white transition-colors duration-300 group-hover:text-cyan-400">

            {{ $title }}

        </h3>


        {{-- Excerpt --}}
        <p
            class="mt-3 line-clamp-3 text-sm leading-6 text-gray-400">

            {{ $excerpt }}

        </p>


        {{-- Read --}}
        <a
            href="{{ $href }}"
            class="mt-6 inline-flex items-center gap-2 text-sm font-medium text-cyan-400 transition-all duration-300 group-hover:gap-3">

            Read Article

            <span aria-hidden="true">
                →
            </span>

        </a>

    </div>

</article>