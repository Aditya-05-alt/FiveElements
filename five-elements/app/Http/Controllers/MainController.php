<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document; // We will create this model in Step 3
use Illuminate\Support\Facades\Storage;

class MainController extends Controller
{
    // 1. Show the Homepage
    public function index()
    {
        // Fetch all documents from the database (latest first)
        // If the table is empty, this just returns an empty list, preventing errors.
        $documents = Document::latest()->get();

        return view('welcome', compact('documents')); 
    }

    // 2. Handle Admin Login (Check the Token)
    public function login(Request $request)
    {
        // Get the secret token from your .env file
        $systemToken = env('ADMIN_ACCESS_TOKEN', 'admin123'); // Default is admin123 if .env is missing

        if ($request->password === $systemToken) {
            session(['is_admin' => true]); // Save login state
            return redirect()->route('home')->with('login_success', 'Access Granted');
        }

        return redirect()->route('home')->with('error', 'Invalid Access Token');
    }

    // 3. Handle Logout
    public function logout()
    {
        session()->forget('is_admin');
        return redirect()->route('home');
    }

    // 4. Handle File Upload
    public function upload(Request $request)
    {
        // Security check
        if (!session('is_admin')) {
            return redirect()->route('home');
        }

        $request->validate([
            'filename' => 'required|string|max:255',
            'file' => 'required|file|max:20480', // Max 20MB
        ]);

        // Save file to 'storage/app/public/documents'
        $path = $request->file('file')->store('public/documents');

        // Save record to Database
        Document::create([
            'filename' => $request->filename, // The custom name you typed
            'path' => $path,
        ]);

        return redirect()->route('home')->with('success', 'Document uploaded successfully');
    }

    // 5. Handle Contact Form
    public function storeMessage(Request $request)
    {
        // Add your email logic here or just save to DB
        return redirect()->route('home')->with('success', 'Message sent successfully!');
    }
}