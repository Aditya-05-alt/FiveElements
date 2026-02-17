<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;
use Illuminate\Support\Facades\Storage;

class MainController extends Controller
{
    public function index()
    {
        return view('welcome'); 
    }

    public function login(Request $request)
    {
        $systemToken = env('ADMIN_ACCESS_TOKEN', 'admin123');

        if ($request->password === $systemToken) {
            session(['is_admin' => true]);
            return redirect()->route('admin.dashboard'); 
        }

        return redirect()->route('home')->with('error', 'Invalid Access Token');
    }

    public function logout()
    {
        session()->forget('is_admin');
        return redirect()->route('home');
    }

    public function dashboard()
    {
        if (!session('is_admin')) {
            return redirect()->route('home')->with('error', 'Please login first');
        }

        $documents = Document::latest()->get();
        return view('dashboard', compact('documents'));
    }

    // --- FIXED UPLOAD FUNCTION ---
    public function upload(Request $request)
    {
        if (!session('is_admin')) {
            return redirect()->route('home');
        }

        $request->validate([
            'filename' => 'required|string|max:255',
            'file' => 'required|file|max:20480', // Max 20MB
        ]);

        // FIX: Store specifically on the 'public' disk
        // This saves the file to storage/app/public/documents
        $path = $request->file('file')->store('documents', 'public');

        Document::create([
            'filename' => $request->filename,
            'path' => $path, // Database now stores: "documents/yourfile.jpg"
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Document uploaded successfully');
    }

    public function storeMessage(Request $request)
    {
        return redirect()->route('home')->with('success', 'Message sent successfully!');
    }
    public function viewDocument($id)
    {
        // 1. Security Check
        if (!session('is_admin')) {
            return redirect()->route('home');
        }

        // 2. Find Database Record
        $document = Document::findOrFail($id);
        
        // 3. Get Physical Path (storage/app/public/...)
        $filePath = storage_path('app/public/' . $document->path);

        // 4. Check if file exists
        if (!file_exists($filePath)) {
            abort(404, 'File not found on server');
        }

        // 5. Return File with "Inline" headers (Forces View)
        return response()->file($filePath);
    }
}
