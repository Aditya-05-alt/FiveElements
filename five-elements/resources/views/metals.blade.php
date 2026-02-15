<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Precious Metals | 5 Elements</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: { 'space-dark': '#0f172a', 'element-gold': '#fbbf24' },
                    fontFamily: { sans: ['Inter', 'sans-serif'] }
                }
            }
        }
    </script>
    <style>
        .glass-panel {
            background: rgba(30, 41, 59, 0.95);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(251, 191, 36, 0.2);
        }
    </style>
</head>
<body class="bg-space-dark text-gray-200 font-sans">
    
    <div class="relative h-[400px] flex items-center justify-center">
        <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1610375461246-83c48006cbc6?q=80&w=1000')] bg-cover bg-center opacity-30"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-space-dark/80 via-transparent to-space-dark"></div>
        <div class="relative z-10 text-center">
            <h1 class="text-5xl font-bold text-white mb-4">Precious <span class="text-element-gold">Metals</span></h1>
            <p class="text-xl text-gray-300">Purity. Weight. Value.</p>
            <a href="{{ route('home') }}" class="inline-block mt-6 text-gray-400 hover:text-white border-b border-gray-600 pb-1">← Back to Home</a>
        </div>
    </div>

    <div class="max-w-5xl mx-auto px-6 pb-20 -mt-10 relative z-20">
        
        <div class="bg-slate-800/80 backdrop-blur-md p-8 rounded-2xl border border-element-gold/20 shadow-xl mb-16">
            <h2 class="text-2xl font-bold text-white mb-6">Our Valuation Process</h2>
            <div class="space-y-6 text-gray-300 leading-relaxed">
                <p>
                    At 5 Elements, we specialize in the accurate appraisal and purchase of gold, silver, platinum, and palladium. 
                    Whether you have broken jewelry, bullion bars, or scrap industrial metal, our X-ray fluorescence technology ensures 
                    you are paid for exactly what you have.
                </p>
                <div class="flex flex-wrap gap-4 mt-4">
                    <span class="px-3 py-1 rounded-full bg-element-gold/10 text-element-gold text-xs font-bold border border-element-gold/30">XRF Testing</span>
                    <span class="px-3 py-1 rounded-full bg-element-gold/10 text-element-gold text-xs font-bold border border-element-gold/30">Instant Cash</span>
                    <span class="px-3 py-1 rounded-full bg-element-gold/10 text-element-gold text-xs font-bold border border-element-gold/30">Safe & Secure</span>
                </div>
            </div>
        </div>

        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-white">What We <span class="text-element-gold">Trade</span></h2>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            
            <div class="group bg-slate-900 rounded-2xl overflow-hidden border border-gray-800 hover:border-element-gold/50 transition-all duration-300 shadow-lg hover:shadow-[0_0_20px_rgba(251,191,36,0.15)]">
                <div class="h-56 overflow-hidden relative">
                    <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition-colors z-10"></div>
                    <img src="{{ asset('/assets/Gold_Cat.png') }}" alt="Gold Jewelry" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700">
                    <div class="absolute top-4 right-4 z-20 bg-element-gold text-black font-bold text-xs px-2 py-1 rounded">24K - 10K</div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-2 flex items-center gap-2">
                        <i class="fa-solid fa-ring text-element-gold"></i> Gold Jewelry & Scrap
                    </h3>
                    <p class="text-gray-400 text-sm mb-6 h-10">We buy broken chains, mismatch earrings, estate jewelry, and dental gold at top market rates.</p>
                    <button onclick="openValuation('Gold Jewelry')" class="w-full py-3 rounded-lg bg-gray-800 text-gray-300 hover:bg-element-gold hover:text-black font-bold transition-colors border border-gray-700">
                        Get Valuation
                    </button>
                </div>
            </div>

            <div class="group bg-slate-900 rounded-2xl overflow-hidden border border-gray-800 hover:border-gray-400 transition-all duration-300 shadow-lg hover:shadow-[0_0_20px_rgba(209,213,219,0.15)]">
                <div class="h-56 overflow-hidden relative">
                    <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition-colors z-10"></div>
                    <img src="{{ asset('/assets/Silver_Cat.png') }}" alt="Silver Coins" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700">
                    <div class="absolute top-4 right-4 z-20 bg-gray-300 text-black font-bold text-xs px-2 py-1 rounded">.999 - .925</div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-2 flex items-center gap-2">
                        <i class="fa-solid fa-coins text-gray-400"></i> Silver Bullion & Coins
                    </h3>
                    <p class="text-gray-400 text-sm mb-6 h-10">Accepting American Eagles, Maple Leafs, generic rounds, and Sterling Silver flatware.</p>
                    <button onclick="openValuation('Silver')" class="w-full py-3 rounded-lg bg-gray-800 text-gray-300 hover:bg-gray-300 hover:text-black font-bold transition-colors border border-gray-700">
                        Get Valuation
                    </button>
                </div>
            </div>

            <div class="group bg-slate-900 rounded-2xl overflow-hidden border border-gray-800 hover:border-slate-300 transition-all duration-300 shadow-lg hover:shadow-[0_0_20px_rgba(203,213,225,0.15)]">
                <div class="h-56 overflow-hidden relative">
                    <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition-colors z-10"></div>
                    <img src="{{ asset('/assets/platinum_pladium.jpg') }}" alt="Platinum" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700">
                    <div class="absolute top-4 right-4 z-20 bg-slate-400 text-black font-bold text-xs px-2 py-1 rounded">Industrial</div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-2 flex items-center gap-2">
                        <i class="fa-solid fa-gem text-slate-300"></i> Platinum & Palladium
                    </h3>
                    <p class="text-gray-400 text-sm mb-6 h-10">High-value industrial wire, crucible scrap, and luxury platinum wedding bands.</p>
                    <button onclick="openValuation('Platinum')" class="w-full py-3 rounded-lg bg-gray-800 text-gray-300 hover:bg-slate-300 hover:text-black font-bold transition-colors border border-gray-700">
                        Get Valuation
                    </button>
                </div>
            </div>

            <div class="group bg-slate-900 rounded-2xl overflow-hidden border border-gray-800 hover:border-element-gold/50 transition-all duration-300 shadow-lg hover:shadow-[0_0_20px_rgba(251,191,36,0.15)]">
                <div class="h-56 overflow-hidden relative">
                    <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition-colors z-10"></div>
                    <img src="{{ asset('/assets/goldtime.png') }}" alt="Gold Watch" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700">
                    <div class="absolute top-4 right-4 z-20 bg-element-gold text-black font-bold text-xs px-2 py-1 rounded">Luxury</div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-2 flex items-center gap-2">
                        <i class="fa-regular fa-clock text-element-gold"></i> Luxury Gold Timepieces
                    </h3>
                    <p class="text-gray-400 text-sm mb-6 h-10">We trade solid gold Rolex, Omega, and Patek Philippe watches (Box & Papers preferred).</p>
                    <button onclick="openValuation('Luxury Watches')" class="w-full py-3 rounded-lg bg-gray-800 text-gray-300 hover:bg-element-gold hover:text-black font-bold transition-colors border border-gray-700">
                        Get Valuation
                    </button>
                </div>
            </div>

        </div>
    </div>

    <div id="valuationModal" class="fixed inset-0 z-50 hidden">
        <div class="absolute inset-0 bg-black/95 backdrop-blur-sm" onclick="closeValuation()"></div>
        
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-full max-w-md p-4">
            <div class="glass-panel rounded-2xl p-8 relative shadow-[0_0_50px_rgba(251,191,36,0.15)] text-center border border-element-gold">
                
                <button onclick="closeValuation()" class="absolute top-4 right-4 text-gray-400 hover:text-white transition-colors">
                    <i class="fa-solid fa-xmark text-xl"></i>
                </button>

                <div class="w-20 h-20 rounded-full bg-element-gold/10 flex items-center justify-center mx-auto mb-6 border border-element-gold/50 shadow-[0_0_20px_rgba(251,191,36,0.2)] animate-pulse">
                    <i class="fa-solid fa-phone-volume text-3xl text-element-gold"></i>
                </div>

                <h2 class="text-2xl font-bold text-white mb-1">Contact for <span id="metalTitle" class="text-element-gold">Gold</span></h2>
                <p class="text-sm text-gray-400 mb-8">Visit our secure facility or call for an instant quote.</p>

                <div class="bg-slate-900/80 rounded-xl p-5 mb-4 border border-gray-700 hover:border-element-gold transition-colors group">
                    <p class="text-xs text-gray-500 uppercase font-bold tracking-widest mb-2">Direct Line</p>
                    <a href="tel:+919876543210" class="text-2xl font-bold text-white group-hover:text-element-gold transition-colors flex items-center justify-center gap-3">
                        <i class="fa-solid fa-phone text-sm"></i> +91 98765 43210
                    </a>
                </div>

                <div class="bg-slate-900/80 rounded-xl p-5 mb-6 border border-gray-700 hover:border-element-gold transition-colors group">
                    <p class="text-xs text-gray-500 uppercase font-bold tracking-widest mb-2">Secure Vault Location</p>
                    <p class="text-white text-lg leading-relaxed group-hover:text-element-gold transition-colors">
                        <i class="fa-solid fa-location-dot mr-2"></i> 123 Park Street, Kolkata,<br>West Bengal, 700016
                    </p>
                </div>

                <a href="https://maps.google.com" target="_blank" class="block w-full bg-gradient-to-r from-element-gold to-yellow-600 text-black font-bold text-center py-3 rounded-lg hover:shadow-lg hover:shadow-yellow-500/20 transition-all transform hover:-translate-y-1">
                    <i class="fa-solid fa-map-location-dot mr-2"></i> Get Directions
                </a>

            </div>
        </div>
    </div>

    <script>
        const modal = document.getElementById('valuationModal');
        const metalTitle = document.getElementById('metalTitle');

        function openValuation(category) {
            // Update the title dynamically based on what was clicked
            metalTitle.innerText = category;
            modal.classList.remove('hidden');
        }

        function closeValuation() {
            modal.classList.add('hidden');
        }
    </script>

</body>
</html>