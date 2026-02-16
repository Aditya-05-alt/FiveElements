<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Five Elements | Curios, Metals & Antiques</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'space-dark': '#022f99',
                        'element-gold': '#fbbf24',
                        'element-blue': '#22d3ee',
                        'element-rose': '#f43f5e',
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                },
            },
        }
    </script>
    <style>
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #022f99; }
        ::-webkit-scrollbar-thumb { background: #fbbf24; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #ffffff; }
        
        .glass-panel { 
            background: rgba(2, 47, 153, 0.4); 
            backdrop-filter: blur(12px); 
            border-bottom: 1px solid rgba(255, 255, 255, 0.1); 
        }
        
        .gradient-text { 
            background: linear-gradient(to right, #fbbf24, #f43f5e, #22d3ee); 
            -webkit-background-clip: text; 
            -webkit-text-fill-color: transparent; 
        }
        
        .animate-fade-in { animation: fadeIn 0.5s ease-in-out; }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body class="text-gray-200 font-sans antialiased selection:bg-element-gold selection:text-black">

    <div class="fixed inset-0 -z-50">
        <div class="absolute inset-0 bg-cover bg-center opacity-100" 
             style="background-image: url('{{ asset('/assets/hero.jpg') }}');">
        </div>
        <div class="absolute inset-0 bg-gradient-to-b from-space-dark/80 via-space-dark/30 to-space-dark"></div>
    </div>

    <nav class="fixed w-full z-50 glass-panel transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <div class="flex items-center">
                    <a href="#home">
                        <img src="{{ asset('/assets/brand_logo.png') }}" alt="Five Elements" class="h-14 w-auto object-contain hover:opacity-90 transition-opacity">
                    </a>
                </div>
                
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-6">
                        <a href="#home" class="hover:text-element-gold px-3 py-2 text-sm font-medium transition-colors">Home</a>
                        <a href="#collection-tabs" class="hover:text-element-gold px-3 py-2 text-sm font-medium transition-colors">Metals Collections</a>
                        <a href="#our-work" class="hover:text-element-gold px-3 py-2 text-sm font-medium transition-colors">Our Work</a>
                        <a href="#contact" class="hover:text-element-gold px-3 py-2 text-sm font-medium transition-colors">Contact</a>
                        <button onclick="openModal()" class="ml-4 bg-red-900/40 border border-red-500/30 text-red-300 hover:bg-red-900/70 hover:border-red-500 px-4 py-2 rounded-full text-sm font-medium transition-all flex items-center gap-2 backdrop-blur-md">
                            <i class="fa-solid fa-lock"></i> Confidential
                        </button>
                    </div>
                </div>

                <div class="md:hidden">
                    <button onclick="openModal()" class="text-red-400 hover:text-white transition-colors">
                        <i class="fa-solid fa-lock text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <section id="home" class="relative h-screen flex items-center justify-center overflow-hidden">
        <div class="relative z-10 text-center px-4 max-w-5xl mx-auto">
            <span class="inline-block py-1 px-3 rounded-full bg-element-gold/20 border border-element-gold/40 text-element-gold text-xs font-bold mb-6 tracking-widest uppercase backdrop-blur-sm">
                Est. 2025 • Kolkata
            </span>
            <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold mb-6 tracking-tight leading-tight text-white drop-shadow-2xl">
                Curios. Metals. <span class="gradient-text drop-shadow-lg">Legacy.</span>
            </h1>
            <p class="text-lg md:text-2xl text-white mb-10 font-medium max-w-3xl mx-auto leading-relaxed drop-shadow-md">
                A premier trading house for original & processed metals, rare curio items, and timeless antiques. 
                Where history meets value.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#collection-tabs" class="bg-element-gold text-black font-bold py-4 px-10 rounded-full shadow-[0_0_20px_rgba(251,191,36,0.4)] hover:shadow-[0_0_30px_rgba(251,191,36,0.6)] hover:bg-white transition-all transform hover:-translate-y-1">
                    View Collection
                </a>
                <a href="#contact" class="glass-panel text-white font-bold py-4 px-10 rounded-full hover:bg-white/20 border border-white/30 transition-all shadow-lg">
                    Contact Us
                </a>
            </div>
        </div>
    </section>

    <section class="py-24 relative z-20" id="collection-tabs">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-8 drop-shadow-md">Our <span class="text-element-gold">Offerings</span></h2>
                <div class="flex flex-wrap justify-center gap-4 md:gap-12 border-b border-white/30 pb-1 max-w-3xl mx-auto">
                    <button onclick="switchTab('metals')" id="btn-metals" class="tab-btn active-tab text-lg md:text-xl font-bold px-4 py-2 text-element-gold border-b-4 border-element-gold transition-all duration-300 drop-shadow-sm">Metals</button>
                    <button onclick="switchTab('curios')" id="btn-curios" class="tab-btn text-lg md:text-xl font-bold px-4 py-2 text-blue-100 border-b-4 border-transparent hover:text-white transition-all duration-300 drop-shadow-sm">Curios</button>
                    <button onclick="switchTab('antiques')" id="btn-antiques" class="tab-btn text-lg md:text-xl font-bold px-4 py-2 text-blue-100 border-b-4 border-transparent hover:text-white transition-all duration-300 drop-shadow-sm">Antiques</button>
                </div>
            </div>

            <div class="relative min-h-[400px]">
                <div id="content-metals" class="tab-content grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 animate-fade-in">
                    <div class="group h-80 rounded-2xl overflow-hidden cursor-pointer shadow-lg border border-white/20 transition-all duration-500 hover:-translate-y-4 hover:shadow-2xl hover:shadow-element-gold/40"><img src="{{ asset('/assets/Uranium-Pictures-.jpg') }}" class="w-full h-full object-cover transform transition duration-700 group-hover:scale-110"></div>
                    <div class="group h-80 rounded-2xl overflow-hidden cursor-pointer shadow-lg border border-white/20 transition-all duration-500 hover:-translate-y-4 hover:shadow-2xl hover:shadow-element-gold/40"><img src="{{ asset('/assets/old-gold-mine-.jpg') }}" class="w-full h-full object-cover transform transition duration-700 group-hover:scale-110"></div>
                    <div class="group h-80 rounded-2xl overflow-hidden cursor-pointer shadow-lg border border-white/20 transition-all duration-500 hover:-translate-y-4 hover:shadow-2xl hover:shadow-element-gold/40"><img src="{{ asset('/assets/uncut.jpg') }}" class="w-full h-full object-cover transform transition duration-700 group-hover:scale-110"></div>
                    <div class="group h-80 rounded-2xl overflow-hidden cursor-pointer shadow-lg border border-white/20 transition-all duration-500 hover:-translate-y-4 hover:shadow-2xl hover:shadow-element-gold/40"><img src="{{ asset('/assets/radio.jpg') }}" class="w-full h-full object-cover transform transition duration-700 group-hover:scale-110"></div>
                </div>

                <div id="content-curios" class="tab-content hidden grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 animate-fade-in">
                    <div class="group h-80 rounded-2xl overflow-hidden cursor-pointer shadow-lg border border-white/20 transition-all duration-500 hover:-translate-y-4 hover:shadow-2xl hover:shadow-element-blue/40 relative">
                        <img src="https://images.unsplash.com/photo-1534948216015-843143f76e35?q=80&w=600" class="w-full h-full object-cover transform transition duration-700 group-hover:scale-110">
                        <div class="absolute top-3 right-3 bg-element-blue text-space-dark text-xs font-bold px-2 py-1 rounded shadow-md">Unique</div>
                    </div>
                    <div class="group h-80 rounded-2xl overflow-hidden cursor-pointer shadow-lg border border-white/20 transition-all duration-500 hover:-translate-y-4 hover:shadow-2xl hover:shadow-element-blue/40"><img src="https://images.unsplash.com/photo-1605518216965-7f39499df5e9?q=80&w=600" class="w-full h-full object-cover transform transition duration-700 group-hover:scale-110"></div>
                    <div class="group h-80 rounded-2xl overflow-hidden cursor-pointer shadow-lg border border-white/20 transition-all duration-500 hover:-translate-y-4 hover:shadow-2xl hover:shadow-element-blue/40"><img src="https://images.unsplash.com/photo-1615800098779-1be32e60cca3?q=80&w=600" class="w-full h-full object-cover transform transition duration-700 group-hover:scale-110"></div>
                    <div class="group h-80 rounded-2xl overflow-hidden cursor-pointer shadow-lg border border-white/20 transition-all duration-500 hover:-translate-y-4 hover:shadow-2xl hover:shadow-element-blue/40"><img src="https://images.unsplash.com/photo-1599839572628-36376936f3ef?q=80&w=600" class="w-full h-full object-cover transform transition duration-700 group-hover:scale-110"></div>
                </div>

                <div id="content-antiques" class="tab-content hidden grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 animate-fade-in">
                    <div class="group h-80 rounded-2xl overflow-hidden cursor-pointer shadow-lg border border-white/20 transition-all duration-500 hover:-translate-y-4 hover:shadow-2xl hover:shadow-element-rose/40"><img src="https://images.unsplash.com/photo-1547996160-81dfa63595aa?q=80&w=600" class="w-full h-full object-cover transform transition duration-700 group-hover:scale-110"></div>
                    <div class="group h-80 rounded-2xl overflow-hidden cursor-pointer shadow-lg border border-white/20 transition-all duration-500 hover:-translate-y-4 hover:shadow-2xl hover:shadow-element-rose/40"><img src="https://images.unsplash.com/photo-1596627689912-3b1a85b9c240?q=80&w=600" class="w-full h-full object-cover transform transition duration-700 group-hover:scale-110"></div>
                    <div class="group h-80 rounded-2xl overflow-hidden cursor-pointer shadow-lg border border-white/20 transition-all duration-500 hover:-translate-y-4 hover:shadow-2xl hover:shadow-element-rose/40"><img src="https://images.unsplash.com/photo-1576504677634-06b71343d327?q=80&w=600" class="w-full h-full object-cover transform transition duration-700 group-hover:scale-110"></div>
                    <div class="group h-80 rounded-2xl overflow-hidden cursor-pointer shadow-lg border border-white/20 transition-all duration-500 hover:-translate-y-4 hover:shadow-2xl hover:shadow-element-rose/40"><img src="https://images.unsplash.com/photo-1461360370896-922624d12aa1?q=80&w=600" class="w-full h-full object-cover transform transition duration-700 group-hover:scale-110"></div>
                </div>
            </div>
        </div>
    </section>

    <section id="our-work" class="py-24 relative z-20 border-t border-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-8 drop-shadow-md">Our <span class="text-element-gold">Business</span></h2>
            <div class="space-y-8">
                <p class="text-xl md:text-2xl text-white/90 font-light leading-relaxed max-w-4xl mx-auto">
                    We are officially constituted to carry out the business of <strong>Trading (Purchasing & Selling)</strong> through official and E-marketing processes. We specialize in <strong>Curio Items</strong> made of all kinds of <strong>Metals</strong> in various categories—whether in their original, processed, or modified forms.
                </p>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-12">
                    <div class="p-6 rounded-2xl bg-white/5 border border-white/10 hover:bg-white/10 transition-colors duration-300 group">
                        <div class="w-14 h-14 bg-element-gold/20 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-element-gold/30 transition-colors">
                            <i class="fa-solid fa-briefcase text-2xl text-element-gold"></i>
                        </div>
                        <h3 class="text-lg font-bold text-white mb-3 group-hover:text-element-gold transition-colors">Trading & E-Marketing</h3>
                        <p class="text-gray-300 text-sm leading-relaxed">Official trading of Curio Items and Metals through traditional channels and modern E-marketing processes.</p>
                    </div>
                    <div class="p-6 rounded-2xl bg-white/5 border border-white/10 hover:bg-white/10 transition-colors duration-300 group">
                        <div class="w-14 h-14 bg-element-blue/20 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-element-blue/30 transition-colors">
                            <i class="fa-solid fa-magnifying-glass-chart text-2xl text-element-blue"></i>
                        </div>
                        <h3 class="text-lg font-bold text-white mb-3 group-hover:text-element-blue transition-colors">Purity Verification</h3>
                        <p class="text-gray-300 text-sm leading-relaxed">Strict checks on genuineness, ingredients, depth, and % of purity by expert third parties.</p>
                    </div>
                    <div class="p-6 rounded-2xl bg-white/5 border border-white/10 hover:bg-white/10 transition-colors duration-300 group">
                        <div class="w-14 h-14 bg-element-rose/20 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-element-rose/30 transition-colors">
                            <i class="fa-solid fa-handshake-simple text-2xl text-element-rose"></i>
                        </div>
                        <h3 class="text-lg font-bold text-white mb-3 group-hover:text-element-rose transition-colors">Client Operations</h3>
                        <p class="text-gray-300 text-sm leading-relaxed">Flexible operations executed either from our registered office or directly at client sites.</p>
                    </div>
                    <div class="p-6 rounded-2xl bg-white/5 border border-white/10 hover:bg-white/10 transition-colors duration-300 group">
                        <div class="w-14 h-14 bg-emerald-500/20 rounded-full flex items-center justify-center mx-auto mb-6 group-hover:bg-emerald-500/30 transition-colors">
                            <i class="fa-solid fa-layer-group text-2xl text-emerald-400"></i>
                        </div>
                        <h3 class="text-lg font-bold text-white mb-3 group-hover:text-emerald-400 transition-colors">Geological Survey</h3>
                        <p class="text-gray-300 text-sm leading-relaxed">We carry on geological survey for the materials to ensure source authenticity and quality.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section id="story" class="py-20 relative overflow-hidden border-t border-white/10">
        <div class="absolute top-0 right-0 w-64 h-64 bg-element-gold/10 rounded-full blur-3xl -mr-20 -mt-20"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4 drop-shadow-md">Our <span class="text-element-gold">Legacy</span></h2>
                <div class="w-24 h-1 bg-element-gold mx-auto rounded-full"></div>
            </div>
            
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="relative rounded-2xl overflow-hidden border border-white/20 shadow-2xl group">
                    <div class="absolute inset-0 bg-element-gold/10 group-hover:bg-transparent transition-colors duration-500"></div>
                    <img src="{{ asset('/assets/legacy.png') }}" alt="Our Story" class="w-full h-[400px] object-cover transform group-hover:scale-105 transition duration-700">
                </div>
                
                <div class="space-y-6">
                    <h3 class="text-2xl font-semibold text-white tracking-wide drop-shadow-sm">Constituted in 2026</h3>
                    
                    <p class="text-white/80 leading-relaxed text-lg">
                        Formally established on the <strong>6th of February, 2026</strong>, <span class="text-element-gold font-bold">M/S "FIVE ELEMENTS"</span> was constituted with a mutual resolve to professionally organize the trade of rare valuables.
                    </p>
                    
                    <p class="text-white/80 leading-relaxed">
                        We are officially mandated to conduct the business of <strong>Trading (Purchasing & Selling)</strong> through both official channels and modern <strong>E-marketing processes</strong>. Our expertise lies in <strong>Curio Items</strong> specially made of all kinds of <strong>Metals</strong> in different categories—whether in their original, processed, or modified forms.
                    </p>

                    <p class="text-white/80 leading-relaxed text-sm italic border-l-2 border-element-gold pl-4">
                        "To ensure absolute value, we engage expert third parties to strictly check the genuineness, ingredients, depth, and % of purity of every item proposed to be sold."
                    </p>

                    <div class="pt-4 flex items-center gap-4">
                        <div class="h-12 w-1 bg-gradient-to-b from-element-gold to-transparent rounded-full"></div>
                        <div>
                            <p class="text-element-gold font-bold uppercase text-sm tracking-widest">Est. 2026</p>
                            <p class="text-gray-300 text-xs">Kolkata, West Bengal</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="py-24 relative border-t border-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4 drop-shadow-md">Visit <span class="text-element-gold">Five Elements</span></h2>
            </div>
            <div class="grid md:grid-cols-2 gap-8 rounded-3xl overflow-hidden glass-panel border border-white/30">
                <div class="p-8 md:p-12 flex flex-col justify-center bg-black/20">
                    <h3 class="text-2xl font-bold text-white mb-8 border-b border-white/20 pb-4">Headquarters</h3>
                    <div class="space-y-6 text-lg text-gray-200">
                        <div class="flex items-start gap-4"><i class="fa-solid fa-location-dot text-element-gold text-2xl mt-1"></i><div><p class="font-bold text-white">Five Elements Trading</p><p>123, Park Street Area</p><p>Kolkata, West Bengal, 700016</p><p>India</p></div></div>
                        <div class="flex items-center gap-4"><i class="fa-solid fa-phone text-element-gold text-2xl"></i><p>+91 98765 43210</p></div>
                        <div class="flex items-center gap-4"><i class="fa-solid fa-envelope text-element-gold text-2xl"></i><p>contact@fiveelements.com</p></div>
                        <div class="flex items-center gap-4"><i class="fa-solid fa-clock text-element-gold text-2xl"></i><p>Mon - Sat: 10:00 AM - 7:00 PM</p></div>
                    </div>
                </div>
                <div class="p-8 md:p-12">
                    <h3 class="text-2xl font-bold text-white mb-2 drop-shadow-sm">Get in Touch</h3>
                    @if(session('success')) <div class="bg-green-900/60 border border-green-500 text-green-200 px-4 py-3 rounded mb-4">{{ session('success') }}</div> @endif
                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-5">
                        @csrf
                        <div class="grid grid-cols-2 gap-4">
                            <input type="text" name="name" placeholder="Name" required class="w-full bg-space-dark/40 border border-white/20 rounded-lg px-4 py-3 text-white placeholder-gray-300 focus:outline-none focus:border-element-gold focus:bg-space-dark/60 transition-all">
                            <input type="tel" name="phone" placeholder="Phone" class="w-full bg-space-dark/40 border border-white/20 rounded-lg px-4 py-3 text-white placeholder-gray-300 focus:outline-none focus:border-element-gold focus:bg-space-dark/60 transition-all">
                        </div>
                        <input type="email" name="email" placeholder="Email" required class="w-full bg-space-dark/40 border border-white/20 rounded-lg px-4 py-3 text-white placeholder-gray-300 focus:outline-none focus:border-element-gold focus:bg-space-dark/60 transition-all">
                        <textarea name="message" rows="4" placeholder="I am interested in selling/buying..." required class="w-full bg-space-dark/40 border border-white/20 rounded-lg px-4 py-3 text-white placeholder-gray-300 focus:outline-none focus:border-element-gold focus:bg-space-dark/60 transition-all"></textarea>
                        <button type="submit" class="w-full bg-gradient-to-r from-element-gold to-yellow-600 text-black font-bold py-3 rounded-lg shadow-lg hover:shadow-yellow-500/20 transition-all">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-12 border-t border-white/10 text-center relative z-10">
        <div class="flex justify-center items-center gap-2 mb-4">
             <span class="font-bold text-lg text-white">FIVE <span class="text-element-gold">ELEMENTS</span></span>
        </div>
        <p class="text-gray-300 text-sm">© 2026 Five Elements. Licensed for Curio & Metal Trading.</p>
    </footer>

    <div id="confidentialModal" class="fixed inset-0 z-[100] {{ session('is_admin') || session('error') || session('login_success') ? '' : 'hidden' }}">
        <div class="absolute inset-0 bg-space-dark/80 backdrop-blur-sm" onclick="closeModal()"></div>
        
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-full {{ session('is_admin') ? 'max-w-4xl' : 'max-w-2xl' }} px-4 transition-all duration-300">
            
            @if(!session('is_admin'))
                <div id="loginScreen" class="glass-panel p-8 rounded-2xl border border-red-500/30">
                    <div class="text-center mb-8">
                        <i class="fa-solid fa-shield-halved text-4xl text-red-500 mb-4 drop-shadow-lg"></i>
                        <h2 class="text-2xl font-bold text-white drop-shadow-md">Confidential Portal</h2>
                    </div>
                    <form action="{{ route('admin.login') }}" method="POST" class="space-y-4">
                        @csrf
                        <input type="password" name="password" class="w-full bg-black/40 border border-white/20 rounded-lg px-4 py-3 text-white placeholder-gray-400 focus:outline-none focus:border-element-gold" placeholder="Enter secure code...">
                        <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white font-bold py-3 rounded-lg w-full transition-colors shadow-lg">Unlock</button>
                        @if(session('error'))
                            <p class="text-red-400 text-sm text-center font-bold">{{ session('error') }}</p>
                        @endif
                    </form>
                    <button onclick="closeModal()" class="mt-6 text-gray-400 text-sm w-full text-center hover:text-white">Cancel</button>
                </div>
            @else
                <div id="dashboardScreen" class="glass-panel p-8 rounded-2xl border border-green-500/30">
                    
                    <div class="flex justify-between items-center mb-6 pb-6 border-b border-white/20">
                        <h2 class="text-2xl font-bold text-white drop-shadow-md">Secure Repository</h2>
                        <a href="{{ route('admin.logout') }}" class="text-gray-300 hover:text-white text-sm font-bold">Logout</a>
                    </div>

                    <div class="grid md:grid-cols-2 gap-8">
                        <div class="bg-black/20 p-6 rounded-xl border border-white/10">
                            <h3 class="text-lg font-bold text-element-blue mb-4"><i class="fa-solid fa-cloud-arrow-up mr-2"></i> Upload Document</h3>
                            
                            <form action="{{ route('admin.upload') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                                @csrf
                                
                                <div>
                                    <label class="block text-xs text-gray-400 mb-1">Document Name</label>
                                    <input type="text" name="filename" required placeholder="e.g., Certificate of Purity" 
                                           class="w-full bg-space-dark/60 border border-white/20 rounded-lg px-3 py-2 text-white text-sm focus:outline-none focus:border-element-blue">
                                </div>

                                <div class="relative">
                                    <label class="block text-xs text-gray-400 mb-1">Select File</label>
                                    <input type="file" name="file" required class="w-full text-sm text-gray-300 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-element-blue/10 file:text-element-blue hover:file:bg-element-blue/20 cursor-pointer">
                                </div>

                                <button type="submit" class="w-full bg-gradient-to-r from-element-blue to-blue-600 text-black font-bold py-2 rounded-lg shadow-lg hover:shadow-blue-500/20 transition-all text-sm mt-2">
                                    Secure Upload
                                </button>
                            </form>
                        </div>

                        <div class="bg-black/20 p-6 rounded-xl border border-white/10 flex flex-col h-full">
                            <h3 class="text-lg font-bold text-element-gold mb-4"><i class="fa-solid fa-folder-open mr-2"></i> Stored Files</h3>
                            
                            <div class="space-y-2 overflow-y-auto pr-2 custom-scrollbar" style="max-height: 250px;">
                                @forelse($documents as $doc)
                                    <div class="bg-black/30 p-3 rounded-lg flex justify-between items-center hover:bg-black/50 transition-colors group">
                                        <div class="flex items-center gap-3 overflow-hidden">
                                            <i class="fa-regular fa-file text-element-gold shrink-0"></i>
                                            <div class="flex flex-col min-w-0">
                                                <a href="{{ Storage::url($doc->path) }}" target="_blank" class="text-sm text-gray-200 hover:text-white truncate font-medium group-hover:text-element-gold transition-colors">
                                                    {{ $doc->filename }} </a>
                                                <span class="text-[10px] text-gray-500">{{ $doc->created_at->format('M d, Y') }}</span>
                                            </div>
                                        </div>
                                        <a href="{{ Storage::url($doc->path) }}" download class="text-gray-500 hover:text-element-blue ml-2"><i class="fa-solid fa-download"></i></a>
                                    </div>
                                @empty
                                    <p class="text-center text-gray-500 text-sm py-8">No documents found.</p>
                                @endforelse
                            </div>
                        </div>
                    </div>

                </div>
            @endif
        </div>
    </div>

    <script>
        function switchTab(tabName) {
            document.querySelectorAll('.tab-content').forEach(el => el.classList.add('hidden'));
            document.getElementById('content-' + tabName).classList.remove('hidden');

            document.querySelectorAll('.tab-btn').forEach(btn => {
                btn.classList.remove('text-element-gold', 'border-element-gold', 'text-white');
                btn.classList.add('text-gray-500', 'border-transparent');
            });

            const activeBtn = document.getElementById('btn-' + tabName);
            activeBtn.classList.remove('text-gray-500', 'border-transparent');
            activeBtn.classList.add('text-element-gold', 'border-element-gold');
        }

        const modal = document.getElementById('confidentialModal');
        function openModal() { modal.classList.remove('hidden'); }
        function closeModal() { modal.classList.add('hidden'); }
    </script>
</body>
</html>