<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SayLess - Digital Experiences</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="js/script.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="antialiased">
    <canvas id="glCanvas"></canvas>

    <!-- Header -->
    <header class="fixed w-full top-0 z-50 glass-nav transition-all duration-300">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <a href="#" class="text-2xl font-bold tracking-tighter">SayLess<span class="text-accent">.</span></a>

            <nav class="hidden md:flex items-center gap-8 text-sm font-medium text-secondary">
                <a href="#projects" class="hover:text-primary transition-colors">Projects</a>
                <a href="#members" class="hover:text-primary transition-colors">Members</a>
                <a href="#insight" class="hover:text-primary transition-colors">Insight</a>
                <a href="#contacts" class="hover:text-primary transition-colors">Contact</a>
            </nav>

            <a href="#contacts"
                class="hidden md:block px-5 py-2.5 bg-white text-black text-sm font-semibold rounded-full hover:bg-gray-200 transition-colors">
                Let's Talk
            </a>

            <!-- Mobile Menu Button (Placeholder) -->
            <button class="md:hidden text-primary">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center pt-20 overflow-hidden">
        <!-- Background Elements -->
        <div
            class="absolute top-0 left-1/2 -translate-x-1/2 w-[1000px] h-[500px] bg-accent/20 rounded-full blur-[120px] -z-10 opacity-30">
        </div>

        <div class="max-w-5xl mx-auto px-6 text-center">
            <div
                class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/5 border border-white/10 text-xs font-medium text-secondary mb-8">
                <span class="w-2 h-2 rounded-full bg-accent animate-pulse"></span>
                Available for new projects
            </div>

            <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold tracking-tight mb-8">
                We build <br />
                <span class="text-gradient">digital experiences</span>
            </h1>

            <p class="text-lg md:text-xl text-secondary max-w-2xl mx-auto mb-10 leading-relaxed">
                SayLess is a forward-thinking tech company crafting premium websites and applications. We turn complex
                ideas into elegant, high-performance solutions.
            </p>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="#projects"
                    class="px-8 py-4 bg-white text-black font-semibold rounded-full hover:bg-gray-200 transition-colors w-full sm:w-auto">
                    View Our Work
                </a>
                <a href="#contacts"
                    class="px-8 py-4 bg-white/5 border border-white/10 text-white font-semibold rounded-full hover:bg-white/10 transition-colors w-full sm:w-auto">
                    Contact Us
                </a>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-10 left-1/2 -translate-x-1/2 animate-bounce">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6 text-secondary">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            </svg>
        </div>
    </section>

    <!-- Placeholder for other sections -->
    <main>
        <!-- Trusted By Section -->
        <section class="py-20 border-b border-white/5">
            <div class="max-w-7xl mx-auto px-6 text-center">
                <p class="text-sm font-medium text-secondary mb-8 uppercase tracking-widest">Trusted by</p>
                <div
                    class="flex flex-wrap justify-center items-center gap-12 md:gap-20 opacity-50 grayscale hover:grayscale-0 transition-all duration-500">
                    <!-- Placeholder Logos -->
                    <div class="text-2xl font-bold text-white">WMSU</div>
                    <div class="text-2xl font-bold text-white">Research Ethics Office</div>
                    <div class="text-2xl font-bold text-white">Google</div>
                    <div class="text-2xl font-bold text-white">Wadhwani Entrepreneurship</div>
                </div>
            </div>
        </section>

        <!-- Details / About Section -->
        <section class="py-32 relative">
            <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-3xl md:text-5xl font-bold mb-6">We craft digital solutions that <span
                            class="text-accent">scale</span>.</h2>
                    <p class="text-secondary text-lg leading-relaxed mb-8">
                        At SayLess, we believe in the power of simplicity. We strip away the unnecessary to reveal the
                        essential. Our team of expert developers and designers work in unison to deliver products that
                        are not only visually stunning but also robust and scalable.
                    </p>

                    <div class="grid grid-cols-2 gap-8">
                        <div>
                            <h3 class="text-4xl font-bold text-white mb-2">0</h3>
                            <p class="text-sm text-secondary">Projects Completed</p>
                        </div>
                        <div>
                            <h3 class="text-4xl font-bold text-white mb-2">99%</h3>
                            <p class="text-sm text-secondary">Client Satisfaction</p>
                        </div>
                        <div>
                            <h3 class="text-4xl font-bold text-white mb-2">3+</h3>
                            <p class="text-sm text-secondary">Years Experience</p>
                        </div>
                        <div>
                            <h3 class="text-4xl font-bold text-white mb-2">24/7</h3>
                            <p class="text-sm text-secondary">Support</p>
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-tr from-accent/20 to-transparent rounded-2xl blur-2xl">
                    </div>
                    <div
                        class="relative bg-surface border border-white/5 rounded-2xl p-8 hover:border-accent/50 transition-colors duration-300">
                        <div class="flex items-start gap-4 mb-6">
                            <div class="p-3 bg-accent/10 rounded-lg text-accent">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2">Clean Code</h3>
                                <p class="text-secondary text-sm">We write maintainable, efficient, and documented code
                                    that stands the test of time.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 mb-6">
                            <div class="p-3 bg-accent/10 rounded-lg text-accent">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9.53 16.122a3 3 0 00-5.78 1.128 2.25 2.25 0 01-2.4 2.245 4.5 4.5 0 008.4-2.245c0-.399-.077-.78-.22-1.128zm0 0a15.998 15.998 0 003.388-1.62m-5.043-.025a15.994 15.994 0 011.622-3.395m3.42 3.42a15.995 15.995 0 004.764-4.648l3.876-5.814a1.151 1.151 0 00-1.597-1.597L14.85 6.361a15.996 15.996 0 00-4.647 4.761m0 0c-.49.03-.96.098-1.407.196" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2">Modern Design</h3>
                                <p class="text-secondary text-sm">Aesthetics that capture attention and user interfaces
                                    that drive engagement.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="p-3 bg-accent/10 rounded-lg text-accent">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold mb-2">High Performance</h3>
                                <p class="text-secondary text-sm">Optimized for speed and SEO, ensuring your site
                                    performs as good as it looks.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Projects Section -->
        <section id="projects" class="py-32 bg-surface/30">
            <div class="max-w-7xl mx-auto px-6">
                <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6">
                    <div>
                        <h2 class="text-3xl md:text-5xl font-bold mb-4">Selected <span
                                class="text-gradient">Works</span></h2>
                        <p class="text-secondary max-w-md">A showcase of our most recent digital products and
                            experiences.</p>
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Project Card 1: REO -->
                    <a href="#"
                        class="group relative overflow-hidden rounded-2xl bg-surface border border-white/5 hover:border-accent/50 transition-all duration-500 block">
                        <div class="aspect-video bg-zinc-800 overflow-hidden relative">
                            <img src="assets/project_reo.png" alt="Research Ethics Office Portal"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                            <!-- Overlay -->
                            <div
                                class="absolute inset-0 bg-black/20 group-hover:bg-black/0 transition-colors duration-700">
                            </div>
                        </div>
                        <div class="p-8">
                            <div class="flex gap-2 mb-4">
                                <span
                                    class="px-3 py-1 text-xs font-medium bg-white/5 rounded-full text-secondary">Management
                                    System</span>
                                <span class="px-3 py-1 text-xs font-medium bg-white/5 rounded-full text-secondary">Web
                                    App</span>
                            </div>
                            <h3 class="text-2xl font-bold mb-2 group-hover:text-accent transition-colors">Research
                                Ethics Office (REO)</h3>
                            <p class="text-secondary text-sm mb-6">A robust platform designed to streamline the
                                management of researcher proposals and revisions. It facilitates efficient tracking,
                                review processes, and compliance monitoring for academic and clinical research.</p>
                            <span
                                class="inline-flex items-center gap-2 text-sm font-medium text-white group-hover:gap-3 transition-all">
                                View Case Study
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                </svg>
                            </span>
                        </div>
                    </a>

                    <!-- Project Card 2: Under Construction -->
                    <div
                        class="group relative overflow-hidden rounded-2xl bg-surface border border-white/5 opacity-50 hover:opacity-100 transition-all duration-500">
                        <div class="aspect-video bg-zinc-800/50 overflow-hidden flex items-center justify-center">
                            <div class="text-zinc-600 font-bold text-xl">COMING SOON</div>
                        </div>
                        <div class="p-8">
                            <h3 class="text-xl font-bold mb-2 text-secondary">Under Construction</h3>
                            <p class="text-secondary text-sm">More exciting projects are in the works. Stay tuned.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Members Section -->
        <section id="members" class="py-32 relative overflow-hidden">
            <!-- Background Decoration -->
            <div
                class="absolute top-1/2 left-0 -translate-y-1/2 w-[500px] h-[500px] bg-accent/10 rounded-full blur-[100px] -z-10">
            </div>

            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-20">
                    <h2 class="text-3xl md:text-5xl font-bold mb-4">Meet the <span class="text-gradient">Minds</span>
                    </h2>
                    <p class="text-secondary max-w-2xl mx-auto">Our diverse team of experts brings together creativity,
                        technology, and strategy.</p>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-3 gap-8 md:gap-y-16">
                    <!-- Member 1: Alken Valledor -->
                    <div class="text-center group">
                        <div
                            class="w-32 h-32 mx-auto rounded-full bg-zinc-800 mb-6 overflow-hidden border-2 border-transparent group-hover:border-accent transition-colors">
                            <img src="assets/Alken.png" alt="Alken Valledor" class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-lg font-bold text-white">Alken Valledor</h3>
                        <p class="text-sm text-secondary">Lead Programmer</p>
                    </div>

                    <!-- Member 2: Janus Dominic -->
                    <div class="text-center group">
                        <div
                            class="w-32 h-32 mx-auto rounded-full bg-zinc-800 mb-6 overflow-hidden border-2 border-transparent group-hover:border-accent transition-colors">
                            <img src="assets/Janus.png" alt="Janus Dominic" class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-lg font-bold text-white">Janus Dominic</h3>
                        <p class="text-sm text-secondary">Project Manager</p>
                    </div>

                    <!-- Member 3: Nixie Simbajon -->
                    <div class="text-center group">
                        <div
                            class="w-32 h-32 mx-auto rounded-full bg-zinc-800 mb-6 overflow-hidden border-2 border-transparent group-hover:border-accent transition-colors">
                            <img src="assets/Nixie.png" alt="Nixie Simbajon" class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-lg font-bold text-white">Nixie Simbajon</h3>
                        <p class="text-sm text-secondary">Tester</p>
                    </div>

                    <!-- Member 4: Paolo Lorenzo Longcob -->
                    <div class="text-center group">
                        <div
                            class="w-32 h-32 mx-auto rounded-full bg-zinc-800 mb-6 overflow-hidden border-2 border-transparent group-hover:border-accent transition-colors">
                            <img src="assets/Paolo.png" alt="Paolo Lorenzo Longcob" class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-lg font-bold text-white">Paolo Lorenzo Longcob</h3>
                        <p class="text-sm text-secondary">Analyst</p>
                    </div>

                    <!-- Member 5: Winston Tabotabo -->
                    <div class="text-center group">
                        <div
                            class="w-32 h-32 mx-auto rounded-full bg-zinc-800 mb-6 overflow-hidden border-2 border-transparent group-hover:border-accent transition-colors">
                            <img src="assets/Winston.png" alt="Winston Tabotabo" class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-lg font-bold text-white">Winston Tabotabo</h3>
                        <p class="text-sm text-secondary">Assistant Programmer</p>
                    </div>

                    <!-- Member 6: Zain Turabin -->
                    <div class="text-center group">
                        <div
                            class="w-32 h-32 mx-auto rounded-full bg-zinc-800 mb-6 overflow-hidden border-2 border-transparent group-hover:border-accent transition-colors">
                            <img src="assets/Zain.png" alt="Zain Turabin" class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-lg font-bold text-white">Zain Turabin</h3>
                        <p class="text-sm text-secondary">UI/UX Designer</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Insight Section -->
        <section id="insight" class="py-32 bg-surface/30">
            <div class="max-w-7xl mx-auto px-6">
                <div class="flex items-center justify-center mb-16">
                    <h2 class="text-3xl md:text-5xl font-bold">Latest <span class="text-gradient">Insights</span></h2>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Article 1: Academic Focus -->
                    <a href="https://www.infonetica.net/insights/how-the-university-of-bath-used-ethics-rm-to-strengthen-research-integrity-and-streamline-governance"
                        target="_blank" class="group cursor-pointer">
                        <article>
                            <div class="aspect-[4/3] bg-zinc-800 rounded-2xl overflow-hidden mb-6 relative">
                                <img src="assets/blog_academic.png" alt="Abstract academic research visualization"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 opacity-80 group-hover:opacity-100">
                            </div>
                            <div class="flex items-center gap-4 text-xs font-medium text-secondary mb-3">
                                <span>Nov 28, 2024</span>
                                <span class="w-1 h-1 rounded-full bg-zinc-600"></span>
                                <span>Case Study</span>
                            </div>
                            <h3 class="text-xl font-bold mb-3 group-hover:text-accent transition-colors">Modernizing
                                Academic Research Systems</h3>
                            <p class="text-secondary text-sm line-clamp-2">How we streamlined the Research Ethics Office
                                workflow for WMSU, reducing approval times by 60%.</p>
                        </article>
                    </a>

                    <!-- Article 2: Design Philosophy -->
                    <a href="https://medium.com/@ayeshabed18/the-philosophy-of-minimalism-a-journey-to-the-depths-of-aesthetics-and-ethics-in-less-is-more-bc4ad0bc6aa5"
                        target="_blank" class="group cursor-pointer">
                        <article>
                            <div class="aspect-[4/3] bg-zinc-800 rounded-2xl overflow-hidden mb-6 relative">
                                <img src="assets/blog_minimal.png" alt="Minimalist dark UI interface"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 opacity-80 group-hover:opacity-100">
                            </div>
                            <div class="flex items-center gap-4 text-xs font-medium text-secondary mb-3">
                                <span>Oct 20, 2024</span>
                                <span class="w-1 h-1 rounded-full bg-zinc-600"></span>
                                <span>Design</span>
                            </div>
                            <h3 class="text-xl font-bold mb-3 group-hover:text-accent transition-colors">The Power of
                                Minimalism in UI</h3>
                            <p class="text-secondary text-sm line-clamp-2">Why "SayLess" isn't just our name—it's a
                                design philosophy. Stripping away the noise to focus on signal.</p>
                        </article>
                    </a>

                    <!-- Article 3: Tech Stack -->
                    <a href="https://subcodevss.medium.com/a-complete-guide-to-scaling-web-applications-c4979583681b"
                        target="_blank" class="group cursor-pointer">
                        <article>
                            <div class="aspect-[4/3] bg-zinc-800 rounded-2xl overflow-hidden mb-6 relative">
                                <img src="assets/blog_performance.png" alt="High performance code visualization"
                                    class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 opacity-80 group-hover:opacity-100">
                            </div>
                            <div class="flex items-center gap-4 text-xs font-medium text-secondary mb-3">
                                <span>Oct 16, 2024</span>
                                <span class="w-1 h-1 rounded-full bg-zinc-600"></span>
                                <span>Engineering</span>
                            </div>
                            <h3 class="text-xl font-bold mb-3 group-hover:text-accent transition-colors">Optimizing
                                Large-Scale Web Apps</h3>
                            <p class="text-secondary text-sm line-clamp-2">Techniques we use to ensure high performance
                                and scalability in institutional management systems.</p>
                        </article>
                    </a>
                </div>
            </div>
        </section>

        <!-- Feedback Section -->
        <section class="py-32 relative">
            <div class="max-w-5xl mx-auto px-6 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    class="w-12 h-12 text-accent mx-auto mb-8 opacity-50" viewBox="0 0 24 24">
                    <path
                        d="M14.017 21L14.017 18C14.017 16.8954 13.1216 16 12.017 16H9C9.00001 15 9.00001 14 9.00001 13C9.00001 11.8954 9.89544 11 11.0001 11H14.017C15.1216 11 16.017 10.1046 16.017 9V6C16.017 4.89543 15.1216 4 14.017 4H11.0001C9.89544 4 9.00001 4.89543 9.00001 6H6C4.89543 6 4 6.89543 4 8V13C4 16.866 7.13401 20 11.0001 20H14.017V21ZM21.017 21L21.017 18C21.017 16.8954 20.1216 16 19.017 16H16C16 15 16 14 16 13C16 11.8954 16.8954 11 18.0001 11H21.017C22.1216 11 23.017 10.1046 23.017 9V6C23.017 4.89543 22.1216 4 21.017 4H18.0001C16.8954 4 16 4.89543 16 6H13C11.8954 6 11 6.89543 11 8V13C11 16.866 14.134 20 18.0001 20H21.017V21Z" />
                </svg>

                <blockquote class="text-2xl md:text-4xl font-medium leading-relaxed mb-10">
                    "We don't just build systems; we craft experiences. Our team is driven by a passion for simplicity
                    and a relentless pursuit of perfection in every line of code."
                </blockquote>

                <div class="flex items-center justify-center gap-4">
                    <div class="w-12 h-12 rounded-full bg-zinc-700 overflow-hidden">
                        <img src="assets/MiniJanus.png" alt="Janus Dominic" class="w-full h-full object-cover">
                    </div>
                    <div class="text-left">
                        <div class="font-bold text-white">Janus Dominic</div>
                        <div class="text-sm text-secondary">Project Manager</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contacts Section -->
        <section id="contacts" class="py-32 bg-surface/30">
            <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16">
                <div>
                    <h2 class="text-3xl md:text-5xl font-bold mb-6">Let's start a <br /><span
                            class="text-gradient">conversation</span>.</h2>
                    <p class="text-secondary text-lg mb-12">
                        Have a project in mind? We'd love to hear about it. Send us a message and we'll get
                        back to you
                        within 24 hours.
                    </p>

                    <div class="space-y-8">
                        <div class="flex items-start gap-4">
                            <div class="p-3 bg-white/5 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-accent">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-white mb-1">Email Us</h3>
                                <p class="text-secondary">hello@sayless.tech</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="p-3 bg-white/5 rounded-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-accent">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-white mb-1">Visit Us</h3>
                                <p class="text-secondary">123 Innovation Dr, Tech City, TC 90210</p>
                            </div>
                        </div>
                    </div>
                </div>

                <form class="space-y-6 bg-surface p-8 rounded-2xl border border-white/5">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label for="name" class="text-sm font-medium text-secondary">Name</label>
                            <input type="text" id="name"
                                class="w-full bg-background border border-white/10 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-accent transition-colors"
                                placeholder="John Doe">
                        </div>
                        <div class="space-y-2">
                            <label for="email" class="text-sm font-medium text-secondary">Email</label>
                            <input type="email" id="email"
                                class="w-full bg-background border border-white/10 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-accent transition-colors"
                                placeholder="john@example.com">
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label for="subject" class="text-sm font-medium text-secondary">Subject</label>
                        <select id="subject"
                            class="w-full bg-background border border-white/10 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-accent transition-colors">
                            <option>General Inquiry</option>
                            <option>Project Proposal</option>
                            <option>Careers</option>
                        </select>
                    </div>

                    <div class="space-y-2">
                        <label for="message" class="text-sm font-medium text-secondary">Message</label>
                        <textarea id="message" rows="4"
                            class="w-full bg-background border border-white/10 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-accent transition-colors"
                            placeholder="Tell us about your project..."></textarea>
                    </div>

                    <button type="submit"
                        class="w-full bg-white text-black font-bold py-4 rounded-lg hover:bg-gray-200 transition-colors">
                        Send Message
                    </button>
                </form>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-black border-t border-white/10 pt-20 pb-10">
            <div class="max-w-7xl mx-auto px-6">
                <div class="grid md:grid-cols-3 gap-12 mb-16">
                    <div class="col-span-1 md:col-span-1">
                        <a href="#" class="text-2xl font-bold tracking-tighter mb-6 block">SayLess<span
                                class="text-accent">.</span></a>
                        <p class="text-secondary text-sm leading-relaxed">
                            Crafting digital experiences that matter. We build the future of the web, one
                            pixel at a
                            time.
                        </p>
                    </div>

                    <div>
                        <h4 class="font-bold text-white mb-6">Company</h4>
                        <ul class="space-y-4 text-sm text-secondary">
                            <li><a href="#members" class="hover:text-white transition-colors">About Us</a></li>
                            <li><a href="#" class="hover:text-white transition-colors">Careers</a></li>
                            <li><a href="#" class="hover:text-white transition-colors">Press</a></li>
                            <li><a href="#contacts" class="hover:text-white transition-colors">Contact</a></li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="font-bold text-white mb-6">Social</h4>
                        <ul class="space-y-4 text-sm text-secondary">
                            <li><a href="#" class="hover:text-white transition-colors">Twitter</a></li>
                            <li><a href="#" class="hover:text-white transition-colors">LinkedIn</a></li>
                            <li><a href="#" class="hover:text-white transition-colors">Instagram</a></li>
                            <li><a href="#" class="hover:text-white transition-colors">GitHub</a></li>
                        </ul>
                    </div>
                </div>

                <div class="border-t border-white/5 pt-8 flex flex-col md:flex-row items-center justify-between gap-4">
                    <p class="text-xs text-secondary">&copy; 2024 SayLess Inc. All rights reserved.</p>
                    <div class="flex gap-6 text-xs text-secondary">
                        <a href="privacy.php" class="group relative hover:text-white transition-colors duration-300">
                            Privacy Policy
                            <span
                                class="absolute -bottom-1 left-0 w-0 h-px bg-accent transition-all duration-300 group-hover:w-full"></span>
                        </a>
                        <a href="terms.php" class="group relative hover:text-white transition-colors duration-300">
                            Terms of Service
                            <span
                                class="absolute -bottom-1 left-0 w-0 h-px bg-accent transition-all duration-300 group-hover:w-full"></span>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </main>

</body>

</html>