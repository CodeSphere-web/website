<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="{{ asset('images/codespherelogo1.png') }}" type="image/x-icon">   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="CodeSphere is a Lebanese web development company that builds custom backends and blazing-fast - amazing frontends to scale local businesses globally.">
    <title>CodeSphere | Next-Gen Web Development</title>
    <meta name="robots" content="index, follow">
    <!-- Tailwind CSS via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Inter Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-[#0b0f19] text-gray-100 antialiased overflow-x-hidden">

    <!-- Header / Navbar -->
    <header class="fixed top-0 left-0 w-full z-50 bg-[#0b0f19]/80 backdrop-blur-md border-b border-gray-800">
        <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
            <a href="#" class="text-2xl font-extrabold tracking-wider bg-gradient-to-r from-cyan-400 to-purple-500 bg-clip-text text-transparent">
                &lt;CodeSphere&gt;
            </a>
            <nav class="hidden md:flex space-x-8 text-sm font-medium text-gray-300">
                <a href="#services" class="hover:text-cyan-400 transition">Services</a>
                <a href="#projects" class="hover:text-cyan-400 transition">Our Work</a>
                <a href="#contact" class="hover:text-cyan-400 transition">Contact Us</a>
            </nav>
            <a href="#contact" class="px-5 py-2.5 rounded-lg bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-400 hover:to-blue-500 font-semibold text-sm transition shadow-lg shadow-cyan-500/20">
                Get a Free Quote
            </a>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center pt-20 overflow-hidden">
        <!-- Glowing background circles -->
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-cyan-500/10 rounded-full blur-[120px]"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-purple-500/10 rounded-full blur-[120px]"></div>

        <div class="max-w-5xl mx-auto px-6 text-center z-10">
            <span class="px-4 py-1.5 rounded-full bg-cyan-500/10 text-cyan-400 text-xs font-semibold tracking-wide uppercase border border-cyan-500/20">
                together for a bright future 🇱🇧
            </span>
            <h1 class="mt-8 text-5xl md:text-7xl font-extrabold tracking-tight leading-tight">
                We Build Ultra-Reliable <br>
                <span class="bg-gradient-to-r from-cyan-400 via-blue-500 to-purple-500 bg-clip-text text-transparent">Web Applications</span>
            </h1>
            <p class="mt-6 text-lg md:text-xl text-gray-400 max-w-3xl mx-auto leading-relaxed">
                We are a dedicated team of web developers. We build custom backends and blazing-fast frontends to scale local businesses globally.
            </p>
            <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="#projects" class="w-full sm:w-auto px-8 py-4 rounded-xl bg-gradient-to-r from-cyan-500 to-blue-600 hover:scale-[1.02] active:scale-[0.98] transition-all font-bold shadow-xl shadow-cyan-500/10">
                    View Our work
                </a>
                <a href="./#contact" class="w-full sm:w-auto px-8 py-4 rounded-xl border border-gray-700 hover:bg-gray-800/50 hover:border-gray-600 transition flex items-center justify-center gap-2">
                    Let's Chat
                </a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-24 border-t border-gray-900 bg-[#090c14]">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-3xl md:text-4xl font-bold">What We Do Best</h2>
                <p class="mt-4 text-gray-400">Custom software engineered locally to solve real-world problems.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Laravel Custom Backends -->
                <div class="p-8 rounded-2xl bg-[#0e1322] border border-gray-800/80 hover:border-cyan-500/40 transition duration-300">
                    <div class="w-12 h-12 rounded-xl bg-red-500/10 flex items-center justify-center text-red-500 mb-6 text-2xl">⚡</div>
                    <h3 class="text-xl font-bold mb-3">Laravel Custom Bacdkends</h3>
                    <p class="text-gray-400 leading-relaxed text-sm">Robust databases, complex APIs, and secure server architecture designed to grow with your business.</p>
                </div>
                <!-- Ultra-Fast Frontends -->
                <div class="p-8 rounded-2xl bg-[#0e1322] border border-gray-800/80 hover:border-cyan-500/40 transition duration-300">
                    <div class="w-12 h-12 rounded-xl bg-cyan-500/10 flex items-center justify-center text-cyan-400 mb-6 text-2xl">🌐</div>
                    <h3 class="text-xl font-bold mb-3">High-Converting Frontends</h3>
                    <p class="text-gray-400 leading-relaxed text-sm">Clean, responsive layouts designed with Tailwind CSS, optimized for high speeds on local mobile networks.</p>
                </div>
                <!-- E-Commerce & Systems -->
                <div class="p-8 rounded-2xl bg-[#0e1322] border border-gray-800/80 hover:border-cyan-500/40 transition duration-300">
                    <div class="w-12 h-12 rounded-xl bg-purple-500/10 flex items-center justify-center text-purple-400 mb-6 text-2xl">🛒</div>
                    <h3 class="text-xl font-bold mb-3">Local E-Commerce</h3>
                    <p class="text-gray-400 leading-relaxed text-sm">Interactive stores featuring optimized checkout channels, such as direct orders routed directly to your Devices.</p>
                </div>
            </div>
        </div>
    </section>  
    
    <!-- Concept Portfolio Section -->
    <section id="projects" class="py-24">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-3xl md:text-4xl font-bold">Featured Concept Systems</h2>
                <p class="mt-4 text-gray-400">Ready-made systems showcasing </p>
            </div>
            <h1 align="center">coming soon...</h1>
           <!-- <div class="grid md:grid-cols-2 gap-8">
                <div class="group rounded-2xl overflow-hidden bg-[#0e1322] border border-gray-800">
                    <div class="h-64 bg-gray-900 flex items-center justify-center border-b border-gray-800 relative">
                        <span class="text-gray-600 font-mono text-sm">&lt;E-Commerce Demo Mockup&gt;</span>
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0e1322] to-transparent opacity-60"></div>
                    </div>
                    <div class="p-8">
                        <span class="text-cyan-400 text-xs font-semibold uppercase tracking-wider">Laravel + Tailwind CSS</span>
                        <h3 class="text-2xl font-bold mt-2 group-hover:text-cyan-400 transition">Modern Quick-Shop Template</h3>
                        <p class="text-gray-400 mt-3 text-sm leading-relaxed">
                            An ultra-lightweight online store template optimized for local businesses. Features smooth product filtering and a "Send Order to WhatsApp" checkout system.
                        </p>
                    </div>
                </div>
                   
                <div class="group rounded-2xl overflow-hidden bg-[#0e1322] border border-gray-800">
                    <div class="h-64 bg-gray-900 flex items-center justify-center border-b border-gray-800 relative">
                        <span class="text-gray-600 font-mono text-sm">&lt;Scheduling App Mockup&gt;</span>
                        <div class="absolute inset-0 bg-gradient-to-t from-[#0e1322] to-transparent opacity-60"></div>
                    </div>
                    <div class="p-8">
                        <span class="text-purple-400 text-xs font-semibold uppercase tracking-wider">Laravel Livewire</span>
                        <h3 class="text-2xl font-bold mt-2 group-hover:text-purple-400 transition">Interactive Appointment System</h3>
                        <p class="text-gray-400 mt-3 text-sm leading-relaxed">
                            A dynamic booking dashboard for clinics and salons. Allows real-time calendar updates, automated slots management, and secure admin database tracking.
                        </p>
                    </div>
                </div>
            </div>
        </div> -->
    </section>

    <!-- Lead Generation Contact Section -->
    <section id="contact" class="py-24 bg-[#090c14] border-t border-gray-900 relative">
        <div class="max-w-4xl mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold">Start Your Project</h2>
                <p class="mt-4 text-gray-400">Let's discuss how we can build something incredible for your business.</p>
            </div>
            <div class="bg-[#0e1322] border border-gray-800 p-8 md:p-10 rounded-3xl shadow-xl">
                <!-- Laravel standard CSRF protection is ready on this form -->
                <!-- The form now triggers a WhatsApp message directly -->
<!-- The form triggers the user's local email client -->
<form action="https://api.web3forms.com/submit" method="POST" class="space-y-6">
    <!-- 🔑 Put your Web3Forms Access Key here -->
    <input type="hidden" name="access_key" value="43cad4d4-f97c-450d-8f73-ef2352a6bc6b">
    <input type="hidden" name="redirect" value="https://codespherelb.com/thanks">
    <div class="grid md:grid-cols-3 gap-6">
        <!-- 1. Name Field -->
        <div>
            <label class="block text-xs font-bold uppercase tracking-wider text-gray-400 mb-2">Your Name</label>
            <input type="text" name="name" required class="w-full bg-[#0b0f19] border border-gray-800 rounded-xl px-4 py-3 text-gray-100 focus:outline-none focus:border-cyan-500 transition" placeholder="Your Name">
        </div>
        <!-- 2. Email Field -->
        <div>
            <label class="block text-xs font-bold uppercase tracking-wider text-gray-400 mb-2">Your Email</label>
            <input type="email" name="email" required class="w-full bg-[#0b0f19] border border-gray-800 rounded-xl px-4 py-3 text-gray-100 focus:outline-none focus:border-cyan-500 transition" placeholder="name@email.com">
        </div>
        <!-- 3. Phone Field -->
        <div>
            <label class="block text-xs font-bold uppercase tracking-wider text-gray-400 mb-2">Phone Number</label>
            <input type="tel" name="phone" placeholder="+961 XX XXX XXX" required class="w-full bg-[#0b0f19] border border-gray-800 rounded-xl px-4 py-3 text-gray-100 focus:outline-none focus:border-cyan-500 transition">
        </div>
    </div>
    <div>
        <label class="block text-xs font-bold uppercase tracking-wider text-gray-400 mb-2">Project Description</label>
        <textarea name="message" rows="4" placeholder="Tell us about the website or system you want to build..." required class="w-full bg-[#0b0f19] border border-gray-800 rounded-xl px-4 py-4 text-gray-100 focus:outline-none focus:border-cyan-500 transition"></textarea>
    </div>
    <button type="submit" class="w-full py-4 rounded-xl bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-400 hover:to-blue-500 font-bold tracking-wide transition shadow-lg shadow-cyan-500/10">
        Send
    </button>
</form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="border-t border-gray-900 py-12 text-center text-sm text-gray-500">
        <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row items-center justify-between gap-4">
            <p>&copy; 2026 CodeSphere. Built by Lebanese Talents.</p>
            <div class="flex space-x-6"> 
                <a href="https://www.instagram.com/codesphere.lb" class="hover:text-cyan-400 transition">Instagram</a>
                <a href="https://github.com/codeSphere-web" class="hover:text-cyan-400 transition">github</a>
            </div>
        </div>
    </footer>

</body>
</html>