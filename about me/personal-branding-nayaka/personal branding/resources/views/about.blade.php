@extends('layouts.app')

@section('title', 'About Me')

@section('content')
    <section class="py-32">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center gap-20">
                <!-- Left: Image with Neon Frame -->
                <div class="lg:w-1/2 w-full flex justify-center">
                    <div class="relative group max-w-md w-full">
                        <!-- Neon border frames -->
                        <div class="absolute -top-4 -left-4 w-1/3 h-1/3 border-t-2 border-l-2 border-neon group-hover:scale-110 transition duration-500"></div>
                        <div class="absolute -bottom-4 -right-4 w-1/3 h-1/3 border-b-2 border-r-2 border-neon group-hover:scale-110 transition duration-500"></div>
                        
                        <img src="{{ asset('images/profile/Me.jpeg') }}" alt="Nayaka Aaron Profile" class="grayscale hover:grayscale-0 transition duration-700 w-full object-cover aspect-[4/5]">
                    </div>
                </div>

                <!-- Right: Content -->
                <div class="lg:w-1/2 w-full">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-12 h-[1px] bg-neon"></div>
                        <span class="text-neon uppercase tracking-widest text-xs font-bold">Biography</span>
                    </div>
                    <h2 class="text-5xl md:text-7xl font-black mb-10 tracking-tighter leading-tight italic">
                        ABOUT <br>
                        <span class="neon-text">NAYAKA.</span>
                    </h2>
                    
                    <div class="space-y-6 text-gray-400 text-lg leading-relaxed font-light mb-12">
                        <p>
                            Hi, I’m Nayaka Aaron, a high school student from Surabaya, Indonesia with a strong interest in problem-solving and technology. I enjoy learning how things work, especially when it involves logic, structure, and building something from scratch.
                        </p>
                        <p>
                            Right now, I’m focusing on developing my programming skills, particularly in Python and basic software development. I like working on small projects that help me improve my thinking process and turn ideas into real implementations.
                        </p>
                        <p>
                            I’m also interested in civil engineering, which shapes how I approach problems—structured, precise, and solution-oriented. For me, both coding and engineering share the same foundation: understanding problems and creating efficient solutions.
                        </p>
                        <p>
                            Beyond academics, I value discipline, consistency, and continuous self-improvement. I’m always open to learning new things, exploring challenges, and growing step by step.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                        <div class="p-8 bg-dark-gray border-l-4 border-neon">
                            <h4 class="font-bold text-white mb-2 uppercase tracking-widest text-xs">Currently Learning</h4>
                            <ul class="text-gray-400 text-sm space-y-1">
                                <li>• Programming fundamentals (Python)</li>
                                <li>• Basic problem solving & algorithms</li>
                                <li>• Logical and structured thinking</li>
                            </ul>
                        </div>
                        <div class="p-8 bg-dark-gray border-l-4 border-white/20">
                            <h4 class="font-bold text-white mb-2 uppercase tracking-widest text-xs">Goal</h4>
                            <p class="text-gray-400 text-sm italic">"To become someone who can build meaningful solutions and make a real impact through technology and engineering."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
