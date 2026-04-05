<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Personal Branding') | Neon Dark</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Scripts & Styles (Tailwind CDN for easy preview without local setup) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        neon: '#39FF14',
                        dark: '#050505',
                        'dark-gray': '#121212',
                    },
                    fontFamily: {
                        sans: ['Space Grotesk', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    <style>
        body { background-color: #050505; color: #e5e7eb; }
        .neon-shadow { filter: drop-shadow(0 0 8px rgba(57, 255, 20, 0.4)); }
        .neon-border { border: 1px solid #39FF14; box-shadow: 0 0 10px rgba(57, 255, 20, 0.2); }
        .neon-text { color: #39FF14; text-shadow: 0 0 5px rgba(57, 255, 20, 0.5); }
        .neon-bg { background-color: #39FF14; box-shadow: 0 0 15px rgba(57, 255, 20, 0.6); }
        
        @keyframes glow {
            0% { box-shadow: 0 0 5px rgba(57, 255, 20, 0.2); }
            50% { box-shadow: 0 0 20px rgba(57, 255, 20, 0.5); }
            100% { box-shadow: 0 0 5px rgba(57, 255, 20, 0.2); }
        }
        .animate-glow { animation: glow 2s infinite; }
    </style>
</head>
<body class="antialiased font-sans selection:bg-neon selection:text-black">
    <header class="bg-black/80 backdrop-blur-md sticky top-0 z-50 border-b border-white/10">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="/" class="text-2xl font-bold neon-text tracking-tighter italic">NAYAKA.</a>
            <div class="hidden md:flex space-x-10 uppercase text-xs font-bold tracking-widest">
                <a href="/" class="hover:text-neon transition-colors">Home</a>
                <a href="/about" class="hover:text-neon transition-colors">About</a>
                <a href="/projects" class="hover:text-neon transition-colors">Projects</a>
                <a href="/skills" class="hover:text-neon transition-colors">Skills</a>
            </div>
            <!-- Mobile Menu Toggle (Simplified) -->
            <div class="md:hidden">
                <span class="text-neon text-2xl">☰</span>
            </div>
        </nav>
    </header>

    <main class="min-h-screen">
        @yield('content')
    </main>

    <footer class="bg-dark-gray border-t border-white/5 py-12 mt-20">
        <div class="container mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-8">
            <div class="text-center md:text-left">
                <h3 class="text-2xl font-bold neon-text italic mb-2">NAYAKA.</h3>
                <p class="text-gray-500 text-sm">Building digital experiences in the shadows.</p>
            </div>
            <div class="flex space-x-6 text-sm font-medium">
                <a href="#" class="hover:text-neon transition">LinkedIn</a>
                <a href="#" class="hover:text-neon transition">GitHub</a>
                <a href="#" class="hover:text-neon transition">Instagram</a>
            </div>
        </div>
        <div class="container mx-auto px-6 mt-8 pt-8 border-t border-white/5 text-center text-xs text-gray-600">
            <p>&copy; 2026 NAYAKA. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
