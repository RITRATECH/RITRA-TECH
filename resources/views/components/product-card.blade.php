@props([
    'name',
    'category',
    'description',
    'price',
    'type' => 'Digital Product',
    'badge' => null,
    'image' => null,
    'href' => '#',
])

<article
    class="product-card group relative overflow-hidden rounded-2xl border border-white/10 bg-white/[0.03] backdrop-blur-xl transition-all duration-500 hover:-translate-y-2 hover:border-green-400/30">

    {{-- Product Image --}}
    <div
        class="relative aspect-[4/3] overflow-hidden bg-gradient-to-br from-green-400/10 via-[#050816] to-cyan-400/10">

        @if($image)

            <img
                src="{{ $image }}"
                alt="{{ $name }}"
                loading="lazy"
                class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105">

        @else

            {{-- Product Placeholder --}}
            <div
                class="absolute inset-0 flex items-center justify-center">

                <div class="text-center">

                    <div
                        class="mx-auto flex h-20 w-20 items-center justify-center rounded-2xl border border-green-400/20 bg-green-400/10">

                        <span
                            class="font-mono text-3xl text-green-400">

                            &lt;/&gt;

                        </span>

                    </div>

                    <div
                        class="mt-4 font-mono text-xs uppercase tracking-[0.2em] text-gray-500">

                        DIGITAL PRODUCT

                    </div>

                </div>

            </div>

        @endif


        {{-- Gradient Overlay --}}
        <div
            class="absolute inset-0 bg-gradient-to-t from-[#050816] via-transparent to-transparent opacity-80">
        </div>


        {{-- Category --}}
        <div
            class="absolute left-4 top-4">

            <span
                class="rounded-lg border border-green-400/20 bg-[#050816]/80 px-3 py-1.5 font-mono text-xs text-green-400 backdrop-blur-md">

                {{ $category }}

            </span>

        </div>


        {{-- Badge --}}
        @if($badge)

            <div
                class="absolute right-4 top-4">

                <span
                    class="rounded-lg border border-cyan-400/20 bg-cyan-400/10 px-3 py-1.5 text-xs font-semibold text-cyan-400 backdrop-blur-md">

                    {{ $badge }}

                </span>

            </div>

        @endif

    </div>


    {{-- Product Content --}}
    <div class="p-6">

        {{-- Product Type --}}
        <div
            class="font-mono text-xs uppercase tracking-[0.18em] text-gray-500">

            {{ $type }}

        </div>


        {{-- Product Name --}}
        <h3
            class="mt-3 text-xl font-semibold text-white transition-colors duration-300 group-hover:text-green-400">

            {{ $name }}

        </h3>


        {{-- Description --}}
        <p
            class="mt-3 line-clamp-3 text-sm leading-6 text-gray-400">

            {{ $description }}

        </p>


        {{-- Price --}}
        <div
            class="mt-6 flex items-end justify-between gap-4">

            <div>

                <div
                    class="text-xs text-gray-500">

                    Price

                </div>

                <div
                    class="mt-1 text-lg font-bold text-white">

                    {{ $price }}

                </div>

            </div>


            {{-- Product Link --}}
            <a
                href="{{ $href }}"
                class="inline-flex items-center gap-2 rounded-lg border border-green-400/20 bg-green-400/5 px-4 py-2.5 text-sm font-medium text-green-400 transition-all duration-300 hover:border-green-400/50 hover:bg-green-400/10">

                View

                <span aria-hidden="true">
                    →
                </span>

            </a>

        </div>

    </div>

</article>