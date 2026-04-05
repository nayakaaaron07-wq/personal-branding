@extends('layouts.app')

@section('title', 'Projects')

@section('content')
    <!-- Projects Hero Header -->
    <section class="py-24 text-center">
        <div class="container mx-auto px-6">
            <div class="flex items-center justify-center gap-4 mb-6 uppercase tracking-[0.4em] text-xs font-bold">
                <div class="w-12 h-[1px] bg-neon"></div>
                <span>Selected Works</span>
                <div class="w-12 h-[1px] bg-neon"></div>
            </div>
            <h1 class="text-6xl md:text-9xl font-black mb-8 tracking-tighter italic uppercase neon-text">PORTFOLIO.</h1>
        </div>
    </section>

    <!-- Projects List (Using 2-column layout similar to About Me) -->
    <section class="pb-32 space-y-32">
        <div class="container mx-auto px-6">
            <!-- Project 1 -->
            <div class="flex flex-col lg:flex-row items-center gap-20">
                <!-- Left: Visual -->
                <div class="lg:w-1/2 w-full order-2 lg:order-1">
                    <div class="relative group">
                        <!-- Neon border frames -->
                        <div class="absolute -top-4 -left-4 w-1/4 h-1/4 border-t-2 border-l-2 border-neon group-hover:scale-110 transition duration-500"></div>
                        <div class="absolute -bottom-4 -right-4 w-1/4 h-1/4 border-b-2 border-r-2 border-neon group-hover:scale-110 transition duration-500"></div>
                        
                        <img src="{{ asset('images/projects/Prject.jpeg') }}" alt="E-Commerce Project" class="grayscale hover:grayscale-0 transition duration-700 w-full object-cover">
                        
                        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                             <a href="#" class="neon-bg text-black px-8 py-3 font-bold uppercase tracking-widest text-xs">View Project</a>
                        </div>
                    </div>
                </div>

                <!-- Right: Content -->
                <div class="lg:w-1/2 w-full order-1 lg:order-2">
                    <div class="flex items-center gap-4 mb-6">
                        <span class="text-neon uppercase tracking-widest text-xs font-bold italic">01 / CASE STUDY</span>
                    </div>
                    <h2 class="text-5xl md:text-7xl font-black mb-8 tracking-tighter leading-tight italic uppercase">
                        E-COMMERCE <br>
                        <span class="neon-text">PLATFORM.</span>
                    </h2>
                    
                    <p class="text-gray-400 text-lg leading-relaxed font-light mb-10">
                        Platform belanja online yang responsif dan aman untuk kebutuhan bisnis retail. Fokus pada performa maksimal dan pengalaman pengguna yang intuitif.
                    </p>
                    
                    <div class="flex flex-wrap gap-4 text-xs font-bold uppercase tracking-widest text-gray-500">
                        <span class="px-4 py-2 bg-white/5 border border-white/10">Laravel</span>
                        <span class="px-4 py-2 bg-white/5 border border-white/10">Vue.js</span>
                        <span class="px-4 py-2 bg-white/5 border border-white/10">MySQL</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mx-auto px-6">
            <!-- Project 2 (Reversed for visual balance) -->
            <div class="flex flex-col lg:flex-row-reverse items-center gap-20">
                <!-- Right: Visual -->
                <div class="lg:w-1/2 w-full order-2 lg:order-1">
                    <div class="relative group">
                        <!-- Neon border frames -->
                        <div class="absolute -top-4 -right-4 w-1/4 h-1/4 border-t-2 border-r-2 border-neon group-hover:scale-110 transition duration-500"></div>
                        <div class="absolute -bottom-4 -left-4 w-1/4 h-1/4 border-b-2 border-l-2 border-neon group-hover:scale-110 transition duration-500"></div>
                        
                        <img src="https://via.placeholder.com/800x600" alt="Health Tracking App" class="grayscale hover:grayscale-0 transition duration-700 w-full object-cover">
                        
                        <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                             <a href="#" class="neon-bg text-black px-8 py-3 font-bold uppercase tracking-widest text-xs">View Project</a>
                        </div>
                    </div>
                </div>

                <!-- Left: Content -->
                <div class="lg:w-1/2 w-full order-1 lg:order-2">
                    <div class="flex items-center gap-4 mb-6">
                        <span class="text-neon uppercase tracking-widest text-xs font-bold italic">02 / CASE STUDY</span>
                    </div>
                    <h2 class="text-5xl md:text-7xl font-black mb-8 tracking-tighter leading-tight italic uppercase">
                        HEALTH <br>
                        <span class="neon-text">TRACKING APP.</span>
                    </h2>
                    
                    <p class="text-gray-400 text-lg leading-relaxed font-light mb-10">
                        Aplikasi pemantau kesehatan harian dengan fitur analisis data statistik. Memberikan wawasan mendalam tentang gaya hidup sehat.
                    </p>
                    
                    <div class="flex flex-wrap gap-4 text-xs font-bold uppercase tracking-widest text-gray-500">
                        <span class="px-4 py-2 bg-white/5 border border-white/10">React Native</span>
                        <span class="px-4 py-2 bg-white/5 border border-white/10">Firebase</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
