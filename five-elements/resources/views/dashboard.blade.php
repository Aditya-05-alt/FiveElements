<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Dashboard | Five Elements</title>
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
                    },
                    fontFamily: { sans: ['Inter', 'sans-serif'] },
                },
            },
        }
    </script>
</head>
<body class="bg-gray-900 text-gray-200 font-sans min-h-screen flex flex-col">

    <nav class="w-full bg-black/40 border-b border-white/10 backdrop-blur-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('/assets/brand_logo.png') }}" alt="Logo" class="h-10 w-auto">
                    <span class="text-xl font-bold text-white tracking-wider">SECURE <span class="text-element-gold">REPOSITORY</span></span>
                </div>
                <div>
                    <a href="{{ route('home') }}" class="text-gray-400 hover:text-white mr-6 text-sm">Return to Website</a>
                    <a href="{{ route('admin.logout') }}" class="bg-red-600/80 hover:bg-red-600 text-white px-5 py-2 rounded-full text-sm font-bold transition-all shadow-lg shadow-red-900/20">
                        <i class="fa-solid fa-power-off mr-2"></i> Logout
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <main class="flex-grow max-w-7xl mx-auto w-full px-4 sm:px-6 lg:px-8 py-12">
        
        @if(session('success'))
            <div class="mb-8 bg-green-900/30 border border-green-500/50 text-green-200 px-6 py-4 rounded-xl flex items-center gap-3">
                <i class="fa-solid fa-circle-check text-xl"></i> {{ session('success') }}
            </div>
        @endif

        <div class="grid lg:grid-cols-3 gap-8 h-full">
            
            <div class="lg:col-span-1">
                <div class="bg-white/5 border border-white/10 rounded-2xl p-8 sticky top-8 shadow-2xl">
                    <div class="flex items-center gap-3 mb-6 border-b border-white/10 pb-4">
                        <div class="w-10 h-10 rounded-full bg-element-blue/20 flex items-center justify-center text-element-blue">
                            <i class="fa-solid fa-cloud-arrow-up text-lg"></i>
                        </div>
                        <h2 class="text-xl font-bold text-white">Upload File</h2>
                    </div>
                    
                    <form action="{{ route('admin.upload') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                        @csrf
                        <div>
                            <label class="block text-sm font-medium text-gray-400 mb-2">Document Name</label>
                            <input type="text" name="filename" required placeholder="e.g. Q1 Purity Report" 
                                   class="w-full bg-black/40 border border-white/10 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-element-blue focus:ring-1 focus:ring-element-blue transition-all placeholder-gray-600">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-400 mb-2">Select Document</label>
                            <div class="relative group">
                                <input type="file" name="file" required id="fileInput" 
                                       class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10">
                                <div class="bg-black/40 border border-dashed border-gray-600 rounded-lg p-6 text-center group-hover:border-element-blue transition-colors">
                                    <i class="fa-solid fa-file-import text-3xl text-gray-500 mb-2 group-hover:text-element-blue transition-colors"></i>
                                    <p class="text-sm text-gray-400" id="fileNameDisplay">Click or drag file here</p>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="w-full bg-gradient-to-r from-element-blue to-blue-600 hover:from-blue-400 hover:to-blue-500 text-black font-bold py-3.5 rounded-lg shadow-lg shadow-blue-900/20 transition-all transform hover:-translate-y-0.5">
                            <i class="fa-solid fa-shield-halved mr-2"></i> Secure Upload
                        </button>
                    </form>
                </div>
            </div>

            <div class="lg:col-span-2">
                <div class="bg-white/5 border border-white/10 rounded-2xl p-8 min-h-[500px] shadow-2xl">
                    <div class="flex items-center justify-between mb-6 border-b border-white/10 pb-4">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-element-gold/20 flex items-center justify-center text-element-gold">
                                <i class="fa-solid fa-folder-open text-lg"></i>
                            </div>
                            <h2 class="text-xl font-bold text-white">Repository</h2>
                        </div>
                        <span class="text-xs font-mono text-gray-500 bg-black/30 px-3 py-1 rounded-full border border-white/5">
                            {{ count($documents) }} Files Stored
                        </span>
                    </div>

                    <div class="grid gap-3">
                        @forelse($documents as $doc)
                            @php
                                $downloadUrl = \Illuminate\Support\Facades\Storage::url($doc->path);
                            @endphp

                            <div class="group bg-black/20 hover:bg-black/40 border border-white/5 hover:border-element-gold/30 rounded-xl p-4 flex items-center justify-between transition-all duration-300">
                                <div class="flex items-center gap-4">
                                    <div class="w-10 h-10 rounded-lg bg-gray-800 flex items-center justify-center text-gray-400 group-hover:text-element-gold transition-colors">
                                        <i class="fa-regular fa-file-lines text-xl"></i>
                                    </div>
                                    <div class="overflow-hidden">
                                        <h3 class="text-gray-200 font-medium group-hover:text-white transition-colors truncate max-w-[200px] sm:max-w-md">{{ $doc->filename }}</h3>
                                        <p class="text-xs text-gray-500 mt-0.5 flex items-center gap-2">
                                            <i class="fa-regular fa-clock"></i> {{ $doc->created_at->format('M d, Y • h:i A') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="flex items-center gap-3">
                                    
                                    <a href="{{ route('admin.view', $doc->id) }}" target="_blank" class="w-9 h-9 rounded-full bg-white/5 hover:bg-element-blue hover:text-black flex items-center justify-center text-gray-400 transition-all" title="View">
                                        <i class="fa-solid fa-eye text-sm"></i>
                                    </a>

                                    <a href="{{ $downloadUrl }}" download="{{ $doc->filename }}" class="w-9 h-9 rounded-full bg-white/5 hover:bg-element-gold hover:text-black flex items-center justify-center text-gray-400 transition-all" title="Download">
                                        <i class="fa-solid fa-download text-sm"></i>
                                    </a>
                                </div>
                            </div>
                        @empty
                            <div class="flex flex-col items-center justify-center py-16 text-gray-500">
                                <i class="fa-regular fa-folder-open text-5xl mb-4 opacity-20"></i>
                                <p>No documents found in repository.</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>

        </div>
    </main>
    
    <footer class="text-center py-6 text-gray-600 text-xs border-t border-white/5">
        &copy;© 2026 Five Elements. Licensed for Curio & Metal Trading
    </footer>

    <script>
        document.getElementById('fileInput').addEventListener('change', function(e) {
            const fileName = e.target.files[0]?.name || "Click or drag file here";
            document.getElementById('fileNameDisplay').textContent = fileName;
            document.getElementById('fileNameDisplay').classList.add('text-element-blue');
        });
    </script>
</body>
</html>