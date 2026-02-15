<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;
use App\Models\Message;
use Illuminate\Support\Facades\Storage;

class MainController extends Controller
{
    // 1. Show the Homepage (with data)
    public function index()
    {
        // Get documents ONLY if logged in
        $documents = [];
        if (session('is_admin')) {
            $documents = Document::latest()->get();
        }
        
        return view('welcome', compact('documents'));
    }

    // 2. Handle Contact Form
    public function storeMessage(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        Message::create($request->all());

        return back()->with('success', 'Message sent successfully!');
    }

    // 3. Confidential Login
    public function login(Request $request)
    {
        if ($request->password === 'admin') { // Simple password check
            session(['is_admin' => true]);
            return back()->with('login_success', 'Access Granted');
        }
        return back()->with('error', 'Invalid Access Key');
    }

    // 4. Logout
    public function logout()
    {
        session()->forget('is_admin');
        return back();
    }

    public function metals()
    {
        return view('metals');
    }

    public function antiques()
    {
        return view('antiques');
    }

    // 5. Upload Document
    public function upload(Request $request)
    {
        if (!session('is_admin')) {
            return back(); // Security check
        }

        $request->validate(['file' => 'required|mimes:pdf,jpg,png,doc|max:10000']);

        $path = $request->file('file')->store('public/documents');
        
        Document::create([
            'filename' => $request->file('file')->getClientOriginalName(),
            'path' => str_replace('public/', '', $path) // Fix path for storage link
        ]);

        return back()->with('upload_success', 'Document Stored Securely');
    }
}