@extends('layouts.app')

@section('title', 'Skills')

@section('content')
    <section class="py-32">
        <div class="container mx-auto px-6 text-center mb-24">
            <div class="flex items-center justify-center gap-4 mb-6 uppercase tracking-[0.4em] text-xs font-bold">
                <div class="w-12 h-[1px] bg-neon"></div>
                <span>Capabilities</span>
                <div class="w-12 h-[1px] bg-neon"></div>
            </div>
            <h1 class="text-6xl md:text-9xl font-black mb-8 tracking-tighter italic uppercase neon-text">TECH STACK.</h1>
        </div>

        <div class="container mx-auto px-6 max-w-4xl">
            <div class="space-y-16">
                <!-- JavaScript -->
                <div class="group">
                    <div class="flex justify-between items-end mb-4">
                        <div class="flex items-center gap-4">
                            <span class="text-2xl font-black italic group-hover:neon-text transition duration-300">JAVASCRIPT</span>
                        </div>
                        <span class="text-neon font-bold font-mono tracking-widest">49%</span>
                    </div>
                    <div class="h-4 bg-white/5 border border-white/10 relative overflow-hidden">
                        <div class="absolute inset-y-0 left-0 bg-neon neon-shadow transition-all duration-1000 ease-out" style="width: 49%">
                            <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/30 to-transparent animate-[shimmer_2s_infinite]"></div>
                        </div>
                    </div>
                </div>

                <!-- C++ -->
                <div class="group">
                    <div class="flex justify-between items-end mb-4">
                        <div class="flex items-center gap-4">
                            <span class="text-2xl font-black italic group-hover:neon-text transition duration-300">C++</span>
                        </div>
                        <span class="text-neon font-bold font-mono tracking-widest">21%</span>
                    </div>
                    <div class="h-4 bg-white/5 border border-white/10 relative overflow-hidden">
                        <div class="absolute inset-y-0 left-0 bg-neon neon-shadow transition-all duration-1000 ease-out" style="width: 21%">
                            <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/30 to-transparent animate-[shimmer_2s_infinite]"></div>
                        </div>
                    </div>
                </div>

                <!-- HTML & CSS -->
                <div class="group">
                    <div class="flex justify-between items-end mb-4">
                        <div class="flex items-center gap-4">
                            <span class="text-2xl font-black italic group-hover:neon-text transition duration-300">HTML & CSS</span>
                        </div>
                        <span class="text-neon font-bold font-mono tracking-widest">58%</span>
                    </div>
                    <div class="h-4 bg-white/5 border border-white/10 relative overflow-hidden">
                        <div class="absolute inset-y-0 left-0 bg-neon neon-shadow transition-all duration-1000 ease-out" style="width: 58%">
                            <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/30 to-transparent animate-[shimmer_2s_infinite]"></div>
                        </div>
                    </div>
                </div>

                <!-- SQL -->
                <div class="group">
                    <div class="flex justify-between items-end mb-4">
                        <div class="flex items-center gap-4">
                            <span class="text-2xl font-black italic group-hover:neon-text transition duration-300">SQL</span>
                        </div>
                        <span class="text-neon font-bold font-mono tracking-widest">10%</span>
                    </div>
                    <div class="h-4 bg-white/5 border border-white/10 relative overflow-hidden">
                        <div class="absolute inset-y-0 left-0 bg-neon neon-shadow transition-all duration-1000 ease-out" style="width: 10%">
                            <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/30 to-transparent animate-[shimmer_2s_infinite]"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        @keyframes shimmer {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }
    </style>
@endsection
