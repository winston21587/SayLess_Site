<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy - SayLess</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="js/script.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="antialiased bg-black text-white selection:bg-accent selection:text-white relative overflow-x-hidden">
    <div class="fixed inset-0 -z-50">
        <canvas id="glCanvas" class="w-full h-full"></canvas>
    </div>

    <!-- Header -->
    <header
        class="fixed w-full top-0 z-50 glass-nav transition-all duration-300 border-b border-white/5 bg-black/50 backdrop-blur-xl">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <a href="index.php" class="text-2xl font-bold tracking-tighter">SayLess<span
                    class="text-accent">.</span></a>
            <a href="index.php"
                class="group flex items-center gap-2 text-sm font-medium text-secondary hover:text-white transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-4 h-4 group-hover:-translate-x-1 transition-transform">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>
                Back to Home
            </a>
        </div>
    </header>

    <!-- Background Elements -->
    <div
        class="fixed top-0 left-1/2 -translate-x-1/2 w-[800px] h-[500px] bg-accent/20 rounded-full blur-[120px] -z-10 pointer-events-none">
    </div>
    <div
        class="fixed bottom-0 right-0 w-[600px] h-[600px] bg-indigo-900/10 rounded-full blur-[100px] -z-10 pointer-events-none">
    </div>

    <main class="pt-32 pb-20 relative z-0">
        <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-[300px_1fr] gap-16">

            <!-- Sticky Sidebar (Table of Contents) -->
            <aside class="hidden lg:block">
                <div class="sticky top-32 space-y-8">
                    <div>
                        <h3 class="text-xs font-bold uppercase tracking-widest text-secondary mb-4">On this page</h3>
                        <nav class="flex flex-col gap-3 text-sm border-l border-white/10 pl-4">
                            <a href="#intro"
                                class="text-white font-medium border-l-2 border-accent -ml-[17px] pl-4 transition-all">Introduction</a>
                            <a href="#collect" class="text-secondary hover:text-white transition-colors">Information We
                                Collect</a>
                            <a href="#use" class="text-secondary hover:text-white transition-colors">How We Use
                                Information</a>
                            <a href="#share" class="text-secondary hover:text-white transition-colors">Sharing
                                Information</a>
                            <a href="#contact" class="text-secondary hover:text-white transition-colors">Contact Us</a>
                        </nav>
                    </div>
                </div>
            </aside>

            <!-- Main Content -->
            <div class="space-y-12">
                <!-- Hero Title -->
                <div class="mb-16">
                    <div
                        class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-accent/10 border border-accent/20 text-xs font-medium text-accent mb-6">
                        Last updated: December 5, 2024
                    </div>
                    <h1 class="text-5xl md:text-7xl font-bold tracking-tight mb-6">
                        Privacy <br /><span class="text-gradient">Policy</span>
                    </h1>
                    <p class="text-lg text-secondary leading-relaxed max-w-2xl">
                        Your privacy matters to us. This policy outlines how we collect, use, and protect your personal
                        data
                        when you interact with our digital experiences.
                    </p>
                </div>

                <!-- Section Cards -->
                <div class="space-y-8">
                    <!-- Section 1 -->
                    <section id="intro"
                        class="group relative bg-surface border border-white/5 rounded-2xl p-8 hover:border-accent/30 transition-all duration-300">
                        <div class="absolute top-0 right-0 p-8 opacity-0 group-hover:opacity-100 transition-opacity">
                            <span class="text-4xl font-bold text-white/5">01</span>
                        </div>
                        <h2 class="text-2xl font-bold text-white mb-4 flex items-center gap-3">
                            <span class="w-2 h-8 bg-accent rounded-full"></span>
                            Introduction
                        </h2>
                        <p class="text-secondary leading-relaxed">
                            Welcome to SayLess. We respect your privacy and are committed to protecting your personal
                            data.
                            This privacy policy will inform you as to how we look after your personal data when you
                            visit
                            our website and tell you about your privacy rights and how the law protects you.
                        </p>
                    </section>

                    <!-- Section 2 -->
                    <section id="collect"
                        class="group relative bg-surface border border-white/5 rounded-2xl p-8 hover:border-accent/30 transition-all duration-300">
                        <div class="absolute top-0 right-0 p-8 opacity-0 group-hover:opacity-100 transition-opacity">
                            <span class="text-4xl font-bold text-white/5">02</span>
                        </div>
                        <h2 class="text-2xl font-bold text-white mb-4 flex items-center gap-3">
                            <span
                                class="w-2 h-8 bg-zinc-700 rounded-full group-hover:bg-accent transition-colors"></span>
                            Information We Collect
                        </h2>
                        <p class="text-secondary leading-relaxed mb-4">
                            We may collect, use, store and transfer different kinds of personal data about you which we
                            have
                            grouped together follows:
                        </p>
                        <ul class="list-disc list-inside space-y-2 text-secondary ml-4">
                            <li><span class="text-white">Identity Data</span> includes first name, last name, username
                                or
                                similar identifier.</li>
                            <li><span class="text-white">Contact Data</span> includes email address and telephone
                                numbers.
                            </li>
                            <li><span class="text-white">Technical Data</span> includes internet protocol (IP) address,
                                browser type and version, time zone setting and location.</li>
                        </ul>
                    </section>

                    <!-- Section 3 -->
                    <section id="use"
                        class="group relative bg-surface border border-white/5 rounded-2xl p-8 hover:border-accent/30 transition-all duration-300">
                        <div class="absolute top-0 right-0 p-8 opacity-0 group-hover:opacity-100 transition-opacity">
                            <span class="text-4xl font-bold text-white/5">03</span>
                        </div>
                        <h2 class="text-2xl font-bold text-white mb-4 flex items-center gap-3">
                            <span
                                class="w-2 h-8 bg-zinc-700 rounded-full group-hover:bg-accent transition-colors"></span>
                            How We Use Information
                        </h2>
                        <p class="text-secondary leading-relaxed mb-4">
                            We will only use your personal data when the law allows us to. Most commonly, we will use
                            your
                            personal data in the following circumstances:
                        </p>
                        <div class="grid md:grid-cols-2 gap-4 mt-6">
                            <div class="bg-black/20 p-4 rounded-lg border border-white/5">
                                <h4 class="text-white font-medium mb-2">Service Delivery</h4>
                                <p class="text-sm text-secondary">To provide and maintain our Service, including to
                                    monitor
                                    the usage of our Service.</p>
                            </div>
                            <div class="bg-black/20 p-4 rounded-lg border border-white/5">
                                <h4 class="text-white font-medium mb-2">Communication</h4>
                                <p class="text-sm text-secondary">To contact you by email, telephone calls, SMS, or
                                    other
                                    equivalent forms of electronic communication.</p>
                            </div>
                        </div>
                    </section>

                    <!-- Section 4 -->
                    <section id="share"
                        class="group relative bg-surface border border-white/5 rounded-2xl p-8 hover:border-accent/30 transition-all duration-300">
                        <div class="absolute top-0 right-0 p-8 opacity-0 group-hover:opacity-100 transition-opacity">
                            <span class="text-4xl font-bold text-white/5">04</span>
                        </div>
                        <h2 class="text-2xl font-bold text-white mb-4 flex items-center gap-3">
                            <span
                                class="w-2 h-8 bg-zinc-700 rounded-full group-hover:bg-accent transition-colors"></span>
                            Sharing Your Information
                        </h2>
                        <p class="text-secondary leading-relaxed">
                            We do not share your personal information with third parties except as necessary to provide
                            our
                            services, comply with the law, or protect our rights. We may share information with
                            third-party
                            vendors who perform services on our behalf, but only to the extent necessary for them to
                            perform
                            their duties.
                        </p>
                    </section>

                    <!-- Section 5 -->
                    <section id="contact"
                        class="group relative bg-gradient-to-br from-surface to-accent/10 border border-white/5 rounded-2xl p-8 hover:border-accent/50 transition-all duration-300">
                        <h2 class="text-2xl font-bold text-white mb-4">Still have questions?</h2>
                        <p class="text-secondary leading-relaxed mb-6">
                            We're here to help. If you have any questions about this Privacy Policy, please contact us.
                        </p>
                        <a href="index.php#contacts"
                            class="inline-flex items-center gap-2 px-6 py-3 bg-white text-black font-bold rounded-lg hover:bg-gray-200 transition-colors">
                            Contact Support
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </a>
                    </section>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-black border-t border-white/10 pt-20 pb-10">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-3 gap-12 mb-16">
                <div class="col-span-1 md:col-span-1">
                    <a href="index.php" class="text-2xl font-bold tracking-tighter mb-6 block">SayLess<span
                            class="text-accent">.</span></a>
                    <p class="text-secondary text-sm leading-relaxed">
                        Crafting digital experiences that matter. We build the future of the web, one pixel at a time.
                    </p>
                </div>

                <div>
                    <h4 class="font-bold text-white mb-6">Company</h4>
                    <ul class="space-y-4 text-sm text-secondary">
                        <li><a href="index.php#members" class="hover:text-white transition-colors">About Us</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Careers</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Press</a></li>
                        <li><a href="index.php#contacts" class="hover:text-white transition-colors">Contact</a></li>
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
                    <a href="privacy.php" class="group relative text-white transition-colors duration-300">
                        Privacy Policy
                        <span
                            class="absolute -bottom-1 left-0 h-px bg-accent transition-all duration-300 w-full"></span>
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

    <!-- Scroll Spy Script -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const observerOptions = {
                root: null,
                rootMargin: '-20% 0px -50% 0px',
                threshold: 0.1
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const id = entry.target.id;
                        // Remove active class from all links
                        document.querySelectorAll('aside nav a').forEach(link => {
                            link.classList.remove('text-white', 'border-l-2', 'border-accent', '-ml-[17px]', 'pl-4');
                            link.classList.add('text-secondary');
                        });

                        // Add active class to current link
                        const activeLink = document.querySelector(`aside nav a[href="#${id}"]`);
                        if (activeLink) {
                            activeLink.classList.remove('text-secondary');
                            activeLink.classList.add('text-white', 'border-l-2', 'border-accent', '-ml-[17px]', 'pl-4');
                        }
                    }
                });
            }, observerOptions);

            // Track all sections
            document.querySelectorAll('section[id]').forEach((section) => {
                observer.observe(section);
            });
        });
    </script>
</body>

</html>