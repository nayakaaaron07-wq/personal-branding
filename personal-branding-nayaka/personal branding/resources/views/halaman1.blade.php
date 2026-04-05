@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Hero Section -->
    <section class="min-h-[90vh] flex items-center justify-center relative overflow-hidden">
        <!-- Background elements -->
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-neon/10 rounded-full blur-[120px]"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-neon/5 rounded-full blur-[100px]"></div>
        
        <div class="container mx-auto px-6 relative z-10 text-center">
            <h2 class="text-neon uppercase tracking-[0.3em] text-sm font-bold mb-6 animate-pulse">Available for Projects</h2>
            <h1 class="text-6xl md:text-9xl font-black mb-8 tracking-tighter leading-none italic">
                CREATIVE <br>
                <span class="neon-text">DEVELOPER.</span>
            </h1>
            <p class="text-gray-400 text-lg md:text-xl max-w-2xl mx-auto mb-12 font-light">
                Hi, I'm Nayaka. I craft high-performance digital solutions with a focus on clean code and striking aesthetics.
            </p>
            <div class="flex flex-col md:flex-row items-center justify-center gap-6">
                <a href="/about" class="neon-bg text-black px-12 py-4 rounded-none font-bold uppercase tracking-widest text-sm hover:opacity-80 transition duration-300 w-full md:w-auto">
                    Explore Bio
                </a>
                <a href="/projects" class="border border-neon text-neon px-12 py-4 rounded-none font-bold uppercase tracking-widest text-sm hover:bg-neon hover:text-black transition duration-300 w-full md:w-auto">
                    View Works
                </a>
            </div>
        </div>
        
        <!-- Scroll indicator -->
        <div class="absolute bottom-10 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 opacity-50">
            <span class="text-[10px] uppercase tracking-widest">Scroll</span>
            <div class="w-[1px] h-12 bg-neon"></div>
        </div>
    </section>
@endsection
