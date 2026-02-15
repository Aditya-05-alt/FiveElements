<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rare Antiques | 5 Elements</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: { 'space-dark': '#0f172a', 'element-rose': '#f43f5e' },
                    fontFamily: { sans: ['Inter', 'sans-serif'] }
                }
            }
        }
    </script>
    <style>
        .glass-panel {
            background: rgba(30, 41, 59, 0.95);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(244, 63, 94, 0.2);
        }
    </style>
</head>
<body class="bg-sky-400 text-gray-200 font-sans">
    
    <div class="relative h-[400px] flex items-center justify-center">
        <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1461360370896-922624d12aa1?q=80&w=1000')] bg-cover bg-center opacity-30"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-space-dark/80 via-transparent to-space-dark"></div>
        <div class="relative z-10 text-center">
            <h1 class="text-5xl font-bold text-white mb-4">Timeless <span class="text-element-rose">Antiques</span></h1>
            <p class="text-xl text-gray-300">History. Rarity. Provenance.</p>
            <a href="{{ route('home') }}" class="inline-block mt-6 text-gray-400 hover:text-white border-b border-gray-600 pb-1">← Back to Home</a>
        </div>
    </div>

    <div class="max-w-5xl mx-auto px-6 pb-20 -mt-10 relative z-20">
        
        <div class="bg-slate-800/80 backdrop-blur-md p-8 rounded-2xl border border-element-rose/20 shadow-xl mb-16">
            <h2 class="text-2xl font-bold text-white mb-6">Curated Collections</h2>
            <div class="space-y-6 text-gray-300 leading-relaxed">
                <p>
                    Our antique collection is a journey through time. We focus on items that hold not just monetary value, but historical significance.
                    From Victorian-era jewelry to mid-century modern timepieces, every item at 5 Elements tells a story.
                </p>
                <div class="flex flex-wrap gap-4 mt-4">
                    <span class="px-3 py-1 rounded-full bg-element-rose/10 text-element-rose text-xs font-bold border border-element-rose/30">Expert Appraisal</span>
                    <span class="px-3 py-1 rounded-full bg-element-rose/10 text-element-rose text-xs font-bold border border-element-rose/30">Global Auction Data</span>
                    <span class="px-3 py-1 rounded-full bg-element-rose/10 text-element-rose text-xs font-bold border border-element-rose/30">Instant Payment</span>
                </div>
            </div>
        </div>

        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-white">What We <span class="text-element-rose">Buy & Sell</span></h2>
        </div>

        <div class="grid md:grid-cols-2 gap-8">
            
            <div class="group bg-slate-900 rounded-2xl overflow-hidden border border-gray-800 hover:border-element-rose/50 transition-all duration-300 shadow-lg hover:shadow-[0_0_20px_rgba(244,63,94,0.15)]">
                <div class="h-64 overflow-hidden relative">
                    <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition-colors z-10"></div>
                    <img src="https://images.unsplash.com/photo-1596627689912-3b1a85b9c240?q=80&w=800" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700">
                    <div class="absolute top-4 right-4 z-20 bg-element-rose text-white font-bold text-xs px-2 py-1 rounded">1920s - 1980s</div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-2 flex items-center gap-2">
                        <i class="fa-regular fa-clock text-element-rose"></i> Vintage Horology
                    </h3>
                    <p class="text-gray-400 text-sm mb-6 h-10">Rare mechanical timepieces including Rolex Submariners, Omega Speedmasters, and Cartier Tanks.</p>
                    <button onclick="openValuation('Vintage Watches')" class="w-full py-3 rounded-lg bg-gray-800 text-gray-300 hover:bg-element-rose hover:text-white font-bold transition-colors border border-gray-700">
                        Get Valuation
                    </button>
                </div>
            </div>

            <div class="group bg-slate-900 rounded-2xl overflow-hidden border border-gray-800 hover:border-element-rose/50 transition-all duration-300 shadow-lg hover:shadow-[0_0_20px_rgba(244,63,94,0.15)]">
                <div class="h-64 overflow-hidden relative">
                    <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition-colors z-10"></div>
                    <img src="https://images.unsplash.com/photo-1605518216965-7f39499df5e9?q=80&w=800" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700">
                    <div class="absolute top-4 right-4 z-20 bg-gray-600 text-white font-bold text-xs px-2 py-1 rounded">Pre-1947</div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-2 flex items-center gap-2">
                        <i class="fa-solid fa-coins text-element-rose"></i> Rare Numismatics
                    </h3>
                    <p class="text-gray-400 text-sm mb-6 h-10">British India coinage, Mughal era mohurs, and rare international currency with high grading.</p>
                    <button onclick="openValuation('Rare Coins')" class="w-full py-3 rounded-lg bg-gray-800 text-gray-300 hover:bg-element-rose hover:text-white font-bold transition-colors border border-gray-700">
                        Get Valuation
                    </button>
                </div>
            </div>

            <div class="group bg-slate-900 rounded-2xl overflow-hidden border border-gray-800 hover:border-element-rose/50 transition-all duration-300 shadow-lg hover:shadow-[0_0_20px_rgba(244,63,94,0.15)]">
                <div class="h-64 overflow-hidden relative">
                    <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition-colors z-10"></div>
                    <img src="https://images.unsplash.com/photo-1518709414768-a8c79b438782?q=80&w=800" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700">
                    <div class="absolute top-4 right-4 z-20 bg-purple-600 text-white font-bold text-xs px-2 py-1 rounded">Heirloom</div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-2 flex items-center gap-2">
                        <i class="fa-solid fa-gem text-element-rose"></i> Estate Jewelry
                    </h3>
                    <p class="text-gray-400 text-sm mb-6 h-10">Victorian, Art Deco, and Edwardian pieces. We value the craftsmanship, not just the metal weight.</p>
                    <button onclick="openValuation('Estate Jewelry')" class="w-full py-3 rounded-lg bg-gray-800 text-gray-300 hover:bg-element-rose hover:text-white font-bold transition-colors border border-gray-700">
                        Get Valuation
                    </button>
                </div>
            </div>

            <div class="group bg-slate-900 rounded-2xl overflow-hidden border border-gray-800 hover:border-element-rose/50 transition-all duration-300 shadow-lg hover:shadow-[0_0_20px_rgba(244,63,94,0.15)]">
                <div class="h-64 overflow-hidden relative">
                    <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition-colors z-10"></div>
                    <img src="https://images.unsplash.com/photo-1615800098779-1be32e60cca3?q=80&w=800" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700">
                    <div class="absolute top-4 right-4 z-20 bg-red-800 text-white font-bold text-xs px-2 py-1 rounded">Ceramics</div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-2 flex items-center gap-2">
                        <i class="fa-solid fa-dragon text-element-rose"></i> Asian Artifacts
                    </h3>
                    <p class="text-gray-400 text-sm mb-6 h-10">Chinese Ming vases, Japanese swords (Katana), and intricate ivory-alternative carvings.</p>
                    <button onclick="openValuation('Asian Artifacts')" class="w-full py-3 rounded-lg bg-gray-800 text-gray-300 hover:bg-element-rose hover:text-white font-bold transition-colors border border-gray-700">
                        Get Valuation
                    </button>
                </div>
            </div>

            <div class="group bg-slate-900 rounded-2xl overflow-hidden border border-gray-800 hover:border-element-rose/50 transition-all duration-300 shadow-lg hover:shadow-[0_0_20px_rgba(244,63,94,0.15)]">
                <div class="h-64 overflow-hidden relative">
                    <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition-colors z-10"></div>
                    <img src="https://images.unsplash.com/photo-1599839572628-36376936f3ef?q=80&w=800" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700">
                    <div class="absolute top-4 right-4 z-20 bg-green-900 text-white font-bold text-xs px-2 py-1 rounded">WWI & WWII</div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-2 flex items-center gap-2">
                        <i class="fa-solid fa-medal text-element-rose"></i> Historic Militaria
                    </h3>
                    <p class="text-gray-400 text-sm mb-6 h-10">War medals, ceremonial swords, vintage uniforms, and field gear from major global conflicts.</p>
                    <button onclick="openValuation('Militaria')" class="w-full py-3 rounded-lg bg-gray-800 text-gray-300 hover:bg-element-rose hover:text-white font-bold transition-colors border border-gray-700">
                        Get Valuation
                    </button>
                </div>
            </div>

            <div class="group bg-slate-900 rounded-2xl overflow-hidden border border-gray-800 hover:border-element-rose/50 transition-all duration-300 shadow-lg hover:shadow-[0_0_20px_rgba(244,63,94,0.15)]">
                <div class="h-64 overflow-hidden relative">
                    <div class="absolute inset-0 bg-black/20 group-hover:bg-transparent transition-colors z-10"></div>
                    <img src="https://images.unsplash.com/photo-1576504677634-06b71343d327?q=80&w=800" class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700">
                    <div class="absolute top-4 right-4 z-20 bg-yellow-700 text-white font-bold text-xs px-2 py-1 rounded">Bronze/Canvas</div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-2 flex items-center gap-2">
                        <i class="fa-solid fa-paintbrush text-element-rose"></i> Fine Art & Bronze
                    </h3>
                    <p class="text-gray-400 text-sm mb-6 h-10">Classic oil paintings, bronze busts, and marble sculptures from renowned Indian and European artists.</p>
                    <button onclick="openValuation('Fine Art')" class="w-full py-3 rounded-lg bg-gray-800 text-gray-300 hover:bg-element-rose hover:text-white font-bold transition-colors border border-gray-700">
                        Get Valuation
                    </button>
                </div>
            </div>

        </div>
    </div>

    <div id="valuationModal" class="fixed inset-0 z-50 hidden">
        <div class="absolute inset-0 bg-black/95 backdrop-blur-sm" onclick="closeValuation()"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-full max-w-md p-4">
            <div class="glass-panel rounded-2xl p-8 relative shadow-[0_0_50px_rgba(244,63,94,0.15)] text-center border border-element-rose">
                
                <button onclick="closeValuation()" class="absolute top-4 right-4 text-gray-400 hover:text-white transition-colors">
                    <i class="fa-solid fa-xmark text-xl"></i>
                </button>

                <div class="w-20 h-20 rounded-full bg-element-rose/10 flex items-center justify-center mx-auto mb-6 border border-element-rose/50 shadow-[0_0_20px_rgba(244,63,94,0.2)] animate-pulse">
                    <i class="fa-solid fa-phone-volume text-3xl text-element-rose"></i>
                </div>

                <h2 class="text-2xl font-bold text-white mb-1">Contact for <span id="itemTitle" class="text-element-rose">Item</span></h2>
                <p class="text-sm text-gray-400 mb-8">Antiques require in-person inspection. Visit us today.</p>

                <div class="bg-slate-900/80 rounded-xl p-5 mb-4 border border-gray-700 hover:border-element-rose transition-colors group">
                    <p class="text-xs text-gray-500 uppercase font-bold tracking-widest mb-2">Direct Line</p>
                    <a href="tel:+919876543210" class="text-2xl font-bold text-white group-hover:text-element-rose transition-colors flex items-center justify-center gap-3">
                        <i class="fa-solid fa-phone text-sm"></i> +91 98765 43210
                    </a>
                </div>

                <div class="bg-slate-900/80 rounded-xl p-5 mb-6 border border-gray-700 hover:border-element-rose transition-colors group">
                    <p class="text-xs text-gray-500 uppercase font-bold tracking-widest mb-2">Secure Vault Location</p>
                    <p class="text-white text-lg leading-relaxed group-hover:text-element-rose transition-colors">
                        <i class="fa-solid fa-location-dot mr-2"></i> 123 Park Street, Kolkata,<br>West Bengal, 700016
                    </p>
                </div>

                <a href="https://maps.google.com" target="_blank" class="block w-full bg-gradient-to-r from-element-rose to-red-900 text-white font-bold text-center py-3 rounded-lg hover:shadow-lg hover:shadow-red-500/20 transition-all transform hover:-translate-y-1">
                    <i class="fa-solid fa-map-location-dot mr-2"></i> Get Directions
                </a>

            </div>
        </div>
    </div>

    <script>
        const modal = document.getElementById('valuationModal');
        const itemTitle = document.getElementById('itemTitle');

        function openValuation(category) {
            itemTitle.innerText = category;
            modal.classList.remove('hidden');
        }

        function closeValuation() {
            modal.classList.add('hidden');
        }
    </script>

</body>
</html>