<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $messages = ContactMessage::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.messages.index', compact('messages'));
    }

    public function show($id)
    {
        $message = ContactMessage::findOrFail($id);

        // Mark as read if not already read
        if (!$message->read_at) {
            $message->update(['read_at' => now()]);
        }

        return view('admin.messages.show', compact('message'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:5000',
        ]);

        ContactMessage::create($request->only(['name', 'email', 'subject', 'message']));

        if ($request->wantsJson()) {
            return response()->json(['success' => true, 'message' => 'Pesan berhasil dikirim.'], 200);
        }

        return redirect()->back()->with('success', 'Pesan berhasil dikirim.');
    }

    public function markAsRead($id)
    {
        $message = ContactMessage::findOrFail($id);
        $message->update(['read_at' => now()]);

        return response()->json(['success' => true]);
    }
}
