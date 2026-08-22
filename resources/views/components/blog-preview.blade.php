<section
    id="blog"
    class="relative overflow-hidden bg-[#050816] py-24">

    {{-- Background Glow --}}
    <div
        class="pointer-events-none absolute -right-40 top-1/4 h-96 w-96 rounded-full bg-cyan-400/10 blur-[120px]">
    </div>

    <div
        class="pointer-events-none absolute -left-40 bottom-0 h-96 w-96 rounded-full bg-green-400/10 blur-[120px]">
    </div>


    <div class="relative mx-auto max-w-7xl px-6">

        {{-- Header --}}
        <div
            class="mx-auto max-w-3xl text-center fade-up">

            <span
                class="font-mono text-sm uppercase tracking-[0.3em] text-cyan-400">

                Knowledge Base

            </span>

            <h2
                class="cyber-title mt-4 text-3xl font-bold text-white md:text-5xl">

                Latest
                <span class="text-green-400">
                    Articles
                </span>

            </h2>

            <p
                class="mt-6 leading-relaxed text-gray-400">

                Insight, research, tutorial, dan pembahasan
                seputar cyber security, Linux, artificial intelligence,
                dan teknologi.

            </p>

        </div>


        {{-- Blog Grid --}}
        <div
            class="mt-16 grid gap-6 md:grid-cols-2 lg:grid-cols-3">

            {{-- Article 1 --}}
            <div class="fade-up">

                <x-blog-card
                    title="Understanding Modern Web Security"
                    category="Cyber Security"
                    date="Coming Soon"
                    read-time="5 min read"
                    excerpt="Pembahasan fundamental mengenai keamanan aplikasi web modern dan pendekatan security testing."
                    href="/blog/understanding-modern-web-security"
                />

            </div>


            {{-- Article 2 --}}
            <div class="fade-up">

                <x-blog-card
                    title="Linux Security for Beginners"
                    category="Linux"
                    date="Coming Soon"
                    read-time="7 min read"
                    excerpt="Mengenal fundamental Linux security, permission, process, service, dan hardening."
                    href="/blog/linux-security-for-beginners"
                />

            </div>


            {{-- Article 3 --}}
            <div class="fade-up">

                <x-blog-card
                    title="AI and Cyber Security"
                    category="AI Security"
                    date="Coming Soon"
                    read-time="6 min read"
                    excerpt="Eksplorasi bagaimana artificial intelligence dapat digunakan untuk meningkatkan security operations."
                    href="/blog/ai-and-cyber-security"
                />

            </div>

        </div>


        {{-- CTA --}}
        <div
            class="mt-14 text-center fade-up">

            <a
                href="/blog"
                class="inline-flex items-center gap-3 rounded-xl border border-cyan-400/30 bg-cyan-400/5 px-6 py-3 text-sm font-medium text-cyan-400 transition-all duration-300 hover:border-cyan-400/60 hover:bg-cyan-400/10 hover:shadow-[0_0_30px_rgba(34,211,238,0.12)]">

                View All Articles

                <span aria-hidden="true">
                    →
                </span>

            </a>

        </div>

    </div>

</section>